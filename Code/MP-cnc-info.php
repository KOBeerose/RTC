<?php
require "header.php";
?>
<head>
	<title>MP CNC <?php echo $row['2']['subjects'] ?></title>
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
							   <h1 class="heading-section">CNC MP</h1>
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
			<li class="breadcrumb-item"><a href="<?php echo "MP.php?language=" . $language ?>">MP</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-cnc.php?language=" . $language ?>">CNC</a></li>
			<li class="breadcrumb-item"><a href="<?php echo "MP-cnc-info.php?language=" . $language ?>"><?php echo $row['2']['subjects'] ?></a></li>
 		</ol>
	</div>
	<div id="fh5co-course">
		<div class="container">
		<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['8']['page_header'] . 's' ?></h2>
					<p><?php echo $row['16']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/cnc/info/MP Info CNC.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2015</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2015.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2015 Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2016</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2016.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2016 Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2017</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2017.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2017 Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2018</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2018 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2018 MP Correction.py" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2019</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2019 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2019 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="1" style="text-align: center;">2020</td>
							<td><?php echo $row['2']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/info/CNC Info 2020 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
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