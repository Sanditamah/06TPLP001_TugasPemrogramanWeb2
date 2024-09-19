<!--//Nama File 				: cek_login.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->
<?php
	session_start();
	include 'koneksi.php';

	$username=$_POST['username'];
	$password=$_POST['password'];
	$data = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username = '$username' and password = '$password' ");
	$cek=mysqli_num_rows($data);

	if($cek>0){
		$_SESSION['username']=$username;
		$_SESSION['status']="login";
		header("location:dashboard.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
?>