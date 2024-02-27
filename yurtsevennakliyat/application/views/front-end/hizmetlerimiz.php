
<?php $this->load->view("front-end/include/header"); ?>
<!-- Service Start -->
<style type="text/css">
    .img-fluid{
        height: 400px;
    }
</style>
 <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; margin: 20px;">
                <h1 style="text-align:center; color: #e6711a ;">Hizmetlerimiz</h1>
                <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
            </div>
<div>
    <div >
        <div style="display:flex;flex-direction: row;flex-wrap: wrap;align-content: center;justify-content: center;align-items: center;">
        <?php foreach ($hizmetler as $hizmetlerogeleri) { ?>

            <div class="wow fadeInUp" data-wow-delay="0.1s" style="margin:20px;">
                <div class="service-item">
                    <img class="img-fluid" src="<?php echo base_url('') . $hizmetlerogeleri->h_resim; ?>" alt="" height="500" width="500">
                  
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0"><?php echo $hizmetlerogeleri->h_baslik; ?></h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0"><?php echo $hizmetlerogeleri->h_aciklama; ?></p>
                        </div>
                    </div>
              
                </div>
            </div>
            <?php } ?>
        
          
     
         
            
         
        </div>
    </div>
</div>
<!-- Service End -->
<?php $this->load->view("front-end/include/footer"); ?>

