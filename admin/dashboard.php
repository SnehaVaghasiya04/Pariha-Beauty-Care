<?php
include 'conn.php';

// Query counts for services, packages, team, and appointments
$service_count = $conn->query("SELECT COUNT(*) as total FROM services1")->fetch_assoc()['total'];
$package_count = $conn->query("SELECT COUNT(*) as total FROM packages")->fetch_assoc()['total'];
$team_count = $conn->query("SELECT COUNT(*) as total FROM team")->fetch_assoc()['total'];
$appointment_count = $conn->query("SELECT COUNT(*) as total FROM book")->fetch_assoc()['total'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Care Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    /* Add your CSS styles here */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
        margin-top: 60px;
        animation: fadeIn 1s ease-in-out;
    }

    .content h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .dashboard-items {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .dashboard-item {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        width: 200px;
        text-align: center;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .dashboard-item:hover {
        transform: scale(1.05);
    }

    .dashboard-item i {
        font-size: 48px;
        color: #333;
        margin-bottom: 10px;
    }

    .dashboard-item h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .dashboard-item p {
        font-size: 18px;
        color: #777;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .dashboard-item:nth-child(1) {
        background-color: #ffebcc; /* Light orange */
    }

    .dashboard-item:nth-child(2) {
        background-color: #d1e7ff; /* Light blue */
    }

    .dashboard-item:nth-child(3) {
        background-color: #d4edda; /* Light green */
    }

    .dashboard-item:nth-child(4) {
        background-color: #f8d7da; /* Light red */
    }
    .d1{
        text-align: center;
        color: #572649;
    }
</style>
<body>
   <?php include_once('include/header.php'); ?>

    <div class="content">
        <div class="d1">
        <h1>Welcome to the Admin Dashboard</h1>
    </div>
        <div class="dashboard-items">
            <div class="dashboard-item">
                <i class="fas fa-tasks"></i>
                <h2>Services</h2>
                <p>Total: <?= $service_count ?></p>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-box"></i>
                <h2>Packages</h2>
                <p>Total: <?= $package_count ?></p>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-users"></i>
                <h2>Team Members</h2>
                <p>Total: <?= $team_count ?></p>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-calendar-check"></i>
                <h2>Appointments</h2>
                <p>Total: <?= $appointment_count ?></p>
            </div>
        </div>
    </div>
</body>
</html>
