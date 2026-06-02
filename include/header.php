<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header</title>
  <link rel="stylesheet" type="text/css" href="css\header.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: contain;
        }
        .profile-section {
            display: flex;
            align-items: center;
        }
        .profile-icon {
            margin-left: 10px;
            background-color: #572649;
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
        .profile-icon:hover {
            background-color: #704060;
        }
    </style>
</head>
<body>
  <header class="header">
        <div class="header-logo">
           <img src="\beautycare\admin\images\882d5199-b22d-4bed-9893-0701fecdf548.jpeg" alt="Logo" class="logo">
           <h2>Pariha Beauty Care</h2>
        </div>
        <nav class="navbar">
            <ul class="navbar-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="book.php">Book A Visit</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="profile-section">
                <?php
               
                    echo '<a href="profile.php" class="profile-icon"><i class="fas fa-user"></i></a>';
                
                ?>
            </div>
        </nav>
    </header>
</body>
</html>
