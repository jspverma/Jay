<?php


if(isset($_POST['submit']))
{
	session_start();
	$cart = null;
	$finalCart = array();
	$cart = array();
	$cart = array_merge($_POST["what"],$_POST["architecture"],$_POST["need"]);

	for( $i = 0; $i<count($cart); $i++ ){
		$finalCart[$i] = array($cart[$i],"-","-");
	}
	$_SESSION['cc'] = $finalCart;
	
}	
	
	
	




?>