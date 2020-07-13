<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Diri | PPDB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=base_url('siswaController/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?=base_url('siswaController/dataDiri')?>" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Diri
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url('siswaController/registrasiPendaftaran')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Registrasi Pendaftaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('siswaController/logoutSiswa')?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                Logout
                </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Diri</h1>
          </div>
         </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php echo $this->session->flashdata('pesan')?>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
          <form action="<?=base_url('siswaController/updateDataDiriAksi');?>" method="post">
                <h3><b>Data Siswa</b></h3>
                <div class="form-row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $nama ?>" required="">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" name="email" value="<?php echo $email ?>" required="">
                          </div>
                          <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required=""><?php echo $alamat ?></textarea>
                          </div>
                          <div class="form-group">
                              <label for="tempat_lahir">Tempat Lahir</label>
                              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?php echo $tempat_lahir ?>" required="">
                          </div>
                          <div class="form-group">
                              <label for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" class="form-control cdp" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?>" required="">
                          </div>
                      </div>
                </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <select id="jenis_kelamin" class="form-control" style="width: 100%;" name="jenis_kelamin" value="L" required="">
                              <option value="none" selected="" disabled="" hidden=""> Pilih Jenis Kelamin </option>
                              <option value="L" selected="">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="nomor_hp">Nomor HP/WA</label>
                          <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP/WA" name="nomor_hp" value="<?php echo $nomor_hp ?>" required="">
                      </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                      <select name="agama" class="form-control select2" value="Islam" required="">
                        <option value="none" selected="" disabled="" hidden="">Pilih Agama</option>
                        <option value="Islam" selected="">Islam</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                      </select>
                      <?php echo form_error('');?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="asal_smp">Asal SMP</label>
                      <input type="text" class="form-control" id="asal_smp"name="asal_smp" placeholder="Masukkan Asal SMP" name="asal_smp" value="<?php echo $asal_smp ?>" required="">
                    </div>    
                </div>
          </div>
        <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan Data</button>
                </div>
        </form>
        <!-- /.card -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright © 2020 <a href="http://if.itats.ac.id">PEMJAR</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url() ?>assets/admin/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/admin/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/admin/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
</body>
</html>
