<?php

class Resistance
{
    public $type;
    public $resValue;

    public function __construct($type, $resValue)
    {
        $this->type = $type;
        $this->resValue = $resValue;
    }
}