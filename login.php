<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'koneksi.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $db->real_escape_string($_POST['username']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = $db->query($sql);

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if ($password === $user['password']) {
                // Simpan data user ke session, termasuk role
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                // Redirect ke halaman backend
                header("Location: TampilanAdmin.php");
                exit();
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "User tidak ditemukan!";
        }
    } else {
        $error = "Isi semua kolom!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background-image:
    url('gambar-kelapa.png'),
    url('gambar-kelapa.png'),
    linear-gradient(to bottom right, #2E7D32, #1a4d24);
  background-repeat: no-repeat, no-repeat, no-repeat;
  background-position: left center, right center, center;
  background-size: 600px auto, 600px auto, cover;

            min-height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 370px;
            margin: 200px auto;
            padding: 40px 35px 30px 35px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(44, 62, 80, 0.18);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-logo {
            width: 70px;
            height: 70px;
            background: #6dd5fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.15);
        }
        .login-logo img {
            width: 38px;
            height: 38px;
            fill: #2980b9;
        }
        h2 {
            text-align: center;
            margin-bottom: 22px;
            color: #2980b9;
            letter-spacing: 1px;
        }
        .error {
            color: #e74c3c;
            margin-bottom: 18px;
            text-align: center;
            background: #fdecea;
            border: 1px solid #f5c6cb;
            border-radius: 6px;
            padding: 8px 0;
            width: 100%;
        }
        label {
            font-weight: 600;
            color: #34495e;
            margin-bottom: 6px;
            display: block;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 10px;
            margin-bottom: 18px;
            border: 1px solid #b2bec3;
            border-radius: 7px;
            font-size: 15px;
            background: #f7fafd;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border: 1.5px solid #2980b9;
            outline: none;
            background: #f0f9ff;
        }
        button {
            width: 107%;
            padding: 15px;
            background: linear-gradient(90deg, #2980b9 0%, #6dd5fa 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.10);
            transition: background 0.2s;
        }
        button:hover {
            background: linear-gradient(90deg, #2574a9 0%, #48c6ef 100%);
        }
        @media (max-width: 480px) {
            .login-container {
                width: 95%;
                padding: 25px 10px 20px 10px;
            }
        }
        
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="logonagari.png" alt="Logo" />

        </div>
        <h2>Login Admin</h2>
        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autofocus autocomplete="username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
   
   