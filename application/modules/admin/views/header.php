<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
</head>
<body class="bg-quran">
<!-- menu -->
<div class="wrapper">
<nav id="sidebar">
		<div class="sidebar-header">
			<img src="<?php echo base_url() . 'assets/images/' . $profile[0]['photo_name'] ?>" class="icon-user img-circle">
			<br><br>
			<h4 class="clearfix vcenter">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h4>
			<h3 class="clearfix vcenter"><?php echo $profile[0]['name']?></h3>
			<div class="clearfix"></div>
		</div>

		<ul class="list-unstyled components">
			<li><a href="<?php echo base_url('admin/Beranda/home')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="<?php echo base_url('admin/Beranda/kelola_data_pegawai')?>"><span class="glyphicon glyphicon-folder-close"></span><?php if ($level == '1') { ?> Kelola <?php } ?> Data Pegawai</a></li>
			<li id="sidebar-menu"><a role="button" ><span class="glyphicon glyphicon-check"></span> Absensi <span class="caret"></span></a>
				<ul id="" class="collapseMenu nav nav-pills nav-stacked">
					<?php if ($level == '1') { ?>
					<li><a href="<?php echo base_url('admin/Beranda/kelola_absensi_pegawai'); ?>" > Kelola Absensi</a></li><?php } ?>
					<li><a href="<?php echo base_url('admin/Absensi/hitung_jml')?>">Lihat Absensi</a></li>
				</ul>
				<!-- <ul id="myDIV" class="nav nav-pills nav-stacked"> -->
				<!-- </ul>  -->
			</li>			
			<li><a href="<?php echo base_url('admin/Beranda/kelola_informasi_jadwal'); ?>"><span class="glyphicon glyphicon-tasks"></span><?php if ($level == '1') { ?> Kelola <?php } ?> Informasi Jadwal</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> About</a></li>
		</ul>

		<br><br>
		<ul class="list-unstyled text-center sidebar-footer">
			<li><button class="btn btn-info btn-88 profile" data-toggle="modal" data-target="#myModal"
				data-photo = "<?php echo $profile[0]['photo_name']; ?>"
				data-uname = "<?php echo $username; ?>"
				data-name = "<?php echo $profile[0]['name']; ?>"
				data-baseurl = "<?php echo base_url(); ?>">PROFILE</button></li>
			<li><a href="<?php echo base_url('admin/welcome/logout') ?>" class="btn btn-danger btn-88">LOGOUT</a></li>
		</ul>
	</nav>
<!-- end of menu -->