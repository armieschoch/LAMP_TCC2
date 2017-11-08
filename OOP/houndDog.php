<?php 

require_once ("dog.php");
    class HoundDog extends Dog //class
    {   
        public function __construct()
        {
            $this->setBreed("Basset");
        }

        public function track()
        {
            return "Watchout! Service Dog watching <br />";
        }
    }

?>