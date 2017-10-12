<?php

$numericArray = Array(1, 3, 6, 120, 345, 564, 200, 342, 200);
print_r($numericArray);

$result = is_array($numericArray); //checks if it is an array

echo "<br /> $result <br />";

$result = count($numericArray); //counts how many numbers of variables inside the array

echo "<br /> $result <br />";

for ($i = 0; $i < count($numericArray); $i++) //loops the array and increment it until the number of variable in an array is printed
{
    echo "<br /> $numericArray[$i] <br />";
}

sort ($numericArray); //it will sort ascending
print_r($numericArray);

echo "<br />";

rsort($numericArray); //sort descending
print_r($numericArray);

echo "<br />";

sort ($numericArray, SORT_STRING); //sort the array as if it was a string
print_r($numericArray);

echo "<br />";

shuffle($numericArray); //random orders
print_r($numericArray);

echo "<br />";

$stringArray = explode(' ', "This is a long sentence, or not?"); //sort descending
print_r($stringArray);

echo "<br />";

$stringArray = explode(',', "This is a long sentence, or not?"); //sort descending
print_r($stringArray);

echo "<br />";

$keyValuePairs = Array("key1" => "value1", "key2" => "bacon");

extract($keyValuePairs, EXTR_PREFIX_ALL, 'dog'); //so you don't overwrite any existing variable
echo "<br /> $dog_key1 : $dog_key2 <br />";

$firstName = "Bob";
$lastName = "Doe";
$age = "44";

$person = compact('firstName', 'lastName', "age"); //search global php for variable names
echo "<br />";
print_r($person);

echo "<br />";
$array1[] = 1;
$array1[] = 300;
$array1[] = 32;

print_r($array1);

echo "<br />";
$array2[0] = 1;
$array2[5433] = 300;
$array2[3] = 32;

print_r($array2);

?>