<?php
include_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/WeightCalc.php';
class Product
{
    use WeightCalc;
    public $pic;
    public $name;
    public $producer;
    public $barcode;
    public $category;
    public $price;

    function __construct($_pic, $_name, $_producer, $_barcode, Category $_category, $_price)
    {
        $this->pic = $_pic;
        $this->name = $_name;
        $this->producer = $_producer;
        $this->barcode = $_barcode;
        $this->category = $_category;
        $this->price = $_price;
    }



}