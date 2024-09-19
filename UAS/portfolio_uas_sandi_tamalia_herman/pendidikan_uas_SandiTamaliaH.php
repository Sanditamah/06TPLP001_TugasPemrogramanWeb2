<!--//Nama File 				: pendidikan_uas_SandiTamaliaH.php
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
    <title>Pendidikan</title>
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
            <h3>Data Pendidikan</h3>
            <div class="box">
                <button type="button" class="btn btn-sm btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#tambah_pendidikan">
                    <i class="fas fa-plus fa-sm"></i> Tambah Pendidikan
                </button>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr align="center">
                            <th width="60px">No</th>
                            <th>Pendidikan</th>
                            <th>Tahun</th>
                            <th width="150px" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $pendidikan = mysqli_query($conn, "SELECT * FROM pendidikan ORDER BY id");
                        while ($row = mysqli_fetch_array($pendidikan)) {
                        ?>
                            <tr align="center">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['pendidikan'] ?></td>
                                <td><?php echo $row['tahun'] ?></td>
                                <td>
                                    <a href="edit_pendidikan_uas_SandiTamaliaH.php?id=<?php echo $row['id'] ?>">
                                        <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>
                                    </a> &nbsp;
                                    <a href="hapus_uas_SandiTamaliaH.php?idp=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin hapus ?')">
                                        <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah_pendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pendidikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="tambah_uas_SandiTamaliaH.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submitpend">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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