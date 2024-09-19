<?php 
$conn1 = mysqli_connect("localhost","root","",”db_berita”); 
if (!$conn1) { 
die('Could not connect: ' . mysql_error()); } 
mysql_query($conn1,"UPDATE tbl_berita SET Age = '36' 
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysql_close($conn1);
?>