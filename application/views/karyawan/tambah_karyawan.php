
        <!-- Begin Page Content -->
        <div class="container-fluid">
       

        <div class="col-lg-8">
            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5>Form Tambah Data Karyawan</h5>
            </div>
            <div class="card-body">
            <form action="<?= base_url('karyawan/tambahkaryawan');?>" method="post">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    <small class="form-text text-danger"><?= form_error('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-5">
                    <select class="form-control" id="jk" name="jk">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jk');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Posisi</label>
                    <div class="col-sm-7">
                    <select class="form-control" id="jabatan" name="jabatan">
                    <option selected disabled>Pilih Jabatan</option>
                    <?php foreach ($jabatan as $j) : ?>
                        <option value="<?= $j['id_jabatan'];?>"><?= $j['jabatan'];?></option>
                    <?php endforeach;?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jabatan');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">No hp</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp">
                    <small class="form-text text-danger"><?= form_error('nohp');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                     <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                     <small class="form-text text-danger"><?= form_error('alamat');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-6">
                    <select class="form-control" id="status" name="status">
                        <option selected disabled>Pilih Status</option>
                        <option value ="1">Aktif</option>
                        <option value ="0">Tidak Aktif</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('status');?></small>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary float-right ml-3">Tambah Data</button>
                    <button type="button" class="btn btn-secondary float-right" onclick="history.go(-1);">Kembali </button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
