<?php
include("header.php");
?>
	<!-- banner -->


	</div>
	<!--//banner -->
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>C</span>ontact
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="contact-row">
				<div class="col-md-6 contact-text1">
					<h4>Contact Our
						<span>HEC Academy</span>
					</h4>
					<p align="justify">The Institute is renowned for its uncompromising commitment to quality of education and flexibility of studying, as well as offering a range of popular courses for the most competitive prices.The college boasts a genuinely warm and friendly atmosphere that is conducive to learning and teaching.
					</p>
				</div>
				<div class="col-md-6 contact-w3lsright">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.979673636862!2d76.9824353147086!3d29.6913689820122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e70222da25b65%3A0x3ffd86d7fc6db271!2sHarry+English+Club!5e0!3m2!1sen!2sin!4v1516001897038"
					    allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="contact-lsleft">
		<div class="container">
			<div class="address-grid">
				<h4>Contact Details</h4>
				<ul class="w3_address">
					<li>
						<span class="fa fa-globe" aria-hidden="true"></span>HARRY ENGLISH CLUB S.C.O 90 NEAR CANARA BANK 
BEHIND BUSSTAND KARNAL
					</li>
					<li>
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<a href="mailto:info@example.com"> harrystudyabroad@gmail.com</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span>7206666622,9034070535,9996712375
					</li>
				</ul>
			</div>
			<div class="contact-grid agileits">
				<h4>Get In Touch</h4>
				<form action="email.php" method="post">
					<div class="">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="">
						<input type="text" name="Phn" placeholder="Phone Number" required="">
					</div>
					<div class="">
						<textarea name="Message" placeholder="Message..." required=""></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->


	<!-- footer -->
	<?php
include("footer.php");
?>
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>