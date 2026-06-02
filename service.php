

<?php
include 'db_conn.php';


// Query to retrieve services from database
$sql = "SELECT * FROM services1";
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
  die("Query failed: " . $conn->error);
}

// Create an array to store services
$services = array();

// Loop through results and store in array
while ($row = $result->fetch_assoc()) {
  $services[] = $row;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

	<link rel="stylesheet" type="text/css" href="css\header.css">
  <style>


    .service-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;

    }

    .service {
      width: 350px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      background-color: #572647;
      color: #fff;
    }

    .service img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
    }

    .d1
    {
      color: #572649;
      font-size: 30px;
    }

    /* second header */



.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/services1.jpg") no-repeat center center/cover; /* Background image */
}

.header-content {
    position: absolute;
   padding-top: 100px;
   padding-left: 500px;
    left: 10px;
    color: #572649;
}

.header1 h1 {
    font-size: 3em;
    margin: 0;
}

.breadcrumb {
    font-size: 1.2em;
}

.breadcrumb a {
    color: pink;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}


 .banner {
      
      background-size: cover;
      background-position: center;
      height: 60px;
      background-color: #572649;
      color: white;

    }
    .contain1
    {
        font-size: 20px;
        padding: 10px;
        padding-left: 500px;
    }

    .contain1 a
    {
        color: white;
        text-decoration: none;
    }
  </style>
</head>
<body>
 <?php include_once('include/header.php'); ?>

<section>
 <div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>Our services</h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Services
  </div>
</div>


<div class="service-container">


  <?php
    // Loop through the services array and display each service
    foreach ($services as $service) {
      echo '<div class="service">';
      echo '<img src="admin/images/' . $service['image'] . '" alt="' . 'product' . '">';
      echo '<h2>' . $service['name'] . '</h2>';
      echo '<p>' . $service['description'] . '</p>';
      echo '<p><strong>' . 'cost of services ₹ &nbsp;'.$service['price'] . '</strong></p>';
      echo '</div>';
    }
  ?>

</div>
</section>
 <?php include_once('include/footer.php'); ?>


</body>
</html>