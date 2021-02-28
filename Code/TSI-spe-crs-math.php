<?php
require "header.php";
?>
<head>
	<title><?php echo '2-TSI Math ' . $row['2']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-crs/math/2-TSI Math Cours.rar" download ><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/math/Compléments d’algèbre linéaire.pdf" target="_blank">Compléments d’algèbre linéaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Déterminants.pdf" target="_blank">Déterminants</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Réduction des endomorphismes.pdf" target="_blank">Réduction des endomorphismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Espaces préhilbertiens.pdf" target="_blank">Espaces préhilbertiens</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/math/Intégrale Impropre.pdf" target="_blank">Intégrale Impropre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Séries numériques.pdf" target="_blank">Séries numériques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Séries entières.pdf" target="_blank">Séries entières</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Séries de Fourier.pdf" target="_blank">Séries de Fourier</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/math/Calcul Différentiel.pdf" target="_blank">Calcul Différentiel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Equations différentielles.pdf" target="_blank">Equations différentielles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Fonctions de plusieurs variables.pdf" target="_blank">Fonctions de plusieurs variables</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/math/Espaces Probabilisés.pdf" target="_blank">Espaces Probabilisés</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Variables aléatoires discrètes.pdf" target="_blank">Variables aléatoires discrètes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/math/Variables aléatoires à densité.pdf" target="_blank">Variables aléatoires à densité</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>