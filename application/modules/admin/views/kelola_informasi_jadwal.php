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
				    
				    <div class="form-group">
						<input type="text" class="form-control" style="width: 270px;" placeholder="Input pencarian data berdasarkan....">
							<select class="form-control"> 
								<option> Nama</option>
								<option> Jabatan</option>
								<option> Alamat</option>
								<option> Jenis Kelamin</option>
							</select>
						<button type="submit" class="btn btn-info"> Cari</button>
					</div>
				</form>
			</div>

<div class="clearfix"></div>
		<div class="well center-block">
			<form method="post" action="<?php echo base_url ('admin/Beranda/absensi') ?>">
					<div class="">
						<label style="float: left; margin-top: 5px;"> Pilih Jadwal</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="jadwal"> 
							<option value="1"> 11.00 s/d 12.00</option>
							<option value="2"> 13.30 s/d 15.00</option>
							<option value="3"> 16.00 s/d 17.30</option>
							<option value="4"> 18.00 s/d 19.30</option>
						</select>
					</div>
					<div class="">
						<button type="submit" class="btn btn-warning glyphicon glyphicon-save" id="" > </button>
						<button type="" class="btn btn-info glyphicon glyphicon-edit" id=""> </button>	
					</div>
					<br>
			<div class="table-responsive">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th> NO</th>
							<th> Guru</th>
							<th> Hari</th>
							<th> Jam</th>
							<th> Kelas</th>
							<th> Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<button class="btn btn-outline-success button-edit" data-toggle="modal" data-target="#ModalEditDataPeg" ><i class="glyphicon glyphicon-edit"></i></button>

								<button class="btn btn-danger button-delete" data-toggle="modal" data-target="#ModalDeleteDataPeg"><i class="glyphicon glyphicon-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>