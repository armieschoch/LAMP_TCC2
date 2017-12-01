<?php
require_once "toDoList.php";


$id = $_POST['taskId'];
echo "$id";
        $toDoList = new ToDoList();
        
                $toDoList->isComplete($id);
                header("Location: ListTaskViews.php");
                exit();


?>