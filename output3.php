<?php
    // variabel baru
    session_start();
    $_SESSION['nama']=$_POST["nama"];
    $_SESSION['nim']= $_POST["nim"];
    $_SESSION['umur']= $_POST["umur"];
    $_SESSION['tinggi'] =$_POST["tinggi"];
    $_SESSION['hobi']=$_POST["hobi"];

    //menampilkan data
    echo "Nama Lengkap = " . $_SESSION['nama'] . "<br>";
    echo "Nim = " . $_SESSION['nim'] . "<br>";
    echo "Umur = " . $_SESSION['umur']. "<br>";
    echo "tinggi = " . $_SESSION['tinggi'] . "<br>";
    echo "Hobi = " . $_SESSION['hobi'] . "<br>";
       
?>
