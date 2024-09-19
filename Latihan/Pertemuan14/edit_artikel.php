<!--//Nama File 				: edit_artikel.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 14 November 2022-->

<?php
	include "koneksi.php";


	// Query satu record artikel dari tabel sesuai nilai 
	$perintah	= mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id  = '".$_GET['id']."' ");
	if(mysqli_num_rows($perintah) == 0){
			echo '<script>window.location="tampil_artikel.php"</script>';
		}
		$row = mysqli_fetch_assoc($perintah);	
?>

<h1>Form Berita</h1>
<form method=post action="">
 <input type="hidden" name="id" value=" <?php echo "$row[id]" ?>" >
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 
<tr>
	 <td width="18%">Judul</td>
	 <td width="2%">:</td>
	 <td width="80%"><input type="text" name="judul" size="50" class="masukan" value="<?php echo "$row[judul]" ?>"></td>
</tr>
 
<tr>
	 <td>Penulis</td>
	 <td>:</td>
	 <td><input type="text" name="penulis" size="50" class="masukan" value="<?php echo "$row[penulis]" ?>"></td>
</tr>
 
<tr valign="top">
	 <td>Lead</td>
	 <td>:</td>
	 <td><textarea name="lead" rows="4" cols="50"><?php echo "$row[lead]" ?></textarea></td>
</tr>
 
<tr valign="top">
	 <td>Content</td>
	 <td>:</td>
	 <td><textarea name="content" rows="4" cols="50"><?php echo "$row[content]" ?></textarea></td>
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
		<input type="submit" name="submit" value="Update">
		<input type="submit" name="kembali" value="Cancel">
	 </td>
</tr>

 </table>
 
 <?php
	if(isset($_POST['submit'])){
		// data inputan dari form
		$judul	 	= $_POST['judul'];
		$penulis 	= $_POST['penulis'];
		$lead 		= $_POST['lead'];
        $content 	= $_POST['content'];
		
		$update = mysqli_query($conn, "UPDATE tb_artikel SET 
								judul 		= '".$judul."',
								penulis 	= '".$penulis."',
								lead 		= '".$lead."',
                                content 	= '".$content."'
								WHERE id	= '".$row['id']."' ");
								
		if($update){
			echo '<script>alert("Ubah data berhasil")</script>';
			echo '<script>window.location="edit_artikel.php"</script>';
		}else{
			echo 'gagal '.mysqli_error($conn);
		}
	}
?>
 
</form>
