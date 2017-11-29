<?php

require_once ("DBConnectable.php");

abstract class DBHandler implements IDBConnectable
{
   protected $connection;


    public function __construct(){
        
        $this->connectToDatabase();
    }
    public function connectToDatabase()
    {
        $connectionInfo = $this->getDatabaseConnectionInfo();
        $this->connection = new mysqli(
            $connectionInfo->databaseHost,
            $connectionInfo->databaseUser,
            $connectionInfo->databasePassword,
            $connectionInfo->databaseSchema
        );
      
        if ($this->connection->connect_error) {
            die($this->connection->connect_error);
        }
    }

    public function _destruct()
    {
        $this->disconnectFromDatabase();
    }

    public function disconnectFromDatabase()
    {
        $this->connection->close();
    }

    abstract function getDatabaseConnectionInfo();
    
    
}