<!--Nama File 		: uts_SandiTamaliaHerman2.php
	Nama 			: Sandi Tamalia Herman
	Tanggal Ngoding : 24/10/2022
	Tanggal UTS		: 24/10/2022-->
	
<html>
<head><title>UTS</title></head>
<body>
<?php
error_reporting(0);
$nomeja = $_POST['nomeja'];
$nama = $_POST['namakons'];
$makanan = $_POST['makan'];
$minuman = $_POST['minum'];
$cemilan = $_POST['cemilan'];
$jenismakanan = $makanan;
$jenisminuman = $minuman;
$jeniscemilan = $cemilan;
$pilihanmakanan;
$pilihanminuman;
$pilihancemilan;
$hargamakanan = 0;
$makananM1 = 20000;
$makananM2 = 15000;
$makananM3 = 10000;
$hargaminuman = 0;
$minumanM4 = 5000;
$minumanM5 = 7500;
$minumanM6 = 10000;
$hargacemilan = 0;
$cemilanC1 = 10000;
$cemilanC2 = 15000;
$cemilanC2 = 20000;
switch($jenismakanan){
    case $jenismakanan == 1:
        $pilihanmakanan = "Soto Ayam Sandi Tamalia Herman";
        $hargamakanan = $makananM1;
        break;
    case $jenismakanan == 2:
        $pilihanmakanan = "Mie Ayam Sandi Tamalia Herman";
        $hargamakanan =$makananM2;
        break;
    case $jenismakanan == 3:
        $pilihanmakanan = "Bakso Sapi Sandi Tamalia Herman";
        $hargamakanan =$makananM3;
        break;
        default:
}

switch($jenisminuman){
    case $jenisminuman == 1:
        $pilihanminuman = "Teh Manis Sandi Tamalia Herman";
        $hargaminuman = $minumanM4;
        break;
    case $jenisminuman == 2:
        $pilihanminuman = "ES Teh Sandi Tamalia Herman";
        $hargaminuman =$minumanM5;
        break;
    case $jenisminuman == 3:
        $pilihanminuman = "ES Jeruk Sandi Tamalia Herman";
        $hargaminuman =$minumanM6;
        break;
        default:
}
switch($jeniscemilan){
    case $jeniscemilan == 1:
        $pilihancemilan = "Kentang Rebus Sandi Tamalia Herman";
        $hargacemilan = $cemilanC1;
        break;
    case $jeniscemilan == 2:
        $pilihancemilan = "Kentang Goreng Sandi Tamalia Herman";
        $hargacemilan =$cemilanC2;
        break;
    case $jeniscemilan == 3:
        $pilihancemilan = "Sosis Bakar Sandi Tamalia Herman";
        $hargacemilan =$cemilanC3;
        break;
        default:
}
$totalbayar = $hargamakanan+$hargaminuman+$hargacemilan;
echo "<h2>Data Makanan yang di Order</h2>";
?>
<table border="0">
    <tr>
        <td colspan="7" ><?php echo "No Meja : $nomeja"; ?></td>
</tr>
<tr>
        <td colspan="7" ><?php echo "Nama Konsumen : $nama"; ?></td>
</tr>
<tr>
        <td>Makanan</td>
        <td>:</td>
        <td><?php echo $pilihanmakanan;?><br><?php echo $hargamakanan;?></td>
        <td></td>
</tr>
<tr>
        <td>Minuman</td>
        <td>:</td>
        <td><?php echo $pilihanminuman;?><br><?php echo $hargaminuman;?></td>
        <td></td>
</tr>
<tr>
        <td>Cemilan</td>
        <td>:</td>
        <td><?php echo $pilihancemilan;?><br><?php echo $hargacemilan;?></td>
        <td></td>
</tr>
<tr>
        <td>Total Bayar</td>
        <td>:</td>
        <td><?php echo $totalbayar; ?></td>
        <td></td>
</table>
<form action="uts_SandiTamaliaHerman1.php" method="post">
    <br>
<input type="submit" value="Kembali">
        </form>
        </body>
        </html>