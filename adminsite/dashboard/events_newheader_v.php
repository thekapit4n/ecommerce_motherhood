<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
	
	
	<script src="tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({ selector:'textarea' 
		  , plugins: "code" 
		  , toolbar: "code"
		  , valid_elements:"*[*]"
		  ,valid_children : "+body[style]"
		  });
	</script>

    <!-- Custom styles for this template -->
	<style>
		body {
		  padding-top: 5rem;
		}
		.starter-template {
		  padding: 1rem 1.5rem;
		}
		.motherhood-navbar{
			min-height: 4rem;
			border: 1px solid #00aaa5;
			background-color: #00aaa5;
			box-shadow: 0 0.5rem 1rem rgba(0,0,0,.05), inset 0 -1px 0 rgba(0,0,0,.1);
		}
		
		li a.active {
			color:white !important;
			text-decoration: none;
		}
		
		.row-motherhood{
			margin-bottom:10px
		}
		
		table{
			border-collapse: collapse;
		}
	
	</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top motherhood-navbar">
		<a class="navbar-brand" href="#">MOTHERHOOD.COM.MY EVENT MASTER</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<?php
				$currPath  = $_SERVER['REQUEST_URI'];
				$baseprog  = explode("?",basename($currPath));
				$checkName = explode("_",basename($baseprog[0]));
				if (!$_GET['frame']){
			?>
			
				<ul class="navbar-nav ml-auto" style="color:white">
					<li class="nav-item dropdown <?php if (isset($checkName) && is_array($checkName) && sizeof($checkName) > 0 && $checkName[0]=='events' ) echo "class='active'"; ?>">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events Master</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="https://www.motherhood.com.my/admin2635/dashboard/newEvents/events_index.php">MMY</a>
							<a class="dropdown-item" href="https://www.mamahood.com.sg/admin2635/dashboard/newEvents/events_index.php">MSG</a>
							<a class="dropdown-item" href="https://www.motherhood.co.th/admin2635/dashboard/newEvents/events_index.php">MTH</a>
						</div>
					</li>
					<li class="nav-item <?php if (isset($checkName) && is_array($checkName) && sizeof($checkName) > 0 && $checkName[0]=='event') echo "class='active'"; ?>">
						<a class="nav-link " href="event_report_form.php">Registered Users </a>
					</li>
					<li class="nav-item"<?php if (isset($checkName) && is_array($checkName) && sizeof($checkName) > 0 && $checkName[0]=='eventt') echo "class='active'"; ?>>
						<a class="nav-link" href="eventt_listbox.php">Listbox</a>
					</li>
				</ul>
				
				
				
			<?php } ?>
		</div>
    </nav>