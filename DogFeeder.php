<?php

require_once('feeder.php');

class DogFeeder extends Feeder 
{
    public function __construct()
    {
        parent::__construct(100, Array(2,4,8,10));
    }
}

$feeder = new DogFeeder();
$feeder->addFood(100);
$feeder->emptyFeeder(8);



?>