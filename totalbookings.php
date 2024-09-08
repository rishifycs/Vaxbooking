<?php
include("connection.php");

$sql = "SELECT name, email, address1, address2, mobile, dob, serviceType, price FROM vaccination_bookings";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Bookings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: linear-gradient(120deg, #f6d365, #fda085);
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        .table-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #ff0000;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .table {
            color: #fff;
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #ff0000;
            color: #fff;
        }

        .table tbody tr {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h2>Total Bookings</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address Line 1</th>
                        <th>Address Line 2</th>
                        <th>Mobile</th>
                        <th>Date of Birth</th>
                        <th>Vaccination</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['address1']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['address2']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['mobile']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['dob']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['serviceType']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>No bookings found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
