<?php
    require_once "toDoList.php";

    $task = new Task();
    $task->setTitle($_POST["title"]);
    $task->setcompleteTask($_POST["complete"]);
    
    $toDoList = new ToDoList();

    try {
        $toDoList->createTask($task);
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    
?>