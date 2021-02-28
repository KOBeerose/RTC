<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['5']['subjects'] . " " . $row['2']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable germation." />

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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-crs-si.php?language=" . $language ?>"><?php echo $row['5']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-crs/si/2-MP Si Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="11" style="text-align: center;"><img src="images/dynamics.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/si/Analyse cinématique d’un mécanisme.pdf" target="_blank">Analyse cinématique d’un mécanisme</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Approches systèmes.pdf" target="_blank">Approches systèmes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Exemple de Cahier Des Charges Fonctionnel.pdf" target="_blank">Exemple de Cahier Des Charges Fonctionnel</a></td>
						<tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Cinématique du solide indéformable.pdf" target="_blank">Cinématique du solide indéformable</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Cinématique plane du solide (1).pdf" target="_blank">Cinématique plane du solide (1)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Cinématique plane du solide (2).pdf" target="_blank">Cinématique plane du solide (2)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Les outils de l'analyse fonctionnelle.pdf" target="_blank">Les outils de l'analyse fonctionnelle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Cinétique des systèmes matériels.pdf" target="_blank">Cinétique des systèmes matériels</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Etude des Chaînes fermées (1).pdf" target="_blank">Etude des Chaînes fermées (1)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Etude des Chaînes fermées (2).pdf" target="_blank">Etude des Chaînes fermées (2)</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/electronics1'.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/si/Les systèmes automatisés.pdf" target="_blank">Les systèmes automatisés</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Automatique - Transformée de Laplace (1).pdf" target="_blank">Automatique - Transformée de Laplace (1)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Automatique - Transformée de Laplace (2).pdf" target="_blank">Automatique - Transformée de Laplace (2)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Automatique - Limites du modèle (1).pdf" target="_blank">Automatique - Limites du modèle (1)</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/si/Automatique - Limites du modèle (2).pdf" target="_blank">Automatique - Limites du modèle (2)</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>