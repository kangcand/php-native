<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OOP Inheritance</title>
  </head>
  <body>
    <fieldset>
      <legend>OOP Inheritance</legend>
      <form action="" method="post">
        <table>
          <tr>
            <th>Masukan Nama</th>
            <td>
              <input type="text" name="nama" required>
            </td>
          </tr>
          <tr>
            <th>Masukan NIM</th>
            <td>
              <input type="text" name="nim" required>
            </td>
          </tr>
          <tr>
            <th>Masukan Nama Dosen</th>
            <td>
              <input type="text" name="namaDosen" required>
            </td>
          </tr>
          <tr>
            <th>Masukan Mata Kuliah</th>
            <td>
              <input type="text" name="mataKuliah" required>
            </td>
          </tr>
          <tr>
            <th>Masukan Nilai</th>
            <td>
              <input type="number" min="1" max="100" name="nilai" required>
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
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $namaDosen = $_POST['namaDosen'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilai = $_POST['nilai'];

    class Mahasiswa
    {
        public $nim;
        private $nama;
        protected $nilai;

        public function __construct($nim, $nama, $nilai)
        {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->nilai = $nilai;
        }

        public function NamaMhs()
        {
            return $this->nama;
        }

        public function StatusNilai()
        {
            if ($this->nilai >= 75) {
                $status = "Lulus";
            } else if ($this->nilai >= 65) {
                $status = "Perbaikan";
            } else {
                $status = "Tidak Lulus";
            }
            return $status;
        }
    }

    class MataKuliah extends Mahasiswa
    {
        public $mataKuliah;
        public $namaDosen;
        public $status;

        public function Matkul($matkul, $dosen)
        {
            $this->mataKuliah = $matkul;
            $this->dosen = $dosen;
        }

        public function NilaiMhs()
        {
            return $this->nilai;
        }

        public function Grade()
        {
            if ($this->nilai >= 85) {
                $grade = "A";
            } elseif ($this->nilai >= 75) {
                $grade = "B";
            } elseif ($this->nilai >= 65) {
                $grade = "C";
            } else {
                $grade = "D";
            }
            return $grade;
        }

        public function StatusNilaiMhs()
        {
            $this->status = $this->StatusNilai();
            return $this->status;
        }
    }

    $data = new MataKuliah($nim, $nama, $nilai);
    $data->Matkul($mataKuliah, $namaDosen);
    echo "<br>NIM : " . $data->nim . "<br />";
    echo "Nama : " . $data->NamaMhs() . "<br />";
    echo "Mata Kuliah : " . $data->mataKuliah . "<br />";
    echo "Dosen : " . $data->dosen . "<br />";
    echo "Nilai : " . $data->NilaiMhs() . "<br />";
    echo "Grade : " . $data->Grade() . "<br />";
    echo "Status : " . $data->StatusNilaiMhs() . "<br />";
}
?>
    </fieldset>
  </body>
</html>
