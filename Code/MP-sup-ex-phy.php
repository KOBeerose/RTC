<?php
require "header.php";
?>
<head>
	<title>1-MP  <?php echo $row['0']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-ex-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/sup-ex/phy/1-MP Phy Ex.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['3']['page_header'] ?></td>
							<td style="text-align: center;">Correction</td>
						</tr>
						</tr>
						<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/phy/TD Cinematique.pdf" target="_blank">TD Cinematique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Cinematique.pdf" target="_blank">Correction TD Cinematique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Dynamique Du Point Materiel.pdf" target="_blank">TD Dynamique Du Point Materiel</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Dynamique Du Point Materiel.pdf" target="_blank">Correction TD Dynamique Du Point Materiel</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Approche Energetique De La Dynamique.pdf" target="_blank">TD Approche Energetique De La Dynamique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Approche Energetique De La Dynamique.pdf" target="_blank">Correction TD Approche Energetique De La Dynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Mouvement Des Particules Chargees.pdf" target="_blank">TD Mouvement Des Particules Chargees</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Mouvement Des Particules Chargees.pdf" target="_blank">Correction TD Mouvement Des Particules Chargees</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Moment Cinetique Et Solide En Rotation.pdf" target="_blank">TD Moment Cinetique Et Solide En Rotation</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Moment Cinetique Et Solide En Rotation.pdf" target="_blank">Correction TD Moment Cinetique Et Solide En Rotation</a></td>
						</tr>
						<tr>
							<td><a href="pdfs/MP/sup-ex/phy/TD Modele De L'Oscillateur Harmonique.pdf" target="_blank">TD Modele De L'Oscillateur Harmonique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Modele De L'Oscillateur Harmonique.pdf" target="_blank">Correction TD Modele De L'Oscillateur Harmonique</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="6" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/phy/TD Notion De Signal.pdf" target="_blank">TD Notion De Signal</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Notion De Signal.pdf" target="_blank">Correction TD Notion De Signal</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Lois Et Concepts De L'Electrocinetique.pdf" target="_blank">TD Lois Et Concepts De L'Electrocinetique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Lois Et Concepts De L'Electrocinetique.pdf" target="_blank">Correction TD Lois Et Concepts De L'Electrocinetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Regime Libre Des Circuits Rc Et Rl D'Ordre 1.pdf" target="_blank">TD Regime Libre Des Circuits Rc Et Rl D'Ordre 1</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Regime Libre Des Circuits Rc Et Rl D'Ordre 1.pdf" target="_blank">Correction TD Regime Libre Des Circuits Rc Et Rl D'Ordre 1</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Regimes Libres De L'Oscillateur Harmonique.pdf" target="_blank">TD Regimes Libres De L'Oscillateur Harmonique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Regimes Libres De L'Oscillateur Harmonique.pdf" target="_blank">2Correction TD Regimes Libres De L'Oscillateur Harmonique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Oh En Rsf Resonance.pdf" target="_blank">TD Oh En Rsf Resonance</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Oh En Rsf Resonance.pdf" target="_blank">Correction TD Oh En Rsf Resonance</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Filtrage Analogique Lineaire.pdf" target="_blank">TD Filtrage Analogique Lineaire</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Filtrage Analogique Lineaire.pdf" target="_blank">Correction TD Filtrage Analogique Lineaire</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/phy/TD Systeme Thermodynamique.pdf" target="_blank">TD Systeme Thermodynamique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Systeme Thermodynamique.pdf" target="_blank">Correction TD Systeme Thermodynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
						<td><a href="pdfs/MP/sup-ex/phy/TD Premier Principe Bilans D'Energie.pdf" target="_blank">TD Premier Principe Bilans D'Energie</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Premier Principe Bilans D'Energie.pdf" target="_blank">Correction TD Premier Principe Bilans D'Energie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Deuxieme Principe Bilans D'Entropie.pdf" target="_blank">TD Deuxieme Principe Bilans D'Entropie</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Deuxieme Principe Bilans D'Entropie.pdf" target="_blank">Correction TD Deuxieme Principe Bilans D'Entropie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Machines Thermiques.pdf" target="_blank">TD Machines Thermiques</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Machines Thermiques.pdf" target="_blank">Correction TD Machines Thermiques</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/phy/TD Le Champ Magnetique.pdf" target="_blank">TD Le Champ Magnetique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Le Champ Magnetique.pdf" target="_blank">Correction TD Le Champ Magnetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Actions Mecaniques Du Champ Magnetique.pdf" target="_blank">TD Actions Mecaniques Du Champ Magnetique</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Actions Mecaniques Du Champ Magnetique.pdf" target="_blank">Correction TD Actions Mecaniques Du Champ Magnetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Induction.pdf" target="_blank">TD Induction</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Induction.pdf" target="_blank">Correction TD Induction</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-ex/phy/TD Superposition D Ondes.pdf" target="_blank">TD Superposition D Ondes</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Superposition D'Ondes.pdf" target="_blank">Correction TD Superposition D'Ondes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Propagation De La Lumiere.pdf" target="_blank">TD Propagation De La Lumiere</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Propagation De La Lumiere.pdf" target="_blank">Correction TD Propagation De La Lumiere</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-ex/phy/TD Formation D'Une Image.pdf" target="_blank">TD Formation D'Une Image</a></td>
							<td><a href="pdfs/MP/sup-ex/phy/Correction TD Formation D'Une Image.pdf" target="_blank">Correction TD Formation D'Une Image</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>