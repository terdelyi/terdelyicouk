<?php

use Terdelyi\Phanstatic\Models\Config;
use Terdelyi\Phanstatic\Models\CollectionConfig;

if (getenv('ENV') === 'production') {
    $baseUrl = getenv('URL');
} else {
    $baseUrl = getenv('DEPLOY_URL') ? getenv('DEPLOY_URL') : 'http://localhost:8000';
}

return new Config(
    baseUrl: $baseUrl,
    title: 'Tamas Erdelyi',
    collections: [
        'posts' => new CollectionConfig(
            title: 'Posts',
            slug: 'posts',
            pageSize: 10,
        )
    ]
);