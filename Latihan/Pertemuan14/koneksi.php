<!--//Nama File 				: koneksi.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 14 November 2022-->
<?php 
$servername = "localhost"; 
$username 	= "root"; 
$password 	= "";
$database 	= "db_artikel";

 
// Create connection 
$conn = new mysqli($servername, $username, $password, $database); 
?> 