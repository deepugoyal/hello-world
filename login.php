<?php
session_start();
include('config.php');
$email=$_POST['email'];
$pass=$_POST['pass'];

$check=$db->get_var("select count(*) from admin where email='$email' and pass='$pass'");
	if($check==0)
	{

	$check1=$db->get_var("select count(*) from advisor_regis where email='$email' and pass='$pass' and v_status='active'");
          if($check1 == 0)
            {
               $check2=$db->get_var("select count(*) from user_rgis where email='$email' and pass='$pass'");
               
                if ($check2 == 0)
                {
					unset($_SESSION['email']);
					header('location:generallogin.php?err=Invalid Username or Password');
                }
                else
                {
					
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = "user";
					header('location:User-SearchAdvisor.php');
                }

            }
            else
            {
				
                $_SESSION['email'] = $email;
                    $_SESSION['role'] = "advisor";
                header('location:Advisor-Home.php');
            }

    }
        else
        {

           $_SESSION["email"] = $email;
                    $_SESSION['role'] = "admin";
           header('location:Admin-UsersDetail.php');
		 
        }



?>