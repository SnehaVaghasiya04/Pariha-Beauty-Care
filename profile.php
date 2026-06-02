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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container1 {
            margin-top: 100px;
            margin-left: 300px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-bottom: 50px;
            
        }
        h2 {
            text-align: center;
            color: #572649;
        }
      .d1 p {
    margin: 10px 0;
    font-size: 18px;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    color: #333;
    padding-left:140px ;

}

        .logout-btn {
            background-color: #572649;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-table;
            width: 250px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            margin-top: 10px;
        }
        .logout-btn:hover {
            background-color: #e0bbd2;
        }
        .profile-icon1 {
            font-size: 80px; /* Size of the profile icon */
            color: #572649; /* Color of the profile icon */
            display: block;
            margin: 0 auto 10px; /* Center the icon */
        }
    </style>
</head>
<body>
    <?php include_once('include/header.php'); ?> 
  

    <div class="container1">
      
      <center>  <i class="fas fa-user-circle profile-icon1"></i> <!-- Profile icon --></center>
      <div class="d1">
        <p><strong>Name:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlspecialchars($user['name']); ?></p>
        <p><strong>Mobile Number:</strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars($user['mobilenumber']); ?></p>
        <p><strong>Email:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <a href="updateprofile.php" class="logout-btn">Update Profile</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <?php include_once('include/footer.php'); ?>


</body>
</html>
