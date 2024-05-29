<?php
include 'koneksi.php';

$tempat = $_POST['tempat'];
$deskripsi = $_POST['deskripsi'];
$tanggal_upload = $_POST['tanggal_upload'];
$waktu_pergi = $_POST['waktu_pergi'];

$foto = $_FILES['foto'];
$foto_name = $foto['name'];
$foto_tmp = $foto['tmp_name'];

move_uploaded_file($foto_tmp, "assets/img/perjalanan/$foto_name");

$sql = "INSERT INTO perjalanan (foto, tempat, deskripsi, tanggal_upload, waktu_pergi) VALUES (?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("sssss", $foto_name, $tempat, $deskripsi, $tanggal_upload, $waktu_pergi);
$stmt->execute();

header("Location: setelahLogin.php");
exit();


