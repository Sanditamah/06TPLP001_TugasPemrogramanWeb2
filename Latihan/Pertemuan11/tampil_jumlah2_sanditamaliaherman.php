<!--//Nama File 				: tampil_jumlah2_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php 
$servername1 = "localhost"; 
$username1 = "root"; 
$password1 = ""; 
// Create connection 
$conn1 = new mysqli($servername1, $username1, $password1); 
if(mysqli_close($conn1)){ 
    echo "koneksi berhasil ditutup"; 
} 
?>