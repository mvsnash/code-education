<?php
require_once __DIR__ . '/../config/bootstrap.php';

$prod = new APIsSilex\ProductsDb\Controllers\ProductsController();
$app->mount('/', $prod->connect($app));

$prod = new \APIsSilex\ProductsApi\Controllers\ProductsCtlApi();
$app->mount('/api/produtos/', $prod->connect($app));


$app->run();
