<!--//Nama File 				: tugas1.php
	//Nama Programmer 			: Sandi Tamalia Herman -->
<html>
	<body>
		<form action="" method="post">
			Nama		: <input type="text" name="nama"><br>
			Jurusan		: <input type="text" name="jurusan"><br>
			Nilai Tugas : <input type="text" name="niltgs"><br>
			Nilai UTS	: <input type="text" name="niluts"><br>
			Nilai UAS	: <input type="text" name="niluas"><br>
				<input type="submit" value="Hitung">
		</form>
	</body>
</html>
<?php
	error_reporting(0);
	$nama 		= $_POST['nama']; // $_GET
	$jurusan	= $_POST['jurusan']; // $_REQUEST (bisa untuk Get dan Post)
	$niltgs 	= $_POST['niltgs'];
	$niluts 	= $_POST['niluts'];
	$niluas 	= $_POST['niluas'];
	$hasil		= $niltgs+$niluts+$niluas;
	$rata		= $hasil/3;
	
	echo "Nama 			: $nama<br>";
	echo "Jurusan		: $jurusan<br>";
	echo "Nilai Tugas 	: $niltgs<br>";
	echo "Nilai UTS		: $niluts<br>";
	echo "Nilai UAS		: $niluas<br>";
	echo "Rata-Rata 	: $rata<br>";
?>