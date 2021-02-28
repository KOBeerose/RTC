<?php
require "header.php";
?>
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Upload Page</h1>
								   <h2 style="font-size: smaller;"><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


	<br>
	<div class="form-group">
		<div class="col-md-12">
			<form action="" method="POST" enctype="multipart/form-data">
				<input required="true" type="text" name="file_name" class="form-control" placeholder="File Name">
				<input class="form-control" type="file" name="userfile[]" value="" multiple="">
				<textarea  name="file_description" cols="30" rows="10" class="form-control" placeholder="File Description"></textarea>
				<input class="form-control" type="submit" name="submit" value="upload">
			</form>
			<br>
		</div>
	</div>


<?php
$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The file uploaded exceeds the upload_max_filesize directive in php.ini',
    2 => 'The file uploaded exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The file uploaded was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk',
    8 => 'A PHP extension stopped the file upload',
);
if (isset($_FILES['userfile'])) {
    $file_array = reArrayFiles($_FILES['userfile']);
    pre_r($file_array);
    for ($i = 0; $i < count($file_array); $i++) {
        if ($file_array[$i]['error']) {
            ?> <div class="alert alert-danger">
			<?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
            ?> </div> <?php
} else {
            $extensions = array('pdf', 'txt', 'docx', 'doc', 'wpd', 'odt', 'jpg', 'PNG', 'jpeg');
            $file_ext = explode('.', $file_array[$i]['name']);
            $file_ext = end($file_ext);
            if (!in_array($file_ext, $extensions)) {
                ?> <div class="alert alert-danger">
				<?php echo $file_array[$i]['name'] . 'Invalid file extension!';
                ?> </div> <?php
} else {
                move_uploaded_file($file_array[$i]['tmp_name'], "uploads/" . $file_array[$i]['name']);
                ?> <div class="alert alert-success">
			<?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
                ?> </div> <?php
}
        }
    }
}

function reArrayFiles($file_post)
{

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];

        }
    }
    return $file_ary;
}
function pre_r($array)
{
    echo '<pre>';

    echo '</pre>';
}

?>

<?php
require "footer.php";
?>