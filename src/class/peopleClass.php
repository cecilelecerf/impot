<?php
class People {
    private $lastname;
    private $firstname;
    private $gender;

    protected function __constrct($lastname, $firstname, $gender){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->gender = $gender
    }
}
