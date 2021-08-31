<?php
if (isset($_POST['save'])) {
    $a = $_POST['nama'];
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
    <form action="hal3.php" method="post">
        <input type="hidden" name="namaDepan" value="<?php echo $a; ?>">
        Nama Belakang<input type="text" name="namaBelakang" required>
        <input type="submit" name="save" value="Simpan">
    </form>
</body>
</html>
