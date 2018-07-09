<!-- profile-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Profile User</h4>
      </div>
      <div class="modal-body">
        <div class="containter">
          <div class="row">
            <img class="img-circle profile-icon image-responsive col-md-4">
            <div class="form-group col-md-8">
              <label for="username">Username</label><p class="username"></p>
              <label for="username">Name</label><input type="text" class="form-control name" id="name" placeholder="Name"><br>
              <label for="password">Password</label><input type="password" class="form-control" id="password" placeholder="PASSWORD">
            </div>
          </div>
            <div class="form-group">
                <label for="photo">Change Foto Profil</label>
                <input type="file" id="photo">
            </div>
        </div>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
    </form>
    </div>
  </div>
</div>

<!-- end of profile -->

<!-- tambah data pegawai -->
<div class="modal fade" id="ModalTambahDataPeg" tabindex="-1" role="dialog" aria-labelledby="ModalTambahDataPegLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url('admin/Beranda/Tambah_data_pegawai') ?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Tambah Data Pegawai<br><small> Rumah Qur'an Darul Falah Cianjur</small></h4>
        
      </div>
      <div class="modal-body TambahData-body">
        <div class="containter">
          <div class="row">
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="form-group col-md-6">
                  <select id="inputState" class="form-control" name="jk" >
                    <option value="L" selected>Ikhwan</option>
                    <option value="P">Akhwan</option>
                  </select>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="No Hp" name="no_hp" required>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="E-mail" name="email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="photo">Change Foto Profil</label>
                <input type="file">
            </div>  
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
     </form>
    </div>
  </div>
</div>
<!-- end of tambah data pegawai -->

<!-- edit data pegawai -->
<div class="modal fade" id="ModalEditDataPeg" tabindex="-1" role="dialog" aria-labelledby="ModalEditDataPegLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url('admin/Beranda/Edit_data_pegawai') ?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Edit Data Pegawai<br><small> Rumah Qur'an Darul Falah Cianjur</small></h4>
        
      </div>
      <div class="modal-body EditData-body">
        <div class="containter">
          <div class="row">

                  <input type="hidden" class="form-control" id="id" placeholder="ID Pegawai" name="id" readonly>

            <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan" required>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
            </div>
            <div class="form-group col-md-6">
                  <select id="inputState1" class="form-control" name="jk" >
                    <option value="L" selected>Ikhwan</option>
                    <option value="P">Akhwan</option>
                  </select>
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="no_hp" placeholder="No Hp" name="no_hp">
            </div>
            <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
            </div>  
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Data</button>
      </div>
     </form>
    </div>
  </div>
</div>
<!-- end of edit data pegawai -->

<!-- delete data pegawai -->

<div class="modal fade" id="ModalDeleteDataPeg" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteDataPegLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url('admin/Beranda/delete_data_pegawai') ?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Data Pegawai<br><small> Rumah Qur'an Darul Falah Cianjur</small></h4>
      </div>
      <div class="modal-body TambahData-body">
        <div class="containter">
          <div class="row">
            <div class="form-group text-center">
              <p> Apakah anda akan menghapus data ?</p>
            </div>

                  <input type="hidden" class="form-control id" placeholder="ID Pegawai" name="id" readonly>

              <div class="col-md-6 has-error form-group ">
                  <input class="form-control nama" type="text" placeholder="Readonly input here…" name="nama" readonly>
              </div>
              <div class="col-md-6 has-error form-group ">
                  <input class="form-control jabatan" type="text" placeholder="Readonly input here…" name="jabatan" readonly>
              </div>
              <div class="col-md-6 has-error form-group ">
                  <input class="form-control alamat" type="text" placeholder="Readonly input here…" name="alamat" readonly>
              </div>
              <div class="col-md-6 has-error form-group ">
                  <input class="form-control jk" type="text" placeholder="Readonly input here…" name="jk" readonly>
              </div>
              <div class="col-md-6 has-error form-group ">
                  <input class="form-control no_hp" type="text" placeholder="Readonly input here…" name="no_hp" readonly>
              </div>
              <div class="col-md-6 has-error form-group ">
                  <input class="form-control email" type="text" placeholder="Readonly input here…" name="email" readonly>
              </div>

        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
     </form>
    </div>
  </div>
</div>

<!-- end of delete data pegawai -->