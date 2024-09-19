<?php
include 'koneksi_uas_SandiTamaliaH.php';

if (isset($_POST['submit'])) {
    $karakter = ucwords($_POST['karakter']);

    $insert = mysqli_query($conn, "INSERT INTO karakter VALUES (null,'" . $karakter . "') ");
    if ($insert) {
        echo '<script>alert("Tambah data berhasil")</script>';
        echo '<script>window.location="karakter_uas_SandiTamaliaH.php"</script>';
    } else {
        echo 'gagal', mysqli_error($conn);
    }
}

if (isset($_POST['submitpend'])) {
    $pendidikan = ucwords($_POST['pendidikan']);
    $tahun      = ucwords($_POST['tahun']);

    $insert = mysqli_query($conn, "INSERT INTO pendidikan VALUES (null,
                                                                    '" . $pendidikan . "',
                                                                    '" . $tahun . "'
                                                                    ) ");
    if ($insert) {
        echo '<script>alert("Tambah data berhasil")</script>';
        echo '<script>window.location="pendidikan_uas_SandiTamaliaH.php"</script>';
    } else {
        echo 'gagal', mysqli_error($conn);
    }
}

if (isset($_POST['submitsk'])) {
    $skill = ucwords($_POST['skill']);

    $insert = mysqli_query($conn, "INSERT INTO skill VALUES (null,
                                                                    '" . $skill . "'
                                                                    ) ");
    if ($insert) {
        echo '<script>alert("Tambah data berhasil")</script>';
        echo '<script>window.location="skill_uas_SandiTamaliaH.php"</script>';
    } else {
        echo 'gagal', mysqli_error($conn);
    }
}
