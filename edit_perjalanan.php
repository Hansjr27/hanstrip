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
            $tempat = $_POST['tempat'];
            $deskripsi = $_POST['deskripsi'];
            $waktu_pergi = $_POST['waktu_pergi'];
            $foto = $_FILES['foto']['name'];
            $tmp_foto = $_FILES['foto']['tmp_name'];

            // Cek apakah ada foto yang diunggah
            if ($foto) {
                $foto_dir = "";
                $foto_name = $foto_dir . basename($foto);
                move_uploaded_file($tmp_foto, $foto_name);
            }
            else {
                $foto_dir = "assets/img/perjalanan/";
                $foto_name = $foto_dir . basename($foto);
                move_uploaded_file($tmp_foto, $foto_name);
            }

            // Query untuk memperbarui data pengguna
            $update_query = "UPDATE perjalanan SET tempat='$tempat', deskripsi='$deskripsi', waktu_pergi='$waktu_pergi', foto='$foto_name' WHERE id='$user_id'";
            $update_result = mysqli_query($con, $update_query);

            if ($update_result) {
                // Redirect pengguna ke halaman lain setelah perbaruan berhasil
                header("Location: setelahLogin.php");
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
        <h2 class="text-light mb-3">Edit User</h2>
        <form action="edit_perjalanan.php?id=<?php echo $user_id; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan nama Tempat" value="<?php echo $row['tempat']; ?>">
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Deskripsi Perjalanan:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsikan perjalanan Anda"><?php echo $row['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal pergi:</label>
                <input type="date" class="form-control" id="lokasi" name="waktu_pergi" placeholder="Masukkan lokasi" value="<?php echo $row['waktu_pergi']; ?>">
            </div>
            <div class="form-group mt-lg5">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnTutupModal"
                    data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>

