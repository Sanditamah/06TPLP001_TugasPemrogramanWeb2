<!--//Nama File 				: form_tblBerita.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
<?php
include "tbl_berita.php";
?>
<h1>Form Tabel Berita</h1>
<form method=post action="">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="18%">ID Berita</td>
<td width="2%">:</td>
<td width="80%"><input type="text" name="idBerita" size="30" class="masukan"></td>
</tr>
<tr>
<td>ID Kategori</td>
<td>:</td>
<td><input type="text" name="idKategori" size="30" class="masukan"></td>
</tr>
<tr>
<td>Judul Berita</td>
<td>:</td>
<td><input type="text" name="judulBerita" size="30" class="masukan"></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>:</td>
<td><textarea name="isiBerita" rows="6" cols="30"></textarea></td>
</tr>
<tr>
<td>Penulis</td>
<td>:</td>
<td><input type="text" name="penulis" size="30" class="masukan"></td>
</tr>
<tr>
<td>Tanggal Publish</td>
<td>:</td>
<td><input type="text" name="tglPublish" size="30" class="masukan"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Add" class="tombol">
<input type="reset" name="batal" value="Reset" class="tombol"></td>
</tr>
</table>
<?php
	if(isset($_POST['submit'])){

	$idBerita= $_POST['idBerita'];
	$idKategori= $_POST['idKategori'];
	$judulBerita = $_POST['judulBerita'];
	$isiBerita = $_POST['isiBerita'];
	$penulis = $_POST['penulis'];
	$tglPublish = $_POST['tglPublish'];
	$sql = mysqli_query($conn, "INSERT INTO tbl_berita VALUES (null, 
								'".$idKategori."', 
								'".$judulBerita."', 
								'".$isiBerita."', 
								'".$penulis."', 
								'".$tglPublish."') ");
	if($sql){
	echo "<h3 align=center>Proses Penambahan Record Berita Berhasil !</h3>";
	echo "<A href=\"tampil_tblBerita.php\">List</A>";
	}else{
	echo "<h2 align=center>Proses Penambahan Record Berita Tidak Berhasil</h2>";
	}
}
?>
</form>