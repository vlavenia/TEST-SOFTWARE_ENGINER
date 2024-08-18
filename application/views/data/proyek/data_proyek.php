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

				<div>Master Table Proyek</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
				

			</header>

			<main>
				<a href="<?php echo base_url('ProyekController/createDataProyek') ?>" class="btn-add">Add new</a>
				<div class="card animated fadeInDown">
					<table>
					<thead>
						<tr>
							
							<th>Nama Proyek</th>
							<th>Client</th>
							<th>Tgl Mulai</th>
							<th>Tgl Selesai</th>
							<th>Pimpinan Proyek</th>
							<th>Keterangan</th>
							<th>Created At</th>
							<th>Action</th>
							
						</tr>
						<tbody>
							<?php foreach ($response_data as $dataProyek): ?>
							<tr>
								
								<td><?= $dataProyek['namaProyek']?></td>
								<td><?= $dataProyek['client']?></td>
								<td><?= $dataProyek['tglMulai']?></td>
								<td><?= $dataProyek['tglSelesai']?></td>
								<td><?= $dataProyek['pimpinanProyek']?></td>
								<td><?= $dataProyek['keterangan']?></td>
								<td><?= $dataProyek['createdAt']?></td>
								
								<td>
						<a href="<?php echo base_url('ProyekController/editDataProyek/'.$dataProyek['id']) ?>" class="btn btn-edit">Edit</a>
						<a onclick="return confirm('Are you sure want to delete these data ?')"
						   href="<?php echo base_url('ProyekController/deleteDataProyek/'.$dataProyek['id'])  ?>" class="btn btn-delete">Delete</a>
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
