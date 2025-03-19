<?php

// interface in PHP
// interface is implemented multiple inhertiance

interface Soups
{
    const ORDER_NO = 2314;
    public function orderSoup();
}

interface Breads extends Soups
{
    const OUANTITY=2;
    public function breadType();
}

class HealthyFood implements Breads
{
    public function orderSoup()
    {
        echo  "You have order a Toamato and Chesse Soup<br>";
        echo "Your order number is :".Soups :: ORDER_NO;
    }

    public function breadType()
    {
        echo "<br> You have ordered a Bruger Bread.";
        echo "<br> of quantity :". Breads::OUANTITY;
    }
}

$food = new HealthyFood();

$food->orderSoup();
$food->breadType();

// $food2 = HealthyFood:: ORDER_NO;

?>