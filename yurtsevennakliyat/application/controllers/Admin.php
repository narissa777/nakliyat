<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Europe/Istanbul');
class Admin extends CI_Controller
{

	public function index()
	{
		$data['slider'] = slider::select();
		$data['about_us'] = about_us::select();
		$data['nedenbiz'] = nedenbiz::select();
		$data['galeri'] = galeri::select();
		$data['yorum'] = yorum::select();
		$data['referans'] = referans::select();
		$data['footer'] = footer::select();





		$this->load->view('front-end/index', $data);
	}
	public function hizmetlerimiz()
	{
		$data['hizmetler'] = hizmetler::select();
		$data['footer'] = footer::select();



		$this->load->view('front-end/hizmetlerimiz', $data);
	}
	public function iletisim()
	{

		$data['footer'] = footer::select();
		$data['bizeulasin'] = bizeulasin::select();



		$this->load->view('front-end/contact',$data);
	}
	public function talepformu()
	{
		$data['footer'] = footer::select();
		$data['talepformu'] = talepformu::select();
		$this->load->view('front-end/talepformu', $data);
	}
	public function aboutus()
	{
		$data['referans'] = referans::select();
		$data['about_us'] = about_us::select();
		$data['footer'] = footer::select();


		$this->load->view('front-end/about', $data);
	}
	public function araclar()
	{
		$data['esyagaleri'] = esyagaleri::select();
		$data['esya'] = esya::select();
		$data['footer'] = footer::select();



		$this->load->view('front-end/araclar', $data);
	}
	public function mesajlar(){

		$data['mesajlar']= mesajlar::select();

		$this->load->view('admin/mesajlar', $data);
	}
	public function mesajsil($id)
	{
		$isExist = mesajlar::find($id);
		if ($isExist) {
			mesajlar::delete($id);
			flash('success', 'check', 'Başarılı', 'Mesaj Başarıyla Silindi');
			back();
		}
	}
	public function mesajekle(){
		if (isPost()) {
            $c_name = postvalue('name');
            $c_mail = postvalue('email');
            $c_subject = postvalue('subject');
            $c_details = postvalue('message');

            $data = [
                'user' => $c_name,
                'email' => $c_mail,
                'subject' => $c_subject,
                'comment' => $c_details
            ];
            mesajlar::insert($data); 

            $message="
            <!DOCTYPE html>
            <html>
            <head>
            <title>Talep Detayları</title>
            <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                font-size: 30px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            p {
                margin: 0;
                font-style: italic;
                margin-top: 20px;
            }
            </style>
            </head>
            <body>
            </html>
             <h1>İLETİŞİM İSTEĞİ!!!!!</h1>
            <table>
            <thead>
            <tr>
            <th>Kullanıcı Adı Soyadı</th>
            <th>Mail</th>
            <th>Konu</th>
            <th>Açıklama</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <p>$c_name</p>
            </td>
            
            <td>
            <p>$c_mail</p>
            </td>
            
            <td>
            <p>$c_subject</p>
            </td>
            
            <td>
            <p>$c_details</p>
            </td>
           
            </tr>
            </tbody>
            </table>
            </body>
            <p>İLETİŞİM İSTEĞİ MEVCUT!!!!!!</p>
            ";
            $message1="
            <!DOCTYPE html>
            <html>
            <head>
            <title>Talep Detayları</title>
            <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                font-size: 30px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            p {
                margin: 0;
                font-style: italic;
                margin-top: 20px;
            }
            </style>
            </head>
            <body>
            </html>
             <h1>İstek Bilgileriniz</h1>
            <table>
            <thead>
            <tr>
            <th>Kullanıcı Adı Soyadı</th>
            <th>Mail</th>
            <th>Konu</th>
            <th>Açıklama</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <p>$c_name</p>
            </td>
            
            <td>
            <p>$c_mail</p>
            </td>
            
            <td>
            <p>$c_subject</p>
            </td>
            
            <td>
            <p>$c_details</p>
            </td>
           
            </tr>
            </tbody>
            </table>
            </body>
            <p>Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır. İyi Günler Dileriz.</p>
            ";
            $to_email = $c_mail;
            $o_email = "bilgi@yurtsevennakliyat.com.tr";
            $subject = "İletişim İsteği";
            $return_value = send_email($to_email,$subject,$message1);
            $re_value = send_email($o_email,$subject,$message);
            
            redirect('iletisim');
        }
	}


	//////////////////////////////////////////////////////////////////////////////////ADMİN//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////LOGIN//////////////////////////////////////////////////////////////

	public function login()
	{
		$this->load->view('Admin/login');
	}

