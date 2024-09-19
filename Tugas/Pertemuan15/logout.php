<!--//Nama File 				: logout.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->
<?php
	session_start();
	session_destroy();
	header("location:login.php?pesan=ulang");
?>