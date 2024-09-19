<!--//Nama File 				: dashboard_admin_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<?php
session_start();
include 'koneksi_uas_SandiTamaliaH.php';
if (!isset($_SESSION['status_login'])) {
    header("Location: login_uas_SandiTamaliaH.php");
}

$sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = 'admin' ");
$row = mysqli_fetch_array($sql);

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Dashboard Admin</title>
    <meta charset="utf-8">
    <meta name="view report" content="width-device-width, initial-scale-=1">
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

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <h1 class="navbar-brand">Asikin Uhuy</h1>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="dashboard_admin_uas_SandiTamaliaH.php">Dashboard</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="profil_uas_SandiTamaliaH.php">Profil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="karakter_uas_SandiTamaliaH.php">Karakter</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pendidikan_uas_SandiTamaliaH.php">Pendidikan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="skill_uas_SandiTamaliaH.php">Skill</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout_uas_SandiTamaliaH.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- content -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h3>Dashboard</h3>
            <h4>Selamat Datang <?php
                                echo $row['username']
                                ?> di Asikin Uhuy</h4>
        </div>
    </header>

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h4><?= date('d-F-Y') ?></h4>
        </div>
    </header>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Asikin 2022</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>