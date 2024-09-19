<!--//Nama File 				: aksi_tambah_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php
error_reporting(0); 
$con = mysqli_connect("localhost","root","","db_latihan11"); 
if (!$con){ 
  die('Could not connect: ' . mysql_connect_error()); 
  } 
$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) 
		VALUES( '$_POST[firstname]','$_POST[lastname]','$_POST[age]' )"; 
if (!mysqli_query($con ,$sql)) 
  { 
  die('Error: ' . mysqli_error()); 
  } 
echo "1 record added"; 
 
mysqli_close($con) 
?> 