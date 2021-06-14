<?php

class Pokemon
{
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $weakness;
    protected $resistance;
    protected $moves;
    private static $pokemonCount = 0;

    public function __construct($name, $energyType, $hitpoints = 60, $health, $weakness, $resistance, $moves)
    {
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->energyType = $energyType;
        $this->moves = $moves;
        $this->health = $health;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->moves = $moves;

        Pokemon::$pokemonCount++;
    }

    public function getResult()
    {
        echo $this->name . " :: " . $this->health . " :: " .$this->energyType . "<br>";
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

    public function getMoves()
    {
       return $this->moves;
    }

    public static function getPopulation()
    {
        return Pokemon::$pokemonCount;
    }

    public function attack($target, $move)
    {
        if ($target->weakness->type == $this->energyType)
        {
            if ($target->resistance->type == $this->energyType)
            {
                $damage = ($move->damage * $target->weakness->mult) - $target->resistance->resValue;
                if ($damage < 0)
                {
                    $damage = 0;
                    return $damage;
                }
                $target->health = $target->health - $damage;
                return $damage;
            }
            else {
                $damage = $move->damage * $target->weakness->mult;
                $target->health = $target->health - $damage;
                return $damage;
            }
        }
        else
        {
            if ($target->resistance->type == $this->energyType)
            {
                $damage = $move->damage - $target->resistance->resValue;
                if ($damage < 0)
                {
                    $damage = 0;
                    return $damage;
                }
                $target->health = $target->health - $damage;
                return $damage;
            }
            else
            {
                $damage = $move->damage;
                if ($damage < 0)
                {
                    $damage = 0;
                    return $damage;
                }
                $target->health = $target->health - $damage;
                return $damage;
            }
        }
    }
}