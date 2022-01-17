<?php

    session_start();

    include_once 'connection/db_connection.php';

    $job_id = $_SESSION['job_id'];
    $seeker_email = $_SESSION['email'];


    $sql_search_job = "SELECT * FROM jobs WHERE id = '$job_id'";
    $search_object = mysqli_query($conn,$sql_search_job) Or die("Failed to query " . mysqli_error($conn));
    $search_array = mysqli_fetch_assoc($search_object);

    $provider_email = $search_array['email'];


    $sql = "INSERT INTO report_jobs(job_id,provider_email,seeker_email) VALUES('$job_id','$provider_email','$seeker_email')";

    if (!mysqli_query($conn,$sql)) 
    {
        die("Failed to report the job " . mysqli_error($conn));
    }
    else {
        
        header("Location:seeker_home.php");
    }

?>