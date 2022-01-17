<?php

    include_once 'connection/db_connection.php';

    if ($_SERVER['REQUEST_METHOD']=='POST')  {
        # code...
   
    $city = $_POST['city'];
    $company_name = $_POST['ComName'];
    $position = $_POST['position'];
    $work_num = $_POST['work_num'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $description = $_POST['des'];
    $education = $_POST['edu'];
    $salary  = $_POST['salary'];
    $benefits  = $_POST['benefits'];
    $time = $_POST['type_time'];
    $exp =$_POST['exp'];
    $skill =$_POST['skill'];
    $skill1 =$_POST['skill1'];
    $skill2 =$_POST['skill2'];
    $skill3 =$_POST['skill3'];

    $sql = "INSERT INTO jobs (comName,comAddress,position,work_num,phone,email,info, education,salay,benefits,type_time,exper,skilll,skill1,skill2,skill3) VALUES ('$company_name','$city','$position','$work_num','$phone','$email','$description','$education','$salary','$benefits','$time','$exp','$skill','$skill1','$skill2','$skill3')";

    //error handling
    if(!mysqli_query($conn,$sql))
    {
        die("Couldn't post the job" . mysqli_error($conn));
    }
    else
    {
      header("Location:provider_home.php");
    }

}

?>