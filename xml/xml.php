<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "datamobil") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_jenismobil
$sql = "select * from jenismobil";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('jenismobil');
    $track->addChild('nama_mobil', $row['nama_mobil']);
    $track->addChild('merk_mobil', $row['merk_mobil']);
    $track->addChild('warna_mobil', $row['warna_mobil']);
    $track->addChild('harga_mobil', $row['harga_mobil']);
}



print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>