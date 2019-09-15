<?php


class Goods
{

    private $category;
    private $name;
    private $price;

    /**
     * Goods.class constructor.
     * @param $category
     * @param $name
     * @param $price
     */
    public function __construct($category, $name, $price)
    {
        $this->setCategory($category);
        $this->setName($name);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addGoodsToBasket()
    {
        echo '<br>Товар ' . $this->getName() . ' из категории ' . $this->getCategory() . ' по цене ' . $this->getPrice() . ' руб. добавлен в корзину.<br>';
    }
}