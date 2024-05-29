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
          <form id="profile-form">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" readonly>
              </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" readonly>
            </div>
            <div class="form-group">
              <label for="username">password baru</label>
              <input type="text" class="form-control" id="username" name="username" readonly>
            </div>
            <div class="form-group">
              <label for="username">konfirmasi password</label>
              <input type="text" class="form-control" id="username" name="username" readonly>
            </div>
            <div class="form-group text-center">
              <button type="button" class="btn btn-primary" id="edit-profile-btn">Edit Profil</button>
              <button type="button" class="btn btn-danger" id="delete-profile-btn">Hapus Profil</button>
              <a href="logikalogout.php"><button type="button" class="btn btn-warning" id="logout-btn">Logout</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form edit profil disini -->
        <form>
          <div class="form-group">
            <label for="editName">Nama Pengguna</label>
            <input type="text" class="form-control" id="editName">
          </div>
          <div class="form-group">
            <label for="editEmail">Email</label>
            <input type="email" class="form-control" id="editEmail">
          </div>
          <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Hapus Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus profil Anda? Tindakan ini tidak dapat dibatalkan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger">Hapus Profil</button>
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
