<?php
    include("connection.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Vaccination Booking Website</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #e9f5ff;
            margin: 0;
            padding: 0;
            
        }

        .navbar {
            background-color: #007bff;
            padding: 15px 30px;
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 2rem;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.2rem; /* Increase font size */
            padding: 10px 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00;
        }
        .navbar-toggler {
            font-size: 1.5rem; /* Increase size of the toggler icon */
            padding: 10px; /* Increase padding for a bigger toggler */
        }

        .content-section, .about-section, .services-section, .contact-section {
            padding: 80px 0;
        }

        .content-section {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        .content-section h2 {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .content-section p {
            font-size: 1.15rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .about-section {
            background-color: #e9ecef;
        }

        .about-section .heading {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        .about-section .subheading {
            font-size: 1.25rem;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .about-section .content {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .services-section {
            background-color: #f1f1f1;
        }

        .services-section .icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .services-section h4 {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .services-section p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .contact-section {
            background-color: #ffffff;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #343a40;
            color:white;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color:solid red;
            margin: 0 10px;
            text-decoration: none;
        }

        .footer a:hover {
            color: #ffcc00;
        }

        
        .home-card {
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background: black;
            backdrop-filter: blur(10px);
            margin-bottom: 30px;
        }

        .home-card img {
            width: 100%;
            height: 80vh;
            border-bottom: 1px solid #ddd;
            
        }

        .home-card .card-body {
            padding: 20px;
        }

        .home-card h2 {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .home-card p {
            font-size: 1.1rem;
            color:white;
            font-size:1.2rem;
            line-height: 1.8;
        }

        .home-card .btn {
            margin-top: 20px;
        }
        .nav-item {
        display: inline-block; 
        list-style: none;
        border: 2px;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://fontawesome.com/icons/user-tie-hair?f=classic&s=duotone">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">VaxBooking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary text-white" href="admin_page.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5" id="home">
        <div class="row">
            <div class="col-md-6">
                <div class="home-card">
                    <div class="card-body">
                        <h2>Welcome to Vaccination Hub!</h2>
                        <p>Welcome to our Vaccination Hub, your trusted destination for comprehensive immunization services.
                             We provide a safe and welcoming environment for all ages, ensuring you and your loved ones stay
                              protected against preventable diseases. Our experienced healthcare professionals are dedicated to
                               offering personalized care and the latest vaccines, prioritizing your health and well-being. 
                               Stay healthy, stay protected—visit our Vaccination Hub today.</p>
                        <a href="vaccine_list.php" class="btn btn-success btn-lg">Book Vaccine!!</a>
                        <a href="feedback.php" class="btn btn-danger btn-lg">Give your Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="home-card">
                    <img src="images/doctor.jpg" alt="Vaccination Image">
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
<section class="about-section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Image Card -->
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white border-0">
                    <img src="images/Hospital1.jpeg" alt="About Us" class="card-img" style="height: 500px; object-fit: cover;">
                </div>
            </div>
            <!-- About Us Card -->
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white border-0 h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h2 class="card-title font-weight-bold text-center mb-5" style="color:#007bff;">About Us</h2>
                        <h5 class="card-subtitle font-weight-bold mb-3" style="color: red;">Committed to Your Health and Safety</h5>
                        <p class="card-text">At Vaccination Hub, we prioritize your health and well-being by offering a comprehensive range of vaccines in a safe and welcoming environment. Our experienced healthcare professionals are dedicated to providing you with the latest and most effective vaccines, tailored to your specific needs.</p>
                        <p class="card-text">We believe in the power of immunization to prevent diseases and protect communities. Our team is committed to educating and empowering you with the knowledge you need to make informed decisions about your health. Join us in our mission to create a healthier, safer world for everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <i class='bx bxs-vaccine bx-lg icon'></i>
                    <h4>Comprehensive Vaccination</h4>
                    <p>Offering a wide range of vaccines for all age groups, ensuring complete protection.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class='bx bx-shield-quarter bx-lg icon'></i>
                    <h4>Safety First</h4>
                    <p>Our clinics follow strict safety protocols to provide a secure environment.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class='bx bxs-chat bx-lg icon'></i>
                    <h4>Expert Consultation</h4>
                    <p>Consult with our healthcare professionals to get personalized vaccine advice.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h2>Contact Us</h2>
                    <p>If you have any questions or need more information, please don't hesitate to contact us. Our friendly team is here to help you.</p>
                    <p><strong>Email:</strong> Vaccinationhub@gmail.com</p>
                    <p><strong>Phone:</strong> +91 9912345678</p>
                    <p><strong>Address:</strong> Wellness Hospital, Health City, Mumbai</p>
                </div>
                <div class="col-lg-6">
                    <h2>Follow Us</h2>
                    <p>Stay connected with us on social media for the latest updates and information.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 VaxBooking. All Rights Reserved.</p>
        <p><a href="privacy.php">Privacy Policy</a> | <a href="terms_condition.php">Terms of Service</a> </p>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
