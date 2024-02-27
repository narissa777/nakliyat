
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HİZMETLERİMİZ EKLE</title>
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
            <h1 class="m-0">HİZMETLERİMİZ EKLEME PANELİ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">HİZMETLERİMİZ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;" class="panel-body">
    <form action="<?php echo base_url('admin/hizmetlerekle'); ?>" role="form" method="POST" enctype="multipart/form-data">

        <br><br>

        <div class="form-group">
            <label>Hizmetlerimiz Kart Başlık</label>
            <input name="h_baslik" class="form-control" type="text" value="">
            <p class="help-block">Hakkımızda bölümündeki sağ tarafta bulunan başlığı değiştirebilirsiniz.</p>
        </div>

        <div class="form-group">
            <label>Hizmetlerimiz Kart Açıklama Giriniz</label>
            <textarea name="h_aciklama" id="" rows="5" class="form-control"></textarea>
            <p class="help-block"></p>
        </div>

       

        

        <br><br>

      
        

        <div class="form-group">
            <label>Hizmetler Kart Da Bulunan Resim</label>
            <input name="h_resim" class="form-control" type="file">
            <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALI VE BOYUTLARI DAHA UYGUN BİR GÖRÜNÜM İÇİN 550 X 530 FORMATINDA OLMALIDIR</p>
        </div>
        <button style="margin-left:500px;" name="kaydett" type="submit" class="btn btn-info">EKLE</button>

    </form>
    <br><br><br><br>
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