<?php
require "header.php";
?>
<head>
	<title>Road To CNC</title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable information." />

</head>

	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section"><?php echo $row['4']['page_header'] ?></h1>
								   <h2 style="font-size: smaller;"><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span><?php echo $row['0']['about_page'] ?></span>
				<h2><?php echo $row['1']['about_page'] ?></h2>
				<?php echo $row['2']['about_page'] ?>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/cover.jpg">
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span><?php echo $row['3']['about_page'] ?></span></h2>
				</div>
			</div>
			<div  class="item">
				<div class="testimony-slide active text-center">
					<a href="https://www.linkedin.com/in/taha-elghabi-6b0683200/" target="_blank"><div class="user" style="background-image: url(images/mee.jpg);"></div></a>
					<span>Taha ElGhabi<br><small><?php echo $row['4']['about_page'] . ' & CEO' ?></small></span>
					<blockquote>
						<p>&ldquo;<?php echo $row['5']['about_page'] ?>&rdquo;</p>
					</blockquote>
				</div>
			</div>

		</div>
	</div>

<?php
require "footer.php";
?>