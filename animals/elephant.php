<?php

require_once ("friendly.php");

class Elephant extends abstractAnimal
{
    use Friendly;

       public function getType()
        {
         return "Elephant";
        }

        public function isFriendly()
        { 
         return "Yes";
        }

        public function chasePrey($prey, $catchChance)
        {
           $randomNumber = rand(0, 100);
           $isCaught = $randomNumber <= $catchChance;

           if($prey == "peanuts")
           {
            if($isCaught)
            {
                return "Antelope got caught! <br />";
            } else {
                return "Too bad Antelope got away!<br />";
            }
           }else {
               return "I only hunt peanuts";
           }
           
        }

}
?>