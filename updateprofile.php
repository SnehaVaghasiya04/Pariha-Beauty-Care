<?php
session_start();
include 'db_conn.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Fetch user information from the database
$email = $_SESSION['email']; // Assuming email is stored in the session
$sql = "SELECT * FROM user1 WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

// Update user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email']; // Email may be changed if allowed

    // Update the user in the database
    $update_sql = "UPDATE user1 SET name = ?, mobilenumber = ?, email = ? WHERE email = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssss", $name, $mobilenumber, $email, $user['email']);

    if ($stmt->execute()) {
        // Update session variable if email is changed
        $_SESSION['email'] = $email;
        echo "<div class='success'>Profile updated successfully!</div>";
    } else {
        echo "<div class='error'>Error updating profile: " . $stmt->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top:70px;
            margin-left: 300px;
            margin-bottom: 40px;
        }
        h2 {
            text-align: center;
            color: black;
        }
        p {
            margin: 10px 0;
            font-size: 18px;
        }

  .icon-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .icon-wrapper i {
            color: #572649;
            font-size: 50px;
            margin-right: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            transition: 0.3s ease;
        }

          input[type="text"]:focus, input[type="email"]:focus {
            border-color: #572649;
            box-shadow: 0 0 8px rgba(87, 38, 73, 0.3);
        }

          form label {
            font-size: 18px;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .logout-btn {
            background-color: #572649;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-flex;
            width: 255px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .update-btn {
            background-color: #572649;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            margin-top: 10px;
        }
        .update-btn:hover {
            background-color: #e0bbd2;
        }
        .success {
            color: green;
            text-align: center;
            margin: 10px 0;
        }
        .error {
            color: red;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php include_once('include/header.php'); ?> 

    <div class="container">
       
           <div class="icon-wrapper">
            <i class="fas fa-user-edit"></i>
           </div>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
            
            <label for="mobilenumber">Mobile Number:</label>
            <input type="text" id="mobilenumber" name="mobilenumber" value="<?php echo htmlspecialchars($user['mobilenumber']); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            
            <input type="submit" class="update-btn" value="Update Profile">
        </form>
        
        <a href="profile.php" class="logout-btn">View Profile</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

   <?php include_once('include/footer.php'); ?>


</body>
</html>
