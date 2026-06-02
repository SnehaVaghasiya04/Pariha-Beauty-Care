

<?php
include 'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

	<link rel="stylesheet" type="text/css" href="css\header.css">
    <link rel="stylesheet" type="text/css" href="css\review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
      .div1 {
      font-family:cursive;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
  .container {
      background-color: #e0bbd2;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 1200px;
   
    }

    

    .reviews {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 30px;

    }

    .review {
      background-color: #572649;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      width: 300px;
      color: #e0bbd2;
    }

    .review img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .review h3 {
      margin-top: 0;
    }

    .review p {
      font-size: 14px;
      line-height: 1.5;
    }

    .stars i{
    font-size: 1.5rem;
    color:white;
}




/* second header */


.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/review.jpg") no-repeat center center/cover; /* Background image */
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
    color :#572649
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
              <center>  <h1>Review </h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Review
  </div>
</div>
    <div class="div1">
<div class="container">

    <div class="reviews">
      <div class="review">
        <img src="img\bridal\IMG-20240519-WA0027.jpg" alt="Monali Vaghasiya">
        <h3>Monali Vaghasiya</h3>
        <p>I Received A Tension Free Good Service From PARIHA BEAUTY CARE. Booking Was Through WhatsApp And The Staff Were Courteous. Overall Seamless Experience At The Comfort Of My Home. I Will Definitley Recommend Their Service For Others Too.</p>
         <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

      <div class="review">
        <img src="img\bridal\WhatsApp Image 2024-05-23 at 16.49.07_48534701.jpg" alt="Bansi Sojitra">
        <h3>Bansi Sojitra</h3>
        <p>I Hed Amazing Experience, The So Relaxing, Must Visit Place I Will Highly Recommend It To Everyonr. Her Staff Memebers Are Also So Friendly And Nice</p>
        <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
      </div>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
      <div class="review">
        <img src="img\bridal\IMG-20240523-WA0008.jpg" alt="Riddhi Thummar">
        <h3>Riddhi Thummar</h3>
        <p>A Happy Client. Your Go To Salone And Its No Exaggeration! The Beautician Came From Home Salone Was Very Gental, Patient And Gave Required Time For Each Of The Service. After The Session I Felt Fully Recharged And Pampered. </p>
        <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
      </div>
    </div>
  </div>
</div>
</section>
    <?php include_once('include/footer.php'); ?>


</body>
</html>