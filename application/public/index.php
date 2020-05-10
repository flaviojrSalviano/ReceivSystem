<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Router;
$app = new Router();

$app->get('/', function () {
    return \App\Controller\IndexController::index();
});

$app->run();