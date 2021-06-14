<?php

class Charmeleon extends Pokemon
{
    public function __construct()
    {
        $name = "Charmeleon";
        $energyType = "Fire";
        $hitpoints = 60;
        $health = $hitpoints;
        $weakness = new Weakness("Water", 2);
        $resistance = new Resistance("Electric", 10);
        $moves = [new Move("Head Butt", 10), new Move("Flare", 30)];

        parent::__construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $moves);
    }
}