<?php

class Food
{
    use ImageHandler;

    private $title;
    private $price;
    private $imageUrl;
    private $category;

    public function __construct($title, $price, $imageUrl, Category $category)
    {
        if (!$this->validateImage($imageUrl)) {
            throw new InvalidProductException("URL dell'immagine non valido");
        }

        $this->title = $title;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
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
        return $this->imageUrl;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getId()
    {

        return $this->title;
    }
}
