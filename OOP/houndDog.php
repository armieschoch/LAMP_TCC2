<?php 

require_once ("dog.php");
require_once ("tracker.php");
require_once ("retriever.php");
require_once ("waterRetriever.php");


    class HoundDog extends Dog //class
    {   
        // use Tracker, Retriever {
        //     Tracker::sayHello insteadOf Retriever;
        //     Retriever::sayHello as retrieversayHello;
        //     Retriever::protectedWoof as public;

            use waterRetriever;
        

        public function __construct()
        {
            $this->setBreed("Basset");
        }

        // public function track()
        // {
        //     return "Watchout! Service Dog watching <br />";
        // }

        // public function sayHello()
        // {
        //     echo "<br /> hello from Hound Dog";
        // }
    }

?>