<?php
    $a = 1; 
    $b = 10;
    $c = 9; 
    $d = 11;
    echo "Soal 1";
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($c > $b) && ($b > $c) : ". (($c > $b) && ($b > $c));
    echo "<br>($b > $d) && ($c < $b) : ". (($b > $d) && ($c < $b));

    // soal 2
    $uangTono = 10000;
    $uangTini = 8000;
    $uangToni = 15000;
    echo "<br><br>Soal 2";
    echo "<br>($uangToni > $uangTini) && ($uangToni > $uangTono) : ". (($uangToni > $uangTini) && ($uangToni > $uangTono));
    echo "<br>($uangToni > $uangTini) && ($uangToni < $uangTono) : ". (($uangToni > $uangTini) && ($uangToni < $uangTono));

    // soal 3
    $username = "candra";
    $email = "candra@gmail.com";
    $pass = "123";

    echo "<br><br>Soal 3";
    echo "<br>username / email: <b>$username</b>";
    echo "<br>password : <b>$pass</b>";
    echo "<br>cek login : ".
    (($username == "candra1" || $email == "candra@gmail.com") 
    && ($pass == "123"));
?>