<?php 

require_once ("pet.php");
    class Dog extends Pet //class
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
    
       public function fetch()
        {
            return "Woofff <br />";
        }
    }

?>