<?php
session_start();
$admin_username = "admin";
$admin_password = "admin123"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_page.php");
        exit;
    } else {
        echo "<p style='color: red; text-align: center;'>Invalid username or password!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: blueviolet;
            font-family: 'Arial', sans-serif;
            
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-box h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 35px;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .error-message {
            text-align: center;
            color: red;
        }
        .form-check {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h3>Admin Login</h3>
            <?php if (isset($_POST['username']) && isset($_POST['password'])): ?>
                <p class="error-message">Invalid username or password!</p>
            <?php endif; ?>
            <form action="admin_login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                    <label class="form-check-label" for="showPassword">Show Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
