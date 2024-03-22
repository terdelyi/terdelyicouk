<?php

return [

    'site' => [
        'baseUrl' => getenv('DEPLOY_URL') ?: 'http://localhost:8000',
        'title' => 'Tamas Erdelyi',
    ],

    'collections' => [
        'posts' => [
            'title' => 'Posts',
            'slug' => 'posts',
            'page_size' => 10,
        ],
    ],

];