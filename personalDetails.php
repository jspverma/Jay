<?php

if(isset($_POST['submit1']))
{
	session_start();
//	$_SESSION['personal'] = array($_POST['first_name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_POST['date'],$_POST['time']);
	header("Location: checkout.php");
}
?>