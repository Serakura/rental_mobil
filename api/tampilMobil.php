<?php
$ip = getHostByName(getHostName());
require 'core/init.php';
//Mencari berdasarkan merek dan kapasitas
if ($con) {
    $sql = "SELECT nama_kendaraan,nopol_mobil,merek_mobil,warna_mobil,tahun_pembuatan,kapasitas,tarif,CONCAT('http://$ip/rentalMobil/admin/images/upload/',gambar) AS gambar FROM mobil WHERE status_mobil=1";
    $result = $con->query($sql);
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($outp);
}
mysqli_close($con);
