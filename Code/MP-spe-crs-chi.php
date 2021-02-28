<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['1']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-crs-chi.php?language=" . $language ?>"><?php echo $row['1']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-crs/chi/2-MP Chi Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/c-reactions'.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/chi/Energies Electrique Et Chimique.pdf" target="_blank">Energies Electrique Et Chimique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/chi/La Cinetique Electrochimique.pdf" target="_blank">La Cinetique Electrochimique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/chi/La Transformation Chimique.pdf" target="_blank">La Transformation Chimique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/chi/Reaction Chimique Redox.pdf" target="_blank">Reaction Chimique Redox</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/g-chemistry'.JPG" alt=""></td>
							<td><a href="pdfs/MP/spe-crs/chi/Phenomenes De Corrosion Humide.pdf" target="_blank">Phenomenes De Corrosion Humide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-crs/chi/Particule Dans Un Puits De Potentiel.pdf" target="_blank">Particule Dans Un Puits De Potentiel</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>