<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($con, $query)) {
        header("Location: admin.php"); // redirect back to the admin page
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "No ID provided.";
}
?>