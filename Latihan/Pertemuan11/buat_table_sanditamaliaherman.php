<!--//Nama File 				: buat_table_sanditamaliaherman.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 1 November 2022-->

<?php 
$koneksi = mysqli_connect("localhost","root","","db_latihan11");  
//membuat tabel 
$sql = "CREATE TABLE tbl_mhs     
( 
mhsID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(mhsID), 
FirstName varchar(15), 
LastName varchar(15), 
Age int 
)"; 
mysqli_query($koneksi,$sql); 
?> 