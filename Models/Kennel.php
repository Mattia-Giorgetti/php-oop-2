<?php
include_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $size;

    function __construct($_name, $_producer, $_barcode, Category $_category, $_size)
    {
        parent::__construct($_name, $_producer, $_barcode, Category $_category);
        $this->size = $_size;
    }
}