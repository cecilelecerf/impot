<?php 

class Impot {
    public $income;

    const IMPOT15 = 15;
    const IMPOT20 = 20;

    public function __construct(int $income){
        $this->income = $income;
    }

    public function CalculImpot(){
        $taux = 0;
        $this->income < 15000 ? $taux = self::IMPOT15 :  $taux = self::IMPOT20;
        return $this->income;
    }

    public function AfficheImpot(string $prenom){
        return $prenom. "votre impot est de ". $this->CalculImpot();
    }
}
?>