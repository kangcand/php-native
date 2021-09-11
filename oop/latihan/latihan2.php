<?php
class Segitiga
{
    public $alas;
    public $tinggi;
    public $a, $b, $c;

    public function luasSegitiga()
    {
        return ($this->alas * $this->tinggi) / 2;
    }

    public function kelilingSegitiga()
    {
        return ($this->a + $this->b + $this->c);
    }
}

$segitiga = new Segitiga();
// set property
$segitiga->alas = 10;
$segitiga->tinggi = 15;
$segitiga->a = 10;
$segitiga->b = 15;
$segitiga->c = 10;

echo "Alas Segitiga : " . $segitiga->alas . "<br>";
echo "Tinggi Segitiga : " . $segitiga->tinggi . "<br>";
echo "Sisi 1 : " . $segitiga->a . "<br>";
echo "Sisi 2 : " . $segitiga->b . "<br>";
echo "Alas 3 : " . $segitiga->c . "<br>";
echo "Luas Segitiga : " . $segitiga->luasSegitiga() . "<br>";
echo "Keliling Segitiga : " . $segitiga->kelilingSegitiga() . "<br>";
