<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
if(!isset($_SESSION)){
    session_start();

}
include("./admin/includes/db.php");
include("./admin/functions/functions.php");

if(!isset($_SESSION['user_id'])){
    echo "
      <script>
        location.replace('/Veggietex/theme/veggietex_ltd/clientlogin.php');
      </script>
    
    ";
  }

  $user_id = $_SESSION['user_id'];

if (isset($_POST['add_to_cart'])) {

    $product_id = $_POST['product_id'];
    $product_quantity = 1;
    print_r($product_id);
    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE p_id = '$product_id' AND client='$user_id'");

    if ($select_cart == true and mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($con, "INSERT INTO `cart`(p_id, qty,client) VALUES('$product_id','$product_quantity',$user_id)");
        $message[] = 'product added to cart succesfully';
    }
}

if (isset($_POST['delete_to_cart'])) {
    $product_id = $_POST['product_id'];
    $delete_cart = mysqli_query($db, "DELETE FROM cart WHERE p_id = $product_id");

    if ($delete_cart == true) {
        $message[] = 'Product deleted from cart';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>VeggieTex Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/A.open-iconic-bootstrap.min.css+animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+aos.css+ionicons.min.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+.css" />
</head>

<body class="goto-here">
    <?php
    include("navbar.php");
    ?>

    <div class="hero-wrap hero-bread" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.-7ny5J_MsG.jpg)">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                    <h1 class="mb-0 bread">My Cart</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                                getCart();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                
               
                
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span id="subtotal-price">0</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span id='total-price'>0</span>
                        </p>
                    </div>
                    <p><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="cart.html#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vegefoods</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="cart.html#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="cart.html#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="cart.html#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="cart.html#" class="py-2 d-block">Shop</a></li>
                            <li><a href="cart.html#" class="py-2 d-block">About</a></li>
                            <li><a href="cart.html#" class="py-2 d-block">Journal</a></li>
                            <li><a href="cart.html#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="cart.html#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="cart.html#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="cart.html#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="cart.html#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="cart.html#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="cart.html#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="cart.html#"><span class="icon icon-phone"></span><span class="text">+2 392
                                            3929 210</span></a></li>
                                <li><a href="cart.html#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="9af3f4fcf5dae3f5efe8fef5f7fbf3f4b4f9f5f7">[email&#160;protected]</span></span></a>
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
                        </script> All rights reserved | This template
                        is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
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
    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
    <script src="../veggietex_ltd/js/cart.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f41f5af7dc9958e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>