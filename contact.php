

<?php
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO contact (first_name, last_name, phone, email, message) 
            VALUES ('$first_name', '$last_name', '$phone', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

	<link rel="stylesheet" type="text/css" href="css\header.css">
    <link rel="stylesheet" type="text/css" href="css\conact.css">
<style>


/* second header */


.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/contact us.jpg") no-repeat center center/cover; /* Background image */
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
/* Contact Section */

.contact-section {
    display: flex;
    justify-content: space-between;
    padding: 0px 40px;
    background-color: #e0bbd2;
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 45%; /* Set width to make sure it takes up only half of the container */
}

.contact-form {
    width: 45%; /* Set width to make sure it takes up the other half */
    animation: fadeIn 1.5s ease-out forwards;
    padding: 50px;
    padding-top: 20px;
}

.contact-info .info-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background-color: #572649;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: slideIn 1s ease-out forwards;
    color: white;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    gap: 15px;
}

.form-group input, .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #572649;
}

.form-group textarea {
    resize: vertical;
    height: 150px;
}

.btn {
    padding: 12px 30px;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
    background-color: #572649;
    color: #e0bbd2;
}

.btn:hover {
    background-color: white;
}

/* Animation for fade-in effect */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateX(-50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}



</style>
</head>
<body>
<?php include_once('include/header.php'); ?> 


<section>



 <div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>Contact Us</h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Contact
  </div>
</div>

    <section class="contact-section">
        <div class="contact-info">
            <div class="info-box">
                <i class="icon">📞</i>
                <h3>Call Us</h3>
                <p>+9313261642</p>
            </div>
            <div class="info-box">
                <i class="icon">✉️</i>
                <h3>Email Us</h3>
                <p>sneha@gmail.com</p>
            </div>
            <div class="info-box">
                <i class="icon">📍</i>
                <h3>Address</h3>
                <p>220,chhitunager soc , punamagame to bombay market surat. 395010</p>
            </div>
            <div class="info-box">
                <i class="icon">⏰</i>
                <h3>Time</h3>
                <p>8:00 am to 8:00 pm</p>
            </div>
        </div>

        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

</section>
<?php include_once('include/footer.php'); ?> 



</body>
</html>