<?php
$db = 'hanstrip';
$konek = new mysqli ('localhost', 'root', '', $db);

if ($konek->connect_error) {
    die("Koneksi Error: " .
$konek->connect_error);
}
?>