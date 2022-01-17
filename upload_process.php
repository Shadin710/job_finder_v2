<?php

    session_start();
    if (empty($_SESSION['email'])) 
    {
        header("Location:seeker_login.php");
    }
    include_once 'connection/db_connection.php';

if (isset($_POST["submit"]))
{
    #retrieve file title
    $email  = $_SESSION['email'];
   #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

   #temporary file name to store file
   $tname = $_FILES["file"]["tmp_name"];
  
    #upload directory path
$uploads_dir = 'uploads';
   #TO move the uploaded file to specific location
   move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $provider_email  = $_SESSION['provider_email'];
   #sql query to insert into database
   $sql = "INSERT into cv(seeker_email,dir_name,provider_email) VALUES('$email','$pname','$provider_email')";

   $_SESSION['cv']='yes';

   if(mysqli_query($conn,$sql)){

        header("Location:seeker_home.php");
   }
   else{
      die("Failed to upload the file " . mysqli_error($conn));
   }
}


?>