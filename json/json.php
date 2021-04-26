<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM jenismobil";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'id' => $row ['id'],
                'nama_mobil' => $row['nama_mobil'],
                'merk_mobil' => $row['merk_mobil'],
                'warna_mobil' => $row['warna_mobil'],
                'harga_mobil' => $row['harga_mobil'],
            ) );
        }
        
    
    echo json_encode ( array('Data Mobil' => $result) );
    }
?>