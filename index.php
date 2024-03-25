<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare Website</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<!-- preloader start -->
<!-- <div class="preloader js-preloader">
    <img src="img/logo.jpg" alt="preloader">
</div> -->
<!-- preloader end -->

<!-- header start -->
<header class="header">
    <div class="container">
        <div class="header-main">
            <div class="logo">
                <a href="#"><img src="img/logo.jpg" alt="logo">PetCare</a>
            </div>
            <button type="button" class="nav-toggler js-nav-toggler">
                <span></span>
            </button>
            <nav class="nav js-nav">
                <ul>
                    <li style="--item:0"><a href="#home">home</a></li>
                    <li style="--item:1"><a href="#about">about</a></li>
                    <li style="--item:2"><a href="#services">services</a></li>
                    <li style="--item:3"><a href="#pricing">pricing</a></li>
                    <li style="--item:4"><a href="#contact">contact</a></li>
                    <li style="--item:5"><a href="admin_panel/loginsystem/index.php">Admin Panel</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- header end -->

<!-- Home Section     -->
<section class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="home-text">
                <h1>We provide the best care for your pets</h1>
                <p>We understand that your pet is a member of a family.That's why we offer comprehensive pet care services to keep your furry friend happy and healthy.</p>
                    <a href="#contact" class="btn">Contact Us</a>
            </div>
            <div class="home-img">
                <div class="fancy-br-box">
                    <img src="img/home-img.jpeg" alt="img">
                    
                    <div class="icon-box">
                        <img src="img/one.png" alt="">
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end -->

<!-- about section -->
<section class="about section-padding" id="about">
    <div class="container">
        <div class="section-title">
            <h2 class="title">about us</h2>
            <p class="sub-title">why we are the best</p>
        </div>
        <div class="row">
            <div class="about-img">
                <div class="fancy-br-box">
                    <img src="img/abt-img.png" alt="img">
                    <div class="icon-box">
                        <img src="img/one.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="about-text">
                <?php
                    $server = "wecare.mysql.database.azure.com";
                    $user = "azure";
                    $password = "Pranay@302002";
                    $database = "contact_data";
                    $ssl_mode = MYSQLI_CLIENT_SSL;
                    
                    $conn = mysqli_init();
                    mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
                    mysqli_real_connect($conn, $server, $user, $password, $database, 3306, NULL, $ssl_mode);
                    
                    // Perform a query
                    $query = "SELECT * FROM aboutus";
                    $result = mysqli_query($conn, $query);

                    // Check if query was successful
                    if ($result) {
                        // Fetch data and display
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<p class="title">' . $row['title'] . '</p>';
                            }
                        } else {
                            echo "No Record Found";
                        }
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        // Query execution failed
                        echo 'Query execution error: ' . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                    <h3>Best Care for your Pets.</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Healthy food</li>
                        <li><i class="fas fa-check"></i> Regular exercise</li>
                        <li><i class="fas fa-check"></i> Grooming</li>
                        <li><i class="fas fa-check"></i> Caring</li>
                        <li><i class="fas fa-check"></i> Happiness</li>
                    </ul>
            </div>
        </div>
    </div>
</section>
<!-- end -->

<!-- service section start -->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="section-title">
            <h2 class="title">services</h2>
            <p class="sub-title">what we provide</p>
        </div>
        <div class="row">
            <!-- sevices item start -->
            <div class="services-item">
                <div class="img-box">
                    <img src="img/ser-icon/dogdown.jpg" alt="img">
                </div>
                <div class="text">
                    <h3>dog walking</h3>
                    <p>Choose from a 30,45 or 60-minitue visit to give your 
                        pet their daily dose of fun-filled exercise.</p>
                </div>
            </div>
            <!-- sevices item end -->
            <!-- sevices item start -->
            <div class="services-item">
                <div class="img-box">
                    <img src="img/ser-icon/cat.jpg" alt="img">
                </div>
                <div class="text">
                    <h3>pet sitting</h3>
                    <p>While your away we can make sure your pet has all the food, 
                        water, exercise ad of course attention they deserve.</p>
                </div>
            </div>
            <!-- sevices item end -->
            <!-- sevices item start -->
            <div class="services-item">
                <div class="img-box">
                    <img src="img/ser-icon/pethouse.jpg" alt="img">
                </div>
                <div class="text">
                    <h3>overnight care</h3>
                    <p>If you'r away for the night, we can stay the night or stop by 
                        in the evening and morning to take care of your pet needs.</p>
                </div>
            </div>
            <!-- sevices item end -->
            <!-- sevices item start -->
            <div class="services-item">
                <div class="img-box">
                    <img src="img/ser-icon/foot.jpg" alt="img">
                </div>
                <div class="text">
                    <h3>other services</h3>
                    <p>Our team of experienced professionals can help with everything from pills to injections.</p>
                </div>
            </div>
            <!-- sevices item end -->
        </div>
    </div>
