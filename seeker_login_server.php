<?php

    session_start();
    include_once 'connection/db_connection.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {

    
        $sql = "SELECT * FROM seeker_info WHERE pass = '$pass' and email = '$email'";
        $result = mysqli_query($conn,$sql) or die("Failed to query the database" . mysqli_connect_error());

        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $_SESSION['name'] = $row['username']; 
        if($row['email']==$email && $row['pass'] == $pass)
        {
            $_SESSION['owner_id'] = $id;
            $_SESSION['email']=$email;
            $_SESSION['main_pass'] = $pass;
            header('Location:seeker_home.php');   

        }
        else
        {
            header('Location:seeker_login.php');
        }
    }
?>