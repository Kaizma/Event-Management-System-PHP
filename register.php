<?php require_once('includes/connect.php'); 
	if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username =$_POST['username'];
		$gender = $_POST['gender'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$address =$_POST['address'];
		$dateofbirth = $_POST['dateofbirth'];
		$password = $_POST['password'];

		$query = "INSERT INTO user (username, email, password, fname, lname, gender, phone, address, dob) VALUES ('$username', '$email', '$password', '$fname' , '$lname' , '$gender' , '$phonenumber', '$address' , '$dateofbirth' )";
		
		$result = mysqli_query($conn,$query);

		if($result){
              header("Location:login.php");
            exit();
          
            }
        else{
            echo"<script>alert('Not Saved Your Details')</script>";
        }
	}

	mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/registration.css">  
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
            <a href="help.php" >Help</a>
        </div>
        <div class = "nav-bar-right">
            <a href="login.php">Log In</a>
            <a href="register.php" class="nav-active">Register</a>
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <!-- Body content-->
<div class="body-content">
<center>
<div class="form-container">
    <br>
    <img src="images/icons/register-icon.png" class="avatar" alt="Register Icon">
    <!-- Registration Form -->
    <form action="register.php" method="POST">
        <h1 class="form-title">Registration Form</h1>

        <div class="form-section">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
        </div>

        <div class="form-section">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
        </div>

        <div class="form-section">
            <label for="username">Username</label>
            <input type="text" id="uname" name="username" placeholder="Pick a username" required>
        </div>

        <div class="form-section">
            <label>Gender</label>
            <label class="radio-inline"><input type="radio" id="gender" name="gender" value="male" checked> Male</label>
            <label class="radio-inline"><input type="radio" id="gender" name="gender" value="female"> Female</label>
        </div>

        <div class="form-section">
            <label for="mobile">Phone Number</label>
            <input type="tel" id="mobile" name="phonenumber" placeholder="+94" required>
        </div>

        <div class="form-section">
            <label for="emailAdd">Email Address</label>
            <input type="email" id="emailAdd" name="email" placeholder="example@gmail.com" required>
        </div>

        <div class="form-section">
            <label for="address">Address</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter your permanent address" required></textarea>
        </div>

        <div class="form-section">
            <label for="dob">Choose Your Date Of Birth</label>
            <input type="date" id="dob" name="dateofbirth" max="<?php echo date('Y-m-d', strtotime('-16 years')); ?>" required>
        </div>

        <div class="form-section">
            <label for="pw">Password</label>
            <input type="password" id="pw" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-section">
            <label for="repw">Re-enter Password</label>
            <input type="password" id="repw" name="repassword" placeholder="Re-enter password" required>
        </div>

        <div class="form-section">
            <label>
                <input type="checkbox" id="policy" name="policy" onclick="enableButton()"> Accept privacy policy terms
            </label>
        </div>

        <div class="form-section">
            <input type="submit" value="Submit Details" id="Register_btn1" name="register" onclick="show_alert();">
        </div>
    </form>
</div>

        </center>

<hr>
<br><br>

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
