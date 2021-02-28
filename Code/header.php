<?php
function get_ip()
{
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}
$ip = get_ip();
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip));

$a = 0;
$host = 'localhost';
$dbusername = 'dbusername';
$dbpassword = 'dbpassword';
$dbname = 'rtc';
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$p = '';
$en_select = '';
$fr_select = '';
$language = '';
if ((isset($_GET['language']) && $_GET['language'] == 'en') or !isset($_GET['language'])) {
    $en_select = 'selected';
    $language = 'en';
    $p = 'fr';
} else {
    $fr_select = 'selected';
    $language = 'fr';
    $p = 'en';
}

$sql = "SELECT * FROM dynamic_content WHERE language_type='$language'";
$result = $conn->query($sql);
$row = $result->fetch_all(MYSQLI_ASSOC);

$kokiza = $_COOKIE['kokiza'] ?? 'b9iti bjo3';
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="cnc, cpge, coures, exercices, " />
	<meta name="author" content="RTC" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon"href="images/RTC.icon" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>



		<div class="fh5co-loader"></div>

		<div id="page">
			<nav class="fh5co-nav" role="navigation">
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-right">
								<p class="site">Road To CNC</p>
								<a href="<?php echo "?language=" . $p ?>". > <?php echo $row['0']['page_header'] ?></a>

								<ul class="fh5co-social">
									<li><a href="https://web.facebook.com/Road-To-Cnc-104047221403297" target="_blank"><i class="icon-facebook2"></i></a></li>
									<li><a href="#" target="_blank"><i class="icon-twitter2"></i></a></li>
									<li><a href="https://github.com/KOBeerose" target="_blank"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-2">
								<div id="fh5co-logo"><a href="<?php echo "index.php?language=" . $language ?>"><i class="icon-study"></i>RTC<span>.</span></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li class="active"><a href="<?php echo "index.php?language=" . $language ?>"><?php echo $row['1']['page_header'] ?></a></li>



									<li class="has-dropdown">
										<a href="<?php echo "MP.php?language=" . $language ?>">MP</a>
										<ul class="dropdown">
											<li><a href="<?php echo "MP-sup-crs.php?language=" . $language ?>"><?php echo 'SUP ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "MP-sup-ex.php?language=" . $language ?>"><?php echo 'SUP ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "MP-spe-crs.php?language=" . $language ?>"><?php echo 'SPE ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "MP-spe-ex.php?language=" . $language ?>"><?php echo 'SPE ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "MP-cnc.php?language=" . $language ?>">CNC</a></li>
										</ul>
									</li>
									<li class="has-dropdown">
										<a >PSI</a>
										<ul class="dropdown">
											<li><?php echo $row['4']['important'] ?></li>
											<!--
											<li><a href="<?php echo "psi-sup-crs.php?language=" . $language ?>"><?php echo 'SUP ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "psi-sup-ex.php?language=" . $language ?>"><?php echo 'SUP ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "psi-spe-crs.php?language=" . $language ?>"><?php echo 'SPE ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "psi-spe-ex.php?language=" . $language ?>"><?php echo 'SPE ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "psi-cnc.php?language=" . $language ?>">CNC</a></li>
											-->
										</ul>
									</li>
									<li class="has-dropdown">
										<a href="<?php echo "TSI.php?language=" . $language ?>">TSi</a>
										<ul class="dropdown">
											<li><a href="<?php echo "TSI-sup-crs.php?language=" . $language ?>"><?php echo 'SUP ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "TSI-sup-ex.php?language=" . $language ?>"><?php echo 'SUP ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "TSI-spe-crs.php?language=" . $language ?>"><?php echo 'SPE ' . $row['2']['page_header'] ?></a></li>
											<li><a href="<?php echo "TSI-spe-ex.php?language=" . $language ?>"><?php echo 'SPE ' . $row['3']['page_header'] ?></a></li>
											<li><a href="<?php echo "TSI-cnc.php?language=" . $language ?>">CNC</a></li>
								</ul>
									</li>
									<li><a href="<?php echo "about.php?language=" . $language ?>"><?php echo $row['4']['page_header'] ?></a></li>
									<li><a href="<?php echo "contact.php?language=" . $language ?>"><?php echo $row['5']['page_header'] ?></a></li>
									<?php
