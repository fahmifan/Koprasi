<!DOCTYPE html> 
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body>
	<header>
		<div class="navbar">
			<img id="logo" src="<?php echo base_url(); ?>assets/image/lipi.png">
			<img class="menu-toggle" src="<?php echo base_url(); ?>assets/image/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					<li class="active-link">Home</li>
					<li><a href="<?php echo base_url()."index.php/login/Data" ?>">Data Anggota Koperasi</a></li>
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Log out</a></li>
					
					
				</ul>
			</nav>
			
		</div>
	</header>

	<div class="banner cycle-slideshow">
		<span class="cycle-prev">&#9001</span>
		<span class="cycle-next">&#9002</span>
		<span class="cycle-pager"></span>
		<img src="<?php echo base_url(); ?>assets/image/Gambar1.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar2.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar3.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar4.jpg" height="100%" width="100%">
		
	</div>

	<div class="container">
		<div class="row">
			<div class="tracking col-sm-6">
				<form method="POST" name="tracking-finder">
					<label>Cari Nomer Anggota</label>
					<br>
					<input type="text" placeholder="e.g xxxx">
					<br>
					<div id="button">
							<a href="#resi">Temukan</a>
					</div>
			</form>
			</div>
			
					<div style="padding-top:30px" class"fromto col-sm-6">
						<div id="button">
						<a href="#resi">Tambah Anggota Baru</a>

					

					</div>

					
</body>
</html>