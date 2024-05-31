<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan semua input terisi
    if (empty($_POST['tempat']) || empty($_POST['deskripsi']) || empty($_POST['tanggal_upload']) || empty($_POST['waktu_pergi']) || empty($_POST['user_upload']) || empty($_FILES['foto']['name'])) {
        // Jika ada input yang kosong, tampilkan pesan kesalahan
        echo "<script>
            alert('Semua field harus diisi.');
            window.location.href='setelahLogin.php';
            </script>";
    } else {

        $tempat = $_POST['tempat'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal_upload = $_POST['tanggal_upload'];
        $waktu_pergi = $_POST['waktu_pergi'];
        $user_upload = $_POST['user_upload'];

        $foto = $_FILES['foto'];
        $foto_name = $foto['name'];
        $foto_tmp = $foto['tmp_name'];

        move_uploaded_file($foto_tmp, "assets/$foto_name");

        $sql = "INSERT INTO perjalanan (foto, tempat, deskripsi, tanggal_upload, waktu_pergi, user_upload) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        // Mengikat parameter
        $stmt->bind_param("ssssss", $foto_name, $tempat, $deskripsi, $tanggal_upload, $waktu_pergi, $user_upload);
        $stmt->execute();

        header("Location: setelahLogin.php");
        exit();

    }
}
?>
