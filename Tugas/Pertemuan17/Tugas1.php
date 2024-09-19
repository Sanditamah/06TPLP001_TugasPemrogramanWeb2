<!--//Nama File 				: Tugas1.php
	//Nama Programmer 			: Sandi Tamalia Herman -->
	
<?php
	
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "db_bukutamu");

    $koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	
	if ($konek)
	{
		echo "Koneksi Terhubung ";
	} else
		{
			echo "Koneksi database gagal";
		}
	echo '<br><br><br>';
	echo 'Ini gagal karena variable yang benar adalah <b>$koneksi</b> bukan <b>$konek</b><br>';
	echo 'Solusinya adalah dengan mengganti nama variablenya menjadi <b>$koneksi</b><br>';
?>