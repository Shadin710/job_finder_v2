<?php
    session_start();
    if (empty($_SESSION['email'])) 
    {
        header("Location:seeker_login.php");
    }
    include_once 'connection/db_connection.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') 
    {
        
        $search_job = $_POST['search'];

        $sql_search ="SELECT * FROM jobs WHERE comName='$search_job' OR position='$search_job' OR comAddress = '$search_job' OR exper = '$search_job'";

        $search_object = mysqli_query($conn,$sql_search) Or die("Failed to search jobs " . mysqli_error($conn));
        $search_num= mysqli_num_rows($search_object);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Search Results with image - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <hr>
    <ol class="breadcrumb">
        <li><a href="seeker_home.php">Homepage</a></li>
        <li><a href="seeker_profile.php">Profile</a></li>
        <li><a href="seeker_search_job.php">Search</a></li>
        <li><a href="seeker_logout.php">Logout</a></li>
        <li class="pull-right"><a href="" class="text-muted"><i class="fa fa-refresh"></i></a></li>
    </ol>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well search-result">
                <div class="input-group">
                <form action="seeker_search_job_back.php" method="POST">
                    <input type="text" class="form-control" placeholder="Search" name ="search">
                    <span class="input-group-btn">
              <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-search"></i>
                        Search
                    </button>
                    </form>
            </span>
                </div>
            </div>


            <?php
                if ($search_num>0) 
                {

                    while ($search_array=mysqli_fetch_assoc($search_object)) 
                    {
                        echo ' <div class="well search-result">
                        <div class="row">
                            <a href="#">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                                    <img class="img-responsive" src="https://via.placeholder.com/400x200/7B68EE/000000" alt="">
                                </div>
                                <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                                <a href=apply_job_seeker.php?id=' . $search_array['id'] . '><h3>' . $search_array['comName'] . '</h3></a>
                                    <p>' . $search_array['comAddress'] . '</p>
                                    <p>' . $search_array['position'] . '</p>
                                </div>
                            </a>
                        </div>
                         </div>';
                    }
          


                }
                else
                {

                    echo '<center><h1>No results found</h1></center>';
                }
            
            ?>
            

        </div>
    </div>
</div>

<style type="text/css">
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

<script type="text/javascript">
  
</script>
</body>
</html>