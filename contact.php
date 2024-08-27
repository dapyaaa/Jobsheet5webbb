<?php
// contact.php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <style>
        body {
            display: grid;
            height: 100%;
            width: 100%;
            font-family: "Poppins", sans-serif;
            place-items: center;
            background: linear-gradient(315deg, #ffffff, #d7e1ec);
            background-image: url(umi.jpg);
            background-size: 100%;
            background-color: #D5ED9F;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .nav {
            margin-bottom: 20px;
        }
        .nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .logout-button {
            padding: 10px;
            background-color: #dc3545;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
        
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        *:focus,
        *:active {
        outline: none !important;
        -webkit-tap-highlight-color: transparent;
        }
        .instagram-logo {
            position: relative;
            width: 100px;
            height: 100px;
            background-color: #000;
            border-radius: 12px;
        }

        .logo-circle {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-radius: 50%;
        }

        .logo-camera {
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50px;
            height: 50px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 5px #000;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="home.php">Halaman Utama</a>
        <a href="profile.php">Profil</a>
        <a href="kalkulator.php">Kalkulator</a>
        <form action="logout.php" method="post" style="display:inline;">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>
    <h3>Instagram</h3>
    <a href="https://www.instagram.com/dapyaaa_/">
    <div class="instagram-logo">
        <div class="logo-circle"></div>
        <div class="logo-camera"></div>
    </div>
    </a>
</body>
</html>
