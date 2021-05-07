<?php
require "header.php";
?>
<head>
	<title>1-MP  <?php echo $row['5']['subjects'] . " " . $row['2']['page_header'] ?></title>
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
							   <h1 class="heading-section"><?php echo '1-MP ' . $row['2']['page_header'] ?></h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">1-MP</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-crs.php?language=" . $language ?>"><?php echo '1-MP ' . $row['2']['page_header'] ?></a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-sup-crs-ge.php?language=" . $language ?>"><?php echo $row['5']['subjects'] ?></a></li>
 		</ol>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['2']['page_header'] ?></h2>
					<p><?php echo $row['14']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/sup-crs/si/1-MP Si Cours.rar"><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table-img">
			<table>
						<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['15']['important'] ?></td>
							<td style="text-align: center;"><?php echo $row['2']['page_header'] ?></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="8" style="text-align: center;"><img src="images/electronics1'.JPG" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/si/Generalites.pdf" target="_blank">Generalites</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Formalisme De Laplace.pdf" target="_blank">Formalisme De Laplace</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Fonctions De Transfert Et Schema Blocs.pdf" target="_blank">Fonctions De Transfert Et Schema Blocs</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Identification D Un Systeme.pdf" target="_blank">Identification D Un Systeme</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Systemes Du 1 Et 2 Ordre.pdf" target="_blank">Systemes Du 1 Et 2 Ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Fonction De Transfert Complexe D'un Systeme.pdf" target="_blank">Fonction De Transfert Complexe D'un Systeme</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Systemes Du Premier Ordre.pdf" target="_blank">Systemes Du Premier Ordre</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Systemes Du Second Ordre.pdf" target="_blank">Systemes Du Second Ordre</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="14" style="text-align: center;"><img src="images/dynamics.jpg" alt=""></td>
							<td><a href="pdfs/MP/sup-crs/si/Complet Cahier De Charges Des Systemes.pdf" target="_blank">Complet Cahier De Charges Des Systemes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Outils Mathematiques Pour La Mecanique.pdf" target="_blank">Outils Mathematiques Pour La Mecanique</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Cinematique Du Point.pdf" target="_blank">Cinematique Du Point</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Cinematique Du Solide.pdf" target="_blank">Cinematique Du Solide</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Liaisons Equivalentes.pdf" target="_blank">Liaisons Equivalentes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Liaisons Equivalentes 1.pdf" target="_blank">Liaisons Equivalentes 2</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Modelisation Des Mecanismes.pdf" target="_blank">Modelisation Des Mecanismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Resolution Des Mecanismes.pdf" target="_blank">Resolution Des Mecanismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Cinematique Du Contact.pdf" target="_blank">Cinematique Du Contact</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Transformation Du Mouvement a Rapport Fixe.pdf" target="_blank">Transformation Du Mouvement a Rapport Fixe</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Actions Mecaniques.pdf" target="_blank">Actions Mecaniques</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Contact.pdf" target="_blank">Contact</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Resolution Statique Des Mecanismes.pdf" target="_blank">Resolution Statique Des Mecanismes</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><a href="pdfs/MP/sup-crs/si/Transformation Du Mouvement.pdf" target="_blank">Transformation Du Mouvement</a></td>
						</tr>
					</table>

			</div>
		</div>
	</div>

	<?php
require "footer.php";
?>