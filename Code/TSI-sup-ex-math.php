<?php
require "header.php";
?>
<head>
	<title><?php echo '1-TSI Math ' . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-ex/math/1-TSI Math Ex.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/geometry.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/math/TD 1 nombres complexes.pdf" target="_blank">TD 1 nombres complexes</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 1 Nombres complexes.pdf" target="_blank">Correction TD 1 Nombres complexes2</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 3 geometrie du plan.pdf" target="_blank">TD 3 geometrie du plan</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 3 Géométrie du plan.pdf" target="_blank">Correction TD 3 Géométrie du plan</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 5 geometrie de l espace.pdf" target="_blank">TD 5 geometrie de l'espace</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 5 Géométrie de l’espace.pdf" target="_blank">Correction TD 5 Géométrie de l’espace</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 6 courbes parametrees coniques.pdf" target="_blank">TD 6 courbes parametrees coniques</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 6 Courbes paramétrées - Coniques.pdf" target="_blank">Correction TD 6 Courbes paramétrées - Coniques</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/math/TD 2 fonctions usuelles.pdf" target="_blank">TD 2 fonctions usuelles</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 2 Fonctions usuelles.pdf" target="_blank">Correction TD 2 Fonctions usuelles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 7 ensembles de nombres.pdf" target="_blank">TD 7 ensembles de nombres</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 7 Ensembles de nombres.pdf" target="_blank">Correction TD 7 Ensembles de nombres</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 8 suites.pdf" target="_blank">TD 8 suites</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 8 Suites.pdf" target="_blank">Correction TD 8 Suites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 10 limites.pdf" target="_blank">TD 10 limites</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 10 Limites.pdf" target="_blank">Correction TD 10 Limites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 14 integration.pdf" target="_blank">TD 14 integration</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 14 Integration.pdf" target="_blank">Correction TD 14 Integration</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/math/TD 4 equations differentielles.pdf" target="_blank">TD 4 equations differentielles</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 4 Equations différentielles .pdf" target="_blank">Correction TD 4 Equations différentielles </a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 12 derivation.pdf" target="_blank">TD 12 derivation</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 12 Dérivation.pdf" target="_blank">Correction TD 12 Dérivation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 15 calcul differentiel.pdf" target="_blank">TD 15 calcul differentiel</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 15 Calcul différentiel.pdf" target="_blank">Correction TD 15 Calcul différentiel</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/math/TD 9 polynomes.pdf" target="_blank">TD 9 polynomes</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 9 Polynomes.pdf" target="_blank">Correction TD 9 Polynomes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 11 espaces vectoriels applications lineaires.pdf" target="_blank">TD 11 espaces vectoriels applications lineaires</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 11 Espaces vectoriels - Applications linéaires.pdf" target="_blank">Correction TD 11 Espaces vectoriels - Applications linéaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/math/TD 13 matrices.pdf" target="_blank">TD 13 matrices</a></td>
							<td><a href="pdfs/TSI/sup-ex/math/Correction TD 13 Matrices.pdf" target="_blank">Correction TD 13 Matrices</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>