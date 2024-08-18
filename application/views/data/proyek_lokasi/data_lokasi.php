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
			
			<a href="<?php echo base_url('HomeController/dataProyek') ?>">Data Proyek</a>
			<a href="#">Data Lokasi</a>
		</aside>
		<div class="content">
			<header>

				<div>Master Table Lokasi</div>
				<div class="btn-logout"><a href="<?php echo base_url() ?>">Logout</a></div>
				

			</header>

			<main>
				<a href="<?php echo base_url('homeController/createDataLokasi') ?>" class="btn-add">Add new</a>
				<div class="card animated fadeInDown">
					<table>
					<thead>
						<tr>
							
							<th>Nama Lokasi</th>
							<th>Negara</th>
							<th>Provinsi</th>
							<th>Kota</th>
							<th>Created At</th>
							<th>Action</th>
							
						</tr>
						<tbody>
							<?php foreach($response_data as $dataLokasi): ?>
							<tr>
								
								<td><?= $dataLokasi['namaLokasi'] ?></td>
								<td><?= $dataLokasi['negara'] ?></td>
								<td><?= $dataLokasi['provinsi'] ?></td>
								<td><?= $dataLokasi['kota'] ?></td>
								<td><?= $dataLokasi['createdAt'] ?></td>
								
								<td>
						<a href="<?php echo base_url('LokasiController/editDataLokasi/'.$dataLokasi['id']) ?>" class="btn btn-edit">Edit</a>
						<a onclick="return confirm('Are you sure want to delete these data ?')"
						   href="<?php echo base_url('LokasiController/deleteDataLokasi/'.$dataLokasi['id'])  ?>" class="btn btn-delete">Delete</a>
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
