<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
?>
        <script type="text/javascript">
            alert('Anda Berhasil Mendaftarkan Akun Anda');
            document.location.href = 'index.php';
        </script>
<?php
    }
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
    <h1>Halaman Registrasi</h1>
    <hr><br><br>
    <form method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" autocomplete="off" placeholder="Masukan Username Anda" required>
        <br><br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Masukan Password Anda" required>
        <br><br>
        <label for="password2">Konfirmasi Password :</label>
        <input type="password" name="password2" id="password2" autocomplete="off" placeholder="Konfirmasi Password Anda" required>
        <br><br>
        <button type="submit" name="submit">Registrasi</button>
    </form><br><br>
    <h3>
        <a href="login.php">Sudah Mempunyai Akun? Login Di Sini</a>
    </h3>
</body>

</html>