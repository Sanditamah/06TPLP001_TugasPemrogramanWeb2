<!--//Nama File 				: tampil_data2_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
	
<?php 
 $con=mysqli_connect("localhost","root","", "db_latihan11"); 
 $hasil=mysqli_query($con, "select * from tbl_mhs"); 
 While($data=mysqli_fetch_array($hasil)) 
 { 
  echo "$data[FirstName] $data[LastName] $data[Age]<br>"; 
 } 
?> 