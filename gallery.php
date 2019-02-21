<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.php");

?>


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
				<li>Gallery</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur <span>G</span>allery
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="agileinfo-gallery-row">
					<?php
		

	

				
$r=$db->gallery();
			
while($row=mysql_fetch_array($r))
				
{
				
?>
				<div class="col-xs-4 w3gallery-grids">
					<a href="images/<?php echo $row['2']?>" class="imghvr-hinge-right figure">
						<img src="images/<?php echo $row['2']?>" alt="" title="HEC Classroom" width="400px;" height="500px;"/>
						<div class="agile-figcaption">
							<h4><?php echo $row['1'];?></h4>
						</div>
					</a>
				</div>
				<?php 
}
?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Gallery -->

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
	<!-- simple-lightbox -->
	<script type="text/javascript" src="js/simple-lightbox.js"></script>	
	<script>
		$(function () {
			var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
				navText: ['&lsaquo;', '&rsaquo;']
			});
		});
	</script>
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<!-- Light-box css -->
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