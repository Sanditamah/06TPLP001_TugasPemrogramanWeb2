<!--//Nama File 				: profil_uas_SandiTamaliaH.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 05 Desember 2022
	//Tanggal Update Ngoding	: 05 Desember 2022 -->

<?php
session_start();
include 'koneksi_uas_SandiTamaliaH.php';
if (!isset($_SESSION['status_login'])) {
    header("Location: login_uas_SandiTamaliaH.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="section-mb-10">
        <div class="container">
            <h3>Data Profil</h3>
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr align="center">
                            <th width="60px">No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $profil = mysqli_query($conn, "SELECT * FROM profil ORDER BY id");
                        while ($row = mysqli_fetch_array($profil)) {
                        ?>
                            <tr align="center">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['nim'] ?></td>
                                <td><?php echo $row['kelas'] ?></td>
                                <td><?php echo $row['foto'] ?></td>
                                <td>
                                    <a href="edit_profil_uas_SandiTamaliaH.php?id=<?php echo $row['id'] ?>">
                                        <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Asikin 2022</small></div>
    </div>
</body>

</html>