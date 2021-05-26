<?php

require_once "init.php";    // Initializes all classes.

$p1 = new Pokemon("Pikachu", "Lightning");
$p2 = new Pokemon("Bulbasaur", "Grass");
$p3 = new Pokemon("Charmeleon", "Fire");
$p4 = new Pokemon("Squirtle", "Water");
$p5 = new Pokemon("Charmander", "Fire");

$p1->getResult();
$p2->getResult();
$p3->getResult();
$p4->getResult();
$p5->getResult();