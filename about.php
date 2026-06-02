<?php
include 'db_conn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

	<link rel="stylesheet" type="text/css" href="css\header.css">
  
 <link rel="stylesheet" type="text/css" href="css\about.css">
</head>
<style>
 .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }

        .section {
            width: 45%;
            color :#572649;
            padding: 0px;
            text-align: center;
        }


        h1 {
            color: #572649;
            font-size: 30px;
        }

 .container       ul {
            list-style: none;
            padding: 0;
        }

 .container       li {
            margin-bottom: 10px;
        }

  .container      img {
            width: 100%;
            height: 450px;
        }
 .container   h2{
        font-size: 40px;
        color: #572649;
    }

 .container   p{
        font-size: 20px;

    }

.head1 h2{
    font-size: 40px;
}



.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/abouts.jpg") no-repeat center center/cover; /* Background image */
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
        color: white;
    }

    .contain1 a
    {
        color: white;
        text-decoration: none;
    }
    </style>
<body>
<?php include_once('include/header.php'); ?> 


<section>
<!--div class="about1"><section class="about" id="about">

    <h1 class="heading">About us</h1>

    <div class="row" >

        <div class="image">
            <img src="img\about\3.webp" alt="">
            <img src="img\about\2.webp" alt="">
        </div>

        <div class="content">
            <h3 class="title">We are a group of stylists</h3>
            <p>Beauty Expert is a specialist clinic that offers a range of beauty services to help you look and feel your best. Our talented team of professionals is dedicated to providing personalized and quality care for each client.</p>        
            <p>We offer a variety of services including hair styling, coloring , spa , and treatments. Our salon is equipped with the latest tools and products to ensure you get the best results. Come visit us and experience the best in beauty care.</p>
            
            <div class="icons-container">
                <div class="icons">
                   <img src="img\about\blog3.jpg" alt="">
                   <h3>HAIR STYLE</h3>
                </div>
                <div class="icons">
                   <img src="img\about\service-img-4.jpg" alt="">
                   <h3>FACE CARE</h3>
                </div>
                <div class="icons">
                   <img src="img\service\threading.jpg" alt="">
                   <h3>SPA</h3>
                </div>
             </div>
        </div>

    </div>

</section>
</div>


</div>
</section-->
<section>
    <section>
 <div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>About us</h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Services
  </div>
</div>

 <div class="container">

            <div class="section">
                <img src="img\images\b2.jpg" alt="Beauty Products">
            </div>
            <div class="section">
                <h1>Beauty and success starts here</h1>
                <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up </p>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section">
                <h2>We are a group of stylists</h2>
                <p>
Beauty Expert is a specialist clinic that offers a range of beauty services to help you look and feel your best. Our talented team of professionals is dedicated to providing personalized and quality care for each client.

We offer a variety of services including hair styling, coloring , spa , and treatments. Our salon is equipped with the latest tools and products to ensure you get the best results. Come visit us and experience the best in beauty care.</p>
            </div>
            <div class="section">
                <img src="img\about\1.jpg" alt="More Beauty Products">
            </div>
        </div>
    
</section>
 <?php include_once('include/footer.php'); ?> 


</body>
</html>