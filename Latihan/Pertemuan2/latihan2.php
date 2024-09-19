<!--//Nama File 				: latihan2.php
	//Nama Programmer 			: Sandi Tamalia Herman -->
<?php
$C = 123 ; // variable global
function Test() {
global $C ; // variable local
echo "C pada fungsi berisi = $C \n<br>";
}
Test();
echo "C di luar fungsi berisi = $C \n";
?>