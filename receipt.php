<?php
// Include database connection file
include("connection.php");

// Initialize an empty array to hold payment details
$payment = [];

if (isset($_POST['submit'])) {
    // Get the payment name from the form input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    
    // Fetch payment details from the database
    $sql = "SELECT * FROM payments WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $payment = mysqli_fetch_assoc($result);
    } else {
        $message = "Payment details not found.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Payment Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            
        }
        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            color: black;
        }
        .card {
            border-top: 5px solid #007bff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }
        .card-header {
            background-color: #007bff;
            color: #ffffff;
            font-size: 24px;
            text-align: center;
            border-bottom: none;
        }
        .card-body p {
            margin: 10px 0;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-6">
        <form method="post" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <button type="submit" name="submit" class="btn btn-danger btn-danger">Show Receipt</button>
            
        </form>

        <?php if (!empty($payment)): ?>
            <div class="card mt-5">
                <div class="card-header">
                    Payment Receipt
                </div>
                <div class="card-body">
                    <p><strong>ID:</strong> <?php echo htmlspecialchars($payment['id']); ?></p>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($payment['name']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($payment['email']); ?></p>
                    <p><strong>Mobile:</strong> <?php echo htmlspecialchars($payment['mobile']); ?></p>
                    <p><strong>Account Holder:</strong> <?php echo htmlspecialchars($payment['accountHolder']); ?></p>
                    <p><strong>Service Type:</strong> <?php echo htmlspecialchars($payment['serviceType']); ?></p>
                    <p><strong>Price:</strong> ₹ <?php echo htmlspecialchars($payment['price']); ?></p>
                    <p><strong>Payment Method:</strong> <?php echo htmlspecialchars($payment['paymentMethod']); ?></p>
                    <p><strong>Card Validity:</strong> <?php echo htmlspecialchars($payment['cardValidity']); ?></p>
                </div>
            </div>
        <?php elseif (isset($message)): ?>
            <div class="alert alert-danger mt-4"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
