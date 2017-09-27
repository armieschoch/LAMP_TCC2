<?php
include_once('catfeeder.php');

function testDispenceFood() {
    $initialAmount = 100;
    $portion_size = 5;

    $result = dispenceFood($initialAmount, $portion_size);

    if($result == 5) {
        echo "testDispenceFood: Test Passed!";
    } else {
        echo "testDispenceFood: test Failed! Expected 5 but received $result";
    }
}

function testAddFood() {
    $remainder = 95;
    $addAmount = 10;

    $result = addFood($remainder, $addAmount);

    if($result == 105) {
        echo "testAddFood: Food added successfully!";
    } else {
        echo "testAddFood: Sorry you only added $addAmount";
    }
   
}

testDispenceFood();
echo "<br />";
testAddFood();

?>