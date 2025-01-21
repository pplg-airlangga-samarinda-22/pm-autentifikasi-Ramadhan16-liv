<?php

session_start();
require "../koneksi.php";
    if (empty($_SESSION['level'])) {
        header("location:login.php");
    }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pelaporan Pengaduan</title>
</head>

<body>
    <h1>Selamat Datang di Sistem Pengaduan Masyarakat</h1>
    <nav>
        <a href="index.php">Dashboard</a>
        <a href="../pengaduan/pengaduan.php">pengaduan</a>
        <a href="../masyarakat/masyarakat.php">Masyarakat</a>
        <a href="../petugas/petugas.php">petugas</a>
        <a href="../laporan.php">laporan</a>
        <a href="logout.php">Logout</a>

    </nav>
</body>

</html>