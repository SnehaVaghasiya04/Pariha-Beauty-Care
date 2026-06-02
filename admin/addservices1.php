<?php
include 'conn.php';

if (isset($_POST['add_service'])) {
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Insert into the database
    $query = mysqli_query($conn, "INSERT INTO services1 (image, name, price, description) VALUES ('$image', '$name', '$price', '$description')");

    if ($query) {
        echo "<script>alert('Service has been added.');</script>";
       /* echo "<script>window.location.href = 'beautycare\service.php';</script>";*/
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            width: 800px;
            margin-left: 250px;
            margin-top: 40px;
            border-color: #572649;
            height: auto;
            animation: slideIn 1s ease-in-out;
        }
        h1 {
            text-align: center;
            color: #572649;
            font-size: 22px; /* Reduced size */
            margin-bottom: 15px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px; /* Reduced spacing */
            color: #572649;
            font-weight: 600;
        }
        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 8px; /* Reduced padding */
            margin-bottom: 10px; /* Reduced margin */
            border: 2px solid  #572649;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
            height: 80px; /* Reduced height */
        }
        button {
            width: 100%;
            padding: 10px; /* Reduced padding */
            background-color: #572649;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Reduced size */
            transition: transform 0.3s, background-color 0.3s;
        }
        button:hover {
            background-color: #e0bbd2;
            transform: translateY(-3px);
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .message {
            text-align: center;
            font-size: 14px; /* Reduced size */
            margin-top: 15px; /* Reduced margin */
        }
        .message.error {
            color: red;
        }
        .message.success {
            color: green;
        }
        /* Responsive adjustments */
        @media (max-width: 400px) {
            form {
                width: 90%;
            }
            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<?php include_once('include/header.php'); ?>


<form method="post" enctype="multipart/form-data">
    <h1>Add New Service</h1>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" required accept="image/png, image/jpg, image/jpeg">

    <label for="name"> Service Name:</label>
    <input type="text" id="name" name="name" placeholder="Service Name" required>

    <label for="price"> Price:</label>
    <input type="number" id="price" name="price" placeholder="price" required>

    <label for="description"> service Description:</label>
    <textarea id="description" name="description" rows="4" placeholder="Service Description" required></textarea>

    <button type="submit" name="add_service">Add Service</button>
</form>

<?php
// Optional error/success messages
if (isset($error)) {
    echo '<p class="message error">' . $error . '</p>';
}
if (isset($success)) {
    echo '<p class="message success">' . $success . '</p>';
}
?>

</body>
</html>
