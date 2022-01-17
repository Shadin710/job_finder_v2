<?php
  session_start();

  if (empty($_SESSION['email'])) {
    header("Location:provider_login");
  }
  include_once 'connection/db_connection.php';
  $provider_email = $_SESSION['email'];

  $sql_applied = "SELECT * FROM applied WHERE provider_email = '$provider_email'";
  $applied_object  = mysqli_query($conn,$sql_applied) Or die("Failed to get applied job" . mysqli_error($conn));
  $count_apply_job = mysqli_num_rows($applied_object);

  $sql_search_cv = "SELECT * FROM cv WHERE provider_email = '$provider_email'";
  $cv_object = mysqli_query($conn,$sql_search_cv) Or die("Failed to get cv info" . mysqli_error($conn));
  $count_cv = mysqli_num_rows($cv_object);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <style>
    body{
    background-color: #f5f4f5;
    margin-top:20px;
}

/* Tr Job Post */

.job-item {
    background-color: #fff;
}

.job-tab .nav-tabs {
	margin-bottom: 60px;
	border-bottom: 0;
}

.job-tab .nav-tabs>li {
	float: none;
	display: inline;
}

.job-tab .nav-tabs li {
	margin-right: 15px;
}

.job-tab .nav-tabs li:last-child {
	margin-right: 0;
}

.job-tab .nav-tabs {
	position: relative;
	z-index: 1;
	display: inline-block;
}

.job-tab .nav-tabs:after {
	position: absolute;
	content: "";
	top: 50%;
	left: 0;
	width: 100%;
	height: 1px;
	background-color: #fff;
	z-index: -1;
}



.job-tab .nav-tabs>li a {
	display: inline-block;
	background-color: #fff;
	border: none;
	border-radius: 30px;
	font-size: 14px;
	color: #000;
	padding: 5px 30px;
}

.job-tab .nav-tabs>li>a.active, 
.job-tab .nav-tabs>li a.active>:focus, 
.job-tab .nav-tabs>li>a.active:hover,
.job-tab .nav-tabs>li>a:hover {
	border: none;
	background-color: #008def;
	color: #fff;
}

.job-item {
	border-radius: 3px;
	position: relative;
	margin-bottom: 30px;
	z-index: 1;
}

.job-item .btn.btn-primary {
	text-transform: capitalize;
}

.job-item .job-info {
	font-size: 14px;
	color: #000;
	overflow: hidden;
	padding: 40px 25px 20px;
}

.job-info .company-logo {
	margin-bottom: 30px;
}

.job-info .tr-title {
	margin-bottom: 15px;
}

.job-info .tr-title span {
	font-size: 14px;
	display: block;
}

.job-info .tr-title a {
	color: #000;
}

.job-info .tr-title a:hover {
	color: #008def;
}

.job-info ul {
	margin-bottom: 30px;
}

.job-meta li,
.job-meta li a {
	color: #646464;	
}

.job-meta li a:hover {
	color: #008def;
}

.job-meta li {
	font-size: 12px;
	margin-bottom: 10px;
}

.job-meta li span i {
	color: #000;
}

.job-meta li i {
	margin-right: 15px;
}

.job-item .time {
	position: relative;
}

.job-item .time:after {
	position: absolute;
	content: "";
	bottom: 35px;
	left: -50px;
	width: 150%;
	height: 1px;
	background-color: #f5f4f5;
	z-index: -1;
}

.job-item:hover .time,
.job-item:hover .time:after {
	opacity: 0;
}

.job-item .time span {
	font-size: 12px;
	color: #bebebe;
	line-height: 25px;
}

.job-item .btn.btn-primary,
.role .btn.btn-primary,
.job-item .time a span {
	padding: 5px 10px;
    border-radius: 4px;
    line-height: 10px;
    font-size: 12px;
}

.job-item .time a span {
	color: #fff;
    background-color: #f1592a;
    border-color: #f1592a;	
}

.job-item .time a span.part-time {
	background-color: #00aeef;
	border-color: #00aeef;
}

.job-item .time a span.freelance {
	background-color: #92278f;
	border-color: #92278f;	
}

