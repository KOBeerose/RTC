<?php
require "header.php";
?>
<head>
	<title><?php echo '2-TSI Math ' . $row['3']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-TSI ' . $row['3']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex.php?language=" . $language ?>"><?php echo '2-TSI ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-ex/math/2-TSI Math EX.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/math/Révisions d'algèbre linéaire.pdf" target="_blank">Révisions d'algèbre linéaire</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction Révisions d'algèbre linéaire.pdf" target="_blank">Correction Révisions d'algèbre linéaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 1 Compléments d'algèbre linéaire.pdf" target="_blank">TD 1 Compléments d'algèbre linéaire</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 1 Compléments d'algèbre linéaire.pdf" target="_blank">Correction TD 1 Compléments d'algèbre linéaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 2 Déterminants.pdf" target="_blank">TD 2 Déterminants</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 2 Déterminants.pdf" target="_blank">Correction TD 2 Déterminants</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 3 Réduction d'endomorphismes.pdf" target="_blank">TD 3 Réduction d'endomorphismes</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 3 Réduction d'endomorphismes.pdf" target="_blank">Correction TD 3 Réduction d'endomorphismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 8 Espaces préhilbertiens.pdf" target="_blank">TD 8 Espaces préhilbertiens</a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 9 Isométries d'un espace euclidien.pdf" target="_blank">TD 9 Isométries d'un espace euclidien</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 9 Isométries d'un espace euclidien.pdf" target="_blank">Correction TD 9 Isométries d'un espace euclidien</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/math/TD 5 Intégration d'une fonction sur un intervalle.pdf" target="_blank">TD 5 Intégration d'une fonction sur un intervalle</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 5 Intégration d'une fonction sur un intervalle.pdf" target="_blank">Correction TD 5 Intégration d'une fonction sur un intervalle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 6 Séries numériques.pdf" target="_blank">TD 6 Séries numériques</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 6 Séries numériques.pdf" target="_blank">Correction TD 6 Séries numériques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 7 Séries entières.pdf" target="_blank">TD 7 Séries entières</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 7 Séries entières.pdf" target="_blank">Correction TD 7 Séries entières</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 10 Séries de Fourier.pdf" target="_blank">TD 10 Séries de Fourier</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 10 Séries de Fourier.pdf" target="_blank">Correction TD 10 Séries de Fourier</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/math/TD 11 Probabilités sur un univers fini.pdf" target="_blank">TD 11 Probabilités sur un univers fini</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 11 Probabilités sur un univers fini.pdf" target="_blank">Correction TD 11 Probabilités sur un univers fini</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 12 Probabilités sur un univers dénombrable.pdf" target="_blank">TD 12 Probabilités sur un univers dénombrable</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 12 Probabilités sur un univers dénombrable.pdf" target="_blank">Correction TD 12 Probabilités sur un univers dénombrable</a></td>
						</tr>
						<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/math/TD 13 Équations différentielles.pdf" target="_blank">TD 13 Équations différentielles</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 13 Équations différentielles.pdf" target="_blank">Correction TD 13 Équations différentielles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/math/TD 14 Fonctions de plusieurs variables.pdf" target="_blank">TD 14 Fonctions de plusieurs variables</a></td>
							<td><a href="pdfs/TSI/spe-ex/math/Correction TD 14 Fonctions de plusieurs variables.pdf" target="_blank">Correction TD 14 Fonctions de plusieurs variables</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>