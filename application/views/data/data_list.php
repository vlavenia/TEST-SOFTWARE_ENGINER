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
			<a href="#">Dashboard</a>
			<a href="<?php echo base_url("HomeController/dataProyek") ?>">Data Proyek</a>
			<a href="<?php echo base_url('HomeController/dataLokasi') ?>">Data Lokasi</a>
		</aside>
		<div class="content">
			<header>

				<div>Dashboard Admin</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
				

			</header>

			<main>
				<a href="<?php echo base_url('HomeController/') ?>" class="btn-add">Add new</a>
				<div class="card animated fadeInDown">
					<table>
					<thead>
						<tr>
							<th>Id Proyek</th>
							<th>Nama Proyek</th>
							<th>Nama Lokasi</th>
							<th>Action</th>
							
						</tr>
						<tbody>
							<?php foreach($response_data as $item): ?>
							<tr>
								<td> <?= $item['namaProyek'] ?></td>
								<td> <?= $item['client'] ?></td>
								<td> <?= $item['tglMulai'] ?></td>
								<td>
									<a href="<?php echo base_url() ?>" class="btn btn-edit">Edit</a>
									<a onclick="return confirm('Are you sure want to delete these data ?')"
									href="<?php echo base_url() ?>" class="btn btn-delete">Delete</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</thead>
				</table>
				</div>
				
		
			</main>
		</div>

	</div>
	
		
</body>
</html>