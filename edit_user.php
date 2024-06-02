<?php
// Masukkan file koneksi.php
include "koneksi.php";

// Periksa apakah parameter ID pengguna ada dalam URL
if(isset($_GET['id'])) {
    $user_id = $_GET['id']; // Pindahkan inisialisasi user_id ke sini

    // Query untuk mendapatkan data pengguna berdasarkan ID
    $query = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Tangani pengiriman formulir edit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari formulir
            $email = $_POST['email'];
            $username = $_POST['username'];
            $level = $_POST['level'];

            // Query untuk memperbarui data pengguna
            $update_query = "UPDATE user SET email='$email', username='$username', level='$level' WHERE id='$user_id'";
            $update_result = mysqli_query($con, $update_query);

            if ($update_result) {
                // Redirect pengguna ke halaman lain setelah perbaruan berhasil
                header("Location: admin.php");
                exit;
            } else {
                echo "Gagal memperbarui data pengguna: " . mysqli_error($con);
            }
        }
    } else {
        // Jika pengguna tidak ditemukan, tampilkan pesan error
        echo "User not found.";
    }
} else {
    // Jika parameter ID tidak ada dalam URL, tampilkan pesan error
    echo "Invalid request.";
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
        <h2 class="text-light mb-3">Edit akun user</h2>
        <form action="edit_user.php?id=<?php echo $user_id; ?>" method="post">
            <div class="form-group">
                <label for="nama">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?php echo $row['username']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Level</label>
                <input type="number" class="form-control" id="level" name="level" placeholder="Masukkan level" value="<?php echo $row['level']; ?>" required>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="admin.php" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
