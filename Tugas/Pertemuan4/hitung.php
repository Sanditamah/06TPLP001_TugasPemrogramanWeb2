
<html>
	<body>
		<?php
			$awal = $_POST['num1'];
			$akhir = $_POST['num2'];
			echo "Maka deret bilangan yang tampil : ";
			$i = $awal;
			do {
			echo " $i ";
			$i+=6;
			}while ($i <= $akhir);
			echo "<br>Jumlah bilangan 4 </br>";
			echo "Jumlah Nilai bilangan : ";
			$a = 9;
			$b = 15;
			$c = 21;
			$d = 27;
			$f = $a+$b+$c+$d;
			echo " 9+15+21+27 = ";
			echo $f;
		?>
	</body>
</html>	
	