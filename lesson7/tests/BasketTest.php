<?php


namespace app\tests;

use app\models\repositories\BasketRepository;
use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase
{
    public function testGetBasket()
    {
        $basket = new BasketRepository(session_id());
        $this->assertNotNull($basket);
        $this->assertIsObject($basket);
    }
}