<!--Nama : tugas1_sanditamaliaherman.php
	Nama : Sandi Tamalia Herman
	Tanggal Ngoding : 17/10/2022
	Tanggal Latihan Ngoding : 17/10/2022-->
	
<html>
	<head>
		<title> Penggunaan IF </title>
	</head>
	<body>
		<form method="post" action="">
			TOTAL PEMBELIAN :
			<input type=text name=input_a><br><br>
			<input type=submit value="Hitung Pembelian">
		</form>
	<?php
	error_reporting(0);
	$totalbeli=$_POST["input_a"];
	if (isset($totalbeli))
	{
		$totalbeli=intval($totalbeli);
		$pot=0;
		$bonus;
		if($totalbeli>=1500000)
		$pot=0.40;
		else if ($totalbeli>=1000000)
		$pot= 0.30;
		else
		$pot=0;
		$pot=$pot*$totalbeli;
	}
	if($totalbeli>=1500000)
		$bonus="kaos";
	else if($totalbeli>=1000000)
		$bonus="payung";
	else
		$bonus="";
		printf("Total Pembelian = %s <br>", $totalbeli);
		printf("Potongan = %s <br>", $pot);
		printf("Bonus = %s <br>", $bonus);
		printf("Pembayaran = %s <br>", $totalbeli-$pot);
	?>
	</body>
</html>