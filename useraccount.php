<?php
session_start();

include("connection.php");

// Fetch all users from the database
$sql = "SELECT username, email FROM signup";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #f6d365, #fda085);
            font-family: 'Helvetica Neue', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 800px;
            margin-top: 50px;
        }

        h2 {
            color: #333;
            font-weight: 700;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #ff7e5f;
            color: #fff;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.05rem;
            padding: 15px;
        }

        td {
            font-size: 1rem;
            color: #333;
            padding: 15px;
            border-bottom: 1px solid #f2f2f2;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: #ffe0b5;
        }

        th:first-child, td:first-child {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        th:last-child, td:last-child {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 2rem;
            }

            th, td {
                padding: 10px;
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">User Accounts</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>