<?php
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
$admin = "SELECT * FROM admin WHERE email ='$email' AND password ='$password'";

$result = $con->query($user);
$result_admin = $con->query($admin);

if ($result->num_rows == 1) {
    $_SESSION['email'] = $email;
    header("Location: setelahLogin.php");
    exit();
}
else if ($result_admin->num_rows == 1) {
    $_SESSION['email'] = $email;
    header("Location: admin.php");
    exit();
}
else {
    echo"<script>
    alert('Username atau password salah!');
    window.location.href='index.php';
    </script>";
    exit();
}
?>