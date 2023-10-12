<?php
class People {
    protected $lastname;
    protected $firstname;
    protected $gender;

    public function __construct(string $lastname, string $firstname, int $gender){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->gender = $gender;
    }
}