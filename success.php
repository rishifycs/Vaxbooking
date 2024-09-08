<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title>Check Appoint status</title>
    <style>
        {
            height:100%;
            margin:0px;
            justify-content:center;
            background-color:#f0f0f0;
            align-items:center;
            margin-top:150px;

        }
        .container{
            text-align:center;
        }
        .success-animation{
            display:inline-block;
            position:relative;
            animation:fadeinup 0.5s ease forwards;

        }
        @keyframes fadeInUp {
            0%{
                opacity:0;
                transform:translateY(20px);
                100%{
                    opacity:1;
                    transform:translateY(0);
                }
            }
            
        }
        .checkmark{
            width:52px;
            height:52px;
            border-radius:50%;
            display:block;
            stroke-width:2;
            fill:none;
            animation: drawCircle 0.5s ease forwards;
            margin-left: 120px;
            margin-top: 100px;
            
        }
        .checkmark-circle{
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #4bb71b;
            fill: none;
            animation: strokeCircle 0.6s ease forwards;

        }
        .checkmark-check{
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: drawCheck 0.6s ease forwards;

        }
        .success-message{
            margin-top: 10px;
            font-family: Arial,sans-serif;
            font-size: 18px;
            color: #333;
            animation: fadeIn 0.5s ease forwards 0.6s;
        }
        @keyframes drawCircle{
            0%{
                stroke-dashoffset: 166;

            }
            100%{
                stroke-dashoffset: 0;
            }
        }
        @keyframes strokeCircle{
            0%{
                stroke-dashoffset: 166;
            }
            100%{
                stroke-dashoffset: 0;
            }
        }
        @keyframes drawCheck{
            0%{
                stroke-dashoffset: 48;
            }
            100%{
                stroke-dashoffset: 0;
            }
        }
        @keyframes fadeIn{
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    
    

   




    <!-- Optional JavaScript Libraries (e.g., jQuery, Popper.js, Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
