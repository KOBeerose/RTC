<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['0']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-TSI ' . $row['3']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex.php?language=" . $language ?>"><?php echo '2-TSI ' . $row['3']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex-phy.php?language=" . $language ?>"><?php echo $row['0']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-ex/phy/2-TSI Phy Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/electronics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/phy/TD Montages à rétroaction  exemples avec l’ALI.pdf" target="_blank">TD Montages à rétroaction  exemples avec l’ALI</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD l’ALI.pdf" target="_blank">Correction TD l’ALI</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Oscillateurs électroniques.pdf" target="_blank">TD Oscillateurs électroniques</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Oscillateurs.pdf" target="_blank">Correction TD Oscillateurs</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="7" style="text-align: center;"><img src="images/thermo.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/phy/TD Rappels de thermodynamique.pdf" target="_blank">TD Rappels de thermodynamique</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Rappels de thermodynamique.pdf" target="_blank">Correction TD Rappels de thermodynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Statique des fluides.pdf" target="_blank">TD Statique des fluides</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/2.pdf" target="_blank">Correction TD Statique des fluides</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Utilisation des transformations infinitésimales.pdf" target="_blank">TD Utilisation des transformations infinitésimales</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Utilisation des transformations infinitésimales.pdf" target="_blank">Correction TD Utilisation des transformations infinitésimales</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Diagrammes d’état des fluides réels purs.pdf" target="_blank">TD Diagrammes d’état des fluides réels purs</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Diagrammes d’état des fluides réels.pdf" target="_blank">Correction TD Diagrammes d’état des fluides réels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Fluide en écoulement stationnaire laminaire.pdf" target="_blank">TD Fluide en écoulement stationnaire laminaire</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Fluide en écoulement stationnaire laminaire.pdf" target="_blank">Correction TD Fluide en écoulement stationnaire laminaire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Thermodynamique des systèmes ouverts.pdf" target="_blank">TD Thermodynamique des systèmes ouverts</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Thermodynamique des systèmes.pdf" target="_blank">Correction TD Thermodynamique des systèmes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Transferts d’énergie par conduction thermique.pdf" target="_blank">TD Transferts d’énergie par conduction thermique</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Transferts d’énergie par conduction.pdf" target="_blank">Correction TD Transferts d’énergie par conduction</a></td>
						</tr>
						</tr>
						<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/optics.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/phy/TD Introduction à l’optique ondulatoire.pdf" target="_blank">TD Introduction à l’optique ondulatoire</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Introduction à l’optique ondulatoire.pdf" target="_blank">Correction TD Introduction à l’optique ondulatoire</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Interférences à deux ondes.pdf" target="_blank">TD Interférences à deux ondes</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Interférences à deux ondes.pdf" target="_blank">Correction TD Interférences à deux ondes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Interférences à N ondes et réseaux.pdf" target="_blank">TD Interférences à N ondes et réseaux</a></td>
							<td>-</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="5m" style="text-align: center;"><img src="images/electromag.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/phy/TD Électrostatique  théorème de Gauss.pdf" target="_blank">TD Électrostatique  théorème de Gauss</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Électrostatique.pdf" target="_blank">Correction TD Électrostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Magnétostatique.pdf" target="_blank">TD Magnétostatique</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Magnétostatique.pdf" target="_blank">Correction TD Magnétostatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Formulation de l’électromagnétisme  équations.pdf" target="_blank">TD Formulation de l’électromagnétisme  équations</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Formulation de l’électromagnétisme.pdf" target="_blank">Correction TD Formulation de l’électromagnétisme</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Bilans d’énergie en électromagnétisme.pdf" target="_blank">TD Bilans d’énergie en électromagnétisme</a></td>
							<td>-</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/phy/TD Ondes électromagnétiques.pdf" target="_blank">TD Ondes électromagnétiques</a></td>
							<td><a href="pdfs/TSI/spe-ex/phy/Correction TD Ondes électromagnétiques.pdf" target="_blank">Correction TD Ondes électromagnétiques</a></td>
						</tr>


					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>