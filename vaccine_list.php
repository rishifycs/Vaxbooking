<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('images/bg2.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .vaccine-container {
            margin-top: 50px;
        }

        .vaccine-card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .vaccine-card:hover {
            transform: translateY(-10px);
        }

        .vaccine-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .vaccine-card h5 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #007bff;
        }

        .vaccine-card p {
            font-size: 1rem;
            color: #666;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .vaccineList h3 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.4), rgba(173, 216, 230, 0.4));
            backdrop-filter: blur(20px);
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 1, 0.3);
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand font-weight-bold" href="#">SearchVaccine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Search Vaccines" aria-label="Search">
                </li>
            </ul>
        </div>
    </nav>

    <!-- Vaccine List Section -->
    <div class="container mt-5 vaccine-list" id="vaccineList">
        <h3 class="text-center mb-4 font-weight-bold">Available Vaccines</h3>
        
        <div class="row" id="vaccineCards">
            <!-- Vaccine Cards -->
            <?php
            $vaccines = [
                ["name" => "Sputnik V", "description" => "Effective COVID-19 vaccine.", "image" => "images/vaccine1.webp", "price" => "1500"],
                ["name" => "Influenza Vaccine", "description" => "Prevent seasonal flu.", "image" => "images/vaccine2.jpeg", "price" => "1000"],
                ["name" => "Hepatitis B Vaccine", "description" => "Prevent Hepatitis B.", "image" => "images/vaccine3.webp", "price" => "1200"],
                ["name" => "HPV Vaccine", "description" => "Protect against HPV.", "image" => "images/vaccine4.webp", "price" => "2500"],
                ["name" => "Measles Vaccine", "description" => "Prevent measles.", "image" => "images/vaccine5.jpeg", "price" => "800"],
                ["name" => "Polio Vaccine", "description" => "Protect against polio.", "image" => "images/vaccine6.webp", "price" => "500"],
                ["name" => "Chickenpox Vaccine", "description" => "Prevent chickenpox.", "image" => "images/vaccine7.jpg", "price" => "1500"],
                ["name" => "Rabies Vaccine", "description" => "Protect against rabies.", "image" => "images/vaccine8.jpg", "price" => "2000"],
                ["name" => "MMR Vaccine", "description" => "Prevent measles, mumps, and rubella.", "image" => "images/vaccine9.jpg", "price" => "1000"],
                ["name" => "Yellow Fever Vaccine", "description" => "Protect against yellow fever.", "image" => "images/vaccine10.jpg", "price" => "1800"],
                ["name" => "Typhoid Vaccine", "description" => "Prevent typhoid fever.", "image" => "images/vaccine11.jpg", "price" => "700"],
                ["name" => "Tetanus Vaccine", "description" => "Prevent tetanus.", "image" => "images/vaccine12.webp", "price" => "300"],
                ["name" => "Diphtheria Vaccine", "description" => "Prevent diphtheria.", "image" => "images/vaccine13.jpg", "price" => "600"],
                ["name" => "Pertussis Vaccine", "description" => "Prevent whooping cough.", "image" => "images/vaccine14.webp", "price" => "600"],
                ["name" => "Rotavirus Vaccine", "description" => "Protect against rotavirus infections.", "image" => "images/vaccine15.jpg", "price" => "2500"],
                ["name" => "Pneumococcal Vaccine", "description" => "Prevent pneumococcal infections.", "image" => "images/vaccine16.jpg", "price" => "4000"],
                ["name" => "Hib Vaccine", "description" => "Prevent Haemophilus influenzae type b.", "image" => "images/vaccine17.webp", "price" => "2500"],
                ["name" => "Japanese Encephalitis Vaccine", "description" => "Protect against Japanese encephalitis.", "image" => "images/vaccine18.jpg", "price" => "3000"],
                ["name" => "Shingles Vaccine", "description" => "Prevent shingles (herpes zoster).", "image" => "images/vaccine19.jpg", "price" => "5000"],
                ["name" => "Meningococcal Vaccine", "description" => "Prevent meningococcal disease.", "image" => "images/vaccine20.jpg", "price" => "3500"],
                ["name" => "Hepatitis A Vaccine", "description" => "Prevent Hepatitis A.", "image" => "images/vaccine21.png", "price" => "2000"],
                ["name" => "Cholera Vaccine", "description" => "Protect against cholera.", "image" => "images/vaccine22.webp", "price" => "1500"],
                ["name" => "Tuberculosis Vaccine", "description" => "Prevent tuberculosis (BCG vaccine).", "image" => "images/vaccine23.jpg", "price" => "400"],
                ["name" => "COVID-19 mRNA Vaccine", "description" => "Protect against COVID-19 (mRNA vaccines like Pfizer, Moderna).", "image" => "images/vaccine24.jpg", "price" => "2500"]
            ];

            foreach ($vaccines as $vaccine) {
                echo '<div class="col-md-4 vaccine-card" data-name="'.$vaccine['name'].'" data-price="'.$vaccine['price'].'">
                        <div class="card">
                            <img src="'.$vaccine['image'].'" alt="'.$vaccine['name'].'">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">'.$vaccine['name'].'</h5>
                                <p class="card-tex font-weight-bold">'.$vaccine['description'].'</p>
                                <p class="card-text font-weight-bold"><strong>Price:</strong> '.$vaccine['price'].'</p>
                                <a href="booking.php?name='.urlencode($vaccine['name']).'&price='.urlencode($vaccine['price']).'" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                      </div>';
            }   
            ?>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let input = this.value.toLowerCase();
            let cards = document.querySelectorAll('.vaccine-card');

            cards.forEach(function(card) {
                let name = card.getAttribute('data-name').toLowerCase();
                if (name.includes(input)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
