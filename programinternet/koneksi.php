<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db_name   = 'akademik';

    $koneksi = mysqli_connect($server, $user, $password, $db_name);

    if($koneksi){
        //echo "Berhasil";
    }else{
        echo "Gagal";
    }