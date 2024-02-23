<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h3 class="page-heading mb-4">Data Mobil</h3>
<div class="row mb-2">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<button type="button" style="float:right;" class="btn btn-primary">
					<a href="?page=mobil" style="color: #fff;">Lihat Data Mobil</a>
				</button>
				<h3>Tambah Data Mobil</h3>
				<br>
				<form action="?page=simpanMobil" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="merek_mobil" class="form-label">Merk Mobil</label>
						<input type="text" name="merek_mobil" class="form-control" id="merek_mobil">
					</div>
					<div class="mb-3">
						<label for="nopol" class="form-label">Nomor Plat Mobil</label>
						<input type="text" name="nopol_mobil" class="form-control" id="nopol">
					</div>
					<div class="mb-3">
						<label for="warna" class="form-label">Warna Mobil</label>
						<input type="text" name="warna_mobil" class="form-control" id="warna">
					</div>
					<div class="mb-3">
						<label for="tahunPembuatan" class="form-label">Tahun Pembuatan</label>
						<input type="text" name="tahun_pembuatan" class="form-control" id="tahunPembuatan">
					</div>
					<div class="mb-3">
						<label for="kapasitas" class="form-label">Kapasitas</label>
						<input type="text" name="kapasitas" class="form-control" id="kapasitas">
					</div>
					<div class="mb-3">
						<label for="tarif" class="form-label">Tarif Sewa</label>
						<input type="text" name="tarif" class="form-control" id="tarif">
					</div>
					<div class="mb-3">
						<div class="form-group">
							<label for="status_mobil" class="form-label">Status</label>
							<br>
							<select class="form-control" name="status_mobil">
								<option selected>Pilih Status mobil</option>
								<option value="1">Ready</option>
								<option value="0">Booking</option>
							</select>
						</div>
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Gambar Mobil</label>
						<input class="form-control" name="gambar" type="file" id="formFile">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

