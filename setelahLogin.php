<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hanstrip</title>
  <!--=================== Remixicons ====================-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

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
    margin-left: 3.5rem;
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

.contact-btn {
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
    transition: all 0.3 ease;
}

.contact-btn:hover {
    color: #76ABAE;
    background: #000;
    outline: 1.5px solid #76ABAE;
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
}
#riwayat h2 {
  color: #fff;
  margin-left: 5rem;
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

.edit-hapus {
  display: flex;
  justify-content: end;
  gap: 0.5rem;
}


.footer {
  width: 100%;
  margin-top: 3rem;
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
            <a class="contact-btn" href="logikalogout.php">Log out</a>
        </ul>
        </div>
      </nav>
      <!-- home -->
      <section id="home">
        <div class="home-left">
          <h2>Welcome to Hanstrip</h2>
          <p>Catatkan perjalanan liburan anda di hanstrip</p>
          <button type="button" class="btn btn-primary" id="btnBukaModal" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Get Started
         </button>
        </div>
        <div class="home-right">
          <img src="assets/img/Traveling-rafiki.png" alt="">
        </div>
    </section>

    <section id="riwayat">
      <div class="riwayat">
      <h2>Riwayat perjalanan</h2>
    <div class="search-form">
      <div class="pencarian">
        <i class="ri-search-line"></i>
        <input type="search" id="search-box" placeholder="search here...">
      </div>
    </div>
    <div class="riwayat-cuy">
      <!-- 1 -->
      <div class="card bg-dark mt-l5" style="width:250px">
        <img class="card-img-top" src="assets/img/bali.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title text-light">Bali</h4>
          <p class="card-text text-light">perferendis illum totam voluptates reprehenderit labore repellat asperiores a veniam. Quas ipsum ipsa incidunt earum suscipit nobis!</p>
          <span><i class="ri-user-fill">Fulan</i></span>
          <div class="edit-hapus">
            <a href="#"><i class="ri-edit-line"></i></a>
            <a href="#"><i class='ri-delete-bin-line'></i></a>
          </div>
        </div>
      </div>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btnTutupModal"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

     
  
    
<section class="footer bg-dark text-light">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3">
				<div class="lc-block mb-4">
					<img class="img-fluid" alt="logo" src="https://cdn.livecanvas.com/media/svg/undraw-sample/undraw_connected_world_wuay.svg" style="max-height:10vh">
				</div>
				<div class="lc-block small">
					<div editable="rich">
						<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper matti pibus leo.</p>
					</div>
				</div>
				<!-- /lc-block -->
				<div class="lc-block py-2">
					<a class="text-decoration-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
							<path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
						</svg>
					</a>
					<a class="text-decoration-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
							<path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
						</svg>
					</a>
					<a class="text-decoration-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
							<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
						</svg>
					</a>
					<a class="text-decoration-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
							<path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
						</svg>
					</a>
					<a class="text-decoration-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
							<path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
						</svg>
					</a>
				</div>

			</div>
			<div class="col-lg-2 offset-lg-1">
				<div class="lc-block mb-4">
					<div editable="rich">
						<h4>Get Started</h4>
					</div>
				</div>
				<!-- /lc-block -->
				<div class="lc-block small">
					<div editable="rich">
						<p>Tutorial</p>
						<p>Resources
							<br>
						</p>
						<p>Docs</p>
						<p>Example</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
			<div class="col-lg-2 offset-lg-1">
				<div class="lc-block mb-4">
					<div editable="rich">
						<h4>About us</h4>
					</div>
				</div>
				<!-- /lc-block -->
				<div class="lc-block small">
					<div editable="rich">
						<p>Story</p>
						<p>Work with us</p>
						<p>Blog</p>
						<p>News</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
			<div class="col-lg-2 offset-lg-1">
				<div class="lc-block mb-4">
					<div editable="rich">
						<h4>Downloads</h4>
					</div>
				</div>
				<!-- /lc-block -->
				<div class="lc-block small">
					<div editable="rich">
						<p>Vertex 1.2</p>
						<p>Templates</p>
						<p>Sounds</p>
						<p>Gradients</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
		</div>
	</div>
	<div class="py-5 container">
		<div class="row">
			<div class="col-6 small">
				<div class="lc-block">
					<div editable="rich">
						<p>Copyright © Hanstrip 2024</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
			<div class="col-6 text-end small">
				<div class="lc-block">
					<div editable="rich">
						<p>
							<a class="text-decoration-none" href="#">License Details</a> -
							<a class="text-decoration-none" href="#">Terms &amp; Conditions</a>
						</p>
					</div>
				</div>
				<!-- /lc-block -->
			</div>
		</div>
	</div>
</section>
 
 
  

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


