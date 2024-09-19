<!--//Nama File 				: koneksi.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
<?php 
$servername1 = "localhost"; 
$username1 = "root"; 
$password1 = ""; 

 
// Create connection 
$conn = new mysqli($servername1, $username1, $password1); 
// Check connection 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
echo "Koneksi Berhasil"; 
?> 