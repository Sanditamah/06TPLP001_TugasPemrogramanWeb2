<!--//Nama File 				: edit_berita.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
<?php
include "koneksi.php";
include "tbl_berita.php";
// Query satu record berita dari tabel sesuai nilai 
$perintah 	= mysqli_query($conn, "SELECT * FROM tbl_berita WHERE tglPublish ");
$row		= mysqli_fetch_array($perintah);
?>
<h1>Form Berita</h1>
<form name=berita method=post action=update.php>
<input type="hidden" name="ID" value="<?= $row['idBerita'] ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="18%">idKategori</td>
<td width="2%">:</td>
<td width="80%"><input type="text" name="title" size="50" class="masukan"
value="<?= $row['idKategori'] ?>"></td>
</tr>
<tr>
<td>Judul Berita</td>
<td>:</td>
<td><input type="text" name="judulBerita" size="50" class="masukan"
value="<? echo "$row[judulBerita]" ?>"></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>:</td>
<td><textarea name="isiBerita" rows="6" cols="50" class="masukan" value="<? echo "$row[isiBerita]" ?>"></textarea></td>
</tr>
<tr>
<td>Penulis</td>
<td>:</td>
<td><input type="text" name="penulis" size="50" class="masukan"
value="<? echo "$row[penulis]" ?>"></td>
</tr>
<tr>
<td>Tanggal Publish</td>
<td>:</td>
<td><input type="text" name="tglPublish" size="50" class="masukan"
value="<? echo "$row[tglPublish]" ?>"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="submit" name="update" value="Update" class="tombol">
<input type="reset" name="hapus" value="Cancel" class="tombol"></td>
</tr>
</table>
</form>