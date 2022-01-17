<?php

    session_start();
    if (empty($_SESSION['email'])) 
    {
        header("Location:seeker_login.php");
    }
    include_once 'connection/db_connection.php';
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $file_name = basename($_FILES["fileToUpload"]["name"]);
    $tname = $_FILES["fileToUpload"]["tmp_name"];

    //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) 
    {
        $email  = $_SESSION['email'];
        $provider_email  = $_SESSION['provider_email'];
        $sql = "INSERT INTO cv(seeker_email,dir_name,provider_email) VALUES('$email','$file_name','$provider_email')";

        $_SESSION['cv']='yes';
        
        move_uploaded_file($tname, $target_file);
        if(mysqli_query($conn,$sql)){
     
             header("Location:seeker_home.php");
        }
        else{
           die("Failed to upload the file " . mysqli_error($conn));
        }
    }


?>