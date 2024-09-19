<!--//Nama File 				: delete_artikel.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 14 November 2022-->

<?php
include "koneksi.php";

$id 		= $_GET['id'];
$perintah	= "DELETE FROM tb_artikel WHERE id =\"$id\"";
$hasil1		= mysqli_query ($conn,$perintah);

if ($hasil1) {
echo "Artikel berhasil dihapus<br>";
echo "<a href=\"tampil_artikel.php\">Back</a>";
} else {
echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL.";
}
?>
