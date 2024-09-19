<!--//Nama File 				: tampil_jumlah_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php 
$koneksi = mysqli_connect("localhost","root","","db_latihan2"); 
$hasil1 = mysqli_query($koneksi,"select * from tbl_mhs"); 
$hit1 = mysqli_num_rows($hasil1); 
echo "jumlah record $hit1"; 
?> 