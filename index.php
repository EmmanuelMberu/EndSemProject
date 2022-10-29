<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Career Guidance Africa</title>
    <meta charset="UTF-8">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="endsem.css">

</head>

<body>


    <?php if (isset($user)): ?>





    <!--Vaidation check for search engine-->
    <script>
        function validateForm() {
            let y = document.forms["myForm"]["persname"].value;
            let x = y.toLowerCase();
            if (x == "intj") {
                alert("Geting information");
            } else if (x == "intp") {
                alert("Geting information");
            } else if (x == "entj") {
                alert("Geting information");
            } else if (x == "entp") {
                alert("Geting information");
            } else if (x == "infj") {
                alert("Geting information");
            } else if (x == "infp") {
                alert("Geting information");
            } else if (x == "enfj") {
                alert("Geting information");
            } else if (x == "enfp") {
                alert("Geting information");
            } else if (x == "istj") {
                alert("Geting information");
            } else if (x == "isfj") {
                alert("Geting information");
            } else if (x == "estj") {
                alert("Geting information");
            } else if (x == "esfj") {
                alert("Geting information");
            } else if (x == "istp") {
                alert("Geting information");
            } else if (x == "isfp") {
                alert("Geting information");
            } else if (x == "estp") {
                alert("Geting information");
            } else if (x == "esfp") {
                alert("Geting information");
            }
            else {
                alert("Do you know your personality yet? take test to proceed");
                return false;
            }
        }
    </script>

    <!--Navigation Bar Section-->
    <section class="navigation">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
            <div class="container">
                <img src="images/minilogo.png" class="img-fluid" alt="">
                <h1><b><a class="navbar-brand" href="#">Career Guidance</a></b></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#banner">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#test">Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#search">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#abtus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href=#contacts>Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!--Banner Section-->
    <section id="banner" class="banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <style>
                        * {
                            box-sizing: border-box;
                        }

                        .mySlides {
                            display: none;
                        }

                        img {
                            vertical-align: middle;
                        }

                        /* Slideshow container */
                        .slideshow-container {
                            max-width: 1000px;
                            position: relative;
                            margin: auto;
                        }

                        /* Caption text */
                        .text {
                            color: #f2f2f2;
                            font-size: 15px;
                            padding: 8px 12px;
                            position: absolute;
                            bottom: 8px;
                            width: 100%;
                            text-align: center;
                        }

                        /* Number text (1/3 etc) */
                        .numbertext {
                            color: #f2f2f2;
                            font-size: 12px;
                            padding: 8px 12px;
                            position: absolute;
                            top: 0;
                        }

                        /* The dots/bullets/indicators */
                        .dot {
                            height: 15px;
                            width: 15px;
                            margin: 0 2px;
                            background-color: #bbb;
                            border-radius: 50%;
                            display: inline-block;
                            transition: background-color 0.6s ease;
                        }

                        .active {
                            background-color: #717171;
                        }

                        /* Fading animation */
                        .fade {
                            animation-name: fade;
                            animation-duration: 2.5s;
                        }

                        @keyframes fade {
                            from {
                                opacity: .4
                            }

                            to {
                                opacity: 1
                            }
                        }

                        /* On smaller screens, decrease text size */
                        @media only screen and (max-width: 300px) {
                            .text {
                                font-size: 11px
                            }
                        }
                    </style>
                    </head>

                    <body>
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="image/image1.png" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="image/image2.png" style="width:100%">
                               
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="image/image3.png" style="width:100%">
                            
                            </div>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

                        <script>
                            let slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");
                                let dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) { slideIndex = 1 }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                setTimeout(showSlides, 2000); // Change image every 2 seconds
                            }
                        </script>
          

                </div>
                <div class="col-md-6 py-5">
                    <h1> Hi <?= htmlspecialchars($user["name"]) ?>, Welcome to Career Guidance Africa.</h1>
                    <p>Whether you are preparing for a new career or a change in careers, we aim to bring those choices
                        closer to home. We don't just want you to find a career, we want you to find 'your' career here
                        at Career Guidance Africa!</p>
                    <a href="#test" class="btn btn-primary">Test</a>
                </div>
            </div>
    </section>

    <!--Test Section-->
    <section id="test" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Take our personality test!</h1>
                    <p>Take our personality test and learn more about yourself, find a link between you and the world of
                        careers.</p>
                    <p>The more you know about yourself, the more you can do.</p>
                    <p>Discover strengths and new posibilities that you can focus on, compare them with whats already on
                        your mind.</p>
                    <a href=new.html class="btn btn-primary">Take the test</a>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <img src="image/personality.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Search Section-->
    <section id="search" class="banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <h1>Search</h1>
                    <p>Know your personality type yet? Search for it here, to get a hint to the career path for you!</p>
                </div>
                <div class="col-md-6 py-5">

                    <div class="container">
                        <form name="myForm" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="persname" placeholder="Hit the search...">
                            </div>
                            <button type="submit" class="btn btn-primary" a href=login.php>Search</button>
                        </form>

                    </div>

                </div>
            </div>
    </section>

    <!--AboutUs Section-->
    <section id="abtus" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/aboutus.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 py-5">
                    <h1 id="abtusHeader">About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iusto natus neque
                        praesentium ratione ab vel doloribus placeat omnis magni recusandae assumenda! Consequatur alias
                        maxime at ipsa, voluptate velit illo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iusto natus neque
                        praesentium </p>
                    
                    <a href="#faq" id="faqbtn" class="btn btn-primary">FAQ</a>
                </div>
            </div>
    </section>

    <!--FAQ Section-->
    <section id="faq" class="py-5">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="row">
                <button class="accordion">
                    <h5>What is your goal at Career Guidance Africa?</h5>
                </button>
                <div class="panel">
                    <p>Our Goal at Career Guidance Africa is to aid Individuals with some insight into who they are and
                        how it plays a role in what best suits them. We believe that everyone has a purpose and it may
                        take some time to find it, but when you find it...oh how sweet.</p>
                </div>

                <button class="accordion">
                    <h5>How accurate is the Personality test?</h5>
                </button>
                <div class="panel">
                    <p>The goal of the Personality test is not to diagnose our users but to gauge them. It is easier to
                        work with what you have than what you don't have. With a basic understanding of ourseleves we
                        can get to the next level of understanding. The test aims to aid users in expanding their view
                        by understanding their playing field.</p>
                </div>

                <button class="accordion">
                    <h5>How guaranteed am I to find my dream career?</h5>
                </button>
                <div class="panel">
                    <p>We do not guarantee that you will find the career for you here, but we do guarantee that it will
                        help in gaining a better understanding of where you would better shine. Whether you find your
                        career or not depends on how much you want it, so do not stop here keep looking, keep expanding.
                    </p>
                </div>
            </div>
            <br>
            <a href="#contacts" class="btn btn-primary">Contacts</a>
        </div>
    </section>

    <!--Contacts Section-->
    <section id="contacts" class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center" id="contactHeader">Contacts</h1>
                <div class="col-md-6 py-5">
                    <div class="card py-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">Email</h5>
                            <p>Instant reply: emmanuel@info.com</p>
                            <p>Get in touch: <a href="mailto:asifuna@usiu.ac.ke"> Reach out for further questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card py-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">WhatsApp</h5>
                            <p>Phone Number: 0764532861 </p>
                            <a href="#banner" class="btn btn-primary">Top</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">

    <?php else: ?>

    <!--Vaidation check for search engine-->
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["persname"].value;
            if (x == "intj") {
                alert("Geting information");
            } else if (x == "intp") {
                alert("Geting information");
            } else if (x == "entj") {
                alert("Geting information");
            } else if (x == "entp") {
                alert("Geting information");
            } else if (x == "infj") {
                alert("Geting information");
            } else if (x == "infp") {
                alert("Geting information");
            } else if (x == "enfj") {
                alert("Geting information");
            } else if (x == "enfp") {
                alert("Geting information");
            } else if (x == "istj") {
                alert("Geting information");
            } else if (x == "isfj") {
                alert("Geting information");
            } else if (x == "estj") {
                alert("Geting information");
            } else if (x == "esfj") {
                alert("Geting information");
            } else if (x == "istp") {
                alert("Geting information");
            } else if (x == "isfp") {
                alert("Geting information");
            } else if (x == "estp") {
                alert("Geting information");
            } else if (x == "esfp") {
                alert("Geting information");
            }
            else {
                alert("Do you know your personality yet? take test to proceed");
                return false;
            }
        }
    </script>

    <!--Navigation Bar Section-->
    <section class="navigation">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
            <div class="container">
                <img src="images/minilogo.png" class="img-fluid" alt="">
                <h1><b><a class="navbar-brand" href="#">Career Guidance</a></b></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#banner">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#test">Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#search">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#abtus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href=#contacts>Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href=login.php>Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!--Banner Section-->
    <section id="banner" class="banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <style>
                        * {
                            box-sizing: border-box;
                        }

                        .mySlides {
                            display: none;
                        }

                        img {
                            vertical-align: middle;
                        }

                        /* Slideshow container */
                        .slideshow-container {
                            max-width: 1000px;
                            position: relative;
                            margin: auto;
                        }

                        /* Caption text */
                        .text {
                            color: #f2f2f2;
                            font-size: 15px;
                            padding: 8px 12px;
                            position: absolute;
                            bottom: 8px;
                            width: 100%;
                            text-align: center;
                        }

                        /* Number text (1/3 etc) */
                        .numbertext {
                            color: #f2f2f2;
                            font-size: 12px;
                            padding: 8px 12px;
                            position: absolute;
                            top: 0;
                        }

                        /* The dots/bullets/indicators */
                        .dot {
                            height: 15px;
                            width: 15px;
                            margin: 0 2px;
                            background-color: #bbb;
                            border-radius: 50%;
                            display: inline-block;
                            transition: background-color 0.6s ease;
                        }

                        .active {
                            background-color: #717171;
                        }

                        /* Fading animation */
                        .fade {
                            animation-name: fade;
                            animation-duration: 2.5s;
                        }

                        @keyframes fade {
                            from {
                                opacity: .4
                            }

                            to {
                                opacity: 1
                            }
                        }

                        /* On smaller screens, decrease text size */
                        @media only screen and (max-width: 300px) {
                            .text {
                                font-size: 11px
                            }
                        }
                    </style>
                    </head>

                    <body>
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="image/image1.png" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="image/image2.png" style="width:100%">
                               
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="image/image3.png" style="width:100%">
                            
                            </div>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

                        <script>
                            let slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");
                                let dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) { slideIndex = 1 }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                setTimeout(showSlides, 2000); // Change image every 2 seconds
                            }
                        </script>
                </div>
               
                <div class="col-md-6 py-5">
                    <h1> Hi, Welcome to Career Guidance Africa.</h1>
                    <p>Whether you are preparing for a new career or a change in careers, we aim to bring those choices
                        closer to home. We don't just want you to find a career, we want you to find 'your' career here
                        at Career Guidance Africa!</p>
                    <a href="#test" class="btn btn-primary">Test</a>
                </div>
            </div>
    </section>

    <!--Test Section-->
    <section id="test" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Take our personality test!</h1>
                    <p>Take our personality test and learn more about yourself, find a link between you and the world of
                        careers.</p>
                    <p>The more you know about yourself, the more you can do.</p>
                    <p>Discover strengths and new posibilities that you can focus on, compare them with whats already on
                        your mind.</p>
                    <a href=login.php class="btn btn-primary">Take the test</a>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <img src="image/personality.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Search Section-->
    <section id="search" class="banner py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <h1>Search</h1>
                    <p>Know your personality type yet? Search for it here, to get a hint to the career path for you!</p>
                </div>
                <div class="col-md-6 py-5">

                    <div class="container">
                        <form name="myForm" action=login.php>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="persname" placeholder="Hit the search...">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>

                    </div>

                </div>
            </div>
    </section>

    <!--AboutUs Section-->
    <section id="abtus" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/aboutus.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 py-5">
                    <h1 id="abtusHeader">About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iusto natus neque
                        praesentium ratione ab vel doloribus placeat omnis magni recusandae assumenda! Consequatur alias
                        maxime at ipsa, voluptate velit illo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iusto natus neque
                        praesentium ratione ab vel doloribus placeat omnis magni recusandae assumenda! Consequatur alias
                 </p>
                    <a href="#faq" id="faqbtn" class="btn btn-primary">FAQ</a>
                </div>
            </div>
    </section>

    <!--FAQ Section-->
    <section id="faq" class="py-5">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="row">
                <button class="accordion">
                    <h5>What is your goal at Career Guidance Africa?</h5>
                </button>
                <div class="panel">
                    <p>Our Goal at Career Guidance Africa is to aid Individuals with some insight into who they are and
                        how it plays a role in what best suits them. We believe that everyone has a purpose and it may
                        take some time to find it, but when you find it...oh how sweet.</p>
                </div>

                <button class="accordion">
                    <h5>How accurate is the Personality test?</h5>
                </button>
                <div class="panel">
                    <p>The goal of the Personality test is not to diagnose our users but to gauge them. It is easier to
                        work with what you have than what you don't have. With a basic understanding of ourseleves we
                        can get to the next level of understanding. The test aims to aid users in expanding their view
                        by understanding their playing field.</p>
                </div>

                <button class="accordion">
                    <h5>How guaranteed am I to find my dream career?</h5>
                </button>
                <div class="panel">
                    <p>We do not guarantee that you will find the career for you here, but we do guarantee that it will
                        help in gaining a better understanding of where you would better shine. Whether you find your
                        career or not depends on how much you want it, so do not stop here keep looking, keep expanding.
                    </p>
                </div>
            </div>
            <br>
            <a href="#contacts" class="btn btn-primary">Contacts</a>
        </div>
    </section>

    <!--Contacts Section-->
    <section id="contacts" class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center" id="contactHeader">Contacts</h1>
                <div class="col-md-6 py-5">
                    <div class="card py-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">Email</h5>
                            <p>Instant reply: emmanuel@info.com</p>
                            <p>Get in touch: <a href="mailto:asifuna@usiu.ac.ke"> Reach out for further questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card py-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">WhatsApp</h5>
                            <p>Phone Number: 0764532861 </p>
                            <a href="#banner" class="btn btn-primary">Top</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">

    <?php endif; ?>

</body>

</html>