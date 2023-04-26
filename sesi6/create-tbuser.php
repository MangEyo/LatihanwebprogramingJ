<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbuser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS MySQL

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if ($cnn){
        echo "Koneksi ke DBMS MySQL Sukses <br>";
        $hsl = mysqli_query($cnn, $s_db);
        if($hsl){
            echo "Membuat Tabel tbuser suskses<br>";
        }else{
            echo "Membuat Tabel tbuser Gagal<br>";
        }

    }else{
        echo "Koneksi ke DBMS MySQL Gagal <br>";
    }