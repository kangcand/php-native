<?php
if(isset($_POST['save']))
{
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    // echo"<pre>";
    // var_dump($kelas);
    // echo"</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            
            <?php
            $no = 1;
            for($i=0; $i < count($nama); $i++){ ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $kelas[$i]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
</body>
</html>