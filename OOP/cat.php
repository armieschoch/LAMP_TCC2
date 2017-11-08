<?php 

require_once ("pet.php");
    class Cat extends Pet //class
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