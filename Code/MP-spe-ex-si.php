<?php
require "header.php";
?>
<head>
	<title>2-MP  <?php echo $row['5']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP-spe-ex-ge.php?language=" . $language ?>"><?php echo $row['5']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/spe-ex/si/2-MP Si Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="3" style="text-align: center;"><img src="images/electronics1'.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/si/TD Automatique.pdf" target="_blank">TD Automatique</a></td>
							<td><a href="pdfs/MP/spe-ex/si/Correction TD Automatique.pdf" target="_blank">Correction TD Automatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/si/TD Echelle Pivotante Automatique.pdf" target="_blank">TD Echelle Pivotante Automatique</a></td>
							<td><a href="pdfs/MP/spe-ex/si/Correction TD Echelle Pivotante Automatique.pdf" target="_blank">Correction TD Echelle Pivotante Automatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction ALCI.pdf" target="_blank">TD + Correction ALCI</a></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction ALCI.pdf" target="_blank">Correction TD ALCI</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="4" style="text-align: center;"><img src="images/dynamics.jpg" alt=""></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Cinetique.pdf" target="_blank">TD + Correction Cinetique</a></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Cinetique.pdf" target="_blank">Correction TD Cinetique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Diagramme de Bode.pdf" target="_blank">TD + Correction Diagramme de Bode</a></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Diagramme de Bode.pdf" target="_blank">Correction TD Diagramme de Bode</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Dynamique.pdf" target="_blank">TD + Correction Dynamique</a></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Dynamique.pdf" target="_blank">Correction TD Dynamique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Statique.pdf" target="_blank">TD + Correction Statique</a></td>
							<td><a href="pdfs/MP/spe-ex/si/TD + Correction Statique.pdf" target="_blank">Correction TD Statique</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>