<?php



function SignUp()
{
	echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
	session_start();
	if(!empty($_POST['email']))
	{
		$p1 = $_POST['email'];
		$p2 = $_POST['contact'];
		$p3 = $_POST['firstname'];
		$p4 = $_POST['lastname'];
		$p5 = $_POST['passwd'];
		
		$query = mysql_query("INSERT INTO login (ID, Email, Password, contactNumber, firstName, lastName) VALUES (NULL, '$p1', '$p5', '$p2', '$p3', '$p4')") or print(mysql_error());
		header("Location: index.php");
		exit;
	}
}

if(isset($_POST['submit']))
{
	SignUp();
}

?>