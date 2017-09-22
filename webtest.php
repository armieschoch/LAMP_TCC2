<?php

//This is a single line comment
/* This is a multi line comment
put your notes between this two things*/

$name = "Luke"; //string
$age = 25; //int
$friends = Array("Obi", "Leila", "Darth"); //array of strings
$numberArray = Array(1, 3, 88, 100034); //array of numbers

echo "<strong>Hello ".$name."</strong><br />"; 
echo "You are " .$age . " old<br />";
echo $friends[2] . " is your Father <br />";

$copy_of_friends = $friends; //assigning a variable to another variable
foreach($copy_of_friends as $oneFriend) { //iteration over an array
    echo $oneFriend . "<br />";
}
foreach($numberArray as $number) {
    echo $number . '<br /> ';
}

$mixed_array = Array("test_string", 34, 55.32); //mixed array
foreach($mixed_array as $bacon) {
    echo $bacon . '<br /> ';
}

$multi_array = Array(
    Array(1, 2, 3, 4, 5),
    Array("string1", "string2", "string3"),
    Array(12.3, 33, "Another_string")
);

foreach($multi_array as $singleItem){

    foreach($singleItem as $individual){
        echo $individual . '<br />';
    }

}


?>