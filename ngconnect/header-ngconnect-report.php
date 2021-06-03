<?php
session_start();
if($_SESSION["ngconnectreport"] != true)
{
	header('Location: http://visual.nuren.co/admin2635/ngconnect-report/index.php');
}
require_once("../database_leads.php");
$conn = mysqli_connect($LEADS_IP, $LEADS_USER, $LEADS_PWD, 'com.ads');
?>
<!DOCTYPE html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/css/all.min.css">
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/js/bootstrap.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
	<!-- custom style and js -->
	<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/select2/dist/css/select2.min.css">
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/select2/dist/js/select2.min.js"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/Inputmask-5.x/dist/jquery.inputmask.js" type="text/javascript"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/twbs-pagination/jquery.twbsPagination.min.js" type="text/javascript"></script>
	<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/simplePagination/jquery.simplePagination.js" type="text/javascript"></script>
	<title>Ng-connect report | Motherhood.com.my Malaysia</title>
<style>
body{
	font-family: 'Poppins', sans-serif;
}


.active:not(.leftmenu) {
    background-color: #ffcfda;
}

.row-motherhood{
	margin-bottom:10px
}


</style>
</head>	
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="report_list.php">Ng-connect report list</a>
			</li>
		</ul>
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			<li class="nav-item">
				<a href="index.php?islogout=true" class="nav-link p-2" href="" target="_blank" rel="noopener" aria-label="GitHub">
					<i class="fas fa-sign-out-alt"></i> Logout
				</a>
			</li>
		</ul>
	</nav>
	<main role="main" class="container-fluid">
		<div class="starter-template">
			<div class="row row-motherhood" style="margin-top:40px;">
				<div class="col-md-12">
					<div class="page-header">
						<h3>List of data for <?php echo (isset($_GET['q']) &&  $_GET['q'] != '') ? $_GET['q'] : 'Ng-connect report list | Motherhood.com.my Malaysia'?></h3>
					</div>
				</div>
			</div>