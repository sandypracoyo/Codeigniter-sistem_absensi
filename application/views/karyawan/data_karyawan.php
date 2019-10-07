
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
          <!-- Page Heading -->
           <a href="<?= base_url('karyawan/tambahkaryawan');?>" class="btn btn-primary mb-3">Tambah Data</a>
            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5><?= $title;?></h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Posisi</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($karyawan as $k) : ?>
                    <tr>
                      <td><?= $i++?></td>
                      <td><?= $k['nama']?></td>
                      <td><?= $k['jabatan']?></td>
                      <td><?= $k['alamat']?></td>
                      <td>
                      <a href="<?= base_url('karyawan/detailkaryawan/'); ?>" class="badge badge-warning tampilmodaldetail" data-toggle="modal" data-target="#exampleModal" data-id="<?= $k['id_karyawan']?>" >Detail</a>
                      <a href="<?= base_url('karyawan/editkaryawan/') . $k['id_karyawan'];?>" class="badge badge-success tampiledit" data-id="<?= $k['id_karyawan']?>">edit</a>
                      <a href="<?= base_url('karyawan/hapuskaryawan/'); ?><?= $k['id_karyawan']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                      </td>
                    </tr>

                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
        <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm col-form-label"><b>Nama</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" placeholder="Email"disabled="true">
            </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="jk" placeholder="Email"disabled="true">
            </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Jabatan</b></label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="jabatan" placeholder="Email" disabled="true">
            </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Nomor Hp</b></label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="no_hp" placeholder="Email"disabled="true" >
            </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm col-form-label"><b>Alamat</b></label>
            <div class="col-sm-9">
            <textarea class="form-control" id="alamat" rows="4" disabled="true"></textarea>
            </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Status</b></label>
              <div class="col-sm-3">
            <input type="text" class="form-control" id="status" placeholder="Email"disabled="true" >
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      </div>
      </form>
    </div>
  </div>
</div>
