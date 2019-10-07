
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard');?>">
        <div class="sidebar-brand-text mx-3">Sistem Karyawan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if ($title == 'Dashboard') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('dashboard');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen User
      </div>
      <?php if ($title == 'Data User') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('user'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Data User</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Karyawan
      </div>

      <!-- Nav Item - Dashboard -->
      <?php if ($title == 'Data Karyawan') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Karyawan');?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Karyawan</span></a>
      </li>

       <!-- Nav Item - Dashboard -->
       <?php if ($title == 'Data Jabatan') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('Jabatan');?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Data Jabatan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Data Absensi
      </div>

      <!-- Nav Item - Dashboard -->
      <?php if ($title == 'Data Absensi') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif;?>
        <a class="nav-link" href="<?= base_url('absen');?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Absensi</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Log Out</span></a>
      </li>
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
