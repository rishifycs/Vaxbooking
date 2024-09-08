<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php"); 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $serviceType = $_POST['serviceType'];
    $price = $_POST['price'];

    $sql = "INSERT INTO vaccination_bookings (name, email, address1, address2, mobile, dob, serviceType, price)
            VALUES ('$name', '$email', '$address1', '$address2', '$mobile', '$dob', '$serviceType', '$price')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to payment page with serviceType and price as URL parameters
        header("Location: payment.php?serviceType=" . urlencode($serviceType) . "&price=" . urlencode($price));
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
    <title>Vaccine Booking</title>
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

        .booking-container {
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
    <div class="container booking-container">
        <h3 class="text-center">Vaccination Services Application</h3>
        <form action="booking.php" method="post">
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
                    <label for="address1">Address Line 1</label>
                    <input type="text" class="form-control" id="address1" name="address1" placeholder="e.g. 123/1, Street Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="address2">Address Line 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Enter DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
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
            <button type="submit" class="btn btn-primary btn-block">Book Service</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function redirectToPayment() {
        // Fetch the form data
        const serviceType = document.getElementById('serviceType').value;
        const price = document.getElementById('price').value;

        // Redirect to payment.php with URL parameters
        window.location.href = `payment.php?serviceType=${encodeURIComponent(serviceType)}&price=${encodeURIComponent(price)}`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Fetch the URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const serviceType = urlParams.get('name') || '';
        const price = urlParams.get('price') || '';

        // Populate the form fields with the fetched data
        document.getElementById('serviceType').value = serviceType;
        document.getElementById('price').value = price;
    });
</script>
</body>
</html>
