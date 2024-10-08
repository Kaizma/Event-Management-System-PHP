<html>
<head>
    <title>Gallery</title>   
    <link rel="stylesheet" href="styles/style.css">  
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/gallery.css">  
</head>

<body>

    <!-- Navigation bar  -->
    <div class="nav-bar"> 
        <div class ="nav-bar-left"> 
            <a href="index.php" >Home</a>
            <a href="about.php">About Us</a>
            <a href="services.html">Services</a>
            <a href="gallery.php" class="nav-active">Gallery</a>
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
<div class="gallery-container">
        <?php
            $directory = './images/gallery/'; // Path to the gallery folder
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Get all image files

            foreach($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $image . '" alt="Gallery Image" onclick="openLightbox(); currentSlide('. basename($image) .')">';
                echo '</div>';
            }
        ?>
    </div>

    <!-- Lightbox for full-size images -->
    <div id="lightbox" class="lightbox">
        <span class="close" onclick="closeLightbox()">&times;</span>
        <div class="lightbox-content">
            <?php
                foreach($images as $index => $image) {
                    echo '<div class="lightbox-slide">';
                    echo '<img src="' . $image . '" class="lightbox-image">';
                    echo '</div>';
                }
            ?>
        </div>
        <!-- Lightbox Navigation -->
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>

    <script src="gallery.js"></script>

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