<?php
    session_start();
    if (empty($_SESSION['admin_name'])) 
    {
        header("Location:admin.php");
    }
    include_once 'connection/db_connection.php';

   $id = $_SESSION['job_id'];
   $sql_delete = "DELETE FROM jobs where id= '$id'";

   if (!mysqli_query($conn,$sql_delete)) 
   {
       die("Failed to delete the job from jobs table " . mysqli_error($conn));
   }
   else
   {
       $sql_delete_report = "DELETE FROM report_jobs WHERE job_id = '$id'";

       if (!mysqli_query($conn,$sql_delete_report)) 
       {
           die("Failed to delete the reported job from report table "  . mysqli_error($conn));
        
       }
       else 
       {
           header("Location:admin_dashboard.php");
       }
   }
?>