
        <!-- Begin Page Content -->
        <div class="container-fluid">
       

        <div class="col-lg-8">
       
            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5>Form Edit Data Karyawan</h5>
            </div>
            <div class="card-body">
            <form action="" method="post">
            <input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan" placeholder="Nama" value="<?= $karyawan['id_karyawan'];?>">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $karyawan['nama'];?>">
                    <small class="form-text text-danger"><?= form_error('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-5">
                    <?php 
                    $jenis_kelamin = array('Laki-laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'); 
                    echo form_dropdown('jenis_kelamin',$jenis_kelamin,$karyawan['jenis_kelamin'],"class='form-control'");
                    ?>
                    <small class="form-text text-danger"><?= form_error('jenis_kelamin');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Posisi</label>
                    <div class="col-sm-7">
                    <select class="form-control" id="jabatan" name="jabatan">
                    <?php foreach ($jabatan as $j) : ?>
                    <?php if( $j['jabatan'] == $karyawan['jabatan']) : ?>
                        <option value="<?= $j['id_jabatan'];?>" selected><?= $j['jabatan'];?></option>
                    <?php else : ?>
                        <option value="<?= $j['id_jabatan'];?>"><?= $j['jabatan'];?></option>
                    <?php endif;?>
                    <?php endforeach;?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('jabatan');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">No hp</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp" value="<?= $karyawan['no_hp'];?>">
                    <small class="form-text text-danger"><?= form_error('nohp');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                     <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $karyawan['alamat'];?></textarea>
                     <small class="form-text text-danger"><?= form_error('alamat');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-6">
                    <?php 
                    $status = array('1' => 'Aktif', '2' => 'Tidak Aktif'); 
                    echo form_dropdown('status',$status,$karyawan['status'],"class='form-control'");    
                    ?>
                    <small class="form-text text-danger"><?= form_error('status');?></small>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary float-right ml-3">Edit Data</button>
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
