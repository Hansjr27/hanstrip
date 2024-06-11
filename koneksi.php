<?php
$db = 'hanstrip';
$con = new mysqli ('localhost', 'root', '', $db);

if ($con->connect_error) {
    die("Koneksi Error: " .
$con->connect_error);
}
?>

