<?php
include 'conn.php';

// Retrieve service details if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM services1 WHERE id='$id'");
    $service = mysqli_fetch_assoc($result);
    
    // Check if service exists
    
} 
// Handle update
if (isset($_POST['update_service'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    // Check if a new image was uploaded
    if (!empty($image)) {
        // Update the image if a new one was uploaded
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
        $query = mysqli_query($conn, "UPDATE services1 SET image='$image', name='$name', price='$price', description='$description' WHERE id='$id'");
    } else {
        // If no new image, just update the other fields
        $query = mysqli_query($conn, "UPDATE services1 SET name='$name', price='$price', description='$description' WHERE id='$id'");
    }

    if ($query) {
        echo "<script>alert('Service has been updated.');</script>";
        /*echo "<script>window.location.href = '\admin\viewservices.php';</script>";*/
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
    <title>Update Service</title>
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
            height: auto;
            animation: slideIn 1s ease-in-out;
        }
        h1 {
            text-align: center;
            color: #572649;
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #572649;
            font-weight: 600;
        }
        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 2px solid #572649;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
            height: 80px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #572649;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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
            font-size: 14px;
            margin-top: 15px;
        }
        .message.error {
            color: red;
        }
        .message.success {
            color: green;
        }
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
    <h1>Update Service</h1>
    <label for="image">Image (Leave blank to keep current):</label>
    <input type="file" id="image" name="image" accept="image/png, image/jpg, image/jpeg">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($service['name']); ?>">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required value="<?php echo htmlspecialchars($service['price']); ?>">

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" required><?php echo htmlspecialchars($service['description']); ?></textarea>

    <button type="submit" name="update_service">Update Service</button>
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
