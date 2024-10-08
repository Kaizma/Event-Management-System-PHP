<?php
include_once('./includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Directly get POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Construct the SQL query
    $insertSQL = "INSERT INTO help(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    // Execute the query
    if ($conn->query($insertSQL) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Help</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/helppage.css">  
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
            <a href="myaccount.php">My Account</a>
            <a href="help.php" class="nav-active">Help</a>
        </div>
        <div class = "nav-bar-right">
            <a href="login.php">Log In</a>
            <a href="register.php">Register</a>
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <!-- Body content-->
<div class="body-content">

<section id="faqs">
  <h2>Frequently Asked Questions</h2>
  <div class="faq">
    <h3>What are your hours of operation?</h3>
    <p>We are open from 9 AM to 5 PM, Monday to Friday.</p>
  </div>
  <div class="faq">
    <h3>How can I contact you?</h3>
    <p>You can contact us by phone at 123-456-7890 or by email at info@example.com.</p>
  </div>
  <div class="faq">
    <h3>Do you offer shipping?</h3>
    <p>Yes, we offer shipping to all locations within Sri Lanka. Shipping rates vary depending on the location and weight of the order.</p>
  </div>
</section>
<section id="help-form">
  <h2>Need Help?</h2>
  <form action="help.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <button type="submit">Send</button>
  </form>
</section>




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