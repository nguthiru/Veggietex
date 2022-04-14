<?php require_once "controllerClientData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Veggietex Client OTP Code</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/A.open-iconic-bootstrap.min.css+animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+aos.css+ionicons.min.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" />
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <span class="text">+254.........</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <span class="text"><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84fdebf1f6e1e9e5ede8c4e1e9e5ede8aae7ebe9">[email&#160;protected]</a></span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Veggietex Ltd</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="clientsignup.php" class="nav-link"><span class="fa fa-user"></span> Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="clientlogin.php" class="nav-link"><span class="fa fa-sign-in"></span> Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">Shop</a>
                            <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                            <a class="dropdown-item" href="product-single.html">Single Product</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item cta cta-colored">
                        <a href="cart.html" class="nav-link"><span class="fa fa-shopping-cart"></span>[0]</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap hero-bread" style="
        background-image: url(images/xbg_1.jpg.pagespeed.ic.-7ny5J_MsG.jpg);
      ">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home</a></span>
                        <span>OTP Code Verification</span>
                    </p>
                    <h1 class="mb-0 bread">Confirm OTP Codey</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section contact-section bg-light">
        <div class="container">

            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">

                    <form action="client-otp.php" class="bg-white p-5 contact-form" method="POST" autocomplete="">

                        <?php
                        if (isset($_SESSION['info'])) {
                        ?>
                            <div class="mb-4 appointment-head" style="padding: 0.4rem 0.4rem">
                                <?php echo $_SESSION['info']; ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="mb-4 appointment-head">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                            <label for="email">Enter Email Verification Code</label>
                            <input class="form-control" type="number" name="otp" placeholder="Verification Code" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="check" value="Submit" class="btn btn-primary py-3 px-5" />
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="contact.html#" class="mouse-icon">
                        <div class="mouse-wheel">
                            <span class="fa fa-arrow-up"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Veggietex Ltd</h2>
                        <p>
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate">
                                <a href="contact.html#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="contact.html#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="contact.html#"><span class="fa fa-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="contact.html#" class="py-2 d-block">Shop</a></li>
                            <li><a href="contact.html#" class="py-2 d-block">About</a></li>
                            <li>
                                <a href="contact.html#" class="py-2 d-block">Journal</a>
                            </li>
                            <li>
                                <a href="contact.html#" class="py-2 d-block">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li>
                                    <a href="contact.html#" class="py-2 d-block">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="contact.html#" class="py-2 d-block">Returns &amp; Exchange</a>
                                </li>
                                <li>
                                    <a href="contact.html#" class="py-2 d-block">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="contact.html#" class="py-2 d-block">Privacy Policy</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="contact.html#" class="py-2 d-block">FAQs</a></li>
                                <li>
                                    <a href="contact.html#" class="py-2 d-block">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="fa fa-map-marker"></span><span class="text"> 203 Fake St. Mountain View, San Francisco, California,
                                        USA</span>
                                </li>
                                <li>
                                    <a href="contact.html#"><span class="fa fa-phone"></span><span class="text"> +2 392 3929 210</span></a>
                                </li>
                                <li>
                                    <a href="contact.html#"><span class="fa fa-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="d2bbbcb4bd92abbda7a0b6bdbfb3bbbcfcb1bdbf">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with
                        <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.bcEq8VJSrX.js"></script>
    <script>
        eval(mod_pagespeed_86UyJnHpGb);
    </script>
    <script>
        eval(mod_pagespeed_zoQgc3t3Re);
    </script>
    <script>
        eval(mod_pagespeed_SsQB3m7fYp);
    </script>
    <script src="js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.eLyFy8w4nG.js"></script>
    <script>
        eval(mod_pagespeed_mlw3ndYDMK);
    </script>
    <script>
        eval(mod_pagespeed_69VjhCuW0L);
    </script>
    <script>
        eval(mod_pagespeed_J60nRfwZt4);
    </script>
    <script>
        eval(mod_pagespeed_oi5Xbs42Pq);
    </script>
    <script src="js/jquery.magnific-popup.min.js+aos.js+jquery.animateNumber.min.js+bootstrap-datepicker.js+scrollax.min.js+google-map.js.pagespeed.jc.uqIYFNzGpR.js"></script>
    <script>
        eval(mod_pagespeed_vlUX_1b$cy);
    </script>
    <script>
        eval(mod_pagespeed_2Ck6ZosDTX);
    </script>
    <script>
        eval(mod_pagespeed_d2KEczPuMT);
    </script>
    <script>
        eval(mod_pagespeed_eiHSUA9jxr);
    </script>
    <script>
        eval(mod_pagespeed_XOcYLOrnXy);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script>
        eval(mod_pagespeed_Tc1bSe$T9c);
    </script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f41f5c4d838958e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>