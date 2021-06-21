<?php

class Pikachu extends Pokemon
{
    public function __construct($username)
    {
        $name = "Pikachu";
        $energyType = self::TYPE_ELECTRIC;
        $hitpoints = 60;
        $health = $hitpoints;
        $weakness = new Weakness(self::TYPE_FIRE, 1.5);
        $resistance = new Resistance(self::TYPE_FIGHTING, 20);
        $moves = [new Move("Electring Ring", 50), new Move("Pika Punch", 20)];

        parent::__construct($name, $username, $energyType, $hitpoints, $health, $weakness, $resistance, $moves);
    }
}