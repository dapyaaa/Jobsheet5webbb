<?php
// home.php
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
    <title>Home</title>
    <style>
        body {
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
    </style>
</head>
<body>
    <h2>Selamat datang di halaman utama!</h2>
    <div class="nav">
        <a href="profile.php">Profil</a>
        <a href="contact.php">Kontak</a>
        <a href="kalkulator.php">Kalkulator</a>
        <form action="logout.php" method="post" style="display:inline;">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>
    <p>Ini adalah halaman utama sistem.</p>
</body>
</html>
