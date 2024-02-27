<?php $this->load->view("front-end/include/header"); ?>
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url("assets/"); ?>css/owl.theme.default.min.css" rel="stylesheet">
<script src="<?php echo base_url("assets/"); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
</script>
<style type="text/css">
    .cardss {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 545px;
        min-width: 0;
        word-wrap: break-word;
        background-color: #00000078;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0px;
    }

    .iccccc {
        height: 114px;
        width: 273px;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin-right: 40px;
        background-color: #00000078;
        border-radius: 50% 50% 25% 20%;
    }

    .iccccc:hover i {
        color: orange;
    }

    .size {
        font-size: 50px;
        color: white;
        margin: 10px;
    }

    .caption {
        color: #e6711a;
    }

    /*.carousel-item{
    max-height: 1000px; 
    object-fit: cover;
}*/


    /* Telefon görünümü için özel stil */
    @media (max-width: 767px) {
        .cardss {

            width: 300px;
            font-size: 10px;
        }

        .iccccc {
            height: 60px;
            width: 60px;
            margin-right: 5px;
        }

        .carousel-item {
            max-height: 767px;
            object-fit: cover;
        }

        .size {
            font-size: 18px;
        }

        .caption {
            display: none;
        }
    }

    .img-fluid2 {
        width: 100%;
        height: 400px;
    }

    @media (max-width: 767px) {
        .img-fluid2 {
            width: 100%;
            height: auto;
        }
    }
</style>
<style type="text/css">
    .road {
        position: relative;
        animation: roadMove 5s linear infinite;
        /* Hareket animasyonu, 5 saniye süre, lineer interpolasyon, sonsuz tekrar */
    }

    .truck {
        position: absolute;
        bottom: 0;
        left: 0;
        animation: truckMove 7s linear infinite;
        /* Hareket animasyonu, 5 saniye süre, lineer interpolasyon, sonsuz tekrar */
    }

    @keyframes roadMove {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 100% 0;
        }
    }

    @keyframes truckMove {
        0% {
            left: 0;
        }

        100% {
            left: calc(100% - 100px);
        }
    }

    @media (max-width: 767px) {
        .buyuk {
            height: 150px;
            width: 150px;
        }
    }
</style>
<!-- Carousel Start -->

<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class=" ca-image" style="object-fit: cover; width: 100%; height: 100%;" src="<?php echo base_url('') . $slider[0]->resimyol; ?>" alt="Image" height="1000" width="1000">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="text-start">
                                <div class="cardss">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h1 style="color: white; display: flex; align-items: center;">
                                                <span style="flex: 1; border-bottom: 2px solid orange; margin: 10px;"></span>
                                                <?php echo $slider[0]->sliderbaslik; ?>
                                            </h1>
                                        </div>
                                        <div style="color: white;">
                                            <?php echo $slider[0]->slideryazi; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 ca-image" src="<?php echo base_url('') . $slider[1]->resimyol; ?>" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="text-start">
                                <div class="cardss">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h1 style="color: white; display: flex; align-items: center;">
                                                <span style="flex: 1; border-bottom: 2px solid orange; margin: 10px;"></span>
                                                <?php echo $slider[1]->sliderbaslik; ?>
                                            </h1>
                                        </div>
                                        <div style="color: white;">
                                            <?php echo $slider[1]->slideryazi; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 ca-image" src="<?php echo base_url('') . $slider[2]->resimyol; ?>" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="text-start">
                                <div class="cardss">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h1 style="color: white; display: flex; align-items: center;">
                                                <span style="flex: 1; border-bottom: 2px solid orange; margin: 10px;"></span>
                                                <?php echo $slider[2]->sliderbaslik; ?>
                                            </h1>
                                        </div>
                                        <div style="color: white;">
                                            <?php echo $slider[2]->slideryazi; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 ca-image" src="<?php echo base_url('') . $slider[3]->resimyol; ?>" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="text-start">
                                <div class="cardss">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h1 style="color: white; display: flex; align-items: center;">
                                                <span style="flex: 1; border-bottom: 2px solid orange; margin: 10px;"></span>
                                                <?php echo $slider[3]->sliderbaslik; ?>
                                            </h1>
                                        </div>
                                        <div style="color: white;">
                                            <?php echo $slider[3]->slideryazi; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="position: absolute; bottom: 0; width: 100%; display: flex; justify-content: center;">
                <div style="display: flex;">
                    <!-- Slayt 1 -->
                    <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active iccccc" aria-current="true" aria-label="Slide 1">
                        <i class="fas fa-home size"></i>
                        <span class="caption">Evden Eve Nakliyat</span>
                    </button>
                    <!-- Slayt 2 - Lojistik -->
                    <button class="iccccc" type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                        <i class="fas fa-truck size"></i>
                        <span class="caption">Lojistik Hizmeti</span>
                    </button>
                    <!-- Slayt 3 - Paketleme -->
                    <button class="iccccc" type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                        <i class="fas fa-box size"></i>
                        <span class="caption">Paketleme ve Depolama</span>
                    </button>
                    <!-- Slayt 4 - Expertiz -->
                    <button class="iccccc" type="button" data-bs-target="#header-carousel" data-bs-slide-to="3" aria-label="Slide 4">
                        <i class="fas fa-chart-line size"></i>
                        <span class="caption">Expertiz ve Sigortalı Taşımacılık</span>
                    </button>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Carousel End -->



