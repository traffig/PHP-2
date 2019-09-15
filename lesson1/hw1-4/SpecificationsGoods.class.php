<?php
include "Goods.class.php";

class SpecificationsGoods extends Goods
{
    private $weight;
    private $width;
    private $height;
    private $description;

    /**
     * SpecificationsGoods constructor.
     * @param $weight
     * @param $width
     * @param $height
     * @param $description
     */
    public function __construct($category, $name, $price, $weight, $width, $height, $description)
    {
        parent:: __construct($category, $name, $price);
        $this->setWeight($weight);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setDescription($description);
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function viewSpecifications()
    {
        echo '<br>Характеристики товара ' . $this->getName()
            . '<br>Высота: ' . $this->getHeight() . ' мм'
            . '<br>Ширина: ' . $this->getWidth() . ' мм'
            . '<br>Вес: ' . $this->getWeight() . ' г'
            . '<br>Описание: ' . $this->getDescription();
    }
}