</section>
<!-- end -->

<!-- fun fact section start -->
<section class="fun-fact">
    <div class="container">
        <div class="row">
            <!-- fun fact item start -->
            <div class="fun-fact-item">
                <div class="box">
                    <h2>500</h2>
                    <p>happy customers</p>
                </div>
            </div>
            <!-- fun fact item end -->
            <!-- fun fact item start -->
            <div class="fun-fact-item">
                <div class="box">
                    <h2>99</h2>
                    <p>adopted pets</p>
                </div>
            </div>
            <!-- fun fact item end -->
            <!-- fun fact item start -->
            <div class="fun-fact-item">
                <div class="box">
                    <h2>10</h2>
                    <p>awards</p>
                </div>
            </div>
            <!-- fun fact item end -->
            <!-- fun fact item start -->
            <div class="fun-fact-item">
                <div class="box">
                    <h2>100</h2>
                    <p>clients</p>
                </div>
            </div>
            <!-- fun fact item end -->
        </div>
    </div>
</section>
<!-- fun fact section end -->

<!-- pricing section start -->
<section class="pricing section-padding" id="pricing">
    <div class="container">
        <div class="section-title">
            <h2 class="title">pricing</h2>
            <p class="sub-title">best pricing plan</p>
        </div>
        <div class="row">
            <!-- pricing item start -->
            <div class="pricing-item pricing-1">
                <div class="pricing-header">
                    <h3 data-text="basic"><span>basic</span></h3>
                    <div class="price">
                        ₹50 <span>/ Month</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul>
                        <li><i class="far fa-check-circle"></i> Pet Grooming.</li>
                        <li><i class="far fa-check-circle"></i> Pet Sitting.</li>
                        <li><i class="far fa-check-circle"></i> Pet Walking.</li>
                        <li><i class="far fa-check-circle"></i> Pet Checkup.</li>
                        <li><i class="far fa-times-circle"></i> Dental Care.</li>
                        <li><i class="far fa-times-circle"></i> Overnight Care.</li>
                        <li><i class="far fa-times-circle"></i> Pet Taxi.</li>
                        <li><i class="far fa-times-circle"></i> Pet Medical Administration.</li>
                    </ul>
                </div>
                <div class="pricing-footer">
                    <a href="Payment.php" class="btn">book now</a>
                </div>
            </div>
            <!-- pricing item end -->
            <!-- pricing item start -->
            <div class="pricing-item pricing-2">
                <div class="pricing-header">
                    <h3 data-text="standard"><span>standard</span></h3>
                    <div class="price">
                        ₹100 <span>/ Month</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul>
                        <li><i class="far fa-check-circle"></i> Pet Grooming.</li>
                        <li><i class="far fa-check-circle"></i> Pet Sitting.</li>
                        <li><i class="far fa-check-circle"></i> Pet Walking.</li>
                        <li><i class="far fa-check-circle"></i> Pet Checkup.</li>
                        <li><i class="far fa-check-circle"></i> Dental Care.</li>
                        <li><i class="far fa-check-circle"></i> Overnight Care.</li>
                        <li><i class="far fa-times-circle"></i> Pet Taxi.</li>
                        <li><i class="far fa-times-circle"></i> Pet Medical Administration.</li>
                    </ul>
                </div>
                <div class="pricing-footer">
                    <a href="Payment.php" class="btn">book now</a>
                </div>
            </div>
            <!-- pricing item end -->
            <!-- pricing item start -->
            <div class="pricing-item pricing-3">
                <div class="pricing-header">
                    <h3 data-text="premium"><span>premium</span></h3>
                    <div class="price">
                        ₹200 <span>/ Month</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul>
                        <li><i class="far fa-check-circle"></i> Pet Grooming.</li>
                        <li><i class="far fa-check-circle"></i> Pet Sitting.</li>
                        <li><i class="far fa-check-circle"></i> Pet Walking.</li>
                        <li><i class="far fa-check-circle"></i> Pet Checkup.</li>
                        <li><i class="far fa-check-circle"></i> Dental Care.</li>
                        <li><i class="far fa-check-circle"></i> Overnight Care.</li>
                        <li><i class="far fa-check-circle"></i> Pet Taxi.</li>
                        <li><i class="far fa-check-circle"></i> Pet Medical Administration.</li>
                    </ul>
                </div>
                <div class="pricing-footer">
                    <a href="Payment.php" class="btn">book now</a>
                </div>
            </div>
            <!-- pricing item end -->
        </div>
    </div>
