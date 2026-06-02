<?php
include 'db_conn.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>


    <!--link rel="stylesheet" type="text/css" href="css\gallery.css"-->
  
  <style type="text/css">
      

.gallery{
    min-height: 100vh;
  
    padding-bottom: 100px;
}

.gallery .controls{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:20px 0;
    list-style: none;


}

.gallery .controls .buttons{
    height:40px;
    width: 120px;
    background-color:#e0bbd2;
    color:#572649;
    border-color: #572649;
    font-size: 20px;
    line-height: 40px;
    cursor: pointer;
    margin:20px;
    box-shadow: 0 3px 5px rgba(0,0,0,.3);
    text-align: center;
    border: 2px solid;
 
}

.gallery .controls .buttons.active{
    background:#e0bbd2;
    color:#572649;
}

.gallery .image-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
   }

.gallery .image-container .image{
    height:250px;
    width: 300px;
    overflow: hidden;
    border:8px solid #572649;
    box-shadow: 0 3px 5px rgba(0,0,0,.3);
    margin: 20px;
}

.gallery .image-container .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
}

.gallery .image-container .image:hover img{
    transform: scale(1.4);
}

.h1tag{
  font-size: 30px;
  font-family: cursive; 
  color:#572649 ;
  padding-top: 30px;
}


/* second header */

.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/gallery.jpg") no-repeat center center/cover; /* Background image */
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

  <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
</head>
<body>
<?php include_once('include/header.php'); ?> 


<section>

    <section>
 <div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>Some Images From Our Salons Gallery</h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Gallery
  </div>
</div>


 <center> <h1 class="h1tag"></h1></center>

<div class="gallery">
<!-- buttons-->
    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="nail-arat">Nail-Arat</li>
        <li class="buttons" data-filter="hair-style">hair style</li>
        <li class="buttons" data-filter="makup">Makup </li>
        <li class="buttons" data-filter="mahendi">Mehndi</li>
        <li class="buttons" data-filter="bridal">Bridal</li>
    </ul>

    <div class="image-container">
<!-- nail -arat -->
        <a href= "\img\nail art\IMG-20240424-WA0038.jpg" class="image nail-arat">
            <img src= "img\nail art\IMG-20240424-WA0038.jpg"alt="">
        </a>

        <a href="img\nail art\IMG-20240424-WA0031.jpg" class= "image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0031.jpg" alt="">
        </a>

        <a href="img\nail art\IMG-20240424-WA0043.jpg" class="image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0043.jpg" alt="">
        </a>

        <a href= "img\nail art\IMG-20240424-WA0045.jpg" class="image nail-arat">
            <img src= "img\nail art\IMG-20240424-WA0045.jpg"alt="">

        <a href="img\nail art\IMG-20240424-WA0051.jpg"  class="image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0051.jpg" alt=""></a>

        <a href="img\nail art\IMG-20240424-WA0027.jpg"  class="image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0027.jpg" alt=""></a>

        <a href="img\nail art\IMG-20240424-WA0035.jpg"class="image nail-arat">
            <img src= "img\nail art\IMG-20240424-WA0035.jpg"alt=""></a>

        <a href= "img\nail art\IMG-20240424-WA0028.jpg" class="image nail-arat">
            <img src= "img\nail art\IMG-20240424-WA0028.jpg"alt=""></a>


        <a href= "img\nail art\IMG-20240424-WA0033.jpg" class="image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0033.jpg" alt="">
        </a>


        <a href= "img\nail art\IMG-20240424-WA0036.jpg" class="image nail-arat">
            <img src="img\nail art\IMG-20240424-WA0036.jpg" alt="">
        </a>

            <!-- hair style -->
        <a href="img\hair style\IMG-20240523-WA0016.jpg"class="image hair-style">
            <img src="img\hair style\IMG-20240523-WA0016.jpg" alt="">
        </a>
        <a href="img\hair style\WhatsApp Image 2024-05-08 at 22.22.09_1d468691.jpg" class="image hair-style">
            <img src="img\hair style\WhatsApp Image 2024-05-08 at 22.22.09_1d468691.jpg" alt="">
        </a>
         <a href="img\hair style\IMG-20240523-WA0013.jpg" class="image hair-style">
            <img src="img\hair style\IMG-20240523-WA0013.jpg" alt="">
        </a>
         <a href="img\hair style\IMG-20240523-WA0014.jpg" class="image hair-style">
            <img src="img\hair style\IMG-20240523-WA0014.jpg" alt="">
        </a>
         <a href="img\hair style\IMG-20240523-WA0015.jpg" class="image hair-style">
            <img src="img\hair style\IMG-20240523-WA0015.jpg" alt="">
        </a>
         <a href="img\hair style\images (1).jpeg" class="image hair-style">
            <img src="img\hair style\images (1).jpeg" alt="">
        </a>
         <a href="img\hair style\images (2).jpeg" class="image hair-style">
            <img src="img\hair style\images (2).jpeg" alt="">
        </a>
         <a href="img\hair style\images.jpeg" class="image hair-style">
            <img src="img\hair style\images.jpeg" alt="">
        </a>
        <!-- makup-->

        <a href= "img\mak up\download (1).jpeg"class="image makup">
            <img src="img\mak up\download (1).jpeg" alt="">
        </a>
        <a href= "img\mak up\download (2).jpeg"class="image makup">
            <img src="img\mak up\download (2).jpeg" alt="">
        </a>
        <a href= "img\mak up\images (1).jpeg"class="image makup">
            <img src="img\mak up\images (1).jpeg" alt="">
        </a>
        <a href="img\mak up\images (3).jpeg" class="image makup">
            <img src= "img\mak up\images (3).jpeg"alt="">
        </a>
        <a href= "img\mak up\download (3).jpeg"class="image makup">
            <img src= "img\mak up\download (3).jpeg"alt="">
        </a>
        <a href="img\mak up\k.jpg" class="image makup">
            <img src="img\mak up\k.jpg" alt="">
        </a>
        <a href="img\mak up\download.jpeg" class="image makup">
            <img src="img\mak up\download.jpeg" alt="">
        </a>
        <a href= "img\mak up\images.jpeg" class="image makup">
            <img src= "img\mak up\images.jpeg"alt="">
        </a>

