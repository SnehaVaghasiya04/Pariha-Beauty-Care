<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Care Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    /* Add your CSS styles here */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #e0bbd2;
    }

    .profile-bar {
        width: 100%;
        height: 60px;
        background-color: #572649;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 20px;
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-bar .profile {
        display: flex;
        align-items: center;
    }

   

    .profile-bar .profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile-bar .profile span {
        font-size: 18px;
        margin-right: 10px;
    }

    .profile-bar .profile i {
        font-size: 20px;
        margin-right: 10px;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background-color: #572649;
        position: fixed;
        top: 60px;
        left: 0;
        padding-top: 20px;
        color: #fff;
        transition: 0.3s;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 22px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 15px;
        text-align: left;
        position: relative;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        display: flex;
        align-items: center;
        transition: 0.3s;
    }

    .sidebar ul li a:hover {
        background-color: #e0bbd2;
        padding-left: 10px;
    }

    .sidebar ul li a i {
        margin-right: 15px;
    }

    .sidebar ul li a .arrow {
        margin-left: auto;
        transition: transform 0.3s ease;
    }

    .dropdown-menu {
        display: none;
        background-color: #572649;
        margin-left: 20px;
    }

    .dropdown-menu li {
        padding-left: 20px;
    }

    .sidebar ul li:hover .dropdown-menu {
        display: block;

    }

    .sidebar ul li:hover .arrow {
        transform: rotate(90deg);
    }

    .content {
        margin-left: 250px;
        padding: 20px;
        margin-top: 60px;
        animation: fadeIn 1s ease-in-out;
    }

    .content h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .dashboard-item:nth-child(1) {
        background-color: #ffebcc; /* Light orange */
    }

    .dashboard-item:nth-child(2) {
        background-color: #d1e7ff; /* Light blue */
    }

    .dashboard-item:nth-child(3) {
        background-color: #d4edda; /* Light green */
    }

    .dashboard-item:nth-child(4) {
        background-color: #f8d7da; /* Light red */
    }
    
         .profile-bar .logo {
        
      
     
          width: 50px;
    height: 50px;
    border-radius: 50%;

    
    }

   
</style>
<body>
    <div class="profile-bar">
          <img src="\beautycare\admin\images\882d5199-b22d-4bed-9893-0701fecdf548.jpeg" alt="Logo" class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="profile">
            <i class="fas fa-user"></i> 
            <span>Admin</span>&nbsp;&nbsp;
            <a href="adminlogin.php" style="color: white;"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <div class="sidebar">
        <h2>Admin Module</h2>
        <ul>
            <li><a href="\beautycare\admin\dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li>
                <a href="#"><i class="fas fa-tasks"></i> Services <i class="fas fa-chevron-right arrow"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="\beautycare\admin\addservices1.php"><i class="fas fa-plus"></i> Add Service</a></li>
                    <li><a href="\beautycare\admin\viewservices.php"><i class="fas fa-tasks"></i> Manage Services</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fas fa-box"></i> Packages <i class="fas fa-chevron-right arrow"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="\beautycare\admin\addpackage.php"><i class="fas fa-plus"></i> Add Package</a></li>
                    <li><a href="\beautycare\admin\view package.php"><i class="fas fa-box"></i> Manage Packages</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fas fa-users"></i> Team <i class="fas fa-chevron-right arrow"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="\beautycare\admin\add team.php"><i class="fas fa-plus"></i> Add Team Member</a></li>
                    <li><a href="\beautycare\admin\viewteam.php"><i class="fas fa-users"></i> Manage Team</a></li>
                </ul>
            </li>
            <li><a href="\beautycare\admin\viewbook.php"><i class="fas fa-calendar-check"></i> Appointments</a></li>
            <li><a href="\beautycare\admin\viewcontact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>
</body>
</html>
