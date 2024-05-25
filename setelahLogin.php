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

.home-left a button {
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

.home-left a button:hover {
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
            <a class="menu-item" href="catatan.php">Catatkan perjalanan</a>
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
          <a href="catatan.php"><button>Get Started</button></a>
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
        <img class="card-img-top" src="assets/img/user.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title text-light">John Doe</h4>
          <p class="card-text text-light">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
