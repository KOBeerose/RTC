<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['4']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex-ge.php?language=" . $language ?>"><?php echo $row['4']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-ex/ge/2-TSI Ge Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="7" style="text-align: center;"><img src="images/electronics1'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/ge/TD Diagramme de Bode.pdf" target="_blank">TD Diagramme de Bode</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Diagramme de Bode.pdf" target="_blank">Correction TD Diagramme de Bode</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Focntion Communiquer.pdf" target="_blank">TD Focntion Communiquer</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Focntion Communiquer.pdf" target="_blank">Correction TD Focntion Communiquer</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Automatique.pdf" target="_blank">TD Automatique</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Automatique.pdf" target="_blank">Correction TD Automatique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Asservissement.pdf" target="_blank">TD Asservissement</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Asservissement.pdf" target="_blank">Correction TD Asservissement</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Stabilité.pdf" target="_blank">TD Stabilité</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Stabilité.pdf" target="_blank">Correction TD Stabilité</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Précision.pdf" target="_blank">TD Précision</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Précision.pdf" target="_blank">Correction TD Précision</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Rapidité.pdf" target="_blank">TD Rapidité</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Rapidité.pdf" target="_blank">Correction TD Rapidité</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;"><img src="images/electrical'.JPG" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/ge/TD Puissance Onduleur.pdf" target="_blank">TD Puissance Onduleur</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Puissance Onduleur.pdf" target="_blank">Correction TD Puissance Onduleur</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/ge/TD Moteur à courant continu.pdf" target="_blank">TD Moteur à courant continu</a></td>
							<td><a href="pdfs/TSI/spe-ex/ge/Correction TD Moteur à courant continu.pdf" target="_blank">Correction TD Moteur à courant continu</a></td>
						</tr>

					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>