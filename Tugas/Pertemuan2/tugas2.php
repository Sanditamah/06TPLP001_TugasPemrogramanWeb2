<!--//Nama File 				: tugas2.php
	//Nama Programmer 			: Sandi Tamalia Herman -->

<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pertemuan 2</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">SANDI TAMALIA HERMAN - 191011450104</h2>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Angka 1">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Angka 2">
			<input type="submit" name="hitung" value="Submit" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>