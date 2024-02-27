<?php $this->load->view("front-end/include/header"); ?>
<link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/"); ?>css/owl.theme.default.min.css" rel="stylesheet">
    <script src="<?php echo base_url("assets/"); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/"); ?>js/owl.carousel.min.js"></script>
     <script>
        $(document).ready(function(){
      var owl = $('.owl-carousel');
   owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
   });
    </script>
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
                        <p><i class="text-primary me-2"></i><?php echo $about_us[0]->aciklama2; ?></p>
                        
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-sm-12">
                    
                 </div>

             </div>
         </div>
     </div>
 </div>
</div>
</section>
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
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-5794643547525653"
     data-ad-slot="9897526779"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> 
</div>

<?php $this->load->view("front-end/include/footer"); ?>
