<?php

use app\engine\Db;
use app\models\Cart;
use app\models\Order;
use app\models\Product;
use app\models\User;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());
echo $product->getOne(3);

$user = new User(new Db());
echo $user->getAll();

$cart = new Cart(new Db());
echo $cart->getOne(4);

$order = new Order(new Db());
echo $order->getOne(5);