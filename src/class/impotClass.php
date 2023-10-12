<?php 
require("./peopleClass.php");


class Impot extends People {
    private $income;

    const impot15 = 15;
    const impot20 = 20;

    public static function __constructor(int $income){
        $this->income = $income;
    }

    private function CalculImpot(){
        $taux = 0;
        $this->income < 15000 ? $taux = $this->impot15 :  $taux = $this->impot20;
        return $this->income * ($taux/100);
    }

    protected function AfficheImpot(string $prenom){
        return $prenom. "votre impot est de ". $this->calculImpot();
    }
}