</section>
<!-- pricing section end -->

<!-- contact section start -->
<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-details">
                <div class="section-title">
                    <p class="sub-title">contact us</p>
                </div>
                <div class="text-1">
                    <p>We provide wide range of services to keep your 
                    pets heakthy and gappy.We offer pet care, pet grooming, pet checkups and pet dental care. 
                    Thank you for considering us your go-to source for pet-care.</p>
                </div>
                <div class="contact-info">
                    
                        
                        <?php
                            $server = "wecare.mysql.database.azure.com";
                            $user = "azure";
                            $password = "Pranay@302002";
                            $database = "contact_data";
                            $ssl_mode = MYSQLI_CLIENT_SSL;
                            
                            $conn = mysqli_init();
                            mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
                            mysqli_real_connect($conn, $server, $user, $password, $database, 3306, NULL, $ssl_mode);
                            $ret=mysqli_query($conn,"select * from  shop_info");

                            if(mysqli_num_rows($ret) > 0)
                            {
                                foreach($ret as $row)
                                {
                                    ?>
                                <div class="contact-info-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p class="address"><?php echo $row['address']; ?></p>  
                                </div>
                                <div class="contact-info-item">
                                    <i class="fas fa-phone"></i>
                                    <p class="phone"><?php echo $row['phone']; ?></p>
                                </div>
                                <div class="contact-info-item">
                                    <i class="fas fa-envelope"></i>
                                    <p class="email"><?php echo $row['email']; ?></p>
                                </div>    
                                <?php
                                }
                            }
                            else
                                {
                                    echo "No Record Found";
                                }
                        ?>
                        
                    
                    
                    
                </div>
                <div class="social-links">
                    <a href="#" title="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" title="instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <div class="icon-box">
                    <img src="img/german-shepherd.png" alt="img">
                </div>
                <div class="contact-box">
                    <form action="contactinfo.php" method="post">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="Name" class="input-control">
                        </div>
                        <div class="input-box">
                            <input type="text"name="email" placeholder="Email" class="input-control">
                        </div>
                        <div class="input-box">
                            <input type="text" name="subject" placeholder="Subject" class="input-control">
                        </div>
                        <div class="input-box">
                            <textarea placeholder="Message" name="comment" class="input-control"></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

<!-- footer starts -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-item">
                    <h3>about us</h3>
                    <p>From PetCare and pet checkups to pet dental care, 
                    we have everything you need to take care of yur pet.
                    So come to see us today, and letus help you take care of your beloved pet.</p>
                </div>
                <div class="footer-item">
                    <h3>follow us</h3>
                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">twitter</a></li>
                        <li><a href="#">instagram</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3>information</h3>
                    <ul>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">terms & conditions</a></li>
                        <li><a href="#">refund policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>Created From pets ❤️ </p>
        </div>
    </div>
</footer>
<!-- footer ends -->
<!---chat bot button-->
<button class="chatbot-button"><a href="chatbot.html" ><i class="fas fa-comments"></i> Chat with us</a></button>
<!--chatbot button ends-->
<!-- footer ends -->

<script src="js/script.js"></script>
</body>
</html>