<?php


if(isset($_POST['submit']))
{
	session_start();
	$cart = null;
	$cart = array();
	
	$cart[0] = array("L Shape",$_POST['lShape']);
	$cart[1] = array("U Shape",$_POST['uShape']);
	$cart[2] = array("Straight",$_POST['straight']);
	$cart[3] = array("Island Kitchen",$_POST['islandKit']);
	$j = 0;
	$finalCart = array();
	for( $i = 0; $i<4; $i++ ){
	if($cart[$i][1] != 0){
		$finalCart[$j] = array($cart[$i][0],$cart[$i][1]);
		$j = $j + 1;
	}
}
	$_SESSION['cc'] = $finalCart;
	
	
	
	
	
}



?>