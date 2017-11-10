<?php 

require_once ("pet.php");
require_once ("iNameTag.php");
require_once ("NameTagWearingPet.php");
// require_once ("retriever.php");
// require_once ("mammalType.php");

    class Dog extends NametagWearingPet 
    {   

        // use MammalType;

       private $breed;
 
        public function setBreed ($breed) //Setter
        {
            $this->breed = $breed;
        }
    
        public function getBreed()
        {
            return $this->breed;
        }
    
       public function fetch()
        {
            return "Woofff <br />";
        }

        public function sayHello()
        {
            echo "<br /> hello from Dog";
        }
    }

?>