
<?php
if ($_POST) {
	$ID = $_POST['ID'];
	$P = $_POST['P'];
	$ucret = ucretler::query("SELECT * FROM ucretler ORDER BY id DESC LIMIT 1");
	$musteri = musteri::select(['kart_id'=>$ID]);
	$bakiye =$musteri[0]->bakiye;
	if ($P == 1) 
	{
		$bakiyekontrol = $ucret[0]->yikama;
		if ($bakiye >= $bakiyekontrol) 
		{
			$kalanbakiye = (int) $bakiye - (int) $bakiyekontrol;
			$sure = sureler::query("SELECT * FROM sureler ORDER BY id DESC LIMIT 1");
			$surebilgisi = $sure[0]->yikamasuresi;
			$data=
			[
				'kart_id' =>$ID,
				'calistimi'=>1,
				'P' =>$P,
				'sure' =>$surebilgisi,
				'eski_bakiye'=>$bakiye,
				'yeni_bakiye'=>$kalanbakiye
			];
			$update = 
			[
				'bakiye' => $kalanbakiye
			];
			musteri::update(['kart_id'=>$ID],$update);
			loglar::insert($data);
			echo "*T:$surebilgisi:$kalanbakiye*";
		}else
		{
			echo "*F:00:00:$bakiye*";
		}
	}else
	{
		$bakiyekontrol = $ucret[0]->kopuk;
		if ($bakiye >= $bakiyekontrol) 
		{
			$kalanbakiye = (int) $bakiye - (int) $bakiyekontrol;
			$sure = sureler::query("SELECT * FROM sureler ORDER BY id DESC LIMIT 1");
			$surebilgisi = $sure[0]->kopuksuresi;
			$data=
			[
				'kart_id' =>$ID,
				'calistimi'=>1,
				'P' =>$P,
				'sure' =>$surebilgisi,
				'eski_bakiye'=>$bakiye,
				'yeni_bakiye'=>$kalanbakiye
			];
			$update = 
			[
				'bakiye' => $kalanbakiye
			];
			musteri::update(['kart_id'=>$ID],$update);
			loglar::insert($data);
			echo "*T:$surebilgisi:$kalanbakiye*";
		}else
		{
			echo "*F:00:00:$bakiye*";
		}
	}
	
}else{
	echo "post gelmiyor";
}
?>


