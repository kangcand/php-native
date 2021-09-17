<?php
class OrangTua
{
    private $gaji = 1000000;
    protected $uangJajan = 5000;

    public function gaji()
    {
        return $this->gaji;
    }
}

class Anak extends OrangTua
{
    public function kepoGaji()
    {
        return $this->gaji;
    }
    public function uangJajan()
    {
        return $this->uangJajan;
    }
}

$cecep = new OrangTua();
echo "Uang Gaji: " . $cecep->gaji() . "<br>";

$ahmad = new Anak;

echo "Gaji Sibapak : " . $ahmad->kepoGaji() . "<br>";
echo "Uang Jajan Saya : " . $ahmad->uangJajan();
