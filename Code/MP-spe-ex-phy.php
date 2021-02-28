<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['0']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-ex/phy/2-MP Phy Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="1" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/phy/TD Le Filtrage Analyse Spectrale.pdf" target="_blank">TD Le Filtrage Analyse Spectrale</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Le Filtrage Analyse Spectrale.pdf" target="_blank">Correction TD Le Filtrage Analyse Spectrale</a></td>
						</tr>
						<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/phy/TD Particule Dans Un Puits De Potentiel.pdf" target="_blank">TD Particule Dans Un Puits De Potentiel</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Particule Dans Un Puits De Potentiel.pdf" target="_blank">Correction TD Particule Dans Un Puits De Potentiel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Particule Dans Un Potentiel Constant Par Morceaux.pdf" target="_blank">TD Particule Dans Un Potentiel Constant Par Morceaux</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Particule Dans Un Potentiel Constant Par Morceaux.pdf" target="_blank">Correction TD Particule Dans Un Potentiel Constant Par Morceaux</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Lois Du Frottement Solide.pdf" target="_blank">TD Lois Du Frottement Solide</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Lois Du Frottement Solide.pdf" target="_blank">Correction TD Lois Du Frottement Solide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Referentiels Non Galileens.pdf" target="_blank">TD Referentiels Non Galileens</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Referentiels Non Galileens.pdf" target="_blank">Correction TD Referentiels Non Galileens</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/phy/TD Machines Thermiques En Ecoulement Permanent.pdf" target="_blank">TD Machines Thermiques En Ecoulement Permanent</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Machines Thermiques En Ecoulement Permanent.pdf" target="_blank">Correction TD Machines Thermiques En Ecoulement Permanent</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/phy/TD Dipoles Electrostatique Et Magnetostatique.pdf" target="_blank">TD Dipoles Electrostatique Et Magnetostatique</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Dipoles Electrostatique Et Magnetostatique.pdf" target="_blank">Correction TD Dipoles Electrostatique Et Magnetostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Equations De Maxwell Energetique.pdf" target="_blank">TD Equations De Maxwell Energetique</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Equations De Maxwell Energetique.pdf" target="_blank">Correction TD Equations De Maxwell Energetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Oem Dans Les Milieux Ohmiques.pdf" target="_blank">TD Oem Dans Les Milieux Ohmiques</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Oem Dans Les Milieux Ohmiques.pdf" target="_blank">Correction TD Oem Dans Les Milieux Ohmiques</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/phy/TD Superposition De Deux Ondes Lumineuses.pdf" target="_blank">TD Superposition De Deux Ondes Lumineuses</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Superposition De Deux Ondes Lumineuses.pdf" target="_blank">Correction TD Superposition De Deux Ondes Lumineuses</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Interferences Par Division D'Amplitude.pdf" target="_blank">TD Interferences Par Division D'Amplitude</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Interferences Par Division D Amplitude.pdf" target="_blank">Correction TD Interferences Par Division D Amplitude</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/phy/TD Interferences a N Ondes Reseaux Optiques.pdf" target="_blank">TD Interferences a N Ondes Reseaux Optiques</a></td>
							<td><a href="pdfs/MP/spe-ex/phy/Correction TD Interferences a N Ondes Reseaux Optiques.pdf" target="_blank">Correction TD Interferences a N Ondes Reseaux Optiques</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>