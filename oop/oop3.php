<?php

// mengdefinisikan sebuah class
class Kucing
{
    // membuat property atau attributes
    public $warna;

    // construct adalah method khusus yang akan
    // di panggil pertama kali
    public function __construct($a)
    {
        $this->warna = $a;
    }

    // membuat method (behaviour / perilaku )
    public function bersuara()
    {
        return "meowng... meowng ... meowng ...";
    }

    public function berburu()
    {
        return "berburu ikan";
    }
}

// membuat object (inisiasi object)
$kucing1 = new Kucing("Hitam");
echo "Warna Kucing 1: " . $kucing1->warna . "<br>";

$kucing2 = new Kucing("Oren");
echo "Warna Kucing 2: " . $kucing2->warna . "<br>";
