<?php
include('inc/db.php');



$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());









function SignIn()

{

	session_start();

	if(!empty($_POST['username']))

	{

		$p1 = $_POST['username'];

		$p2 = $_POST['password'];

		$query = mysql_query("SELECT * FROM login where Email = '$p1' AND Password = '$p2'") or die(mysql_error());

		$row = mysql_fetch_array($query) or print(mysql_error());

		if(($_SESSION['username'] = $row['Email']) AND ($_SESSION['password'] = $row['Password']))

		{

			

			$_SESSION['username'] = $row['firstName'];

				header("Location: ".$_SESSION['url']);

				exit;



			echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

			

		}

		else

		{

			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";

		}

		

	}

}

if(isset($_POST['submit']))

{

	SignIn();

}



?>