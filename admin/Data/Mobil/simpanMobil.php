<?php 
require"../connect.php";
include'function.php';
$nopol_mobil		=$_POST['nopol_mobil'];
$merek_mobil		=$_POST['merek_mobil'];
$warna_mobil		=$_POST['warna_mobil'];
$tahun_pembuatan	=$_POST['tahun_pembuatan'];
$kapasitas			=$_POST['kapasitas'];
$tarif				=$_POST['tarif'];
$status_mobil				=$_POST['status_mobil'];

$gambar = upload();
		if (!$gambar) {
			return false;
		}

$cek_nopol=mysqli_query($koneksi, "SELECT * FROM mobil WHERE nopol_mobil='$nopol_mobil' ")or die(mysqli_error());

if (mysqli_num_rows($cek_nopol)>0){
 	?>
 	<script>
 		alert('Nomor Plat Sudah digunakan!! || Silahkan Input Ulang!');
 		window.location='?page=tambahMobil';

 	</script>

 	<?php  
 }else{

$query = mysqli_query($koneksi,"INSERT INTO mobil 
						(nopol_mobil,merek_mobil,warna_mobil,tahun_pembuatan,kapasitas,tarif,status_mobil,gambar)
 						VALUES 
 						('$nopol_mobil','$merek_mobil','$warna_mobil','$tahun_pembuatan','$kapasitas','$tarif','$status_mobil','$gambar')");


 	echo "<script>
 		alert('Data Berhasil diTambahkan');
 		window.location='?page=mobil';

 	</script>";
 }	
 
?>