<?php
$conn = mysqli_connect("localhost", "root", "", "loginsistem");

function registrasi($regis)
{
    global $conn;
    $username = strtolower(stripslashes($regis["username"]));
    $password = mysqli_escape_string($conn, $regis["password"]);
    $password2 = mysqli_escape_string($conn, $regis["password2"]);

    $query = "SELECT username FROM karyawan WHERE username = '$username'";

    if (mysqli_fetch_assoc($query) > 0) {
?>
        <script type="text/javascript">
            alert('Username Sudah Terpakai, Silahkan Cari Username Lain');
            return false;
        </script>
    <?php
    }

    if ($password !== $password2) {
    ?>
        <script type="text/javascript">
            alert('Konfirmasi Password Anda Tidak Sesuai');
            return false;
        </script>
<?php
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO karyawan
                                VALUES
                        ('', '$username', '$password')
    ");
    return mysqli_affected_rows($conn);
}
