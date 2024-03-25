<?php

use Terdelyi\Phanstatic\Config\ConfigBuilder;

$baseUrl = getenv('ENV') === 'production' ? getenv('URL') : getenv('DEPLOY_URL') ?? 'http://localhost:8000';

return (new ConfigBuilder)
    ->setBaseUrl($baseUrl)
    ->setTitle('Tamas Erdelyi')
    ->addCollection('posts', 'Posts', 'posts', 10)
    ->build();