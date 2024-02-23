<?php 
 
$koneksi = mysqli_connect("localhost","root","","rentalmobil_apk");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>