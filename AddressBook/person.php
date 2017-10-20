<?php

class Person {
    private $firstName;
    private $lastName;


    public function getfirstName() // Getter
    {
        return $this->firstName;
    }

    public function setfirstName ($firstName) //Setter
    {
        $this->firstName = $firstName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function prettyPrint()
    {
        return "$this->firstName $this->lastName";
    }
}


?>