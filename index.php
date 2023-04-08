<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Driving institute</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <!-- header start -->
        <div class="header">
            <!-- nav bar start -->
            <nav class="nav-bar">
                <!-- logo wrapper start -->
                <div class="logo-wrapper">
                    <span class="info">Driving </span>
                    <span class="info-text">Institute</span>
                </div>
                <!-- end logo wrapper -->
                <!-- nav items start -->
                <ul class="nav-items">
                    <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                    <li class="nav-item"><a href="#aboutus">About Us</a></li>
                    <li class="nav-item"><a href="#services">Services</a></li>
                    <li class="nav-item"><a href="#footer-head">Contact</a></li>
                    <h1><a href="signinpage.php">Sign In</a></h1>

                    <li class="nav-item" id="user-item"><a href="#user">User</a></li>
                    </ul>
                <!-- end nav items -->
                <div class="mobile-responsiveicon"><img src="./images/menu-icon.png" alt=""></div>
            </nav>
            <!-- end nav bar -->
            <div class="video-container">
                <div class="video-overlay">
                    <h3>The best and the most spacious </h3>
                    <h1>Driving Institute</h1>
                    <button class="btn btn-info">View More</button>
                </div>
                <video autoplay muted loop id="myVideo">
                    <source src="./video.mp4" type="video/mp4">
                </video>
                
            </div>

            <?php
                include 'signuppage.php';
            ?>
            
            <div>
            </div>
        </div>
        <!-- end header -->
        <?php
            include 'aboutus.php';
            ?>
            <!-- start services -->
        <div class="services" id="services">
            <div class="container">
                <div class="service-title">
                    <h1>our services</h1>
                </div>
                <p style="text-align: center;">Always assuring quality services!</p>
                <p style="text-align:center;">Choose your vehicle</p>     
                <div class="flex-container">
                    <div class="service-item box">
                        <div class="service-icon">
                            <a href="rating.html"><img src="./images/scooty.png" alt="service"></a>
                        </div>
                        <div class="service-text">
                            <h3><a href="rating.html">Scooter</a></h3>
                            
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <a href="rating.html"><img src="./images/bike.png" alt="service"></a>
                        </div>
                        <div class="service-text">
                            <h3><a href="rating.html">Bike</a></h3>
                            <ul>
            
                            </ul>
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <a href="rating.html"><img src="./images/car.png" alt="service"></a>
                        </div>
                        <div class="service-text">
                            <h3><a href="rating.html">Car</a></h3>
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <a href="quiz.html"><img src="./images/all.png" alt="service"></a>
                        </div>
                        <div class="service-text">
                            <h3><a href="quiz.html">Pre Test</a></h3>
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end services -->
        </div>
        <!-- end services -->
        <?php 
            include 'footer.php';
        ?>
        <!--Footer ends here-->
        <script src="./script.js"></script>
    </body>
</html>