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