<!-- mehandi -->

        <a href="img\mehandi\IMG-20240424-WA0031.jpg" class="image mahendi">
            <img src= "img\mehandi\IMG-20240424-WA0031.jpg"alt="">
        </a>
        <a href="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.47_0a3bf920.jpg" class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.47_0a3bf920.jpg" alt="">
        </a>
        <a href="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.51_775a3f21.jpg" class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.51_775a3f21.jpg" alt="">
        </a>
        <a href="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.58_0e5db679.jpg" class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.51.58_0e5db679.jpg" alt="">
        </a>
        <a href= "img\mehandi\WhatsApp Image 2024-05-06 at 18.52.04_3c5378c8.jpg"class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.52.04_3c5378c8.jpg" alt="">
        </a>
        <a href="img\mehandi\WhatsApp Image 2024-05-06 at 18.52.04_6c2d70dc.jpg" class="image mahendi">
            <img src= "img\mehandi\WhatsApp Image 2024-05-06 at 18.52.04_6c2d70dc.jpg"alt="">
        </a>
        <a href= "img\mehandi\WhatsApp Image 2024-05-06 at 18.52.10_f632ca30.jpg"class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.52.10_f632ca30.jpg" alt="">
        </a>
        <a href="img\mehandi\WhatsApp Image 2024-05-06 at 18.52.11_bc0f3bc5.jpg" class="image mahendi">
            <img src="img\mehandi\WhatsApp Image 2024-05-06 at 18.52.11_bc0f3bc5.jpg" alt="">
        </a>
<!-- bridal -->
        <a href="img\bridal\WhatsApp Image 2024-05-23 at 16.49.07_48534701.jpg" class="image bridal">
            <img src="img\bridal\WhatsApp Image 2024-05-23 at 16.49.07_48534701.jpg"  alt="">
        </a>
        <a href="img\bridal\IMG-20240523-WA0011.jpg" class="image bridal">
            <img src="img\bridal\IMG-20240523-WA0011.jpg" alt="">
        </a>
         <!--a href="D:\Beauty care\img\bridal\VID-20240523-WA0002.mp4" class="image bridal">
            <video src="D:\Beauty care\img\bridal\VID-20240523-WA0002.mp4" ></video-->

        <a href="img\bridal\IMG-20240509-WA0004.jpg" class="image bridal">
            <img src="img\bridal\IMG-20240509-WA0004.jpg" alt="">
        </a>
        <a href="img\bridal\WhatsApp Image 2024-05-23 at 16.49.07_081c1fc7.jpg"class="image bridal">
            <img src="img\bridal\WhatsApp Image 2024-05-23 at 16.49.07_081c1fc7.jpg" alt="">
        </a>
         <a href="img\bridal\IMG-20240523-WA0006.jpg" class="image bridal">
            <img  src="img\bridal\IMG-20240523-WA0006.jpg"  alt="">
        </a>
         <!--a href="D:\Beauty care\img\bridal\VID-20240523-WA0004.mp4" class="image bridal">
            <video src="D:\Beauty care\img\bridal\VID-20240523-WA0004.mp4" ></video-->

         <a href="img\bridal\IMG-20240523-WA0005.jpg" class="image bridal">
            <img src="img\bridal\IMG-20240523-WA0005.jpg" alt="">
        </a>
         <a href="img\bridal\IMG-20240523-WA0010.jpg" class="image bridal">
            <img src = "img\bridal\IMG-20240523-WA0010.jpg" alt="">
        </a>

        <!--a href="D:\Beauty care\img\bridal\VID-20240523-WA0005.mp4" class="image bridal">
            <video src="D:\Beauty care\img\bridal\VID-20240523-WA0005.mp4" ></video-->


    </div>

</div>


</section>
<?php include_once('include/footer.php'); ?> 



</body>
</html>