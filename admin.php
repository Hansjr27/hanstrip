<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    </style>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light py-4 bg-black">
	<div class="container-fluid">
		<a class="navbar-brand" href="https://library.livecanvas.com/sections/">
			<img class="img-fluid" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="48px" height="48px">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="nav_lc">
			<div class="ms-lg-auto"><a class="btn btn-outline-primary me-2" href="logikalogout.php">Logout</a><a class="btn btn-primary" href="tambah_jadwal.php">Tambah</a></div>
		</div>
	</div>
</nav>

    <!-- tabel admin coy -->
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th class="text-center fw-bold text-light bg-dark">ID</th>
                    <th class="fw-bold text-light bg-dark">Email</th>
                    <th class="fw-bold text-light bg-dark">Username</th>
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
                        echo "<td class='text-center text-light bg-dark'><a href='delete_user.php?id=" . $row['id'] . "' class='btn btn-danger mx-2'>Hapus</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>