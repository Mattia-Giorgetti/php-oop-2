<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $material;
    public $isEdible;

    function __construct($_name, $_producer, $_barcode, Category $_category, string $_material, bool $_isEdible)
    {
        parent::__construct($_name, $_producer, $_barcode, Category $_category);
        $this->material = $_material;
        $this->isEdible = $_isEdible;
    }
}