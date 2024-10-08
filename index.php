<?php require_once('includes/connect.php') ?>

<html>
    <head>

        <title>Welcome to Partyway</title>

        <link rel="stylesheet" href="styles/navbar.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/welcome.css">
    </head>

    <body>

        <!-- Navigation bar  -->
        <div class="nav-bar"> 
            <div class ="nav-bar-left"> 
                <a href="index.php" class="nav-active">Home</a>
                <a href="about.php">About Us</a>
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

        <!-- Begining Body Content -->
        <div class="welcome-header">
            <h1 id="company-name">Partyway</h1>
            <p id="company-sogan">Unforgettable Parties, Just a Click Away</p>
        </div>

        <div class="body-content">
            <div class="body-content-intro">
                 <p id="company-intro-para">At Partyway, we specialize in turning your dreams into reality. Whether you're planning an intimate gathering or a grand celebration, our dedicated team of event experts is here to make every detail perfect. From concept to execution, we manage every aspect of your event with creativity, precision, and care. Our commitment is to transform your vision into an unforgettable experience, creating moments that will be cherished for years to come. Let us handle the logistics so you can enjoy every moment of your special day. Discover how we can make your next event extraordinary. Contact us today to start planning!</p>
            </div>
        

            <div class="body-content-services">
                <div class="service" id="wedding">
                    <img src="images/bride.jpeg" alt="Wedding image" class="service-image">
                    <h2 class="service-name">Weddings</h2>
                    <p class="service-para">At Partyway, we turn your dream wedding into reality. From intimate ceremonies to grand celebrations, our team ensures every moment is magical. With elegant decor, seamless coordination, and attention to every detail, we make your special day unforgettable. Let us create the perfect setting for your happily ever after.</p>
                </div>

                <div class="service" id="anniversary">
                    <img src="images/anniversary.jpg" alt="Anniversary image" class="service-image">
                    <h2 class="service-name">Anniversaries</h2>
                    <p class="service-para">Celebrate your love story with a memorable anniversary event, crafted just for you. Whether it’s a cozy gathering or a grand affair, Partyway brings your vision to life with personalized touches and flawless execution. Relive the magic of your wedding day, surrounded by the people who matter most. Let us make this milestone as special as the day it all began.</p>
                </div>

                <div class="service" id="birthday-party">
                    <img src="images/birthdayparty.jpg" alt="Birthday Party Image" class="service-image">
                    <h2 class="service-name">Birthday Parties</h2>
                    <p class="service-para">Make every birthday unforgettable with Partyway’s creative and vibrant party planning! From whimsical themes for kids to sophisticated celebrations for adults, we bring your dream party to life. Let us handle the decorations, entertainment, and surprises, while you focus on making cherished memories with friends and family. Every detail is designed to bring joy and excitement to your special day!</p>
                </div>
                <div class="service" id="gender-reveal">
                    <img src="images/genderreveals.jpg" alt="Gender Reveal Image" class="service-image">
                    <h2 class="service-name">Gender Reveal Parties</h2>
                    <p class="service-para">Celebrate the anticipation and joy of welcoming a new life with a dazzling gender reveal event! Partyway designs unforgettable moments filled with suspense, excitement, and joy for you and your loved ones. Whether you’re dreaming of a grand reveal or a cozy, intimate affair, we handle every detail from themed decorations to the big reveal moment making it a day filled with love, surprise, and celebration!</p>
                </div>
                <div class="service" id="get-together">
                    <img src="images/gettogether.jpg" alt="Get Together Image" class="service-image">
                    <h2 class="service-name">Get Togethers</h2>
                    <p class="service-para">Reconnect and relive the best moments with Partyway’s expertly crafted get-together events! Whether it's an intimate reunion with close friends or a large-scale gathering, we create the perfect setting for laughter, nostalgia, and new memories. From venue decor to fun activities, we ensure your event is filled with warmth, excitement, and effortless enjoyment.</p>
                </div>
                <div class="service" id="formal-gatherings">
                    <img src="images/formal.jpg" alt="Formal Gathering Image" class="service-image">
                    <h2 class="service-name">Formal Gatherings</h2>
                    <p class="service-para">levate your formal gatherings with sophistication and seamless execution. At Partyway, we specialize in curating professional events, from corporate dinners to award ceremonies, ensuring every detail reflects your brand's prestige and class. With tailored decor, exquisite dining, and impeccable service, we guarantee an experience that leaves a lasting impression on your guests, making your event a success in every aspect.</p>
                </div>
            </div>
        </div>

        <!-- End of Body Content -->


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