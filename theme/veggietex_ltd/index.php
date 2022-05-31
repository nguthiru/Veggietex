<?php

session_start();

include("./admin/includes/db.php");
include("./admin/functions/functions.php");
?>

<?php

@include 'config.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>VEGGIETEXT_LTD</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css+animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+aos.css+ionicons.min.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+ic.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" />
</head>

<body class="goto-here">
  <?php
  include ('navbar.php');
  ?>
  <section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
      <div class="slider-item" style="
            background-image: url(images/veggietex_farm/4.jpeg);
          ">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate text-center">
              <h1 class="mb-2">Welcome To Veggietex Ltd</h1>
              <!-- <h2 class="subheading mb-4">
                To become one of the top globally impacting agricultural produce companies enriching
                consumers lives with healthy, high quality and innovative products
              </h2> -->
              <p>
                <a href="about.html" class="btn btn-primary">Learn More About Us</a>
              </p>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over $100</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Always Fresh</h3>
              <span>Product well package</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6 order-md-last align-items-stretch d-flex">
              <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="
                    background-image: url(images/xcategory.jpg.pagespeed.ic.ztxibHYuSX.jpg);
                  ">
                <div class="text text-center">
                  <h2>Veggietex Ltd Farm</h2>
                  <p>Get to purchase some of the best agricultural produce grown from Veggietex Ltd Farm Today</p>
                  <p>
                    <a href="index.html#" class="btn btn-primary">Shop now</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="
                    background-image: url(images/veggietex_farm/3.jpeg);
                  ">
                <div class="text px-3 py-1">
                  <!-- <h2 class="mb-0">Farm Area 1</h2> -->
                </div>
              </div>
              <div class="category-wrap ftco-animate img d-flex align-items-end" style="
                    background-image: url(images/veggietex_farm/6.jpeg);
                  ">
                <div class="text px-3 py-1">
                  <!-- <h2 class="mb-0">Farm Area 1</h2> -->
                </div>
              </div><br>
              <div class="category-wrap ftco-animate img d-flex align-items-end" style="
              background-image: url(images/veggietex_farm/7.jpeg);
            ">
                <div class="text px-3 py-1">
                  <!-- <h2 class="mb-0">Farm Area 1</h2> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="
                background-image: url(images/veggietex_farm/12.jpeg);
              ">
            <div class="text px-3 py-1">
              <!-- <h2 class="mb-0">Farm Area 1</h2> -->
            </div>
          </div>
          <div class="category-wrap ftco-animate img d-flex align-items-end" style="
                background-image: url(images/veggietex_farm/19.jpeg);
              ">
            <div class="text px-3 py-1">
              <!-- <h2 class="mb-0">Farm Area 1</h2> -->

              </h2>
            </div>
          </div>
          <br>
          <div class="category-wrap ftco-animate img d-flex align-items-end" style="
          background-image: url(images/veggietex_farm/8.jpeg);
        ">
            <div class="text px-3 py-1">
              <!-- <h2 class="mb-0">Farm Area 1</h2> -->

              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section img" style="
  background-image: url(images/xbg_3.jpg.pagespeed.ic.1Aw-ev149s.jpg);
">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          <span class="subheading">Best Price For You</span>
          <h2 class="mb-4">Deal of the day at Veggietex Ltd</h2>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia
          </p>
          <h3><a href="index.html#">Spinach</a></h3>
          <span class="price">$10 <a href="index.html#">now $5 only</a></span>
          <div id="timer" class="d-flex mt-5">
            <div class="time" id="days"></div>
            <div class="time pl-3" id="hours"></div>
            <div class="time pl-3" id="minutes"></div>
            <div class="time pl-3" id="seconds"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Featured Products</span>
          <h2 class="mb-4">Our Products</h2>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia
          </p>
        </div>
      </div>
    </div>
    <div class="container">


      <?php

      getPro();

      ?>


      
    </div>
  </section>


  <hr />
  <section class="ftco-section ftco-partner">
    <div class="container">
      <div class="row">
        <div class="col-sm ftco-animate">
          <a href="index.html#" class="partner"><img src="images/xpartner-1.png.pagespeed.ic.RHSia-jQRH.png" class="img-fluid" alt="Colorlib Template" data-pagespeed-url-hash="3780995850" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="index.html#" class="partner"><img src="images/xpartner-2.png.pagespeed.ic.H3qolt-W2X.png" class="img-fluid" alt="Colorlib Template" data-pagespeed-url-hash="4075495771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="index.html#" class="partner"><img src="images/xpartner-3.png.pagespeed.ic.dC-W4WLFT0.png" class="img-fluid" alt="Colorlib Template" data-pagespeed-url-hash="75028396" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="index.html#" class="partner"><img src="images/xpartner-4.png.pagespeed.ic.sLtytF9G9z.png" class="img-fluid" alt="Colorlib Template" data-pagespeed-url-hash="369528317" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="index.html#" class="partner"><img src="images/xpartner-5.png.pagespeed.ic.tcQzKAf5Lc.png" class="img-fluid" alt="Colorlib Template" data-pagespeed-url-hash="664028238" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px" class="mb-0">
            Subcribe to our Newsletter
          </h2>
          <span>Get e-mail updates about our latest shops and special
            offers</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="index.html#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Enter email address" />
              <input type="submit" value="Subscribe" class="submit px-3" />
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
                  <span class="fa fa-map-marker"></span><span class="text"> 203 Fake St. Mountain View, San Francisco,
                    California,
                    USA</span>
                </li>
                <li>
                  <a href="contact.html#"><span class="fa fa-phone"></span><span class="text"> +2 392 3929
                      210</span></a>
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
    </fo <div id="ftco-loader" class="show fullscreen">
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
    <script src="js/add_cart.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f41f5a7c98f958e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>