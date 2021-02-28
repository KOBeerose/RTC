<?php
require "header.php";
?>
<head>
	<title><?php echo '1-MP Math ' . $row['3']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '1-MP ' . $row['3']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">1-MP</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-ex.php?language=" . $language ?>"><?php echo '1-MP ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-ex-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/sup-ex/math/1-MP Math Ex.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="18" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/math/TD 1 Logique.pdf" target="_blank">TD 1 Logique</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 1 Logique.pdf" target="_blank">Correction TD 1 Logique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 2 Derivation.pdf" target="_blank">TD 2 Derivation</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 2 Derivation.pdf" target="_blank">Correction TD 2 Derivation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 3 Groupe Symetrique.pdf" target="_blank">TD 3 Groupe Symetrique</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 3 Groupe Symetrique.pdf" target="_blank">Correction TD 3 Groupe Symetrique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 5 Binome.pdf" target="_blank">TD 5 Binome</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 5 Binome.pdf" target="_blank">Correction TD 5 Binome</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 6 Systemes.pdf" target="_blank">TD 6 Systemes</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 6 Systemes.pdf" target="_blank">Correction TD 6 Systemes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 8 Fonctions.pdf" target="_blank">TD 8 Fonctions</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 8 Fonctions.pdf" target="_blank">Correction TD 8 Fonctions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 14 Trigonometrie Hyperbolique.pdf" target="_blank">TD 14 Trigonometrie Hyperbolique</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 14 Trigonometrie Hyperbolique.pdf" target="_blank">Correction TD 14 Trigonometrie Hyperbolique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 15 Primitives.pdf" target="_blank">TD 15 Primitives</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 15 Primitives.pdf" target="_blank">Correction TD 15 Primitives</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 17 Reels.pdf" target="_blank">TD 17 Reels</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 17 Reels.pdf" target="_blank">Correction TD 17 Reels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 18 Suites.pdf" target="_blank">TD 18 Suites</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 18 Suites.pdf" target="_blank">Correction TD 18 Suites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 19 Comparaison Suites.pdf" target="_blank">TD 19 Comparaison Suites</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 19 Comparaison Suites.pdf" target="_blank">Correction TD 19 Comparaison Suites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 20 Limites.pdf" target="_blank">TD 20 Limites</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 20 Limites.pdf" target="_blank">Correction TD 20 Limites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 21 Continuite.pdf" target="_blank">TD 21 Continuite</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 21 Continuite.pdf" target="_blank">Correction TD 21 Continuite</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 24 Structures.pdf" target="_blank">TD 24 Structures</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 24 Structures.pdf" target="_blank">Correction TD 24 Structures</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 25 Arithmetique.pdf" target="_blank">TD 25 Arithmetique</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 25 Arithmetique.pdf" target="_blank">Correction TD 25 Arithmetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 26 Polynomes.pdf" target="_blank">TD 26 Polynomes</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 26 Polynomes.pdf" target="_blank">Correction TD 26 Polynomes</a></td>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 31 Integration.pdf" target="_blank">TD 31 Integration</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 31 Integration.pdf" target="_blank">Correction TD 31 Integration</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 32 Series.pdf" target="_blank">TD 32 Series</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 32 Series.pdf" target="_blank">Correction TD 32 Series</a></td>
						<tr>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/geometry.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/math/TD 7 Complexes.pdf" target="_blank">TD 7 Complexes</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 7 Complexes.pdf" target="_blank">Correction TD 7 Complexes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 36 Produit Scalaire.pdf" target="_blank">TD 36 Produit Scalaire</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 36 Produit Scalaire.pdf" target="_blank">Correction TD 36 Produit Scalaire</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/math/TD 16 Equadiff.pdf" target="_blank">TD 16 Equadiff</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 16 Equadiff.pdf" target="_blank">Correction TD 16 Equadiff</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/math/TD 28 Espaces Vectoriels.pdf" target="_blank">TD 28 Espaces Vectoriels</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 28 Espaces Vectoriels.pdf" target="_blank">Correction TD 28 Espaces Vectoriels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 29 Dimension.pdf" target="_blank">TD 29 Dimension</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 29 Dimension.pdf" target="_blank">Correction TD 29 Dimension</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 30 Matrices.pdf" target="_blank">TD 30 Matrices</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 30 Matrices.pdf" target="_blank">Correction TD 30 Matrices</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 34 Determinants.pdf" target="_blank">TD 34 Determinants</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 34 Determinants.pdf" target="_blank">Correction TD 34 Determinants</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/math/TD 35 Systemes.pdf" target="_blank">TD 35 Systemes</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 35 Systemes.pdf" target="_blank">Correction TD 35 Systemes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 37 Denombrements.pdf" target="_blank">TD 37 Denombrements</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 37 Denombrements.pdf" target="_blank">Correction TD 37 Denombrements</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/math/TD 38 Probabilite.pdf" target="_blank">TD 38 Probabilite</a></td>
							<td><a href="pdfs/MP/sup-ex/math/Correction TD 38 Probabilite.pdf" target="_blank">Correction TD 38 Probabilite</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>