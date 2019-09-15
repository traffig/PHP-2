<?php


namespace app\models;


class Cart extends Model
{
    private $id;
    private $quantity;
    private $total_price;

    public function getTableName()
    {
        return 'cart';
    }

}