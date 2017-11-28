<?php
require_once ("animalAbstract.php");
require_once ("tiger.php");
require_once ("elephant.php");
require_once ("friendly.php");

$tiger = new Tiger();
$tiger->name = "Fido";
 echo $tiger->getName();
 echo $tiger->makeHostileSound();
 echo "<br />";
 echo $tiger->chasePrey("Antelope", 75);

 $elephant = new Elephant();
 $elephant->name = "Dumbo";
 echo $elephant->getName();
 echo $elephant->makeHappySound();
 echo $elephant->chasePrey("peanuts", 100);

  echo "<br />";
  
  
?>