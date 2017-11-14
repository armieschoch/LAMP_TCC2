<?php
 require_once ("dog.php");
 require_once ("nameTag.php");
 require_once ("iNameTag.php");

 abstract class Pet
{
    private $breed;
    private $name;
 

    public function __construct(/*$name, $nameTag*/) 
    {  //constructor

        // $this->name = $name;
        // $this->breed = $breed;
    }  //end of constructor

     public function setName ($name) //Setter
        {
            $this->name = $name;
        }
}
?>