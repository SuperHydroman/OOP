<?php

class Pokemon
{
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $weakness;
    protected $resistance;

    public function __construct($name, $energyType, $hitpoints = 60)
    {
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->energyType = $energyType;
    }

    public function getResult()
    {
        echo $this->name . " :: " . $this->hitpoints . " :: " .$this->energyType . "<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEnergyType()
    {
        return $this->energyType;
    }

    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    public function getHealth()
    {
        return $this->health;
    }
    public function getWeakness()
    {
        return $this->weakness;
    }

    public function getResistance()
    {
        return $this->resistance;
    }
}