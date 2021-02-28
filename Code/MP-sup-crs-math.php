<?php
require "header.php";
?>
<head>
	<title><?php echo '1-MP Math ' . $row['2']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '1-MP ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-crs.php?language=" . $language ?>"><?php echo '1-MP ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-crs-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/sup-crs/math/1-MP Math Cours.rar" download ><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="18" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/math/Calculs Algebriques.pdf" target="_blank">Calculs Algebriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Elements De Logique.pdf" target="_blank">Elements De Logique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Fonctions Usuelles.pdf" target="_blank">Fonctions Usuelles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Generalites Sur Les Fonctions.pdf" target="_blank">Generalites Sur Les Fonctions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Nombres Reels.pdf" target="_blank">Nombres Reels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Suites Numeriques.pdf" target="_blank">Suites Numeriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Nombres Reels.pdf" target="_blank">Nombres Reels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Suites Numeriques.pdf" target="_blank">Suites Numeriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Arithmetique.pdf" target="_blank">Arithmetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Limite D'une Fonction.pdf" target="_blank">Limite D'une Fonction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Continuite.pdf" target="_blank">Continuite</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Derivation.pdf" target="_blank">Derivation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Developpements Limites.pdf" target="_blank">Developpements Limites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Polynomes.pdf" target="_blank">Polynomes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Arithmetique Des Polynomes.pdf" target="_blank">Arithmetique Des Polynomes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Fractions Rationnelles.pdf" target="_blank">Fractions Rationnelles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Series Numeriques.pdf" target="_blank">Series Numeriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Integration Sur Un Segment.pdf" target="_blank">Integration Sur Un Segment</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/math/Applications Et Relations.pdf" target="_blank">Applications Et Relations</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Structures Algebriques.pdf" target="_blank">Structures Algebriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/La Dimension Finie.pdf" target="_blank">La Dimension Finie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Matrices.pdf" target="_blank">Matrices</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Determinants.pdf" target="_blank">Determinants</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/geometry.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/math/Nombres Complexes.pdf" target="_blank">Nombres Complexes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Espaces Vectoriels.pdf" target="_blank">Espaces Vectoriels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Espaces Euclidiens.pdf" target="_blank">Espaces Euclidiens</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Sous Espaces Affines.pdf" target="_blank">Sous Espaces Affines</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/math/Equations Differentielles.pdf" target="_blank">Equations Differentielles</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/math/Denombrement.pdf" target="_blank">Denombrement</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Probabilites Sur Un Univers Fini.pdf" target="_blank">Probabilites Sur Un Univers Fini</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/math/Variables Aleatoires Sur Un Univers Fini.pdf" target="_blank">Variables Aleatoires Sur Un Univers Fini</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>