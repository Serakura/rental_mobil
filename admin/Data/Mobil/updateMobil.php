<?php 
require"../connect.php";
include'function.php';
$nopol_mobil		=$_POST['nopol_mobil'];
$merek_mobil		=$_POST['merek_mobil'];
$warna_mobil		=$_POST['warna_mobil'];
$tahun_pembuatan	=$_POST['tahun_pembuatan'];
$kapasitas			=$_POST['kapasitas'];
$tarif				=$_POST['tarif'];
$status_mobil		=$_POST['status_mobil'];

$gambarLama		 =$_POST['gambarLama'];

if($_FILES['gambar']['error'] === 4){
			$gambar = $gambarLama;
		}else{
			$gambar	= upload();
		}


$query=mysqli_query($koneksi, "UPDATE mobil SET merek_mobil='$merek_mobil', warna_mobil='$warna_mobil', tahun_pembuatan='$tahun_pembuatan', kapasitas='$kapasitas ', tarif='$tarif', status_mobil='$status_mobil', gambar='$gambar' WHERE nopol_mobil='$nopol_mobil'");

if ($query){
 	?>
 	<script>
 		alert('Data Berhasil di Edit');
 		document.location='?page=mobil&pesan=update';

 	</script>

<?php }	

?>