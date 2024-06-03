<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="shortcut icon" href="assets/img/favicon-hanstrip.png" type="image/x-icon">
    <!--=================== Remixicons ====================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #222831;
        margin: 0;
        padding: 0;
        display: flex; 
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    a {
    text-decoration: none;
}
    .container {
        background-color: #31363F;
        display: flex;
        width: 50rem;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .formulir {
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    position: relative;
}
    h2 {
        color: #fff;
        text-align: center;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 20rem;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background-color: #6A5E5E;
        color: #fff;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #76ABAE;
        color: #fff;
        transition: background-color 0.3s;
        border: 1px solid #76ABAE;
    }
    input[type="submit"]:hover {
        background: #31363F;
        border: 1px solid #76ABAE;
    }

    .to-login-or-regis {
        font-size: 10px;
        color: #fff;
        text-decoration: none;
    }

    .to-login-or-regis a {
        color: #4352D9;
        text-decoration: underline;
    }

    .password-toggle-btn {
    position: absolute;
    top: 17.6rem;
    right: 1rem;
    cursor: pointer;
}

    .ri-eye-fill {
    color: #fff;
}

@media (max-width: 425px) {
    .container {
        width: 30rem;
        padding: 20px;
    }
    
    img {
        display: none;
    }
    .password-toggle-btn i {
        position: absolute;
        bottom: 2rem;
    }
    
}

@media (max-width: 769px) {
    
    .container {
        justify-content: center;
        width: 40rem; 
        align-items: center;
        gap: 2rem;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 18rem;
    }

    .ri-eye-fill {
        position: absolute;
        bottom: 2rem;
        right: 0.1rem;
    }
}
    </style>
</head>
<body>
    <div class="container">
    <div class="foto">
        <img src="assets/img/Travel-insurance-bro.png" alt="" width="95%">
    </div>

    <div class="formulir">
    <a href="index.php"><h2>Registrasi</h2></a>
    <form action="logikaregister.php" method="POST">
        <input type="email" name="email" placeholder="Email" autocomplete="off" required><br><br>
        <input type="text" name="username" placeholder="Username" autocomplete="off" required><br><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br><br>
        <span class="password-toggle-btn" onclick="togglePasswordVisibility()"><i class="ri-eye-fill"></i></span>
        <input type="submit" value="Daftar">
        <span  class="to-login-or-regis">Sudah punya akun? <a href="index.php">Login</a></span>
    </form>
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
