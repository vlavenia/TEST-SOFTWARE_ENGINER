<html>
<head>
	<title>CI Tutorials</title>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<div id="defaultLayout">
	<aside>
		<a href="<?php echo base_url() ?>">Dashboard</a>
		<a href="<?php echo base_url() ?>">Data Proyek</a>
		<a href="<?php echo base_url() ?>">Data Lokasi</a>
	</aside>
	<div class="content">
		<header>
			<div><a href="<?php echo base_url('dashboard')?>">Home</a> </div>
			<div>
				<!-- <?php echo $this->session->userdata('name') ?> -->
				<a href="<?php echo base_url() ?>" class="btn-logout">LogOut</a>
			</div>
		</header>
