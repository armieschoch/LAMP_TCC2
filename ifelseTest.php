<?php

function foo($bar) {
         if($bar > 100) {
             echo "100 + ";
         } elseif($bar > 50) {
            echo "50 +";
         } elseif($bar > 10) {
             echo "10 +";
         } else{
             echo "9 or less";
         }

}

function testSwitch($bar){
    switch($bar) {
        case $bar > 100:
        echo "100 +";
        break;
        
        case $bar > 50:
            echo "50 +";
            break;
        
        case $bar > 10:
            echo " 10 +";
            break;
        
        default:
        echo "9 or less";
        break;
        }
}

for ($i = 0; $i <= 50; $i++){

    if($i == 40) {
        continue;
    }
    echo "$i ";

    if($i == 40) {
        break;
    }
}

echo "<br />";
echo "<br />";

$foo = true;
$counter = 5;

do {

   $counter++;
    echo "bar ";
}
while($counter < 5);
    
echo "<br />";
echo "<br />";
foo(150);
echo "<br />";
foo(60);
echo "<br />";
foo(12);
echo "<br />";
foo(9);

echo "<br />";
echo "<br />";

testSwitch(150);
echo "<br />";
testSwitch(60);
echo "<br />";
testSwitch(12);
echo "<br />";
testSwitch(6);



?>