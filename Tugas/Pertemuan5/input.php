<?php

include "koneksi.php";

	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$komentar=$_POST["komentar"];

  $sql="INSERT INTO tbl_tamu (nama,email,komentar) VALUES
		('$nama','$email','$komentar')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo " Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>