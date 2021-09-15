<?php
class Aritmatika
{
    public $bil1, $bil2;

    public function __construct($a, $b)
    {
        $this->bil1 = $a;
        $this->bil2 = $b;

    }

    public function penjumlahan()
    {
        return $this->bil1 + $this->bil2;
    }

    public function pengurangan()
    {
        return $this->bil1 - $this->bil2;
    }

    public function perkalian()
    {
        return $this->bil1 * $this->bil2;
    }

    public function pembagian()
    {
        return $this->bil1 / $this->bil2;
    }

    public function modulus()
    {
        return $this->bil1 % $this->bil2;
    }
}
