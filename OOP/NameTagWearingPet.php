<?php 

require_once ("pet.php");
require_once ("iNameTag.php");

    abstract class NametagWearingPet extends Pet implements INameTagWearable
    {
        private $nameTag;
        private $where;

        public function setnameTag ($nameTag, $where) //Setter
        {
            $this->nameTag = $nameTag;
        }
    
        public function getnameTag()
        {
            return $this->nameTag->getText();
        }
    
    }
?>