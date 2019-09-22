<?php


if(isset($_POST['submit']))
{
	session_start();
	$cart = null;
	$cart = array();
	
	$cart[0] = array("Tower Rod / Hanger",$_POST['towerRod']);
	$cart[1] = array("Soap Holder",$_POST['soapHolder']);
	$cart[2] = array("Toilet Paper Holder",$_POST['toiletPaperHolder']);
	$cart[3] = array("Tap",$_POST['tap']);
	$cart[4] = array("Shower",$_POST['shower']);
	$cart[5] = array("WC Jet",$_POST['wcJet']);
	$cart[6] = array("Face Mirror Upto 50cm",$_POST['faceMirrorupto50cm']);
	$cart[7] = array("Face Mirror 50-100cm",$_POST['faceMirrorupto50-100cm']);
	$cart[8] = array("Face Mirror 100-200cm",$_POST['faceMirrorupto100-200cm']);
	$cart[9] = array("Washbasin Drain (Straight standard style)",$_POST['washBasinDrainStraightSandard']);
	$cart[10] = array("Commode Western Style (Standard floor mounted)",$_POST['commodeStandardFloor']);
	$cart[11] = array("Commode Cover",$_POST['commodeCover']);
	$cart[12] = array("Washbasin (Standard Style)",$_POST['washBasinStandard']);
	$cart[13] = array("Jacuzzi (Standard fitting)",$_POST['jacuzziStandard']);
	$cart[14] = array("Washing Machine Connection (Standard Connection)",$_POST['washingMachineStandard']);
	$cart[15] = array("Flush Tank",$_POST['flushTank']);
	$cart[16] = array("Geyser Installation (<5 litrs)",$_POST['geyser5lt']);
	$cart[17] = array("Geyser Installation (5-10 litrs)",$_POST['geyser5-10lt']);
	$cart[18] = array("Geyser Installation (10-25 litrs)",$_POST['geyser10-25lt']);
	$cart[19] = array("Geyser Installation/Removal (>25 litrs)",$_POST['geyserabove25lt']);
	$cart[20] = array("Western Toilet (Close cooupled)",$_POST['westernToiletClose']);
	$cart[21] = array("Western Toilet (Wall Hang) Installation",$_POST['westernToiletHang']);
	$cart[22] = array("Loft Water Tank (Upto 500 litre)",$_POST['waterTank500lt']);
	$cart[23] = array("Loft Water Tank (500-1000 litre)",$_POST['waterTank500-1000lt']);
	$cart[24] = array("Loft Water Tank (1000-2000 litre)",$_POST['waterTank1000-2000lt']);
	$cart[25] = array("Flush Tank Servicing",$_POST['flushTankService']);
	$cart[26] = array("Sink Leakage",$_POST['sinkLeak']);
	$cart[27] = array("Washbasin Choke-up (partial)",$_POST['washbasinChokePartial']);
	$cart[28] = array("Washbasin Leakage",$_POST['washbasinLeak']);
	$cart[29] = array("Flush Tank Repair (Open)",$_POST['flushRepairOpen']);
	$cart[30] = array("Flush Tank Cleaning",$_POST['flushClean']);
	$cart[31] = array("Flush Tank Repair (Concealed)",$_POST['flushRepairConcealed']);
	$cart[32] = array("Geyser Removal (<5lt)",$_POST['geyserRemove5lt']);
	$cart[33] = array("Geyser Removal (5-10lt)",$_POST['geyserRemove5-10lt']);
	$cart[34] = array("Western Toilet (Wall Hang) - Removal ",$_POST['westernToiletWallRemoval']);
	$cart[35] = array("Western Toilet (Close Coupled) - Removal",$_POST['westernCoupledRemoval']);
	
	$j = 0;
	$finalCart = array();
	for( $i = 0; $i<35; $i++ ){
	if($cart[$i][1] != 0){
		$finalCart[$j] = array($cart[$i][0],$cart[$i][1]);
		$j = $j + 1;
	}
}
	$_SESSION['cc'] = $finalCart;
	
	
	
	
	
}



?>