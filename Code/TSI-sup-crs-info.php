<?php
require "header.php";
?>
<head>
	<title>1-TSI  <?php echo $row['2']['subjects'] . " " . $row['2']['page_header'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable information." />

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
							   <h1 class="heading-section"><?php echo '1-TSI ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-crs.php?language=" . $language ?>"><?php echo '1-TSI ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-sup-crs-info.php?language=" . $language ?>"><?php echo $row['2']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/sup-crs/info/1-TSI Info Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/algo.jpg" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/info/Généralités et algorithmique de base.pdf" target="_blank">Généralités et algorithmique de base</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Algorithmique de base.pdf" target="_blank">Algorithmique de base</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="9" style="text-align: center;"><img src="images/python.JPG" alt=""></td>
							<td><a href="pdfs/TSI/sup-crs/info/Introduction à la programmation en Python.pdf" target="_blank">Introduction à la programmation en Python</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Les Listes.pdf" target="_blank">Les Listes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Les chaînes de caractères.pdf" target="_blank">Les chaînes de caractères</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Les fonctions.pdf" target="_blank">Les fonctions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Les dictionnaires, tuples et ensembles.pdf" target="_blank">Les dictionnaires, tuples et ensembles</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Piles & File.pdf" target="_blank">Piles & File</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Programmation Orientée Objet.pdf" target="_blank">Programmation Orientée Objet</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Les fichiers.pdf" target="_blank">Les fichiers</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/sup-crs/info/Récursivité.pdf" target="_blank">Récursivité</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>