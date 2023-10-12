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
        $sub = $this->income - 1500;
        $sub < 0 ? return self::TAUX_FAIBLE * $this->income : return $sub * self::TAUX_FORT + 1500 * self::TAUX_FAIBLE;
    }

    public function AfficheImpot(){
        $toString = $this->lastname ." ". $this->firstname . " votre impot est de ". $this->CalculImpot(). " €";
        return $this->gender==0? "Monsieur ". $toString : "Madame ". $toString; 
    }
}
