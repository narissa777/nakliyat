<?php $this->load->view("front-end/include/header"); ?>
<style type="text/css">

 .form-size{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: space-evenly;
    align-items: flex-start;
    margin: 105px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background:linear-gradient(to right, #e6711a8a 0%, #ffc1073b 100%);


}

td {
    padding: 10px;
    border: 1px solid #ddd;
    color: #02245B;

}

input[type="text"],
input[type="date"],
input[type="email"],
textarea,
select {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

input[type="checkbox"],
input[type="radio"] {
    margin-right: 5px;
}

input[type="file"] {
    margin-top: 10px;
}

input[type="reset"],
input[type="submit"] {
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="reset"]:hover,
input[type="submit"]:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    .form-size{
        margin: 1px;
    }
    form {
        padding: 10px;
    }

    td {
        display: block;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="checkbox"],
    input[type="radio"] {
        margin-bottom: 10px;
    }

    input[type="reset"],
    input[type="submit"] {
        width: 100%;
    }
}

</style>
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; margin-top: 20px;">
    <h1 style="text-align:center; color: #e6711a ;">Talep Formu</h1>
    <hr style="height: 5px; background: linear-gradient(to right, #99380c, #cc4b10);">
</div>
<?php flashread(); ?>
<form action="<?php echo base_url('Talep/talepet'); ?>" role="form" method="POST" enctype= "multipart/form-data">
    <div class="form-size" >
       
        <div>
            <table>
                <h1>Kişisel Bilgileriniz</h1>
                <tr>
                    <td>Adınız Soyadınız:</td>
                    <td><input type="text" name="ad_soyad" required></td>
                </tr>
                <tr>
                    <td>E-posta Adresi:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Telefon Numaranız:</td>
                    <td><input type="tel" name="telefon" oninput="formatTelefonNumarasi(this)" required></td>
                </tr>
                <tr>
                    <td>Bize iletmek istediğiniz detaylar:</td>
                    <td><textarea name="detaylar"></textarea></td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <h1>Eşya Alınan Yer</h1>
                <tr>
                    <td>Mülk Tipi Seçiniz</td>
                    <td><select name="mulk_tipi" required>
                        <option value="apartman">Apartman</option>
                        <option value="daire">Daire</option>
                        <option value="villa">Villa</option>
                        <option value="müstakil">Müstakil</option>
                        <option value="ofis">Ofis</option>
                        <option value="mağaza">Mağaza</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Bulunduğu Kat</td>
                    <td><select name="bulundugu_kat" required>
                        <option value="-3">-3</option>
                        <option value="-2">-2</option>
                        <option value="-1">-1</option>
                        <option value="zeminkat">Zemin Kat</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13vedahafazlası">13ve daha fazla</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Oda Sayısı</td>
                    <td><select name="oda_sayisi" required>
                        <option value="1+0Stüdyo">>1+0(Stüdyo)</option>
                        <option value="1+1">1+1</option>
                        <option value="2+1">2+1</option>
                        <option value="3+1">3+1</option>
                        <option value="4+1">4+1</option>
                        <option value="5+1">5+1 ve üzeri</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Eşyanın Taşınma Tarihi:</td>
                    <td><input type="date" name="tasinma_tarihi"></td>
                </tr>
                <tr>
                    <td>Eşyanın Taşınma Türü</td>
                    <td>
                        <input type="radio" name="tasinmatip" value="Bina Asansoru"> Bina Asansörü<br>
                        <input type="radio" name="tasinmatip" value="Bina Merdivenleri">Bina Merdivenleri <br>
                        <input type="radio" name="tasinmatip" value="Disaridan Asansor">Dışarıdan Asansör
                    </td>
                </tr>
                <tr>
                    <td>Araç Yanaşma Mesafesi:</td>
                    <td><select name="arac_yanasma_mesafesi" required>
                        <option value="0-15m">0-15 m</option>
                        <option value="15-30m">15-30 m</option>
                        <option value="30-50m">30-50 m</option>
                        <option value="50mveüzeri">50 m ve üzeri</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Eşyanın Alınacağı Tam Adres:</td>
                    <td><textarea name="alinacak_adres" required></textarea></td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <h1>Eşya Gideceği Yer</h1>
                <tr>
                    <td>Mülk Tipi Seçiniz</td>
                    <td><select name="gidilecek_mulk_tipi" required>
                        <option value="gidilecekapartman">Apartman</option>
                        <option value="gidilecekdaire">Daire</option>
                        <option value="gidilecekvilla">Villa</option>
                        <option value="gidilecekmüstakil">Müstakil</option>
                        <option value="gidilecekofis">Ofis</option>
                        <option value="gidilecekmağaza">Mağaza</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Bulunduğu Kat</td>
                    <td><select name="gidilicek_kat" required>
                        <option value="-3">-3</option>
                        <option value="-2">-2</option>
                        <option value="-1">-1</option>
                        <option value="zeminkat">Zemin Kat</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13vedahafazlası">13ve daha fazla</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Oda Sayısı</td>
                    <td><select name="gidilecek_oda_sayisi" required>
                        <option value="1+0stüdyo">1+0(Stüdyo)</option>
                        <option value="1+1">1+1</option>
                        <option value="2+1">2+1</option>
                        <option value="3+1">3+1</option>
                        <option value="4+1">4+1</option>
                        <option value="5+1">5+1 ve üzeri</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Eşyanın Taşınma Tarihi:</td>
                    <td><input type="date" name="gidilecek_tasinma_tarihi" required></td>
                </tr>
                <tr>
                    <td>Eşyanın Taşınma Türü</td>
                    <td>
                        <input type="radio" name="tasinmatip" value="Bina Asansoru" >Bina Asansörü<br>
                        <input type="radio" name="tasinmatip" value="Bina Merdivenleri">Bina Merdivenleri <br>
                        <input type="radio" name="tasinmatip" value="Disaridan Asansor" >Dışarıdan Asansör
                    </td>
                </tr>
                <tr>
                    <td>Araç Yanaşma Mesafesi:</td>
                    <td><select name="gidilecek_arac_yanasma_mesafesi" required>
                        <option value="0-15m">0-15 m</option>
                        <option value="15-30m">15-30 m</option>
                        <option value="30-50m">30-50 m</option>
                        <option value="50mveüzeri">50 m ve üzeri</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Eşyanın Alınacağı Tam Adres:</td>
                    <td><textarea name="gidilecek_adres"></textarea></td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <h1>ÖZEL EŞYALARINIZI BELİRTİNİZ</h1>

                <tr>
                    <td>Özel Eşya Bilgileriniz:</td>
                    <td>
                        <input type="checkbox" name="ozel_esyalar[]" value="antikaesyalar"> Antika Eşyalar<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="bilgisayar"> Bilgisayar<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="bulasikmakinasi"> Bulaşık Makinası <br>
                        <input type="checkbox" name="ozel_esyalar[]" value="buzdolabi"> Buzdolabı<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="camasirmakinası"> Çamaşır Makinası<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="cocukodasi"> Çocuk Odası<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="firin"> Fırın<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="mutfakesyalari"> Mutfak Eşyaları<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="oturmaodasi"> Oturma Odası<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="parakasasi"> Para Kasası<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="piyano"> Piyano<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="salontakimi"> Salon Takımı<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="tv"> TV<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="tvünitesi"> TV Ünitesi<br>
                        <input type="checkbox" name="ozel_esyalar[]" value="yatakodasi"> Yatak Odası
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td> <input type="submit" style="background: #02245B;"></td>
                </tr>
            </table>
        </div>
    </div>
</form>
<script>
    function formatTelefonNumarasi(input) {
            // Kullanıcının girdiği sadece rakamları al
        let cleaned = ('' + input.value).replace(/\D/g, '');

            // Numarayı formatla
        let formatted = `(${cleaned.slice(0, 3)}) ${cleaned.slice(3, 6)} ${cleaned.slice(6, 8)} ${cleaned.slice(8, 10)}`;

            // Formatlanmış numarayı input'a yazdır
        input.value = formatted;
    }
</script>
<?php $this->load->view("front-end/include/footer"); ?>