<?php
// login.php
session_start();

// Username dan password yang valid
$valid_username = "dapoy";
$valid_password = "dapdap23";

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Verifikasi username dan password
if ($username === $valid_username && $password === $valid_password) {
    // Simpan status login di session
    $_SESSION['loggedin'] = true;
    header("Location: home.php");
    exit();
} else {
    // Jika login gagal, kembali ke halaman login dengan pesan kesalahan
    header("Location: index.php?error=1");
    exit();
}
?>
