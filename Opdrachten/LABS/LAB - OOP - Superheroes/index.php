<?php

require "Superhero.php";
require "Avenger.php";

$spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
$spiderman->sayOneLiner();
print_r('<pre>'. $spiderman . '</pre>');

$thor = new Avenger('Thor', 'Male', 'For Asgard!');
$thor->sayOneLiner();
print_r('<pre>' . $thor . '</pre>');