<?php

require_once 'Product.php';

class Toy extends Product
{
    public function __construct($title, $price, $image, Category $category)
    {
        parent::__construct($title, $price, $image, $category);
    }
}