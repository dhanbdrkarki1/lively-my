<?php
// base URL for the S3 bucket
include_once 'static_resource.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">   -->
    <link rel="stylesheet" href="<?php echo $static_url; ?>/css/index.css">
    <title>Lively My</title>
    <style>
        table {
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>

</head>

<body>
    <section id="banner">
        <img src="<?php echo $static_url; ?>/img/logo.png" class="logo">
        <div class="banner-text ">
            <h1> LIVELY - MY </h1>
            <p>Live a healthy and happy life.</p>
            <div class="banner-btn">
                <a href="login.php"><span></span>Login</a>
                <a href="signup.php"><span></span>Register</a>
            </div>
        </div>
    </section>

    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#banner">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#events">EVENTS</li>
                <li><a href="#doctors">DOCTORS</a></li>
                <li><a href="#testimonial">REVIEWS</a></li>
                <li><a href="#footer">MEET US</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="<?php echo $static_url; ?>/img/menu.png" alt="menu">
    </div>

    <!-- About Us -->

    <section id="about">
        <div class="title-text">
            <p>ABOUT US</p>
            <h1>WHY CHOOSE US?</h1>
        </div>
        <div class="about-box">
            <div class="about">
                <h1>Quality Health Services</h1>
                <div class="about-desc">
                    <div class="about-icon">
                        <i class="fa fa-hospital-o"></i>
                    </div>
                    <div class="about-text">
                        <p>Our hospital is dedicated to delivering top-tier medical care with
                            a compassionate approach, ensuring each patient receives the
                            attention and expertise they deserve.</p>
                    </div>
                </div>
                <h1>Campaigns and Events</h1>
                <div class="about-desc">
                    <div class="about-icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="about-text">
                        <p>Join us in our mission to prevent TB and reduce road
                            fatalities through public awareness events,
                            health screenings, and life-saving education programs.!</p>
                    </div>
                </div>
                <h1> ER Facilities </h1>
                <div class="about-desc">
                    <div class="about-icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="about-text">
                        <p>Our Emergency Room is prepared for all critical situations,
                            offering rapid response, advanced life-saving technology, and
                            expert medical teams on standby around the clock.</p>
                    </div>
                </div>
            </div>
            <div class="about-img">
                <img src="<?php echo $static_url; ?>/img/i1.jpg" alt="medical image">
            </div>
        </div>
    </section>

    <!-- Events -->
    <section id="events">
        <div class="title-text">
            <p>EVENTS</p>
            <h1>BE A PART OF US</h1>
        </div>
        <div class="event-box">
            <div class="single-event">
                <img src="<?php echo $static_url; ?>/img/i2.jpg" alt="Vaccination Campaign">
                <div class="overlay"></div>
                <div class="event-desc">
                    <h3>Vaccination Program</h3>
                    <hr>
                    <p>
                        The event was organized by the intern doctor
                        in a locality of Kulala Lumpur. The doctors
                        checked the pressure of the populae before
                        giving them the immune dose.
                    </p>
                </div>
            </div>
            <div class="single-event">
                <img src="<?php echo $static_url; ?>/img/i3.png" alt="TB Awareness program">
                <div class="overlay"></div>
                <div class="event-desc">
                    <h3>TB Awareness program</h3>
                    <hr>
                    <p>
                        The event was organized by an INGO in Kulala Lumpur.
                        In the celebration of TB day, the volunteer provided pamplets,
                        information on TB, their cause, treatment and prevention.
                    </p>
                </div>
            </div>
            <div class="single-event">
                <img src="<?php echo $static_url; ?>/img/i4.jpg" alt="Traffic Awareness">
                <div class="overlay"></div>
                <div class="event-desc">
                    <h3>Traffic Awareness Program</h3>
                    <hr>
                    <p>
                        A rally event was done by the students of APU
                        regarding the traffic norms and rules to aware
                        people about the traffic rules and accident possibilities.
                    </p>
                </div>
            </div>
            <div class="single-event">
                <img src="<?php echo $static_url; ?>/img/i6.png" alt="Road Accident Campaign">
                <div class="overlay"></div>
                <div class="event-desc">
                    <h3>Road Accident Campaign</h3>
                    <hr>
                    <p>
                        Another road rally was done to emphasize on the careless behaviour
                        of people on road that causes accident and loss of lives. Students from different universites
                        vocalized on the importance of speed control and careful driving.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- Our Doctors -->
    <section id="doctors">
        <div class="title-text">
            <p>OUR DOCTORS</p>
            <h1>CLEAR YOUR DOUBTS WITH PROFESSIONALS</h1>
        </div>
        <div class="card">
            <div class="doctor-container">
                <div class="box">
                    <img src="<?php echo $static_url; ?>/img/doctor1.jpg" alt="doctor">
                    <div class="content">
                        <a href="#">
                            <h2>Fazel Aslam</h2>
                        </a>
                        <p>ER Specialist</p>

                        <!-- card icon -->
                        <div class="icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo $static_url; ?>/img/doctor2.jpg" alt="doctor">
                    <div class="content">
                        <a href="#">
                            <h2>Raftaar Singh</h2>
                        </a>
                        <p>Critical Care Specialist</p>

                        <!-- card icon -->
                        <div class="icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo $static_url; ?>/img/doctor3.jpg" alt="doctor">
                    <div class="content">
                        <a href="#">
                            <h2>Sarita Tiwari</h2>
                        </a>
                        <p>General Surgeon</p>

                        <!-- card icon -->
                        <div class="icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->
    <section id="testimonial">
        <div class="title-text">
            <p>TESTIMONIALS</p>
            <h1>WHAT PEOPLE HAVE TO SAY?</h1>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="<?php echo $static_url; ?>/img/noor.jpg" alt="User">
                    <div class="user-info">
                        <h4> Noor Ahmad <i class="fa fa-twitter"></i></h4>
                        <small>@ahmed_noor</small>
                    </div>
                </div>
                <p> I participated in one of the program they origanized and it was enlightening.
                    The awareness program really focused on the norms and responsibilities to be followed on the road,
                    either it be riders or pedestrian. Looking forward for more such events in future. </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="<?php echo $static_url; ?>/img/sej.jpg" alt="User">
                    <div class="user-info">
                        <h4> Sejraj Malik <i class="fa fa-twitter"></i></h4>
                        <small>@maliksejraj</small>
                    </div>
                </div>
                <p>I happen to visit the hospital due to a road accident.
                    The ER service was quick and the stuffs there were polite.
                    The hospital was clean and well organized.</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="<?php echo $static_url; ?>/img/jyotir.jpg" alt="User">
                    <div class="user-info">
                        <h4> Dr. Jotyir Khan <i class="fa fa-twitter"></i></h4>
                        <small>@drkhan</small>
                    </div>
                </div>
                <p>I am glad to be a part of this community where I get to help
                    people fight TB and see life in a brighter side. The colleagues
                    here are serious about their responsibility and their profession.
                    Everyone respects eachother.</p>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section id="footer">
        <img src="<?php echo $static_url; ?>/img/logo.png" class="footer-img" alt="">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>GET IN TOUCH</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i> Sunday to Saturday - 24 hours</p>
            </div>
            <div class="footer-right">
                <h1>Meet us at</h1>
                <p><i class="fa fa-map-marker"></i> 140 Jln Tun Dr Ismail, Seremban</p>
                <p><i class="fa fa-paper-plane"></i> contact@livelymy.com</p>
                <p><i class="fa fa-phone"></i> +60 (0)7 771-7523</p>
            </div>
        </div>
        </div>




    </section>
    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "img/exit.png";
            }
            else {
                sideNav.style.right = "-250px";
                menu.src = "img/menu.png";
            }
        }
    </script>
</body>

</html>