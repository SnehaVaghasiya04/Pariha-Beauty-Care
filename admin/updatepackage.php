<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM packages WHERE id = $id");
    $package = mysqli_fetch_assoc($result);
}

if (isset($_POST['update_package'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    // Update query
    $query = "UPDATE packages SET name='$name', description='$description', price='$price' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Package has been updated.');</script>"; 
      /*  echo "<script>window.location.href = 'view_packages.php'</script>";  */ 
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
    <title>Update Package</title>
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
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 800px;
            margin-top: 40px;
            margin-left: 250px;
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
            color: #57649;
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
            background-color:#572649;
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
    <h1>Update Package</h1>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/png, image/jpg, image/jpeg">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($package['name']); ?>">

    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?php echo htmlspecialchars($package['description']); ?></textarea>

    <label for="price">Price:</label>
    <input type="number" step="0.01" id="price" name="price" required value="<?php echo htmlspecialchars($package['price']); ?>">

    <button type="submit" name="update_package">Update Package</button>
</form>

</body>
</html>
