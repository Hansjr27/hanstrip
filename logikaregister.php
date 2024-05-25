<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Ambil data dari formulir
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan pengecekan kesalahan dalam inputan
if (empty($email) || empty($username) || empty($password)) {
    echo "<script>
    alert('Semua field harus diisi');
    window.location.href='register.php';
    </script>";
    exit;
}

// Periksa apakah email sudah ada di database
$check_query = "SELECT * FROM user WHERE email = '$email'";
$check_result = mysqli_query($con, $check_query);
$num_rows_email = mysqli_num_rows($check_result);

// Periksa apakah username sudah ada di database
$check_query_username = "SELECT * FROM user WHERE username = '$username'";
$check_result_username = mysqli_query($con, $check_query_username);
$num_rows_username = mysqli_num_rows($check_result_username);

if ($num_rows_email > 0) {
    echo "<script>
    alert('Email sudah terdaftar');
    window.location.href='register.php';
    </script>";
    exit;
}
else if ($num_rows_username > 0) {
    echo "<script>
    alert('username sudah terdaftar');
    window.location.href='register.php';
    </script>";
    exit;
}

// Insert data ke database
$query = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";
$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>
    window.location.href='setelahLogin.php';
    </script>";
}
else {
    echo "<script>
    alert('Gagal menambahkan data ke database');
    window.location.href='register.php';
    </script>";
}

?>

