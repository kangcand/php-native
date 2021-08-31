<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="get">
        Nama Anda : <input type="text" name="nama">
        <br>
        <input type="submit" value="Simpan" name="input">
        <input type="reset" value="Clear" >
    </form>
</body>
</html>

<?php
if (isset($_GET['input'])) {
    $a = $_GET['nama'];
    echo "Nama Saya adalah <b>$a</b>";
}
?>