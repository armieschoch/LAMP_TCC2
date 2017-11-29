<?php

require_once "toDoListHandler.php";
require_once "DBConnected.php";
require_once "Task.php";

class ToDoList
{
    use DBConnected;
    private $tasks;
    private $fileHandler;
    private $databaseHandler;
    private $title;
    private $isComplete;

    public function __construct()
    {
        $this->fileHandler = new ToDoFileHandler("myToDoList.txt");
       
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

    public function completeTask($task, $id)
    {
               $this->getdatabaseHandler()->completeItem($task, $id);
    
    }

    //    public function getisComplete($title)
    // {
    //     foreach ($this->tasks as $task) {
    //         if ($task->getisComplete() == $title) {
    //             return $task;
    //         }
    //     }
    // }
    // public function getTaskById($id)
    // {
    //     foreach ($this->tasks as $task) {
    //         if ($task->getid() == $id) {
    //             return $task;
    //         }
    //     }
    // }

    public function prettyPrint()
    {
        $result = "";

        foreach ($this->tasks as $task)
        {
            $result .="<hr/>";
            $result .=$task->prettyPrint();
            $result .="<hr/>";
        }
        return $result;
    }
}