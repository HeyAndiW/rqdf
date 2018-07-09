	<div id="content" class="content">
		<div class="well content-header center-block">
	    	<h1>Rumah Qur'an Darul Falah</h1>
	    	<h4>This is Addreess of your Company</h4>
	    	<?php 
	    		$hari = array(
	    			'Minggu',
	    			'Senin',
	    			'Selasa',
	    			'Rabu',
	    			'Kamis',
	    			'Jum\'at',
	    			'Sabtu'
	    		);
	    	?>
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
				<div class="well panel panel-heading">
					<div class="panel">
					<table class="table" style="">
						<tr class="bg-info">
							<td style="min-width: 50px;">ID</td>
							<td style="min-width: 50px;" class="text-center">:</td>
							<td style="min-width: 30px;"><?php echo $tpegawai[0]['id'] ?></td>
							<td style="min-width: 100px;"></td>
							<td style="min-width: 50px;">Jabatan</td>
							<td style="min-width: 50px;" class="text-center">:</td>
							<td style="min-width: 30px;"><?php echo $tpegawai[0]['jabatan'] ?></td>
						</tr>
						<tr class="bg-success">
							<td style="min-width: 50px;">Nama</td>
							<td style="min-width: 50px;" class="text-center">:</td>
							<td style="min-width: 30px;"><?php echo $tpegawai[0]['Nama'] ?></td>
							<td style="min-width: 100px;"></td>
							<td style="min-width: 50px;">JK</td>
							<td style="min-width: 50px;" class="text-center">:</td>
							<td style="min-width: 30px;"><?php echo $tpegawai[0]['jenis_kelamin'] ?></td>
						</tr>
					</table>
					</div>                      
			<br>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="vertical-middle text-center bg-success" style="max-width: 10px;">No</th>
								<th class="vertical-middle text-center bg-success">Jam</th>
								<th class="vertical-middle text-center bg-success">Hari</th>
								<th class="vertical-middle text-center bg-success">Tanggal</th>
								<th class="vertical-middle text-center bg-success">Bulan</th>
								<th class="vertical-middle text-center bg-success">Tahun</th>
								<th class="vertical-middle text-center bg-success">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i =1 ; foreach ($detail_absensi as $key => $value) { $waktu = date('d-F-Y', strtotime($value['tahun'] . "/" . $value['bulan'] . "/" . $value['tanggal'])); ?>
								<tr>
									<td class="text-center bg-success" style="max-width: 10px;"><?php echo $i++ ?></td>
									<td class="text-center"><?php echo $value['id_jadwal'] ?></td>
									<td><?php echo $hari[date('w', strtotime($waktu))] ?></td>
									<td><?php echo $value['tanggal'] ?></td>
									<td><?php echo $value['bulan'] ?></td>
									<td><?php echo $value['tahun'] ?></td>
									<td><?php echo $value['status'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div> 