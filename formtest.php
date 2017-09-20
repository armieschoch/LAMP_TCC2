<?php

require_once 'database.php';

$name = "Nothing";
$breed = "Nothing";
$color = "Nothing";
$age = "Nothing";

$is_valid = true;

if(isset($_POST['name'])){
    $name = $_POST['name'];
} else {
    $is_valid = false;
}
if(isset($_POST['breed'])){
    $breed = $_POST['breed'];
}
if(isset($_POST['color'])){
    $color = $_POST['color'];
}
if(isset($_POST['age'])){
    $age = $_POST['age'];
}
if(!is_numeric($age)) {
    $is_valid = false;
}

if($is_valid) {
   
    insertCat($name, $color, $breed, $age); 
} else {
    echo "Invalid input detected! <br />";
}


echo <<<_END
    <html>
    <head>
    <title>Form Test</title>
    </head>
    <body>
    Cat's name is $name <br />
    Cat's breed is $breed <br />
    Cat's color is $color <br />
    Cat's age is $age <br />
        <form method="post" action="formtest.php">
        <label>What is cat's name?</label>
            <input type="text" name="name" placeholder="Enter the name here" /></input>
            </br>
            <label>What is cat's breed?</label>
            <input type="text" name="breed" /></input>
            <br>
            <label>What is cat's color?</label>
            <input type="color" name="color" /></input>
            <br>
            <label>What is cat's age?</label>
            <input type="text" min="0" max="50" name="age" /></input>
            <br>
            
            <input type="submit" /></input>
        </form>

    </body>
    
    </html>

_END;




?>