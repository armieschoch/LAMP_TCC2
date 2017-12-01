<?php

class Task {
    
    private $title;
    private $isComplete;
    private $id;
    private $DateCreated;
    private $DateCompleted;
   

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getisComplete()
    {
        return $this->isComplete;
    }

    public function setisComplete($isComplete)
    {
        $this->isComplete = $isComplete;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getDateCreated()
    {
        return $this->getDateCreated;
    }

    public function setDateCreated($DateCreated)
    {
        $this->DateCreated = $DateCreated;
    }

    public function getDateCompleted()
    {
        return $this->getDateCreated;
    }

    public function setDateCompleted($DateCompleted)
    {
        $this->DateCompleted = $DateCompleted;
    }
}
?>