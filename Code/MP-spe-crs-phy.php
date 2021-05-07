<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['0']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-crs-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-crs/phy/2-MP Phy Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="8" style="text-align: center;"><img src="images/m-tools.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Formulaire De Trigonometrie.pdf" target="_blank">Formulaire De Trigonometrie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Mathematiques Pour La Physique.pdf" target="_blank">Mathematiques Pour La Physique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Resume D'Equations Differentielles Lineaires.pdf" target="_blank">Resume D'Equations Differentielles Lineaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Formulaire D'Analyse Vectorielle.pdf" target="_blank">Formulaire D'Analyse Vectorielle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Formulaire De Derivation Et De Primitives.pdf" target="_blank">Formulaire De Derivation Et De Primitives</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Formulaire De Developpements Limites.pdf" target="_blank">Formulaire De Developpements Limites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Operateur Differentiel Gradient.pdf" target="_blank">Operateur Differentiel Gradient</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Math Tools/Transformation De Laplace en Physique.pdf" target="_blank">Transformation De Laplace En Physique</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/Analyse Spectrale.pdf" target="_blank">Analyse Spectrale</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Traitement Numerique Des Signaux.pdf" target="_blank">Traitement Numerique Des Signaux</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/Elements De Cinematique Du Point.pdf" target="_blank">Elements De Cinematique Du Point</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Referentiels Non Galileens.pdf" target="_blank">Referentiels Non Galileens</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Lois Du Frottement Solide.pdf" target="_blank">Lois Du Frottement Solide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Mecanique Quantique.pdf" target="_blank">Mecanique Quantique</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/Premier Et Second Principes Thermodynamiques.pdf" target="_blank">Premier Et Second Principes Thermodynamiques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Conduction Et Conducto Convection Thermiques.pdf" target="_blank">Conduction Et Conducto Convection Thermiques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Elements De Thermodynamique Statistique.pdf" target="_blank">Elements De Thermodynamique Statistique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/L'Equation De La Diffusion Thermique.pdf" target="_blank">L'Equation De La Diffusion Thermique</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="8" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/L’Électrostatique.pdf" target="_blank">L’Électrostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Formulation Locale De L'Electrostatique.pdf" target="_blank">Formulation Locale De L'Electrostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Magnetostatique.pdf" target="_blank">Magnetostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Dipoles Electrostatique Et Magnetostatique.pdf" target="_blank">Dipoles Electrostatique Et Magnetostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Equations De Maxwell.pdf" target="_blank">Equations De Maxwell</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Energie Electromagnetique.pdf" target="_blank">Energie Electromagnetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Propagation Des Onde Electromagnetiques Dans Le Vide.pdf" target="_blank">Propagation Des Onde Electromagnetiques Dans Le Vide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Propagation Des Onde Electromagnetiques.pdf" target="_blank">Propagation Des Onde Electromagnetiques</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/phy/Interferences Par Division D'Amplitude.pdf" target="_blank">Interferences Par Division D'Amplitude</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Interferences Par Division De Front.pdf" target="_blank">Interferences Par Division De Front</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Interferences De 2 Ondes Lumineuses.pdf" target="_blank">Interferences De 2 Ondes Lumineuses</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Modele Scalaire Des Ondes Lumineuses.pdf" target="_blank">Modele Scalaire Des Ondes Lumineuses</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/phy/Superposition Des Ondes Lumineuses.pdf" target="_blank">Superposition Des Ondes Lumineuses</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>