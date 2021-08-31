<?php
    $uangUcup = 75000;
    $beliMinum = 15000;
    $beliMakan = 25000;

    echo "Uang ucup = <b>$uangUcup</b>";
    echo "<hr>";
    $uangUcup -= $beliMinum;
    echo "Jajan minum <b>$beliMinum</b><br>";
    echo "Sisa uang Ucup jajan minum = <b>$uangUcup</b>";
    echo "<hr>";

    $uangUcup -=$beliMakan;
    echo "Jajan sosis bakar <b>$beliMakan</b><br>";
    echo "Sisa uang Ucup jajan sosis bakar + minum = 
          <b>$uangUcup</b>";
    echo "<hr>";

    $sedekah = $uangUcup * 0.1;
    echo "Sedekah ke musafir 10% dari 
         <b>$uangUcup</b> yaitu sebesar <b>$sedekah</b>";
    $uangUcup -= $sedekah;
    echo "<br>Sisa uang ucup = <b>$uangUcup</b>";
    echo "<hr>";

    $nemuUang = $uangUcup * 0.5;
    echo "nemu uang dijalan sebesar 50% dari sisa 
          uang ucup <b>$uangUcup</b> yaitu sebesar  
          <b>$nemuUang</b>";
    echo "<br>Sisa uang ucup sekarang = 
          <b>$nemuUang + $uangUcup</b>";
    echo "<hr>";
    $uangUcup += $nemuUang;
    echo "total uang ucup adalah <b>Rp. $uangUcup</b>";

?>