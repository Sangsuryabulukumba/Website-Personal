<?php
	require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
			<div id="">
				<h2>Tentang Hotel  Kami</h2><br>
				<img src="gambar/Hotel.jpeg" width="50%" height="100%"><br>
				<p>
					Hotel Sang Surya Bulukumba Dahulunya Bernama Wisma Sang Surya Berbasis Syariah STKIP Muhammadiyah Bulukumba, Hotel ini di dirikan oleh STKIP Muhammadiah Bulukumba yang Sekarang berganti Nama Menjadi Kampus Universitas Muhammadiyah Bulukumba (UMB) Pada Tahun 2015.
					Hotel Sang Surya Bulukumba Terletak Di Jalan Sultan Hasanuddin no 48 Bulukumba (Poros Bulukumba- Bantaeng). Hotel ini memiliki tempat terdekat seperti Warkop Bang Billi , Kampus Univesitas Muhammadiah Bulukumba, SPBU, Dan Masjid Islami Center Dato Tiro Bulukumba. Hotel ini mempunyai fasilitas seperti kamarr, spring bed, Lemari, Kamar Mandi, AC, Televisi, Sajadah, Al- Qur'an, Handuk Perlengakapan Mandi, Air Minum,Musolah dan area Parkir Dan Motor.
				</p>
			</div>
			<div id="datakamar2">
				<h2>Data Kamar Hotel</h2><br>
    <div>
        <?php

            $sql = $pdo->query("SELECT * FROM kamar");
            while($data = $sql->fetch()) {
                $id = $data['idkamar'];
                $tipe = $data['tipe'];
                $jumlah = $data['jumlah'];
                $harga = $data['harga'];
                $gambar = $data['gambar'];

                $angka = number_format($harga,0,",",".");

                $sqly = $pdo->query("SELECT * FROM stokkamar WHERE idkamar=$id");
                while($datay = $sqly->fetch()) {
                    $stok = $datay['stok'];
        ?>
        
            <div class="kamar">
                <table>
                    <tr>
                        <td>
                            <center>
                                
                                <div class="idkamar">
                                    <?php echo $tipe ?>
                                </div>
                                <div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
                                <img src="simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
                                <div class="tipekamar">Tersedia <?php echo $stok ?> Kamar</div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <a href="user/pemesanan"><button style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red;">Pesan</button></a>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
                    }
                }
            ?>
    </div>
    </div>  
	<div id="">
				<h2>Peta Lokasi Hotel</h2><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d520492270.68298316!2d120.18295726717932!3d-5.560959091750719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbbff952770f8d9%3A0xd75e1493e87f9f91!2sHotel%20SANG%20SURYA!5e0!3m2!1sid!2sid!4v1705759071291!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			</center>
	

<?php
	require_once "view/footer.php"
?>
