<?php 

include_once('./includes/connect.php');

session_start(); // Start the session (if not already started)
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    
} else {
    header("Location: login.php");
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $event_name = $_POST["event_name"];
    $event_date = $_POST["event_date"];
    $event_time = $_POST["event_time"];
    $event_location = $_POST["event_location"];
    $event_guests = $_POST["event_guests"];
   

    // Validate user_id and other fields (add more robust validation)
    if (empty($event_name) || empty($event_date) || empty($event_time) || empty($event_location)|| empty($event_guests)) {
        echo "Please fill in all the required fields, including the User ID.";
    } else {
        
        
        // Insert the party data into the existing table//
     
        $insertSQL = "INSERT INTO party (user_id, type, date, time, location, no_guests)
                      VALUES ('$user_id', '$event_name', '$event_date', '$event_time', '$event_location',$event_guests)";

        if ($conn->query($insertSQL) === TRUE) {
            
            header("Location: party.php");

        } else {
            
        }

       
           
        // Close the database connection
        $conn->close();
    }
} else {
   
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Book a Party</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/party.css">  
</head>
<body>
   <!-- Navigation bar  -->
   <div class="nav-bar"> 
        <div class ="nav-bar-left"> 
            <a href="index.php" >Home</a>
            <a href="about.php">About Us</a>
            <a href="services.html">Services</a>
            <a href="gallery.php" >Gallery</a>
            <a href="party.php" class="nav-active">Party</a>
            <a href="feedback.php">Feedback</a>
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
        
        <div class="form-container">
            <h1>Create your party</h1>
                <form action="party.php" method="post" name="party-form">
                    <div class="form-section">
                        <label for="event_name">Event Type:</label>
                        <select name="event_name">
                            <option value="">Select your option</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Anniversary">Anniversary</option>
                            <option value="Birthday Party">Birthday Party</option>
                            <option value="Gender Reveal">Gender Reveal</option>
                            <option value="Get Together">Get Together</option>
                            <option value="Formal Gathering">Formal Gathering</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-section">
                        <label for="event_date">Event Date:</label>
                        <input type="date" id="event_date" name="event_date" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>

                        <label for="event_time">Event Time:</label>
                        <input type="time" id="event_time" name="event_time" required>
                    </div>

                    <div class="form-section">
                        <label for="event_location">Event Location:</label>
                        <select name="event_location">
                                <option value="any">Any</option>
                                <option value="Indoor Elliot Hall">Indoor Elliot Hall</option>
                                <option value="Indoor Jasmine Hall">Indoor Jasmine Hall</option>
                                <option value="Outdoor by the Pool">Outdoor by the pool</option>
                                <option value="Outdoor Garden">Outdoor Garden</option>
                        </select>
                    </div>
                    
                    <div class="form-section">
                        <label for="guests">Number of Guests:</label>
                        <input type="number" id="guests" name="event_guests" min="0" max="400" required>
                    </div>
                     

                <div class="form-section" id="services">
                    <p>Select Services</p>
                        <div class="services-container">
                            <label>
                                <input type="checkbox" name="services[]" value="Catering"> Catering
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Decorations"> Decorations
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Photography"> Photography
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="DJ"> DJ
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Cover Band"> Cover Band
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Dancers"> Dancers
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Fireworks"> Fireworks
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Lighting"> Lighting
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Traditional Dancers"> Traditional Dancers
                            </label><br>
                            
                            <label>
                                <input type="checkbox" name="services[]" value="Bar Attenders"> Bar Attenders
                            </label><br>

                            <label>
                                <input type="checkbox" name="services[]" value="Bouncers"> Bouncers
                            </label><br>
                         </div>
                 </div>
                <div class="form-section">
                    <button type="submit" onclick="func()" id="submit-button">Create Party</button>
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