.job-item .item-overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 5px;
	background-color: #008def;
	color: #fff;
	opacity: 0;
	-webkit-transition: all 800ms;
	-moz-transition: all 800ms;
	-ms-transition: all 800ms;
	-o-transition: all 800ms;
	transition: all 800ms;
}

.job-item:hover .item-overlay {
	opacity: 1;
}

.item-overlay .job-info {
	padding: 45px 25px 40px;
	overflow: hidden;
}

.item-overlay .btn.btn-primary {
	background-color: #007bd4;
	border-color: #007bd4;
	margin-bottom: 10px;
}

.item-overlay .job-info,
.item-overlay .job-info ul li,
.item-overlay .job-info ul li i,
.item-overlay .job-info .tr-title a {
	color: #fff;
}

.job-social {
	margin-top: 35px;
}

.job-social li {
	float: left;
}

.job-social li + li {
	margin-left: 15px;
}

.job-social li a i {
	margin-right: 0;
	font-size: 14px;
}

.job-social li a {
	width: 35px;
	height: 35px;
	text-align: center;
	display: block;
	background-color: #007bd4;
	line-height: 35px;
	border-radius: 100%;
	border: 1px solid #007bd4;
	position: relative;
	overflow: hidden;
	z-index: 1;
}

.job-social li:last-child a {
	background-color: #fff;
}

.job-social li:last-child a i {
	color: #008def;
}

.job-social li a:before {
	position: absolute;
	content: "";
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: -1;
	border-radius: 100%;
	background-color:#008def;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);	
}

.job-social li a:hover:before {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    padding: 5px;
}

.job-social li a:hover {
	border-color: #fff;
}

.job-social li a:hover i {
	color: #fff;
}

.tr-list {
    margin: 0;
    padding: 0;
    list-style: none;
}
body{
    margin-top:20px;
}

[class*="noty_theme__unify--v1"] {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  padding: 1.57143rem;
}

.noty_theme__unify--v1--dark {
  background-color: #2e3c56;
}

.noty_theme__unify--v1--light {
  background-color: #fff;
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.05);
}

.noty_type__success.noty_theme__unify--v1 {
  background-color: #1cc9e4;
}

.noty_type__info.noty_theme__unify--v1 {
  background-color: #1d75e5;
}

.noty_type__error.noty_theme__unify--v1 {
  background-color: #e62154;
}

.noty_type__warning.noty_theme__unify--v1 {
  background-color: #e6a821;
}

.noty_body {
  font-weight: 400;
  font-size: 1rem;
  color: #fff;
}

[class*="noty_theme__unify--v1"] .noty_body {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}

.noty_theme__unify--v1--light .noty_body {
  color: #41464B;
}

.noty_body__icon {
  position: relative;
  display: inline-block;
  color: #fff;
  text-align: center;
  border-radius: 50%;
}

.noty_body__icon::before {
  display: block;
}

.noty_body__icon > i {
  position: relative;
  top: 50%;
  display: block;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 2;
}

.noty_theme__unify--v1 .noty_body__icon {
  background-color: rgba(245, 249, 249, 0.2);
}

.noty_theme__unify--v1--dark .noty_body__icon {
  background-color: rgba(245, 249, 249, 0.1);
}

.noty_theme__unify--v1--dark.noty_type__success .noty_body__icon {
  color: #1cc9e4;
}

.noty_theme__unify--v1--dark.noty_type__info .noty_body__icon {
  color: #1d75e5;
}

.noty_theme__unify--v1--dark.noty_type__error .noty_body__icon {
  color: #e62154;
}

.noty_theme__unify--v1--dark.noty_type__warning .noty_body__icon {
  color: #e6a821;
}

.noty_theme__unify--v1--light.noty_type__success .noty_body__icon {
  background-color: rgba(28, 201, 228, 0.15);
  color: #1cc9e4;
}

.noty_theme__unify--v1--light.noty_type__info .noty_body__icon {
  background-color: rgba(29, 117, 229, 0.15);
  color: #1d75e5;
}

.noty_theme__unify--v1--light.noty_type__error .noty_body__icon {
  background-color: rgba(230, 33, 84, 0.15);
  color: #e62154;
}

.noty_theme__unify--v1--light.noty_type__warning .noty_body__icon {
  background-color: rgba(230, 168, 33, 0.15);
  color: #e6a821;
}

