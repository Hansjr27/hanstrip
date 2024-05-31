<?php
session_start();
include "koneksi.php";

// Periksa apakah user_id telah diatur di sesi

    if ($_SESSION["login"] !== true) {
      echo "<script>window.location='index.php'</script>";
      exit;
    }

    $query = "SELECT * FROM user WHERE id ='$_SESSION[id]'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
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
  </style>
  <!--=================== Remixicons ====================-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="body">

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Nama Pengguna</h5>
          <a href="setelahLogin.php"><i class="ri-close-fill"></i></a>
          <form id="profile-form" action="" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>" readonly>
              </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?= $row['username']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="username">password baru</label>
              <input type="text" class="form-control" id="username" name="password" readonly>
            </div>
            <div class="form-group">
              <label for="username">konfirmasi password</label>
              <input type="text" class="form-control" id="username" name="" readonly>
            </div>
            <div class="form-group text-center">
              <button type="button" class="btn btn-primary" id="edit-profile-btn">Edit Profil</button>
              <a href="logikalogout.php"><button type="button" class="btn btn-warning" id="logout-btn">Logout</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function logout() {
    // Logika logout disini
    alert("Anda telah logout");
  }
</script>

</body>
</html>
