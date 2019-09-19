<?php

use app\engine\Db;

//use app\models\Cart;
//use app\models\Order;
//use app\models\Product;
//use app\models\User;
use app\models\{Cart, Order, Product, User};

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$db = new Db();

$product = new Product($db);
echo $product->getOne(3);

$user = new User($db);
echo $user->getAll();

$cart = new Cart($db);
echo $cart->getOne(4);

$order = new Order($db);
echo $order->getOne(5);