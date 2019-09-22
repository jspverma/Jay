<?php


if(isset($_POST['submit']))
{
	session_start();
	$cart = null;
	$cart = array();
	
	
	$cart[0] = array("",$_POST['']);
	$cart[1] = array("",$_POST['']);
	$cart[2] = array("",$_POST['']);
	$cart[3] = array("",$_POST['']);
	$cart[4] = array("",$_POST['']);
	$cart[5] = array("",$_POST['']);
	$cart[6] = array("",$_POST['']);
	$cart[7] = array("",$_POST['']);
	$cart[8] = array("",$_POST['']);
	$cart[9] = array("",$_POST['']);
	$cart[10] = array("",$_POST['']);
	$cart[11] = array("",$_POST['']);
	$cart[12] = array("",$_POST['']);
	$cart[13] = array("",$_POST['']);
	$cart[14] = array("",$_POST['']);
	$cart[15] = array("",$_POST['']);
	$cart[16] = array("",$_POST['']);
	$cart[17] = array("",$_POST['']);
	$cart[18] = array("",$_POST['']);
	$cart[19] = array("",$_POST['']);
	$cart[20] = array("",$_POST['']);
	$cart[21] = array("",$_POST['']);
	$cart[22] = array("",$_POST['']);
	$cart[23] = array("",$_POST['']);
	$cart[24] = array("",$_POST['']);
	$cart[25] = array("",$_POST['']);
	$cart[26] = array("",$_POST['']);
	$cart[27] = array("",$_POST['']);
	$cart[28] = array("",$_POST['']);
	$cart[29] = array("",$_POST['']);
	$cart[30] = array("",$_POST['']);
	$cart[31] = array("",$_POST['']);
	$cart[32] = array("",$_POST['']);
	$cart[33] = array("",$_POST['']);
	$cart[34] = array("",$_POST['']);
	$cart[35] = array("",$_POST['']);
	$cart[36] = array("",$_POST['']);
	$cart[37] = array("",$_POST['']);
	$cart[38] = array("",$_POST['']);
	$cart[39] = array("",$_POST['']);
	$cart[40] = array("",$_POST['']);
	$cart[41] = array("",$_POST['']);
	$cart[42] = array("",$_POST['']);
	$cart[43] = array("",$_POST['']);
	$cart[44] = array("",$_POST['']);
	$cart[45] = array("",$_POST['']);
	$cart[46] = array("",$_POST['']);
	$cart[47] = array("",$_POST['']);
	$cart[48] = array("",$_POST['']);
	$cart[49] = array("",$_POST['']);
	$j = 0;
	$finalCart = array();
	for( $i = 0; $i<39; $i++ ){
	if($cart[$i][1] != 0){
		$finalCart[$j] = array($cart[$i][0],$cart[$i][1]);
		$j = $j + 1;
	}
}
	$_SESSION['cc'] = $finalCart;
	
	
	
	
	
}



?>