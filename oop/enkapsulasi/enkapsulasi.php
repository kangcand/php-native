<?php
class OrangTua
{
    protected $noAtm = "1111-2222-3333-4444";
    private $pinAtm = "001122";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

class Anak extends OrangTua
{
    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

$orangTua = new OrangTua();
$anak = new Anak();

// ingin mengetahui data atm dari object orang tua
echo "No Kartu ATM : " . $orangTua->noAtm() . "<br>";
echo "Pin ATM : " . $orangTua->pinAtm() . "<hr>";

// anak ingin mengetahui data atm dari class orang tua
echo "No Kartu ATM : " . $anak->noAtm() . "<br>";
echo "Pin ATM : " . $anak->pinAtm();
