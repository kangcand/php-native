<?php
class KartuAtm
{
    public $pemilik = "Dadang Pelo";
    protected $norek = "2210 2002 4444";
    private $pinAtm = "300902";

    public function Transfer()
    {
        $a = $this->norek;
        $b = $this->pinAtm;
        if ($a == "2210 2002 4444" && $b == "300902") {
            $c = "Transfer Berhasil";
        }
        return $c;
    }
    public function getInfo()
    {
        $a = $this->norek;
        $b = $this->pemilik;
        $c = "Nomor ATM : " . $a . " Pemilik :" . $b;
        return $c;
    }
}
$atm = new KartuAtm();

echo "pemilik ATM = $atm->pemilik<br>";
echo "Info ATM = " . $atm->getInfo() . "<br>";
echo "Transfer = " . $atm->Transfer();
