<?php $this->load->view("front-end/include/header"); ?>
<style type="text/css">
    #header-carousel .carousel-inner {
        width: 100%;
        max-height: 800px;
        margin: 0 auto;
        overflow: hidden;
    }

    #header-carousel .carousel-item {
        width: 100%;
        height: auto;
    }

    #header-carousel .ca-image1 {
        width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {

        img {
            width: 100%;
        }
    }
</style>
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; margin: 20px;">
    <h1 style="text-align:center; color: #e6711a ;">Eşya ve Yük Sigortası</h1>
    <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
</div>
<div class="container " style="display: flex; flex-direction: row; flex-wrap: wrap;
align-content: center;  justify-content: center; align-items: center; margin-top:30px;">
<div class="col-md-4">
    <img style="width: 100%;" src="<?php echo base_url('') . $esya[0]->e_resim; ?>">
</div>
<div class="col-md-3" style="margin-left:15px;">
    <p><?php echo $esya[0]->e_aciklama; ?></p>
</div>
<div class="col-md-4">
    <img style="width: 100%; margin-right: 15px;" src="<?php echo base_url('assets/img/markatescil.jpeg'); ?>">
</div>

</div>

<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;margin-top:30px;">
    <h1 style="text-align:center; color: #e6711a ;">Araçlarımız</h1>
    <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
</div>
<div class="container px-0 mb-5 " style="margin-top:20px; ">

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <?php $counter = 0; ?>
            <?php foreach ($esyagaleri as $galeriItem) { ?>
                <div class="carousel-item <?php echo ($counter == 0) ? 'active' : ''; ?>">
                    <img class="w-100 ca-image1" style="object-fit: cover;" src="<?php echo base_url('') . $galeriItem->eg_resim; ?>" alt="Image">
                </div>
                <?php $counter++; ?>
            <?php } ?>
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


<?php $this->load->view("front-end/include/footer"); ?>