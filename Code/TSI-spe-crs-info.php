<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['2']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '2-TSI ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs.php?language=" . $language ?>"><?php echo '2-TSI ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-crs-info.php?language=" . $language ?>"><?php echo $row['2']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-crs/info/2-TSI Info Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
					<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/mysql.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/info/Algebre relationnelle.pdf" target="_blank">Algebre relationnelle</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Introduction aux bases de données.pdf" target="_blank">Introduction aux bases de données</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Le langage SQL.pdf" target="_blank">Le langage SQL</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Sqlite et Python.pdf" target="_blank">Sqlite et Python</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="5" style="text-align: center;"><img src="images/python.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/info/Complexité algorithmique.pdf" target="_blank">Complexité algorithmique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Les exceptions.pdf" target="_blank">Les exceptions</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Les Arbres.pdf" target="_blank">Les Arbres</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Les Graphes.pdf" target="_blank">Les Graphes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Les algorithmes de tri avancés.pdf" target="_blank">Les algorithmes de tri avancés</a></td>
						</tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/cs.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-crs/info/Ingénierie numérique ét simulation.pdf" target="_blank">Ingénierie numérique ét simulation</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Méthode Euler.pdf" target="_blank">Méthode Euler</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Résolution des systèmes linéaires.pdf" target="_blank">Résolution des systèmes linéaires</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-crs/info/Les équations différentielles ordinaires.pdf" target="_blank">Les équations différentielles ordinaires</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>