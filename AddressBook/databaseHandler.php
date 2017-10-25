<?php
class DatabaseHandler
{
    const DATABASE_HOST = 'localhost';
    const DATABASE_SCHEMA = 'addressbok';
    const DATABASE_USER = 'developer';
    const DATABASE_PASSWORD = 'bacon';
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

    private $connection;
    public function connectToDatabase()
    {
        $this->connection = new mysqli(
            self::DATABASE_HOST,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD,
            self::DATABASE_SCHEMA
        );
        if ($this->connection->connect_error) {
            die($this->connection->connect_error);
        }
    }
    public function disconnectFromDatabase()
    {
        $this->connection->close();
    }
    public function readDatabase()
    {
        $contacts = array();
        $this->connectToDatabase();
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
        $data->close();
        $this->disconnectFromDatabase();
        return $contacts;
    }
    public function insertItem($item)
    {
        $this->connectToDatabase();
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
        //  echo "<br />$query<br />";
        $result = $this->connection->query($query);
        if (!$result) {
            die($this->connection->error);
        }
        $this->disconnectFromDatabase();
    }
    public function updateItem($item, $id)
    {
        $this->connectToDatabase();
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
        $this->disconnectFromDatabase();
    }

    public function deleteItem($id){
        $this->connectToDatabase();
        $query = sprintf(self::DELETE_QUERY, $id);

        $result = $this->connection->query($query);

        if(!$result) {
            die($this->connection->error);
        }
        $this->disconnectFromDatabase();
    } 
}