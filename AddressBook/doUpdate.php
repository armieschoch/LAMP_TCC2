<?php
    require_once "addressbook.php";

    $id = $_POST["id"];

    $person = new Person();
    $person->setfirstName($_POST["firstName"]);
    $person->setlastName($_POST["lastName"]);
    $address = new Address();
    $address->setStreet($_POST["street"]);
    $address->setCity($_POST["city"]);
    $address->setState($_POST["state"]);
    $address->setZip($_POST["zip"]);


    $contact = new Contact();
    $contact->setPerson($person);
    $contact->setAddress($address);
    $contact->setPhoneNumber($_POST["phoneNumber"]);
    $contact->setType($_POST["contactType"]);
    $contact->setComment($_POST["comment"]);
    $contact->setEmail($_POST["email"]);
    $contact->setNote($_POST["note"]);

    // print_r($contact);

    $addressBook = new AddressBook();

    try {
        $addressBook->updateContact($contact, $id);
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

    
?>