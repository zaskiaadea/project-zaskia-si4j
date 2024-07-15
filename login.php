<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator Widyatama Medika</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/png" href="./assets/img/logoklinik.png">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 300px;
            text-align: center;
        }
        .login-container h2 {
            color: #6495ED;
            margin-bottom: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .login-container .input-group {
            margin-bottom: 15px;
            position: relative;
        }
        .login-container .input-group input {
            width: 70%;
            padding: 10px 15px 10px 50px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container .input-group i {
            position: absolute;
            left: 32px;
            top: 10px;
            color: #6495ED;
        }
        .login-container button {
            background-color: #6495ED;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 50px;
            width: 289px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #87CEFA;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <img src="../klinik/assets/img/logoklinik.png" alt="" width="110px" height="110px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 4px; margin-bottom: 20px;">
      <form action="proses_login.php" method="POST">
        <div class="input-group">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit"><b>Login</b></button>
        </form>
    </div>
</body>
</html>
