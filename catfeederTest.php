<?php
require_once('catfeedervalidator.php');
require_once('catfeeder.php');

// function testDispenceFood() {
//     $initialAmount = -10;
//     $portion_size = 5;

//     $result = dispenceFood($initialAmount, $portion_size);

//     if($result == 5) {
//         echo "testDispenceFood: Test Passed! <br />";
//     } else {
//         echo "testDispenceFood: test Failed! Expected 5 but received $result <br />";
//     }
// }

// function testAddFood() {
//     $remainder = 95;
//     $addAmount = 10;

//     $result = addFood($remainder, $addAmount);

//     if($result == 105) {
//         echo "testAddFood: Food added successfully! <br />";
//     } else {
//         echo "testAddFood: Sorry you only added $addAmount <br />";
//     }
   
// }

function testvalidateInitialAmount ($testKeyValuePairs) {

    foreach ($testKeyValuePairs as $key => $value) {
        $result = validateInitialAmount($key);
    }

    if($result != $value) {
        echo "testvalidateInitialAmount $key:Test Failed!
         Expected $value but received $result <br />";
    } else {
        echo "<br /> testvalidateInitialAmount: test Passed!";
    }

}

function testvalidatePortionSize ($testKeyValuePairs, $initialSize) {
    
        foreach ($testKeyValuePairs as $key => $value) {
            $result = validatePortionSize($key, $initialSize);
        }
    
        if($result != $value) {
            echo "testvalidatePortionSize $key:Test Failed!
             Expected $value but received $result <br />";
        } else {
            echo "<br /> testvalidatePortionSize: test Passed!";
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

$testKeyValuePairs2 = Array(
    100 => false
);
testvalidateInitialAmount($testKeyValuePairs);
echo "<br />";
echo "<br />";
testvalidatePortionSize($testKeyValuePairs, 250);

echo "<br />";
echo "<br />";
testvalidatePortionSize($testKeyValuePairs2, 50);
?>