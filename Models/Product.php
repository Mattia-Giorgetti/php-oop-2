<?php
include_once __DIR__ . '/Category.php';

class Product
{
    public $name;
    public $producer;
    public $barcode;
    public $category;
    public $price;

    function __construct($_name, $_producer, $_barcode, Category $_category, $_price)
    {
        $this->name = $_name;
        $this->producer = $_producer;
        $this->barcode = $_barcode;
        $this->category = $_category;
        $this->price = $_price;
    }



}