<?php
//include 'Goods.class.php';
include 'SpecificationsGoods.class.php';

$goods1 = new SpecificationsGoods('Смартфон', 'iPhone X', 40000, 174, 71, 144, 'Смартфон компании Apple.');
$goods1->addGoodsToBasket();
$goods1->viewSpecifications();