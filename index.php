<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>H B Constructions</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&amp;display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <!-- Favicon section -->
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="icon" type="image/x-icon" href="favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/x-icon" href="favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/x-icon" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="favicon/favicon-32x32.png">
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- End favicon section  -->
    <!-- chat plugins -->
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-41855201-f6b1-46b5-bddc-44ddda614c7d"></div>





    <!-- form validation  -->
    <script>
        function contactVal() {
            // name validation
            if (document.getElementById("name").value == "") {
                document.getElementById("name").style.border = "1px solid red";
                document.getElementById("name_error").style.color = "#f00";
                document.getElementById("name").focus();
                document.getElementById("name_error").innerHTML = "Please Enter Name";
                return false;
            }

            // Email Validation
            if (document.getElementById('email').value == "") {
                document.getElementById('email').style.border = "1px solid red";
                document.getElementById('email_error').style.color = "#f00";
                document.getElementById('email').focus();
                document.getElementById('email_error').innerHTML = "Email is required";
                return false;
            } else {
                var email = document.getElementById('email').value;
                var epattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if (!pat.test(email)) {
                    document.getElementById('email').style.border = "1px solid red";
                    document.getElementById('email_error').style.color = "#f00";
                    document.getElementById('email').focus();
                    document.getElementById('email_error').innerHTML = "Please enter a valid Email";
                    return false;
                }

            }
            // Mobile validation
            if (document.getElementById("mobile").value == "") {
                document.getElementById("mobile").style.border = "1px solid red";
                document.getElementById("mobile_error").style.color = "#f00";
                document.getElementById("mobile").focus();
                document.getElementById("mobile_error").innerHTML = "Please Enter Mobile No.";
                return false;
            } else {
                var mobile = document.getElementById("mobile").value;
                var mpattern = /^\d{10}$/;
                if (!mpattern.test(mobile)) {
                    document.getElementById("mobile").style.border = "1px solid red";
                    document.getElementById("mobile_error").style.color = "#f00";
                    document.getElementById("mobile").focus();
                    document.getElementById("mobile_error").innerHTML = "Please Enter Valid 10 Digit Mobile No.";
                    return false;

                }
            }
            if (document.getElementById("company").value == "") {
                document.getElementById("company").style.border = "1px solid red";
                document.getElementById("company_error").style.color = "#f00";
                document.getElementById("company").focus();
                document.getElementById("company_error").innerHTML = "Company Name is Required";
                return false;

            }

            // Message Box Validation
            if (document.getElementsById("message").value == "") {
                document.getElementById("message").style.border = "1px solid red";
                document.getElementById("message_error").style.color = "#f00";
                document.getElementById("message").focus();
                document.getElementById("message_error").innerHTML = "Please enter some work details here";
                return false;
            }

        }

        function checkValue(ele) {
            if (ele.value != "") {
                ele.style.border = "1px solid #999";
                document.getElementById(ele.id + "_error").innerHTML = "";
            }
        }
    </script>
    <!-- end form validation -->


</head>

