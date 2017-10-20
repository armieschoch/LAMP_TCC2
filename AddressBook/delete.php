<?php
require_once "addressbook.php";

$id = $_POST["id"];

$addressbook = new AddressBook();

$addressbook->deleteContact($id);
header("Location: index.php");

?>