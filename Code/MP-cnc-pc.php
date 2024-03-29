<?php
require "header.php";
?>
<head>
	<title>MP CNC <?php echo $row['0']['subjects'] . $row['0']['important'] . $row['1']['subjects'] ?></title>
	<meta name="description" content="Road To CNC is a modern platform for cpge students, made by previous students. We provide a free platform where you can find documents, books and valuable pcrmation." />

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
			<li class="breadcrumb-item"><a href="<?php echo "MP-cnc-pc.php?language=" . $language ?>"><?php echo $row['0']['subjects'] . $row['0']['important'] . $row['1']['subjects'] ?></a></li>
 		</ol>
	</div>
	<div id="fh5co-course">
		<div class="container">
		<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $row['11']['important'] . ' ' . $row['8']['page_header'] . 's' ?></h2>
					<p><?php echo $row['16']['page_content'] ?><a href="<?php echo "upload-form.php?language=" . $language ?>" target="_blank"><?php echo $row['12']['important'] ?></a></p>
					<p><?php echo $row['15']['page_content'] ?><a href="pdfs/MP/cnc/pc/MP PC CNC.rar" download ><?php echo $row['12']['important'] ?></a></p>
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
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2000</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2000 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>

						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2001</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2001 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2002</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2002 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2003</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2003 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2004</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2004 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2005</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2005 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2006</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2006 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2007</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2007 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2008</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2008 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2009</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2009 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2009 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2009 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2009 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2009 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2010</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2010 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2010 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2010 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2010 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2010 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2011</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2011 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2012</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2012 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2012 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2012 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2012 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2012 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2013</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2013 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2013 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2013 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2013 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2013 Chimie MP Correction.pdf" target="_blank">Correction</a></td>

						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2014</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2014 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2014 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2014 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2014 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2015</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2015 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2015 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2015 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2015 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2015 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2016</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2016 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2016 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2016 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2016 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2016 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2017</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2017 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2018</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2018 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2019</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Physique-1 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Physique-2 MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2019 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr>
							<td class="tbl-cnt" rowspan="2" style="text-align: center;">2020</td>
							<td>Physics</td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2020 Physique MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2020 Physique MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2020 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2020 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>
                        <tr>
							<td class="tbl-cnt" rowspan="3" style="text-align: center;">2021</td>
							<td><?php echo $row['0']['subjects'] . ' 1' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2021 Physique-1 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['0']['subjects'] . ' 2' ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2021 Physique-2 MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td>-</td>
						</tr>
						<tr class="tbl-cnt">
							<td><?php echo $row['1']['subjects'] ?></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2021 Chimie MP.pdf" target="_blank"><?php echo $row['8']['page_header'] ?></a></td>
							<td><a href="pdfs/MP/cnc/pc/CNC 2021 Chimie MP Correction.pdf" target="_blank">Correction</a></td>
						</tr>						
					</table>


				</tbody>

			</div>
		</div>
	</div>
	<?php
require "footer.php";
?>