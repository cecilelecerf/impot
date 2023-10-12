<?php 

class Impot {
    private $income;

    const IMPOT15 = 15;
    const IMPOT20 = 20;

    public static function __constructor(int $income){
        $this->income = $income;
    }

    private function CalculImpot(){
        $taux = 0;
        $this->income < 15000 ? $taux = self::IMPOT15 :  $taux = self::IMPOT20;
        return $this->income * ($taux/100);
    }

    public function AfficheImpot(string $prenom){
        return $prenom. "votre impot est de ". $this->CalculImpot();
    }
}
?>