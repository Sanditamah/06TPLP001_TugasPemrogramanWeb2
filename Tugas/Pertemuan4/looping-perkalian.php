<!DOCTYPE html>

<html>
	<head>
	  <title>Looping Perkalian</title>
	</head>

	<body>

		<h2> Nama	: Sandi Tamalia Herman</h2>
		<h2> NIM	: 191011450357</h2>
		<h2> Kelas	: 06TPLP001</h2>

	<?php
	echo " *Tabel Perkalian* <br> ================ <br>";
		for ($a = 12; $a <= 12; $a++)
		{
			for ($b = 15; $b <= 46; $b++)
				if ( $b % 2 == 1 )
			 {
				$angka = $a * $b;
				echo $a. " * ".$b." = ".$angka."</br>";
			 }
			echo "</br>";
		}
	?>
	</body>
</html>