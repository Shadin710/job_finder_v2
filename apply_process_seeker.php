<?php
    session_start();

    if (empty($_SESSION['email'])) 
    {
        header("Location:seeker_login.php");
    }

    include_once 'connection/db_connection.php';

    $email_seeker = $_SESSION['email'];
    
    $sql_seeker = "SELECT * FROM seeker_info where email = '$email_seeker'";
    $seeker_object = mysqli_query($conn,$sql_seeker) Or die("Failed to query " . mysqli_error($conn));

    $seeker_info = mysqli_fetch_assoc($seeker_object);

    $seeker_name = $seeker_info ['username'];

    $seeker_gender = $seeker_info['gender'];
    $seeker_age= $seeker_info['age'];
    $seeker_address = $seeker_info ['seeker_address'];

    $job_id = $_SESSION['job_id'];

    $sql_job ="SELECT * FROM jobs WHERE id ='$job_id'";
    $job_object = mysqli_query($conn,$sql_job) Or die("Failed to query " . mysqli_error($conn));
    $job_array = mysqli_fetch_assoc($job_object);

    $provider_email= $job_array['email'];

    $sql_apply = "INSERT INTO applied(username,email,age,gender,provider_email) VALUES('$seeker_name','$email_seeker','$seeker_age','$seeker_gender','$provider_email')";
    $_SESSION['record'] = 'yes';
    if (!mysqli_query($conn,$sql_apply)) 
    {
        die("Failed to insert the seeker data into the applied database" . mysqli_error($conn));
    }
    else
    {
        header("Location:upload.php");
    }
    

?>