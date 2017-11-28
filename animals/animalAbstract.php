<?php

abstract class abstractAnimal
{
   public $name;

    public function getName()
    {
       
      return "$this->name" . " the " . $this->getType() . " Is friendly : " .  $this->isFriendly();
    }

    abstract function getType();

    abstract function isFriendly();
   
}