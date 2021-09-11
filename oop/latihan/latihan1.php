<?php
class Komputer
{
    public $pemilik;
    public $merk;
    public $layar;

    public function dinyalakan()
    {
        return "komputer dinyalakan";
    }

    public function dimatikan()
    {
        return "komputer dimatikan";
    }

}

$user1 = new Komputer();
// set property
$user1->pemilik = "Junaedi";
$user1->merk = "Asus";
$user1->layar = "24 Inch";
echo "Pemilik : " . $user1->pemilik . "<br>";
echo "Merk Komputer : " . $user1->merk . "<br>";
echo "Ukuran Layar : " . $user1->layar . "<br>";
echo "Komputer : " . $user1->dinyalakan() . "<hr>";
