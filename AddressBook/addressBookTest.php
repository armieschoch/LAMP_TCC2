<?php
require_once ('addressbook.php');
require_once ('fileHandler.php');

$person = new Person();
$person->setfirstName("John");
$person->setlastName("Doe");

$address = new Address();
$address->setStreet("123 Main St");
$address->setCity("Summerville");
$address->setState("SC");
$address->setZip("29483");

$contact = new Contact();
$contact->setPerson($person);
$contact->setAddress($address);
$contact->setPhoneNumber("843-123-4567");
$contact->setType("Friend");
$contact->setComments("Random stuff");
$contact->setNotes("Hello Friend!");

$addressBook = new AddressBook();
$addressBook->addContact($contact);

$fileHandler = new fileHandler();

$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

echo "<br />";
echo "<br />";

$john = $addressBook->getContact("John");
print_r($john);

echo "<br />";
echo "<br />";

$bob= clone $john;
$addressBook->addContact($bob);

echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

$bob->getPerson()->setfirstName("Bob");

echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);


$bob2 = clone $bob;
$bob2->getPerson()->setfirstName("Bob2");
$addressBook->updateContact($bob, $bob2);


echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);


$addressBook->deleteContact($bob2);

echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

?>