<?php

require_once "init.php";    // Initializes all classes.
$spacing = "<br><br>";

$p1 = new Pikachu("Henk de steen");
$p2 = new Charmeleon("Henk de potvis");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Pokébattle</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <?php
                    $p2->getResult();
                    echo $spacing;
                    $p1->attack($p2, $p1->getMoves()[0]);
                    $p2->getResult();
                ?>
            </div>
            <div class="col-lg-6 right">
                <?php
                    $p1->getResult();
                    echo $spacing;
                    $p2->attack($p1, $p2->getMoves()[1]);
                    $p1->getResult();
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img src="resources/img/charmeleon.png" alt="Charmeleon">
            </div>
            <div class="col-lg-6">
                <img src="resources/img/pikachu.png" alt="Pikachu">
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
