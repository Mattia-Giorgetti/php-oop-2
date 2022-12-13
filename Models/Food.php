<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $foodType;
    public $taste;
    public $expireDate;

    function __construct($_name, $_producer, $_barcode, Category $_category, $_foodType, $_taste, $_expireDate)
    {
        parent::__construct($_name, $_producer, $_barcode, Category $_category);
        $this->foodType = $_foodType;
        $this->taste = $_taste;
        $this->expireDate = $_expireDate;
    }
}