<!-- About Start -->
<section style="margin:20px">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 style="text-align:center; color: #e6711a ;">Hakkımızda</h1>
                <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-12 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="<?php echo base_url('') . $about_us[0]->resim1; ?>">
                        </div>
                        <div class="col-12 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="<?php echo base_url('') . $about_us[0]->resim2; ?>">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $about_us[0]->hbaslik; ?></h1>
                    <p class="mb-4"><?php echo $about_us[0]->hbaslikaciklama; ?></p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">21</h1>
                            <h5 class="text-white">YILLIK</h5>
                            <h5 class="text-white">TECRÜBE</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class=" text-primary me-2"></i><?php echo $about_us[0]->aciklama2; ?></p>


                        </div>
                    </div>
                    <!-- <div class="row pt-2">
                    <div class="col-sm-12">
                        <div class="d-flex align-items-center">
                           <p class=" mb-4">Gerekli tüm yasal belgelerimiz ile taşınma esnasında güvenliğiniz hep birinci planda!
                           </p>
                       </div>
                   </div> -->

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="road">
    <div class="truck"> <img class="buyuk" style="opacity: .2;" src="<?php echo base_url("assets/img/delivery.png"); ?>"></div>
</div>
<!-- About End -->






<!-- Features Start -->
<section style="margin:20px">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 style="text-align:center; color: #e6711a ;">Neden Bizi Tercih Etmelisiniz?</h1>
            <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="<?php echo base_url('') . $nedenbiz[0]->bresim; ?>" alt="">
                        <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" >
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $nedenbiz[0]->wbaslik; ?></h1>
                    <p class="mb-4"><?php echo $nedenbiz[0]->waciklama; ?></p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4><?php echo $nedenbiz[0]->b1baslik; ?></h4>
                                    <span><?php echo $nedenbiz[0]->b1; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4><?php echo $nedenbiz[0]->b2baslik; ?></h4>
                                    <span><?php echo $nedenbiz[0]->b2; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4><?php echo $nedenbiz[0]->b3baslik; ?></h4>
                                    <span><?php echo $nedenbiz[0]->b3; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4><?php echo $nedenbiz[0]->b4baslik; ?></h4>
                                    <span><?php echo $nedenbiz[0]->b4; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4><?php echo $nedenbiz[0]->b5baslik; ?></h4>
                                    <span><?php echo $nedenbiz[0]->b5; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features End -->

<!-- Facts Start -->
<section style="margin:20px">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 style="text-align:center; color: #e6711a ;">Ne Kadar Tercih Ediliyoruz?</h1>
            <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
        </div>
    </div>
    <div class="container-fluid facts my-5 p-5">

        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fas fa-dolly fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">2320</h1>
                    <span class="fs-5 fw-semi-bold text-white">Taşıma Tecrübesi</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fas fa-globe-asia fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">81</h1>
                    <span class="fs-5 fw-semi-bold text-white">Şehir</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fas fa-truck-moving fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">15</h1>
                    <span class="fs-5 fw-semi-bold text-white">Araç Filomuz</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fas fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">16</h1>
                    <span class="fs-5 fw-semi-bold text-white">Deneyimli Kadro</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facts End -->
<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<div class="road">
    <div class="truck"> <img class="buyuk" style="opacity: .2;" src="<?php echo base_url("assets/img/delivery.png"); ?>"></div>
</div>

<!-- Project Start -->
<div class="container-fluid pt-5 my-5 px-0">
    <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 style="text-align:center; color: #e6711a ;">Yaptigimiz isten kareler</h1>
        <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">

    </div>

    <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
        <?php foreach ($galeri as $galeriogeleri) { ?>
            <a class="project-item" href="">
                <img class="img-fluid2" src="<?php echo base_url('') . $galeriogeleri->gresim; ?>" alt="">
                <div class="project-title">
                    <!-- <h5 class="text-primary mb-0"><?php echo $galeriogeleri->gaciklama; ?></h5> -->
                </div>
            </a>
        <?php } ?>
    </div>


</div>
<!-- Project End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 style="text-align:center; color: #e6711a ;">Sizin dilinizden</h1>
            <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <?php foreach ($yorum as $yorumogeleri) { ?>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php echo base_url("assets/"); ?>img/comment.png">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p><?php echo $yorumogeleri->yaciklama; ?></p>
                        <h5 class="mb-1"><?php echo $yorumogeleri->kullaniciadi; ?></h5>
                        <span class="fst-italic"><?php echo $yorumogeleri->meslek; ?></span>
                    </div>
                </div>
            <?php } ?>



        </div>

    </div>

</div>
<div class="road">
    <div class="truck"> <img class="buyuk" style="opacity: .2;" src="<?php echo base_url("assets/img/delivery.png"); ?>"></div>
</div>
<!-- Testimonial End -->
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <h1 style="text-align:center; color: #e6711a ;">Referanslar</h1>
    <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
</div>
<div class="owl-carousel owl-theme">
    <?php foreach ($referans as $referansogeleri) { ?>

        <div>
            <img src="<?php echo base_url('') . $referansogeleri->r_resim; ?>">
        </div>
    <?php } ?>


</div>
<br>
<br>
<div style="text-align:center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- margue -->
    <ins class="adsbygoogle" style="display:inline-block;width:970px;height:250px" data-ad-client="ca-pub-5794643547525653" data-ad-slot="9897526779"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

<?php $this->load->view("front-end/include/footer"); ?>