[class*="noty_theme__unify--v1"] .noty_close_button {
  top: 14px;
  right: 14px;
  width: 0.85714rem;
  height: 0.85714rem;
  line-height: 0.85714rem;
  background-color: transparent;
  font-weight: 300;
  font-size: 1.71429rem;
  color: #fff;
  border-radius: 0;
}

.noty_theme__unify--v1--light .noty_close_button {
  color: #cad6d6;
}

.noty_progressbar {
  height: 0.5rem !important;
}

.noty_theme__unify--v1 .noty_progressbar {
  background-color: rgba(0, 0, 0, 0.08) !important;
}

.noty_theme__unify--v1--dark.noty_type__success .noty_progressbar {
  background-color: #1cc9e4;
}

.noty_theme__unify--v1--dark.noty_type__info .noty_progressbar {
  background-color: #1d75e5;
}

.noty_theme__unify--v1--dark.noty_type__error .noty_progressbar {
  background-color: #e62154;
}

.noty_theme__unify--v1--dark.noty_type__warning .noty_progressbar {
  background-color: #e6a821;
}

.noty_theme__unify--v1--light.noty_type__success .noty_progressbar {
  background-color: rgba(28, 201, 228, 0.15);
}

.noty_theme__unify--v1--light.noty_type__info .noty_progressbar {
  background-color: rgba(29, 117, 229, 0.15);
}

.noty_theme__unify--v1--light.noty_type__error .noty_progressbar {
  background-color: rgba(230, 33, 84, 0.15);
}

.noty_theme__unify--v1--light.noty_type__warning .noty_progressbar {
  background-color: rgba(230, 168, 33, 0.15);
}

  .g-mb-25 {
    margin-bottom: 1.78571rem !important;
  }
    </style>
</head>
<body>
    
   <!-- LOGO AND MENU -->

   <header id="header">
    <div class="wrapper">

        <button id="submenu" onclick="showMenu(event)">
            <span></span>
            <span></span>
            <span></span>
        </button>


    <!-- MENU LINKS  -->

        <ul class="menu-left">
        <li>
                <a href="provider_home.php">Homepage</a>
            </li>
			<li>
                <a href="provider_profile.php">profile</a>
            </li>
			      <li>
                <a href="Post_job.php">Post a job</a>
            </li>
            <li>
                <a href="provider_job_history.php">Job history</a>
            </li>
            <li>
                <a href="provider_notification.php">Notification</a>
            </li>


        </ul>
		<ul class="menu-right">
            <li class="menu-cta">
                <a href="provider_logout.php">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</header>

<br><br><br><br><br>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <!-- Success -->
         <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
            <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Success</h3>
            
            <?php
                    if ($count_apply_job>0 && $count_cv>0) 
                    {
                        while ($apply =mysqli_fetch_assoc($applied_object)) 
                        {
                            echo '<div class="noty_bar noty_type__info noty_theme__unify--v1 noty_close_with_click noty_close_with_button g-mb-25">
                            <div class="noty_body">
                               <div class="g-mr-20">
                                  <div class="noty_body__icon">
                                     <i class="hs-admin-info"></i>
                                  </div>
                               </div>
                               <div>'. $apply['username'] .  ' has applied for you job </div>
                            </div>
                           
                         </div>';
                        }
                    }
            
            ?>
        

 

      <div class="col-md-6">
         <!-- Info -->



    
         <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
            <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Info</h3>
            
            <?php
            if ($count_apply_job>0 && $count_cv>0) 
            {
                while ($cv = mysqli_fetch_assoc($cv_object)) 
                {

                    $cv_name = $cv['dir_name'];
                    echo '<div class="noty_bar noty_type__info noty_theme__unify--v1 noty_close_with_click noty_close_with_button g-mb-25">
                    <div class="noty_body">
                       <div class="g-mr-20">
                          <div class="noty_body__icon">
                             <i class="hs-admin-info"></i>
                          </div>
                       </div>
                       <div>Open the CV.</div>
                    </div>
                    <a href="./uploads/' . $cv_name . ' "target = "_blank"><div class="noty_close_button">Download</div></a>
                 </div>';
                }
            }
        ?>
         </div>
         <!-- End Info -->
      </div>
   </div>
</div>


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>