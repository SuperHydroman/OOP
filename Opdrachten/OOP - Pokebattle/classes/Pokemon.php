<?php

class Pokemon
{
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $weakness;
    protected $resistance;

    public function __construct($name, $energyType)
    {
        $this->name = $name;
        $this->energyType = $energyType;
    }

    public function getResult()
    {
        echo $this->name . " :::: " .$this->energyType . "<br>";
    }

}