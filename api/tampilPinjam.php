<?php
$id = $_POST["nomor_ktp"];
$ip = getHostByName(getHostName());

require 'core/init.php';

if($con){
    $sql = "SELECT mobil.merek_mobil,mobil.nopol_mobil,CONCAT('http://$ip/rentalMobil/admin/images/upload/',mobil.gambar) AS gambar,tanggal,durasi_sewa,total_bayar FROM `peminjaman` INNER JOIN mobil ON peminjaman.nopol_mobil=mobil.nopol_mobil INNER JOIN customer ON customer.nomor_ktp=peminjaman.nomor_ktp WHERE peminjaman.nomor_ktp='$id' AND motor.status_motor=0";
        $result = $con->query($sql);
        if(mysqli_num_rows($result)>0){
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($outp);
        } else {
            $result = "Tidak Ada Data Peminjaman!";
            echo json_encode(array('message'=>$result));
        }
} else {
    $result = "Gagal Terhubung!";
    echo json_encode(array('message'=>$result));
}
