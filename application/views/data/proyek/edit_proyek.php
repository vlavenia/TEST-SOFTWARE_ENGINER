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
				<div>Edit Data Proyek</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
			</header>

			<main>
				<div class="card animated fadeInDown">
					<div class="container">
						<form action="<?php echo base_url('ProyekController/updateDataProyek/'.$response_data['id']) ?>" method="POST">
							<div class="form-input">
								<label for="namaProyek">Nama Proyek : </label>
								<input type="text" name="namaProyek" required autofocus  value="<?= $response_data['namaProyek']?>" />
							</div>
							<div class="form-input">
								<label for="client">Client: </label>
								<input type="text" name="client" required value="<?= $response_data['client']?>" />
							</div>
							<div class="form-input">
								<label for="tglMulai">Tanggal Mulai: </label>
								<input type="date" name="tglMulai" required value="<?= $response_data['tglMulai']?>" />
							</div>
							<div class="form-input">
								<label for="tglSelesai">Tanggal Selesai: </label>
								<input type="date" name="tglSelesai" required value="<?= $response_data['tglSelesai']?>"/>
							</div>
							<div class="form-input">
								<label for="pimpinanProyek">Pimpinan Proyek: </label>
								<input type="text" name="pimpinanProyek" required value="<?= $response_data['pimpinanProyek']?>" />
							</div>
							<div class="form-input">
								<label for="keterangan">Keteragan: </label>
								<input type="text" name="keterangan" required value="<?= $response_data['keterangan']?>" />
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
