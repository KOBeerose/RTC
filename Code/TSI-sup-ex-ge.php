<?php
require "header.php";
?>
<head>
	<title>1-TSI  <?php echo $row['4']['subjects'] . " " . $row['3']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable germation." />

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
			<li class="breadcrumb-item"><a href="<?php echo "TSI.php?language=" . $language ?>">1-TSI</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex.php?language=" . $language ?>"><?php echo '1-TSI ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex-ge.php?language=" . $language ?>"><?php echo $row['4']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-ex/ge/1-TSI Ge Ex.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['3']['page_header'] ?></td>
							<td style="text-align: center;">Correction</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/electronics1'.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/ge/TD Transformation de Laplace.pdf" target="_blank">TD Transformation de Laplace</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Transformation de Laplace.pdf" target="_blank">Correction TD Transformation de Laplace</a></td>
						</tr>

						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/ge/TD Schéma bloc et FTBF.pdf" target="_blank">TD Schéma bloc et FTBF</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Schéma bloc et FTBF.pdf" target="_blank">Correction TD Schéma bloc et FTBF</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/ge/TD Premier ordre.pdf" target="_blank">TD Premier ordre</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Premier ordre.pdf" target="_blank">Correction TD Premier ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/ge/TD Second ordre.pdf" target="_blank">TD Second ordre</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Second ordre.pdf" target="_blank">Correction TD Second ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/ge/TD Bode 1° ordre.pdf" target="_blank">TD Bode 1° ordre</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Bode 1° ordre.pdf" target="_blank">Correction TD Bode 1° ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/ge/TD Bode 2° ordre.pdf" target="_blank">TD Bode 2° ordre</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Bode 2° ordre.pdf" target="_blank">Correction TD Bode 2° ordre</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;"><img src="images/electrical'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/ge/TD Modélisation.pdf" target="_blank">TD Modélisation</a></td>
							<td><a href="pdfs/TSI/sup-ex/ge/Correction TD Modélisation.pdf" target="_blank">Correction TD Modélisation</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>