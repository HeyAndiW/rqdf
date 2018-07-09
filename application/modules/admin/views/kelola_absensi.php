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
			</div><br><br>
		</div> 
		<div class="content-body center-block">
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
					<div class="clearfix"></div>
					<br>
				<div class="table-responsive">
					<table class="table table-condensed">
						<thead>
							<tr class="info text-center">
								<th class="vertical-middle" style="width: 50px;"> No</th>
								<th class="vertical-middle" > Nama</th>
								<th class="vertical-middle" > Jabatan</th>
							<?php if ($level == '1') { ?>
								<th class="text-center vertical-middle"> Keterangan</th>
							<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($tpegawai as $key => $value) {?>
								<tr class="">
									<td class="vertical-middle"> <?php echo $value['id']?>
										<input type="hidden" class="<?php echo $value['id'] ?>" name="absen_id[]" value="<?php echo $value ['id'] ?>">
										<input type="hidden" class="nilaistatus <?php echo $value['id'] ?>" name="status[]" value="Tidak Hadir">
									</td>
									<td class="vertical-middle"> <?php echo $value['Nama']?></td>
									<td class="vertical-middle"> <?php echo $value['jabatan']?></td>
								<?php if ($level == '1'){ ?>
									<td class="text-center vertical-middle"><label class="status" data-id="<?php echo $value['id'] ?>" >Tidak Hadir</label></td>
								<?php } ?>
								<!-- <?php if ($level == '2'){ ?>
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
									<td class="text-center vertical-middle"></td>	
								<?php } ?> -->
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				<?php if ($level == '1') { ?>
					<div class="text-right">
					<button type="submit" class="btn btn-warning glyphicon glyphicon-save" style="margin-right: 110px;" > Simpan</button>
					</div>
				<?php } ?>
				</form>
			</div>
		</div>
	</div>
</div>
	