<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Inheritance</title>
</head>
<body>
    <fieldset>
        <legend>OOP Inheritance</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jenis Mahluk</th>
                    <td>
                        <select id="" name="jenisMahluk">
                            <option value="Manusia">Manusia</option>
                            <option value="Malaikat">Malaikat</option>
                            <option value="Jin">Jin</option>
                            <option value="Setan">Setan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button name="save" type="submit">Simpan</button>
                    </th>
                    <td>
                        <button name="save" type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['save'])) {
    $jm = $_POST['jenisMahluk'];

    class JenisMahluk
    {
        public $jenis;

        public function __construct($a)
        {
            $this->jenis = $a;
        }
    }

    class Mahluk extends JenisMahluk
    {
        public function tugasMahluk()
        {
            if ($this->jenis == "Manusia") {
                $tugas = "Beribadah kepada Tuhan";
            } else if ($this->jenis == "Malaikat") {
                $tugas = "Beribadah kepada Tuhan";
            } else if ($this->jenis == "Jin") {
                $tugas = "Ada yang beribadah & ada juga yang menyesatkan manusia";
            } else {
                $tugas = "Mengganggu Manusia";
            }
            return $tugas;
        }
    }

    $mahluk = new Mahluk($jm);
    echo "Jenis Mahluk: " . $mahluk->jenis . "<br>";
    echo "Sifat Mahluk Tersebut: " . $mahluk->tugasMahluk();

}
?>
    </fieldset>
</body>
</html>
