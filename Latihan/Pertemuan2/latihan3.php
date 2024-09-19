<!--//Nama File 				: latihan3.php
	//Nama Programmer 			: Sandi Tamalia Herman -->
	
<html>
<head><title>Contoh Static Variabel</title></head>
<body><h1>Variabel Static</h1>
<?php
 Function dicoba()
 {
 static $a=0; // dengan static
 echo 'Nilai a : ';
 echo $a;
 echo '<br>';
 $a++;
 }
dicoba();
dicoba();
dicoba();
dicoba();
?>
</body>
</html>