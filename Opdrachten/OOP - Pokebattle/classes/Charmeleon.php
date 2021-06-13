<?php
/**
 * Created by PhpStorm.
 * User: gvdhe
 * Date: 8-6-2021
 * Time: 09:29
 */

class Charmeleon extends Pokemon
{
    public function __construct($energyType)
    {
        $name = "Charmeleon";
        $hitpoints = 58;
        parent::__construct($name, $energyType, $hitpoints);
    }
}