<?php

require_once ("abstractDatabaseHandler.php");
require_once ("DatabaseConnectionInfo.php");

class databaseHandler extends abstractDatabaseHandler
{
   const READ_QUERY = 'SELECT * FROM contact';
    const WRITE_QUERY = 'INSERT INTO contact
    (
        firstName,
        lastName,
        email,
        phone,
        note,
        comment,
        street,
        city,
        state,
        zip,
        type
    )
     VALUES';
    const UPDATE_QUERY = "UPDATE contact SET
        firstName = '%s',
        lastName = '%s',
        email = '%s',
        phone = '%s',
        note = '%s',
        comment = '%s',
        street = '%s',
        city = '%s',
        state = '%s',
        zip = '%s',
        type = '%s' WHERE id = '%s'";


        const DELETE_QUERY = "DELETE FROM contact WHERE id ='%s'";

        const CREATE_TABLE_QUERY = "CREATE TABLE IF NOT EXISTS `contact` (
            `id` int(11) NOT NULL,
            `firstName` varchar(50) NOT NULL,
            `lastName` varchar(50) NOT NULL,
            `email` varchar(100) DEFAULT NULL,
            `phone` varchar(45) NOT NULL,
            `note` varchar(100) DEFAULT NULL,
            `comment` varchar(100) DEFAULT NULL,
            `street` varchar(100) DEFAULT NULL,
            `city` varchar(50) DEFAULT NULL,
            `state` varchar(2) DEFAULT NULL,
            `zip` varchar(45) DEFAULT NULL,
            `type` varchar(45) DEFAULT NULL
        )ENGINE=InnoDB DEFAULT CHARSET=latin1; ";

    public function __construct()
    {
        parent::__construct();
        $this->createTable();
        
    }
    
    public function readDatabase()
    {
        $contacts = array();
        $data = $this->connection->query(self::READ_QUERY);
        if (!$data) {
            die($this->connection->error);
        }
        $rows = $data->num_rows;
        for ($i = 0; $i < $rows; $i++) {
            $data->data_seek($i);
            $item = $data->fetch_array(MYSQLI_ASSOC);
            $person = new Person();
            $person->setfirstName($item['firstName']);
            $person->setlastName($item['lastName']);
            $address = new Address();
            $address->setStreet($item['street']);
            $address->setCity($item['city']);
            $address->setState($item['state']);
            $address->setZip($item['zip']);
            $contact = new Contact();
            $contact->setPerson($person);
            $contact->setAddress($address);
            $contact->setEmail($item['email']);
            $contact->setPhoneNumber($item['phone']);
            $contact->setNote($item['note']);
            $contact->setComment($item['comment']);
            $contact->setType($item['type']);
            $contact->setid($item['id']);
            $contacts[] = $contact;
        }
      
        return $contacts;
    }

    public function insertItem($item)
    {
        $query = self::WRITE_QUERY .
        "(
                    '" . $item->getPerson()->getfirstName() . "',
                    '" . $item->getPerson()->getlastName() . "',
                    '" . $item->getEmail() . "',
                    '" . $item->getPhoneNumber() . "',
                    '" . $item->getNote() . "',
                    '" . $item->getComment() . "',
                    '" . $item->getAddress()->getStreet() . "',
                    '" . $item->getAddress()->getCity() . "',
                    '" . $item->getAddress()->getState() . "',
                    '" . $item->getAddress()->getZip() . "',
                    '" . $item->getType() . "'
                    )";

        $result = $this->connection->query($query);
        if (!$result) {
            die($this->connection->error);
        }
    }

    public function updateItem($item, $id)
    {
        $query = sprintf(self::UPDATE_QUERY,
            $item->getPerson()->getfirstName(),
            $item->getPerson()->getlastName(),
            $item->getEmail(),
            $item->getPhoneNumber(),
            $item->getNote(),
            $item->getComment(),
            $item->getAddress()->getStreet(),
            $item->getAddress()->getCity(),
            $item->getAddress()->getState(),
            $item->getAddress()->getZip(),
            $item->getType(),
            $id
        );
        echo "<br />$query<br />";
        $result = $this->connection->query($query);
        if (!$result) {
            die($this->connection->error);
        }
    }

    public function deleteItem($id)
    {
        $query = sprintf(self::DELETE_QUERY, $id);

        $result = $this->connection->query($query);

        if(!$result) {
            die($this->connection->error);
        }
    } 

    private function createTable()
    {
        $result = $this->connection->query(self::CREATE_TABLE_QUERY);

        if(!$result) {
            die($this->connection->error);
        }
    } 

    public function getDatabaseConnectionInfo()
    {
        $connectionInfo = new DatabaseConnectionInfo();

        $connectionInfo->databaseHost     = ('localhost');
        $connectionInfo->databaseUser     = ('developer');
        $connectionInfo->databasePassword = ('bacon');
        $connectionInfo->databaseSchema   = ('addressbook');

        return $connectionInfo;
    }
}