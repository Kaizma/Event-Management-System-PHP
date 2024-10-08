<?php require_once('includes/connect.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/about.css">
</head>
<body>
   <!-- Navigation bar  -->
   <div class="nav-bar"> 
            <div class ="nav-bar-left"> 
                <a href="index.php" >Home</a>
                <a href="about.php" class="nav-active">About Us</a>
                <a href="services.html">Services</a>
                <a href="gallery.php">Gallery</a>
                <a href="party.php">Party</a>
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



    <div class="body-content">
        <div class="div-one">
            
            <div class="div-one-left">
                <img class="image" src="./images/image1.jpg" alt="Image">
            </div>
        
            <div class="div-one-right">
                <p>Welcome to Partyway, where your celebrations come to life! With over a decade of experience in event management, we specialize in creating memorable experiences for every occasion. Whether it's a grand wedding, a fun-filled birthday party, a milestone anniversary, or a corporate event, we bring creativity, passion, and attention to detail to ensure your event is nothing short of spectacular.</p>

                <p>At Partyway, we believe that every celebration is unique, and we take pride in tailoring our services to meet the specific needs of our clients. Our team of expert planners, designers, and coordinators work closely with you from the initial concept to the final execution, making sure every detail reflects your vision. From venue selection and décor to entertainment and catering, we handle everything, so you can relax and enjoy the moment.</p>

                <p>Our goal is simple: to turn your dream event into a reality. We bring together the latest trends, stunning themes, and top-notch suppliers to create unforgettable experiences. Let us take care of the planning, and we'll make sure your event is flawless and stress-free.</p>

                <p>At Partway, your celebration is our passion!<p>
            </div>
            
        </div>
    
    
        <div class="div-two">
            <div class="div-two-item">
                <img width="80" height="80" src="https://img.icons8.com/officel/80/performance--v2.png" alt="performance--v2"/>
                <p>Finding The Perfect Venue For Your Event</p>
            </div>
            
            <div class="div-two-item">
                <img width="48" height="48" src="https://img.icons8.com/color/48/good-quality--v1.png" alt="good-quality--v1"/>
                <p>Connecting with the best vendor</p>
            </div>

            <div class="div-two-item">
                <img width="64" height="64" src="https://img.icons8.com/external-avoca-kerismaker/64/external-Organize-project-management-avoca-kerismaker.png" alt="external-Organize-project-management-avoca-kerismaker"/>
                <p>Organizing Your Event</p>
            </div>

            <div class="div-two-item">
                <img width="64" height="64" src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/external-enjoy-friendship-wanicon-lineal-color-wanicon.png" alt="external-enjoy-friendship-wanicon-lineal-color-wanicon"/> 
             <p>Enjoy the party with your friends</p>     
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