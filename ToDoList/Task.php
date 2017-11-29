<?php

class Task {
    
    private $title;
    private $isComplete;
    private $id;
   

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getcompleteTask()
    {
        return $this->isComplete;
    }

    public function setcompleteTask($isComplete)
    {
        $this->isComplete = $isComplete;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }

}
?>