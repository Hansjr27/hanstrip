<?php
// mulai sesion
session_start();

// Hancurkan semua data sesi
session_destroy();

// Redirect ke halaman index.php
header("location: index.php")
?>