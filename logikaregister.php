<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan pengecekan apakah username sudah digunakan sebelumnya
$check_query = "SELECT * FROM user WHERE username = ?";
$stmt = $con->prepare($check_query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "";
    echo"<script>
    alert('Username sudah digunakan. Silakan gunakan username lain.');
    window.location.href='register.php';
    </script>";
    exit();
}

// Jika username tersedia, lakukan penyimpanan data ke database
$insert_query = "INSERT INTO user (username, password) VALUES (?, ?)";
$stmt = $con->prepare($insert_query);
$stmt->bind_param("ss", $username, $password); // "ss" untuk dua string (username, password)

if ($stmt->execute()) {
    header("Location: setelahLogin.php");
    exit();
} else {
    echo"<script>
    alert('Registrasi gagal. Silakan coba lagi');
    window.location.href='register.php';
    </script>";
    exit();
}

$stmt->close();
$con->close();
?>
