<html>
<head><title>Pengolahan Form</title></head>
<body>
  <FORM ACTION="" METHOD="POST">
    Nama Anda : <input type="text" name="nama"><br>
    <input type="submit" name="Input" value="Input">
  </FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
    $a = $_POST['nama'];
    echo "Nama Anda : <b>$a</b>";
}
?>