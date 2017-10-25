<?php
require_once "contact.php";
require_once "fileHandler.php";
require_once "databaseHandler.php";

class AddressBook
{
    private $contacts;
    private $fileHandler;
    private $databaseHandler;

    public function __construct()
    {
        $this->fileHandler = new FileHandler("myAddressBook.txt");
        // $this->contacts = $this->fileHandler->readFile();
        $this->databaseHandler = new DatabaseHandler();
        $this->contacts = $this->databaseHandler->readDatabase();
    }
    public function getAllContacts()
    {
        return $this->contacts;
    }
    public function addContact($contact)
    {
        $this->contacts[] = $contact;
        // $this->fileHandler->writeFile($this->contacts);
        $this->databaseHandler->insertItem($contact);
    }
    public function updateContact($contact, $id)
    {
               $this->databaseHandler->updateItem($contact, $id);
    
    }
    public function deleteContact($id)
    {       
        $this->databaseHandler->deleteItem($id);
        
    }
    public function getContact($first_name)
    {
        foreach ($this->contacts as $contact) {
            if ($contact->getPerson()->getfirstName() == $first_name) {
                return $contact;
            }
        }
    }

    public function getContactById($id)
    {
        foreach ($this->contacts as $contact) {
            if ($contact->getid() == $id) {
                return $contact;
            }
        }
    }

    public function cancelUpdateContact($contact, $id)
    {
               $this->databaseHandler->cancelItem($contact, $id);
    
    }

    public function prettyPrint()
    {
        $result = "";

        foreach ($this->contacts as $contact)
        {
            $result .="<hr/>";
            $result .=$contact->prettyPrint();
            $result .="<hr/>";
        }
        return $result;
    }
}