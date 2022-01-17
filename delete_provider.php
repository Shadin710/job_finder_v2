<?php
    session_start();
    if (empty($_SESSION['admin_name'])) 
    {
        header("Location:admin.php");
    }
    include_once 'connection/db_connection.php';

   $email = $_SESSION['email_provider'];
   $sql_delete = "DELETE FROM provider_info WHERE email= '$email'";

   if (!mysqli_query($conn,$sql_delete)) 
   {
       die("Failed to delete the seeker from seeker table " . mysqli_error($conn));
   }
   else
   {

        $sql_delete_bio = "DELETE FROM provider_bio WHERE email = '$email'";

        if (!mysqli_query($conn,$sql_delete_bio)) 
        {
            die("Failed to delete the reported seeker from seeker table "  . mysqli_error($conn));
     
        }
        else 
        {
            $sql_delete_job = "DELETE FROM jobs WHERE email = '$email'";
            if (!mysqli_query($conn,$sql_delete_bio)) 
            {
                die("Failed to delete the job " . mysqli_error($conn));
            }
            else 
            {
                $sql_delete_apply = "DELETE FROM applied WHERE provider_email = '$email'";
                if (!mysqli_query($conn,$sql_delete_apply)) 
                {
                    die("Failed to delete the the applied jobs " . mysqli_error($conn));
                }
                else
                {
                    $sql_delete_cv  ="DELETE FROM cv WHERE provider_email = '$email'";
                    if (!mysqli_query($conn,$sql_delete_cv)) 
                    {
                        die("Failed to delete the the cv " . mysqli_error($conn));
                    }
                    else
                    {
                        header("Location:admin_dashboard.php");
                    }
                   
                }    
                
            }
            
            
        }

   }
?>