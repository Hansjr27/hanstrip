<?php
// Masukkan file koneksi.php
include "koneksi.php";

$perjalanan_id = $_GET['id'];
// Periksa apakah parameter ID pengguna ada dalam URL
if(isset($_GET['id'])) {

    // Query untuk mendapatkan data pengguna berdasarkan ID
    $query = "SELECT * FROM perjalanan WHERE id = '$perjalanan_id'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Tangani pengiriman formulir edit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari formulir
            $tempat = $_POST['tempat'];
            $deskripsi = $_POST['deskripsi'];
            $mulai_pergi = $_POST['mulai_pergi'];
            $waktu_pergi = $_POST['waktu_pergi'];
            $foto_name = $_FILES['foto']['name'];
            $foto_tmp = $_FILES['foto']['tmp_name'];

            // Cek apakah ada foto yang diunggah
            if (!empty($foto_name)) {
                move_uploaded_file($foto_tmp, "assets/$foto_name");
            } else {
                echo "image belum di tambah";
            }

            // Query untuk memperbarui data pengguna
            $update_query = "UPDATE perjalanan SET tempat='$tempat', deskripsi='$deskripsi', mulai_pergi='$mulai_pergi', waktu_pergi='$waktu_pergi'";
            // Jika ada foto yang diunggah, tambahkan ke query
            if (!empty($foto_name)) {
                $update_query .= ", foto='$foto_name'";
            }
            $update_query .= " WHERE id='$perjalanan_id'";
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
    <title>Edit Perjalanan | <?php echo $row['tempat']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-gray-200">
  <div class="container mx-auto mt-5 px-4 mb-5">  <h2 class="text-lg font-bold text-white mb-3">Edit Perjalanan | <?php echo $row['tempat']; ?></h2>
    <form action="edit_perjalanan.php?id=<?php echo $perjalanan_id; ?>" method="post" enctype="multipart/form-data" class="space-y-4"> <div class="mb-3">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-400">Nama Tempat</label>
        <input type="text" class="form-control block w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-2" id="tempat" name="tempat" placeholder="Masukkan nama Tempat" value="<?php echo $row['tempat']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-400">Deskripsi Perjalanan:</label>
        <textarea class="form-control block w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-2" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsikan perjalanan Anda"><?php echo $row['deskripsi']; ?></textarea>
      </div>

      <div class="mb-3">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-400">Mulai Perjalanan:</label>
        <input type="date" class="form-control block w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-2" id="mulai_pergi" name="mulai_pergi" placeholder="Masukkan lokasi" value="<?php echo $row['mulai_pergi']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-400">Akhir Perjalanan:</label>
        <input type="date" class="form-control block w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-2" id="waktu_pergi" name="waktu_pergi" placeholder="Masukkan lokasi" value="<?php echo $row['waktu_pergi']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="foto" class="block mb-2 text-sm font-medium text-gray-400">Foto:</label>
        <input type="file" class="form-control block w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-gray-300 focus:outline-none focus:ring-blue-500 focus:ring-2" id="foto" name="foto">
      </div>

      <div class="flex items-center justify-between">
      <a href="setelahLogin.php"><button type="button" class="btn btn-outline-danger btn-sm" id="btnTutupModal"
                    data-bs-dismiss="modal">Batal</button></a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
        </div>
        </form>
    </div>
</body>
</html>
