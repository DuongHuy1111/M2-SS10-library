<?php


class Book
{
    public $bookName;
    public $describe;
    public $quantity;
    public $category;

    public function __construct($bookName, $describe, $quantity, $category)
    {
        $this->bookName = $bookName;
        $this->describe = $describe;
        $this->quantity = $quantity;
        $this->category = $category;
    }
}