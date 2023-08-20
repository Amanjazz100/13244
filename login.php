<?php
include("db.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="r.jpg" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 10px;
        }
        .login-input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        p{
            color: darkblue;
        }
    </style>
</head>
<body>
    <div class="login-container" name="sub">
        <h1>Login</h1>
        <form action=" " method="post">
            <input type="text" class="login-input" placeholder="email" name="email"required>
            <input type="password" class="login-input" placeholder="Password" name="password" required>
            <button type="submit" class="login-button" name="sub">Login</button>
        </form><br>
         <p>not have a account</p>  <a href="signup.php">create account</a>

    </div>
</body>
</html>
