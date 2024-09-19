<!--//Nama File 				: tampil_jumlah_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 7 November 2022-->

<?php 
$conn = mysqli_connect("localhost","root","","db_latihan2"); 
$hasil1 = mysqli_query($conn,"select * from tbl_matkul"); 
$hit1 = mysqli_num_rows($hasil1); 
echo "jumlah record $hit1"; 
?> 