<?php
$host     = 'localhost';
$user     = 'id18234133_fido'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = 'Password123#';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'id18234133_rentalmobil_apk'; //diisi dengan nama database kalian
 
$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
?>