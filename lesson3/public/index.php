<?php

use app\engine\Db;

use app\models\{Basket, Order, Product, User};

include $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/../engine/Autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product('Торт', 'Вкусный', 500);
$product->insert();
var_dump($product);

//$user = new User();
//var_dump($user->getAll());

//$basket = new Basket();
//echo $basket->getOne(1);
//
//$order = new Order();
//echo $order->getOne(1);
//
//echo ROOT_DIR;