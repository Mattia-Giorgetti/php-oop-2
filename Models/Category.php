<?php
require_once __DIR__ . '/../Traits/WeightCalc.php';
class Category
{
    use WeightCalc;
    public $petType;

    function __construct(string $_petType)
    {
        $this->petType = $_petType;
    }
}