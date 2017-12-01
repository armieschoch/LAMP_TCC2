<?php

require_once "toDoListHandler.php";
require_once "DBConnected.php";
require_once "Task.php";
require_once "DBController.php";

class ToDoList
{
    use DBConnected;
    private $tasks;
    private $fileHandler;
    private $databaseHandler;
    private $title;
    private $isComplete;
    private $DateCreated;
    private $DateCompleted;

    public function __construct()
    {
        $this->tasks = $this->getDatabaseHandler()->readDatabase();
    }
    
    public function getAllTasks()
    {
        return $this->tasks;
    }

    public function createTask($task)
    {
        $this->tasks[] = $task;
        $this->getdatabaseHandler()->insertItem($task);
    }

    public function isComplete($id)
    {
        $this->getdatabaseHandler()->updateItem($id);
    }

    }
    ?>