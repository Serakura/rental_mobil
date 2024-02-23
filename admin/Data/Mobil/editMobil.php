<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
require'../connect.php';
$nopol_mobil =$_GET['nopol_mobil'];
$query  =mysqli_query($koneksi, "SELECT * FROM mobil WHERE nopol_mobil='$nopol_mobil'");
while ($data=mysqli_fetch_array($query)) : 
  ?>
  <h3 class="page-heading mb-4">Data Mobil</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <button type="button" style="float:right;" class="btn btn-primary">
            <a href="?page=mobil" style="color: #fff;">Lihat Data Mobil</a>
          </button>
          <h3>Edit Data Mobil</h3>
          <br>
          <form action="?page=updateMobil" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="merek_mobil" class="form-label">Merk Mobil</label>
              <input type="text" name="merek_mobil" value="<?= $data['merek_mobil']?>" class="form-control" id="merek_mobil">
              <input type="hidden" name="gambarLama" value="<?= $data['gambar']; ?>">
            </div>
            <div class="mb-3">
              <label for="nopol" class="form-label">Nomor Plat Mobil</label>
              <input type="text" disabled name="nopol_mobil" value="<?= $data['nopol_mobil']?>" class="form-control" id="nopol">
              <input type="hidden" name="nopol_mobil" value="<?= $data['nopol_mobil']?>" class="form-control" id="nopol">
            </div>
            <div class="mb-3">
              <label for="warna" class="form-label">Warna Mobil</label>
              <input type="text" name="warna_mobil" value="<?= $data['warna_mobil']?>" class="form-control" id="warna">
            </div>
            <div class="mb-3">
              <label for="tahunPembuatan" class="form-label">Tahun Pembuatan</label>
              <input type="text" name="tahun_pembuatan" value="<?= $data['tahun_pembuatan']?>" class="form-control" id="tahunPembuatan">
            </div>
            <div class="mb-3">
              <label for="kapasitas" class="form-label">Kapasitas</label>
              <input type="text" name="kapasitas" value="<?= $data['kapasitas']?>" class="form-control" id="kapasitas">
            </div>
            <div class="mb-3">
              <label for="tarif" class="form-label">Tarif Sewa</label>
              <input type="text" name="tarif" value="<?= $data['tarif']?>" class="form-control" id="tarif">
            </div>
            <div class="mb-3">
              <label for="status_mobil" class="form-label">Status</label>
              <br>
              <?php 
              $statusMobil = array('1','0'); 
              ?>
              <select class="form-control mb-3" aria-label="form-select-lg example" name="status_mobil">
               <?php 
               foreach($statusMobil as $key){
                if($key == $data['status_mobil']){

                  ?>
                  <option value="<?php echo $key; ?>" selected="selected">&nbsp; <?php if($key==1){echo "Ready";}else{ echo "Booking";} ?></option>
                <?php }else{ ?>

                 <option value="<?php echo $key; ?>">&nbsp; <?php if($key==1){echo "Ready";}else{ echo "Booking";} ?></option>
               <?php }
             } 
             ?>
           </select>
         </div>
         <div class="mb-3">
          <label for="formFile" class="form-label">Gambar Mobil</label>
          <img src="images/upload/<?= $data['gambar'] ?>"  width='100' height='100' >
          <input class="form-control" name="gambar" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>  
<?php endwhile; ?>
</body>
</html>
