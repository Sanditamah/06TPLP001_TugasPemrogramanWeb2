<!--//Nama File 				: form_tblKategori.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022 -->
<?php
include "tbl_kategori.php";
?>
<h1>Form Tabel Kategori</h1>
<form method=post action="">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="18%">ID Kategori</td>
<td width="2%">:</td>
<td width="80%"><input type="text" name="idKategori" size="30" class="masukan"></td>
</tr>
<tr>
	<td>Nama Kategori</td>
	<td>:</td>
	<td>
	<select name=namaKategori>
	<option name=namaKategori>-
	<option name=namaKategori>Sosial
	<option name=namaKategori>Budaya
	<option name=namaKategori>Teknologi
	</td>
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
	$namaKategori = $_POST['namaKategori'];

	$sql = mysqli_query($conn,"INSERT INTO tbl_kategori VALUES (null, '".$namaKategori."') ");
	if($sql){
		echo "<h3 align=center>Proses Penambahan Record Berita Berhasil !</h3>";
		echo "<a href=\"tampil_tblBerita.php\">List</a>";
	}else{
			echo "<h2 align=center>Proses Penambahan Record Berita Tidak Berhasil</h2>";
		}
}
?>
</form>