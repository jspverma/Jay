<?php


if(isset($_POST['submit']))
{
	session_start();
	$cart = null;
	$cart = array();
	
	
	$cart[0] = array("Wall Mountef Fan",$_POST['wallMountedFan']);
	$cart[1] = array("Exhaust Fan",$_POST['exhaustFan']);
	$cart[2] = array("tube Light",$_POST['tubeLight']);
	$cart[3] = array("Fancy Light",$_POST['fancyLight']);
	$cart[4] = array("Home Theratre",$_POST['homeTheratre']);
	$cart[5] = array("Switch, Soclet, Bulb Holder",$_POST['switchSocketBulbHolder']);
	$cart[6] = array("Door Bell",$_POST['doorBel']);
	$cart[7] = array("Electric Chimney for Kitchen",$_POST['electricChimney']);
	$cart[8] = array("Cooler",$_POST['cooler']);
	$cart[9] = array("Wall mounted LCD/LED Television - small (upto 30Inch)",$_POST['LCD/LED30inch']);
	$cart[10] = array("Wall mounted LCD/LED Television - medium (31 to 44Inch)",$_POST['LCD/LED31-44inch']);
	$cart[11] = array("Wall mounted LCD/LED Television - large (45 to 60Inch)",$_POST['LCD/LED45-60inch']);
	$cart[12] = array("Servicing of Fan",$_POST['serviceFan']);
	$cart[13] = array("Tube Light / Fancy Light",$_POST['tubeFancyLight']);
	$cart[14] = array("Switch / Socket Replacement",$_POST['switchSockReplac']);
	$cart[15] = array("Main Circuit Panel / Meter Board",$_POST['mainCircuitMeter']);
	$cart[16] = array("Changeover Switch",$_POST['changeOverSwitch']);
	$cart[17] = array("NCB",$_POST['mcb']);
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