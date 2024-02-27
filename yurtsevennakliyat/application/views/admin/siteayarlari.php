<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-MAİL DEĞİŞTİRME </title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/fevicon.png" type="image/x-icon">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>plugins/bootstrap/css/bootstrap.min.css">
  <!-- AdminLTE styles -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">

  <?php $this->load->view('admin/include/sidebar'); ?>
  <?php $this->load->view('admin/include/header'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">E-MAİL DEĞİŞTİRME </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">E-MAİL DEĞİŞTİRME </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div style="margin-left:500px; margin-right:500px; color:#009531;"></div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;" class="panel-body">
      <form action="<?php echo base_url('admin/emailduzenle'); ?>" role="form" method="POST">
        <br><br>

        <div class="form-group">
          <label>E-posta Adresi:</label>
          <input type="email" name="email" value="<?php echo $siteayarlari[0]->email; ?>" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Şifre:</label>
          <input type="text" name="password" value="<?php echo $siteayarlari[0]->password; ?>" class="form-control" required>
        </div>
        <button style="margin-left:500px;" name="update_email" type="submit" class="btn btn-danger">E-POSTA DEĞİŞTİR </button>

        <br><br>
      </form>
      <br><br><br><br>
    </div>
  </div>

  <?php $this->load->view('admin/include/footer'); ?>

  <!-- jQuery -->
  <script src="<?php echo base_url('/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/'); ?>dist/js/adminlte.min.js"></script>
</body>
</html>
