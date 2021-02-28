<?php
require "header.php";
?>
<head>
	<title><?php echo '2-MP Math ' . $row['2']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-MP ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">2-MP</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-crs.php?language=" . $language ?>"><?php echo '2-MP ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-crs-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-crs/math/2-MP Math Cours.rar" download ><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/math/Complements Sur Les Structures Complements D'Arithmetique.pdf" target="_blank">Complements Sur Les Structures Complements D'Arithmetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Reduction Des Endomorphismes.pdf" target="_blank">Reduction Des Endomorphismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Convexite.pdf" target="_blank">Convexite</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Definitions Reduction Des Endomorphismes.pdf" target="_blank">Definitions Reduction Des Endomorphismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Theoremes Reduction Des Endomorphismes.pdf" target="_blank">Theoremes Reduction Des Endomorphismes</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="7" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/math/Complements Sur Les Series Numeriques.pdf" target="_blank">Complements Sur Les Series Numeriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Integration Sur Un Intervalle Quelconque.pdf" target="_blank">Integration Sur Un Intervalle Quelconque</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Suites Et Series De Fonctions.pdf" target="_blank">Suites Et Series De Fonctions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Suites Et Series D'Integrales.pdf" target="_blank">Suites Et Series D'Integrales</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Familles Sommables.pdf" target="_blank">Familles Sommables</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Integrales Dependant D'Un Parametre.pdf" target="_blank">Integrales Dependant D'Un Parametre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Series Entieres.pdf" target="_blank">Series Entieres</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/geometry.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/math/Espaces Euclidiens.pdf" target="_blank">Espaces Euclidiens</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Espaces Prehilbertiens Reels.pdf" target="_blank">Espaces Prehilbertiens Reels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Topologie Des Espaces Vectoriels Normes.pdf" target="_blank">Topologie Des Espaces Vectoriels Normes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Courbes Parametrees.pdf" target="_blank">Courbes Parametrees</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/math/Fonctions Vectorielles.pdf" target="_blank">Fonctions Vectorielles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Equations Differentielles Lineaires.pdf" target="_blank">Equations Differentielles Lineaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Fonctions De Plusieurs Variables.pdf" target="_blank">Fonctions De Plusieurs Variables</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/math/Probabilites Discretes.pdf" target="_blank">Probabilites Discretes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/math/Variables aléatoires discrètes.pdf" target="_blank">Variables aléatoires discrètes</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>