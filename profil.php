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
  $password = $_POST["password"];

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
  <style>
    .body {
      background-color: #222831;
    }
    .ri-close-fill {
      color: #000;
      font-size: 2rem;
      position: absolute;
      top: 0;
      right: 1rem;
    }

    .password-toggle-btn {
      position: absolute;
    top: 23.9rem;
    right: 2rem;
    cursor: pointer;
    }
  </style>
  <!--=================== Remixicons ====================-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="body">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-center">Profil</h5>
            <a href="setelahLogin.php"><i class="ri-close-fill float-end text-secondary"></i></a>
            <img src="assets/img/user.png" alt="user" class="img-fluid mx-auto d-block mb-3" style="width: 100px; height: 100px; border-radius: 50%;">
            <form action="" method="POST">
              <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $row['username']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= $row['password']; ?>">
                <span class="password-toggle-btn" onclick="togglePasswordVisibility()"><i class="ri-eye-fill"></i></span>
              </div>
              <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mb-3">Edit Profil</button>
                <div>
                  <a href="logikalogout.php" class="btn btn-warning">Logout</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
function togglePasswordVisibility() {
     passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}
</script>
</body>

</html>
</html>

