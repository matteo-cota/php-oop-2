<?php
require_once 'Category.php';

class Product
{
    protected $title;
    protected $price;
    protected $image;
    protected $category;

    public function __construct($title, $price, $image, Category $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getCategory()
    {
        return $this->category;
    }
}