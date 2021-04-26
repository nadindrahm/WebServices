<?php

    require_once('koneksi.php');

    $id = $_POST['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
   

    $query = "INSERT INTO jenismobil (id,nama_mobil,merk_mobil,warna_mobil,harga_mobil)VALUES('$id','$nama_mobil','$merk_mobil','$warna_mobil','$harga_mobil')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>