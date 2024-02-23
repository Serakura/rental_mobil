<h3 class="page-heading mb-4">Mobil</h3>
<div class="card">
  <div class="card-body">
    <button type="button" style="float:right;" class="btn btn-primary">
      <a href="?page=tambahMobil" style="color: #fff;">Tambah Data</a>
    </button>
    <h5 class="card-title mb-4">List Data Mobil</h5>
    <br>
    <table class="table table-hover">
      <thead>
        <tr class="">
          <th>No</th>
          <th>Merek Mobil</th>
          <th>Nopol</th>
          <th>Warna</th>
          <th>Tahun Pembuatan</th>
          <th>Kasitas</th>
          <th>Tarif</th>
          <th>Status</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php 
        require'../connect.php';
        $no =1;    
        $query=mysqli_query($koneksi, "SELECT * FROM mobil")or die(mysqli_error());
        while($data=mysqli_fetch_array($query)): 
       ?>
       <tbody>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $data['merek_mobil']; ?></td>
            <td><?= $data['nopol_mobil']; ?></td>
            <td><?= $data['warna_mobil']; ?></td>
            <td><?= $data['tahun_pembuatan']; ?></td>
            <td><?= $data['kapasitas']; ?></td>
            <td><?= $data['tarif']; ?></td>
            <td><?php if($data['status_mobil']==1){echo "Ready";}else{ echo "Booking";} ?></td>
            <td><img src="images/upload/<?= $data["gambar"]; ?> " width='150' height='100'></td>
            <td>
              <a href="?page=editMobil&nopol_mobil=<?php echo $data['nopol_mobil']; ?>" class="link"><img name="pencil" src="images/action/edit.png"></a>
              <a href="?page=hapusMobil&nopol_mobil=<?php echo $data['nopol_mobil']; ?>" class="link"><img name="delete" src="images/action/delete.png" onclick="return confirm('Yakin Akan di Hapus ?')"></a>
            </td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
  </div>