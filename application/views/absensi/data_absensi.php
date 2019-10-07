
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
          <!-- Page Heading -->
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
                      <th>Jabatan</th>
                      <th>Tanggal Absensi</th>
                      <th>Masuk</th>
                      <th>Pulang</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($data_absen as $d) : ?>
                    <tr>
                      <td><?= $i++?></td>
                      <td><?= $d['nama']?></td>
                      <td><?= $d['jabatan']?></td>
                      <td><?= $d['tgl_absen']?></td>
                      <td><?= $d['jam_masuk']?></td>
                      <td><?= $d['jam_pulang']?></td>
                      <td>
                      <a href="<?= base_url('jabatan/hapusjabatan/'); ?><?= $d['id_absen']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('jabatan');?>" method="post">
      <input type="hidden" class="form-control" id="id_jabatan" name="id_jabatan" placeholder="">
      <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
