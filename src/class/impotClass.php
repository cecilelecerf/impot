<?php 
require("./class/peopleClass.php");


class Impot extends People {
    private $income;

    const TAUX_FAIBLE = 0.15;
    const TAUX_FORT = 0.20;

    public function __construct(int $income, string $lastname, string $firstname, int $gender){
        parent::__construct($lastname, $firstname, $gender);
        $this->income = $income;
    }

    private function CalculImpot(){
        $taux = 0;
        $this->income < 15000 ? $taux = self::TAUX_FAIBLE :  $taux = self::TAUX_FORT;
        return $this->income * $taux;
    }

    public function AfficheImpot(){
        $toString = $this->lastname ." ". $this->firstname . " votre impot est de ". $this->CalculImpot(). " €";
        return $this->gender==0? "Monsieur ". $toString : "Madame ". $toString; 
    }
}
