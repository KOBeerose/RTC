<div id="overlay"></div>
<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3><?php echo $row['0']['page_footer'] ?></h3>
					<p><?php echo $row['1']['page_footer'] ?>
						<br>-<a href="https://web.facebook.com/Road-To-Cnc-104047221403297" target="_blank"><?php echo $row['2']['page_footer'] ?>
						<br>-<a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['3']['page_footer'] ?>
						<br>-<a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank"><?php echo $row['1']['page_content'] ?></a> Patreon.</p>
				</div>


				<div id="row-legal" class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">

					<h3><?php echo $row['4']['page_footer'] ?></h3>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo "contact.php?language=" . $language . '#contact' ?>"><?php echo $row['5']['page_footer'] ?></a></li>
						<li><a href="<?php echo "about.php?language=" . $language . '#fh5co-testimonial' ?>"><?php echo $row['6']['page_footer'] ?></a></li>
						<li><a href="#"><?php echo $row['7']['page_footer'] ?></a></li>
						<li><a href="#"><?php echo $row['8']['page_footer'] ?></a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; <?php echo $row['9']['page_footer'] ?></small>
						<small class="block">Designed by KOBeerose</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
	var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

	// default example
	simplyCountdown('.simply-countdown-one', {
		year: d.getFullYear(),
		month: d.getMonth() + 1,
		day: d.getDate()
	});

	//jQuery example
	$('#simply-countdown-losange').simplyCountdown({
		year: d.getFullYear(),
		month: d.getMonth() + 1,
		day: d.getDate(),
		enableUtc: false
	});
	</script>

	</body>
</html>