	public function loginislem()
	{

		$password = postvalue('sifre');
		$username = postvalue('kadi');

		$exist = user::find([

			'username' => $username,
			'password' => $password
		]);

		if ($exist) {
			session_start();
			$this->session->set_userdata('adminlogin', true);
			$this->session->set_userdata('admininfo', $exist);


			redirect('admin/slidergoruntule');
		} else {
			$hata = "Email adresi veya şifre hatalı.";
			$this->session->set_flashdata('error', $hata);
			redirect('Admin/login');
		}
	}
	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	//////////////////////////////////////////////////////////////////////////////////LOGIN//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////SLİDER//////////////////////////////////////////////////////////////


	public function slidergoruntule()
	{

		$slider['slider'] = Slider::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/slidergoruntule', $slider);
		} else {

			redirect('admin/login');
		}
	}
	public function sliderduzenle($id)
	{

		$data['slider'] = slider::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/sliderduzenle', $data);
		} else {

			redirect('admin/login');
		}
	}


	public function sliderduzenlee()
	{
		if (isset($_POST['kaydett'])) {

			$data = [

				'sliderbaslik' => postvalue('sliderbaslik'),
				'slideryazi' => postvalue('slideryazi')

			];
			$id = postvalue('id');

			slider::update($id, $data);
			redirect('admin/slidergoruntule');
		}
		if (isset($_POST['kaydet'])) {
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);


			$data = [


				'resimyol' => imageupload('resimyol', 'slider/'),


			];
			$id = postvalue('id');

			slider::update($id, $data);

			redirect('admin/slidergoruntule');
		}

		back();
	}
	//////////////////////////////////////////////////////////////////////////////////SLİDER//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////HAKKIMIZDA//////////////////////////////////////////////////////////////
	public function hakkimizdaindex()
	{
		$data['about_us'] = about_us::select();
		$yetki = $this->session->admininfo->yetki;

		if ($yetki == "admin") {
			$this->load->view('admin/hakkimizdaduzenle', $data);
		} else {
			redirect('admin/login');
		}
	}

	public function hakkimizdaduzenle()
	{
		$id = 1;


		if (isset($_POST['kaydettt'])) {
			$data = [
				'hbaslik' => postvalue('hbaslik'),
				'hbaslikaciklama' => postvalue('hbaslikaciklama'),
				'aciklama2' => postvalue('aciklama2')
			];

			$updateResult = about_us::update($id, $data);

			if ($updateResult) {
				flash('success', 'check', 'Başarılı', 'Değişiklikleriniz Başarıyla Güncellenmiştir...');
			} else {
				flash('danger', 'exclamation-triangle', 'Hata', 'Yazı güncelleme işlemi başarısız oldu. Hata: ' . about_us::error());
			}
		}

		// Resim 1 güncelleme
		if (isset($_POST['kaydet'])) {
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);

			$data = [
				'resim1' => imageupload('resim1', 'hakkimizda/')
			];

			$updateResult = about_us::update($id, $data);

			if ($updateResult) {
				flash('success', 'check', 'Başarılı', 'Resim 1 güncelleme işlemi başarıyla gerçekleşti...');
			} else {
				flash('danger', 'exclamation-triangle', 'Hata', 'Resim 1 güncelleme işlemi başarısız oldu. Hata: ' . about_us::error());
			}
		}

		// Resim 2 güncelleme
		if (isset($_POST['kaydett'])) {
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);

			$data = [
				'resim2' => imageupload('resim2', 'hakkimizda/')
			];

			$updateResult = about_us::update($id, $data);

			if ($updateResult) {
				flash('success', 'check', 'Başarılı', 'Resim 2 güncelleme işlemi başarıyla gerçekleşti...');
			} else {
				flash('danger', 'exclamation-triangle', 'Hata', 'Resim 2 güncelleme işlemi başarısız oldu. Hata: ' . about_us::error());
			}
		}

		back();
	}



	//////////////////////////////////////////////////////////////////////////////////HAKKIMIZDA//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////NEDENBİZ//////////////////////////////////////////////////////////////
	public function nedenbizindex()
	{
		$data['nedenbiz'] = nedenbiz::select();
		$yetki = $this->session->admininfo->yetki;

		if ($yetki == "admin") {
			$this->load->view('admin/nedenbiz', $data);
		} else {
			redirect('admin/login');
		}
	}
	public function nedenbizduzenle()
	{
		$id = 1;
		if (isset($_POST['kaydett'])) {


			$data = [

				'wbaslik' => postvalue('wbaslik'),
				'waciklama' => postvalue('waciklama'),
				'b1' => postvalue('b1'),
				'b1baslik' => postvalue('b1baslik'),
				'b2' => postvalue('b2'),
				'b2baslik' => postvalue('b2baslik'),
				'b3' => postvalue('b3'),
				'b3baslik' => postvalue('b3baslik'),
				'b4' => postvalue('b4'),
				'b4baslik' => postvalue('b4baslik'),
				'b5' => postvalue('b5'),
				'b5baslik' => postvalue('b5baslik')


			];
			flash('success', 'check', 'Başarılı', 'Değişiklikler başarıyla güncellendi...');


			nedenbiz::update($id, $data);
		}
		if (isset($_POST['kaydet'])) {
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);


			$data = [


				'bresim' => imageupload('bresim', 'nedenbiz/'),


			];


			nedenbiz::update($id, $data);

			flash('success', 'check', 'Başarılı', 'Resim  güncelleme işlemi başarıyla gerçekleşti...');
		}

		back();
	}

	//////////////////////////////////////////////////////////////////////////////////NEDENBİZ//////////////////////////////////////////////////////////////




	//////////////////////////////////////////////////////////////////////////////////GALERİ//////////////////////////////////////////////////////////////

	public function galeri()
	{

		$this->load->view('admin/galeriekle');
	}
	public function galeriekle()
	{
		if (isPost()) {
			$config['upload_path']          = '.upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [
				'gaciklama' => postvalue('gaciklama'),
				'gresim' => imageupload('gresim', 'galeri/'),
			];



			galeri::insert($data);


			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Eklenmiştir...');
		}
		back();
	}
	//galeri görüntüle
	public function galerigoruntule()
	{
		$data['galeri'] = galeri::select();


		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/galerigoruntule', $data);
		} else {

			redirect('admin/login');
		}
	}


	// galeri görüntüle bitis


	// galeri resim sil
	public function galerifotosil($id)
	{
		$isExist = Galeri::find($id);
		if ($isExist) {
			Galeri::delete($id);
			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Silindi');
			back();
		}
	}
	//////////////////////////////////////////////////////////////////////////////////GALERİ//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////YORUM//////////////////////////////////////////////////////////////


	public function yorumgoruntule()
	{

		$yorum['yorum'] = yorum::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yorumgoruntule', $yorum);
		} else {

			redirect('admin/login');
		}
	}
	public function yorumduzenle($id)
	{

		$data['yorum'] = yorum::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yorumduzenle', $data);
		} else {

			redirect('admin/login');
		}
	}


	public function yorumduzenleeee($id)
	{
		if (isPost()) {
			$data = [

				'yaciklama' => postvalue('yaciklama'),
				'kullaniciadi' => postvalue('kullaniciadi'),
				'meslek' => postvalue('meslek')


			];

			yorum::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Yorum  Başarıyla Değiştirilmiştir...');
		}
		back();
	}


	public function yorumekleindex()
	{

		$yorum['yorum'] = yorum::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yorumekle', $yorum);
		} else {

			redirect('admin/login');
		}
	}
	public function yorumekle()
	{
		if (isPost()) {

			$data = [

				'yaciklama' => postvalue('yaciklama'),
				'kullaniciadi' => postvalue('kullaniciadi'),
				'meslek' => postvalue('meslek')


			];



			yorum::insert($data);


			flash('success', 'check', 'Başarılı', 'Yorum  Başarıyla Eklenmiştir...');
		}
		back();
	}
	public function yorumsil($id)
	{
		$isExist = yorum::find($id);
		if ($isExist) {
			yorum::delete($id);

			back();
		}
	}
	//////////////////////////////////////////////////////////////////////////////////YORUM//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////REFERANS//////////////////////////////////////////////////////////////

	public function referansekleindex()
	{

		$data['referans'] = referans::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/referansekle', $data);
		} else {

			redirect('admin/login');
		}
	}
	public function referansekle()
	{
		if (isPost()) {
			$config['upload_path']          = '.upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [
				'r_aciklama' => postvalue('r_aciklama'),
				'r_resim' => imageupload('r_resim', 'referans/')
			];



			referans::insert($data);


			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Eklenmiştir...');
		}
		back();
	}
	//galeri görüntüle
	public function referansgoruntule()
	{
		$data['referans'] = referans::select();


		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/referansgoruntule', $data);
		} else {

			redirect('admin/login');
		}
	}



	public function referanssil($id)
	{
		$isExist = referans::find($id);
		if ($isExist) {
			referans::delete($id);
			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Silindi');
			back();
		}
	}
	//////////////////////////////////////////////////////////////////////////////////REFERANS//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////HİZMETLER//////////////////////////////////////////////////////////////

	public function hizmetlerekleindex()
	{

		$data['hizmetler'] = hizmetler::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hizmetlerimizekle', $data);
		} else {

			redirect('admin/login');
		}
	}
	public function hizmetlerekle()
	{
		if (isPost()) {
			$config['upload_path']          = '.upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [
				'h_baslik' => postvalue('h_baslik'),
				'h_aciklama' => postvalue('h_aciklama'),


				'h_resim' => imageupload('h_resim', 'hizmetlerimiz/')
			];



			hizmetler::insert($data);


			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Eklenmiştir...');
		}
		back();
	}
	//galeri görüntüle
	public function hizmetlergoruntule()
	{
		$data['hizmetler'] = hizmetler::select();


		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hizmetlergoruntule', $data);
		} else {

			redirect('admin/login');
		}
	}



	public function hizmetlersil($id)
	{
		$isExist = hizmetler::find($id);
		if ($isExist) {
			hizmetler::delete($id);
			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Silindi');
			back();
		}
	}
	//////////////////////////////////////////////////////////////////////////////////HİZMETLER//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////EŞYA YÜK//////////////////////////////////////////////////////////////
	public function esyaduzenleindex()
	{

		$data['esya'] = esya::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/esyaaciklamaduzenle', $data);
		} else {

			redirect('admin/login');
		}
	}
	public function esyaduzenle()
	{
		if (isset($_POST['kaydett'])) {
			$id = 1;

			$data = [

				'e_aciklama' => postvalue('e_aciklama')
				

			];

			flash('success', 'check', 'Başarılı', 'Açıkalma Başarıyla Güncellendi');

			esya::update($id, $data);
			
		}
		if (isset($_POST['save'])) {
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);


			$data = [


				'e_resim' => imageupload('e_resim', 'esya/'),


			];
			$id = 1;

			esya::update($id, $data);

			flash('success', 'check', 'Başarılı', 'Fotoğrafı Başarıyla Güncellendi');
		}

		back();
	}
	public function esyagaleriindex()
	{

		$this->load->view('admin/esyafotoekle');
	}
	public function esyagaleriekle()
	{
		if (isPost()) {
			$config['upload_path']          = '.upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [
				'eg_aciklama' => postvalue('eg_aciklama'),
				'eg_resim' => imageupload('eg_resim', 'esya/'),
			];



			esyagaleri::insert($data);


			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Eklenmiştir...');
		}
		back();
	}
	//galeri görüntüle
	public function esyagalerigoruntule()
	{
		$data['esyagaleri'] = esyagaleri::select();


		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/esyagalerigoruntule', $data);
		} else {

			redirect('admin/login');
		}
	}


	// galeri görüntüle bitis


	// galeri resim sil
	public function esyagalerifotosil($id)
	{
		$isExist = esyagaleri::find($id);
		if ($isExist) {
			esyagaleri::delete($id);
			flash('success', 'check', 'Başarılı', 'Galeri Fotoğrafı Başarıyla Silindi');
			back();
		}
	}

	//////////////////////////////////////////////////////////////////////////////////EŞYA YÜK//////////////////////////////////////////////////////////////

	public function siteayarlarigoruntule()
	{

		$data['siteayarlari'] = email::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/siteayarlari', $data);
		} else {

			redirect('admin/login');
		}
	}
		public function emailduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'email' => postvalue('email'),
				'password' => postvalue('password')
			];

			email::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}
	//////////////////////////////////////////////////////////////////////////////////FOOTER//////////////////////////////////////////////////////////////
	public function footerduzenleindex()
	{

		$data['footer'] = footer::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/footerduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function footerduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'f_adres' => postvalue('f_adres'),
				'f_telefon' => postvalue('f_telefon'),
				'f_email' => postvalue('f_email'),
				'f_twitter' => postvalue('f_twitter'),
				'f_facebook' => postvalue('f_facebook'),
				'f_instagram' => postvalue('f_instagram'),
				'f_linkedin' => postvalue('f_linkedin'),
				'f_pzt_cuma' => postvalue('f_pzt_cuma'),
				'f_cumartesi' => postvalue('f_cumartesi'),
				'f_pazar' => postvalue('f_pazar')
				

			];





			footer::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}
	//////////////////////////////////////////////////////////////////////////////////FOOTER//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////BİZE ULAŞIN//////////////////////////////////////////////////////////////
	public function bizeulasinindex()
	{

		$data['bizeulasin'] = bizeulasin::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/bizeulasin',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function bizeulasinduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'sabit' => postvalue('sabit'),
				'fax' => postvalue('fax'),
				'cep' => postvalue('cep'),
				'mail' => postvalue('mail'),
				'adres' => postvalue('adres'),
				'faturaadresi' => postvalue('faturaadresi'),
				'bankabilgisi' => postvalue('bankabilgisi'),
				'iletisimaciklama' => postvalue('iletisimaciklama')
				

			];





			bizeulasin::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

	//////////////////////////////////////////////////////////////////////////////////BİZE ULAŞIN//////////////////////////////////////////////////////////////

















}
