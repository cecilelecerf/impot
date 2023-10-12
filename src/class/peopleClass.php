<?php
class People {
    protected $lastname;
    protected $firstname;
    protected $gender;

    protected function __constructor($lastname, $firstname, $gender){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->gender = $gender;
    }
}