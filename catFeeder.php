<?php

require_once('feeder.php');

class CatFeeder extends Feeder 
{
    public function __construct()
    {
        parent::__construct(50, Array(1,2,3) );
    }
}

$feeder = new CatFeeder();
$feeder->emptyFeeder(3);


?>