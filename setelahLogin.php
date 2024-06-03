<?php
session_start();
include "koneksi.php";

// Periksa apakah user_id telah diatur di sesi

    if ($_SESSION["login"] !== true) {
      echo "<script>window.location='index.php'</script>";
      exit;
    }

    

    $query = "SELECT * FROM user WHERE id ='$_SESSION[id]'";
    $results = mysqli_query($con, $query);
    $row = mysqli_fetch_array($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | <?= $row['username']; ?></title>
  <!--=================== Remixicons ====================-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

    body {
      background-color: #222831;
    }
    h1 {
      color: #76ABAE;
    }
    a {
      text-decoration: none;
    }

    .nav-wrapper {
    background-color: rgba(0, 0, 0, 0.1);
    padding: 0.1rem 0;
    position: sticky;
    top: 0;
    z-index: 30;
    backdrop-filter: blur(50px);
}

.nav-content {
    max-width: 1300px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    margin: 0 auto;
}

.nav-content h1 {
    /* width: 10rem;
    height: auto; */
    font-size: 2rem;
    margin-left: 3.5rem;
    font-weight: 500;
}

.nav-content ul {
    display: flex;
    align-items: center;
    margin-right: 3rem;
    gap: 0.5rem;
    list-style: none;
}

.nav-content li {
    margin: 0 1.5rem;
}

.menu-item {
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    color: #fff;
    position: relative;
    cursor: pointer;
}

.menu-item::before {
    content: "";
    width: 2rem;
    height: 0.2rem;
    background: linear-gradient(90deg, #76ABAE 0%, #87ABAE 100%);
    border-radius: 0.5rem;
    position: absolute;
    bottom: -0.6rem;
    opacity: 0;
    transform: translateX(-1.5rem);
    transition: all 0.3s ease;
}

.menu-item:hover::before {
    width: 100%;
    transform: translateX(0);
    opacity: 1;
}

.menu-btn {
    width: 2.5rem;
    height: 2.5rem;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 0.4rem;
    color: #fff;
    background: linear-gradient(90deg, #a993fe -0.13%, #7e61e7 99.87%);
    line-height: 0;
    cursor: pointer;
    transition: all 0.4s ease;
    display: none;
}

.menu-btn:hover {
    color: #a993fe;
    background: #000;
    border: 1px solid #a993fe;
}

#home {
  display: flex;
align-items: center;
position: relative;
margin-left: 3rem;
}

#home::before {
    content: " ";
    width: 20rem;
    height: 20rem;
    border-radius: 28.125rem;
    background-color: #76ABAE;
    position: absolute;
    z-index: -1;
    filter: blur(225px);
}


#home::before {
    top: -3rem;
    right: 0rem;
}

.home-left {
  flex: 1;
  margin-left: 2rem;
}

.home-left h2 {
  margin-top: 1.5rem;
  color: #fff;
  font-size: 3.7rem;
font-weight: 700;
Line-height: 4.5rem;
}

.home-left p {
  width: 80%;
font-size: 1rem;
font-weight: 400;
line-height: 2rem;
color: #b8bbc7;
margin-left: 0.5rem;
}

.home-left button {
  font-size: 0.9rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    background: linear-gradient(90deg, #76ABAE 0%, #87ABAE 100%);
    padding: 0.6rem 2rem;
    border: none;
    outline: 1.5px solid transparent;
    border-radius: 0.2rem;
    cursor: pointer;
    margin: 1rem 0 0 0.5rem;
    transition: all 0.3 ease;
}

.home-left button:hover {
  background: transparent;
  outline: 1px solid #76ABAE;
}

.home-right {
  flex: 1;
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-top: 3rem;
}

.home-right img {
  width: 80%;
}


#riwayat {
  width: 100%;
}
.riwayat-cuy {
  display: flex;
  flex-wrap: wrap;
  margin-top: 3em;
  margin-left: 5rem;
  margin-right: 3rem;
  gap: 4rem;
  justify-content: flex-start;
}
#riwayat h2 {
  color: #fff;
  font-size: 2rem;
  margin-left: 5rem;
  font-weight: 450;
}

.search-form {
  margin-top: 1rem;
  position: relative;
  width: 25rem;
  height: 2.5rem;
  display: flex;
  align-items: center;
  transform-origin: top;
  transition: 0.3s;
}

