<?php
// buat class komputer
class komputer
{

    public $merk = "acer";

    public function lihat_spec()
    {
        return "Spec Komputer: Acer,
     Processor Intel core i7, Ram 4GB";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{
    public $merk = "asus";

    public function lihat_spec()
    {
        return "Spec Laptop: Asus,
     Processor Intel core i5, Ram 2GB";
    }

    public function lihat_spec_komputer()
    {
        return parent::lihat_spec();
    }
    public function lihat_merk_komputer()
    {
        return parent::$merk;
    }
}
// buat objek dari class laptop (instansiasi)
$gadget_baru = new laptop();

//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();

echo "<br />";

//panggil method lihat_spec_komputer()
echo $gadget_baru->lihat_spec_komputer();

//panggil method lihat_merk_komputer()
echo $gadget_baru->lihat_merk_komputer();
