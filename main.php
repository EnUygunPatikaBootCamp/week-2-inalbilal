<?php


class Tasit
{
    public $plakaNo;
    public $marka;
    public $model;
    public $tekerlekSayisi;
    public $kanatAcikligi;



    public function getPlakaNo(){
        return $this->plakaNo;
    }

    public function setPlakaNo($plakaNo) {
        return $this->plakaNo = $plakaNo;
    }


    public function getMarka(){
        return $this->marka;
    }

    public function setMarka($marka) {
        return $this->marka = $marka;
    }


    public function getModel(){
        return $this->model;
    }

    public function setModel($model) {
        return $this->model = $model;
    }

    public function getTekerlekSayisi(){
        return $this->tekerlekSayisi;
    }

    public function setTekerlekSayisi($tekerlekSayisi) {
        return $this->tekerlekSayisi = $tekerlekSayisi;
    }


    public function getKanatAcikligi(){
        return $this->kanatAcikligi;
    }

    public function setKanatAcikligi($kanatAcikligi) {
        return $this->kanatAcikligi = $kanatAcikligi;
    }

}

class Araba extends Tasit
{
    function mesaj() {
        return "Plaka No: " .  parent::getPlakaNo() . "<br>" . "Marka: " . parent::getMarka() . "<br>" . "Model: " . parent::getModel() . "<br>" . "Tekerlek Sayısı: " . parent::getTekerlekSayisi() .  "<br><br>";
    }


}

class Motosiklet extends Tasit
{
    function mesaj() {
        return "Plaka No: " .  parent::getPlakaNo() . "<br>" . "Marka: " . parent::getMarka() . "<br>" . "Model: " . parent::getModel() . "<br>" . "Tekerlek Sayısı: " . parent::getTekerlekSayisi() .  "<br><br>";
    }


}

class Ucak extends Tasit
{
    function mesaj() {
        return "Marka: " . parent::getMarka() . "<br>" . "Model: " . parent::getModel() . "<br>" . "Kanat Açıklığı: " . parent::getKanatAcikligi() .  "<br><br>";
    }


}

$araba = new Araba();
$araba->setPlakaNo("35 BILAL 98");
$araba->setMarka("Tesla");
$araba->setModel("Model S");
$araba->setTekerlekSayisi("4");
echo $araba->mesaj();


$motosiklet = new Motosiklet();
$motosiklet->setPlakaNo("34 BILAL 22");
$motosiklet->setMarka("Honda");
$motosiklet->setModel("1000 RR");
$motosiklet->setTekerlekSayisi("2");
echo $motosiklet->mesaj();

$ucak = new Ucak();
$ucak->setMarka("Boeing");
$ucak->setModel("737-700");
$ucak->setKanatAcikligi("34");
echo $ucak->mesaj();


?>