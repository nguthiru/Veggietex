<?php require_once "controllerClientData.php"; ?>
<?php
echo $_SESSION['user_id'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM clienttable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: clientresetcode.php');
            }
        } else {
            header('Location: client-otp.php');
        }
    }
} else {
    header('Location: clientlogin.php');
}
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $fetch_info['name'] ?> <span class="fa fa-user"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="clientforgotpassword.php">Reset Password</a>
                            <a class="dropdown-item" href="clientlogout.php">logout</a>

                        </div>
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
                        <a href="cart.html" class="nav-link"><span class="fa fa-shopping-cart"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="
            background-image: url(images/xbg_1.jpg.pagespeed.ic.-7ny5J_MsG.jpg);
          ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                            <h2 class="subheading mb-4">
                                We deliver organic vegetables &amp; fruits
                            </h2>
                            <p>
                                <a href="index.html#" class="btn btn-primary">View Details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="
            background-image: url(images/xbg_2.jpg.pagespeed.ic.lyFz8QyM69.jpg);
          ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">
                                We deliver organic vegetables &amp; fruits
                            </h2>
                            <p>
                                <a href="index.html#" class="btn btn-primary">View Details</a>
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
                                    <h2>Vegetables</h2>
                                    <p>Protect the health of every home</p>
                                    <p>
                                        <a href="index.html#" class="btn btn-primary">Shop now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="
                    background-image: url(images/xcategory-1.jpg.pagespeed.ic.ExU1WNf6Ou.jpg);
                  ">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="index.html#">Fruits</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end" style="
                    background-image: url(images/xcategory-2.jpg.pagespeed.ic.og52QZznpe.jpg);
                  ">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="index.html#">Vegetables</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="
                background-image: url(images/xcategory-3.jpg.pagespeed.ic.R3EHoRdwQu.jpg);
              ">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="index.html#">Juices</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end" style="
                background-image: url(images/xcategory-4.jpg.pagespeed.ic.qQFCLVgz5S.jpg);
              ">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="index.html#">Dried</a></h2>
                        </div>
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
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod">
                            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script data-pagespeed-no-defer>
                                //<![CDATA[
                                (function() {
                                    for (
                                        var g =
                                            "function" == typeof Object.defineProperties ?
                                            Object.defineProperty :
                                            function(b, c, a) {
                                                if (a.get || a.set)
                                                    throw new TypeError(
                                                        "ES3 does not support getters and setters."
                                                    );
                                                b != Array.prototype &&
                                                    b != Object.prototype &&
                                                    (b[c] = a.value);
                                            },
                                            h =
                                            "undefined" != typeof window && window === this ?
                                            this :
                                            "undefined" != typeof global && null != global ?
                                            global :
                                            this,
                                            k = ["String", "prototype", "repeat"],
                                            l = 0; l < k.length - 1; l++
                                    ) {
                                        var m = k[l];
                                        m in h || (h[m] = {});
                                        h = h[m];
                                    }
                                    var n = k[k.length - 1],
                                        p = h[n],
                                        q = p ?
                                        p :
                                        function(b) {
                                            var c;
                                            if (null == this)
                                                throw new TypeError(
                                                    "The 'this' value for String.prototype.repeat must not be null or undefined"
                                                );
                                            c = this + "";
                                            if (0 > b || 1342177279 < b)
                                                throw new RangeError("Invalid count value");
                                            b |= 0;
                                            for (var a = ""; b;)
                                                if ((b & 1 && (a += c), (b >>>= 1))) c += c;
                                            return a;
                                        };
                                    q != p &&
                                        null != q &&
                                        g(h, n, {
                                            configurable: !0,
                                            writable: !0,
                                            value: q
                                        });
                                    var t = this;

                                    function u(b, c) {
                                        var a = b.split("."),
                                            d = t;
                                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                        for (var e; a.length && (e = a.shift());)
                                            a.length || void 0 === c ?
                                            d[e] ?
                                            (d = d[e]) :
                                            (d = d[e] = {}) :
                                            (d[e] = c);
                                    }

                                    function v(b) {
                                        var c = b.length;
                                        if (0 < c) {
                                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                            return a;
                                        }
                                        return [];
                                    }

                                    function w(b) {
                                        var c = window;
                                        if (c.addEventListener) c.addEventListener("load", b, !1);
                                        else if (c.attachEvent) c.attachEvent("onload", b);
                                        else {
                                            var a = c.onload;
                                            c.onload = function() {
                                                b.call(this);
                                                a && a.call(this);
                                            };
                                        }
                                    }
                                    var x;

                                    function y(b, c, a, d, e) {
                                        this.h = b;
                                        this.j = c;
                                        this.l = a;
                                        this.f = e;
                                        this.g = {
                                            height: window.innerHeight ||
                                                document.documentElement.clientHeight ||
                                                document.body.clientHeight,
                                            width: window.innerWidth ||
                                                document.documentElement.clientWidth ||
                                                document.body.clientWidth,
                                        };
                                        this.i = d;
                                        this.b = {};
                                        this.a = [];
                                        this.c = {};
                                    }

                                    function z(b, c) {
                                        var a,
                                            d,
                                            e = c.getAttribute("data-pagespeed-url-hash");
                                        if ((a = e && !(e in b.c)))
                                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                            else {
                                                d = c.getBoundingClientRect();
                                                var f = document.body;
                                                a =
                                                    d.top +
                                                    ("pageYOffset" in window ?
                                                        window.pageYOffset :
                                                        (document.documentElement || f.parentNode || f)
                                                        .scrollTop);
                                                d =
                                                    d.left +
                                                    ("pageXOffset" in window ?
                                                        window.pageXOffset :
                                                        (document.documentElement || f.parentNode || f)
                                                        .scrollLeft);
                                                f = a.toString() + "," + d;
                                                b.b.hasOwnProperty(f) ?
                                                    (a = !1) :
                                                    ((b.b[f] = !0),
                                                        (a = a <= b.g.height && d <= b.g.width));
                                            }
                                        a && (b.a.push(e), (b.c[e] = !0));
                                    }
                                    y.prototype.checkImageForCriticality = function(b) {
                                        b.getBoundingClientRect && z(this, b);
                                    };
                                    u(
                                        "pagespeed.CriticalImages.checkImageForCriticality",
                                        function(b) {
                                            x.checkImageForCriticality(b);
                                        }
                                    );
                                    u(
                                        "pagespeed.CriticalImages.checkCriticalImages",
                                        function() {
                                            A(x);
                                        }
                                    );

                                    function A(b) {
                                        b.b = {};
                                        for (
                                            var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length;
                                            ++d
                                        )
                                            a = a.concat(v(document.getElementsByTagName(c[d])));
                                        if (a.length && a[0].getBoundingClientRect) {
                                            for (d = 0;
                                                (c = a[d]); ++d) z(b, c);
                                            a = "oh=" + b.l;
                                            b.f && (a += "&n=" + b.f);
                                            if ((c = !!b.a.length))
                                                for (
                                                    a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length;
                                                    ++d
                                                ) {
                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                    131072 >= a.length + e.length && (a += e);
                                                }
                                            b.i &&
                                                ((e =
                                                        "&rd=" + encodeURIComponent(JSON.stringify(B()))),
                                                    131072 >= a.length + e.length && (a += e),
                                                    (c = !0));
                                            C = a;
                                            if (c) {
                                                d = b.h;
                                                b = b.j;
                                                var f;
                                                if (window.XMLHttpRequest) f = new XMLHttpRequest();
                                                else if (window.ActiveXObject)
                                                    try {
                                                        f = new ActiveXObject("Msxml2.XMLHTTP");
                                                    } catch (r) {
                                                        try {
                                                            f = new ActiveXObject("Microsoft.XMLHTTP");
                                                        } catch (D) {}
                                                    }
                                                f &&
                                                    (f.open(
                                                            "POST",
                                                            d +
                                                            (-1 == d.indexOf("?") ? "?" : "&") +
                                                            "url=" +
                                                            encodeURIComponent(b)
                                                        ),
                                                        f.setRequestHeader(
                                                            "Content-Type",
                                                            "application/x-www-form-urlencoded"
                                                        ),
                                                        f.send(a));
                                            }
                                        }
                                    }

                                    function B() {
                                        var b = {},
                                            c;
                                        c = document.getElementsByTagName("IMG");
                                        if (!c.length) return {};
                                        var a = c[0];
                                        if (!("naturalWidth" in a && "naturalHeight" in a))
                                            return {};
                                        for (var d = 0;
                                            (a = c[d]); ++d) {
                                            var e = a.getAttribute("data-pagespeed-url-hash");
                                            e &&
                                                ((!(e in b) &&
                                                        0 < a.width &&
                                                        0 < a.height &&
                                                        0 < a.naturalWidth &&
                                                        0 < a.naturalHeight) ||
                                                    (e in b &&
                                                        a.width >= b[e].o &&
                                                        a.height >= b[e].m)) &&
                                                (b[e] = {
                                                    rw: a.width,
                                                    rh: a.height,
                                                    ow: a.naturalWidth,
                                                    oh: a.naturalHeight,
                                                });
                                        }
                                        return b;
                                    }
                                    var C = "";
                                    u("pagespeed.CriticalImages.getBeaconData", function() {
                                        return C;
                                    });
                                    u(
                                        "pagespeed.CriticalImages.Run",
                                        function(b, c, a, d, e, f) {
                                            var r = new y(b, c, a, e, f);
                                            x = r;
                                            d &&
                                                w(function() {
                                                    window.setTimeout(function() {
                                                        A(r);
                                                    }, 0);
                                                });
                                        }
                                    );
                                })();

                                pagespeed.CriticalImages.Run(
                                    "/mod_pagespeed_beacon",
                                    "https://preview.colorlib.com/theme/vegefoods/index.html",
                                    "-ilGEe-FWC",
                                    true,
                                    false,
                                    "m-WY8PWBzgM"
                                );
                                //]]>
                            </script>
                            <img class="img-fluid" src="images/xproduct-1.jpg.pagespeed.ic.RdfZ4KlMmu.jpg" alt="Colorlib Template" data-pagespeed-url-hash="618172125" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Bell Pepper</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                        <span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="fa fa-bars"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="fa fa-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-2.jpg.pagespeed.ic.m9iBNBgCeW.jpg" alt="Colorlib Template" data-pagespeed-url-hash="912672046" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Strawberry</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-3.jpg.pagespeed.ic.c75YZ2rFDh.jpg" alt="Colorlib Template" data-pagespeed-url-hash="1207171967" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Green Beans</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-4.jpg.pagespeed.ic.UHkUnCwhwn.jpg" alt="Colorlib Template" data-pagespeed-url-hash="1501671888" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Purple Cabbage</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-5.jpg.pagespeed.ic.8Sy0Fm63ES.jpg" alt="Colorlib Template" data-pagespeed-url-hash="1796171809" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                        <span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-6.jpg.pagespeed.ic.C2XYE6iMVK.jpg" alt="Colorlib Template" data-pagespeed-url-hash="2090671730" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Brocolli</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-7.jpg.pagespeed.ic.dIgf-pp-Bs.jpg" alt="Colorlib Template" data-pagespeed-url-hash="2385171651" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Carrots</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.html#" class="img-prod"><img class="img-fluid" src="images/xproduct-8.jpg.pagespeed.ic.T3w4IDitz2.jpg" alt="Colorlib Template" data-pagespeed-url-hash="2679671572" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="index.html#">Fruit Juice</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.html#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.html#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="index.html#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
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
                    <h2 class="mb-4">Deal of the day</h2>
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
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts. Separated
                        they live in
                    </p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="
                      background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                    ">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="
                      background-image: url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg);
                    ">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="
                      background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                    ">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="
                      background-image: url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg);
                    ">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">
                                        Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts.
                                    </p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <a href="index.html#" class="mouse-icon">
                        <div class="mouse-wheel">
                            <span class="ion-ios-arrow-up"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vegefoods</h2>
                        <p>
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate">
                                <a href="index.html#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="index.html#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="index.html#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.html#" class="py-2 d-block">Shop</a></li>
                            <li><a href="index.html#" class="py-2 d-block">About</a></li>
                            <li><a href="index.html#" class="py-2 d-block">Journal</a></li>
                            <li>
                                <a href="index.html#" class="py-2 d-block">Contact Us</a>
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
                                    <a href="index.html#" class="py-2 d-block">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="index.html#" class="py-2 d-block">Returns &amp; Exchange</a>
                                </li>
                                <li>
                                    <a href="index.html#" class="py-2 d-block">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="index.html#" class="py-2 d-block">Privacy Policy</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="index.html#" class="py-2 d-block">FAQs</a></li>
                                <li>
                                    <a href="index.html#" class="py-2 d-block">Contact</a>
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
                                    <span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California,
                                        USA</span>
                                </li>
                                <li>
                                    <a href="index.html#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a>
                                </li>
                                <li>
                                    <a href="index.html#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="9ef7f0f8f1dee7f1ebecfaf1f3fff7f0b0fdf1f3">[email&#160;protected]</span></span></a>
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
                        <i class="icon-heart color-danger" aria-hidden="true"></i> by
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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f41f5a7c98f958e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>