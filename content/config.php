<?php

use Terdelyi\Phanstatic\Config\ConfigBuilder;

if (getenv('ENV') === 'production') {
    $baseUrl = getenv('URL');
} else {
    $baseUrl = getenv('DEPLOY_URL') ? getenv('DEPLOY_URL') : 'http://localhost:8000';
}

return (new ConfigBuilder)
    ->setBaseUrl($baseUrl)
    ->setTitle('Tamas Erdelyi')
    ->addCollection(
        'posts',
        'Posts',
        'posts',
        10
    )
    ->build();