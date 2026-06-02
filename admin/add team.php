<?php
include 'conn.php';

if (isset($_POST['add_team'])) {
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $description = $_POST['description'];

    // File upload path
    // Ensure to add code for moving the uploaded file to the desired directory

    $query = mysqli_query($conn, "INSERT INTO team (image, name, role, description) VALUES ('$image', '$name', '$role', '$description')");

    if ($query) {
        echo "<script>alert('Team member has been added.');</script>";
       /* echo "<script>window.location.href = 'team.php'</script>";*/
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
    <title>Add Team Member</title>
    <link rel="stylesheet" type="text/css" href="css/header.css"> <!-- Link to your existing CSS -->
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
            color: #562749;
            margin-bottom: 20px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #562749;
            font-weight: 600;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #562749;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #562749;
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
         <h1>Add Team Member</h1>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required accept="image/png, image/jpg, image/jpeg">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit" name="add_team">Add Team Member</button>
    </form>

    <?php if (isset($error)) { echo '<div class="message error"><p>' . $error . '</p></div>'; } ?>
    <?php if (isset($success)) { echo '<div class="message success"><p>' . $success . '</p></div>'; } ?>

</body>
</html>
