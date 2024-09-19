<?php

//Nama : tugas2_SandiTamaliaHerman.php
//Nama : Sandi Tamalia Herman
//Tanggal Ngoding : 10/03/2022
//Tanggal Latihan Ngoding : 10/03/2022

// inisiasi variable yang digunakan
// nama mahasiswa
$nama1 = "Abdul";
$nama2 = "Sandi";
$nama3 = "Anton";
$nama4 = "Samsul";

// nilai uts
$niluts1 = 80;
$niluts2 = 80;
$niluts3 = 85;
$niluts4 = 90;

// nilai uas
$niluas1 = 85;
$niluas2 = 80;
$niluas3 = 90;
$niluas4 = 88;

// nilai rata-rata
$rata1 = ($niluas1 + $niluts1)/2;
$rata2 = ($niluas2 + $niluts2)/2;
$rata3 = ($niluas3 + $niluts3)/2;
$rata4 = ($niluas4 + $niluts4)/2;

// nilai tertinggi
$niltertinggi = max ($rata1, $rata2, $rata3, $rata4);
// nilai tertinggi
$nilterendah = min ($rata1, $rata2, $rata3, $rata4);
//nilai rata-rata kelas
$nilratakel = ($rata1 + $rata2 + $rata3 + $rata4)/4;
?>
<html>
<head>
<title>Data Nilai Mahasiswa</title>
</head>
<style type="text/css">
body {
font-size: 14pt;
}
table {
font-size: 25pt;
}
</style>
<body>
<center>
<font face="comic sans serif" size=5 color= "blue">Contoh Perhitungan
dengan PHP</font>
<table border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4" align="center" valign="middle">
<b>Data Mahasiswa Kampus Sandi Tamalia Herman Jaya</b>
</td>
</tr>
<tr>
<td><b>Nama Mahasiswa</b></td>
<td><b>Nilai UTS</b></td>
<td><b>Nilai UAS</b></td>
<td><b>Rata-Rata Nilai</b></td>
</tr>
<?php
// input data
?>
<tr>
<td align="left"><?php echo $nama1; ?></td>
<td align="right"><?php echo $niluas1; ?></td>
<td align="right"><?php echo $niluts1; ?></td>
<td align="right"><?php echo $rata1; ?></td>
</tr>
<tr>
<td align="left"><?php echo $nama2; ?></td>
<td align="right"><?php echo $niluas2; ?></td>
<td align="right"><?php echo $niluts2; ?></td>
<td align="right"><?php echo $rata2; ?></td>
</tr>
<tr>
<td align="left"><?php echo $nama3; ?></td>
<td align="right"><?php echo $niluas3; ?></td>
<td align="right"><?php echo $niluts3; ?></td>
<td align="right"><?php echo $rata3; ?></td>
</tr>
<tr>
<td align="left"><?php echo $nama4; ?></td>
<td align="right"><?php echo $niluas4; ?></td>
<td align="right"><?php echo $niluts4; ?></td>
<td align="right"><?php echo $rata4; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Nilai Tertinggi Kelas</td>
<td align="right"><?php echo $niltertinggi; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Nilai Terendah Kelas </td>
<td align="right"><?php echo $nilterendah; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Nilai Rata-Rata Kelas</td>
<td align="right"><?php echo $nilratakel; ?></td>
</tr>
</table>
</center>
</body>
</html>