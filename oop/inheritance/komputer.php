<?php

class Komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

class Laptop extends Komputer
{
    public function lihatSpec()
    {
        return "merk: $this->merk, processor: $this->processor,
        memori: $this->memori";
    }
}

// buat objek laptop
$laptop = new Laptop();
// set property laptop dari komputer
$laptop->merk = "Asus";
$laptop->processor = "Intel Core I5";
$laptop->memori = "4GB";

echo $laptop->beliKomputer() . "<br>";
echo $laptop->lihatSpec();
