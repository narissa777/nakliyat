

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SLİDER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>dist/css/adminlte.min.css">
  <link href="<?php echo base_url("assets/img/yurtsevennakliyatlogo2.png"); ?>" rel="icon"> 
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
            <h1 class="m-0">SLİDER GORUNTULEME PANELİ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">SLİDER GORUNTULEME PANELİ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">
      
   </div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="box box-solid">
          <div class="box-body">
            <table id="slider" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Slider Açıklaması</th>
                  <th>Slider Başlık</th>
                  <th>Fotoğrafın URL'si</th>
                  <th>İşlemler</th>

                  
                  
                </tr>
              </thead>
              <tbody>
                 <?php foreach ($slider as $slider) 
                { ?>
                  <tr>
                    
                    <td>
                      <p><?php echo $slider->slideryazi ; ?></p>
                    </td>
                    <td>
                      <p><?php echo $slider ->sliderbaslik ; ?></p>
                    </td>
                    <td>
                      <p><?php echo $slider ->resimyol ; ?></p>
                    </td>
                    
                        

                        
                    <td>
                        <a href="<?php echo base_url('admin/sliderduzenle/'.$slider->id.''); ?>" class="btn btn btn-success"><i class="fa fa-edit"></i> Düzenle</a>


                        <!-- <button type="button" class="btn btn-danger" title="urunler sil" data-toggle="modal" data-target="#modal-danger-"><i class="fas fa-trash"></i></button> -->

                        <div class="modal fade" id="modal-danger-">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title"><?php echo $slider->b_onbaslik; ?> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Silmek istediğinizden emin misiniz?&hellip;</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
                                <a href="<?php echo base_url('admin/yayinlarkartsil/'.$slider->id.'') ?>" class="button"><button type="button" class="btn btn-outline-danger">Evet</button></a>
                              </div>
                            </div>

                          </div>

                        </div>
                      </td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  
</div>







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
<?php $this->load->view('admin/include/footer'); ?>