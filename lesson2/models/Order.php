<?php


namespace app\models;


class Order extends Model
{
    private $id;
    private $name;
    private $quantity;
    private $total_price;
    private $status;

    public function getTableName()
    {
        return 'order';
    }

}