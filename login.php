<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

body {
  background-image: url(grunge-black-concrete-textured-background.jpg);
  background-size: cover;
}

.container {
  width: 450px;
  height: 450px;
  background: transparent;
  backdrop-filter: blur(8px);
  border: 3px solid #000;
  border-radius: 20px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

h3 {
  margin: 40px 0 65px 0;
  font-size: 22px;
  color: white;
}

form {
  position: absolute;
  left: 50%;
  top: 45%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
}

input {
  width: 290px;
  height: 30px;
  margin: 20px 0 0 0;
  border-radius: 40px;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  -ms-border-radius: 40px;
  -o-border-radius: 40px;
  padding: 0 30px;
  font-size: 18px;
  color: black;
  border: 2px solid rgb(0, 0, 0, 0.65);
  outline: none;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}

input:hover {
  width: 250px;
}

select {
  width: 270px;
  height: 30px;
  margin-top: 20px;
  padding: 0 30px;
  font-size: 18px;
  color: black;
  border: none;
  border-radius: 40px;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  -ms-border-radius: 40px;
  -o-border-radius: 40px;
  outline: none;
}

input[type="submit"] {
  background-color: #050508;
  width: 190px;
  height: 30px;
  color: white;
  font-size: 20px;
  border: none;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}

input [type="submit"]:active {
  transform: scale(0.9);
  -webkit-transform: scale(0.9);
  -moz-transform: scale(0.9);
  -ms-transform: scale(0.9);
  -o-transform: scale(0.9);
}

h5 {
  color: rgb(170, 168, 168);
  margin-top: 30px;
  font-size: 18px;
}

h5 span {
  color: white;
  font-size: 18px;
}
a {
  color: #fff;
}

    </style>
</head>

<body>

<?php
    include "koneksi.php";
    ?>
    <a href="index.php">back to tampilan utama</a>
    <div class="Login">
</div>
<div class="container">

<h3>Login</h3>
    
    <form action="logikalogin.php" method="POST">
        <input type="text" id="username" name="username" placeholder="username" >
        <input type="password" id="password" name="password" placeholder="password" >

        <input type="submit" name="Log in">
    </form>
</div>
</body>
</html>