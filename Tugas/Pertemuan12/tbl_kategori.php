<!--//Nama File 				: tbl_kategori.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
	
<?php 
$conn = mysqli_connect("localhost","root","","db_berita");  
//membuat tabel 
$sql = "CREATE TABLE tbl_kategori  
( 
idKategori int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(idKategori), 
namaKategori varchar(25)
)"; 
mysqli_query($conn,$sql); 
?> 