<?php
class Ucapan
{
    public function siang()
    {
        return "selamat siang";
    }

    public function sore()
    {
        return "selamat sore";
    }

    public function __construct()
    {
        echo "selamat pagi <br>";
    }
}

$selamat = new Ucapan();
echo $selamat->siang() . "<br>";
echo $selamat->sore();
