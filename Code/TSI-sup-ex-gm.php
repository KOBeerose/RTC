<?php
require "header.php";
?>
<head>
	<title>1-TSI  <?php echo $row['3']['subjects'] . " " . $row['3']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable sirmation." />

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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-ex-gm.php?language=" . $language ?>"><?php echo $row['3']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-ex/gm/1-TSI Gm Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="15" style="text-align: center;"><img src="images/dynamics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-ex/gm/TD Centres de gravité.pdf" target="_blank">TD Centres de gravité</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Centres de gravité.pdf" target="_blank">Correction TD Centres de gravité</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Actions mécaniques.pdf" target="_blank">TD Actions mécaniques</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Actions mécaniques.pdf" target="_blank">Correction TD Actions mécaniques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Adhérence – Frottement.pdf" target="_blank">TD Adhérence – Frottement</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Adhérence – Frottement.pdf" target="_blank">Correction TD Adhérence – Frottement</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD PFS.pdf" target="_blank">TD PFS</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD PFS.pdf" target="_blank">Correction TD PFS</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Liaisons équivalentes.pdf" target="_blank">TD Liaisons équivalentes</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Liaisons équivalentes.pdf" target="_blank">Correction TD Liaisons équivalentes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Transformation du mouvement.pdf" target="_blank">TD Transformation du mouvement</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Transformation du mouvement.pdf" target="_blank">Correction TD Transformation du mouvement</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Rappels.pdf" target="_blank">TD Rappels</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Rappels.pdf" target="_blank">Correction TD Rappels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Vitesse - Accélération.pdf" target="_blank">TD Vitesse - Accélération</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Vitesse - Accélération.pdf" target="_blank">Correction TD Vitesse - Accélération</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Modélisation - Paramétrage.pdf" target="_blank">TD Modélisation - Paramétrage</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Modélisation - Paramétrage.pdf" target="_blank">Correction TD Modélisation - Paramétrage</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Fermeture géométrique.pdf" target="_blank">TD Fermeture géométrique</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Fermeture géométrique.pdf" target="_blank">Correction TD Fermeture géométrique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Fermeture cinématique.pdf" target="_blank">TD Fermeture cinématique</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Fermeture cinématique.pdf" target="_blank">Correction TD Fermeture cinématique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Liaisons équivalentes 2.pdf" target="_blank">TD Liaisons équivalentes 2</a></td>
							<td><a href="pdfs/TSI/sup-ex/Correction TD Liaisons équivalentes 2/2.pdf" target="_blank">Correction TD Liaisons équivalentes 2</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Cinématique du contact.pdf" target="_blank">TD Cinématique du contact</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Cinématique du contact.pdf" target="_blank">Correction TD Cinématique du contact</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Train épicycloïdal.pdf" target="_blank">TD Train épicycloïdal</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Train épicycloïdal.pdf" target="_blank">Correction TD Train épicycloïdal</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-ex/gm/TD Cinématique graphique.pdf" target="_blank">TD Cinématique graphique</a></td>
							<td><a href="pdfs/TSI/sup-ex/gm/Correction TD Cinématique graphique.pdf" target="_blank">Correction TD Cinématique graphique</a></td>
						</tr>
					</table>
			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>