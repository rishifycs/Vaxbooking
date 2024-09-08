<?php
session_start();

if (isset($_POST['login'])) {
    include("connection.php");

    // Sanitize inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user data from the database
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        // Check if the password matches
        if ($password === $stored_password) {
            // Store user data in session and redirect to home page
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            header("Location: home.php");
            exit();
        } else {
            echo '<script>alert("Invalid email or password!");</script>';
        }
    } else {
        echo '<script>alert("No account found with this email!");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url('images/bg2.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            width: 100%;
            max-width: 500px;
        }

        .login-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
            transform: scale(1.02);
        }

        .form-control {
            border-radius: 8px;
            background: #f0f0f0;
            border: 1px solid #ddd;
            transition: background 0.3s ease, border 0.3s ease;
            padding: 10px;
        }

        .form-control:focus {
            background: #fff;
            border-color: #00bcd4;
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
        }

        .btn-primary {
            background-color: #00bcd4;
            border-color: #00bcd4;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #008c9e;
            border-color: #008c9e;
        }

        .text-center a {
            color: #00bcd4;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
            color: red;
        }

        @media screen and (max-width: 700px) {
            #form {
                width: 65%;
                padding: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center font-weight-bold">Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <p class="mt-3 text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
