<header>
<style>
<?php include 'CSS/newEvents_css.css' ?>
body{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    margin:0;
}
</style>
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/css/all.min.css">
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/jQuery/popper.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/boostrap-v4.5.3/js/bootstrap.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script>
tinymce.init({ selector:'textarea' 
  , plugins: "code" 
  , toolbar: "code"
  , valid_elements:"*[*]"
  ,valid_children : "+body[style]"
  });
</script>
<?php
   $currPath = $_SERVER['REQUEST_URI'];
   $baseprog=explode("?",basename($currPath));
   $checkName=explode("_",basename($baseprog[0]));
if (!$_GET['frame']){
?>
<div>
    <ul class="menu">
        <li class="motherhoodtitle">MOTHERHOOD.COM.MY EVENT MASTER</li>      
        <li><a href="eventt_listbox.php" <?php if ($checkName[0]=='eventt') echo "class='active'"; ?>>Listbox</a></li>
        <li><a href="event_report_form.php" <?php if ($checkName[0]=='event') echo "class='active'"; ?>>Registered Users</a></li>
        <li>
        <li class="dropdownHover"><a href="events_index.php" <?php if ($checkName[0]=='events' ) echo "class='active'"; ?>>Events Master</a>
            <ul class="dropdown-content">
                <a href="https://www.motherhood.com.my/admin2635/dashboard/newEvents/events_index.php">MMY</a>
                <a href="https://www.mamahood.com.sg/admin2635/dashboard/newEvents/events_index.php">MSG</a>
                <a href="https://www.motherhood.co.th/admin2635/dashboard/newEvents/events_index.php">MTH</a>
            </ul>
        </li>
        </ul>
</div>
<?php } ?>
</header>
<script>
    $('.dropdownHover').hover(function(){
        $('.dropdown-content').css("display", "block");
        }, function(){
        $('.dropdown-content').css("display", "none");
    });
</script>