<?php

    session_start();
    if (empty($_SESSION['email'])) {
        header("Location:provider_login.php");
    }

    include_once 'connection/db_connection.php';

    if ($_SERVER['REQUEST_METHOD']=='POST') 
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
       $ghub = $_POST['ghub'];
       $twi = $_POST['twi'];
       $fb = $_POST['fb'];
       $website = $_POST['website'];
       $insta = $_POST['insta'];

       $pNum = $_POST['pNum'];
       $mNum = $_POST['mNum'];
       $address = $_POST['address'];

       

       $sql = "INSERT INTO provider_bio(username,email,ghub,twi,fb,website,insta,pnum,mnum,p_address,cur_pos) VALUES ('$name','$email','$ghub','$twi','$fb','$website','$insta','$pNum','$mNum','$address','$cur_pos')";

       if (!mysqli_query($conn,$sql)) 
       {
           die("Failed to insert the data" . mysqli_error($conn));
       }
       else {
           header("Location:provider_profile.php");
       }

    }
?>