<?php

include "vendor\autoload.php";
use src\degreeConversion;
use src\multiplying;
use src\subtraction;
use src\addition;
use src\multiplication;

$degreeConversion = new degreeConversion(2,29);
var_dump($degreeConversion->grading());
echo "<br>";

$multiplication  = new multiplication (39,80);
var_dump($multiplication->getNumber1());
echo "<br>";
var_dump($multiplication->getDegree1());
echo "<br>";


$addition = new addition(389,38777);
var_dump($addition->getNumber2());
echo "<br>";
var_dump($addition->getDegree2());
echo "<br>";


$subtraction = new subtraction(16532,479653);
var_dump($subtraction->getNumber());
echo "<br>";
var_dump($subtraction->getDegree());
echo "<br>";


$multiplying = new multiplying(75,96);
$multiplying->setMultiplying(852);
var_dump($multiplying->getNumber3());
var_dump($multiplying->getDegree3());
var_dump($multiplying->getNumber4());
var_dump($multiplying->getDegree4());
?>