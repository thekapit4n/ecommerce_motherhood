<head>
    <link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/css/global-override.css">
    <title> Motherhood Instagram Links</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://www.motherhood.com.my/assets/images/mmy.png">
    <style>
    body{
        background-image: linear-gradient(#156f74,#2fa7ad);
        text-align: center;
        margin:0;
    }
	h1{
        color: #eee;
        font-family: 'Quicksand',sans-serif;
	}
    @media (max-width: 768px){
        .box{
            background: transparent;
            border: 2px solid #fff!important;
            color: #fff;
            display: block;
            padding: 18px 10px 18px 14px!important;
            text-align: center;
            font-family: 'Quicksand',sans-serif;
            font-weight: bold;
            font-size: 17px!important;
            margin: 18px 10px!important;
            text-decoration: none;
            border-radius: 0;
            transition: 0.1s;
        }
    }
    .box{
        background: transparent;
        border: 4px solid #fff;
        color: #fff;
        display: block;
        padding: 30px 10px 30px 14px;
        text-align: center;
        font-family: 'Quicksand',sans-serif;
        font-weight: bold;
        font-size: 20px;
        margin: 20px 25px;
        text-decoration: none;
        border-radius: 0;
        transition: 0.1s;
    }
    .box:hover, .box.active, .box:focus{
        background:white;
        color:#2fa7ad;
    }
    @media (max-width: 768px){
        .logo{
            vertical-align: middle;
            width:30%!important;
            /*border: 1px solid #2fa7ad;*/
            border-radius:50%;
        }
    }
    .logo{
        vertical-align: middle;
        width:15%;
        /*border: 1px solid #2fa7ad;*/
        border-radius:50%;
    }
    @media (max-width: 768px){
        .logoDiv{
            text-align:center;
            margin-top:50px!important;
            margin-bottom:60px!important;
        }
        .row{
            width:100%!important;
            padding-bottom:150px!important;
        }
        .logoDiv{
            text-align:center;
            margin-top:30px!important;
            margin-bottom:30px!important;
        }
    }
    .logoDiv{
        text-align:center;
        margin-top:40px;
        margin-bottom:40px;
    }
    .row{
        width:50%;
        margin:auto;
        padding-bottom:150px;
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
    <div class="row">
		<div>
			<h1>Welcome to Motherhood!</h1>
		</div>
        <div class="logoDiv">
            <img class="logo" src="https://s3-ap-southeast-1.amazonaws.com/nuren.co/login/assets/v2/images/M1.png" alt="Motherhood Logo" />
        </div>
<?php
			$sql = "SELECT * FROM tbl_instagram_biolink ORDER BY link_sort ASC";
			$result = $conn->query($sql);
			$orderList = array();
			while ($row = $result->fetch_assoc()) {
				echo '
					<a href="'.$row['link_url'].'" class="box">'.$row['link_title'].'</a>
				';
			}
?>
    </div>
</body>
