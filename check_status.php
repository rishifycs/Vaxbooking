<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Appointment Status</title>
    <!-- Favicon -->
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet (e.g., Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Library Stylesheet (e.g., Google Fonts) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="path/to/custom-bootstrap.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="path/to/template.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="position:fixed; margin-left:350px; margin-top:20px;">
        <div class="search-form">
            <h5 class="mb-4" style="text-align:center;">Check Appointment Status for Vaccination</h5>
                <form action="post">
                    <div class="form-group">
                        <label for="searchPhone">Enter Phone Number</label>
                        <input type="text" class="form-control" id="searchPhone" name="searchPhone" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Check Status</button>
        </div>
                </form>

                <?php
               // include(".include/connection.php");
                




                ?>

        
    </div>




    <!-- Optional JavaScript Libraries (e.g., jQuery, Popper.js, Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script> 
</body>
</html>