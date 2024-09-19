<!--//Nama File 				: dashboard.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	
	<body>
		<h2>Dashboard</h2>
		<br/>
		<!– cek pesan notifikasi –>
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
		<br/>
		<h3> Halaman ini tampil karena anda berhasil login</h3>
	</body>
</html>