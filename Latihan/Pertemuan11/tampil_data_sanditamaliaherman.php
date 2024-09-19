<!--//Nama File 				: tampil_data_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php 
 $conn	= mysqli_connect("localhost","root","","db_latihan11"); 
 $hasil	= mysqli_query($conn,"select * from tbl_mhs"); 
 While($data=mysqli_fetch_row($hasil)) 
 { 
   echo "$data[0] $data[1] $data[2]<br>"; 
 } 
?> 