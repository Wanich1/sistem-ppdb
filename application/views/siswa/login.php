<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Siswa | PPDB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 500px">
  <div class="login-logo">
    <b>LOGIN PPDB</b></a>
  </div>
  <!-- /.login-logo -->
  <?php echo $this->session->flashdata('pesan')?>
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="card-title text-center">Silahkan Log in dengan Akun yang Sudah Terdaftar</h4> <br>
      <form action="<?=base_url('siswaController/loginSiswa') ?>" method="post">
        <label for="email">NISN</label>
        <div class="input-group mb-3">
          <input name="nisn" id="nisn" type="text" class="form-control" placeholder="NISN Siswa">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('nisn', '<div class="text-danger small ml-3"></div>')?>
        
        <label for="password">Password</label>
        <div class="input-group mb-3">
          <input name="sandi" id="sandi" type="password" class="form-control" placeholder="Password Siswa">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('sandi', '<div class="text-danger small ml-3"></div>')?>

        <a class="float-right" href="forgot-password.html">Lupa password?</a>

          <!-- /.col -->
          <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="mt-4 text-center">
        <p>Belum punya Akun? <a href="register" class="text-center">Daftar di sini!</a></p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
