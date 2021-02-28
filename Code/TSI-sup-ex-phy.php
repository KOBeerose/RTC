<?php
require "header.php";
?>
<head>
	<title>1-TSI  <?php echo $row['0']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '1-TSI ' . $row['3']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex.php?language=" . $language ?>"><?php echo '1-TSI ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-ex/phy/1-TSI Phy Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/phy/TD 1  Ondes.pdf" target="_blank">TD 1  Ondes</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 1  Ondes - Corrigé.pdf" target="_blank">Correction TD 1  Ondes - Corrigé</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 2  Optique géométrique.pdf" target="_blank">TD 2  Optique géométrique</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 2  Optique géométrique.pdf" target="_blank">Correction TD 2  Optique géométrique</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/phy/TD 4  Circuits électrique dans l’ARQS.pdf" target="_blank">TD 4  Circuits électrique dans l’ARQS</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 4  Circuits électriques dans l’ARQS.pdf" target="_blank">Correction TD 4  Circuits électriques dans l’ARQS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 5  Circuits linéaires du premier ordre.pdf" target="_blank">TD 5  Circuits linéaires du premier ordre</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 5  Circuits linéaires du premier ordre.pdf" target="_blank">Correction TD 5  Circuits linéaires du premier ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 6  Circuits linéaires du deuxième ordre,.pdf" target="_blank">TD 6  Circuits linéaires du deuxième ordre,</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 6  Circuits linéaires du 2ème ordre,.pdf" target="_blank">Correction TD 6  Circuits linéaires du 2ème ordre,</a></td>
						</tr>
						</tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/class-meca.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/phy/TD 11 – Cinématique.pdf" target="_blank">TD 11 – Cinématique</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 11  Cinématique.pdf" target="_blank">Correction TD 11  Cinématique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 12  Dynamique du point.pdf" target="_blank">TD 12  Dynamique du point</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 12  Dynamique du point.pdf" target="_blank">Correction TD 12  Dynamique du point</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 13  Solide en rotation autour d’un axe fixe.pdf" target="_blank">TD 13  Solide en rotation autour d’un axe fixe</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 13  Solide en rotation autour d’un axe fixe.pdf" target="_blank">Correction TD 13  Solide en rotation autour d’un axe fixe</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/phy/TD 14  Champ magnétique et force de Laplace.pdf" target="_blank">TD 14  Champ magnétique et force de Laplace</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 14  Champ magnétique et force de Laplace.pdf" target="_blank">Correction TD 14  Champ magnétique et force de Laplace</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 15  Induction électromagnétique.pdf" target="_blank">TD 15  Induction électromagnétique</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 15  Induction électromagnétique.pdf" target="_blank">Correction TD 15  Induction électromagnétique</a></td>
						</tr>
						<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/phy/TD 16  Thermodynamique 1.pdf" target="_blank">TD 16  Thermodynamique 1</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 16  Thermodynamique 1.pdf" target="_blank">Correction TD 16  Thermodynamique 1</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/phy/TD 17  Thermodynamique 2.pdf" target="_blank">TD 17  Thermodynamique 2</a></td>
							<td><a href="pdfs/TSI/sup-ex/phy/Correction TD 17  Thermodynamique 2.pdf" target="_blank">Correction TD 17  Thermodynamique 2</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>