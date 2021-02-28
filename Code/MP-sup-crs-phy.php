<?php
require "header.php";
?>
<head>
	<title>1-MP  <?php echo $row['0']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-crs-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/sup-crs/phy/1-MP Phy Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="10" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/phy/Cinematique Du Point.pdf" target="_blank">Cinematique Du Point</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Cinematique Du Solide.pdf" target="_blank">Cinematique Du Solide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Principes De La Dynamique Newtonienne.pdf" target="_blank">Principes De La Dynamique Newtonienne</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Aspects Energetiques De La Dynamique.pdf" target="_blank">Aspects Energetiques De La Dynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Oscillateur Harmonique.pdf" target="_blank">Oscillateur Harmonique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Moment Cinetique Et Solide En Rotation.pdf" target="_blank">Moment Cinetique Et Solide En Rotation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Mouvement Dans Un Champ De Force Centrale.pdf" target="_blank">Mouvement Dans Un Champ De Force Centrale</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Mouvement D'une Particule Chargee Dans Un Champ.pdf" target="_blank">Mouvement D'une Particule Chargee Dans Un Champ</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Introduction Au Monde Quantique.pdf" target="_blank">Introduction Au Monde Quantique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Mouvement Dans Un Puits De Potentiel.pdf" target="_blank">Mouvement Dans Un Puits De Potentiel</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/phy/Circuits Electriques Dans L'Arqs.pdf" target="_blank">Circuits Electriques Dans L'Arqs</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Circuit Lineaire Du Premier Ordre.pdf" target="_blank">Circuit Lineaire Du Premier Ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Analyse Frequentielle D'un Systeme Lineaire.pdf" target="_blank">Analyse Frequentielle D'un Systeme Lineaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Filtrage Lineaire.pdf" target="_blank">Filtrage Lineaire</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/phy/Premier Principe Bilans D'energie.pdf" target="_blank">Premier Principe Bilans D'energie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Deuxieme Principe Bilans D'entropie.pdf" target="_blank">Deuxieme Principe Bilans D'entropie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Systeme Thermodynamique a L'equilibre.pdf" target="_blank">Systeme Thermodynamique a L'equilibre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Energie Echangee Au Cours D'une Transformation.pdf" target="_blank">Energie Echangee Au Cours D'une Transformation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Machines Thermiques.pdf" target="_blank">Machines Thermiques</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/phy/Le Champ Magnetique.pdf" target="_blank">Le Champ Magnetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Actions D'un Champ Magnetique.pdf" target="_blank">Actions D'un Champ Magnetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Circuit Fixe Dans Un Champ Magnetique Variable.pdf" target="_blank">Circuit Fixe Dans Un Champ Magnetique Variable</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Lois De L'induction.pdf" target="_blank">Lois De L'induction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Circuit Mobile Dans Un Champ Magnetique Stationnaire.pdf" target="_blank">Circuit Mobile Dans Un Champ Magnetique Stationnaire</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/phy/Optique Geometrique.pdf" target="_blank">Optique Geometrique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Propagation D'un Signal.pdf" target="_blank">Propagation D'un Signal</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Superpositions De Deux Signaux Sinusoidaux.pdf" target="_blank">Superpositions De Deux Signaux Sinusoidaux</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/phy/Ondes Lumineuses.pdf" target="_blank">Ondes Lumineuses</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>