<?php
include("connection.php"); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $sql = "INSERT INTO feedback_messages (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    
    if (mysqli_query($conn, $sql)) {
        $message = "Feedback submitted successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f093fb, #f5576c);
            font-family: 'Arial', sans-serif;
            color: #333;
            padding: 20px;
        }

        .feedback-container {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-control {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-bottom: 20px;
            color: green;
        }

        .error-message {
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h2>Provide Your Feedback</h2>
        
        <?php if (isset($message)) : ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form action="feedback.php" method="post">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            <textarea name="feedback" class="form-control" placeholder="Your Feedback" rows="5" required></textarea>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
