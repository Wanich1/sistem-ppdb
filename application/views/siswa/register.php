<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="<?= $this->session->flashdata('seconds_redirect');?>; url=<?= $this->session->set_flashdata('url_redirect')?>">
  <title>Sign Up Siswa | PPDB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 500px;">
  <div class="login-logo">
    <b>SIGN UP PPDB</b></a>
  </div>

  <!-- /.register-logo -->
  <?php echo $this->session->flashdata('pesan')?>
  <div class="card">
    
    <div class="card-body login-card-body">
    <center><h5>Silahkan isi semua form yang tersedia !</h5></center>
      <form action="<?=base_url('siswaController/insertSiswa');?>" method="post">
        <label for="email">NISN</label>
        <div class="input-group mb-3">
          <input name="nisn" id="nisn"  type="text" class="form-control" placeholder="Masukkan NISN">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <?php echo form_error('nisn', '<div class="text-danger small ml-3"></div>')?>
        
        <label for="password">Nama Lengkap</label>
        <div class="input-group mb-3">
          <input name="nama" id="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <?php echo form_error('nama', '<div class="text-danger small ml-3"></div>')?>


        <label for="password">Email</label>
        <div class="input-group mb-3">
          <input name="email" id="email" type="email" class="form-control" placeholder="Masukkan Email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <?php echo form_error('email', '<div class="text-danger small ml-3"></div>')?>


        <label for="password">Password</label>
        <div class="input-group mb-3">
          <input name="sandi" id="sandi" type="password"  class="form-control" placeholder="Masukkan Password">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <?php echo form_error('sandi', '<div class="text-danger small ml-3"></div>')?>

          <!-- /.col -->
          <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="mt-4 text-center">
        <p>Sudah punya Akun? <a href="login" class="text-center">Login di sini!</a></p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
