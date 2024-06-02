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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?= $row['username']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--=================== Remixicons ====================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }
        
        .ri-delete-bin-line {
            color: red;
            font-size: 1.3rem;
        }
        .ri-edit-line {
            color: yellow;
            font-size: 1.3rem;
            margin-right: 1rem;
        }

        a {
            text-decoration: none;
        }
        h1 {
            color: #76ABAE;
        }
        .keterangan {
            position: absolute;
            bottom: 0;
            left: 1rem;
        }
    </style>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light py-4">
	<div class="container-fluid">
		<a class="navbar-brand" href="https://library.livecanvas.com/sections/">
			<h1>Hanstrip</h1>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="nav_lc">
			<div class="ms-lg-auto"><a class="btn btn-outline-primary me-2" href="logikalogout.php">Logout</a></div>
		</div>
	</div>
</nav>

    <!-- tabel admin coy -->
    <p class="keterangan text-light">Keterangan: level 1 adalah user dan level 2 adalah admin</p>
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th class="text-center fw-bold text-light bg-dark">ID</th>
                    <th class="fw-bold text-light bg-dark">Email</th>
                    <th class="fw-bold text-light bg-dark">Username</th>
                    <th class="fw-bold text-light bg-dark">Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = "SELECT * FROM user";
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='text-center text-light bg-dark'>" . $row['id'] . "</td>";
                        echo "<td class='text-light bg-dark'>" . $row['email'] . "</td>";
                        echo "<td class='text-light bg-dark'>" . $row['username'] . "</td>";
                        echo "<td class='text-light bg-dark'>" . $row['level'] . "</td>";
                        echo "<td class='text-center text-light bg-dark'><a href='edit_user.php?id=" . $row['id'] . "'><i class='ri-edit-line'></i></a><a href='delete_user.php?id=" . $row['id'] . "'><i class='ri-delete-bin-line'></i></a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>



