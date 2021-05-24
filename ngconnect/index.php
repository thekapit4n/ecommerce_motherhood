<!doctype html>
<html lang="en">
<?php
session_start();

if(isset($_GET['islogout']) && $_GET['islogout'] == true)
{
	unset($_SESSION["ngconnectreport"]);
	header('Location: http://visual.nuren.co/admin2635/ngconnect-report/index.php');
}

$arr_allowUser = array(
	'ngconnectuser',
);

if ((in_array($_POST['login'], $arr_allowUser)) && $_POST['password'] == 'ngc0nn3ct@123%'){
	$_SESSION['ngconnectreport'] = true;
}

if ($_SESSION['ngconnectreport'] == true){
	header('Location: http://visual.nuren.co/admin2635/ngconnect-report/report_list.php');
}
else
{
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/css/style.css">
    <title>Ng Connect Report | Motherhood.com.my Malaysia</title>
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
	<style>
		body{
			font-family: 'Poppins', sans-serif;
			background-image: url("https://login.nuren.co/assets/v2/images/bg-custom1-motherhood.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
			min-width: 100%;
			width: auto;
		}
	</style>
</head>
</body>
	<div class="content" style="padding:3em 0;">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 order-md-2">
				  <img src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
				</div> -->
				<div class="col-md-6 contents">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center mb-1">
							<!--<img src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" class="img-fluid" alt="Motherhood Logo" style="width:50%;">-->
							<img src="assets/mmy-logo.svg" class="img-fluid" style="width:75%;" />
						</div>
						<!--
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							You successfully logout. Have a nice day!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						-->
						<div class="col-md-12">
							<div class="form-block" style="padding-top:20px;padding-bottom:20px;">
								<div class="mb-12">
									<h3>Login to <strong>ng-connect report</strong></h3>
									<p class="mb-4">Motherhood.com.my Malaysia</p>
								</div>
								<form action='index.php' method='post' method="post">
									<div class="form-group first">
										<label for="username">Login</label>
										<input type="text" class="form-control" id="username"  name='login'>
									</div>
									<div class="form-group last mb-4">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password">
									</div>
									<input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
								</form>
								<div class="col-md-12 text-right mt-3">
									<img src="https://login.nuren.co/assets/v2/images/logo-nuren-vertical.png" style="width:25%;" />
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/js/bootstrap.min.js"></script>
    <script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/report-login/js/main.js"></script>
</body>
<?php	
	die();
}
?>
</html>