<?php
require "header.php";
?>
<head>
	<title><?php echo '1-TSI ' . $row['3']['page_header'] ?></title>
	<meta name="<br>" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable information." />

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
							   <h1 class="heading-section"><?php echo '1-TSI ' . $row['3']['page_header'] ?></h1>
							   <h2  style="font-size: smaller;"><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="container">
   		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="<?php echo "TSI.php?language=" . $language ?>">TSI</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex.php?language=" . $language ?>"><?php echo 'SUP ' . $row['3']['page_header'] ?></a></li>

 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>

			<div class="row">
			<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-math.php?language=" . $language ?>" class="course-img" style="background-image: url(images/math.jpg);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "TSI-sup-ex-math.php?language=" . $language ?>">Math</a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-math.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a> </span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-phy.php?language=" . $language ?>" class="course-img" style="background-image: url(images/ph.jpg);">
						</a>
						<div class="desc">
						<h3><a href="<?php echo "TSI-sup-ex-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-phy.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-chi.php?language=" . $language ?>" class="course-img" style="background-image: url(images/ch.jpg);">
						</a>
						<div class="desc">
						<h3><a href="<?php echo "TSI-sup-ex-chi.php?language=" . $language ?>"><?php echo $row['1']['subjects'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-chi.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-info.php?language=" . $language ?>" class="course-img" style="background-image: url(images/info.jpg);">
						</a>
						<div class="desc">
						<h3><a href="<?php echo "TSI-sup-ex-info.php?language=" . $language ?>"><?php echo $row['2']['subjects'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-info.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-gm.php?language=" . $language ?>" class="course-img" style="background-image: url(images/gm.jpg);">
						</a>
						<div class="desc">
						<h3><a href="<?php echo "TSI-sup-ex-gm.php?language=" . $language ?>"><?php echo $row['3']['subjects'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-gm.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "TSI-sup-ex-ge.php?language=" . $language ?>" class="course-img" style="background-image: url(images/ge.jpg);">
						</a>
						<div class="desc">
						<h3><a href="<?php echo "TSI-sup-ex-ge.php?language=" . $language ?>"><?php echo $row['4']['subjects'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "TSI-sup-ex-ge.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<?php
require "footer.php";
?>