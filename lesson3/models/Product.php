<?php

namespace app\models;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;

    /**
     * Product constructor.
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($name = '', $description = '', $price = '')
    {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    public function getTableName()
    {
        return 'products';
    }

}