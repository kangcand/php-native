<?php
class Komputer
{
    protected $jenisProcessor = "Intel Core I7";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends Komputer
{

    public function getProcessor()
    {
        return $this->tampilkanJenisProcessor();
    }
}

$laptop = new Laptop();
echo $laptop->jenisProcessor;
