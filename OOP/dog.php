<?php 

require_once ("pet.php");
require_once ("retriever.php");
require_once ("mammalType.php");

    class Dog extends Pet //class
    {   

        use MammalType;

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

        // public function sayHello()
        // {
        //     echo "<br /> hello from Dog";
        // }
    }

?>