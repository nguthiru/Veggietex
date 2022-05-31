<?php
include("./admin/includes/db.php");
include("./admin/functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
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



	if (!isset($_SESSION['user_id'])) {
		echo "
		  <script>
			location.replace('/Veggietex/theme/veggietex_ltd/clientlogin.php');
		  </script>
		
		";
	}
	?>

	<div class="hero-wrap hero-bread" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.-7ny5J_MsG.jpg)">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
					<h1 class="mb-0 bread">Checkout</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">
					<form action="place_order.php" class="billing-form" method="post">
						<h3 class="mb-4 billing-heading">Shipping Details</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" placeholder="" name="firstname">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" placeholder="" name="lastname">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="country">State / Country</label>
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" class="form-control" name="country">
											<option value="">France</option>
											<option value="">Italy</option>
											<option value="">Philippines</option>
											<option value="">South Korea</option>
											<option value="">Hongkong</option>
											<option value="">Japan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="streetaddress">Street Address</label>
									<input type="text" class="form-control" placeholder="House number and street name" name="street">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" name="apartment">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="towncity">Town / City</label>
									<input type="text" class="form-control" placeholder="" name="towncity">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="postcodezip">Postcode / ZIP *</label>
									<input type="text" class="form-control" placeholder="" name="postcodezip">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" placeholder="" name="phone">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailaddress">Email Address</label>
									<input type="text" class="form-control" placeholder="" name="email">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">

							</div>
						</div>
				</div>
				<div class="col-xl-5">
					<div class="row mt-5 pt-3">
						<div class="col-md-12 d-flex mb-5">
							<div class="cart-detail cart-total p-3 p-md-4">
								<h3 class="billing-heading mb-4">Cart Total</h3>
								<?php
								$user_id = $_SESSION['user_id'];
								$total_products = mysqli_query($con, "SELECT * FROM `cart` WHERE client=$user_id AND ordered=0;");
								$total = 0;
								while ($row_cart = mysqli_fetch_array($total_products)) {

									$p_id = $row_cart['p_id'];
									$pro_qty = $row_cart['qty'];
									$get_products = "select * from products where product_id='$p_id'";

									$run_products = mysqli_query($con, $get_products);
									while ($row_products = mysqli_fetch_array($run_products)) {
										$sub_total = $row_products['product_price'] * $pro_qty;
										$total = $total + $sub_total;
									}
								}
								echo "
									
									<p class='d-flex'>
										<span>Subtotal</span>
										<span>$$total</span>
									</p>
									<p class='d-flex total-price'>
										<span>Total</span>
										<span>$$total</span>
									</p>
									";


								?>

								<p><input type="submit" class="btn btn-primary py-3 px-4" value="Place an Order" name="place_order"></p>

							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>

	<script src="js/checkout.js"></script>
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

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f41f5b05f5c958e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>