
<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Europe/Istanbul');
class Talep extends CI_Controller
{

    public function talepet()
    {
        if (isPost()) {
            $c_name = postvalue('ad_soyad');
            $c_mail = postvalue('email');
            $c_number = postvalue('telefon');
            $c_details = postvalue('detaylar');
            $c_propertiestype = postvalue('mulk_tipi');
            $c_floor = postvalue('bulundugu_kat');
            $c_room = postvalue('oda_sayisi');
            $c_date = postvalue('tasinma_tarihi');
            $c_typeoftrans = postvalue('tasinmatip');
            $c_vehicledistance = postvalue('arac_yanasma_mesafesi');
            $c_address = postvalue('alinacak_adres');
            $t_propertiestype = postvalue('gidilecek_mulk_tipi');
            $t_floor = postvalue('gidilicek_kat');
            $t_room = postvalue('gidilecek_oda_sayisi');
            $t_date = postvalue('gidilecek_tasinma_tarihi');
            $t_typeoftrans = postvalue('tasinmatip');
            $t_vehicledistance = postvalue('gidilecek_arac_yanasma_mesafesi');
            $t_address = postvalue('gidilecek_adres');
            $private_items = $_POST['ozel_esyalar'];
            $t_private = implode(",", $private_items);

            $data = [
                'ad_soyad' => $c_name,
                'email' => $c_mail,
                'telefon' => $c_number,
                'detaylar' => $c_details,
                'mulk_tipi' => $c_propertiestype,
                'bulundugu_kat' => $c_floor,
                'oda_sayisi' => $c_room,
                'tasinma_tarihi' => $c_date,
                'tasinma_turu' => $c_typeoftrans,
                'arac_yanasma_mesafesi' => $c_vehicledistance,
                'alinacak_adres' => $c_address,
                'gidilecek_mulk_tipi' => $t_propertiestype,
                'gidilecek_kat' => $t_floor,
                'gidilecek_oda_sayisi' => $t_room,
                'gidilecek_tasinma_tarihi' => $t_date,
                'gidilecek_tasinma_turu' => $t_typeoftrans,
                'gidilecek_arac_yanasma_mesafesi' => $t_vehicledistance,
                'gidilecek_adres' => $t_address,
                'ozel_esyalar' => $t_private
            ];
            talepformu::insert($data); 

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
            <h1>Eşyaların Alınacağı</h1>
            <table>
            <thead>
            <tr>
            <th>Kullanıcı Adı Soyadı</th>
            <th>Telefon Numarası</th>
            <th>İstekler</th>
            <th>Mülk Tipi</th>
            <th>Kat(Alınacak)</th>
            <th>Oda Sayısı(Alınacak)</th>
            <th>Taşınma Türü(Alınacak)</th>
            <th>Yanaşma Mesafesi(Alınacak)</th>
            <th>Adres (Alınacak)</th>
            <th>Tarih(Alınacak)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <p>$c_name</p>
            </td>
            
            <td>
            <p>$c_number</p>
            </td>
            
            <td>
            <p>$c_details</p>
            </td>
            
            <td>
            <p>$c_propertiestype</p>
            </td>
            
            <td>
            <p>$c_floor</p>
            </td>
            
            <td>
            <p>$c_room</p>
            </td>
            
            <td>
            <p>$c_typeoftrans</p>
            </td>
            
            <td>
            <p> $c_vehicledistance</p>
            </td>
            
            <td>
            <p>$c_address</p>
            </td>
            
            <td>
            <p>$c_date</p>
            </td>
            </tr>
            </tbody>
            </table>
            <br>
            <br>
            <br>
            <h1>Taşınacağı Yer</h1>
            <table>
            <thead>
            <tr>
            <th>Mülk Tipi(Gidilecek)</th>
            <th>Kat(Gidilecek)</th>
            <th>Oda Sayısı(Gidilecek)</th>
            <th>Taşınma Türü(Gidilecek)</th>
            <th>Yanaşma Mesafesi(Gidilecek)</th>
            <th>Adres(Gidilecek)</th>
            <th>Özel Eşyalar(Gidilecek)</th>
            <th>Tarih(Gidilecek)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <p>$t_propertiestype</p>
            </td>
            
            <td>
            <p>$t_floor</p>
            </td>
            
            <td>
            <p>$t_room</p>
            </td>
            
            <td>
            <p>$t_typeoftrans</p>
            </td>
            
            <td>
            <p> $t_vehicledistance</p>
            </td>
            
            <td>
            <p>$t_address</p>
            </td>

            <td>
            <p>$t_private</p>
            </td>

            <td>
            <p>$t_date</p>
            </td>
            </tr>
            </tbody>
            </table>
            </body>
            <p>Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır. İyi Günler Dileriz.</p>
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
            <p>TALEBİNİZ OLUŞTURULDU MUTLU GÜNLERDE BEKLEYİN.</p>

            <p>Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır. İyi Günler Dileriz.</p>
            <body>
            </html>
            
            </body>
            ";
            $to_email = $c_mail;
            $o_email = "bilgi@yurtsevennakliyat.com.tr";
            $subject = "TAŞINMA TALEP FORMU İSTEĞİ";
            $re_value = send_email($o_email,$subject,$message);
            $return_value = send_email($to_email,$subject,$message1);
            
            flash('success', 'check', 'Başarılı', 'Form Başarıyla Gönderilmiştir,Talep Formu İsteğiniz Emailinize iletilmiştir,Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır.İyi Günler Dileriz...');   
            
            redirect('talepformu');
        }
    }

    public function talepgoruntule(){

        $data['talepform'] = talepformu::select();
        $this->load->view('admin/talepler', $data);
    }
    public function talepsil($id)
    {
        $isExist = talepformu::find($id);
        if ($isExist) {
            talepformu::delete($id);
            flash('success', 'check', 'Başarılı', 'Talep Formu Başarıyla Silindi');
            back();
        }
    }
}

?>

