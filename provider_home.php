
<?php
  session_start();

  if (empty($_SESSION['email'])) {
    header("Location:provider_login");
  }
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
* {
  box-sizing: border-box;
  
}


input[type=file], select, textarea {
  width: 100%;
  height: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  margin-right: 50%;
  cursor: pointer;
  float: right;
    
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  margin-top:150px
}

.col-25 {
  float: left;
  width: 20%;
  margin-top: 30px;
}

.col-75 {
  float: left;
  width: 40%;
  margin-top: 30px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
body{
    background:#eee;

}
.search-result .title h3 {
    margin: 0 0 15px;
    color: #333;
}
.search-result .title p {
    font-size: 12px;
    color: #333;
}
.well {
    border: 0;
    padding: 20px;
    min-height: 63px;
    background: #fff;
    box-shadow: none;
    border-radius: 3px;
    position: relative;
    max-height: 100000px;
    border-bottom: 2px solid #ccc;
    transition: max-height 0.5s ease;
    -o-transition: max-height 0.5s ease;
    -ms-transition: max-height 0.5s ease;
    -moz-transition: max-height 0.5s ease;
    -webkit-transition: max-height 0.5s ease;
}
.form-control {
    height: 45px;
    padding: 10px;
    font-size: 16px;
    box-shadow: none;
    border-radius: 0;
    position: relative;
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
<div class='container'>
            
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well search-result">
                <div class="input-group">
                <form action="provider_search_job_back.php" method="POST">
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        Search
                       </button>
                       </form>
           
                </div>
            </div>
        </div>
    </div>
             
             
             
        </div>
        <br>
		</body>
</html>