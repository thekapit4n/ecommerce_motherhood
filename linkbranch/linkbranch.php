<head>
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/css/all.min.css">
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/js/bootstrap.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
	<!-- this part for custome css  -->
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/pixinvent/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title> Motherhood Instagram Links</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://www.motherhood.com.my/assets/images/mmy.png">
    <style>
		body{
			background: #62c5cc;  /* fallback for old browsers */
		}
		
		.btn-visit-estore{
			margin-bottom: .5rem !important;
			margin-top: -10px;
			width: 100%;
		}
		
		.font-news{
			font-family: 'Montserrat', sans-serif;
		}
		
		.text-bold-700{
			font-weight: 700;
		}
		
		.font-small-12
		{
			font-size: 12px !important;
		}
		
		.font-small-11
		{
			font-size: 11px !important;
		}
		
		a:link {
		  text-decoration: none;
		}

		a:visited {
		  text-decoration: none;
		}
    </style>
</head>
<?php
include(dirname(__FILE__).'/../../../config/config.inc.php');
include(dirname(__FILE__).'/../../../init.php');

require_once(dirname(__FILE__)."/../../../config/settings.inc.php");
//get category data
$conn = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
?>
<body>
	<div class="container animated fadeIn">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<header class="d-flex flex-column align-items-left pt-4" style="color: white;">
					<div class="media media-container">
						<img id="image" src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="motherhood logo" class="link-image mb-1 left float-left" style="display: block; object-fit: cover;">
						<div class="media-body" style="padding-left: 25px;">
							<h1 id="title" class="title mb-4" style="text-align: left;">Welcome to Motherhood!
							</h1>
							<a href="https://www.motherhood.com.my/?utm_source=instagram&utm_medium=socialmedia&utm_campaign=linkinbio" target="_blank" class="btn btn-default btn-visit-estore" style="color: rgb(255, 255, 255); background:#f37a59;;">
								Visit Our E-Store
							</a>
						</div>
					</div>
				</header>
				<div class="div-social d-flex flex-wrap justify-content-center mb-4 mt-3">
					<div class="mt-1 mr-2">
						<a href="https://www.facebook.com/motherhood.com.my?utm_source=instagram&utm_medium=socialmedia&utm_campaign=linkinbio" target="_blank" title="Motherhood MY facebook">
							<i class="fab fa-facebook-square fa-2x fa-fw"style="color: rgb(0, 0, 0);"></i>
						</a>
					</div>
					<div class="mt-1 mr-2">
						<a href="https://www.instagram.com/motherhood.com.my/?hl=en" target="_blank" title="Motherhood MY instagram">
							<i class="fab fa-instagram fa-2x fa-fw" style="color: rgb(0, 0, 0);"></i>
						</a>
					</div>
					<div class="mt-1 mr-2">
						<a href="https://www.tiktok.com/@motherhood.com.my" target="_blank" title="Motherhood MY tiktok">
							<i class="fab fa-tiktok fa-2x fa-fw" style="color: rgb(0, 0, 0);"></i>
						</a>
					</div>
					<div class="mt-1 mr-2">
						<a href="https://www.youtube.com/c/Motherhoodcommy/" target="_blank" title="Motherhood MY youtube">
							<i class="fab fa-youtube fa-2x fa-fw" style="color: rgb(0, 0, 0);"></i>
						</a>
					</div>
					<div class="mt-1 mr-2">
						<a href="https://open.spotify.com/show/0BDdNPHJSGdOtbSGdgx4xu" target="_blank" title="Motherhood MY youtube">
							<i class="fab fa-spotify fa-2x fa-fw" style="color: rgb(0, 0, 0);"></i>
						</a>
					</div>
				</div>
				<div class="content font-news">
					<!-- ITEM LIST  -->
					<?php 
					$sql = "SELECT * FROM tbl_instagram_biolink ORDER BY link_sort ASC";
					$result = $conn->query($sql);
					$orderList = array();
					while ($row = $result->fetch_assoc()) {
					?>
						<div style="cursor: pointer;">
							<a href="<?php echo $row['link_url'] ?>" target="_blank" >
								<div class="col-xl-12 col-md-12" style="margin-bottom: 10px; padding-left: 0px; padding-right: 0px; background-color: rgb(255, 255, 255); border: 0px; color: rgb(0, 0, 0); border-radius: 0px; overflow: hidden;">
									<div class="media align-items-stretch" style="min-height:80px;">
										<div class="media-middle" style="padding: 5px;">
										</div>
										<div class="media-body d-flex flex-column justify-content-center align-items-center" style="padding-right: 5px; padding-top: 5px; text-align: center;">
											<div id="data-link-390" class="flex-row flex-wrap">
												<div class="d-flex justify-content-center col-md-12 font-small-12 text-bold-700"><?php echo $row['link_title'] ?></div>
												<div class="d-flex justify-content-center col-md-12 font-small-12"></div>
												<div class="d-flex justify-content-center col-md-12">
													<span class="font-small-11"><u>See More</u></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
