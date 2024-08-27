<?php
// Cek jika form telah disubmit
$result = "";
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    // Validasi input
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "Silakan masukkan angka yang valid.";
    } else {
        // Lakukan perhitungan sesuai operator
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Pembagian dengan nol tidak diperbolehkan.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Operator tidak valid.";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Mini</title>
    <style>
        body {
            display: grid;
            font-family: "Poppins", sans-serif;
            place-items: center;
            background: linear-gradient(315deg, #ffffff, #d7e1ec);
            background-image: url(umi.jpg);
            background-size: 100%;
            background-color: #D5ED9F;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .calculator-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }
        .calculator-container input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        .calculator-container button {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .calculator-container button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
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
<div class="nav">
        <a href="home.php">Halaman Utama</a>
        <a href="contact.php">Kontak</a>
        <a href="profile.php">Profile</a>
        <form action="logout.php" method="post" style="display:inline;">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>
    <div class="calculator-container">
        <h2>Kalkulator Mini</h2>
        <form action="" method="post">
            <input type="text" name="num1" placeholder="Angka 1" required>
            <select name="operator" required>
                <option value="">Pilih Operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" placeholder="Angka 2" required>
            <button type="submit" name="submit">Hitung</button>
        </form>
        <div class="result">
            <?php
            // Tampilkan hasil jika ada
            if (!empty($result)) {
                echo "Hasil: " . $result;
            }
            ?>
        </div>
    </div>
</body>
</html>
           