.pencarian {
  background-color: #fff;
  margin-left: 4.8rem;
  margin-top: 1rem;
  position: relative;
  width: 25rem;
  height: 2.5rem;
  display: flex;
  align-items: center;
  transform-origin: top;
  transition: 0.3s;
  border-radius: 1rem;
}

.ri-search-line {
  color:  #76ABAE;
  position: absolute;
  left: 1rem;
}

.search-form input {
  margin-left: 1.5rem;
  height: 100%;
  width: 100%;
  font-size: 1rem;
  color: #000;
  padding: 1rem;
  border: none;
  border-radius: 1rem;
  outline: none;
}

.search-form input:checked {
    border: none;
}

.ri-delete-bin-line {
  color: red;
  font-size: 1rem;
}

.ri-edit-line,
.ri-user-fill {
  color: #fff;
  font-size: 1rem;
}

.user-card .ri-user-fill {
  color: #000;
  font-size: 0.9rem;
}



.user {
  font-size: 1.5rem;
}

.user-upload i {
  font-size: 0.8rem;
}

.edit-hapus {
  display: flex;
  justify-content: space-between;
  gap: 0.5rem;
}

.tgl-upload {
  font-size: 0.8rem;
  color: grey;
}

.footer {
  margin-top: 3rem;
}

@media (max-width: 425px) {

.nav-content h1 {
    font-size: 1.8rem;
    font-weight: 500;
    margin-left: 2rem;
}

.nav-content ul li {
    display: none;
}

.nav-content li {
    margin: 0 1.5rem;
}
#home,
.home-left,
.home-left p,
.riwayat-cuy,
.pencarian {
  margin-left: 0rem;
  margin-right: 0rem;
}

.home-deskripsi {
  display: flex;
  justify-content: center;
}

#btnBukaModal {
  justify-content: center;
}

#home {
  flex-direction: column;
  text-align: center;
  justify-content: center;
}
.home-left {
  justify-content: center;
}
.home-right {
    display: flex;
    justify-content: center;
}
.riwayat-cuy {
  justify-content: center;
}
.pencarian {
  width: 80%;
}
.form-searching {
  display: flex;
  width: 100%;
  justify-content: center;
}
.copyright {
  margin-top: 0.8rem;
}
.btn-home {
  display: flex;
  justify-content: center;
}
}

  </style>
</head>
<body>
  <!-- navbar -->
