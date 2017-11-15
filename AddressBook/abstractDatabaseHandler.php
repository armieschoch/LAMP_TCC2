<?php

require_once ("IDatabaseConnectable.php");

abstract class abstractDatabaseHandler implements IDatabaseConnectable
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