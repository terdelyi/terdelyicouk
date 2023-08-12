---
title: "WordPress tip: Searching for a keyword in post titles or meta query values"
description: "WordPress is an old school, straightforward CMS, but it also could be a real pain in the ass for common tasks like searching. By default, WP Query searches for keywords which appears in the title and meta values at the same time. You can't pick one or other. Of course there's a few workarounds, but I have a dead simple trick for you."
date: "2020-05-27"
tags: ['WordPress']
image: '/posts/search-for-title-or-meta-values-in-wordpress.png'
---
## How does searching work in WP Query?

If you let me to use a strictly MVC term in an event driven system WP Query is basically the router of WordPress. Hidden behind the nice and clean permalinks WordPress loads posts and run search queries through query strings. By using `s=` in the URL like `https://myawesomewpsite.com/?s=Geronimo` it will search for posts which has the phrase "Geronimo" in their title, excerpt and content.

You can extend this circle to also search in the `wp_postmeta` table:

```php
<?php
function my_theme_customize_search($query) {
    // Specify the query we want to change: the search in the front-end
    if (! $query->is_admin() && $query->is_main_query() && $query->is_search()) {
        // Change some query parameters
        $query->set( 'posts_per_page', 10 );
        $query->set( 'post_type', ['page', 'post'] );

        // Search in meta values
        $meta_query_args = array(
            array(
                'key' => 'battle_cries',
                'compare' => '=',
                'value' => $query->get('s'),
            ),
        );
        $query->set( 'meta_query', $meta_query_args );
    }
}
add_action( 'pre_get_posts', 'my_theme_customize_search' );
```

But the problem is you won't see any results. If you're using [debugging tools like Query Monitor](https://querymonitor.com/) you can easily check the generated WHERE clause:

```sql
AND (
  (
    (wp_posts.post_title LIKE '%Geronimo%')
    OR (wp_posts.post_excerpt LIKE '%Geronimo%')
    OR (wp_posts.post_content LIKE '%Geronimo%')
  )
)
AND (
  (
    wp_postmeta.meta_key LIKE 'battle_cries'
    AND wp_postmeta.meta_value = 'Geronimo' ) )
    AND wp_posts.post_type IN ('page', 'post')
    AND (wp_posts.post_status = 'publish')
  )
)
```

See that AND relation between the two condition groups? That should be an OR. If we extended the `pre_get_posts` with the hook above WP Query will search for posts which has the keyword in the title, the excerpt or the content and in a meta value by a given key which is obviously a very rare match. So, now we understand the problem, isn't just a setting somewhere? Unfortunately not, you are not allowed to change it. Just look for a function called `get_sql_clauses()` in `wp-includes/class-wp-meta-query.php`:

```php
<?php
protected function get_sql_clauses() {
    /*
     * $queries are passed by reference to get_sql_for_query() for recursion.
     * To keep $this->queries unaltered, pass a copy.
     */
    $queries = $this->queries;
    $sql     = $this->get_sql_for_query( $queries );

    if ( ! empty( $sql['where'] ) ) {
        $sql['where'] = ' AND ' . $sql['where'];
    }

    return $sql;
}
```

[Most conversations on Stack Exchange](https://wordpress.stackexchange.com/questions/229003/filter-by-title-content-and-meta-key-at-the-same-time) mention things like running two post queries and merge the results into one array. Others recommend creating a unique query variable and replace the role of the `s=` by [defining your own search conditions](https://jboullion.com/search-post-title-and-meta/) in the `posts_where` hook where you basically write a different search feature for posts.

## My solution

It's basically a hack, but ignores all the overdrawn above. I would basically override the meta SQL query by using the `get_meta_sql` hook and replace the first and only the first occurrence of the **AND** relation to an **OR**. I used `preg_replace`, because the meta SQL query surprisingly has line breaks in it.

```php
<?php
function my_theme_modify_meta_sql(
    $sql,
    $queries,
    $type,
    $primary_table,
    $primary_id_column,
    $context
): {
    if ( $context !== null && $context->is_search() ) {
        $sql['where'] = preg_replace( '/AND/', 'OR', $sql['where'], 1 );
    }

    return $sql;
}
add_filter( 'get_meta_sql', 'my_theme_modify_meta_sql', 10, 6 );
```

It might not the most bulletproof option, however unless core developers won't add a filter for it is the simplest solution which saves you from additional a database queries.
