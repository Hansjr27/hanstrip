<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Catatan Perjalanan</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }
    .body {
        background-color: #222831;
    }

    label, .abu{
        color: #aaaaaa;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="body">
<div class="container mt-5">
    <h2 class="mb-4 abu">Catatan Perjalanan</h2>
    <form>
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Perjalanan:</label>
        <input type="date" class="form-control" id="tanggal">
      </div>
      <div class="form-group">
        <label for="lokasi">Lokasi Perjalanan:</label>
        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan lokasi">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi Perjalanan:</label>
        <textarea class="form-control" id="deskripsi" rows="5" placeholder="Deskripsikan perjalanan Anda"></textarea>
      </div>
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto">
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
