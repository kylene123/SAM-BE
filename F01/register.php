<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "olympic_game"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$success_message = "";
$error_message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error_message = "Email already exists. Please use a different email.";
    } else {
     
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()) {
            $success_message = "Registration successful!";
        } else {
            $error_message = "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/icon.png">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
        .toggle {
            text-align: center;
            margin-top: 10px;
        }
        .toggle a {
            color: #007bff;
            text-decoration: none;
        }
        .toggle a:hover {
            text-decoration: underline;
        }
        .image-container {
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .success-message {
            color: green;
            font-size: 14px;
            text-align: center;
            margin-bottom: 10px;
        }
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="image-container">
        <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/icon.png" alt="User Icon">
    </div>
    <h1>Register</h1>
    <?php if (!empty($success_message)): ?>
        <p class="success-message"><?php echo $success_message; ?></p>
    <?php endif; ?>
    <?php if (!empty($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="POST" action="register.php">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>
    <div class="toggle">
        <p>Already have an account? <a href="index.php">Log in here</a></p>
    </div>
</div>
</body>
</html>
