<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","datamobil") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details
$id= $data['id'];
$nama_mobil = $data['nama_mobil'];
$merk_mobil= $data['merk_mobil'];
$warna_mobil = $data['warna_mobil'];
$harga_mobil = $data['harga_mobil'];


//insert data ke table tbl_emp 
$sql = "INSERT INTO jenismobil(id,nama_mobil,merk_mobil,warna_mobil,harga_mobil)
VALUES('$id','$nama_mobil','$merk_mobil','$warna_mobil','$harga_mobil')";
if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>