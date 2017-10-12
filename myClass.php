<?php 

class Dog
{  //class
    const NUMBER_OF_PAWS = 4;
    static $is_tame = true;

    private $dogname;

    private $isSittingDown;
    private $color;

    public function __construct($name, $color) 
    {  //constructor

        $this->dogname = $name;
        $isSittingDown = false;
        $this->color = $color;
    }  //end of constructor

    public function __destruct() 
    {   //destructor
        // echo "Bye bye, $this->dogname is going away!";
    }  //end of destructor

    public function whatColor()
    {
        echo "<br /> I am  $this->color";
    }

    public static function isTame()
    {
        if(self::$is_tame)
        {
            echo "<br />I am tame!";
        } else {
            echo "<br /> Is feral";
        }
    }

    public function paws()
    {
        echo "I have " . self::NUMBER_OF_PAWS . " paws";
        // $this->isTame();
    }

    public function bark() 
    {
        echo "Woof Woof, my name is $this->dogname <br />";
    }

    public function sit($treat) 
    {
        if($treat == null) 
        {
        echo "You better give me a treat first! <br />";
       $this->isSittingDown = false;
    } else {
        echo "Woof, you are my favorite human! <br />";
        $this->isSittingDown = true;
    }
}

    public function isSittingDown() 
    {
        if($this->isSittingDown) 
    {
        echo "$this->dogname is sitting down <br />";

    } else {

        echo "$this->dogname is chasing his tail <br />";
    }
    }
}

class YellowLab extends Dog 
{
    public function __construct($name)
    {
        parent::__construct($name, "yellow <br />");
    }
}

class BlackLab extends Dog 
{
    public function __construct($name)
    {
        parent::__construct($name, " black");
    }
}

$fido = new YellowLab("Fido");
$fido->bark();
$fido->whatColor();

$fido = new BlackLab("Rover");
$fido->bark();
$fido->whatColor();


// $rover = new Dog("Rover");
// $fido->bark();
// $rover->bark();

// $fido->paws();

// Dog::isTame();


// $dog = new Dog('Fido');
// $dog ->paws();
// $dog->isTame();

// echo "<br /> Dogs have " .Dog::NUMBER_OF_PAWS . " paws"
// $dog -> bark();

// $puppy = new Dog('Rover');
// $puppy->bark();

// $puppy->sit();
// $puppy->sit("milk bone");

// $puppy->isSittingDown();
// $dog->isSittingDown();

?>