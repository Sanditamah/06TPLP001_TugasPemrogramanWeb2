<!--//Nama File 				: 06TPLP001_uas_sanditamaliaherman4.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 19 Desember 2022-->
	
<?php
	include '06TPLP001_uas_sanditamaliaherman1.php';
	$siswa = mysqli_query($conn,"SELECT * FROM siswa_sanditamaliaherman_uas WHERE nisn_sanditamaliaherman = '".$_GET['id']."'");
	if( mysqli_num_rows($siswa)==0 ){
        echo '<script>window.location="06TPLP001_uas_sanditamaliaherman2.php"</script>';
    }
	$row = mysqli_fetch_object($siswa);
?>	
<div class="box">
	<h2>EDIT DATA PEGAWAI</h2>
	<form action="" method="POST">
		<input type="text" name="nama" placeholder = "Nama" class="input-control" value ="<?= $row->namasiswa_sanditamaliaherman ?>" required>
		<input type="date" name="tgl" placeholder = "Tanggal Lahir" class="input-control" value ="<?= $row->tgllahir_sanditamaliaherman ?>" required>
		<input type="text" name="tmpt" placeholder = "Tempat lahir" class="input-control" value ="<?= $row->tempatlahir_sanditamaliaherman ?>" required>
		<input type="text" name="jk" placeholder = "Jenis Kelamin" class="input-control" value ="<?= $row->jeniskelamin_sanditamaliaherman ?>" required>
		<input type="text" name="alamat" placeholder = "Alamat" class="input-control" value ="<?= $row->alamat_sanditamaliaherman ?>" required>
		<input type="submit" value="Edit" name="submit" class="btn">
		<input type="submit" value="Cancel" name="cancel" class="btn">
	</form>
    <?php
        if(isset($_POST['submit'])){
			$nama 	= ucwords($_POST['nama']);
			$tgl  	= $_POST['tgl'];
			$tmpt 	= ucwords($_POST['tmpt']);
			$jk 	= ucwords($_POST['jk']);
			$alamat = ucwords($_POST['alamat']);

			$update = mysqli_query( $conn, "UPDATE siswa_sanditamaliaherman_uas SET 
											namasiswa_sanditamaliaherman 		= '".$nama."' ,
											tgllahir_sanditamaliaherman 		= '".$tgl."',
											tempatlahir_sanditamaliaherman 		= '".$tmpt."',
											jeniskelamin_sanditamaliaherman		= '".$jk."',
											tgllahir_sanditamaliaherman 		= '".$alamat."'
											WHERE nisn_sanditamaliaherman    = '".$row->nisn_sanditamaliaherman."' ");
			if($update){
				echo '<script>alert("Edit data berhasil")</script>';
				echo '<script>window.location="06TPLP001_uas_sanditamaliaherman2.php"</script>';
			}else{
				echo 'GAGAL ', mysqli_error($conn);
			}
		}
		
		if(isset($_POST['cancel'])){
		echo '<script>window.location="06TPLP001_uas_sanditamaliaherman2.php"</script>';
		}
    ?>
</div>