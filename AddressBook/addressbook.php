<?php

require_once('contact.php');

class AddressBook {

    private $contacts;

public function __construct()
{
    $this->contacts = Array();
}

public function addContact($contact)
{
    $this->contacts[] = $contact;
}

public function updateContact($oldContact, $newContact)
{
    $index = array_search($oldContact, $this->contacts);
    if($index)
    {
        $this->contacts[$index] = $newContact;
    }
}

public function deleteContact($contact)
{
    $index = array_search($contact, $this->contacts);

    if($index >= 0)
    {
        unset($this->contacts[$index]);
    }
}

public function getContact($firstName)
{
    foreach($this->contacts as $contact)
    {
        if($contact->getPerson()->getfirstName() == $firstName)
        {
            return $contact;
        }
    }
}

public function getAllContacts()
{
    return $this->contacts;
}

}
?>