<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Karyawan</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
   <!-- Custom styles for this page -->
   <link href="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard');?>">
        <div class="sidebar-brand-text mx-3">Sistem Karyawan</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Dashboard -->
      <?php if ($title == 'Absensi Masuk') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('absensi_masuk');?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Absen Masuk</span></a>
      </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

       <!-- Nav Item - Dashboard -->
       <?php if ($title == 'Absensi Pulang') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('absensi_pulang');?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Absen Pulang</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


     
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Menu</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('auth');?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login
                </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
          <!-- Page Heading -->
          <div class="alert alert-warning" role="alert">
            <div class="row mx-auto" style="width: 600px;">
            <h5><b>Tanggal : </b><?= date("d-M-Y")?></h5>
            <h5> &nbsp; | &nbsp; </h5>
            <h5><b>Jam : </b>&nbsp;</h5><h5 id="jam"></h5> <h5> : </h5> <h5 id="menit"></h5> <h5> : </h5> <h5 id="detik"></h5>
            </div>
            </div>
             <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Absensi Masuk Karyawan</h6>
            </div>
            <div class="card-body">
            <div class="mx-auto" style="width: 600px;">
                <form class="user" action="<?= base_url('Absensi_masuk');?>" method="post">
                    <div class="col-lg-9">
                    <input type="text" class="form-control nokaryawan" id="nokaryawan" name="nokaryawan" placeholder="Masukkan Nomor Pegawai anda">
                    <small class="form-text text-danger"><?= form_error('nokaryawan');?></small>
                    <button type="submit" class="btn btn-primary mt-3 float-right tambahabsen">Absen</button>
                    </div>
                </div>
                </form>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">ID Pegawai</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Jam Masuk</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1;?>
                <tr>
                <?php foreach ($data_absen as $a ) : ?>
                <td><?= $i++?>.</td>
                <td><?= $a['id_karyawan'];?></td>
                <td><?= $a['nama'];?></td>
                <td><?= $a['jabatan'];?></td>
                <td><?= $a['jam_masuk'];?></td>
                </tr>
        <?php endforeach;?>
            </tbody>
            </table>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
  <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/');?>js/demo/datatables-demo.js"></script>

  <script src="<?= base_url('assets/');?>js/script.js"></script>
  <script src="<?= base_url('assets/');?>js/script-jabatan.js"></script>
</body>

</html>

<script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
    

</script>


<!-- query lihat absensi 
    SELECT B.tgl,A.nama,C.jam_masuk
    FROM karyawan A
    JOIN absen B
    ON A.id_karyawan=B.id_karyawan
    JOIN detail_absen C
    ON B.id_absen=C.id_absen
query lihat absen -->