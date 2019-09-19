<?php


namespace app\models;


class Basket extends Model
{
    private $id;
    private $session_id;
    private $product_id;

    /**
     * Basket constructor.
     * @param $session_id
     * @param $product_id
     */
    public function __construct($session_id, $product_id)
    {
        $this->session_id = $session_id;
        $this->product_id = $product_id;
    }


    public function getTableName()
    {
        return 'basket';
    }

}