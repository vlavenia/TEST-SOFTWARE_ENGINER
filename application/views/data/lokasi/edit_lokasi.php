<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyek Test Vega</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css">
</head>
<body>
	
	<div id="defaultLayout">
		<aside>

			<a href="<?php echo base_url('ProyekController') ?>">Data Proyek</a>
			<a href="<?php echo base_url('LokasiController') ?>">Data Lokasi</a>
		</aside>
		<div class="content">
			<header>
				<div>Create Data Lokasi</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
			</header>

			<main>
				<div class="card animated fadeInDown">
					<div class="container">
						<form action="<?php echo base_url('LokasiController/updateDataLokasi/'.$response_data['id']) ?>" method="POST">
							<div class="form-input">
								<label for="nameLokasi">Nama Lokasi : </label>
								<input type="text" name="nameLokasi" required autofocus value="<?= $response_data['namaLokasi'] ?>" />
							</div>
							<div class="form-input">
								<label for="negara">Negara: </label>
								<input type="text" name="negara" required value="<?= $response_data['negara'] ?>" />
							</div>
							<div class="form-input">
								<label for="provinsi">Provinsi: </label>
								<input type="text" name="provinsi" required value="<?= $response_data['provinsi'] ?>" />
							</div>
							<div class="form-input">
								<label for="kota">Kota: </label>
								<input type="text" name="kota" required value="<?= $response_data['kota'] ?>" />
							</div>
				
								<br>
								<button type="submit" class="btn-add">Save</button>
							
						</form>

    				</div>
				</div>
				
		
			</main>
		</div>

	</div>
	
		
</body>
</html>
