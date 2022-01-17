<?php
    session_start();

    if(empty($_SESSION['email']))
    {
        header("Location: seeker_login.php");
    }

    if (empty($_SESSION['record'])) 
    {
        header("Location:apply_job_seeker.php");
    }
    include_once 'connection/db_connection.php';
    
     $id = $_SESSION['job_id']; 
    $sql_id = "SELECT * FROM jobs WHERE id = '$id'";
    $result = mysqli_query($conn,$sql_id) Or die("Failed to query " . mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);  
    
    $_SESSION['provider_email']= $row['email'];
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
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
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
                <a href="seeker_home.php">Homepage</a>
            </li>
            <li>
                <a href="seeker_requested.php">Post a job</a>
            </li>
            <li>
                <a href="seeker_notification.php">Notifications</a>
            </li>
            <li>
                <a href="seeker_profile.php">Profile</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
        </ul>
    </div>
</header>
<div class='container'>
            
             <div class="row">
          
            <h1><center>Your profile data has been recorded, please upload your CV</center></h1>
         
         <center>
            <form action="upload_process2.php" enctype="multipart/form-data" method="post">
                    <input type="file" id="myFile" name="fileToUpload"><br>
                    <center><input type="submit" value="Upload" name ="submit"></center>
            </form>
          </center>
            </div>
             
             
             
        </div>
        <br>
</body>
</html>