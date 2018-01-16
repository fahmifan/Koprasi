<!DOCTYPE html>
<html>
<head>
	<title>Informasi Anggota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
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
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<h1>INFORMASI ANGGOTA</h1>
		<div class="row">
			<div class="sender-info col-sm-6">
				<form method="POST" name="sender-info" action="<?php echo base_url('index.php/Login/info')?>">
					<table border="0" class="info">
						<tr>
							<td><span>No Anggota</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
						<tr>
							<td><span>Nama Anggota</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
						<tr>
							<td><span>No Hp</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
						<tr>
							<td><span>Bank</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
						<tr>
							<td><span>No Rekening</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
						<tr>
							<td><span>Alamat</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
					</table>
				</form>

				<table border="0" style="padding-top: 20px">
					<tr>
						<td>
							<div id="button" class="col-sm-2">
								<a href="">Kembali</a>
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
								<a href="">Pinjaman</a>
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
								<a href="">Tagihan</a>
							</div>
						</td>
					</tr>
					
				</table>
				
			</div>
		</div>
	</div>


</body>
</html>