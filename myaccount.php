<?php

include_once('./includes/connect.php');

session_start();// start the session (if not already started)

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];

    $query = "SELECT * from user where user_id = '$user_id' ";

    $result = $conn->query($query);    

    $row = $result->fetch_assoc();

    $username = $row['username'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $birthday = $row['dob'];
    $mobile = $row['phone'];
    $gender = $row['gender'];
    $address = $row['address'];
   
}

else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/account.css">  
</head>
<body>
   <!-- Navigation bar  -->
   <div class="nav-bar"> 
        <div class ="nav-bar-left"> 
            <a href="index.php" >Home</a>
            <a href="about.php">About Us</a>
            <a href="services.html">Services</a>
            <a href="gallery.php" >Gallery</a>
            <a href="party.php" >Party</a>
            <a href="feedback.php" >Feedback</a>
            <a href="myaccount.php" class="nav-active">My Account</a>
            <a href="help.php">Help</a>
        </div>
        <div class = "nav-bar-right">
            <a href="login.php">Log In</a>
            <a href="register.php">Register</a>
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <!-- Body content-->
<div class="body-content">
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-header-left">
                <img src="./images/icons/profile-picture.png" alt="User Profile Picture">
            </div>
            <div class="profile-header-right">
                <h1><?php echo $username ?></h1>
                <p>User</p>
            </div>
        </div>
        <div class="profile-details">
            <h2>Account</h2>
            <ul>
                
                <li><strong>Name :</strong> <?php echo $fname." ".$lname ?></li>
                <li><strong>Address :</strong> <address><?php echo $address ?></address></li>
                <li><strong>Email :</strong> <?php echo $email?> </li>
                <li><strong>Moble No :</strong><?php echo $mobile?> </li>
                <li><strong>Date of Birth :</strong> <?php echo $birthday?></li>
                <li><strong>Gender :</strong> <?php echo $gender ?></li>
                <li><a href="logout.php"><button>Log Out</button></a></li>
            </ul>
        </div>
    </div>
</div>
  <!--Footer-->
  <div class="footer">
    <div class="footer-left">
        <!-- <p id="footer-left-heading">Contact Us</p> -->
            <div class="footer-left-address">
                <div id="footer-address-icon">
                    <img src="./images/icons/location-icon.png">
                </div>
                <div id="footer-address-text">
                    <p>Partyway Pvt Limited<br>No 365/A<br>Galle Road<br>Kollupitiya<br>Colombo<br>Sri Lanka</p>
                </div>
            </div>
            <div class="footer-left-email">
                <div id="footer-email-icon">
                    <img src="./images/icons/email-icon.png">
                </div>
                <div id="footer-email-text">
                    <p>info@partyway.com</p>
                </div>
            </div>
    </div>
    <div class="footer-right">
        <ul class="footer-right-list">
            <li>Our Story</li>
            <li>Gallery</li>
            <li>Event Guidelines</li>
            <li>Terms and Conditions</li>
        </ul>
    </div>
</div>
<!-- End of footer -->


   
</body>
</html>