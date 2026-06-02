<?php
session_start();
include 'conn.php'; // Include database connection

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Secure query using prepared statements
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Verify password using MD5 (not secure, but matching your existing method)
        if ($row['password'] === md5($password)) {
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php"); // Redirect to the correct path
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Invalid username!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #572649;
        }
        .login-container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #e0bbd2;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #572649;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #4a1e3b;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>
