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
    <?php
    //php code goes here
    ?>
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
                <li class="nav-item"><a class="active" href="/">Home</a></li>
                <li class="nav-item"><a href="#aboutus">About Us</a></li>
                <li class="nav-item"><a href="#services">Services</a></li>
                <li class="nav-item"><a href="#contactus">Contact</a></li>
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
        <div class="form-controller">
            <h2>Sign Up</h2>
            <form action="submit.php" method="post">
                <div class="form-group">
                    <input type="text" name="full_name" id="full_name" required placeholder="Enter Full name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <input type="datetime-local" name="date" id="date">
                </div>
                <div class="form-group">
                    <select name="category" id="">
                        <option value="" class="category-select">Motercycle</option>
                        <option value="" class="category-select">Car</option>
                        <option value="" class="category-select">Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <!-- end header -->
    <!-- start about us -->
    <div class="about-us" id="aboutus">
        <div class="about-header">
            <h2>About us</h2>
        </div>
        <div class="about-container">
            <div class="about-content">
            <h3>Welcome to </h3>
                    <h2><span>Dr. Driving</span> Institute</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti iste sed hic dolorum sapiente
                        soluta fugiat nihil rem, ullam ipsa, inventore, temporibus laudantium dignissimos veritatis
                        libero.
                        Illum possimus consectetur rerum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio optio temporibus aspernatur
                        deleniti neque explicabo tempora quasi sed. Natus qui assumenda eos, porro quam dolorum quisquam
                        distinctio possimus architecto illo?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore et commodi inventore,
                        perspiciatis quidem, sunt ex alias architecto nobis nesciunt libero! Dolore nulla enim sit
                        dolores consequuntur assumenda quod nisi.
                    </p>
                    <button class="btn btn-info">View More</button>
                </div>
                <div class="about-image">
                    <img src="./images/driving.png" alt="">
                </div>
            </div>
        </div>
        <!-- end about us -->
        <!-- start services -->
        <div class="services" id="services">
            <div class="container">
                <div class="service-title">
                    <h1>our services</h1>
                </div>
                <p style="text-align: center;">Always assuring quality services!</p>
                <div class="flex-container">
                    <div class="service-item box">
                        <div class="service-icon">
                            <img src="./images/scooty.png" alt="service">
                        </div>
                        <div class="service-text">
                            <h3>Scooter</h3>
                            <!-- <ul>
                                <li><span class="text-left">1 Month </span>........... <span
                                        class="text-right">6000</span></li>
                                <li><span class="text-left">15 Days </span>........... <span
                                        class="text-right">3000</span>
                                </li>
                                <li><span class="text-left">1 Week </span>........... <span
                                        class="text-right">1600</span></li>
                                <li><span class="text-left">1 Hour </span>............... <span
                                        class="text-right">500</span></li>
                                <li><span class="text-left">1/2 Hour </span>............ <span
                                        class="text-right">300</span></li>
                                <li><span class="text-left">1/4 Hour </span>........... <span
                                        class="text-right">200</span></li>
                            </ul>> -->
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <img src="./images/bike.png" alt="service">
                        </div>
                        <div class="service-text">
                            <h3>Bike</h3>
                            <ul>
            
                            </ul>
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <img src="./images/car.png" alt="service">
                        </div>
                        <div class="service-text">
                            <h3>Car</h3>
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="service-item box">
                        <div class="service-icon">
                            <img src="./images/all.png" alt="service">
                        </div>
                        <div class="service-text">
                            <h3>Pre Test</h3>
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end services -->
        </div>
        <!-- end services -->
        <!--Footer starts here-->
        <footer>
            <div class="foot">
                <div class="footer-head">
                    <h2>GET <span style="color:white;">IN</span> TOUCH!</h2>
                </div>
                <div class="footer-body">
                    <div class="address box">
                        <h4>Location &nbsp;</h4>
                        <p>&nbsp; Bagar, Pokhara, Nepal</p>
                    </div>
                    <div class="phone box">
                        <h4>Call Us &nbsp;</h4>
                        <p>&nbsp; +977 9800191911 || 061-22772</p>
                    </div>
                    <div class="email box">
                        <h4>Mail address &nbsp;</h4>
                        <p>&nbsp; drivingschool@gmail.com</p>
                    </div>
                </div>
                <div class="footer-last">
                    <p>© 2021 Driving School . All rights reserved.</p>
                    <p><span>Developed by TEAM BHOLENATH</span></p>
                </div>
            </div>
        </footer>
        <!--Footer ends here-->
        <script src="./script.js"></script>
    </body>
</html>