<body>

    <main>

        <!-- <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to helloobhaiaah</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header> -->


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- <a class="navbar-brand" href="index">
                    HB CONSTRUCTIONS
                </a> -->

                <a class="navbar-brand" href="index">
                    <img src="images/hblogo.png" alt="img" height="50" width="50">&nbsp;
                    H B CONSTRUCTIONS

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#index">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#services">SERVICES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#about">ABOUT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#projects">PROJECTS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#contact">CONTACT</a>
                        </li>

                    </ul>


                </div>
            </div>
        </nav>


        <section class="hero-section" id="index">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <!-- <small>Festava Live Presents</small> -->

                        <!-- <h2 class="text-white mb-5">LEADERS IN QUALITY CONSTRUCTION <br> AND INFRASTRUCTURE</h2> -->
                        <!-- <h2 class="text-white mb-5">CONSTRUCTING A STRONGER FUTURE</h2> -->
                        <!-- <h2 class="text-white mb-5" id="myelement">BUILDING DREAMS, CRAFTING REALITIES</h2> -->
                        <h3 class="text-white mb-5" id="myelement"></h3>
                        <!-- Element to contain animated typing -->
                        <!-- <span id="element"></span> -->

                        <!-- <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a> -->
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <!-- <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                10 - 12<sup>th</sup>, Dec 2023
                            </h5>
                        </div> -->

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <!-- <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Begumpet, Hyderabad
                            </h5> -->
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Follow Us:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link" target="_blank">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link" target="_blank">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link" target="_blank">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link" target="_blank">
                                        <span class="bi-linkedin"></span>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link" target="_blank">
                                        <span class="bi-youtube"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <video controls autoplay>
                <source src="video/construction-video.mp4" type="video/mp4">
               
                Your browser does not support the video tag.
              </video> -->
            <!-- videos section -->
            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="#">
                    <source src="video/day-night-const.mp4" type="video/mp4">

                </video>
            </div>
        </section>
        <!-- Services -->


        <section class="contact-section section-padding " id="services">
            <div class="container" style="text-align: justify; padding-left: 80px;">
                <div class="row">
                    <h2 class="text-center">SERVICES</h2>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <img src="images/service/planning.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">
                                    PLANNING</h5>

                                <p class="card-text"><b>Construction planning with a client is an important aspect of any construction project. It is important to establish clear communication and expectations from the outset of the project to ensure a successful outcome. </b></p>

                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <img src="images/service/designing.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">DESIGNING</h5>
                                <p class="card-text"><b>Once the goals and site requirements have been established, develop a detailed project plan that outlines the construction process, including any necessary permits or approvals, materials needed, and labor requirements.</b></p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <!-- <div class="card" style="width: 18rem;"> -->
                            <img src="images/service/implementation.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    IMPLEMENTATION</h5>
                                <p class="card-text"><b>Maintain regular communication with the client throughout the construction process to keep them informed of progress and to address any concerns or questions they may have.</b><br><br>
                                      
                                
                                </p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>


        <section class="about-section section-padding" id="about">
            <div class="container">
                <div class="row">
                <div class="col-12 text-center">
                        <h2 class="mb-4 text-white">About Us</h1>
                    </div>
                    <!-- <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center"> -->
                    <div class="col-lg-6 ">
                        <div class="services-info">
                            <!-- <h2 class="text-white mb-4">About Us</h2> -->

                            <p style="text-align: justify; color: #704318;"><b>At H B Constructions Possessions, we esteem our vision, which is top-quality development and we accept this sincere vision has established the groundwork for our prosperity and furthermore has delivered us the situation with uniqueness. For sure, we have been figured as one of the Leading Upcoming Construction organizations in Hyderabad and we have been determinedly situating ourselves to add to our clients by doing our absolute best with. The main component considered while building a lovely private house is the conviction; as we invest heavily in our honesty and responsibility. We stick to every one of the significant elements included and have an eye for mind blowing subtitles..</b></p>

                            <!-- <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                            <p class="text-white">You are not allowed to redistribute the template ZIP file on any other
                                website without a permission.</p>

                            <h6 class="text-white mt-4">Whole Night Party</h6>

                            <p class="text-white">Please tell your friends about our website. Thank you.</p> -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="images/about.jpg" class="about-image img-fluid">

                            <!-- <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>a happy moment</h3>

                                    <p class="mb-0">your amazing festival experience with us</p>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- project section start -->
        <section class="artists-section section-padding" id="projects">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">PROJECTS</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/projects/building1.jpg" class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Commercial
                                </p>


                                <hr>
                                <p class="text-white">Revolutionizing the Commercial Landscape: Explore the Exciting Potential of Under Construction Commercial Project, Where Innovation and Success Merge to Create a Thriving Business Hub.</p>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/projects/building-sm4.jpg" class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Commercial
                                </p>

                                <hr>
                                <p class="text-white">A Promising Development Set to Redefine Modern Living with Innovative Design and Amenities.</p>
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="images/projects/building-sm3.jpg" class="artists-image img-fluid">
                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Commercial
                                </p>

                                <hr>
                                <p class="text-white">Discover the Future of Luxurious Living at Commercial Under Construction Project: Exquisite Design and Unparalleled Amenities Await!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/projects/residential_big1.jpg" class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Residential
                                </p>

                                <hr>
                                <p class="text-white">Unlocking New Horizons of Business: Get Ready for the Launch of Under Construction Commercial Project, a Dynamic Space Designed for Growth, Collaboration, and Success.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/projects/rs1.jpg" class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Residential
                                </p>
                                <hr>
                                <p class="text-white">Unveiling Residential Under Construction Project: A Captivating Blend of Style, Comfort, and Unmatched Quality for Your Dream Home.</p>
                            </div>
                        </div>

                        <!-- <iframe width="530" height="400" src="video/day-night-const.mp4" autoplay="" loop="" muted="">
                        </iframe> -->
                        <!-- <div class="myvideo">
                        <video width="530" height="500" autoplay muted>
                            <source src="video/rs-video.mp4" type="video/mp4" >
                           
                          
                        </video>
                        </div> -->


                        <div class="artists-thumb">
                            <img src="images/projects/building-sm5.jpg" class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p class="text-white">
                                    <strong>Project Name:</strong>
                                    Residential
                                </p>

                                <hr>
                                <p class="text-white">Introducing Residential Under Construction Project: Your Gateway to a Serene and Modern Lifestyle in an Idyllic Setting.</p>


                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </section>

        <!-- project section End -->

        <!-- mission and vission -->
        <section class="pricing-section section-padding section-bg" id="mission">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">OUR MISSION & VISION</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex text-center">
                                <div>
                                    <!-- <h3><small>MISSION</small> </h3> -->
                                    <img src="images/mission1.png" alt="img" width="200" height="200">

                                    <p style="text-align: justify;"><b>Our mission is to deliver high-quality construction services that meet or exceed our clients’ expectations, while maintaining a safe, sustainable, and environmentally responsible work environment. We strive to build strong relationships with our clients, employees, and communities, and to be a leader in our industry through innovation, technology, and continuous improvement.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="pricing-thumb">
                            <div class="d-flex text-center">
                                <div>
                                    <!-- <h3><small>VISION</small></h3> -->
                                    <img src="images/vision2.png" alt="img" width="200" height="200">

                                    <p style="text-align: justify;"><b>Our vision is to be the premier construction company in our region, known for our exceptional quality, innovative approach, and commitment to delivering projects on time and within budget. We strive to be a company that our clients, partners, and employees are proud to be associated with us. <br><br>

                                            </br>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End mission and vission -->
        <!-- Client Partner -->
        <section class="pricing-section section-padding section-bg" id="client">
            <div class="container">
                <div class="row">

                    <div class="col-12 mx-auto">
                        <h2 class="text-center mb-4">OUR CLIENTS</h2>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="d-flex text-center">
                            <div>
                                <img src="images/client/cl1.webp" alt="img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="d-flex text-center">
                            <div>
                                <img src="images/client/cl2.webp" alt="img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="d-flex text-center">
                            <div>
                                <img src="images/client/cl3png-removebg-preview.png" alt="img">
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>

        <!-- End Client Partner -->

        <section class="contact-section section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">CONTACT</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">

                                <form class="custom-form contact-form mb-5 mb-lg-0" action="thank-you" method="post" role="form" onsubmit="return contactVal()">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="name" id="name" onblur="checkValue(this)" class="form-control" placeholder="Full name" autocomplete="off">
                                                <span id="name_error" style="color: red;"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="email" id="contact-email" onblur="checkValue(this)" class="form-control" placeholder="Email address" autocomplete="off">
                                                <span id="email_error" style="color: red;"></span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="number" name="mobile" onblur="checkValue(this)" id="mobile" class="form-control" placeholder="Mobile No" autocomplete="off">
                                                <span id="mobile_error" style="color: red;"></span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="company" id="company" onblur="checkValue(this)" class="form-control" placeholder="Company Name" autocomplete="off">
                                                <span id="company_error" style="color: red;"></span>
                                            </div>
                                        </div>



                                        <textarea name="message" rows="3" class="form-control" id="contact-message" placeholder="Message" onblur="checkValue(this)" autocomplete="off"></textarea>
                                        <span id="message_error" style="color: red;"></span>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" name="submit" id="submit" class="form-control" onsubmit="contactVal();">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                <!-- <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.2745023092334!2d78.47372547503609!3d17.4465708834508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9b8205d19943%3A0x608f216f1be95800!2sHelloo%20Bhaiaah!5e0!3m2!1sen!2sin!4v1685021591333!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">HB Constructions</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link" target="_blank">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link" target="_blank">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <!-- <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li> -->

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link" target="_blank">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link" target="_blank">
                                    <span class="bi-linkedin"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link" target="_blank">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <!-- <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#index" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#services" class="site-footer-link">Sevices</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#about" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#projects" class="site-footer-link">Projects</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#contact" class="site-footer-link">Contact</a>
                        </li>


                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: +91-9493640606" class="site-footer-link">
                            +91-9493640606
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:support@helloobhaiaah.com" class="site-footer-link">
                            support@helloobhaiaah.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Plot No.33, Lane #5, Jagadish Nagar Colony,
                        Begumpet, Secunderabad 500003 Hyderabad.</p>


                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">H B Constructions © 2021</p>
                        <!-- <p class="copyright-text">Distributed by: <a href="#">Helloobhaiaah</a></p> -->
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="https://helloobhaiaah.com/TermsAndConditions" class="site-footer-link" target="_blank">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="https://helloobhaiaah.com/PrivacyPolicy" class="site-footer-link" target="_blank">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="https://helloobhaiaah.com/ReworkPolicy" class="site-footer-link" target="_blank">Re-Work Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <!-- tailwind css typed js cdn -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#myelement', {
            strings: ['BUILDING DREAMS', 'CRAFTING REALITIES', 'LEADERS IN QUALITY CONSTRUCTION', 'AND INFRASTRUCTURE', 'CONSTRUCTING A STRONGER FUTURE'],
            typeSpeed: 70,
        });
    </script>


</body>

</html>