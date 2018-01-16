<!DOCTYPE html> 
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tambahAnggota.css">
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
    
    <form action="" method="post">
 <h2><i class="fa fa-user"></i>Form Pendaftaran</h2>
 <br/>
 <div class="form-group">
  <input type="text" class="input-mode" placeholder="Nama Lengkap" name="nama_anggota" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="No.HP" name="no_hp" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="BANK" name="bank" required> 
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="No.Rekening" name="no_rek" required> 
 </div>
 
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="Alamat" name="alamat" required> 
 </div>
 <br/>
 <div class="form-group form-cek">

 <div class="form-group">
  <button class="btn btn-submit" type="submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>
 <br/>

 </form>