<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yurtseven Nakliyat</title>
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
						<h1 class="m-0">Gelen Talepleri Görüntüleme Sayfası</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item active">GELEN TALEPLERİ GÖRÜNTÜLEME SAYFASI</li>
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
								<table id="talep" class="table table-bordered table-striped" style="width:100%">
									<thead>
										<tr>
											<th>Adı Soyadı</th>
											<th>Email</th>
											<th>Telefon Numarası</th>
											<th>İstekler</th>
											<th>Mülk Tipi</th>
											<th>Kat(Alınacak)</th>
											<th>Oda Sayısı(Alınacak)</th>
											<th>Taşınma Türü(Alınacak)</th>
											<th>Yanaşma Mesafesi(Alınacak)</th>
											<th>Adres (Alınacak)</th>
											<th>Tarih(Alınacak)</th>
											<th>Mülk Tipi(Gidilecek)</th>
											<th>Kat(Gidilecek)</th>
											<th>Oda Sayısı(Gidilecek)</th>
											<th>Taşınma Türü(Gidilecek)</th>
											<th>Yanaşma Mesafesi(Gidilecek)</th>
											<th>Adres(Gidilecek)</th>
											<th>Özel Eşyalar(Gidilecek)</th>
											<th>Tarih(Gidilecek)</th>
											<th>İşlemler</th>


										</tr>
									</thead>
									<tbody>
										<?php foreach ($talepform as $talep) {?>

											<tr>

												<td>
													<p><?php echo $talep->ad_soyad ; ?></p>
												</td>

												<td>
													<p><?php echo $talep->email ; ?></p>
												</td>

												<td>
													<p><?php echo $talep->telefon ; ?></p>
												</td>

												<td>
													<p><?php echo $talep->detaylar; ?></p>
												</td>


												<td>
													<p><?php echo $talep->mulk_tipi;?></p>
												</td>

												<td>
													<p><?php echo $talep->bulundugu_kat; ?></p>
												</td>
												<td>
													<p><?php echo $talep->oda_sayisi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->tasinma_turu; ?></p>
												</td>
												<td>
													<p><?php echo $talep->arac_yanasma_mesafesi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->alinacak_adres; ?></p>
												</td>
												<td>
													<p><?php echo $talep->tasinma_tarihi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_mulk_tipi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_kat; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_oda_sayisi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_tasinma_turu; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_arac_yanasma_mesafesi; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_adres; ?></p>
												</td>
												<td>
													<p><?php echo $talep->ozel_esyalar; ?></p>
												</td>
												<td>
													<p><?php echo $talep->gidilecek_tasinma_tarihi; ?></p>
												</td>


												<td>
													<button type="button" class="btn btn-danger" title="mesajsil" data-toggle="modal" data-target="#modal-danger-">SİL <i class="fas fa-trash"></i></button>


													<div class="modal fade" id="modal-danger-">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title"><?php echo $talep->ad_soyad; ?> </h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p>Silmek istediğinizden emin misiniz?&hellip;</p>
																</div>
																<div class="modal-footer justify-content-between">
																	<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
																	<a href="<?php echo base_url('Talep/talepsil/'.$talep->id.'') ?>" class="button"><button type="button" class="btn btn-outline-danger">Evet</button></a>
																</div>
															</div>

														</div>

													</div>
												</td>


											</tr>
										<?php  }?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


	</div>





	<?php $this->load->view('admin/include/footer'); ?>

	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?php echo base_url(''); ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(''); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(''); ?>dist/js/adminlte.min.js"></script>
</body>
</html>