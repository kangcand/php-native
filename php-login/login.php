<?php
session_start();
include 'models/db.php';
if (isset($_POST['login'])) {
    $db = new Database();
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $result = mysqli_query(
        $db->koneksi,
        "SELECT * FROM users WHERE email='$email' and password='$pass'"
    );
    $row = mysqli_num_rows($result);
    // var_dump($row);
    if ($row > 0) {
        $_SESSION['login'] = $pass;
        echo "<script type='text/javascript'>
        alert('Login Berhasil!')
            window.location = 'admin/index.php'
        </script>";
        // ;
    } else {
       echo "<script type='text/javascript'>
        alert('Email atau Password Anda Salah!')
            window.location = 'login.php'
        </script>";
    }
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
    <center>Halaman Login</center>
    <fieldset>
        <legend>Halaman Login</legend>
        <form action="" method="post">
            <input type="email" placeholder="Masukan Email" name="email">
            <input type="password" placeholder="Masukan Password" name="password">
            <button type="submit" name="login">Login</button>
        </form>
    </fieldset>
</body>
</html>