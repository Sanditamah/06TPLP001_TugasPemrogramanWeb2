<?php
	
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "db_bukutamu");

    $koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	
	if ($koneksi)
	{
		echo "Koneksi Terhubung ";
	} else
		{
			echo"Koneksi Gagal";
		}
?>