<?php

require_once ("DBHandler.php");
require_once ("DBConnectionInfo.php");

class DBController extends DBHandler
{
    const READ_QUERY = 'SELECT * FROM to_do_list';
    const WRITE_QUERY = 'INSERT INTO to_do_list (
       
        Title,
        isComplete
    )
     VALUES';

    const UPDATE_QUERY = "UPDATE to_do_list SET
        Title = '%s',
        isComplete = '%s',
        WHERE id = '%s'";

        const CREATE_TABLE_QUERY = "CREATE TABLE IF NOT EXISTS `to_do_list` (
            `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `Title` varchar(150) NOT NULL,
            `isComplete` boolean NOT NULL
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 ";

    public function __construct()
    {
        parent::__construct();
        $this->createTable();
        
    }
    
    public function readDatabase()
    {
        $tasks = array();
        $data = $this->connection->query(self::READ_QUERY);
        if (!$data) {
            die($this->connection->error);
        }
        $rows = $data->num_rows;
        for ($i = 0; $i < $rows; $i++) {
            $data->data_seek($i);
            $item = $data->fetch_array(MYSQLI_ASSOC);
            $task = new Task();
            $task->setTitle($item['Title']);
            $task->setisComplete($item['isComplete']);
            $task->setId($item['id']);
            $tasks[] = $task;
        }
      
        return $tasks;
    }

    public function insertItem($item)
    {
        $query = self::WRITE_QUERY .
        "(
                    '" . $item->getTitle() . "',
                    '" . $item->getisComplete() . "'
                    )";
echo "$query";

        $result = $this->connection->query($query);
        if (!$result) {
            die($this->connection->error);
        }
    }

    public function updateItem($item, $id)
    {
        $query = sprintf(self::UPDATE_QUERY,
            $item->getTitle($title),
            $item->getisComplete($isComplete),
            $id
        );
        echo "<br />$query<br />";
        $result = $this->connection->query($query);
        if (!$result) {
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
        $connectionInfo = new DBConnectionInfo();

        $connectionInfo->databaseHost     = ('localhost');
        $connectionInfo->databaseUser     = ('developer');
        $connectionInfo->databasePassword = ('bacon');
        $connectionInfo->databaseSchema   = ('to_do_list');

        return $connectionInfo;
    }
}