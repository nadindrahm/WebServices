<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("datamobil");
 
$dataxml =foreach($jenismobil as $mobil)
{
   $id = $mob simplexml_load_file('data.xml');
 
il['id'];
   $nama_mobil = $mobil->nama_mobil;
   $merk_mobil = $mobil->merk_mobil;
   $warna_mobil = $mobil->warna_mobil;
   $harga_mobil = $mobil->harga_mobil;

   $query = "INSERT INTO jenismobil
                 VALUES ('$nama_mobil', '$merk_mobil', '$warna_mobil', 'harga_mobil') ";
   mysql_query($query);
}
 
?>