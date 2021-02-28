<?php
require "header.php";
?>
<head>
	<title>2-TSI  <?php echo $row['3']['subjects'] . " " . $row['3']['page_header'] ?></title>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI-spe-ex-gm.php?language=" . $language ?>"><?php echo $row['3']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['3']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/spe-ex/gm/2-TSI Gm Ex.rar"><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="13" style="text-align: center;"><img src="images/dynamics.jpg" alt=""></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Matrices d'inertie.pdf" target="_blank">TD Matrices d'inertie</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Matrices D'Inertie.pdf" target="_blank">TD Correction Matrices D'Inertie</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Torseur cin dyn PFD TEC.pdf" target="_blank">TD Torseur cin dyn PFD TEC</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Torseur Cin Dyn Pfd Tec.pdf" target="_blank">TD Correction Torseur Cin Dyn Pfd Tec</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD TEC.pdf" target="_blank">TD TEC</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction TEC.pdf" target="_blank">TD Correction TEC</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Equilibrage - Sujet.pdf" target="_blank">TD Equilibrage - Sujet</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Equilibrage.pdf" target="_blank">TD Correction Equilibrage</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Equilibreuse - Sujet.pdf" target="_blank">TD Equilibreuse - Sujet</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Equlibreuse.pdf" target="_blank">TD Correction Equlibreuse</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Eolienne - Sujet.pdf" target="_blank">TD Eolienne - Sujet</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Eolienne.pdf" target="_blank">TD Correction Eolienne</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Sections.pdf" target="_blank">TD Sections</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Sections.pdf" target="_blank">TD Correction Sections</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Cohésion.pdf" target="_blank">TD Cohésion</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Cohésion.pdf" target="_blank">TD Correction Cohésion</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Traction Compression.pdf" target="_blank">TD Traction Compression</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Traction Compression.pdf" target="_blank">TD Correction Traction Compression</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Cisaillement.pdf" target="_blank">TD Cisaillement</a></td>
							<td><a href="pdfs/TSI/spe-ex/TD Correction Cisaillement/2.pdf" target="_blank">TD Correction Cisaillement</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Torsion.pdf" target="_blank">TD Torsion</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Torsion.pdf" target="_blank">TD Correction Torsion</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Flexion.pdf" target="_blank">TD Flexion</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Flexion.pdf" target="_blank">TD Correction Flexion</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/TSI/spe-ex/gm/TD Structures hyperstatiques.pdf" target="_blank">TD Structures hyperstatiques</a></td>
							<td><a href="pdfs/TSI/spe-ex/gm/TD Correction Structures Hyperstatiques.pdf" target="_blank">TD Correction Structures Hyperstatiques</a></td>
						</tr>
					</table>
			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>