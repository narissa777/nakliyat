<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YURTSEVEN NAKLİYAT ADMİN PANEL</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("admin/slidergoruntule"); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">YURTSEVEN NAKLİYAT ADMİN PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           <!--  <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/anasayfa'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Anasayfa</span></a>
                </li> -->


                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Kategori 1 - Slider -->
                <div class="sidebar-heading">
                    Ayarlar
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
                    aria-expanded="false" aria-controls="collapseSlider">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Slider</span>
                </a>
                <div id="collapseSlider" class="collapse" aria-labelledby="headingSlider"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Ayarlar</h6>
                    <a class="collapse-item" href="<?php echo base_url('admin/slidergoruntule'); ?>">Slider Görüntüle</a>
                    <!-- <a class="collapse-item" href="<?php echo base_url('admin/sliderduzenle'); ?>">Slider Düzenle</a> -->
                </div>
            </div>
        </li>

        <!-- Kategori 2 - Hizmetler -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHizmetler"
            aria-expanded="false" aria-controls="collapseHizmetler">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Galeri </span>
        </a>
        <div id="collapseHizmetler" class="collapse" aria-labelledby="headingHizmetler"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/galerigoruntule'); ?>">Galeri Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/galeri'); ?>">Galeri Ekle</a>
            
        </div>
    </div>
</li> 

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHizmetlerKartEkle"
    aria-expanded="false" aria-controls="collapseHizmetlerKartEkle">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Yorum Ekle</span>
</a>
<div id="collapseHizmetlerKartEkle" class="collapse" aria-labelledby="headingHizmetlerKartEkle"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Ayarlar</h6>
    
    <a class="collapse-item" href="<?php echo base_url('admin/yorumgoruntule'); ?>">Yorum Görüntüle</a>
    <a class="collapse-item" href="<?php echo base_url('admin/yorumekleindex'); ?>">Yorum Ekle</a>
</div>
</div>
</li> 

<!-- Kategori 3 - Hakkımızda -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHakkimizda"
    aria-expanded="false" aria-controls="collapseHakkimizda">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Hakkımızda</span>
</a>
<div id="collapseHakkimizda" class="collapse" aria-labelledby="headingHakkimizda"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Ayarlar</h6>
    <a class="collapse-item" href="<?php echo base_url('admin/hakkimizdaindex'); ?>">Hakkımızda Düzenle</a>
</div>
</div>
</li>

<!-- Kategori 4 - Ürünler -->


<!-- Kategori 5 - Galeri -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri"
    aria-expanded="false" aria-controls="collapseGaleri">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Neden Biz</span>
</a>
<div id="collapseGaleri" class="collapse" aria-labelledby="headingGaleri"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Ayarlar</h6>
    <a class="collapse-item" href="<?php echo base_url('admin/nedenbizindex'); ?>">Neden Biz Düzenle</a>
    
</div>
</div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseEsya"
       aria-expanded="false" aria-controls="#collapseEsya">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Eşya Yük Sigortası</span>
    </a>
    <div id="collapseEsya" class="collapse" aria-labelledby="headingEsya" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/esyaduzenleindex'); ?>">Açıklama Düzenle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/esyagaleriindex'); ?>">Fotoğraf Ekle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/esyagalerigoruntule'); ?>">Fotoğraf Görüntüle</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTalep"
       aria-expanded="false" aria-controls="#collapseTalep">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Talep Formu</span>
    </a>
    <div id="collapseTalep" class="collapse" aria-labelledby="headingTalep" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('Talep/talepgoruntule'); ?>">Talep Formu Göster</a>

            
        </div>
    </div>
</li>


<!-- Kategori 6 - Başlık Açıklama -->


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIletisim"
    aria-expanded="false" aria-controls="collapseIletisim">
    <i class="fas fa-fw fa-wrench"></i>
    <span>İletişim</span>
</a>
<div id="collapseIletisim" class="collapse" aria-labelledby="headingIletisim"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Ayarlar</h6>
    <a class="collapse-item" href="<?php echo base_url('admin/mesajlar'); ?>">Gelen Mesajları Görüntüle</a>
</div>
</div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePratice"
    aria-expanded="false" aria-controls="collapsePratice">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Referanslar Ekle</span>
</a>
<div id="collapsePratice" class="collapse" aria-labelledby="headingPratice" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Ayarlar</h6>
        <a class="collapse-item" href="<?php echo base_url('admin/referansekleindex'); ?>">Referanslar Ekle</a>
        <a class="collapse-item" href="<?php echo base_url('admin/referansgoruntule'); ?>">Referanslar Görüntüle</a>
        
    </div>
</div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePolitikalar"
    aria-expanded="false" aria-controls="collapsePolitikalar">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Hizmetler-Site Ayarlar</span>
    </a>
    <div id="collapsePolitikalar" class="collapse" aria-labelledby="headingPolitikalar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlergoruntule'); ?>">Hizmetler Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlerekleindex'); ?>">Hizmetler Ekle</a>
             <!-- <a class="collapse-item" href="<?php echo base_url('admin/siteayarlarigoruntule'); ?>">Site Ayarları</a> -->
             <a class="collapse-item" href="<?php echo base_url('admin/footerduzenleindex'); ?>">Footer</a>
            <a class="collapse-item" href="<?php echo base_url('admin/bizeulasinindex'); ?>">Bize Ulaşın</a>
            
            <!--<a class="collapse-item" href="<?php echo base_url('admin/logoduzenleindex'); ?>">Logo</a> -->



        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">



            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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

                    <!-- Topbar Search -->
