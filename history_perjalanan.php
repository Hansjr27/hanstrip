<?php
session_start();
include "koneksi.php";

// Periksa apakah user_id telah diatur di sesi
if ($_SESSION["login"] !== true) {
  echo "<script>window.location='index.php'</script>";
  exit;
}

// Fetch user data
$query = "SELECT * FROM user WHERE id = '$_SESSION[id]'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]);

  // Update user data
  $query = "UPDATE user SET username = '$username', email = '$email', password = '$password' WHERE id = '$_SESSION[id]'";
  mysqli_query($con, $query);

  // Redirect to profil.php
  header("Location: profil.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil <?= $row['username']; ?></title>
    <link rel="shortcut icon" href="assets/img/favicon-hanstrip.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
      .bg-satu {
        background-color: #31363F;
      }
      .bg-dua {
        background-color: #222831;
      }
      .text-satu {
        color: #76ABAE;
      }
      .bg-input {
        background-color: #6A5E5E;
      }
      .deskripsi-pendek {
        display: block;
        }

        .deskripsi-lengkap {
            display: none;
        }

    </style>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-satu text-gray-100 w-64 flex-shrink-0">
            <div class="p-4">
                <h1 class="text-2xl font-semibold text-satu">
                    <i class="ri-apps-2-line"></i>
                    Hanstrip
                </h1>
            </div>
            <nav>
                <ul class="p-2">
                    <li><a href="setelahLogin.php" class="block py-2"><i class="ri-home-4-line"></i> Beranda</a></li>
                    <li><a href="profil.php" class="block py-2"><i class="ri-user-line"></i> Profil</a></li>
                    <li><a href="history_perjalanan.php" class="block py-2 text-satu"><i class="ri-history-line"></i> History perjalanan</a></li>
                    <li><a href="logikalogout.php" class="block py-2"><i class="ri-logout-circle-r-line"></i> Keluar</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="bg-dua flex-1 min-h-screen">
            <header class="bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-lg font-semibold text-white">History Perjalanan | <?= $row['username']; ?></h1>
                </div>
            </header>

            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-dua shadow-lg p-4 rounded-lg">
                <div class="riwayat-cuy">
      <!-- 1 -->
      <?php
      try {
        $perjalanan = "SELECT * FROM perjalanan WHERE user_upload = '$row[username]'";
        $result = mysqli_query($con, $perjalanan);
        if (isset($_POST["cari"])) {
          $keyword = $_POST["keyword"];
          $query = "SELECT * FROM perjalanan WHERE tempat LIKE '%$keyword%' OR mulai_pergi LIKE '%$keyword%' OR waktu_pergi LIKE '%$keyword%'";
          $result = mysqli_query($con, $query);
          
        } else {
          $query = "SELECT * FROM perjalanan WHERE user_upload = '$row[username]'";
          $result = mysqli_query($con, $query);
        }
  
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="card max-w-xs rounded overflow-hidden shadow-lg bg-gray-800 mb-5 ">
              <img class="w-full" src="assets/<?php echo $data['foto']; ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="font-bold text-white text-xl mb-2"><?php echo $data['tempat']; ?></div>
                <p class="text-gray-200 text-base">
                    <span class="deskripsi-lengkap"><?php echo $data['deskripsi']; ?></span>
                    <span class="deskripsi-pendek"><?php echo substr($data['deskripsi'], 0, 100); ?>...</span>
                    <button onclick="toggleDescription(this)" class="text-blue-500 hover:text-blue-700 focus:outline-none">
                        Lihat Selengkapnya
                    </button>
                </p>
              </div>
              <div class="card-identitas">
              <div class="px-6 pt-4 pb-2">
                <div class="user-card inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
                <i class="ri-user-fill"></i> <?php echo $data['user_upload']; ?>
                </div>
                <div class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                  <?php echo $data['waktu_pergi']; ?> - <?php echo $data['mulai_pergi']; ?>
                </div>
                <div class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 gap-x-2">
                  <a href="edit_perjalanan.php?id=<?php echo $data['id']; ?>" class="text-yellow-500"><i class="ri-edit-2-line"></i></a>
                  <a href="delete_perjalanan.php" class="text-red-500"><i class="ri-delete-bin-line"></i></a>
                </div>
              </div>
              </div>
            </div>
      <?php
          $no++;
        }
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
      ?>

    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
    function toggleDescription(button) {
        let description = button.parentNode.querySelector('.deskripsi-lengkap');
        let shortDescription = button.parentNode.querySelector('.deskripsi-pendek');

        if (description.style.display === "none") {
            description.style.display = "block";
            shortDescription.style.display = "none";
            button.textContent = "Sembunyikan";
        } else {
            description.style.display = "none";
            shortDescription.style.display = "block";
            button.textContent = "Lihat Selengkapnya";
        }
    }
</script>

</body>

</html>
