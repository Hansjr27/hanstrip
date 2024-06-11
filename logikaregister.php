<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']); // Diganti ke md5 agar password disimpan dalam bentuk md5
$level = 1; // Menentukan level default sebagai 1

$query_username = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
$query_email = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");

if (mysqli_num_rows($query_username) > 0) {
    echo '<script>alert("Username sudah ada");window.location.href="register.php";</script>';
}
else if (mysqli_num_rows($query_email) > 0) {
    echo '<script>alert("Email sudah ada");window.location.href="register.php";</script>';
}
else {
    $query = mysqli_query($con, "INSERT INTO user (email, username, password, level) VALUES ('$email', '$username', '$password', '$level')");
    if ($query) {
        header("Location: login.php");
    } else {
        echo "Gagal: " . mysqli_error($con);
    }
}

