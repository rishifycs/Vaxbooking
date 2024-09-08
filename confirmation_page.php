<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('images/bg2.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .confirmation-container {
            margin-top: 50px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h3 {
            color: #ff0000;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #ff0000;
            border-color: #ff0000;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #cc0000;
            border-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="container confirmation-container">
        <h3 class="text-center">Payment Successful!</h3>
        <p>Thank you for your payment. A receipt has been sent to your email.</p>
        <p>We appreciate your trust in our services.</p>
        <a href="index.php" class="btn btn-primary btn-block">Go to Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
