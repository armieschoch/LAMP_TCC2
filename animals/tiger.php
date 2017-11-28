<?php
require_once ("hostile.php");
require_once ("iHunt.php");

class Tiger extends abstractAnimal implements iHunt
{
    use Hostile;

       public function getType()
        {
            
         return "Tiger";
        }
        public function isFriendly()
        {
         return "No";
        }

        public function chasePrey($prey, $catchChance)
        {
           $randomNumber = rand(0, 100);
           $isCaught = $randomNumber <= $catchChance;

            if($isCaught)
            {
                return "Antelope got caught! <br />";
            } else {
                return "Too bad Antelope got away!<br />";
            }
        }
}
?>