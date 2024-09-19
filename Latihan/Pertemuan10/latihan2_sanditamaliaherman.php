<!--Nama : latihan2_sanditamaliaherman.php
	Nama : Sandi Tamalia Herman
	Tanggal Ngoding : 17/10/2022
	Tanggal Latihan Ngoding : 17/10/2022-->
	
<html>
	<head>
		<title> Penggunaan IF</title>
	</head>
	
	<body>
		<form method="POST" action="" >
		 Jumlah Pembelian :
		 <input type=text name=input1><br><br>
		 <input type=submit value="Tentukan Diskon">
		</form>
		<?php
		 if ( isset($_POST['input1']))
			{
				$totalbeli = $_POST['input1'];
				$totalbeli = intval($totalbeli);
				$pot = 0;
				if($totalbeli>=200000)
				$pot = 0.1;
				else if ($totalbeli>=100000)
				$pot = 0.05;
				else
				$pot = 0.01;
				$pot = $pot*$totalbeli;
				printf("Jumlah Pembelian = %s <br>", $totalbeli);
				printf("Diskon = %s <br>", $pot);
				printf("Pembayaran = %s <br>", $totalbeli-$pot);
			}
		?>
	</body>
</html>