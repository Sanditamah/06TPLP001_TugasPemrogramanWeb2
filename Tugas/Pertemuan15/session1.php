<!--//Nama File 				: session1.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->

<?php
/****************************************************
Membuat
session
*****************************************************/
	session_start();
	if (isset ($_POST['Login'])) {
		$user1 = $_POST['user'];
		$pass1 = $_POST['pass'];
		//cek login
		if ($user1== "sandi" && $pass1 = "123") {
		//membuat session
		$_SESSION['login'] = $user1;
		//menuju ke halaman pemeriksaan session
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<h2>Klik <a href='session2.php'>di sini
		(session2.php)</a>
		untuk menuju ke halaman pemeriksaan session";
		}
	}
?>
<html>
	<head>
		<title>Login here...</title>
	</head>
	
	<body>
		<form action="" method="post">
			<h2>Login Here...</h2>
			Username : <input type="text" name="user"><br>
			Password : <input type="password" name="pass"><br>
			<input type="submit" name="Login" value="Log In">
		</form>
	</body>
</html>