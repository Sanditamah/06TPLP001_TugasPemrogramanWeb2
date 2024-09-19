<!--//Nama File 				: login_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<!DOCTYPE HTML>
<html>

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="view report" content="width-device-width, initial-scale-=1">
    <link rel="stylesheet" href="css/style_uas_SandiTamaliaH.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/micro.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="masthead bg-primary text-black text-center">
    <div class="container d-flex align-items-center flex-column">
        <div class="box-login">
            <h3 class="text-uppercase mb-3">Login</h3>
            <form action="" method="POST">
                <input type="text" name="user" placeholder="Username" class="input-control" required>
                <input type="password" name="pass" placeholder="Password" class="input-control" required>
                <input type="submit" value="Login" name="submit" class="btn btn-success">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                session_start();
                include 'koneksi_uas_SandiTamaliaH.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM admin WHERE 
                                    username = '" . $user . "' AND password = '" . MD5($pass) . "' ");
                if (mysqli_num_rows($cek) > 0) {
                    $d =  mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->id;
                    echo '<script>alert("Selamat Login Berhasil")</script>';
                    header("Location:dashboard_admin_uas_SandiTamaliaH.php");
                } else {
                    echo '<script>alert("Username atau Password Anda Salah!")</script>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>