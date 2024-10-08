<?php 
include_once('./includes/connect.php');

session_start(); // Start the session (if not already started)
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $partyDate = $_POST["partyDate"];
        $partyType = $_POST["partyType"];
        $overallExperience = $_POST["overallExperience"];
        $foodDrinks = $_POST["foodDrinks"];
        $entertainment = $_POST["entertainment"];
        $decorations = $_POST["decorations"];
        $suggestions = $_POST["suggestions"];
        $futureParties = $_POST["futureParties"];
        $additionalComments = $_POST["additionalComments"];
     
    
        $insertSQL = "INSERT INTO feedback (user_id, date , type , experience ,food , entertaintment , decoration ,suggestion , future_party,comment)
                          VALUES ('$user_id', '$partyDate', '$partyType', '$overallExperience', '$foodDrinks','$entertainment','$decorations','$suggestions','$futureParties','$additionalComments')";
    
            if ($conn->query($insertSQL) === TRUE) {
                
    
            } else {
                
            }
    
            // Close the database connection
            
    }
    else {
       
    }

    
    
} else {
    header('Location:login.php');
};


?>
<!DOCTYPE html>
<html>

<head>
    <title>Give Feedbacks</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/feedback.css">  
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
            <a href="feedback.php" class="nav-active">Feedback</a>
            <a href="myaccount.php">My Account</a>
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
    <!-- Feedback Form-->
    <div class="form-container">
    <h1 id="form-heading">Party Feedback Form</h1>
    <form id="feedback-form" action="feedback.php" method="post">
     
    <div class="form-section">
        <label for="partyDate">Date of the Party:</label>
        <input type="date" id="partyDate" name="partyDate" required max="<?php echo date('Y-m-d'); ?>">

        <label for="partyType">Type of Party:</label>
        <select id="partyType" name="partyType" required>
                            <option value="Wedding">Wedding</option>
                            <option value="Anniversary">Anniversary</option>
                            <option value="Birthday Party">Birthday Party</option>
                            <option value="Gender Reveal">Gender Reveal</option>
                            <option value="Get Together">Get Together</option>
                            <option value="Formal Gathering">Formal Gathering</option>
                            <option value="Other">Other</option>
        </select>
        </div>
        
        <div class="form-section" id="overall-experience">
        <label for="overallExperience">Overall Experience:</label>
            <select id="overallExperience" name="overallExperience" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Fair">Fair</option>
                <option value="Poor">Poor</option>
            </select>

        <label for="foodDrinks">Food and Drinks:</label>
            <select id="foodDrinks" name="foodDrinks" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Fair">Fair</option>
                <option value="Poor">Poor</option>
            </select>

        <label for="entertainment">Entertainment:</label>
            <select id="entertainment" name="entertainment" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Fair">Fair</option>
                <option value="Poor">Poor</option>
            </select>

        <label for="decorations">Decorations and Ambiance:</label>
            <select id="decorations" name="decorations" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Fair">Fair</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="form-section" class="comments">
            <label for="suggestions">Suggestions for Improvement:</label>
            <textarea id="suggestions" name="suggestions" rows="4" cols="50"></textarea>
        </div>

        <div class="form-section">
            <label for="futureParties">Would You Attend Our Future Parties?</label>
            <div class="radios">
                <input type="radio" id="yes" name="futureParties" value="Yes" required> Yes
                <input type="radio" id="no" name="futureParties" value="No" required> No
                <input type="radio" id="maybe" name="futureParties" value="Maybe" required> Maybe
            </div>
        </div>

        <div class="comments" class="form-section">
            <label for="additionalComments">Any Additional Comments or Feedback:</label>
            <textarea id="additionalComments" name="additionalComments" rows="4" cols="50" ></textarea>
        </div>
        
        <div class="form-section">
             <input type="submit" value="Submit">
        </div>
    </form>
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