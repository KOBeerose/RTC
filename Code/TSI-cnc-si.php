<?php
require "header.php";
?>
<head>
	<title>TSI CNC <?php echo $row['5']['subjects'] ?></title>
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
							   <h1 class="heading-section">CNC TSI</h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "TSI.php?language=" . $language ?>">TSI</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-cnc.php?language=" . $language ?>">CNC</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "TSI-cnc-si.php?language=" . $language ?>"><?php echo $row['5']['subjects'] ?></a></li>
 		</ol>
	</div>
	<div id="fh5co-course">
		<div class="container">
		<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['8']['page_header'] . 's' ?></h2>
					<p><?php echo $row['16']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/TSI/cnc/si/TSI SI CNC.rar" download ><?php echo $row['12']['important'] ?></a></p>
				</div>
			</div>
			<div class="table">
				<tbody >
					<table>
							<tr class="tbl-cnt">
							<td style="text-align: center;"><?php echo $row['6']['subjects'] ?></td>
							<td style="text-align: center;"><?php echo $row['7']['subjects'] ?></td>
							<td colspan="2" style="text-align: center;">Documents</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2005</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2005 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2006</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2006 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2007</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2007 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2007 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2008</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2008 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2008 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2008 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2008 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2009</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2009 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2009 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2009 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2010</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2010 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2010 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2010 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2010 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2011</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2011 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2011 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2011 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2012</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2012 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2012 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2012 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2012 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2013</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2013 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2013 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2013 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2014</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2014 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2014 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2015</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2015 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2015 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2015 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2015 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2016</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2016 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2016 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2016 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2016 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2017</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2017 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2017 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2017 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2017 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2018</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2018 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2018 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2018 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2018 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2019</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2019 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2019 Ge Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2019 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2019 Gm Correction TSI.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2020</td>
							<td><?php echo $row['4']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2020 Ge TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['3']['subjects'] ?></td>
							<td><a href="pdfs/TSI/cnc/si/CNC 2020 Gm TSI.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>

					</table>


				</tbody>

			</div>
		</div>
	</div>
	<?php
require "footer.php";
?>