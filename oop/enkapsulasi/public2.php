<?php

class Mobil
{
    public $ban = 4;
    public $merk;

    public function jalan()
    {
        return "Bremm Breem";
    }
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
}
$angkot = new mMobil('Suzuki');
echo "Ban          = " . $angkot->ban . "<br>";
echo "Merk         = " . $angkot->merk . "<br>";
echo "Fungsi Jalan = " . $angkot->jalan();
