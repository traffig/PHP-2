<?php

namespace app\controllers;

use app\models\Basket;
use app\models\Product;

class BasketController extends Controller
{

    public function actionIndex() {
        echo $this->render('index');
    }

    public function actionGetBasket() {
        $id = $_GET['id'];
        $basket = Basket::getOne($id);
        echo $this->render('basket', ['basket' => $basket]);
    }



}