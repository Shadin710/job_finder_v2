<?php
    session_start();
    if (empty($_SESSION['admin_name'])) 
    {
        header("Location:admin.php");
    }
    include_once 'connection/db_connection.php';

   $id = $_SESSION['email_provider'];
   $sql_delete = "DELETE FROM report_provider WHERE email= '$email'";

   if (!mysqli_query($conn,$sql_delete)) 
   {
       die("Failed to delete the job from jobs table " . mysqli_error($conn));
   }
   else
   {
        header("Location:admin_dashboard.php");   
   }
?>