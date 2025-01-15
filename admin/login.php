<?php
require "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Menggunakan prepare statement untuk keamanan
    $sql = "SELECT * FROM petugas WHERE username=? AND password=?";
    $row = $koneksi->execute_query($sql, [$username, $password]);
    

    if (mysqli_num_rows($row) == 1) {
        $user = mysqli_fetch_assoc($row);
        session_start();
        $_SESSION['username'] = $username;
        if ($user['level'] === 'admin'){
            header("Location:index.php");
        } elseif ($user['level'] === 'petugas') {
            header("location:index.php");
        }
    } else {
        echo "<script>alert('Gagal Login!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ADMIN/PETUGAS</title>
</head>

<body>
    <form action="" method="post" class="form-login">
        <p>Silahkan Login</p>
        <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-item">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
        <a href="../login.php"> Login Siswa </a>     
    </form>
</body>

</html>