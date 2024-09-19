<!--//Nama File 				: tampil_artikel.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 14 November 2022-->
<?php
include "koneksi.php";

$perintah	=	"SELECT * FROM tb_artikel ORDER BY id DESC";
$hasil		=	mysqli_query($conn,$perintah);
echo("
	<h2>List Artikel</h2>
	<br><ul>
");
while ($row = mysqli_fetch_array($hasil))
{
echo("
		<li>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;
			<a href=\"edit_artikel.php?id=$row[id]\">Edit</a>&nbsp;
			<a href=\"delete_artikel.php?id=$row[id]\">Hapus</a>
		</li><br>
");
}
echo("</table>");
echo "<br><a href=\"form_artikel.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
?>