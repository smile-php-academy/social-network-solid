<?php

include __DIR__.'/../vendor/autoload.php';

$app = new \App\Application();
$app->addSocialNetwork('facebook', new \App\SocialNetwork\Facebook());

$app->publish('facebook', new \App\Post('Test Content'));
