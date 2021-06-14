<?php

require_once "init.php";    // Initializes all classes.

$p1 = new Pikachu();
$p2 = new Charmeleon();

$p2->getResult();
$p1->attack($p2, $p1->getMoves()[0]);
$p2->getResult();
echo "<br>";
$p1->getResult();
$p2->attack($p1, $p2->getMoves()[1]);
$p1->getResult();

echo Pokemon::getPopulation();