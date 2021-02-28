<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['4']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-TSI ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI.php?language=" . $language ?>">2-TSI</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs.php?language=" . $language ?>"><?php echo '2-TSI ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs-ge.php?language=" . $language ?>"><?php echo $row['4']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-crs/ge/2-TSI Ge Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="7" style="text-align: center;"><img src="images/electronics1'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/ge/SYSTEMES ASSERVIS - NOTIONS .pdf" target="_blank">SYSTEMES ASSERVIS - NOTIONS </a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/STABILITE DES SYSTEMES ASSERVIS.pdf" target="_blank">STABILITE DES SYSTEMES ASSERVIS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/PRECISION DES SYSTEMES ASSERVIS.pdf" target="_blank">PRECISION DES SYSTEMES ASSERVIS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/NOTION DE CORRECTION DES SYSTEMES ASSERVIS.pdf" target="_blank">NOTION DE CORRECTION DES SYSTEMES ASSERVIS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/SYSTEMES LINEAIRES CONTINUS ET INVARIANTS.pdf" target="_blank">SYSTEMES LINEAIRES CONTINUS ET INVARIANTS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/ANALYSE FREQUENTIELLE DES SYSTEMES LINEAIRES.pdf" target="_blank">ANALYSE FREQUENTIELLE DES SYSTEMES LINEAIRES</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/ANALYSE TEMPORELLE DES SYSTEMES LINEAIRES.pdf" target="_blank">ANALYSE TEMPORELLE DES SYSTEMES LINEAIRES</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/electrical'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/ge/Les onduleurs autonomes.pdf" target="_blank">Les onduleurs autonomes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/Notions sur les réseaux informatiques .pdf" target="_blank">Notions sur les réseaux informatiques </a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/ge/Transfomation de Laplace.pdf" target="_blank">Transfomation de Laplace</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>