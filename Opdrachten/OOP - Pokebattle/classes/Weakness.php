<?php

class Weakness
{
    public $type;
    public $mult;

    public function __construct($type, $mult)
    {
     $this->type = $type;
     $this->mult = $mult;
    }
}