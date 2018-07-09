	<div id="content" class="content">
		<div class="well content-header center-block">
			<div>
		    	<h1>Rumah Qur'an Darul Falah</h1>
		    	<h4>This is Addreess of your Company</h4>
			    <button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn">
			        <i class="glyphicon glyphicon-th-list"></i>
			        Toggle Menu
			    </button>
			    <button type="button" id="" class="btn btn-primary">
			        <i class=""></i>
			        Tambah Data Pegawai
			    </button>
			</div>

			<div class="well center-block">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr class="">
								<th class=""> ID Pegawai</th>
								<th class=""> Nama</th>
								<th class=""> Alamat</th>
								<th class=""> JK</th>
								<th class=""> NO HP</th>
								<th class=""> E-mail</th>
<?php 
if ($level == '1') { ?>
								<th class=""> Aksi</th>
						<?php }
						?>
							</tr>
						</thead>
						<tbody>
						<?php 
						foreach ($tpegawai as $key => $value) {?>
							<tr class="">
								<td class=""> <?php echo $value['id']?></td>
								<td class=""> <?php echo $value['Nama']?></td>
								<td class=""> <?php echo $value['alamat']?></td>
								<td class=""> <?php echo $value['jenis_kelamin']?></td>
								<td class=""> <?php echo $value['no_hp']?></td>
								<td class=""> <?php echo $value['email']?></td>
<?php 
if ($level == '1') { ?>
								<td class=""><button class="btn btn-info btn-block">Edit</button><button class="btn btn-danger btn-block">Hapus</button></td>
<?php }?>	
							</tr>
						</tbody>
					</table>
				</div>
<!-- contoh -->
<div class="container-fluid">
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">LOGO</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Alumni</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Berita</a>
	      </li>
	    </ul>
	      <a class="btn btn-outline-danger my-2 my-sm-0" href="<?php echo base_url() ?>admin/welcome/logout">Logout</a>
	  </div>
	</nav><br>

	<h1 class="text-center">Daftar Alumni</h1>

	<div class="row justify-content-center">
		<div class="col-10">
			<button type="button" class="btn btn-link">Tambah</button>
			<table class="table table-striped table-responsive-sm">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">No Alumni</th>
			      <th scope="col">NIM</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Email</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>000025</td>
			      <td>5520111171</td>
			      <td>Otto</td>
			      <td>@mdo</td>
			      <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Edit</button> <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal2">Hapus</button></td>
			    </tr>
			    <tr>
			      <th scope="row">1</th>
			      <td>000025</td>
			      <td>5520111171</td>
			      <td>Otto</td>
			      <td>@mdo</td>
			      <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Edit</button> <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal2">Hapus</button></td>
			    </tr>
			    <tr>
			      <th scope="row">1</th>
			      <td>000025</td>
			      <td>5520111171</td>
			      <td>Otto</td>
			      <td>@mdo</td>
			      <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Edit</button> <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal2">Hapus</button></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>      


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal2Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="alert alert-danger" role="alert">
		  <strong>Anda Yakin?</strong>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      	<div class="modal-header">
       		<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	  <span aria-hidden="true">&times;</span>
        	</button>
      	</div>
      	<div class="modal-body">
	        <form>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputnoAlumni">No Alumni</label>
			      <input type="text" class="form-control" id="inputnoAlumni" placeholder="No Alumni" readonly>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputNPM">NPM</label>
			      <input type="text" class="form-control" id="inputNPM" placeholder="NPM" readonly>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="jikaakulupa">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Address</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Address 2</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">City</label>
			      <input type="text" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">State</label>
			      <select id="inputState" class="form-control">
			        <option selected>Choose...</option>
			        <option>...</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Zip</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <label class="form-check-label">
			        <input class="form-check-input" type="checkbox"> Check me out
			      </label>
			    </div>
			  </div>
			</form>
		</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Save changes</button>
      	</div>
    </div>
  </div>
</div>
<!-- end of contoh -->
			</div>
		</div>
	</div>
<?php	
}
?>
</div>

	<div id="content" class="content">
		<div class="well content-header center-block">
		    	<h1>Rumah Qur'an Darul Falah</h1>
		    	<h4>This is Addreess of your Company</h4>
			<div style="float: left;">
				<form class="form-inline">
				    <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
				        <i class="glyphicon glyphicon-th-list"></i>
				        Toggle Menu
				    </button>
				    <?php if ($level == '1') { ?>
					    <button type="button" id="" class="btn btn-info" data-toggle="modal" data-target="#Modal....">
					        <i class=""></i>
					        Lihat Data Absensi
					    </button>	
				    <?php } ?>
				    <div class="form-group">
						<input type="text" class="form-control" style="width: 270px;" placeholder="Input pencarian data berdasarkan....">
							<select class="form-control"> 
								<option> Nama</option>
								<option> Alamat</option>
								<option> Jenis Kelamin</option>
								<option>1</option>
							</select>
						<button type="submit" class="btn btn-info"> Search</button>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="well center-block">
				<div class="table-responsive">
					<table class="table table-condensed">
						<thead>
							<tr class="info text-center">
								<th class="text-center vertical-middle" rowspan="2" > ID</th>
								<th class="text-center vertical-middle" rowspan="2"> Nama</th>
						<?php if ($level == '1') { ?>
								<th class="text-center vertical-middle" colspan="4"> Jadwal Kelas</th>
								<th class="text-center vertical-middle" rowspan="2" style="max-width: 10px;"> Aksi</th>
							</tr>
							<tr class="info" style="font-size: 11px;">
								<th class="text-center vertical-middle" style="max-width: 20px;"> 11.00 s/d 12.00</th>
								<th class="text-center vertical-middle" style="max-width: 20px;"> 13.30 s/d 15.00</th>
								<th class="text-center vertical-middle" style="max-width: 20px;"> 16.00 s/d 17.30</th>
								<th class="text-center vertical-middle" style="max-width: 20px;"> 18.00 s/d 19.30</th>
							</tr>
						<?php } ?>
						</thead>
						<tbody>
						<?php foreach ($tpegawai as $key => $value) {?>
							<form method="post" action="<?php echo base_url ('admin/Beranda/absensi') ?>">

								<input type="hidden" name="absen_id" value="<?php echo $value ['id'] ?>">

								<tr class="">
									<td class="vertical-middle"> <?php echo $value['id']?></td>
									<td class="vertical-middle"> <?php echo $value['Nama']?></td>
								<?php if ($level == '1'){ ?>
									<td class="text-center vertical-middle"><input type="checkbox" name="jadwal_1" value="1"></td>
									<td class="text-center vertical-middle"><input type="checkbox" name="jadwal_2" value="2"></td>
									<td class="text-center vertical-middle"><input type="checkbox" name="jadwal_3" value="3"></td>
									<td class="text-center vertical-middle"><input type="checkbox" name="jadwal_4" value="4"></td>
									<td style="width: 105px;">
										<button type="submit" class="btn btn-warning glyphicon glyphicon-save" id="" > </button>
										<button type="" class="btn btn-info glyphicon glyphicon-edit" id=""> </button>
									</td>
								<?php } ?>
								<?php if ($level == '2'){ ?>
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
								<?php } ?>
								</tr>
							</form>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>