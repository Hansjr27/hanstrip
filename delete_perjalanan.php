<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM perjalanan WHERE id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
    $foto = $data['foto'];
    $query = "DELETE FROM perjalanan WHERE id = $id";
    if (mysqli_query($con, $query)) {
        unlink("assets/$foto");
        header("Location: profil.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "No ID provided.";
}
?>
