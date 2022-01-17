<?php
    session_start();

    if(empty($_SESSION['email']))
    {
        header("Location: provider_login.php");
    }
    include_once 'connection/db_connection.php';
    
    $job_id = $_SESSION['job_id'];

    $sql_delete = "DELETE FROM jobs where id= '$job_id'";

    $sql_search_report ="SELECT * FROM report_jobs where id = '$job_id'";
    $search_object = mysqli_query($conn,$sql_search_report) Or die("Failed to search reported jobs " . mysqli_error($conn) );
    $search = mysqli_num_rows($search_object);

    if ($search<=0) 
    {
       
         if (!mysqli_query($conn,$sql_delete)) 
        {
            die("Failed to delete the job from jobs table " . mysqli_error($conn));
        }
        else 
        {
            header("Location:provider_home.php");
        }
    }
    else 
    {
        if (!mysqli_query($conn,$sql_delete)) 
        {
            die("Failed to delete the job from jobs table " . mysqli_error($conn));
        }
        else 
        {
            $sql_delete_report = "DELETE FROM report_jobs where job_id= '$job_id'";

            if (!mysqli_query($conn,$sql_delete_report))
            {
                die("Failed to delete reported job " . mysqli_error($conn));
            }
            else
            {
                header("Location:provider_home.php");
            }
            
        }   
    }

?>