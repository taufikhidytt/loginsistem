<?php
require 'function.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT * FROM karyawan WHERE username = '$username'");

    if (mysqli_num_rows($query) === 1) {
        $result = mysqli_fetch_assoc($query);

        if (password_verify($password, $result["password"])) {
            header("location:index.php");
            exit;
        }
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)) : ?>
        <script type="text/javascript">
            alert('Username Dan Password Tidak Terdaftar');
        </script>
    <?php endif; ?>
    <hr><br><br>
    <form method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" autocomplete="off" placeholder="Masukan Username Anda" required>
        <br><br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Masukan Password Anda" required>
        <br><br>
        <button type="submit" name="submit">Login</button>
    </form><br><br>
    <h3>
        <a href="registrasi.php">Belum Mempunyai Akun? Daftar Di Sini</a>
    </h3>
</body>

</html>