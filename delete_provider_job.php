<?php
    session_start();
    if (empty($_SESSION['email'])) 
    {
        header("Location:provider_login.php");
    }
    include_once 'connection/db_connection.php';

   $id = $_SESSION['job_id'];
   $sql_delete = "DELETE FROM jobs  where id= '$id'";

   if (!mysqli_query($conn,$sql_delete)) 
   {
       die("Failed to delete the job from jobs table " . mysqli_error($conn));
   }
   else
   {
    
           header("Location:provider_home.php");
       
   }
?>