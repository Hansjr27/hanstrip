<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Ambil data dari formulir
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con, "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')");
$user = "SELECT * FROM user";

if ($query !== $user) {
    echo "<script>
    window.location.href='setelahLogin.php';
    </script>";
}
else {
    "<script>
    alert('gagal coy silahkan coba lagi');
    window.location.href='register.php';
    </script>";
}

?>
