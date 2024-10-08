<?php require_once('includes/connect.php') ?>

<html>
<head>
    <title>Login</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/test.css">  
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
            <a href="login.php" class="nav-active">Log In</a>
            <a href="register.php">Register</a>
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <!-- Body content-->
<div class="body-content">

        <div class="login-container">
        <img src="images/profile-picture.png" class="avatar" alt="Profile Picture">

        <form action="login.php" method="POST" name="my-login-form">
            <h2><b>Log In</b></h2>

            <!-- Username Field -->
            <!-- <label for="username">Username:</label> -->
            <input type="text" id="username" name="username" placeholder="Username" required>

            <!-- Password Field -->
            <!-- <label for="password">Password:</label> -->
            <input type="password" id="password" name="password"  placeholder="Password" required>

            <!-- Forgot Password and Submit Button -->
            <div class="form-footer">
                <a href="Forget.html">Forgot Password?</a>
                <input type="submit" class="submit" id="btnsub" name="submit" value="Submit">
            </div>

            <!-- Sign Up Link -->
            <p>Not a member? <a href="register.php">Sign Up</a></p>
        </form>
        </div>
</center>
<?php
        
        // Check if the user is submitting the login form ///
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) ) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT user_id, password FROM user WHERE username = '$username'";
                $result = $conn->query($query);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $hashedPassword = $row['password'];
        
        
                    if ($password === $hashedPassword) {
                    // Password is correct, user is authenticated
                        session_start();
                        $_SESSION['user_id'] = $row['user_id']; // Store user ID in the session
                           
                        $query = "SELECT role FROM user WHERE username = '$username'";
                        //AND password = '$hashedPassword';";

                         $result = $conn->query($query);

                         $row = $result->fetch_assoc();

                        $userRole = $row['role'];
            
                        // After successful login
                         if ($userRole === 'admin') {
                        // Redirect to the admin dashboard
                            header('Location: admin');
                        } elseif ($userRole === 'user') {
                        // Redirect to the user dashboard
                             header('Location: index.php');
                        } else {
                        // Handle unauthorized access
                             echo 'Unauthorized access';
                        }
           
            
                    } else {
                        // Password is incorrect
            
                        $errorMessage = "Password is incorrect. Please try again.";
                        echo "<script type='text/javascript'>
                        alert('$errorMessage');
                        window.onload = function() {
                            document.getElementById('uname').value = '$username';
                        };
                      </script>";
            
            
                    }
                } else {
                     // Username not found
                     $errorMessage = "No such user. Create new account to continue";
                     echo "<script type='text/javascript'>
                                alert('$errorMessage');
                                window.location.href = 'login.php';
                            </script>";
            }
    
   
        }
?>


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