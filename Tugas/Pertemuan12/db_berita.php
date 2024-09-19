<!--//Nama File 				: db_berita.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
<?php 
$servername1 = "localhost"; 
$username1 = "root"; 
$password1 = ""; 
// Membuat perintah koneksi 
$conn = new mysqli($servername1, $username1, $password1); 
// Check connection 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
// Membuat basis data 
$sql = "CREATE DATABASE db_berita"; 
if ($conn->query($sql) === TRUE) { 
  echo "Database berhasil dibuat"; 
} else { 
  echo "gagal membuat database: " . $conn->error; 
} 
$conn1->close(); 
?> 