<!--//Nama File 				: menyisipkan_data_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php 
$con = mysqli_connect("localhost","root","","db_latihan11"); 
if (!$con) 
  { 
  die('Could not connect: ' . mysqli_connect_error()); 
  } 
mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('Karina', 'Suwandi', '29')"); 
 
mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('Glenn', 'Gandari', '32')"); 
 
mysqli_close($con); 
?> 