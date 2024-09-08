<?php
session_start();

// Check if the admin is logged in, otherwise redirect to the login page
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            position: fixed;
            height: 100%;
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 20px;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a:hover {
            color: #18bc9c;
        }
        .sidebar .logout {
            text-align: center;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }
        .welcome {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .dashboard-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .dashboard-box h5 {
            color: #2c3e50;
        }
        .dashboard-box a {
            text-decoration: none;
            color: #18bc9c;
        }
        .dashboard-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="home.php"><i class="bi bi-house"></i> Home</a></li>
                <li><a href="useraccount.php"><i class="bi bi-person"></i> User Accounts</a></li>
                <li><a href="totalbookings.php"><i class="bi bi-book"></i> Bookings</a></li>
                <li><a href="admin_feedback.php"><i class="bi bi-envelope"></i> Feedback</a></li>
                <li><a href="revenue.php"><i class="bi bi-cash-stack"></i> Revenue</a></li>
            </ul>
        </div>
        <div class="logout">
            <a class="btn btn-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="welcome">
            Welcome, Admin!
        </div>
        <div class="dashboard-box">
            <h5>User Accounts</h5>
            <a href="useraccount.php">View Details</a>
        </div>
        <div class="dashboard-box">
            <h5>Total Revenue</h5>
            <a href="revenue.php">View Details</a>
        </div>
        <div class="dashboard-box">
            <h5>Total Bookings</h5>
            <a href="totalbookings.php">View Details</a>
        </div>
        <div class="dashboard-box">
            <h5>Feedback</h5>
            <a href="admin_feedback.php">View Details</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
