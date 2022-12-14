<?php

trait WeightCalc
{
    public $number;
    public $unit;

    public function getWeight($number, $unit)
    {
        if (!is_int($number)) {
            throw new Exception('Non hai inserito un numero');
        } else {
            return $number . $unit;
        }
    }
}