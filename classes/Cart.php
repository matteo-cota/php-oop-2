<?php

class Cart
{
    private $items = [];

    public function addProduct($product)
    {
        if (!isset($this->items[$product->getId()])) {
            $this->items[$product->getId()] = [
                'product' => $product,
                'quantity' => 0,
            ];
        }
        $this->items[$product->getId()]['quantity']++;
    }

    public function removeProduct($productId)
    {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }
        return $total;
    }
}
