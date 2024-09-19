<!--//Nama File 				: tbl_berita.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->
	
<?php 
$conn = mysqli_connect("localhost","root","","db_berita");  
//membuat tabel 
$sql = "CREATE TABLE tbl_berita
( 
idBerita int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(idBerita), 
idKategori int,
judulBerita varchar(50), 
isiBerita varchar(300), 
penulis varchar(25), 
tglPublish varchar(10)
)"; 
mysqli_query($conn,$sql); 
?> 