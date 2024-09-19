<!--//Nama File 				: hapus_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<?php

include 'koneksi_uas_SandiTamaliaH.php';

if (isset($_GET['idk'])) {
    $delete = mysqli_query($conn, "DELETE FROM karakter WHERE id = '" . $_GET['idk'] . "' ");
    echo '<script>window.location="karakter_uas_SandiTamaliaH.php"</script>';
}

if (isset($_GET['idp'])) {
    $delete = mysqli_query($conn, "DELETE FROM pendidikan WHERE id = '" . $_GET['idp'] . "' ");
    echo '<script>window.location="pendidikan_uas_SandiTamaliaH.php"</script>';
}

if (isset($_GET['ids'])) {
    $delete = mysqli_query($conn, "DELETE FROM skill WHERE id = '" . $_GET['ids'] . "' ");
    echo '<script>window.location="skill_uas_SandiTamaliaH.php"</script>';
}
