<?php 
    class nameTag //class
    {   
        private $text;
    
        // public function __construct($text) 
        // {  //constructor
    
        //   //  $this->text = $text;
        // }  //end of constructor
    
        public function setText ($text) //Setter
        {
            $this->text = $text;
        }

        public function getText()
        {
            return $this->text;
        }
    }
?>