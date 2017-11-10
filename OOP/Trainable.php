<?php 

    require_once ("trainableDog.php");
    require_once ("dog.php");

    Class TrainableDog extends Dog implements ITrainable
    {
        public $snack;
        public $trick;

        public function setSnack ($snack) //Setter
        {
            $this->snack = $snack;
        }

        public function setTrick ($trick) //Setter
        {
            $this->trick = $trick;
        }

            public function learnTrick($trick)
            {
                echo "<br /> Fido is learning to $this->trick";
            }

            public function doTrick($trick)
            {
                echo "<br /> Fido is doing the $this->trick trick";
                return $this->trick;
            }

            public function getReward($snack)
            {
                echo "<br /> YUM!!! Fido is eating the $this->snack reward";
                // return $this->snack;
            }
    }
?>