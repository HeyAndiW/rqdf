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
				    <button type="button" id="" class="btn btn-info" data-toggle="modal" data-target="#ModalTambahDataPeg">
				        <i class=""></i>
				        Tambah Data Pegawai
				    </button>	
		    	<?php } ?>
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
		    </div><br><br>
		</div>
		<div class="content-body center-block">
			<div class="clearfix"></div>    
			<div class="well center-block">
				<div class="table-responsive">
					<table class="table table-condensed">
						<thead>
							<tr class="">
								<th class="info"> No</th>
								<th class="info"> Nama</th>
								<th class="info"> Jabatan</th>
								<th class="info"> Alamat</th>
								<th class="info"> JK</th>
								<th class="info"> No Hp</th>
								<th class="info"> E-mail</th>
							<?php if ($level == '1') { ?>
								<th class="info"> Aksi</th>
							<?php } ?>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($tpegawai as $key => $value) {?>
							<tr class="">
								<td class=""> <?php echo $value['id']?></td>
								<td class=""> <?php echo $value['Nama']?></td>
								<td class=""> <?php echo $value['jabatan']?></td>
								<td class=""> <?php echo $value['alamat']?></td>
								<td class=""> <?php echo $value['jenis_kelamin']?></td>
								<td class=""> <?php echo $value['no_hp']?></td>
								<td class=""> <?php echo $value['email']?></td>
							<?php if ($level == '1') { ?>
								<td class="" style="width: 110px;">
								<button class="btn btn-outline-success button-edit" data-toggle="modal" data-target="#ModalEditDataPeg" 
										data-id="<?php echo $value['id'] ?>"
										data-nama="<?php echo $value['Nama'] ?>"
										data-jabatan="<?php echo $value['jabatan'] ?>"
										data-alamat="<?php echo $value['alamat'] ?>"
										data-jk="<?php echo $value['jenis_kelamin'] ?>"
										data-nohp="<?php echo $value['no_hp'] ?>"
										data-email="<?php echo $value['email'] ?>"
										><i class="glyphicon glyphicon-edit"></i></button>

								<button class="btn btn-danger button-delete" data-toggle="modal" data-target="#ModalDeleteDataPeg"
										data-id="<?php echo $value['id'] ?>"
										data-nama="<?php echo $value['Nama'] ?>"
										data-jabatan="<?php echo $value['jabatan'] ?>"
										data-alamat="<?php echo $value['alamat'] ?>"
										data-jk="<?php echo $value['jenis_kelamin'] ?>"
										data-nohp="<?php echo $value['no_hp'] ?>"
										data-email="<?php echo $value['email'] ?>"
										><i class="glyphicon glyphicon-trash"></i></button></td>
							<?php }?>	
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>