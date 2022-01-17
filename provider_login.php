<!DOCTYPE html>
<html>

<head>
    <title>JOB FINDER</title>
    <!--Meta tag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--bootstrap|css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--additional|css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <!--Googlefont-1-->
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <!--font Awesome-->
    <script src="https://kit.fontawesome.com/984b75d004.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-bg">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <!--COMPANY-DESCRIPTION-->

                    <div class="col-md-6 section-1">
                        <div class="jumbotron">
                            <h1 class="display-4" style="font-family:'Baloo Tamma 2', cursive; ">Job <br>Finder</h1>
                            <p class="lead">Welcome to the app</p>
                        </div>
                    </div>
                    <!--FORM-->

                    <div class="col-md-6 section-2">
                        <div class="description">
                            <h4>Login</h4>
                           
                            <!--FORM-BOX-->
                                  
                            <form action="provider_login_server.php" method="POST">
                                <input type="email" class="input" placeholder="Email" name="email">
                                <input type="password" class="input" placeholder="Password" name="pass"><br>
                                <br><br>

                                <input type="submit" class="btn btn-danger" value="Login"
                                    style="margin-bottom: 5px;">
                            </form>
                            <a href="index.php"><h6><--Go Back</h6></a>
                            <a href="provider_reg.php"> <h6>Don't have an account?</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  


    <!--attachments-->
    <!--bootstrap|js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>