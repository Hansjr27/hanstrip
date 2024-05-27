<?php
// Masukkan file koneksi.php
include "koneksi.php";

// Periksa apakah parameter ID pengguna ada dalam URL
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Query untuk mendapatkan data pengguna berdasarkan ID
    $query = "SELECT * FROM perjalanan WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Tangani pengiriman formulir edit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari formulir
            $email = $_POST['email'];
            $username = $_POST['username'];

            // Query untuk memperbarui data pengguna
            $update_query = "UPDATE user SET email='$email', username='$username' WHERE id='$user_id'";
            $update_result = mysqli_query($con, $update_query);

            if ($update_result) {
                // Redirect pengguna ke halaman lain setelah perbaruan berhasil
                header("Location: admin.php");
                exit;
            } else {
                echo "Gagal memperbarui data pengguna.";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <h2 class="text-light mb-3">Edit User</h2>
        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label text-light">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-light">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
