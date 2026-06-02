

<?php
include 'db_conn.php';

// Query to retrieve packages from the database
$sql = "SELECT * FROM packages";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

  <link rel="stylesheet" type="text/css" href="css\header.css">
  <style>
     .package-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .package {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            text-align: center;
            width: 300px;
            background-color: #572649;
            color: #fff;
        }

        .package img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .d2
        {
            color: #572649;
            font-size: 30px;
            text-align: center;
        }

        /* second header */


.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/package2.jpg") no-repeat center center/cover; /* Background image */
}

.header-content {
    position: absolute;
   padding-top: 100px;
   padding-left: 250px;
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

    <section>
 <div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>Some Amazing Packages For You  </h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Packages
  </div>
</div>

    <div class="package-container">
        <?php while ($package = $result->fetch_assoc()): ?>
            <div class="package">
                <img src="admin/images/<?php echo $package['image']; ?>" alt="<?php echo $package['name']; ?>">
                <h2><?php echo $package['name']; ?></h2>
                <p><?php echo $package['description']; ?></p>
                <p><strong>Price: ₹<?php echo $package['price']; ?></strong></p>
            </div>
        <?php endwhile; ?>
    </div>

</section>
 <?php include_once('include/footer.php'); ?>
</body>
</html>