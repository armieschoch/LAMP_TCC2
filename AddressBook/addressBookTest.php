<?php
require_once "addressbook.php";
$person = new Person();
$person->setfirstName("John");
$person->setlastName("Doe");
$address = new Address();
$address->setStreet("123 Main St.");
$address->setCity("Charleston");
$address->setState("SC");
$address->setZip("29403");
$contact = new Contact();
$contact->setPerson($person);
$contact->setAddress($address);
$contact->setPhoneNumber("8438438438");
$contact->setType("friend");
$contact->setComment("random stuff");
$contact->setEmail("john@doe.com");
$contact->setNote("Hello world!");
$addressBook = new AddressBook();

// $addressBook->addContact($contact);

$all_contacts = $addressBook->getAllContacts();

echo $addressBook->prettyPrint();


// print_r($all_contacts);

// echo "<br /><br />";
// $john = $addressBook->getContact("John");
// print_r($john);
// $bob = clone $contact;
// $addressBook->addContact($bob);
// echo "<br /><br />";
//$addressBook->deleteContact($contact);
// $all_contacts = $addressBook->getAllContacts();
// $john = $all_contacts[0];
// $bob = clone $john;
// $bob->getPerson()->setFirstName('Bob');
// $addressBook->updateContact($john, $bob);
// print_r($all_contacts);
// $bob->getPerson()->setFirstName("Bob");
// echo "<br /><br />";
// $all_contacts = $addressBook->getAllContacts();
// print_r($all_contacts);
// $bob2 = clone $bob;
// $bob2->getPerson()->setFirstName("Bob2");
// $addressBook->updateContact($bob, $bob2);
// echo "<br /><br />";
// $all_contacts = $addressBook->getAllContacts();
// print_r($all_contacts);
// $addressBook->deleteContact($bob2);
// echo "<br /><br />";
// $all_contacts = $addressBook->getAllContacts();
// print_r($all_contacts);