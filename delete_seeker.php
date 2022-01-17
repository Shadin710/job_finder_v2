<?php
    session_start();
    if (empty($_SESSION['admin_name'])) 
    {
        header("Location:admin.php");
    }
    include_once 'connection/db_connection.php';

   $id = $_SESSION['s_id'];
   $email =$_SESSION['seeker_email'];
   $sql_delete = "DELETE FROM seeker_info WHERE id= '$id'";

   if (!mysqli_query($conn,$sql_delete)) 
   {
       die("Failed to delete the seeker from seeker table " . mysqli_error($conn));
   }
   else
   {
       $sql_delete_hobby = "DELETE FROM seeker_hobby  WHERE email = '$email'";
       if (!mysqli_query($conn,$sql_delete_hobby)) 
       {
            die("Failed to delete the seeker hobby from hobby table " . mysqli_error($conn));
       }
       else 
       {
           $sql_delete_cv = "DELETE FROM cv WHERE seeker_email ='$email'";
           if (!mysqli_query($conn,$sql_delete_cv)) 
           {
                die("Failed to delete the cv from cv table " . mysqli_error($conn));
           }
           else 
           {
                $sql_delete_education = "DELETE FROM seeker_education WHERE email ='$email'";
                if (!mysqli_query($conn,$sql_delete_education)) 
                {
                     die("Failed to delete the seeker edu from education table " . mysqli_error($conn));
                }
                else 
                {
                    $sql_delete_bio = "DELETE FROM seeker_bio WHERE email ='$email'";
                    if (!mysqli_query($conn,$sql_delete_bio)) 
                    {
                         die("Failed to delete the bio from bio table " . mysqli_error($conn));
                    }
                    else 
                    {
                        $sql_delete_work = "DELETE FROM seeker_work WHERE email ='$email'";
                        if (!mysqli_query($conn,$sql_delete_work)) 
                        {
                             die("Failed to delete the work from work table " . mysqli_error($conn));
                        }
                        else 
                        {
  
                     
                                header("Location:admin_dashboard.php");
                            
                         
                        }
                     
                    }
             
                }
            
           }
        
       }

   }
?>