<?php 	
require '../connect.php';
$nopol_mobil=$_GET['nopol_mobil'];
$hapus=mysqli_query($koneksi,"DELETE FROM mobil WHERE nopol_mobil='$nopol_mobil'");
if ($hapus) {
?>
	<script>
 		alert('Data Berhasil di Hapus');
 		document.location='?page=mobil&pesan=hapus';
	</script>
<?php
}

 ?>