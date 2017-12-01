<?php
    require_once "toDoList.php";

    $task = new Task();
    $task->setTitle($_POST["title"]);
    $task->setisComplete($_POST["complete"]);

    $task = new Task();
    $task->setDateCreated($_POST["DateCreated"]);
    $task->setDateCompleted($_POST["DateCompleted"]);
    
    $toDoList = new ToDoList();
        $toDoList->createTask($task);
        header("Location: ListTaskViews.php");
        exit();
?>