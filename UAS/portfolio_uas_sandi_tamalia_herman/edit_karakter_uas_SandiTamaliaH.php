<!--//Nama File 				: edit_karakter_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<?php
session_start();
include 'koneksi_uas_SandiTamaliaH.php';
if (!isset($_SESSION['status_login'])) {
    header("Location: login_uas_SandiTamaliaH.php");
}

$karakter = mysqli_query($conn, " SELECT * FROM karakter WHERE id = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($karakter) == 0) {
    echo '<script>window.location="edit_karakter_uas_SandiTamaliaH.php"</script>';
}
$k = mysqli_fetch_object($karakter);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Edit Karakter</title>
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

<body>

    <!-- header -->
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

    <!-- content -->
    <br>
    <br>
    <br>
    <br>
    <div class="section">
        <div class="container_style">
            <div class="box">
                <h2>EDIT KARAKTER</h2>
                <form action="" method="POST">
                    <input type="text" name="karakter" class="input-control" placeholder="Karakter" value="<?php echo $k->karakter ?>" required>
                    <input type="submit" name="submit" value="Edit" class="btn btn-sm btn-primary">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    // data inputan dari form
                    $karakter       = $_POST['karakter'];

                    // query update data produk
                    $update = mysqli_query($conn, " UPDATE karakter SET 
												    karakter        = '" . $karakter . "'
												    WHERE id       = '" . $k->id . "' ");
                    if ($update) {
                        echo '<script>alert("Ubah data berhasil")</script>';
                        echo '<script>window.location="karakter_uas_SandiTamaliaH.php"</script>';
                    } else {
                        echo 'gagal ' . mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Asikin 2022</small></div>
        </div>
    </footer>
</body>

</html>