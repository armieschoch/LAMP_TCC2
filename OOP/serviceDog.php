<?php 

require_once ("dog.php");
require_once ("guard.php");
require_once ("retriever.php");

    class ServiceDog extends Dog //class
    {   
        use Guard;
        use Retriever;

        public function __construct()
        {
            $this->setBreed("Doberman");
        }

        // public function guard()
        // {
        //     return "Watchout! Service Dog watching <br />";
        // }
    //    private $breed;
 
    //     public function setBreed ($breed) //Setter
    //     {
    //         $this->breed = $breed;
    //     }
    
    //     public function getBreed()
    //     {
    //         return $this->breed;
    //     }
    
    }

?>