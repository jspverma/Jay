<?php
error_reporting(0);
include('inc/db.php');
session_start();

if($_POST['action'] == 'signup')
{
	$name = mysql_real_escape_string(trim($_POST['name1']));
	$email = mysql_real_escape_string(trim($_POST['email1']));
	$contact = mysql_real_escape_string(trim($_POST['contact1']));
	$password = mysql_real_escape_string(trim($_POST['password1']));

	$check_number_qry = mysql_query("SELECT * FROM `signup` WHERE `contact`='".$contact."'");
	if(mysql_num_rows($check_number_qry) > 0)
	{
	echo "You Are Already Registered With Homebuilt";
	}
    else
    {
	$signup_qry = mysql_query("INSERT INTO `signup` (`name`,`email`,`contact`,`password`,`status`,`verification`,`added`) VALUES ('".$name."','".$email."','".$contact."','".$password."','1','true', now())");
	if($signup_qry)
	{
     echo "You Have Successfully Registered With Homebuilt";
	}
	else
	{
		echo "Unable to Register Please Try Again !!!";
	}
   }
}  

if($_POST['action'] == 'userlogin')
{
	$lgmob = mysql_real_escape_string(trim($_POST['lgmob1']));
	$lgpassword = mysql_real_escape_string(trim($_POST['lgpassword1']));

	$check_login_qry = mysql_query("SELECT * FROM `signup` WHERE `contact`='".$lgmob."' AND `password`='".$lgpassword."' AND `status`='1' AND `verification`='true'");
	$check_login_data = mysql_fetch_array($check_login_qry);
	if(mysql_num_rows($check_login_qry) > 0)
	{
	$_SESSION['user_num'] = $check_login_data['contact'];
	$_SESSION['user_name'] = $check_login_data['name'];
	$_SESSION['user_type'] = 'User';
    echo "User Login Now";
	}
    else
    {
	echo "Invald Mobile Number & Password Please Try Again !!!!!!";
   }
}  
?>