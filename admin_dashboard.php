<?php
    session_start();

    if(empty($_SESSION['admin_name']))
    {
        header('Location:admin.php');
    }
   // $main_em  = $_SESSION['email'];
    // for best jobs
    include_once 'connection/db_connection.php';

    $sql_post_job  = "SELECT * FROM jobs";    
    $sql_jobs_q = mysqli_query($conn,$sql_post_job) Or die("Failed to query " . mysqli_error($conn));
    $count_jobs = mysqli_num_rows($sql_jobs_q);

    
    $sql_provider  = "SELECT * FROM provider_info";    
    $sql_provider_q = mysqli_query($conn,$sql_provider) Or die("Failed to query " . mysqli_error($conn));
    $count_providers = mysqli_num_rows($sql_provider_q);

    $sql_seeker  = "SELECT * FROM seeker_info";    
    $sql_seeker_q = mysqli_query($conn,$sql_seeker) Or die("Failed to query " . mysqli_error($conn));
    $count_seekers = mysqli_num_rows($sql_seeker_q);

    //$row_report = mysqli_fetch_assoc($sql_jobs_q);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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


<!-- LOGO AND MENU END -->



<!-- INTRO PAGE -->




<!-- Intro Page END -->


<!-- About Page Start -->
<br><br><br><br><br><br>
<section id="about">
    <div class="wrapper">
    <div class="container">
		<div class="job-tab text-center">
			<ul class="nav nav-tabs justify-content-center" role="tablist">
				<li role="presentation" class="active">
					<a class="active show" href="#hot-jobs" aria-controls="hot-jobs" role="tab" data-toggle="tab" aria-selected="true">Jobs</a>
				</li>
                <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Providers</a></li>
				<li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Seekers</a></li>
			</ul>
			<div class="tab-content text-left">
				<div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
					<div class="row">
						<?php
							if($count_jobs>0)
							{
								while($row_jobs=mysqli_fetch_assoc($sql_jobs_q))
								{
									

									echo '<div class="col-md-6 col-lg-3">
									<div class="job-item">
										<div class="item-overlay">
											<div class="job-info">
												<a href="#" class="btn btn-primary">'. $row_jobs['type_time'] .'</a>
												<span class="tr-title">
													<a href= overview_job.php?id=' . $row_jobs['id'] . '>' . $row_jobs['position'] . '</a>
													<span><a href=overview_job.php?id=' . $row_jobs['id'] . '>Open</a></span>
												</span>
												<ul class="tr-list job-meta">
													<li><i class="fa fa-map-signs" aria-hidden="true"></i>' . $row_jobs['comAddress'] . '</li>
													<li><i class="fa fa-briefcase" aria-hidden="true"></i>' . $row_jobs['exper'] . '</li>
													<li><i class="fa fa-money" aria-hidden="true"></i>' . $row_jobs['salay'] . '</li>
												</ul>
												<ul class="job-social tr-list">
													<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
												</ul>
											</div>										
										</div>
										<div class="job-info">
											<div class="company-logo">
												<img src="https://via.placeholder.com/300x100/7B68EE/000000" alt="images" class="img-fluid">
											</div>
											<span class="tr-title">
												<a href="#">' . $row_jobs['comName'] . '</a><br />
												<a href="#">' . $row_jobs['position'] . '</a>
												<span><a href="#">Dig File</a></span>
											</span>
											<ul class="tr-list job-meta">
												<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>' . $row_jobs['comAddress'] . '</li>
												<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>' . $row_jobs['exper'] . '</li>
												<li><span><i class="fa fa-money" aria-hidden="true"></i></span>' . $row_jobs['salay'] . '</li>
											</ul>
											<div class="time">
												<a href="#"><span>' . $row_jobs['type_time'] . '</span></a>
												
											</div>																				
										</div>
									</div>
								</div>';
								}
							}
						?>

					</div><!-- /.row -->
				</div><!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
					<div class="row">
					<?php
						if($count_providers>0)
						{
							while($row_provider = mysqli_fetch_assoc($sql_provider_q))
							{
								echo '<div class="col-md-6 col-lg-3">
								<div class="job-item">
									<div class="item-overlay">
										<div class="job-info">
											<span class="tr-title">
												<a href=overview_provider_profile.php?id=' . $row_provider['id'] . '>' . $row_provider['username'] . '</a>
												<span><a href=overview_provider_profile.php?id=' . $row_provider['id'] . '>profile</a></span>
											</span>
										</div>										
									</div>								
									<div class="job-info">
										<div class="company-logo">
											
										</div>
										<span class="tr-title">
											<a href="#">' . $row_provider['username'] . '</a><br />
											<a href="#">' . $row_provider['email'] . '</a>
											
										</span>
										<div class="time">
											
										</div>				
									</div>
								</div>
							</div>	';
							}
						}
					?>

					</div><!-- /.row -->	
				</div><!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane fade in" id="popular-jobs">
					<div class="row">
					<?php
						if($count_seekers>0)
						{
							while($row_seekers = mysqli_fetch_assoc($sql_seeker_q))
							{
								echo '<div class="col-md-6 col-lg-3">
								<div class="job-item">
									<div class="item-overlay">
										<div class="job-info">
										<a href="#" class="btn btn-primary">'. $row_seekers['username'] .'</a>
											<span class="tr-title">
												<a href=overview_profile_seeker.php?id=' . $row_seekers['id'] . '>' . $row_seekers['email'] . '</a>
												<span><a href=overview_profile_seeker.php?id=' . $row_seekers['id'] . '>Profile</a></span>
											</span>
											<ul class="tr-list job-meta">
												<li><i class="fa fa-map-signs" aria-hidden="true"></i>' . $row_seekers['seeker_address'] . '</li>
												<li><i class="fa fa-briefcase" aria-hidden="true"></i>' . $row_seekers['age'] . '</li>
												<li><i class="fa fa-money" aria-hidden="true"></i>' . $row_seekers['gender'] . '</li>
											</ul>
										</div>										
									</div>								
									<div class="job-info">
										<div class="company-logo">
											
										</div>
										<span class="tr-title">
											<a href="#">' . $row_seekers['username'] . '</a><br />
											<a href="#">' . $row_seekers['email'] . '</a>
											
										</span>
										<ul class="tr-list job-meta">
											<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>' . $row_seekers['seeker_address'] . '</li>
											<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>' . $row_seekers['age'] . '</li>
											<li><span><i class="fa fa-money" aria-hidden="true"></i></span>' . $row_seekers['gender'] . '</li>
										</ul>
										<div class="time">
											<a href="#"><span class="part-time"> need to add description </span></a>
											
										</div>				
									</div>
								</div>
							</div>	';
							}
						}
					?>

					</div><!-- /.row -->	
				</div><!-- /.tab-pane -->

			</div>				
		</div><!-- /.job-tab -->			
	</div><!-- /.container -->
    </div>

    
</section>

<!-- About Page END -->

<!-- Page Banner START -->



<!-- Banner END -->


<!-- FOOTER START -->


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>

    function showMenu(event){

        event.preventDefault();

        let element = document.getElementById('header');

        if(element.classList.contains('active')){
            element.className = "";
        } else {
            element.className = "active";
        }


    }

</script>

</html>