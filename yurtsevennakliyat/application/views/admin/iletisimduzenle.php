<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>İLETİŞİM</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/fevicon.png" type="image/x-icon">
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
            <h1 class="m-0">İletişim Düzenleme</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">İLETİŞİM DÜZENLEME</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/contactduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">


   

        <div class="form-group">
          <label>Adres Başlık Açıklaması:</label>
          <input name="adresbaslik" class="form-control" type="text" value="<?php echo $contact[0]->adresbaslik; ?>" >
          <p class="help-block">Adres Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>

        <div class="form-group">
          <label>Adres Açıklaması:</label>
          <input name="adresaciklama" class="form-control" type="text" value="<?php echo $contact[0]->adresaciklama; ?>" >
          <p class="help-block">Adres Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>

        <br><br>


        <div class="form-group">
          <label>Telefon Başlık Açıklaması:</label>
          <input name="phonenumberbaslik" class="form-control" type="text" value="<?php echo $contact[0]->phonenumberbaslik; ?>" >
          <p class="help-block">Telefon Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>

        <div class="form-group">
          <label>Telefon Açıklaması:</label>
          <input name="phonenumberaciklama" class="form-control" type="text" value="<?php echo $contact[0]->phonenumberaciklama; ?>" >
          <p class="help-block">Telefon Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>
        <br><br>

        <div class="form-group">
          <label>Email Açıklaması:</label>
          <input name="emailbaslik" class="form-control" type="text" value="<?php echo $contact[0]->emailbaslik; ?>" >
          <p class="help-block">Email Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>

        <div class="form-group">
          <label>Email Açıklaması:</label>
          <input name="emailaciklama" class="form-control" type="text" value="<?php echo $contact[0]->emailaciklama; ?>" >
          <p class="help-block">Email Açıklama Kısmını Değiştirebilirsiniz.</p>
        </div>



        <button  style="margin-left:500px;" name="" type="submit" class="btn btn-info">KAYDET </button>



      </form>
      <br><br><br><br>
    </div>





  </div>





  <?php $this->load->view('admin/include/footer'); ?>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url('/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/'); ?>dist/js/adminlte.min.js"></script>
</body>
</html>