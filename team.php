<?php
include 'db_conn.php';

// Query to retrieve team members from database
$sql = "SELECT * FROM team";
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
  die("Query failed: " . $conn->error);
}

// Create an array to store team members
$team_members = array();

// Loop through results and store in array
while ($row = $result->fetch_assoc()) {
  $team_members[] = $row;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Meet Our Team - Beauty Care</title>

    <link rel="stylesheet" type="text/css" href="css/header.css">
  <style>
    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .team-member {
      width: 450px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      transition: transform 0.3s ease;
      background-color: #572649;
      color: #fff;
    }

    .team-member:hover {
      transform: scale(1.05);
    }

    .team-member img {
      width: 300px;
      height: 300px;
      border-radius: 30%;
      object-fit: cover;
    }

    h2, p {
      margin: 10px 0;
    }
    .d3
    {
      font-size: 30px;
      color: #572649;
    }

    /* second header */

    .header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/team3.jpg") no-repeat center center/cover; /* Background image */
}

.header-content {
    position: absolute;
   padding-top: 100px;
   padding-left: 400px;
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
              <center>  <h1>Meet Our Beautician</h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Beautician
  </div>
</div>


<div class="team-container">

  <?php
    // Loop through the team members array and display each team member
    foreach ($team_members as $member) {
      echo '<div class="team-member">';
      echo '<img src="admin/images/' . $member['image'] . '" alt="' . $member['name'] . '">';
      echo '<h2>' . $member['name'] . '</h2>';
      echo '<p><strong>Role: ' . $member['role'] . '</strong></p>';
      echo '<p>' . $member['description'] . '</p>';
      echo '</div>';
    }
  ?>

</div>
</section>

<?php include_once('include/footer.php'); ?> 


</body>
</html>
