<?php

// Routes
$app->get('/', 'App\Controller\HomeController:index')
    ->setName('homepage');
$app->get('/test', 'App\Controller\HomeController:test')
    ->setName('test');