<!--//Nama File 				: koneksi_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
	
<?php 
$servername1 = "localhost"; 
$username1 = "root"; 
$password1 = ""; 
 
// Create connection 
$conn1 = new mysqli($servername1, $username1, $password1); 
// Check connection 
if ($conn1->connect_error) { 
  die("Connection failed: " . $conn1->connect_error); 
} 
echo "Koneksi Berhasil"; 
?> 