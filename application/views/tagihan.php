<!DOCTYPE html> 
<html>
<head>
	<title>Tagihan Anggota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tagihan.css">
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
					<li><a href="<?php echo base_url()."index.php/login/home" ?>">Home</a></li>
					<li><a href="<?php echo base_url()."index.php/login/data" ?>">Data Anggota Koperasi</a></li>
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Log out</a></li>
				
				</ul>
			</nav>
		</div>
    </header>

    <body style="background-color: #6495ED">

  <div class="container">
  <!-- <div>
	<ul class="header" style="padding-bottom:20px;">
		<li class="dropdown" style="float:right; font-family:arial; font-size:20px;background-color: #dcdcdc; border-radius:8px;list-style-type:none;">
				<?php //echo $this->session->userdata('nama_anggota') ?>
					<div class="dropdown-content" style="font-family:arial; font-size:8px;background-color: #dcdcdc;border-radius:8px; list-style-type:none;">
					<a href="<?php //echo base_url()."index.php/login/destroy"?>">Logout</a></div>
			</li>
			</ul>
		</div> -->
    <h1 id="hh">TAGIHAN PINJAMAN</h1>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Bulan</th>
          <th>Angsuran Pinjaman</th>
          <th>Jasa Pinjaman</th>
          <th>Jumlah Potongan</th>
          <th>Tanggal Pembayaran</th>
          
        </tr>
      </thead>
      <tbody>
        <!-- <?php 
          //foreach ($mhs->result() as $row) {
        ?> -->
              <tr>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td> 
                <td>
                   <!--  <a href="<?php //echo base_url()."index.php/login/edit_data/".$row->npm;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                    <?php// if($this->session->userdata('level') == '1'){?>
                      <a href="<?php// echo base_url()."index.php/login/delete_data/".$row->npm;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    <?php ?> -->
                </td>      
              </tr>
       <!--  <?php
          
        ?> -->
      </tbody>
    </table>

    
  </div>

</body>
</html>
    