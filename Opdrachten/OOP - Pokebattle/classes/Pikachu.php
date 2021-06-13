<?php


class Pikachu extends Pokemon
{
    public function __construct($energyType)
    {
        $name = "Pikachu";
        $hitpoints = 35;
        parent::__construct($name, $energyType, $hitpoints);
    }
}