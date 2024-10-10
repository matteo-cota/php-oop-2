<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public function __construct($title, $price, $image, Category $category)
    {
        parent::__construct($title, $price, $image, $category);
    }
}