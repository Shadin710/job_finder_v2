<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
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
                            <a href="seeker_profile.php">profile</a>
                        </li>
                        <li>
                            <a href="seeker_search_job.php">Search</a>
                        </li>
                        <li>
                            <a href="seeker_logout.php">Logout</a>
                        </li>
    
        </ul>
    </div>
</header>


<div class='container'>
            
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well search-result">
                <div class="input-group">
                <form action="seeker_search_job_back.php" method="POST">
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