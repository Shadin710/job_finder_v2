<?php

    include_once 'connection/db_connection.php';

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        # code...
  
    $uname = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $sql_e ="SELECT * FROM seeker_info WHERE pass = '$pass' and email = '$email'";
    $result = mysqli_query($conn,$sql_e) or die("Failed to query the database" . mysqli_connect_error());

    $count = mysqli_num_rows($result);

    if($count>0)
    {
        echo "email already exists!!";
        
    }
    else
    {
        if (strcmp($pass,$pass2)<>0) 
        {
            die("Password doesn't match");
        }
        else
        {
            $sql = "INSERT INTO seeker_info (username,email,pass,gender,age,seeker_address) VALUES ('$uname','$email','$pass','$gender','$age','$address')";
            
            if(!mysqli_query($conn,$sql))
            {
                echo("Error description: " . mysqli_error($conn));
            }
            else
            {
                header('Location:seeker_home.php');
            }
        }
    }
}
?>