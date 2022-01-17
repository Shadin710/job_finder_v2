<?php

    session_start();
    include_once 'connection/db_connection.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {

    
        $sql = "SELECT * FROM provider_info WHERE pass = '$pass' and email = '$email'";
        $result = mysqli_query($conn,$sql) or die("Failed to query the database" . mysqli_connect_error());

        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $username = $row['username'];
        if($row['email']==$email && $row['pass'] == $pass)
        {
            $_SESSION['owner_id'] = $id;
            $_SESSION['email']=$email;
            $_SESSION['main_pass'] = $pass;
            $_SESSION['name'] =$username;
            header('Location:post_job.php');   

        }
        else
        {
            header('Location:provider_login.php');
        }
    }
?>