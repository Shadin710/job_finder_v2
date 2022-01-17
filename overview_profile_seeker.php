


<?php
    session_start();
    if (empty($_SESSION['admin_name'])) 
    {
        header("Location:admin.php");
    }

    include_once 'connection/db_connection.php';
    $_SESSION['s_id']= $_GET['id'];
    $id = $_GET['id'];
    $sql_seeker = "SELECT * FROM seeker_info WHERE id='$id'";
    $seeker_object = mysqli_query($conn,$sql_seeker) Or die("Failed to get seeker info" . mysqli_error($conn));
    $seeker_info = mysqli_fetch_assoc($seeker_object);

    $email = $seeker_info['email'];

    $_SESSION['seeker_email'] = $email;

    $sql_bio = "SELECT * FROM seeker_bio WHERE email = '$email'";
    $bio_object = mysqli_query($conn,$sql_bio) Or die("Failed to get bio " . mysqli_error($conn));
    $seeker_bio = mysqli_fetch_assoc($bio_object);

    $sql_edu = "SELECT * FROM seeker_education WHERE email = '$email'";
    $education_object = mysqli_query($conn,$sql_edu) Or die("Failed to get education " . mysqli_error($conn));
    $seeker_edu = mysqli_fetch_assoc($education_object);

    $sql_work = "SELECT * FROM seeker_work  WHERE email = '$email'";
    $work_object = mysqli_query($conn,$sql_work) Or die("Failed to get work table " . mysqli_error($conn));
    $seeker_work = mysqli_fetch_assoc($work_object);

    $sql_hobby = "SELECT * FROM seeker_hobby  WHERE email = '$email'";
    $hobby_object = mysqli_query($conn,$sql_hobby) Or die("Failed to get work table " . mysqli_error($conn));
    $seeker_hobby = mysqli_fetch_assoc($hobby_object);
 


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
    background:#DCDCDC;
}
/*profile page*/

.left-profile-card .user-profile {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: auto;
    margin-bottom: 20px;
}

.left-profile-card h3 {
    font-size: 18px;
    margin-bottom: 0;
    font-weight: 700;
}

.left-profile-card p {
    margin-bottom: 5px;
}

.left-profile-card .progress-bar {
    background-color: var(--main-color);
}

.personal-info {
    margin-bottom: 30px;
}

.personal-info .personal-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.personal-list li {
    margin-bottom: 5px;
}

.personal-info h3 {
    margin-bottom: 10px;
}

.personal-info p {
    margin-bottom: 5px;
    font-size: 14px;
}

.personal-info i {
    font-size: 15px;
    color: var(--main-color);
    ;
    margin-right: 15px;
    width: 18px;
}

.skill {
    margin-bottom: 30px;
}

.skill h3 {
    margin-bottom: 15px;
}

.skill p {
    margin-bottom: 5px;
}

.languages h3 {
    margin-bottom: 15px;
}

.languages p {
    margin-bottom: 5px;
}

.right-profile-card .nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: var(--main-color);
}

.right-profile-card .nav>li {
    float: left;
    margin-right: 10px;
}

.right-profile-card .nav-pills .nav-link {
    border-radius: 26px;
}

.right-profile-card h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.right-profile-card h4 {
    font-size: 16px;
    margin-bottom: 15px;
}

.right-profile-card i {
    font-size: 15px;
    margin-right: 10px;
}

.right-profile-card .work-container {
    border-bottom: 1px solid #eee;
    margin-bottom: 20px;
    padding: 10px;
}


/*timeline*/

.img-circle {
    border-radius: 50%;
}

.timeline-centered {
    position: relative;
    margin-bottom: 30px;
}

.timeline-centered:before,
.timeline-centered:after {
    content: " ";
    display: table;
}

.timeline-centered:after {
    clear: both;
}

.timeline-centered:before,
.timeline-centered:after {
    content: " ";
    display: table;
}

.timeline-centered:after {
    clear: both;
}

.timeline-centered:before {
    content: '';
    position: absolute;
    display: block;
    width: 4px;
    background: #f5f5f6;
    /*left: 50%;*/
    top: 20px;
    bottom: 20px;
    margin-left: 30px;
}

