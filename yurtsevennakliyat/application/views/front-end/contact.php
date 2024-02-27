<?php $this->load->view("front-end/include/header"); ?>


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center mb-5">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Telefon Numaralarımız</h4>
                    <a class="mb-2" href="<?php echo $bizeulasin[0]->sabit; ?>"><?php echo $bizeulasin[0]->sabit; ?></a><br>
                    <a class="mb-2"><?php echo $bizeulasin[0]->fax; ?></a><br>
                    <a class="mb-2" href="<?php echo $bizeulasin[0]->cep; ?>"><?php echo $bizeulasin[0]->cep; ?></a><br>

                    <a class="btn btn-primary px-4" href="<?php echo $bizeulasin[0]->cep; ?>">Şimdi Arayın <i
                        class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Email Adresimiz</h4>
                        <p class="mb-2"><?php echo $bizeulasin[0]->mail; ?></p>
                        <p class="mb-4">---</p>
                        <a class="btn btn-primary px-4" href="mailto:bilgi@yurtsevennakliyat.com.tr">Şimdi Mail Gönderin <i
                            class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Ofis Adresimiz</h4>
                            <p class="mb-2"><?php echo $bizeulasin[0]->adres; ?></p>
                            <a class="btn btn-primary px-4" href="https://maps.app.goo.gl/vukySqFWNvvkwYuL6"
                            target="blank">Hemen Konuma Erişin <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                      <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                        <i class="fas fa-address-card text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6>Fatura Adresimiz</h6>
                                        <span><?php echo $bizeulasin[0]->faturaadresi; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                        <i class="fas fa-money-check-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6>Banka Bilgilerimiz</h6>
                                        <span><?php echo $bizeulasin[0]->bankabilgisi; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.06633285807118!2d29.09929592133686!3d37.78860255297613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73e369428f4b3%3A0x55f3e46de8e7f407!2sSeanerji!5e0!3m2!1str!2str!4v1699627977856!5m2!1str!2str"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="fw-medium text-uppercase text-primary mb-2">Bizimle İletişime Geçin</p>
                        <h1 class="display-5 mb-4">Doğru seçenek ve Doğru Adrestesiniz</h1>
                        <p class="mb-4"><?php echo $bizeulasin[0]->iletisimaciklama; ?></p>
                      
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form action="<?php echo base_url('admin/mesajekle'); ?>" role="form" method="POST" enctype= "multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" placeholder="Adınız ve Soyadınız" required>
                                        <label for="name">Adınız ve Soyadınız</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" placeholder="Mail Adresiniz" required>
                                        <label for="email">Mail Adresiniz</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" placeholder="Konu" required>
                                        <label for="subject">Konu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Açıklama Mesajınız" name="message"
                                        style="height: 150px" required></textarea>
                                        <label for="message">Açıklama Mesajınız</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php $this->load->view("front-end/include/footer"); ?>