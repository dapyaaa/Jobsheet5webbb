<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url(umi.jpg);
            background-size: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            border: 3px solid black;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        .login-container button {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        $cookie_name = "dapoy";
        $cookie_value = "dap";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 minute
        ?>
        
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
          echo "Cookie '" . $cookie_name . "' is set!<br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
        }
        
        if (isset($_GET['error']) && $_GET['error'] == '1'): ?>
            <p class="error">Username atau password salah. Silakan coba lagi.</p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
