<!--//Nama File 				: 06TPLP001_uas_sanditamaliaherman3.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 19 Desember 2022-->

<div class="box">
	<h2>TAMBAH DATA SISWA<h2>
	<form action="" method="POST">
		<input type="text" name="nama" placeholder = "NAMA SISWA" class="input-control" required>
		<input type="date" name="tgl" placeholder = "TANGGAL LAHIR" class="input-control" required>
		<input type="text" name="tmpt" placeholder = "TEMPAT LAHIR" class="input-control" required>
		<input type="text" name="jk" placeholder = "JENIS KELAMIN" class="input-control" required>
		<input type="text" name="alamat" placeholder = "ALAMAT" class="input-control" required>
		<input type="submit" value="Tambah" name="submit" class="btn">
	</form>
    <?php
		include '06TPLP001_uas_sanditamaliaherman1.php';
        if(isset($_POST['submit'])){
            $nama 		= ucwords($_POST['nama']);
			$tgl 		= $_POST['tgl'];
			$tmpt 		= ucwords($_POST['tmpt']);
			$jk 		= ucwords($_POST['jk']);
			$alamat 	= ucwords($_POST['alamat']);

            $insert = mysqli_query( $conn, "INSERT INTO siswa_sanditamaliaherman_uas VALUES (null,
                                                        '".$nama."',
														'".$tgl."',
														'".$tmpt."',
														'".$jk."',
														'".$alamat."') ");
            if($insert){
                echo '<script>alert("Tambah data berhasil")</script>';
                echo '<script>window.location="06TPLP001_uas_sanditamaliaherman2.php"</script>';
            }else{
                echo 'gagal', mysqli_error($conn);
            }
        }
    ?>
</div>