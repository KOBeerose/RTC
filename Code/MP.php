<?php
require "header.php";
?>
<head>
	<title>Road To CNC</title>
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
							   <h1 class="heading-section"><?php echo $row['8']['important'] ?></h1>
							   <h2  style="font-size: smaller;"	><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">MP</a></li>


 		</ol>
	</div>
	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>



			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "MP-sup-crs.php?language=" . $language ?>" class="course-img" style="background-image: url(images/sup-crs.png);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "MP-sup-crs.php?language=" . $language ?>"><?php echo 'SUP ' . $row['2']['page_header'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "MP-sup-crs.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "MP-sup-ex.php?language=" . $language ?>" class="course-img" style="background-image: url(images/sup-ex.png);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "MP-sup-ex.php?language=" . $language ?>"><?php echo 'SUP ' . $row['3']['page_header'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "MP-sup-ex.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "MP-spe-crs.php?language=" . $language ?>" class="course-img" style="background-image: url(images/spe-crs.png);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "MP-spe-crs.php?language=" . $language ?>"><?php echo 'SPE ' . $row['2']['page_header'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "MP-spe-crs.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "MP-spe-ex.php?language=" . $language ?>" class="course-img" style="background-image: url(images/spe-ex.png);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "MP-spe-ex.php?language=" . $language ?>"><?php echo 'SPE ' . $row['3']['page_header'] ?></a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "MP-spe-ex.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="<?php echo "MP-cnc.php?language=" . $language ?>" class="course-img" style="background-image: url(images/cnc.png);">
						</a>
						<div class="desc">
							<h3><a href="<?php echo "MP-cnc.php?language=" . $language ?>">CNC</a></h3>
							<p><br>
							</p>
							<span><a href="<?php echo "MP-cnc.php?language=" . $language ?>" class="btn btn-primary btn-sm btn-course"><?php echo $row['13']['important'] ?></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a class="course-img" style="background-image: url(images/tips.png);">
						</a>
						<div class="desc">
							<h3><a><?php echo $row['14']['important'] ?></a></h3>
							<p><br>
							</p>
							<span class="btn btn-primary btn-sm btn-course"><?php echo $row['4']['important'] ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
require "footer.php";
?>