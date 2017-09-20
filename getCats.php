<?php 

require_once 'database.php';
$cats = getCats();

foreach($cats as $cat) {
    echo "Id: " . $cat['Id'] . "|" . "Name: " . $cat['Name'] .
    "|" . "Color: " . $cat['Color'] . "|" . "Breed: " . $breed['Breed'] .
    "|" . "Age: " . $cat['Age'] . "<br />";
}
?>