<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Array</title>
</head>
<body>
    <fieldset>
        <legend>Input Data</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td>: <input type="number" name="jumlah" required></td>
                </tr>
                <tr>
                    <th>
                    </th>
                    <td>
                        <button type="submit" name="simpan">Simpan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>        
            </table>
        </form>
    </fieldset>
    <?php 
        if(isset($_POST['simpan']))
        {
            $row = $_POST['jumlah'];  
         
        ?>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <table >
            <form action="soal1pro.php" method="post">
                <?php 
                
                for($i = 1; $i <= $row; $i++)
                {
                ?>
                <tr>
                    <tr>
                        <th colspan=2>Data ke-<?php echo $i; ?></th>
                        <td>Nama</td>
                        <td><input type="text" name="nama[]"></td>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>Asal Sekolah</td>
                        <td><input type="text" name="asalSekolah[]" required></td>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>Nilai Bahasa Indonesia</td>
                        <td><input type="number" min="1" max="100" name="indo[]"></td>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>Nilai Bahasa Inggris</td>
                        <td><input type="number" min="1" max="100" name="inggris[]"></td>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>Nilai Matematika</td>
                        <td><input type="number" min="1" max="100" name="mtk[]"></td>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>Nilai Ilmu Pengetahuan Alam</td>
                        <td><input type="number" min="1" max="100" name="ipa[]"></td>
                    </tr>                    
                </tr>
                <?php 
                }
                ?>
                <tr>
                    <th></th>
                    <td><button type="submit" name="save">Simpan</button></td>
                </tr>
                
            </form>
        </table>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>