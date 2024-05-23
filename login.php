<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.login-form {
    max-width: 300px;
    margin: auto;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:active {
    background-color: #3e8e41;
}

.password-toggle-btn {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}
  </style>
</head>
<body>

<div class="login-container">
    <form action="logikalogin.php" method="POST" class="login-form">
        <input type="email" id="email" name="email" placeholder="Email" required>
        <div style="position: relative;">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <span class="password-toggle-btn" onclick="togglePasswordVisibility()">👁️</span>
        </div>
        <input type="submit" value="Log in">
    </form>
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
