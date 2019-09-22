<?php


if(isset($_POST['submit']))
{
	
	session_start();
	$cart = null;
	$cart = array();
	
	$cart[0] = array("Sofa Legs",$_POST['sofaLegs']);
	$cart[38] = array("Cupboard door",$_POST['cupboradDoor']);
	$cart[1] = array("Dining Table",$_POST['diningTable']);
	$cart[2] = array("Dining Table Premium",$_POST['diningPre']);
	$cart[3] = array("Dining Table Major",$_POST['diningMajor']);
	$cart[4] = array("Door",$_POST['door']);
	$cart[5] = array("Door Dismantling",$_POST['doorDismantling']);
	$cart[6] = array("Door Kitchen",$_POST['doorKitchen']);
	$cart[7] = array("Door Handle Lock",$_POST['doorHanldeLock']);
	$cart[8] = array("Door Handle Lock Premium",$_POST['doorHanldeLockPre']);
	$cart[9] = array("Door Major",$_POST['doorMajor']);
	$cart[10] = array("Door Drawer",$_POST['drawer']);
	$cart[11] = array("Drawer Premium",$_POST['drawerPre']);
	$cart[12] = array("Sliding Window Lock Replacement",$_POST['slidingWindowLockReplac']);
	$cart[13] = array("Sliding Window",$_POST['slidingWindow']);
	$cart[14] = array("Sliding Window Bearing Replacement",$_POST['slidingWindowBearingReplace']);
	$cart[15] = array("Window Bearing",$_POST['windowBraring']);
	$cart[16] = array("Wooden Chair",$_POST['woodenChair']);
	$cart[17] = array("Wooden Bed Normal",$_POST['woodenBedNormal']);
	$cart[18] = array("Wooden Bed Hydraulic",$_POST['woodenBedHydraulic']);
	$cart[19] = array("Major Work In Repair",$_POST['majorWork']);
	$cart[20] = array("Furniture Making",$_POST['furnitureMaking']);
	$cart[21] = array("Drilling On Walls",$_POST['drillingOnWalls']);
	$cart[22] = array("Drilling On Tiles",$_POST['drillingOnTiles']);
	$cart[23] = array("Drilling Heavy",$_POST['drillingHeavy']);
	$cart[24] = array("Drilling On Metals",$_POST['drillingOnMetal']);
	$cart[25] = array("White Borad / Shelf",$_POST['whiteBoard']);
	$cart[26] = array("Curtain Rod",$_POST['curtailRod']);
	$cart[27] = array("Cupboard Door",$_POST['cupboardDoor']);
	$cart[28] = array("Mirror",$_POST['mirror']);
	$cart[29] = array("Wooden Bed Dismantling",$_POST['woodenBedDismantling']);
	$cart[30] = array("Wooden Bed Fitting",$_POST['woddenBedFittlng']);
	$cart[31] = array("TV upto 32 Inch",$_POST['tv32']);
	$cart[32] = array("TV 32-60 Inch",$_POST['tv32to60']);
	$cart[33] = array("TV Dismantling upto 32 Inch",$_POST['tvDismantling32']);
	$cart[34] = array("TV Dismantling 32-60 Inch",$_POST['tvDismantling32to60']);
	$cart[35] = array("Window AC",$_POST['windowAC']);
	$cart[36] = array("Painting/ Photo Frame",$_POST['paintingPhotoFrame']);
	$cart[37] = array("Major Work in Fitting/Fixing",$_POST['majorwork1']);
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