<?php

session_start();

include "koneksi.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $query);


if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login'] = true;
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['level'] = $row['level'];

    if ($row['level'] == 1) {
      header("Location: setelahLogin.php");
    } elseif ($row['level'] == 2) {
      header("Location: admin.php");
    }
    exit;
} else {
    echo '<script>alert("Email atau password salah!");window.location.href="login.php";</script>';
}

$con->close();