<?php 
    abstract class SnowDog
    {
        public function eat($howmuch)

        {
            echo "<br /> Num num!";
            $this->playInSnow();
        }

        abstract function playInSnow();
    }
?>