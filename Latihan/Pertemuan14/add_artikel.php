<!--//Nama File 				: add_artikel.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 14 November 2022-->
<?php
include "koneksi.php";

$judul		= $_POST['title'];
$penulis 	= $_POST['author'];
$lead 		= $_POST['abstraksi'];
$content 	= $_POST['content'];
$time		= date("Y-m-d");

$query 		= "INSERT INTO tb_artikel (judul, penulis, lead, content, waktu)
				VALUES('$judul','$penulis','$lead','$content','$time')";
$result 	= mysqli_query($conn,$query);

if($result){
	echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
	echo "<A href=\"tampil_artikel.php\">List</A>";
}else{
		echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
	}
?>