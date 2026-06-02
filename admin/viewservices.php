<?php
include 'conn.php';

// Handle deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($conn, "DELETE FROM services1 WHERE id='$id'");
    
    if ($query) {
        echo "<script>alert('Service has been deleted.');</script>";
       /* echo "<script>window.location.href='admin\viewservices.php';</script>";*/
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}

// Fetch services from the database
$query = mysqli_query($conn, "SELECT * FROM services1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }
        table {
            width: 900px;
            margin-left: 300px;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
        }
        table, th, td {
            border: 2px solid #572649;
        }
        th, td {
            padding: 12px;
            text-align: center;
            font-size: 16px;
        }
        th {
            background-color: #572649;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #e0bbd2;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
       .action-btn {
            display: inline-block;
            padding: 8px;
            margin-right: 5px;
           
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }
                .delete-btn {
            color: red;
        }
        .update-btn {
            color: green;
        }
       .action-btn:hover {
            transform: scale(1.05);
        }
        .action-btn i {
            margin-right: 0; /* No margin as we only show icons now */
        }
        /*.action-btn-group {
    
            gap: 10px; 
            display: grid;/* Space between the icons */

        }*/
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @media (max-width: 600px) {
            table, th, td {
                font-size: 14px;
            }
        }
        .d1{
            margin-top :60px;
            margin-left : 600px;
            color : #572649;
        }
    </style>
</head>
<body>

<?php include_once('include/header.php'); ?>
<div class="d1">
<h1>Manage Services</h1>
</div>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td><img src="images/' . $row['image'] . '" alt="' . $row['name'] . '"></td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>₹' . $row['price'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td class="action-btn-group">'; // Add a container for flex layout
                echo '<a href="updateservice.php?id=' . $row['id'] . '" class="action-btn update-btn"><i class="fas fa-edit"></i></a>';
                echo '<a href="viewservices.php?delete=' . $row['id'] . '" class="action-btn delete-btn" onclick="return confirm(\'Are you sure you want to delete this service?\')"><i class="fas fa-trash"></i></a>';
                echo '</td>';
                echo '</tr>';
                $i++;
            }
        } else {
            echo '<tr><td colspan="6">No services found.</td></tr>';
        }
        ?>
    </tbody>
</table>

</body>
</html>
