<?php
  session_start();

  if (empty($_SESSION['email'])) {
    header("Location:provider_login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Post a Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet"  href = "css/index.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    
    	
body{
    margin-top:20px;
    background:#f5f5f5;
}
/**
 * Panels
 */
/*** General styles ***/
.panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}

.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}

form label {
    color: #999999;
    font-weight: 400;
}

.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}

.profile__contact-info-icon {
    float: left;
    font-size: 18px;
    color: #999999;
}
.profile__contact-info-body {
    overflow: hidden;
    padding-left: 20px;
    color: #999999;
}
.profile-avatar {
  width: 200px;
  position: relative;
  margin: 0px auto;
  margin-top: 196px;
  border: 4px solid #f3f3f3;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
<br><br><br>
<br><br>
<center>
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal" action="post_job_server.php" method = "POST"> 
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Company Info</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
              <select name= "city" class="form-control">
                <option selected="">Select city</option>
                <option value = 'Dhaka'>Dhaka</option>
                <option value = 'Chittagong' >Chittagong</option>
                <option Value = 'Comilla'>Comilla</option>
                <option value = 'Rajshahi'>Rajshahi</option>
                <option value = 'Sylhet'>Sylhet</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Job Time</label>
            <div class="col-sm-10">
              <select name= "type_time" class="form-control">
                <option selected="">Select time</option>
                <option value = 'Part time'>part time</option>
                <option value = 'Full time' >Full time</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Company name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'ComName'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Experience Level</label>
            <div class="col-sm-10">
              <select name= "exp" class="form-control">
                <option selected="">Select time</option>
                <option value = 'Intern'>Intern</option>
                <option value = 'Junior' >Junior Level</option>
                <option value = 'Mid' >Mid Level</option>
                <option value = 'Senior' >Senior Level</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Position</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'position'>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Description</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Work number</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" name = 'work_num'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Mobile number</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" name = 'phone'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">E-mail address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name = 'email'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <textarea rows="4" class="form-control" name="des"></textarea>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label">Skills</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'skill'>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label">Skills</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'skill1'>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label">Skills</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'skill2'>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Skills</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'skill3'>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label">Educational Requirements</label>
            <div class="col-sm-10">
              <textarea rows="4" class="form-control" name='edu'></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Benefits</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name = 'salary'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Other benefits</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name = 'benefits'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input type="submit" class="btn btn-primary"> 
             <a href="provider_home.php"> <button type="reset" class="btn btn-default">Cancel</button></a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</center>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>