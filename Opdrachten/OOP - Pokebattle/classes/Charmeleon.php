<?php

class Charmeleon extends Pokemon
{
    public function __construct($username)
    {
        $name = "Charmeleon";
        $energyType = self::TYPE_FIRE;
        $hitpoints = 60;
        $health = $hitpoints;
        $weakness = new Weakness(self::TYPE_WATER, 2);
        $resistance = new Resistance(self::TYPE_ELECTRIC, 10);
        $moves = [new Move("Head Butt", 10), new Move("Flare", 30)];

        parent::__construct($name, $username, $energyType, $hitpoints, $health, $weakness, $resistance, $moves);
    }
}