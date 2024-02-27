
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Ofisimiz</h5>
                <p class="mb-2" style="color:black;"><i class="fa fa-map-marker-alt me-3"></i><?php echo $footer[0]->f_adres;?></p>
                <a class="mb-2" style="color:black;" href="tel
                :05326217841"><i class="fa fa-phone-alt me-3"></i><?php echo $footer[0]->f_telefon;?></a>
                <p class="mb-2" style="color:black;"><i class="fa fa-envelope me-3"></i><?php echo $footer[0]->f_email;?></p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="<?php echo $footer[0]->f_twitter;?>"><i
                        class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="<?php echo $footer[0]->f_facebook;?>"><i
                            class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle me-2" href="<?php echo $footer[0]->f_instagram;?>"><i
                                class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="<?php echo $footer[0]->f_linkedin;?>"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h5 class="text-white mb-4">Hızlı Ulaş</h5>
                                <a class="btn btn-link" style="color:black;" href="<?php echo base_url("admin/aboutus"); ?>">Hakkımızda</a>
                                <a class="btn btn-link" style="color:black;" href="<?php echo base_url("admin/hizmetlerimiz"); ?>">Hizmetlerimiz</a>
                                <a class="btn btn-link" style="color:black;" href="<?php echo base_url("admin/araclar"); ?>">Araçlarımız</a>
                                <a class="btn btn-link" style="color:black;" href="<?php echo base_url("admin/aboutus"); ?>">Referanslar</a>
                                <a class="btn btn-link" style="color:black;" href="<?php echo base_url("admin/talepformu"); ?>">Talep Formu</a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h5 class="text-white mb-4">Çalışma Saatlerimiz</h5>
                                <p class="mb-1" style="color:black;">Pazartesi - Cuma</p>
                                <h6 ><?php echo $footer[0]->f_pzt_cuma;?></h6>
                                <p class="mb-1" style="color:black;">Cumartesi</p>
                                <h6><?php echo $footer[0]->f_cumartesi;?></h6>
                                <p class="mb-1" style="color:black;">Pazar</p>
                                <h6 style="color:red;"><?php echo $footer[0]->f_pazar;?></h6>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class=" wow fadeInUp" data-wow-delay="0.1s" style="margin:20px">
                                    <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.06633285807118!2d29.09929592133686!3d37.78860255297613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73e369428f4b3%3A0x55f3e46de8e7f407!2sSeanerji!5e0!3m2!1str!2str!4v1699627977856!5m2!1str!2str"
                                    frameborder="0" style=" border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                                </div>
                                <a href="<?php echo base_url(""); ?>" class="navbar-brand ps-5 me-0">
                                    <img src="<?php echo base_url("assets/img/yurtsevennakliyatlogo2.png"); ?>">
                                </a><br>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Copyright Start -->
                <div class="container-fluid copyright bg-dark py-4">
                    <div class="container text-center">
                        <p class="mb-2" style="color:black;">Copyright &copy; <a class="fw-semi-bold" style="color: #02245B;" href="http://yurtsevennakliyat.com.tr/">yurtsevennakliyat.com.tr/</a>, Bütün Hakları Saklıdır.
                        </p>
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p class="mb-0" style="color:black;">Tasarlayan <a class="fw-semi-bold" style="color: #02245B;"  href="https://www.technolobal.com/tr">Technolobal Bilişim/Geleceğe Adım Atın...</a>
                        </div>
                    </div>
                    <!-- Copyright End -->




                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                        class="bi bi-arrow-up"></i></a>


                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="<?php echo base_url("assets/"); ?>lib/wow/wow.min.js"></script>
                        <script src="<?php echo base_url("assets/"); ?>lib/easing/easing.min.js"></script>
                        <script src="<?php echo base_url("assets/"); ?>lib/waypoints/waypoints.min.js"></script>
                        <script src="<?php echo base_url("assets/"); ?>lib/owlcarousel/owl.carousel.min.js"></script>
                        <script src="<?php echo base_url("assets/"); ?>lib/counterup/counterup.min.js"></script>

                        <!-- Template Javascript -->
                        <script src="<?php echo base_url("assets/"); ?>js/main.js"></script>
                    </body>

                    </html>