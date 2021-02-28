<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['1']['subjects'] . " " . $row['3']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable chirmation." />

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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex-chi.php?language=" . $language ?>"><?php echo $row['1']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-ex/chi/2-TSI Chi Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/c-reactions'.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/chi/TD Diagrammes potentiel-pH.pdf" target="_blank">TD Diagrammes potentiel-pH</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Diagrammes potentiel-pH.pdf" target="_blank">Correction TD Diagrammes potentiel-pH</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/chi/TD Équilibre et évolution d’un système chimique.pdf" target="_blank">TD Équilibre et évolution d’un système chimique</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Équilibre et évolution d’un système.pdf" target="_blank">Correction TD Équilibre et évolution d’un système</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/chi/TD Oxydoréduction.pdf" target="_blank">TD Oxydoréduction</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Oxydoréduction.pdf" target="_blank">Correction TD Oxydoréduction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/chi/TD Thermochimie.pdf" target="_blank">TD Thermochimie</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Thermochimie.pdf" target="_blank">Correction TD Thermochimie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/chi/TD Thermodynamique des réactions chimiques.pdf" target="_blank">TD Thermodynamique des réactions chimiques</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Thermodynamique des réactions.pdf" target="_blank">Correction TD Thermodynamique des réactions</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/g-chemistry'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/chi/TD Structure de la matière.pdf" target="_blank">TD Structure de la matière</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Structure de la matière.pdf" target="_blank">Correction TD Structure de la matière</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/chi/TD Synthèse industrielle de l’ammoniac.pdf" target="_blank">TD Synthèse industrielle de l’ammoniac</a></td>
							<td><a href="pdfs/TSI/spe-ex/chi/Correction TD Synthèse industrielle de l’ammoniac.pdf" target="_blank">Correction TD Synthèse industrielle de l’ammoniacs</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>