<?php 

require_once ("pet.php");
require_once ("iNameTag.php");
require_once ("NameTagWearingPet.php");

    class Cat extends NametagWearingPet 
    {   
       private $breed;
 
        public function setBreed ($breed) //Setter
        {
            $this->breed = $breed;
        }
    
        public function getBreed()
        {
            return $this->breed;
        }
    
       public function purr()
        {
            return "Purrrr";
        }
    }

?>