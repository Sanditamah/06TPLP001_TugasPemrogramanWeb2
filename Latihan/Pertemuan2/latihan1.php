<!--//Nama File 				: latihan1.php
	//Nama Programmer 			: Sandi Tamalia Herman -->
<?php
$A = 123 ; // variable global
function Test() {
$A = "Test"; // variable local
echo "variabel A berisi = $A \n<br>";
}
Test();
echo "A diluar fungsi berisi= $A \n";
?>