<?php
include 'conn.php';

// Fetch the existing team member's data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM team WHERE id='$id'");
    $team_member = mysqli_fetch_assoc($query);

    // Check if the team member exists
    if (!$team_member) {
        echo "<script>alert('Team member not found.');</script>";
       /* echo "<script>window.location.href = 'view_team.php';</script>";
        exit;*/
    }
}

// Handle update
if (isset($_POST['update_team'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $description = $_POST['description'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    if ($image) {
        // Update image if a new file is uploaded
        $query = mysqli_query($conn, "UPDATE team SET image='$image', name='$name', role='$role', description='$description' WHERE id='$id'");
        // Move the uploaded file to the desired directory
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
    } else {
        // If no new image, update other fields only
        $query = mysqli_query($conn, "UPDATE team SET name='$name', role='$role', description='$description' WHERE id='$id'");
    }

    if ($query) {
        echo "<script>alert('Team member has been updated.');</script>";
       /* echo "<script>window.location.href = 'view_team.php';</script>";*/
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
    <title>Update Team Member</title>
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
        <h1>Update Team Member</h1>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/png, image/jpg, image/jpeg">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $team_member['name']; ?>" required>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" value="<?php echo $team_member['role']; ?>" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $team_member['description']; ?></textarea>

        <button type="submit" name="update_team">Update Team Member</button>
    </form>

</body>
</html>
