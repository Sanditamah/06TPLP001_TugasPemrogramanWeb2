<!--//Nama File 				: session3.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->
<?php
/****************************************************
Bagian ini adalah halaman logout, session yang ada akan dihapus *****************************************************/
	session_start();
	if (isset($_SESSION['login'])) {
		unset ($_SESSION);
		session_destroy();
	//
		echo "<h1>Anda sudah berhasil LOGOUT</h1>";
		echo "<h2>Klik <a href='session1.php'>di sini</a>untuk LOGIN kembali</h2>";
		echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'>session2.php</a> lagi</h2>";
	}
?>