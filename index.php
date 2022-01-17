
<?php
    session_start();
    $_SESSION['check']=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job finder</title>
    <link rel="stylesheet" href="css/index.css">
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
                <a href="index.php">Homepage</a>
            </li>

        </ul>
        <ul class="menu-right">
            <li class="menu-cta">
                <a href="admin.php">
                    Admin
                </a>
            </li>
        </ul>
    </div>
</header>


<!-- LOGO AND MENU END -->



<!-- INTRO PAGE -->


<section id="intro">
   
    <div class="wrapper">
        <div class="intro-left">
            <h1>Insights which will help you to grow</h1>
            <p>
                Open a account and start finding job that interests you
            </p>
            <a href="seeker_login.php" class="intro-cta" >
              Sign-In              
        </a>
        </div>
        <div class="intro-right">
            <!-- Insert Image here -->
            <img src="img/undraw_growth_analytics_8btt.png" alt="image">
        </div>
    </div>
    
</section>

<!-- Intro Page END -->


<!-- About Page Start -->

<section id="about">
    <div class="wrapper">
        <div class="about-left">
            <img src="img/undraw_report_mx0a.svg" alt="img">
        </div>

        <div class="about-right">
            <h1>You can help others</h1>
            <p>
              You can help others by providing better quality jobs 
            </p>
            <a href="provider_login.php" class="cta">Sign-In</a>
        </div>
    </div>

    
</section>




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