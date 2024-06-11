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
                    <li><a href="profil.php" class="block py-2 text-satu"><i class="ri-user-fill"></i> Profil</a></li>
                    <li><a href="history_perjalanan.php" class="block py-2"><i class="ri-history-line"></i> History perjalanan</a></li>
                    <li><a href="logikalogout.php" class="block py-2"><i class="ri-logout-circle-r-line"></i> Keluar</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="bg-dua flex-1 min-h-screen">
            <header class="bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-lg font-semibold text-white">Edit Profil | <?= $row['username']; ?></h1>
                </div>
            </header>

            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-dua shadow-lg p-4 rounded-lg">
                    <form action="" method="POST">
                        <div class="mb-4">
                            <label for="username" class="text-white block mb-2 font-medium">Username</label>
                            <input type="text" class="bg-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" id="username" name="username" value="<?= $row['username']; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="text-white block mb-2 font-medium">Email</label>
                            <input type="email" class="bg-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" id="email" name="email" value="<?= $row['email']; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="text-white block mb-2 font-medium">Ubah Password</label>
                            <div class="relative">
                                <input type="password" class="bg-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" id="password" name="password">
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">Edit Profil</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
    </div>
</body>

</html>
