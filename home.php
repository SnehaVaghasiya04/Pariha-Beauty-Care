<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
    <title></title>
    <style>
        /* Button styles */
        .c1 {
            background-color: #28a745;
            color: #333;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
            font-size: 20px;
            font-family: cursive;
        }

        .c1:hover {
            background-color: #218838;
        }

        /* Logout button style */
        .logout-btn {
            background-color: #dc3545; /* Red background */
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            padding: 10px 15px; /* Padding for the button */
            border-radius: 5px; /* Rounded corners */
            font-size: 18px; /* Font size */
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }

        .logout-btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Home section */
        .hero-section {
            background-image: url("../beautycare/admin/images/first.jpg");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .content {
            margin-left: 5%;
            color: black;
        }

        .content h3 {
            font-size: 1.5rem;
            font-weight: normal;
        }

        .content h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin: 10px 0;
        }

        .btn {
            background-color: #ff4081;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 30px;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff66a3;
        }

        .container {
            display: flex;
            align-items: center; /* Vertically align content */
            justify-content: space-around;
        }

        .text-container {
            margin-right: 20px; /* Add space between text and images */
        }

        img {
            width: 350px; /* Adjust image width as needed */
            height: 300px;
        }

        .container h1 {
            font-size: 30px;
        }

        p {
            font-size: 20px;
        }

        .hero-section1 {
            background-image: url("../beautycare/admin/images/back2.jpeg");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .content1 {
            margin-left: 5%;
            color: black;
        }

        .content1 h1 {
            font-size: 40px;
            line-height: 1.2;
            margin: 10px 0;
        }

        .container2 {
            display: flex;
            justify-content: space-between;
        }

        .image1 img {
            padding-top: 20px;
            padding: 30px;
            width: 550px;
            height: 450px;
        }

        .content2 {
            width: 600px;
        }

        p {
            margin-bottom: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 0.5em;
        }
    </style>
</head>
<body>
<?php include_once('include/header.php'); ?>

<section>
    
    <div class="hero-section">
        <div class="content">
            <h3>Creative Styling</h3>
            <h1>Beauty Salon <br> Fashion For Woman</h1>

            <?php
            if (isset($_SESSION['username'])) {
                // If the user is logged in, show profile and logout
                echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";
               
                echo '<a href="logout.php" class="btn"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>';
            } else {
                // If the user is not logged in, show login and registration buttons
                echo '<a href="\beautycare\register.php" class="btn"><i class="fas fa-user-plus"></i>&nbsp;Registration</a>';
                echo '<a href="\beautycare\login.php" class="btn"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>';
            }
            ?>
        </div>
    </div>
   
    <div class="container">
        <div class="text-container">
            <h1>Our Salon is Most Popular</h1>
            <p>Eline Hair and Beauty Salon <br>Offers - Beauty Services</p>
            <a href="\beautycare\about.php" class="btn">Read more</a>
        </div>
        <img src="img\img-insta\foto6.png" alt="Woman with towel"> 
        <img src="img\images\12.jpg" alt="Barber shop">
    </div>

    <div class="hero-section1">
        <div class="content1">
            <h1>Come experience the <br>secrets of relaxation</h1>
            <p>Best Beauty expert at your home and provides beauty <br> salon at home. Home Salon provides well-trained beauty<br> professionals for beauty services at home including Facial,<br> Clean Up, Bleach, Waxing, Pedicure, Manicure, etc.</p>
            <a href="\beautycare\book.php" class="btn">Get An Appointment</a>
        </div>
    </div>

    <div class="container2">
        <div class="image1">
            <img src="img\about\2.webp" alt="Hair Salon">
        </div>
        <div class="content2">
            <h1>Clean and Recommended Hair Salon</h1>
            <p>Their array of beauty parlour services include haircuts, hair spas, colouring, texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.</p>
            <ul>
                <li>✔ Back Massage</li>
                <li>✔ Hair Treatment</li>
                <li>✔ Face Massage</li>
                <li>✔ Blow Dry & Curl</li>
                <li>✔ Skin Care</li>
                <li>✔ Advance Hair Color</li>
            </ul>
        </div>
    </div>
</section>

<?php include_once('include/footer.php'); ?>

</body>
</html>
