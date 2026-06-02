

<?php
include 'db_conn.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Set the redirect target to book.php if not logged in
    $_SESSION['redirect_to'] = 'from.php';
    header("Location: login.php");
    exit();
}

// Rest of your code for booking appointments, display, etc.



// Insert appointment details into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $beautician = $_POST['beautician'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO book (first_name, email, service, beautician, date, message)
            VALUES ('$first_name', '$email', '$service', '$beautician', '$date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>

<!DOCTYPE html>
<html>
<head>
  <title>Beauty Care Services</title>

	<link rel="stylesheet" type="text/css" href="css\header.css">
    <link rel="stylesheet" type="text/css" href="css\book.css">
  <style>
    
    

/* second header */


.header1 {
    position: relative;
    height: 300px;
    background: url("../beautycare/admin/images/book.jpg") no-repeat center center/cover; /* Background image */
}

.header-content {
    position: absolute;
   padding-top: 100px;
   padding-left: 450px;
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



.appointment-section {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    margin: 50px;
}

.form-container {
    background-color: #572642;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 450px;
    height: 520px;
    animation: fadeIn 1.5s ease-in-out;
}

.form-container h2 {
    margin-bottom: 20px;
    text-align: center;
    font-size: 30px;
    color : #e0bbd2;
}

.form-group {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.form-group input, .form-group select, .form-group textarea {
    width: 48%;
    height: 50px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #e0bbd2;
}

.form-group textarea {
    width: 100%;
    height: 100px;
}


button {
    width: 100%;
    padding: 10px;
    background-color:#e0bbd2;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    color : #572649;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #e0bbd2;
}

.map-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: slideIn 1.5s ease-in-out;

}




@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
 ::placeholder {
      color: #572649; /* Light pink color for placeholders */
      opacity: 1; /* Make sure the color is fully visible */
      font-size : 20px;
    }

    .form-group textarea::placeholder {
      color: #572649
      font-size: 20px;
    }

    .form-group option::placeholder {
      color: #572649
      font-size: 20px;
    }

   /* General styles for select elements */
.form-group select {
    width: 48%;
    height: 60px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #e0bbd2; /* Background color for select */
    color: #572649; /* Text color */
    font-size: 20px; /* Font size for select */
    appearance: none; /* Remove default arrow in some browsers */
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="#572649" d="M2 0L0 2h4z"/></svg>'); /* Custom arrow */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 10px;
}

/* Style for select options */
.form-group select option {
    font-size: 18px; /* Font size for option text */
    color: #572649; /* Option text color */
    background-color: #e0bbd2; /* Option background color */
    padding: 10px;
}

/* Add hover and focus states */
.form-group select:hover, .form-group select:focus {
    border-color: #572649; /* Border color when focused */
    outline: none; /* Remove default outline */
}

/* Placeholder style for select options */
.form-group select option[disabled] {
    color: #999; /* Light gray color for placeholder options */
}

.form-group input[type="date"]
{
     width: 100%;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #e0bbd2;
    color: #572649;
    font-size: 20px;
}



  </style>
</head>
<body>
<?php include_once('include/header.php'); ?> 

<section>
<div class="header1">
        <div class="header-bg">
            <div class="header-content">
              <center>  <h1>Book Appoinment </h1></center>
               
            </div>
        </div>
</div>


  <div class="banner">
    <div class="contain1">
  <a href="home.php">Home</a> &gt; Book a vist
  </div>
</div>



    <section class="appointment-section">
        <div class="form-container">
            <h2>Book Appointment</h2>
            <form method="post" action="">
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name" required>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <select name="service" required>
                        <option value="" disabled selected>Select Service</option>
                        <option value="haircut">Haircut</option>
                        <option value="facial">Facial</option>
                        <option value="massage">Massage</option>
                        <option value="haircut">Mani-Padi</option>
                        <option value="facial">Waxing</option>
                        <option value="massage">Makeup</option>
                        <option value="haircut">Spa</option>
                        <option value="facial">Threading</option>
                        <option value="massage">Mehndi</option>
                    </select>
                    <select name="beautician" required>
                        <option value="" disabled selected>Select Beautician</option>
                        <option value="beautician1">Priti bagsariya</option>
                        <option value="beautician2">Priyanshi Vekariya</option>
                        <option value="beautician1">Shruti Dudhat</option>
                        <option value="beautician2">Tanvi Yadav</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="date" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Write Comments" required></textarea>
                </div>
                <button type="submit">Submit Now</button>
            </form>
        </div>

        <div class="map-container">
            <h3>Location</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.9345931682065!2d72.83602847487303!3d22.314682585183095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85b1a8f8babb%3A0x516bb674e6c812!2sSudama%20Chowk!5e0!3m2!1sen!2sin!4v1631500901653!5m2!1sen!2sin" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>



</section>
 <?php include_once('include/footer.php'); ?> 



</body>
</html>