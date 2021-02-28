<?php
require "header.php";
$message_sent = false;

if (isset($_POST['submit'])) {
    $message_sent = true;
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['email'];
    $message = $_POST['message'];
    $mailto = "roadtocnc@gmail.com";
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

    mail($mailto, $subject, $txt);

}

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
			   					<h1 class="heading-section"><?php echo $row['5']['page_header'] ?></h1>
								   <h2 style="font-size: smaller;"><?php echo $row['1']['page_content'] ?><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<?php if ($message_sent) {
    echo "<div class='app-snackbar corner-wrap'>
					<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><span aria-hidden='true'>×</span></button>
							Message sent
					</div>
					</div>";
}
?>

				<div id='contact' class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3><?php echo $row['0']['contact_page'] ?></h3>
						<ul>
							<li class="icon-facebook2"><a href="https://web.facebook.com/Road-To-Cnc-104047221403297" target="_blank">Facebook Page</a></li>
							<li class="phone"><a href="tel://1234567920">+212632239525</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">roadtocnc@gmail.com</a></li>
							<li class="url"><a href="https://www.patreon.com/roadtocnc?fan_landing=true" target="_blank">Patreon</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3><?php echo $row['1']['contact_page'] ?></h3>
					<form class='contact-form' action="contact.php" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<input required="true" type="text" name="name" class="form-control" placeholder="<?php echo $row['2']['contact_page'] ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="email" name="email" class="form-control" placeholder="<?php echo $row['3']['contact_page'] ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input required="true" type="text" name="subject" class="form-control" placeholder="<?php echo $row['4']['contact_page'] ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<textarea required="true" name="message" cols="30" rows="10" class="form-control" placeholder="<?php echo $row['5']['contact_page'] ?>"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="<?php echo $row['6']['contact_page'] ?>" class="btn btn-primary">
						</div>

					</form>


				</div>
			</div>

		</div>
	</div>



	<?php
require "footer.php";
?>