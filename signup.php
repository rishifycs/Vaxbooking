<?php

if (isset($_POST['submit'])) {
    include("connection.php");
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if the username or email already exists
    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql_email = "SELECT * FROM signup WHERE email='$email'";
    $result_email = mysqli_query($conn, $sql_email);
    $count_email = mysqli_num_rows($result_email);

    if ($count_user == 0 && $count_email == 0) {
        if ($password == $cpassword) {
            // Store the password as plain text
            $sql_insert = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($conn, $sql_insert)) {
                echo '<script>alert("user registered sucessfully");</script>';
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo '<script>alert("Passwords do not match!");</script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>alert("Username already exists!");</script>';
        }
        if ($count_email > 0) {
            echo '<script>alert("Email already exists!");</script>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            height: 100vh; /* Full viewport height */
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.8); 
            backdrop-filter: blur(10px); 
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            width: 90%;
            max-width: 400px; /* Adjusted for better fit */
        }

        .signup-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
            transform: scale(1.02);
        }

        .form-control {
            border-radius: 8px;
            background: #f0f0f0; /* Solid light gray background */
            border: 1px solid #ddd; /* Light border */
            transition: background 0.3s ease, border 0.3s ease;
            padding: 10px;
        }

        .form-control:focus {
            background: #fff; /* White background on focus */
            border-color: #00bcd4; /* Teal border on focus */
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25); /* Teal shadow */
        }

        .btn-primary {
            background-color: #00bcd4; /* Teal color */
            border-color: #00bcd4;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%; /* Full width */
        }

        .btn-primary:hover {
            background-color: #008c9e; /* Darker teal */
            border-color: #008c9e;
        }

        .text-center a {
            color: #00bcd4;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
            color: #008c9e; /* Changed hover color */
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2 class="text-center font-weight-bold">Sign Up</h2>
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
            <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
