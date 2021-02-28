<?php
require "header.php";
?>
<head>
	<title>1-TSI  <?php echo $row['0']['subjects'] . " " . $row['2']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable phyrmation." />

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
							   <h1 class="heading-section"><?php echo '1-TSI ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-crs.php?language=" . $language ?>"><?php echo '1-TSI ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-crs-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-crs/phy/1-TSI Phy Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/phy/Mécanique - Chapitre 1  Oscillateurs harmoniques.pdf" target="_blank">Mécanique - Chapitre 1  Oscillateurs harmoniques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Mécanique - Chapitre 2  Cinématique du point matériel.pdf" target="_blank">Mécanique - Chapitre 2  Cinématique du point matériel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Mécanique - Chapitre 3  Dynamique du point matériel.pdf" target="_blank">Mécanique - Chapitre 3  Dynamique du point matériel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Mécanique - Chapitre 4  Energétique du point matériel.pdf" target="_blank">Mécanique - Chapitre 4  Energétique du point matériel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Mécanique - Chapitre 5  Solide en rotation autour d’un axe fixe.pdf" target="_blank">Mécanique - Chapitre 5  Solide en rotation autour d’un axe fixe</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/phy/Electrocinétique - Chapitre 1  Notions fondamentales.pdf" target="_blank">Electrocinétique - Chapitre 1  Notions fondamentales</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Electrocinétique - Chapitre 2  Régimes transitoires-Circuits linéaires du 1er ordre.pdf" target="_blank">Electrocinétique - Chapitre 2  Régimes transitoires-Circuits linéaires du 1er ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Electrocinétique - Chapitre 3  Régime sinusoïdal forcé.pdf" target="_blank">Electrocinétique - Chapitre 3  Régime sinusoïdal forcé</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Electrocinétique - Chapitre 4  Filtrage linéaire.pdf" target="_blank">Electrocinétique - Chapitre 4  Filtrage linéaire</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/phy/Thermodynamique - Chapitre 1  Description d’un système thermodynamique.pdf" target="_blank">Thermodynamique - Chapitre 1  Description d’un système thermodynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Thermodynamique - Chapitre 2  Transfert d’énergie-1.pdf" target="_blank">Thermodynamique - Chapitre 2  Transfert d’énergie-1</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Thermodynamique - Chapitre 3  Deuxième principe de la thermodynamique - L’entropie.pdf" target="_blank">Thermodynamique - Chapitre 3  Deuxième principe de la thermodynamique - L’entropie</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/phy/Electromagnétisme - Chapitre 1  Le champ magnétique.pdf" target="_blank">Electromagnétisme - Chapitre 1  Le champ magnétique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/Electromagnétisme - Chapitre 2  L’induction électromagnétique.pdf" target="_blank">Electromagnétisme - Chapitre 2  L’induction électromagnétique</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/phy/2.pdf" target="_blank">Ondes - Chapitre 1  Introduction aux ondes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/2.pdf" target="_blank">Optique - Chapitre 1  Introduction à l’optique géométrique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/2.pdf" target="_blank">Optique - Chapitre 2  Formation des images</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/2.pdf" target="_blank">Optique - Chapitre 3  Lentilles minces sphériques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/phy/2.pdf" target="_blank">Optique - Chapitre 4  Modèle corpusculaire de la lumière</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>