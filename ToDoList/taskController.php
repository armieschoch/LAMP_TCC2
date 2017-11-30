<?php
    require_once "toDoList.php";

    $task = new Task();
    $task->setTitle($_POST["title"]);
    $task->setisComplete($_POST["complete"]);
    
    $toDoList = new ToDoList();

 
        $toDoList->createTask($task);
        header("Location: ListTaskViews.php");
        exit();
    
    
?>