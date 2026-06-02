<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert user into the database
    $sql = "INSERT INTO user1 (name, mobilenumber, email, password) VALUES ('$name', '$mobilenumber', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful registration
           header("Location:\beautycare\home.php");
                exit(); 
        
    } else {
        echo "<div class='error'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #572649;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background: #e0bbd2;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: zoomIn 0.5s ease-in-out;
            width: 600px;
            height: 450px;
        }

        h2 {
            text-align: center;
            color: #572649;
            margin-top: 10px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-size: 40px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 600px;
            height: 10px;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        input[type="submit"] {
            background-color: #572649;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
            width: 620px;
        }

        input[type="submit"]:hover {
            background-color: #eobbd2;
            transform: translateY(-2px);
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        p a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        p a:hover {
            color: #0056b3;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 15px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
       <h2><i class="fas fa-user"> &nbsp;&nbsp;</i>Register</h2>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="mobilenumber">Mobile Number:</label>
            <input type="text" id="mobilenumber" name="mobilenumber" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Register">
        </form>
        <p><a href="\beautycare\login.php">Already registered? Login here</a></p>
    </div>
</body>
</html>