.timeline-centered .timeline-entry {
    position: relative;
    /*width: 50%;
        float: right;*/
    margin-top: 5px;
    margin-left: 30px;
    margin-bottom: 10px;
    clear: both;
}

.timeline-centered .timeline-entry:before,
.timeline-centered .timeline-entry:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry:after {
    clear: both;
}

.timeline-centered .timeline-entry:before,
.timeline-centered .timeline-entry:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry:after {
    clear: both;
}

.timeline-centered .timeline-entry.begin {
    margin-bottom: 0;
}

.timeline-centered .timeline-entry.left-aligned {
    float: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
    margin-left: 0;
    margin-right: -18px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
    left: auto;
    right: -100px;
    text-align: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
    float: right;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
    margin-left: 0;
    margin-right: 70px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
    left: auto;
    right: 0;
    margin-left: 0;
    margin-right: -9px;
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.timeline-centered .timeline-entry .timeline-entry-inner {
    position: relative;
    margin-left: -20px;
}

.timeline-centered .timeline-entry .timeline-entry-inner:before,
.timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry .timeline-entry-inner:after {
    clear: both;
}

.timeline-centered .timeline-entry .timeline-entry-inner:before,
.timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry .timeline-entry-inner:after {
    clear: both;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
    position: absolute;
    left: -100px;
    text-align: right;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span {
    display: block;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:first-child {
    font-size: 15px;
    font-weight: bold;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:last-child {
    font-size: 12px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
    background: #fff;
    color: #737881;
    display: block;
    width: 40px;
    height: 40px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-align: center;
    -moz-box-shadow: 0 0 0 5px #f5f5f6;
    -webkit-box-shadow: 0 0 0 5px #f5f5f6;
    box-shadow: 0 0 0 5px #f5f5f6;
    line-height: 40px;
    font-size: 15px;
    float: left;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
    background-color: #303641;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
    background-color: #ee4749;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
    background-color: #00a651;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
    background-color: #21a9e1;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
    background-color: #fad839;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
    background-color: #cc2424;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
    position: relative;
    background: #f5f5f6;
    padding: 1em;
    margin-left: 60px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
    content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 9px 9px 9px 0;
    border-color: transparent #f5f5f6 transparent transparent;
    left: 0;
    top: 10px;
    margin-left: -9px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2,
.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
    color: #737881;
    font-size: 12px;
    margin: 0;
    line-height: 1.428571429;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p+p {
    margin-top: 15px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
    font-size: 16px;
    margin-bottom: 10px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
    color: #303641;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
    -webkit-opacity: .6;
    -moz-opacity: .6;
    opacity: .6;
    -ms-filter: alpha(opacity=60);
    filter: alpha(opacity=60);
}
    </style>
</head>
<body>
    
   <!-- LOGO AND MENU -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                <a href="admin_dashboard.php">Homepage</a>
            </li>
			<li>
                <a href="reported_jobs.php">Reported jobs</a>
            </li>

            <li>
                <a href="admin_logout.php">Logout</a>
            </li>
                    </ul>
                </div>
            </header>
        </div>
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="col-lg-3 ">
            <div class="card left-profile-card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="user-profile">
                        <h3><?php 
              
                            echo $seeker_info['username'];
                        
                        ?></h3>
                       <a href="delete_seeker.php"> <p>Delete This profile</p></a>
                    </div>
                    <div class="personal-info">
                        <h3>Personal Information</h3>
                        <ul class="personal-list">
                            <li><i class="fas fa-briefcase "></i><span><?php 
                                
                                if (isset($seeker_work))
                                {

                                    echo $seeker_work['work'];
                                }
                                else
                                {
                                    echo 'please update';
                                }

                            
                            
                            ?></span></li>
                            <li><i class="fas fa-map-marker-alt "></i><span><?php 
                                    
                                    if (isset($seeker_info)) {
                                        echo $seeker_info['seeker_address'];
                                    }
                                    else

                                    {
                                        echo 'Update your profile';
                                    }
                                    
                            
                            
                            ?></span></li>
                            <li><i class="far fa-envelope "></i><span><?php echo $seeker_info['email'];?></span></li>
                        </ul>
                    </div>
                    <div class="skill">
                        <h3>Skills</h3>

                        <?php
                            if (isset($seeker_bio))
                            {
                                echo '
                                <p>' . $seeker_bio['skill1'] .  '</p><br>
                                <p>' .  $seeker_bio['skill2'] . '</p><br>
                                <p>' .  $seeker_bio['skill3'] . '</p>';
                            }
                            else
                            {
                                echo '<p> update your skills</p><br>
                                <p> update your skills </p><br>
                                <p> update your skills </p><br>
                                <p> update your skills </p><br>';
                            }

                        ?>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card right-profile-card">
                <div class="card-header alert-primary">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-education-tab" data-toggle="pill" href="#pills-education" role="tab" aria-selected="false">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-selected="false">About</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            
                            <?php 
                                if (isset($seeker_work)) 
                                {
                                   echo '                            
                                   <div class="work-container">
                                       <h3>' . $seeker_work['work'] . '</h3>
                                      
                                       <p>' . $seeker_work['descrp'] . '</p>
                                   </div>
                                   <div class="work-container">
                                       <h3>' . $seeker_work['work1'] . '</h3>
                                      
                                       <p>' . $seeker_work['descrp1'] . '</p>
                                   </div>
                                   <div class="work-container">
                                       <h3>' . $seeker_work['work2'] . '</h3>
                                      
                                       <p>' . $seeker_work['descrp2'] . '</p>
                                   </div>';
                                }
                                else {
                                    echo '                            
                                    <div class="work-container">
                                        <h3> Update your work</h3>
                                        <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                        <h3> Update your work</h3>                                    </div>
                                    <div class="work-container">
                                    <h3> Update your work</h3>                                        <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                    <h3> Update your work</h3>                                    </div>
                                    <div class="work-container">
                                    <h3> Update your work</h3>                                        <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                    <h3> Update your work</h3>                                    </div>';
                                    
                                }
                            ?>



                        </div>





                        <div class="tab-pane fade" id="pills-education" role="tabpanel">

                            <?php
                                if (isset($seeker_edu)) 
                                {
                                    echo '<div class="work-container">
                                    <h3>' .  $seeker_edu['edu1'] . '</h3>
                                   
                                    <p>' . $seeker_edu['edu_des1'] . '</p>
                                </div>
                                <div class="work-container">
                                    <h3>' . $seeker_edu['edu2'] . '</h3>
                                  
                                    <p>' . $seeker_edu['edu_des2'] . '</p>
                                </div>
                                <div class="work-container">
                                    <h3>' . $seeker_edu['edu3'] . '</h3>
                                    
                                    <p>' . $seeker_edu['edu_des2'] . '</p>
                                </div>';
                                }
                                else 
                                {
                                    echo '<div class="work-container">
                                    <h3> Update your profile</h3>
                                    <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                    <p>Update your description</p>
                                </div>
                                <div class="work-container">
                                <h3> Update your profile</h3>
                                    <h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                    <p>Update your description</p>
                                </div>
                                <div class="work-container">
                                <h3> Update your profile</h3>
                                    <h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                    <p>Update your description</p>
                                </div>';
                                    
                                }
                            ?>

                        </div>
                        <div class="tab-pane fade" id="pills-timeline" role="tabpanel">
                            <div class="row">
                                <div class="timeline-centered">


                                    <?php 
                                        if (isset($seeker_hobby)) 
                                        {
                                            echo '                                    <div class="timeline-entry">
                                            <div class="timeline-entry-inner">
                                                <div class="timeline-icon bg-success">
                                                    <i class="entypo-feather"></i>
                                                </div>
                                                <div class="timeline-label">
                                                    <h2><a href="#">' . $seeker_hobby['hobby_name'] . '</a></h2>
                                                    <p>' . $seeker_hobby['hobby'] . '</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-entry">
                                            <div class="timeline-entry-inner">
                                                <div class="timeline-icon bg-secondary">
                                                    <i class="entypo-suitcase"></i>
                                                </div>
                                                <div class="timeline-label">
                                                    <h2><a href="#">' . $seeker_hobby['travel'] . '</a></h2>
                                                    <p>' . $seeker_hobby['travel_des'] . '</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-entry begin">
                                            <div class="timeline-entry-inner">
                                                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                                    <i class="entypo-flight"></i> +
                                                </div>
                                            </div>
                                        </div>
    ';
                                        }

                                    ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>