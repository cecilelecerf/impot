<?php
class People {
    private $lastname;
    private $firstname;

    protected function __constrct($lastname, $firstname){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }
}
?>