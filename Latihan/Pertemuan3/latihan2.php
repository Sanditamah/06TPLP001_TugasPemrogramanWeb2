<!--//Nama File 				: latihan2.php
	//Nama Programmer 			: Sandi Tamalia Herman -->

<html>
	<head>
		<title> Penggunaan IF</title>
	</head>

	<body>
		<form method="post" action="" >
			Jumlah_Pembelian :
			<input type=text name=input1><br><br>
			<input type=submit value="Tentukan Diskon">
		</form>
		<?php
		error_reporting(0);
			$totalbeli=$_POST['input1'];
			 if (isset($totalbeli))
			 {
			$totalbeli=intval($totalbeli);
			$pot=0;
			if($totalbeli>=200000)
			 $pot=0.1;
			else if ($totalbeli>=100000)
			 $pot= 0.05;
			else
			 $pot=0.01;
			$pot=$pot*$totalbeli;
			printf("Jumlah Pembelian = %s <br>", $totalbeli);
			printf("Diskon = %s <br>", $pot);
			printf("Pembayaran = %s <br>", $totalbeli-$pot);
			 }
		?>
	</body>

</html>