<?php
// buat class komputer
class komputer
{
    public function __construct()
    {
        echo "Constructor dari class komputer <br />";
    }

    public function __destruct()
    {
        echo "Destructor dari class komputer <br />";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{
    public function __construct()
    {
        parent::__construct();
        echo "Constructor dari class laptop <br />";
    }

    public function __destruct()
    {
        echo "Destructor dari class laptop <br />";
        parent::__destruct();
    }
}

// turunkan class laptop ke chromebook
class chromebook extends laptop
{
    public function __construct()
    {
        parent::__construct();
        echo "Constructor dari class chromebook <br />";
    }

    public function __destruct()
    {
        echo "Destructor dari class chromebook <br />";
        parent::__destruct();
    }
}

// buat objek dari class chromebook (instansiasi)
$gadget_baru = new chromebook();

echo "Belajar OOP PHP <br />";
