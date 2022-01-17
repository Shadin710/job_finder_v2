<?php
    session_start();
	if (empty($_SESSION['email'])) 
	{
		header("Location:seeker_login.php");
	}
    include_once 'connection/db_connection.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') 
    {
        $email =$_SESSION['email'];

        $hobby_name = $_POST['hobby_name'];
        $hobby_des = $_POST['hobby'];
        $travel = $_POST['travel_name'];
        $travel_des = $_POST['travel_des'];
        $school_name = $_POST['school'];
        $s_name = $_POST['s_name'];
        $college_name = $_POST['clg'];
        $c_name =$_POST['c_name'];
        $university_name =$_POST['univer'];
        $u_name = $_POST['u_name'];
        $company_name = $_POST['company_name'];
        $company_des = $_POST['company_des'];
        $company_name1 =$_POST['company_name1'];
        $company_des1 = $_POST['company_des1'];
        $company_name2 = $_POST['company_name2'];
        $company_des2 =$_POST['company_des2'];
        $f_skill = $_POST['f_skill'];
        $s_skill = $_POST['s_skill'];
        $t_skill = $_POST['t_skill'];
        $fo_skill = $_POST['fo_skill'];

        $f_des = $_POST['f_des'];
        $s_des = $_POST['s_des'];
        $t_des = $_POST['t_des'];
        $fo_des = $_POST['fo_des'];


        $sql_work="INSERT INTO seeker_work(email,work,descrp,work1,descrp1,work2,descrp2) VALUES ('$email','$college_name','$company_des','$company_name1','$company_des1','$company_name2','$company_des2')";

        if (!mysqli_query($conn,$sql_work)) 
        {
            die("Failed to query " . mysqli_error($conn));
        }
        else
        {
            $sql_edu= "INSERT INTO seeker_education(email,edu1,edu_des1,edu2,edu_des2,edu3,edu_des3) VALUES ('$email','$school_name','$s_name','$college_name','$c_name','$university_name','$u_name')";
            
            if (!mysqli_query($conn,$sql_edu)) 
            {
                die("Failed to insert data in edu " . mysqli_error($conn));
            }
            else
            {
                $sql_bio = "INSERT INTO seeker_bio(email,skill1,skill2,skill3) VALUES ('$email','$f_skill','$s_skill','$t_skill')";
                if (!mysqli_query($conn,$sql_bio)) 
                {
                    die("Failed to insert data in seeker_bio " . mysqli_error($conn));
                }
                else
                {
                    $sql_hobby ="INSERT INTO seeker_hobby(email,hobby_name,hobby,travel,travel_des) VALUES('$email','$hobby_name','$hobby_des','$travel','$travel_des')";

                    if (!mysqli_query($conn,$sql_hobby)) 
                    {
                        die("Failed to insert data in seeker_hobby " . mysqli_error($conn));
                    }
                    else
                    {
                        header("Location:seeker_profile.php");
                    }
                }
            }
            
        }
        
    }
    
?>