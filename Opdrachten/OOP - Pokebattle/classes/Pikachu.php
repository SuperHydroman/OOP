<?php

class Pikachu extends Pokemon
{
    public function __construct()
    {
        $name = "Pikachu";
        $energyType = "Electric";
        $hitpoints = 60;
        $health = $hitpoints;
        $weakness = new Weakness("Fire", 1.5);
        $resistance = new Resistance("Fighting", 20);
        $moves = [new Move("Electring Ring", 50), new Move("Pika Punch", 20)];

        parent::__construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $moves);
    }
}