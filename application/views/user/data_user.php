
        <!-- Begin Page Content -->
        <div class="container-fluid">
       <?php if(validation_errors() ) :?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= validation_errors()?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
          <!-- Page Heading -->
           <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
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
                      <th>Username</th>
                      <th>Password</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($datauser as $u) : ?>
                    <tr>
                      <td>1</td>
                      <td><?= $u['username']?></td>
                      <td><?= $u['password']?></td>
                      <td><a href="<?= base_url('user/hapususer/'); ?><?= $u['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url('user');?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ulangi Password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
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
