<?php
// profile.php
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
    <title>Profil</title>
    <style>
        body {
            display: grid;
            height: 80vh;
            display: center;
            font-family: "Poppins", sans-serif;
            place-items: center;
            background: linear-gradient(315deg, #ffffff, #d7e1ec);
            background-image: url(umi.jpg);
            background-size: 100%;
            background-color: #D5ED9F;      

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
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 350px;
            width: 100%;
        }

        .card-header {
            background-color: #007bff;
            padding: 20px;
            text-align: center;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #fff;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .name {
            font-size: 24px;
            margin: 10px 0;
            color: #333;
        }

        .title {
            font-size: 18px;
            margin: 5px 0;
            color: #777;
        }

        .description {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        .card-footer {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        .contact-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .contact-button:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <div class="nav">
        <a href="home.php">Halaman Utama</a>
        <a href="contact.php">Kontak</a>
        <a href="kalkulator.php">Kalkulator</a>
        <form action="logout.php" method="post" style="display:inline;">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>
    <div class="card">
        <div class="card-header">
            <img src="avatar.png" alt="Profile Picture" class="profile-img">
        </div>
        <div class="card-body">
            <h2 class="name">Alfian Davi Aghna</h2>
            <p class="title">Siswa SMK</p>
            <p class="description">
                just person want a peaceful and happy life
            </p>
        </div>
        <div class="card-footer">
            <a href="contact.php" class="contact-button">Contact</a>
        </div>
    </div>
</body>
</html>
