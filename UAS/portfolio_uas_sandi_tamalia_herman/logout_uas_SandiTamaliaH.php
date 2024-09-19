<!--//Nama File 				: logout_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<?php

session_start();
session_destroy();

header("Location: index_uas_SandiTamaliaH.php");
