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
					<div class="clearfix"></div>
					<br>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr class="info text-center">
								<th class="vertical-middle" style="width: 50px;" rowspan="2" > No</th>
								<th class="vertical-middle" rowspan="2" > Nama</th>
								<th class="vertical-middle" rowspan="2" > Jabatan</th>
								<th class="vertical-middle text-center" colspan="4"> Jumlah Kehadiran</th>
								<th class="vertical-middle text-center" rowspan="2" style="max-width: 30px;"> Jumlah</th>
								<th  class="vertical-middle text-center" rowspan="2"> Detail</th>
							</tr>
							<tr class="info" style="font-size: 11px;">
								<th class="text-center" style="max-width: 30px;" > 11.00 s/d 12.00</th>
								<th class="text-center" style="max-width: 30px;" > 13.30 s/d 15.00</th>
								<th class="text-center" style="max-width: 30px;" > 16.00 s/d 17.30</th>
								<th class="text-center" style="max-width: 30px;" > 18.00 s/d 19.30</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=0;$i<count($jadwal1);$i++) {?>
								<tr>
									<td><?php echo $i+1 ?></td>
									<td><?php echo $jadwal1[$i]['Nama'] ?></td>
									<td><?php echo $jadwal1[$i]['jabatan'] ?></td>
								<!-- <?php if ($level == '1'){ ?>
									<td class="text-center vertical-middle"><label class="status" data-id="<?php echo $jadwal1[$i]['id'] ?>" >Tidak Hadir</label></td>
								<?php } ?> -->
									<td class="text-center vertical-middle"> <?php echo @$jadwal1[$i]['total']?></td>
									<td class="text-center vertical-middle"> <?php echo @$jadwal2[$i]['total']?></td>
									<td class="text-center vertical-middle"> <?php echo @$jadwal3[$i]['total']?></td>
									<td class="text-center vertical-middle"> <?php echo @$jadwal4[$i]['total']?></td>
									<td class="text-center vertical-middle" style="max-width: 30px;"> <?php echo @$jadwal1[$i]['total'] + @$jadwal2[$i]['total'] + @$jadwal3[$i]['total'] + @$jadwal4[$i]['total']; ?> </td>
									<td class="text-center vertical-middle" style="max-width: 30px;"><a class="btn btn-success" href=" <?php echo base_url('admin/Absensi/detail_absensi?id=' . $jadwal1[$i]['id']) ?> ">Detail</a></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>

				</form>
			</div>
		</div>
	</div>
</div> 