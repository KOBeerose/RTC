<?php
require "header.php";
?>
<head>
	<title><?php echo '2-MP Math ' . $row['3']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-MP ' . $row['3']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex.php?language=" . $language ?>"><?php echo '2-MP ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex-math.php?language=" . $language ?>">MATH</a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-ex/math/2-MP Math Ex.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/algebra.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/math/TD Reduction Des Endomorphismes.pdf" target="_blank">TD Reduction Des Endomorphismes</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Reduction Des Endomorphisme.pdf" target="_blank">Correction TD Reduction Des Endomorphisme</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Convexite.pdf" target="_blank">TD Convexite</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Convexite.pdf" target="_blank">Correction TD Convexite</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Integrales Dependant D'un Parametre.pdf" target="_blank">TD Integrales Dependant D'un Parametre</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Integrales Dependant D'un Parametre.pdf" target="_blank">Correction TD Integrales Dependant D'un Parametre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Series Entieres.pdf" target="_blank">TD Series Entieres</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Series Entieres.pdf" target="_blank">Correction TD Series Entieres</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/analysis.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/math/TD Les Series Numeriques.pdf" target="_blank">TD Les Series Numeriques</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Les Series Numeriques.pdf" target="_blank">Correction TD Les Series Numeriques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Integration Sur Un Intervalle Quelconque.pdf" target="_blank">TD Integration Sur Un Intervalle Quelconque</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Integration Sur Un Intervalle Quelconque.pdf" target="_blank">Correction TD Integration Sur Un Intervalle Quelconque</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Suites Et Series De Fonctions.pdf" target="_blank">TD Suites Et Series De Fonctions</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Suites Et Series De Fonctions.pdf" target="_blank">Correction TD Suites Et Series De Fonctions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Suites Et Series D'Integrales.pdf" target="_blank">TD Suites Et Series D'Integrales</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Suites Et Series D Integrales.pdf" target="_blank">Correction TD Suites Et Series D Integrales</a></td>
						</tr>
						<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/geometry.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/math/TD Espaces Euclidiens.pdf" target="_blank">TD Espaces Euclidiens</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Espaces Euclidiens.pdf" target="_blank">Correction TD Espaces Euclidiens</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Espaces Prehilbertiens Reels.pdf" target="_blank">TD Espaces Prehilbertiens Reels</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Espaces Euclidiens.pdf" target="_blank">Correction TD Espaces Euclidiens</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Topologie Des Espaces Vectoriels Normes.pdf" target="_blank">TD Topologie Des Espaces Vectoriels Normes</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Topologie Des Espaces Vectoriels Normes.pdf" target="_blank">Correction TD Topologie Des Espaces Vectoriels Normes</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/diff-cal.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/math/TD Fonctions Vectorielles D'une Variable Vectorielle.pdf" target="_blank">TD Fonctions Vectorielles D'une Variable Vectorielle</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Fonctions Vectorielles D'une Variable Reelle.pdf" target="_blank">Correction TD Fonctions Vectorielles D'une Variable Reelle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Equations Differentielles Lineaires.pdf" target="_blank">TD Equations Differentielles Lineaires</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Equations Differentielles Lineaires.pdf" target="_blank">Correction TD Equations Differentielles Lineaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Fonctions De Plusieurs Variables.pdf" target="_blank">TD Fonctions De Plusieurs Variables</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Fonctions De Plusieurs Variables.pdf" target="_blank">Correction TD Fonctions De Plusieurs Variables</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/proba.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/math/TD Probabilites.pdf" target="_blank">TD Probabilites</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Probabilites.pdf" target="_blank">Correction TD Probabilites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/math/TD Variables Aleatoires Discretes.pdf" target="_blank">TD Variables Aleatoires Discretes</a></td>
							<td><a href="pdfs/MP/spe-ex/math/Correction TD Variables Aleatoires Discretes.pdf" target="_blank">Correction TD Variables Aleatoires Discretes</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>