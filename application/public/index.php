<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Router;
$app = new Router();

$app->get('/', function () {
    return \App\Controller\IndexController::index();
});

$app->get('/clients', function () {
    return \App\Controller\ClientController::index();
});

$app->get('/clients/create', function () {
    return \App\Controller\ClientController::create();
});

$app->post('/clients/create', function () {
    return \App\Controller\ClientController::store();
});

$app->get('/clients/delete', function () {
    return \App\Controller\ClientController::destroy();
});

$app->get('/debts', function () {
    return \App\Controller\DebtController::index();
});

$app->get('/debts/create', function () {
    return \App\Controller\DebtController::create();
});

$app->post('/debts/create', function () {
    return \App\Controller\DebtController::store();
});

$app->get('/debts/delete', function () {
    return \App\Controller\DebtController::destroy();
});

$app->run();