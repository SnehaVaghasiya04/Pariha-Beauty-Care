<?php
include 'conn.php';

if (isset($_POST['add_package'])) {
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // File upload path
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

    $query = mysqli_query($conn, "INSERT INTO packages (image, name, description, price) VALUES ('$image', '$name', '$description', '$price')");

    if ($query) {
        echo "<script>alert('Package has been added.');</script>"; 
        /*echo "<script>window.location.href = 'view_packages.php'</script>"; */  
    } else {
        echo "<script>alert('Something went wrong.');</script>";    
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package</title>
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
            animation: slideIn 1s ease-in-out;
        }
        h1 {
            text-align: center;
            color: #572649;
            margin-bottom: 20px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #572649;
            font-weight: 600;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #572649;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
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
            transition: background-color 0.3s, transform 0.3s;
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
        @media (max-width: 400px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<?php include_once('include/header.php'); ?>

<form method="post" enctype="multipart/form-data">
    <h1>Add Package</h1>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" required accept="image/png, image/jpg, image/jpeg">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="price">Price:</label>
    <input type="number" step="0.01" id="price" name="price" required>

    <button type="submit" name="add_package">Add Package</button>
</form>

</body>
</html>
