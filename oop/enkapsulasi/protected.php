<?php
class Laptop
{
    public $pemilik;

    protected function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }

    public function paksaHidupkanLaptop()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new Laptop();
$laptopAnto->pemilik = "Anto<br>";

echo $laptopAnto->pemilik;
// echo $laptopAnto->hidupkanLaptop();
echo $laptopAnto->paksaHidupkanLaptop();
