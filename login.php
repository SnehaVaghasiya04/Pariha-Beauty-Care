<?php 
session_start();
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM user1 WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email']; // Store email in session
              $_SESSION['username'] = $user['name'];
            
            // Redirect to the page intended after login (book.php)
            if (isset($_SESSION['redirect_to'])) {
                $redirect_page = $_SESSION['redirect_to'];
                unset($_SESSION['redirect_to']); // Clear it after using
                header("Location: $redirect_page");
            } else {
                header("Location: home.php");
            }
            exit();
        } else {
            $error_message = "Invalid credentials!";
        }
    } else {
        $error_message = "No user found!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #572649;
            margin-bottom: 20px;
            font-size: 30px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: 370px;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 16px;
        }

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
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #572649;
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

        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
       <h2><i class="fas fa-key"></i> &nbsp;&nbsp;Login</h2>
        <form action="" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <?php if (isset($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <p><a href="\beautycare\forget.php">Forgot Password?</a></p>
    </div>
</body>
</html>
