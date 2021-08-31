<?php
    $username = "candra";
    $email = "candra@gmail.com";
    $pass = "123";

    echo "username / email: <b>$username</b>";
    echo "<br>password : <b>$pass</b>";
    echo "<br>cek login : ".
    (($username == "candra1" || $email == "candra@gmail.com") 
    && ($pass == "123"));

?>
