<!--//Nama File 				: tampil_data_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 7 November 2022-->

<?php 
 $conn	= mysqli_connect("localhost","root","","db_latihan2"); 
 $hasil	= mysqli_query($conn,"select * from tbl_matkul"); 
 While($data = mysqli_fetch_row($hasil)) 
 { 
   echo "$data[0] $data[1] $data[2]<br>"; 
 } 
?> 