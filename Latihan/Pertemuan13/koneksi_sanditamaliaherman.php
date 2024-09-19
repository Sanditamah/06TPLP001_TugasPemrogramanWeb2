<!--//Nama File 				: koneksi_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 7 November 2022-->
	
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password); 
// Check connection 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
echo "Koneksi Berhasil"; 
?> 