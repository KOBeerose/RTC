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
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div id="case"class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1> <?php echo $row['0']['page_content'] ?></h1>
                                   <h2><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>

									<input data-idnt-target='#idnt' class="btn btn-primary btn-lg btn-learn" type='button' value= "<?php echo $row['2']['page_content'] ?>">
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div id="case" class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><?php echo $row['3']['page_content'] ?></h1>
                                   <h2><?php echo $row['1']['page_content'] ?><a href="#" target="_blank">Patreon</a></h2>
								   <input data-idnt-target='#idnt' class="btn btn-primary btn-lg btn-learn" type='button' value= "<?php echo $row['2']['page_content'] ?>">
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div id="case"class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><?php echo $row['4']['page_content'] ?></h1>
								   <h2><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
								   <input data-idnt-target='#idnt' class="btn btn-primary btn-lg btn-learn" type='button' value= "<?php echo $row['2']['page_content'] ?>">

			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span><?php echo $row['5']['page_content'] ?></span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
								<div class="testimony-slide active text-center">
									<a href="https://www.facebook.com/Associationaesf" target="_blank"><div class="user" style="background-image: url(images/AAESF.png);"></div></a>
									<span>L'AAESF<br><small><?php echo $row['16']['important'] ?></small></span>
									<blockquote>
										<p>&ldquo;<?php echo $row['17']['page_content'] ?>&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<a href="https://codeable.io/developers/abdelmalek-el-mellouki/" target="_blank"><div class="user" style="background-image: url(images/meloki.png);"></div></a>
									<span>Abdelmalek El Mellouki<br><small><?php echo $row['6']['page_content'] ?></small></span>
									<blockquote>
										<p>&ldquo;<?php echo $row['7']['page_content'] ?>&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<a href="https://www.linkedin.com/in/mahmoud-bettouch-4678599b/" target="_blank"><div class="user" style="background-image: url(images/mahmoud.jpg);"></div></a>
									<span>Mahmoud Bettouch<br><small><?php echo $row['6']['important'] ?></small></span>
									<blockquote>
										<p>&ldquo;<?php echo $row['8']['page_content'] ?>&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<!--<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/he.jpg);"></div>
									<span>Mouad mrwan mraouni<br><small><?php echo $row['7']['important'] ?></small></span>
									<blockquote>
										<p>&ldquo;<?php echo $row['9']['page_content'] ?>&rdquo;</p>
									</blockquote>
								</div>
								<p><a href="#" style="cursor: default;" onclick="return false;"><?php echo $row['4']['important'] ?></a></p>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box fadeInUp animated-fast">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog <?php echo $row['0']['important'] ?> <?php echo $row['5']['important'] ?></h2>
					<p><?php echo $row['10']['page_content'] ?></p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box fadeInUp animated-fast">
					<div class="fh5co-event">
						<div class="date text-center"><span class="blueish"><?php echo $row['4']['important'] ?><br></span></div>
						<h3><?php echo $row['1']['important'] ?></h3>
						<p><?php echo $row['11']['page_content'] ?></p>
					</div>
				</div>
				<div class="col-md-4 animate-box fadeInUp animated-fast">
					<div class="fh5co-event">
						<div class="date text-center"><span class="blueish"><?php echo $row['4']['important'] ?><br></span></div>
						<h3><?php echo $row['2']['important'] ?></h3>
						<p><?php echo $row['12']['page_content'] ?></p>
					</div>
				</div>
				<div class="col-md-4 animate-box fadeInUp animated-fast">
					<div class="fh5co-event">
						<div class="date text-center"><span class="blueish"><?php echo $row['4']['important'] ?><br></span></div>
						<h3><?php echo $row['3']['important'] ?></h3>
						<p><?php echo $row['13']['page_content'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>