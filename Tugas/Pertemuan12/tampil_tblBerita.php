<?php
include "tbl_berita.php";
$perintah  = "SELECT * FROM tbl_berita ORDER BY tglPublish DESC";
$hasil = mysqli_query($conn,$perintah);

echo("
<h2>List Record Berita</h2>
<br><ul>
");
while ($row = mysqli_fetch_array($hasil))
{
echo("
<li>$row[judulBerita] &nbsp; $row[isiBerita] &nbsp; 
	$row[penulis] &nbsp; $row[tglPublish] &nbsp;<a href=\"edit_berita.php?tglPublish=$row[0]\">Edit</a>
&nbsp;<a href=\"delete.php?tglPublish=$row[0]\">Hapus</a></LI><br>");
}
echo("</table>");
echo "<br><a href=\"form_tblBerita.php\">Tambah</a>";
?>