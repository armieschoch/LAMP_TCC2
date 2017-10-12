<?php
require_once('catfeedervalidator.php');
require_once('catfeeder.php');

class catFeederTest
{
    private $catFeeder;
    private $CatFeederValidator;

    public function __construct($initialAmount)
    {
        $this->catFeeder = new catFeeder($initialAmount);
        $this->CatFeederValidator = new CatFeederValidator();
    }

public function testDispenceFood() 
{
    $portion_size = 5;

    $result = 
    $this->catFeeder->dispenceFood($portion_size);

    if($result == 5) {
        echo "testDispenceFood: Test Passed! <br />";
    } else {
        echo "testDispenceFood: test Failed! Expected 5 but received $result <br />";
     }
 }

public function testAddFood() 
{
    $addAmount = 10;

     $result = 
     $this->catFeeder->addFood($addAmount);

    if($result == 105) {
         echo "testAddFood: Food added successfully! <br />";
     } else {
         echo "testAddFood: Sorry you only added $addAmount <br />";
     }
 }

    public function testvalidateInitialAmount ($testKeyValuePairs) 
    {

        foreach ($testKeyValuePairs as $key => $value) 
        {
            $result = 
            $this->CatFeederValidator->validateInitialAmount($key);
        }

        if($result != $value) 
        {
            echo "testvalidateInitialAmount $key:Test Failed!
            Expected $value but received $result <br />";
        } else {
            echo "<br /> testvalidateInitialAmount: test Passed!";
            }
    }   

    public function testvalidatePortionSize ($testKeyValuePairsForPortionSize, $initialSize) 
    {
    
        foreach ($testKeyValuePairsForPortionSize as $key => $value) 
        {
            $result = 
            $this->CatFeederValidator->validatePortionSize($key, $initialSize);
        }
    
        if($result != $value) 
        {
            echo "testvalidatePortionSize $key:Test Failed!
             Expected $value but received $result <br />";
        } else {
            echo "<br /> testvalidatePortionSize: test Passed!";
        }
    
    }

    public function testvalidateEmptyFeeder ($testKeyValuePairsForPortionSize, $initialSize) 
    {
        foreach ($testKeyValuePairsForPortionSize as $key => $value) 
        {
            $result = 
            $this->catFeeder->validateEmptyFeeder($key, $initialSize);
        }
        
        if($result != $value) 
        {
            echo "testvalidatePortionSize $key:Test Failed!
                 Expected $value but received $result <br />";
        } else {
                echo "<br /> testvalidatePortionSize: test Passed!";
            }
        
    }
    
    }
// testDispenceFood();
// echo "<br />";
// testAddFood();
// echo "<br />";
//
// testvalidateInitialAmount( Array(
//     array() => false, 
//     "foo" => false, 
//     0 => false, 
//     -1 => false,
//     20 => true
//     )
// );

echo "<br />";

$testKeyValuePairs = (Array(
    array() => false, 
    "foo" => false, 
    0 => false, 
    -1 => false,
    20 => true
)
);

$testKeyValuePairsForPortionSize = (Array(
    array() => false, 
    "foo" => false, 
    0 => false, 
    -1 => false,
    20 => false,
    1 => true,
    2 => true,
    3 => true,
)
);

$testKeyValuePairs2 = Array(
    100 => false
);

$counter = 0;

// while ($counter <=4) {

// testvalidateInitialAmount($testKeyValuePairs);
// echo "<br />";
// echo "<br />";
// echo "<br />";
// echo "<br />";
// $counter++;
// }

// $counter2 =0;

// do {
// testvalidatePortionSize($testKeyValuePairsForPortionSize, 250);

// echo "<br />";
// echo "<br />";
// echo "<br />";
// echo "<br />";
// $counter2++;
// } while ($counter2 <= 4); 

// for($i = 0; $i <=4; $i++) {

// testvalidatePortionSize($testKeyValuePairs2, 50);
// }

// testvalidateEmptyFeeder ($testKeyValuePairsForPortionSize, $initialSize);

$tester = new catFeederTest(600);

$tester->testvalidatePortionSize($testKeyValuePairs);
$tester->testvalidateInitialAmount($testKeyValuePairsForPortionSize, 250);
$tester->testvalidateEmptyFeeder($testKeyValuePairsForPortionSize, $initialSize);
    
?>