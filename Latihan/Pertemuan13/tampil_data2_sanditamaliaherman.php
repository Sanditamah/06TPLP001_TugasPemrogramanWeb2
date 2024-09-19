<!--//Nama File 				: tampil_data2_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 7 November 2022-->
	
<?php 
 $conn=mysqli_connect("localhost","root","", "db_latihan2"); 
 $hasil=mysqli_query($conn, "select * from tbl_matkul"); 
 While($data=mysqli_fetch_array($hasil)) 
 { 
  echo "$data[kode_matkul] $data[nama_matkul] $data[sks]<br>"; 
 } 
?> 