<nav class="nav-wrapper">
        <div class="nav-content">
        <h1>Hanstrip</h1>
        <ul>
          <li>
            <a class="menu-item" href="#home">Home</a>
          </li>
          <li>
            <a class="menu-item" href="#riwayat">Riwayat perjalanan</a>
          </li>
          <li>
            <a class="menu-item" id="btnBukaModal" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Catatkan perjalanan</a>
          </li>
            
            <a href="profil.php"><i class="ri-user-fill user"></i></a>

        </ul>
        </div>
      </nav>
      <!-- home -->
      <section id="home">
        <div class="home-left">
          <h2>Welcome to Hanstrip</h2>
          <div class="home-deskripsi"><p>Catatkan perjalanan liburan anda di hanstrip</p></div>
          <div class="btn-home"><button type="button" class="btn btn-primary" id="btnBukaModal" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Get Started
         </button>
         </div>
        </div>
        <div class="home-right">
          <img src="assets/img/Traveling-rafiki.png" alt="">
        </div>
    </section>

    <section id="riwayat">
      <div class="riwayat">
      <h2>Riwayat perjalanan</h2>
      <form action="" method="post">
        <div class="search-form form-searching">
          <div class="pencarian">
            <i class="ri-search-line"></i>
            <input type="search" name="keyword" id="search-box" placeholder="search here..." autocomplete="off" onkeyup="search()">
            <button name="cari"></button>
          </div>
        </div>
      </form>
    <div id="search-results"></div>
    <div class="riwayat-cuy">
      <!-- 1 -->
      <?php
      try {
        $perjalanan = "SELECT * FROM perjalanan";
        $result = mysqli_query($con, $perjalanan);
        if (isset($_POST["cari"])) {
          $keyword = $_POST["keyword"];
          $query = "SELECT * FROM perjalanan WHERE tempat LIKE '%$keyword%' OR mulai_pergi LIKE '%$keyword%' OR waktu_pergi LIKE '%$keyword%'";
          $result = mysqli_query($con, $query);
          
        } else {
          $query = "SELECT * FROM perjalanan";
          $result = mysqli_query($con, $query);
        }
  
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="card max-w-xs rounded overflow-hidden shadow-lg bg-gray-800 mb-5 ">
              <img class="w-full" src="assets/<?php echo $data['foto']; ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="font-bold text-white text-xl mb-2"><?php echo $data['tempat']; ?></div>
                <p class="text-gray-200 text-base"><?php echo $data['deskripsi']; ?></p>
              </div>
              <div class="card-identitas">
              <div class="px-6 pt-4 pb-2">
                <div class="user-card inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
                <i class="ri-user-fill"></i> <?php echo $data['user_upload']; ?>
                </div>
                <div class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                  <?php echo $data['waktu_pergi']; ?> - <?php echo $data['mulai_pergi']; ?>
                </div>
              </div>
              <div class="px-6 pb-2">
                <a href="edit_perjalanan.php?id=<?php echo $data['id']; ?>" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                  <i class="ri-edit-line text-yellow-600"></i>
                </a>
                <a href="delete_perjalanan.php?id=<?php echo $data['id']; ?>" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                  <i class='ri-delete-bin-line'></i>
                </a>
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
    

<!-- pagination -->
<div class="flex flex-col items-center mb-4">
  <!-- Help text -->
  <span class="text-sm text-gray-700 dark:text-gray-400">
      Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
  </span>
  <div class="inline-flex mt-2 xs:mt-0">
    <!-- Buttons -->
    <button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
        </svg>
        Prev
    </button>
    <button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Next
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
    </button>
  </div>
</div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Catatkan Perjalanan</h5>
                    <button type="button" class="btn-close" id="btnTutupModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                  <form action="insert_perjalanan.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="tempat" class="form-label">Nama Tempat</label>
                  <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan nama Tempat">
                </div>
                                    
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi Perjalanan:</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsikan perjalanan Anda"></textarea>
                </div>
                
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Mulai Perjalanan</label>
                  <input type="date" class="form-control" name="mulai_pergi" id="tanggal" >
                </div>
                
                <div class="mb-3">
                  <label for="user_upload" class="form-label">Upload Sebagai: </label>
                  <input type="text" class="form-control" id="user_upload" name="user_upload" value="<?= $row['username']; ?>" placeholder="Masukkan nama Tempat">
                </div>
                
                <div class="mb-3">
                  <label for="waktu_pergi" class="form-label">Akhir Perjalanan:</label>
                  <input type="date" class="form-control" id="waktu_pergi" name="waktu_pergi" placeholder="Masukkan tanggal pergi">
                </div>
                
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto:</label>
                  <input type="file" class="form-control" id="foto" name="foto">
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" id="btnTutupModal" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </form>

                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap justify-between items-center">
      <div class="text-sm">
        <ul class="flex items-center ul-footer">
          <li class="mr-4"><a href="#home" class="hover:underline cursor-pointer">Home</a></li>
          <li class="mr-4"><a href="#riwayat" class="hover:underline cursor-pointer">Riwayat Perjalanan</a></li>
          <li class="mr-4"><a id="btnBukaModal" data-bs-toggle="modal"
              data-bs-target="#exampleModal" class="hover:underline cursor-pointer">Catatkan Perjalanan</a></li>
        </ul>
      </div>
      <div class="text-sm copyright">
        &copy; 2024 Hanstrip, Inc. All rights reserved.
      </div>
    </div>
  </div>
</footer>

 
 
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        // Fungsi untuk mengaktifkan tombol tutup modal
        function aktifkanTombolTutupModal() {
            document.getElementById("btnTutupModal").disabled = false;
        }

        // Fungsi untuk menghilangkan tombol tutup modal
        function hilangkanTombolTutupModal() {
            document.getElementById("btnTutupModal").disabled = true;
        }

        // Tombol buka modal akan mengaktifkan tombol tutup modal saat di klik
        document.getElementById("btnBukaModal").addEventListener("click", () => {
            aktifkanTombolTutupModal();
        });

        // Tombol tutup modal akan menghilangkan tombol tutup modal saat di klik
        document.getElementById("btnTutupModal").addEventListener("click", () => {
            hilangkanTombolTutupModal();
        });

        
    </script>
</body>
</html>


