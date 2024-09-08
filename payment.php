<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php"); 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $accountHolder = $_POST['accountHolder']; 
    $serviceType = $_POST['serviceType'];
    $price = $_POST['price'];
    $paymentMethod = $_POST['paymentMethod'];
    $cardValidity = $_POST['cardValidity']; 

    $sql = "INSERT INTO payments (name, email, mobile, accountHolder, serviceType, price, paymentMethod, cardValidity)
            VALUES ('$name', '$email', '$mobile', '$accountHolder', '$serviceType', '$price', '$paymentMethod', '$cardValidity')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Payment Successful!");</script>';
        header("Location: receipt.php");
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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

        .payment-container {
            margin-top: 50px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .form-control, .btn-primary {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #ff0000;
            border-color: #ff0000;
        }

        .btn-primary:hover {
            background-color: #cc0000;
            border-color: #cc0000;
        }

        .form-group label {
            font-weight: bold;
        }

        h3 {
            color: #ff0000;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container payment-container">
        <h3 class="text-center">Payment Information</h3>
        <form action="payment.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="e.g. name@gmail.com" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="accountHolder">Account Holder Name</label>
                    <input type="text" class="form-control" id="accountHolder" name="accountHolder" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="serviceType">Vaccination</label>
                    <input type="text" class="form-control" id="serviceType" name="serviceType" placeholder="Vaccination" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" readonly>
                </div>
            </div>
            
            <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod" class="form-control" required>
                    <option value="" disabled selected>Select Payment Method</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cardValidity">Card Validity</label>
                    <input type="date" class="form-control" id="cardValidity" name="cardValidity" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Confirm Payment</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
            // Fetch the URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const serviceType = urlParams.get('serviceType') || '';
            const price = urlParams.get('price') || '';

            // Populate the form fields with the fetched data
            document.getElementById('serviceType').value = serviceType;
            document.getElementById('price').value = price;
        });
    </script>
</body>
</html>
