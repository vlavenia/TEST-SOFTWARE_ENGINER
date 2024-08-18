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
			<a href="<?php echo base_url('HomeController') ?>">Dashboard</a>
			<a href="<?php echo base_url('HomeController/dataProyek') ?>">Data Proyek</a>
			<a href="<?php echo base_url('HomeController/dataLokasi') ?>">Data Lokasi</a>
		</aside>
		<div class="content">
			<header>

				<div>Create Data Lokasi</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
				

			</header>

			<main>
				<div class="card animated fadeInDown">
					<div class="container">
						<form action="<?php echo base_url('LokasiController/storeDataLokasi') ?>" method="post">
							<div class="form-input">
								<label for="nameLokasi">Nama Lokasi : </label>
								<input type="text" name="nameLokasi" required autofocus />
							</div>
							
							<div class="form-input">
								<label for="nameLokasi">Nama Proyek : </label>
								<input type="text" name="nameLokasi" required autofocus />
							</div>
							
				
								<br>
								<button type="submit" class="btn-add">Add new</button>
							
						</form>

    				</div>
				</div>
				
		
			</main>
		</div>

	</div>
	
		
</body>
</html>
