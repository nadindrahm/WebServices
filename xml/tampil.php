<?php
include ('connect.php');
$xml = simplexml_load_file('data.xml'); //parse the xml file into object
foreach( $xml->children() as $mobil) 
{
$nama_mobil = $mobil->nama_mobil; //get the childnode nama_mobil
$merk_mobil = $mobil->merk_mobil; //get the child node merk_mobil
$warna_mobil = $mobil->warna_mobil; //get the child node warna_mobil
$harga_mobil = $mobil->harga_mobil; //get the child node harga_mobil

echo 'nama_mobil : '.$nama_mobil.'<br />';
echo 'merk_mobil : '.$merk_mobil.'<br />';
echo 'warna_mobil : '.$warna_mobil.'<br />';
echo 'harga_mobil : '.$harga_mobil.'<br />';
echo '<br>';
$query = "INSERT INTO jenismobil
        VALUES ('', '$nama_mobil', '$merk_mobil', '$warna_mobil','harga_mobil') ";
   mysqli_query($koneksi, $query);
}
?>