<?php
 require_once ("dog.php");
 require_once ("nameTag.php");

class Pet
{
    private $breed;

    private $name;
    private $nameTag;

    public function __construct($name, $nameTag) 
    {  //constructor

        $this->name = $name;
        $this->nameTag = $nameTag;
        $this->breed = $breed;
    }  //end of constructor

    public function setName ($name) //Setter
    {
        $this->name = $name;
    }

    public function setnameTag ($nameTag) //Setter
    {
        $this->nameTag = $nameTag;
    }

    public function getnameTag()
    {
        return $this->nameTag->getText();
    }


    
}
?>