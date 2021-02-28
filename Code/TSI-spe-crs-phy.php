<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['0']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-crs/phy/2-TSI Phy Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="7" style="text-align: center;"><img src="images/m-tools.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Equations différentielles linéaires.pdf" target="_blank">Equations différentielles linéaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Formulaire d'analyse vectorielle.pdf" target="_blank">Formulaire d'analyse vectorielle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Formulaire de derivation.pdf" target="_blank">Formulaire de derivation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Formulaire de développements limités.pdf" target="_blank">Formulaire de développements limités</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phyMath Tools//Formulaire de trigonométrie.pdf" target="_blank">Formulaire de trigonométrie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Opérateur différentiel gradient.pdf" target="_blank">Opérateur différentiel gradient</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Math Tools/Transformation de Laplace.pdf" target="_blank">Transformation de Laplace</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/phy/Montages de base avec l’ALI.pdf" target="_blank">Montages de base avec l’ALI</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Rétroaction d’un amplificateur linéaire.pdf" target="_blank">Rétroaction d’un amplificateur linéaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Oscillateurs.pdf" target="_blank">Oscillateurs</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Électronique numérique.pdf" target="_blank">Électronique numérique</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="8" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/phy/Rappels de thermodynamique.pdf" target="_blank">Rappels de thermodynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Éléments de statique des fluides.pdf" target="_blank">Éléments de statique des fluides</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Principes de thermodynamique.pdf" target="_blank">Principes de thermodynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Diagrammes d’état des fluides réels.pdf" target="_blank">Diagrammes d’état des fluides réels</a></td>
						</tr>
							<td><a href="pdfs/TSI/spe-crs/phy/Fluides en écoulement stationnaire.pdf" target="_blank">Fluides en écoulement stationnaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Fluides en écoulement laminaire Stationnaire.pdf" target="_blank">Fluides en écoulement laminaire Stationnaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Thermodynamique industrielle.pdf" target="_blank">Thermodynamique industrielle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Conduction thermique.pdf" target="_blank">Conduction thermique</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/phy/Électromagnétisme - introduction.pdf" target="_blank">Électromagnétisme - introduction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Électrostatique.pdf" target="_blank">Électrostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Équations de Maxwell.pdf" target="_blank">Équations de Maxwell</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Magnétostatique.pdf" target="_blank">Magnétostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Actions électromagnétiques.pdf" target="_blank">Actions électromagnétiques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Induction électromagnétique.pdf" target="_blank">Induction électromagnétique</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/phy/Propagation des ondes.pdf" target="_blank">Propagation des ondes</a></td>
						</tr>

						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Polarisation des ondes.pdf" target="_blank">Polarisation des ondes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Réflexion d’une onde sur un métal.pdf" target="_blank">Réflexion d’une onde sur un métal</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/La lumière.pdf" target="_blank">La lumière</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Interférences non localisées de deux.pdf" target="_blank">Interférences non localisées de deux</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/phy/Réseaux.pdf" target="_blank">Réseaux</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>