$f = $row['6']['page_header'];
if ($kokiza !== '1') {
    echo "<li class='btn-cta'><input data-idnt-target='#idnt' type='button' value= '$f' ></li> ";
} else {
    echo '<img class="kokos" src="images/student.png" alt="picture of">';
}

?>



							</div>

						</div>

					</div>
				</div>
			</nav>
	    <div class="idnt" id="idnt">
        <div class="idnt-header">
			<div class="title-form"><?php echo $row['6']['page_header'] ?></div>
			<input data-close-input class="close-input" type="button" value='x'>

		</div>
		<script >
		$("#submit-input").css("visibility", "hidden");
		$(function() {
			$("#submit-input").css("visibility", "hidden");

			$("#ad_form select").bind("change", function() {
				if ($("#CPGE").val().length > 0) {
				$("#submit-input").css("visibility", "visible");
				} else {
				$("#submit-input").css("visibility", "hidden");
				}
			});
		});
		</script>
        <div class="choices-form">
            <form id="ad_form"  method="POST" action="connect.php">
            <label for="ctr">CPGE  : </label>
            <select class="choices" name="CPGE" id="CPGE">
				<option value=""><?php echo $row['7']['page_header'] ?></option>
                <option value="da-coin">Addakhla - Centre Okba Ibn Nafea</option>
                <option value="ag-lrs">Agadir - Lycée Reda Slaoui</option>
                <option value="be-lmv">Beni Mellal - Lycée Mohamed V</option>
                <option value="ca-lak">Casablanca - Lycée Al Khansaa</option>
                <option value="ca-lm5">Casablanca - Lycée Mohamed V</option>
                <option value="el-le">El Jadida - Lycée Errazi</option>
                <option value="er-lit">Errachidia - Lycée Ibn Tahir</option>
                <option value="fs-lmi">Fès - Lycée Moulay Idriss</option>
                <option value="gu-be">Guelmim - Lycée Bab Essahra</option>
                <option value="ke-lm6">Kénitra - Lycée Mohammed VI</option>
                <option value="kh-lia">Khouribga - Lycée Ibn Abdoun</option>
                <option value="ly-lleia">Laâyoune - Lycée Lissane Eddine Ibn Al-Khatib</option>
                <option value="mr-lit">Marrakech - Lycée Ibn Timiya</option>
                <option value="mk-lmi">Meknès - Lycée Moulay Ismail</option>
                <option value="mk-loia">Meknès - Lycée Omar Ibn Al-Khattab</option>
                <option value="mh-lt">Mohammedia - Lycée Technique</option>
                <option value="nd-laak">Nador - Lycée Abdelkarim Al Khattabi</option>
                <option value="or-lqm6">Ouarzazate - Lycée qualifiant Mohammed VI</option>
                <option value="oj-loia">Oujda - Lycée Omar Ibn Abdelaziz</option>
                <option value="rb-lmy">Rabat - Lycée Moulay Youssef</option>
                <option value="rb-loa">Rabat - Lycée Omar Al-Khayyam</option>
                <option value="sf-lma">Safi - Lycée Moulay Abdellah</option>
                <option value="sl-lsaf">Salé - Lycée Salmane Al Farissi</option>
                <option value="se-lt">Settat - Lycée Technique</option>
                <option value="tn-lmah">Tanger - Lycée Moulay Al Hassan</option>
                <option value="tz-laai">Taza - Lycée Acharif Al Idrissi</option>
                <option value="tt-cct">Tétouan - Centre CPGE Tétouan</option>
                <option value="bg-ldx">Benguerir - Lycée d'excellence</option>
				<option value="re-laz">Rabat - Lycée Al-Zahrawi</option>
                <input data-close-input class="submit-input" id="submit-input"  type="submit" name="submit-btn" value="submit">
            </form>


        </div>
    </div>