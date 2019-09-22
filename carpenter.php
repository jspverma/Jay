<?php
error_reporting(0);
include('inc/db.php');
include 'personalDetails.php';
include 'carpenterService.php';

$inspection_charge=100;
$minimum_service_charges=200;
if(isset($_POST['submit1'])){
    $Date=$_POST['date'];
    $time=$_POST['time'];
    $book_service=$_POST['book_service'];
    $qty=$_POST['qty'];
    $serviceID=$_POST['book_serviceID'];
    $price=0;
    $total=0;
    $repQty=$_POST['repQty'];
    $repserviceID=$_POST['repSerID'];
    $repPrice=$_POST['repCharge'];
    $rep=0;
    foreach($repQty as $value){
        if($value>0){
            $rep=1;
        }
    }

    if($rep==0){
        for($i=0; $i<=count($qty)-1; $i++){
            if($qty[$i]>0){
                $id=$serviceID[$i].",".$id;
                $qtyPro=$qty[$i].",".$qtyPro;
                $price=($qty[$i]*$book_service[$i]);
                $total=$total+$price;
                $service="Installation";
            }
        }
    }else{
        for($i=0; $i<=count($repQty)-1; $i++){
            if($repQty[$i]>0){
                $id=$repserviceID[$i].",".$id;
                $qtyPro=$repQty[$i].",".$qtyPro;
                $price=($repQty[$i]*$repPrice[$i]);
                $total=$total+$price;
                $service="Repair";
            }
        }
    }

    if(empty($_SESSION['name'])) {
        $url="carpenter.php";
        // echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php?id='.$id.'&total='.$total.'&qty='.$qtyPro.'&service='.$service.'&date='.$Date.'&time='.$time.'&url='.$url.'&inspection_charge='.$inspection_charge.'&minimum_service_charges='.$minimum_service_charges);
    }else{
        header('Location:checkout.php?id='.$id.'&total='.$total.'&qty='.$qtyPro.'&service='.$service.'&date='.$Date.'&time='.$time.'&inspection_charge='.$inspection_charge.'&minimum_service_charges='.$minimum_service_charges);
    }
}
?>

	<!doctype html>
	<html>

	<head>
		<title> Online carpenter services| Best carpenter- Hombuilt.com </title>
		<meta name="keywords" content="Carpenter, carpenter in Noida, carpenter in gurgaon, carpenter in Dehradun, carpenter in jaipur, carpenter services, carpenter near me, carpenter in Delhi." />
		<meta name="description" content="Book our services in online Carpentry Services at Home for preeminent rates.  We serve the entire in Delhi, Gurgaon, Jaipur, Mumbai. Hire best carpenters online." />

		<link rel="stylesheet" href="themes/Files/css/service_desc.css">

		<?php include 'inc/head.php';?>


		<style>		
			.tab-content-group {
				background-image: url(themes/Files/Images/banner/carpenter-min.jpg);
			}

		</style>


	</head>

	<body>

		<div id="main_container" class="text-left">

			<?php include 'inc/header.php';?>

			<div id="content">
				<h1><br></h1>
				

				<!--          Do Not edit Above Page        -->

				<!-- Page section -->

				<div class="tab-content-group ">
					<div class="container"

						<!--Tab Panel-->
						<div class="tabbable custom-tabs tabs-left col-md-offset-1 tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll row">
							<ul class="nav nav-tabs col-md-3 col-xs-12">
								<li class="active"><a href="#panel1" data-toggle="tab" class="active "><i class="fa fa-shopping-cart"></i>&nbsp;<span>Book Service</span></a></li>
								<li><a href="#panel2" data-toggle="tab"><i class="fa fa-book"></i>&nbsp;<span>Rate Card</span></a></li>
							</ul>
							<div class="tab-content col-md-8 col-xs-12">
								<!--Tab Panel 1-->
								
								<div class="tab-pane active" id="panel1">
									<form method="post">
									<div class="row">
										
											<!--Col 1-->
											<div class="col-md-12 col-xs-12">
												<h3 id="heading">Book a Carpenter</h3>
												
							<div class="panel with-nav-tabs panel-info">
								
								<div class="row">
									<div class="popup-panel-heading col-md-4 col-sm-12">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#book_pop_tab_1_info" data-toggle="tab">Installation</a></li>
                                            <li><a href="#book_pop_tab_3_info" data-toggle="tab">Repair / Removal</a></li>

										</ul>
									</div>
									
									<div class="panel-body col-md-8 col-sm-12">
										<div class="tab-content">
											<!--Tab 1 Content-->
											<div class="tab-pane fade in active" id="book_pop_tab_1_info">
												<div class="rate_tab_pane_inner">
                                                    <?php
                                                    $sql="select * from tbl_products where services='Carpenter'";
                                                    $result=$mysqli->query($sql);
                                                    while($row=$result->fetch_array()){
                                                    ?>
                                                        <div class="items_select">
														<div class="row">
															<div class="col-sm-8">
																<h3><?php echo $row['book_services']; ?></h3>

															</div>

															<div class="col-sm-4">
																<div class="input-group pull-right">
																	<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs" data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																		</button>
																	</span>
                                                                    <input type="hidden" name="book_service[]" value="<?php echo $row['installation_charge']; ?>">
                                                                    <input type="hidden" name="book_serviceID[]" value="<?php echo $row['id']; ?>">
                                                                    <input type="text" id="quantity" name="qty[]" class="form-control input-number" value="0" min="0" max="1000">

													<span class="input-group-btn">
														<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
															<span class="glyphicon glyphicon-plus"></span>
														</button>
																	</span>
																</div>
															</div>
														</div>
													</div>
                                                    <?php
                                                    }
                                                    ?>


                                                    <div class="items_select">
														<div class="row">
															<div class="col-sm-8">
																<h3>Stell Window Frame</h3>

															</div>
															
															<div class="col-sm-4">
																<div class="input-group pull-right">
																	<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

												<input type="text" id="quantity" name="cupboradDoor" class="form-control input-number" value="0" min="0" max="1000">

														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
														<span class="glyphicon glyphicon-plus"></span>
															</button>
																	</span>
																</div>
															</div>
														</div>
													</div>



							<div class="items_select">
								<div class="row">
									<div class="col-sm-8">
										<h3>Door Handle</h3>

									</div>

									<div class="col-sm-4">
										<div class="input-group pull-right">
											<span class="input-group-btn">
												<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
													<span class="glyphicon glyphicon-minus"></span>
												</button>
											</span>
											
											<input type="text" id="quantity" name="diningTable" class="form-control input-number" value="0" min="0" max="1000">

											<span class="input-group-btn">
												<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
													<span class="glyphicon glyphicon-plus"></span>
												</button>
											</span>
										</div>
									</div>
								</div>
							</div>

													<div class="items_select">
													
														<div class="row">
															<div class="col-sm-8">
																<h3>Peephole</h3>

															</div>

															<div class="col-sm-4">
																<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

								<input type="text" id="quantity" name="diningPre" class="form-control input-number" value="0" min="0" max="1000">

									<span class="input-group-btn">
										<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
																	</span>
																</div>
															</div>
														</div>
													</div>

													<div class="items_select">
														<div class="row">
															<div class="col-sm-8">
																<h3>Stopper</h3>

															</div>

															<div class="col-sm-4">
																<div class="input-group pull-right">
															<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

					<input type="text" id="quantity" name="diningMajor" class="form-control input-number" value="0" min="0" max="1000">

						<span class="input-group-btn">
							<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
																	</span>
																</div>
															</div>
														</div>
													</div>
													
													<div class="items_select">
								<div class="row">
									<div class="col-sm-8">
										<h3>Hinge</h3>
										
									</div>
									
									<div class="col-sm-4">
										<div class="input-group pull-right">
											<span class="input-group-btn">
												<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
													<span class="glyphicon glyphicon-minus"></span>
												</button>
											</span>
											
											<input type="text" id="quantity" name="door" class="form-control input-number" value="0" min="0" max="1000">

											<span class="input-group-btn">
												<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
													<span class="glyphicon glyphicon-plus"></span>
												</button>
											</span>
										</div>
									</div>
														</div>
													</div>


						<div class="items_select">
							<div class="row">
								<div class="col-sm-8">
									<h3>Mesh</h3>
									
								</div>
								
								<div class="col-sm-4">
									<div class="input-group pull-right">
										<span class="input-group-btn">
											<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
												<span class="glyphicon glyphicon-minus"></span>
											</button>
										</span>
										
										<input type="text" id="quantity" name="doorDismantling" class="form-control input-number" value="0" min="0" max="1000">

										<span class="input-group-btn">
											<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
													</div>
													
								<div class="items_select">
									<div class="row">
										<div class="col-sm-8">
											<h3>New Door</h3>

										</div>

										<div class="col-sm-4">
											<div class="input-group pull-right">
												<span class="input-group-btn">
													<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												</span>
												
												<input type="text" id="quantity" name="doorKitchen" class="form-control input-number" value="0" min="0" max="1000">

												<span class="input-group-btn">
													<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
														<span class="glyphicon glyphicon-plus"></span>
													</button>
												</span>
											</div>
										</div>
									</div>
													</div>
													
													<div class="items_select">
														<div class="row">
															<div class="col-sm-8">
																<h3>Painting</h3>

															</div>

															<div class="col-sm-4">
																<div class="input-group pull-right">
																	<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																		</button>
																	</span>

																	<input type="text" id="quantity" name="doorHanldeLock" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>


																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Curtain Rod</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="doorHanldeLockPre" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>


																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Bed Assemble</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="doorMajor" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>


																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Drilling on wall</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="drawer" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Drilling on tile</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="drawerPre" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Furniture work major</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="slidingWindowLockReplac" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>-->

																				</div>

					<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>

											</div>

																			

																			<!--Tab 3 Content-->
											<div class="tab-pane fade" id="book_pop_tab_3_info">

												<div class="rate_tab_pane_inner">
                                                    <?php
                                                    $sql="select * from tbl_products where services='carpenter'";
                                                    $result=$mysqli->query($sql);
                                                    while($row=$result->fetch_array()) {
                                                        ?>


                                                        <div class="items_select">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <h3><?php echo $row['book_services']; ?></h3>

                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="input-group pull-right">
									<span class="input-group-btn">
										<button type="button" class="quantity-left-minus btn btn-number btn-xs"
                                                data-type="minus" data-field="">
                                            <span class="glyphicon glyphicon-minus"></span>
                                        </button>
									</span>
                                                                        <input type="hidden" value="<?php echo $row['id']; ?>" name="repSerID[]">
                                                                        <input type="hidden" value="<?php echo $row['repair_charge']; ?>" name="repCharge[]">
                                                                        <input type="text" id="quantity" name="repQty[]" class="form-control input-number" value="0" min="0" max="1000">

									<span class="input-group-btn">
										<button type="button" class="quantity-right-plus btn btn-number btn-xs"
                                                data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
									</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>

													<div class="items_select">
														<div class="row">
															<div class="col-sm-8">
																<h3>Door Hinge</h3>

															</div>

															<div class="col-sm-4">
																<div class="input-group pull-right">
																	<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																		</button>
																	</span>

						<input type="text" id="quantity" name="drillingOnTiles" class="form-control input-number" value="0" min="0" max="1000">

						<span class="input-group-btn">
							<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
																	</span>
																</div>
															</div>
														</div>
													</div>
													
																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Door Mesh</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="drillingHeavy" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>New Door</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="drillingOnMetal" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Chair</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="whiteBoard" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div class="items_select">
																						<div class="row">
																							<div class="col-sm-8">
																								<h3>Table</h3>

																							</div>

																							<div class="col-sm-4">
																								<div class="input-group pull-right">
																									<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
																									</button>
																									</span>

																									<input type="text" id="quantity" name="curtailRod" class="form-control input-number" value="0" min="0" max="1000">

																									<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
																									</button>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>

						<div class="items_select">
							<div class="row">
								<div class="col-sm-8">
									<h3>Stool</h3>

								</div>

								<div class="col-sm-4">
									<div class="input-group pull-right">
										<span class="input-group-btn">
											<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
												<span class="glyphicon glyphicon-minus"></span>
											</button>
										</span>

										<input type="text" id="quantity" name="cupboardDoor" class="form-control input-number" value="0" min="0" max="1000">

										<span class="input-group-btn">
											<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
													</div>

					<div class="items_select">
						<div class="row">
							<div class="col-sm-8">
								<h3>Drawer</h3>

							</div>

				<div class="col-sm-4">
					<div class="input-group pull-right">
						<span class="input-group-btn">
							<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
								<span class="glyphicon glyphicon-minus"></span>
							</button>
						</span>

						<input type="text" id="quantity" name="mirror" class="form-control input-number" value="0" min="0" max="1000">

						<span class="input-group-btn">
							<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</span>
					</div>
				</div>
					</div>
				</div>

			<div class="items_select">
				<div class="row">
					<div class="col-sm-8">
						<h3>Desk</h3>

					</div>
					
					<div class="col-sm-4">
						<div class="input-group pull-right">
							<span class="input-group-btn">
								<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>

							<input type="text" id="quantity" name="woodenBedDismantling" class="form-control input-number" value="0" min="0" max="1000">
							
							<span class="input-group-btn">
								<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
			</div>

						<div class="items_select">
							<div class="row">
								<div class="col-sm-8">
									<h3>Almirah</h3>

								</div>
								
								<div class="col-sm-4">
									<div class="input-group pull-right">
										<span class="input-group-btn">
											<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
												<span class="glyphicon glyphicon-minus"></span>
											</button>
										</span>

										<input type="text" id="quantity" name="woddenBedFittlng" class="form-control input-number" value="0" min="0" max="1000">
										
										<span class="input-group-btn">
											<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
												<span class="glyphicon glyphicon-plus"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>

								<div class="items_select">
									<div class="row">
										<div class="col-sm-8">
											<h3>Cabinet</h3>

										</div>

										<div class="col-sm-4">
											<div class="input-group pull-right">
												<span class="input-group-btn">
													<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												</span>

												<input type="text" id="quantity" name="tv32" class="form-control input-number" value="0" min="0" max="1000">
												
												<span class="input-group-btn">
													<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
														<span class="glyphicon glyphicon-plus"></span>
													</button>
												</span>
											</div>
										</div>
									</div>
								</div>

					<div class="items_select">
						<div class="row">
							<div class="col-sm-8">
								<h3>Sofa</h3>
								
							</div>

							<div class="col-sm-4">
								<div class="input-group pull-right">
									<span class="input-group-btn">
										
					<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
						<span class="glyphicon glyphicon-minus"></span>
										</button>
									</span>

									<input type="text" id="quantity" name="tv32to60" class="form-control input-number" value="0" min="0" max="1000">

									<span class="input-group-btn">
										<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>


								<div class="items_select">
									<div class="row">
										<div class="col-sm-8">
											<h3>Dressing Table</h3>

										</div>

										<div class="col-sm-4">
											<div class="input-group pull-right">
												<span class="input-group-btn">
													<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												</span>

												<input type="text" id="quantity" name="tvDismantling32" class="form-control input-number" value="0" min="0" max="1000">
												
												<span class="input-group-btn">
													<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
														<span class="glyphicon glyphicon-plus"></span>
													</button>
												</span>
											</div>
										</div>
									</div>
								</div>

				<div class="items_select">
					<div class="row">
						<div class="col-sm-8">
							<h3>Bed Dissemble</h3>

						</div>

						<div class="col-sm-4">
							<div class="input-group pull-right">
								<span class="input-group-btn">
									<button type="button" class="quantity-left-minus btn btn-number btn-xs"  data-type="minus" data-field="">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>

								<input type="text" id="quantity" name="tvDismantling32to60" class="form-control input-number" value="0" min="0" max="1000">

								<span class="input-group-btn">
									<button type="button" class="quantity-right-plus btn btn-number btn-xs" data-type="plus" data-field="">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>
						</div>
					</div>
													</div>-->

								
												</div>
												<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 199. This will be adjusted in the billing amount.</div>
											</div>

																			
											
										</div>
									</div>
									
		</div>
								
		</div>		
					<div class="panel-footer" style="border-top: none; padding: 0px 0px;">
						
							<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="date" placeholder="Select Date" class="form-control" type="date" required="">
							</div>
						
						
						<div class="input-group col-md-4 bootstrap-timepicker timepicker" style="float: left; margin-top: 0px; margin-right: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							<select class="form-control ui-timepicker-optionst" name="time" required="">
								<option class="ui-timepicker-am" value="" name="time" required="">select time</option>
								<option class="ui-timepicker-am" value="9:00-11:00 am" name="time">9:00-11:00 am</option>
								<option class="ui-timepicker-pm" value="11:00-1:00 pm" name="time">11:00-1:00 pm</option>
								<option class="ui-timepicker-pm" value="1:00-3:00 pm" name="time">1:00-3:00 pm</option>
								<option class="ui-timepicker-pm" value="3:00-5:00 pm" name="time">3:00-5:00 pm</option>
								<option class="ui-timepicker-pm" value="5:00-7:00 pm" name="time">5:00-7:00 pm</option>
								<option class="ui-timepicker-pm" value="7:00-9:00 pm" name="time">7:00-9:00 pm</option>
							</select>
						</div>
							
							<a><input type="submit" name = "submit1" class="btn btn-success btn-primary pull-left" value ="Book Now" style="float: right !important;"></a>
							
					</div>
																			
										</div>
											
			</div>
	</form>
								</div>
							
							<!--Tab Panel 1 End-->

							<!--Tab Panel 2-->
							<div class="tab-pane" id="panel2" style="height:380px;">
								<div class="row">

										<div class="panel with-nav-tabs panel-info">

											<div class="panel-heading">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Installation </a></li>
												
													<li><a href="#rate_tab_3_info" data-toggle="tab">Repair / Removal</a></li>
												</ul>
											</div>

											<div class="panel-body">
												<div class="tab-content">
													<!--Tab 1 Content-->
													<div class="tab-pane fade in active" id="rate_tab_1_info">
														<div class="rate_tab_pane_inner">
															<div class="items_title">
								<h4 id="items_title">Installation</h4>
																<div class="clear"> </div>
															</div>

															<table class="table table-stripped">
	<tr>
		<th>Window</th>
		<th></th>
	</tr>
	<tr>
		<td>Window</td>
		<td>Starts Rs. 170</td>
	</tr>
	<tr>
		<td>Stell Window Frame</td>
		<td>Upon Inspection</td>
	</tr>
	<tr>
		<th>Door</th>
		<th></th>
	</tr>
	<tr>
		<td>Handle</td>
		<td>60</td>
	</tr>
	<tr>
		<td>Peephole</td>
		<td>130</td>
	</tr>
	<tr>
		<td>Stopper</td>
		<td>60</td>
	</tr>
	<tr>
		<td>Hinge</td>
		<td>80</td>
	</tr>
	<tr>
		<td>Mesh</td>
		<td>200</td>
	</tr>
	<tr>
		<td>New Door</td>
		<td>300</td>
	</tr>
	<tr>
		<th>Furniture</th>
		<th></th>
	</tr>
	<tr>
		<td>Painting</td>
		<td>Starts Rs. 120</td>
	</tr>
	<tr>
		<td>Curtain Rod</td>
		<td>60</td>
	</tr>
	<tr>
		<td>Bed Assemble</td>
		<td>Starts Rs. 300</td>
	</tr>
	<tr>
		<th>Other</th>
		<th></th>
	</tr>
	<tr>
		<td>Drilling on wall</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Drilling on tile</td>
		<td>25</td>
	</tr>
	<tr>
		<td>Furniture work major</td>
		<td>Upon Inspection</td>
	</tr>
</table>
															<div class="rate_text" id="rate_text">Involves standard installation/removal work. Minimum Service charges will be Rs 200. This will be adjusted in the billing amount. </div>
														</div>
													</div>

													<!--Tab 2 Content-->
													<div class="tab-pane fade" id="rate_tab_2_info">

														<div class="rate_tab_pane_inner">

															

															<div class="rate_text" id="rate_text">Involves standard repair work. </div>
														</div>

													</div>

													<!--Tab 2 Content End-->

													<!--Tab 2 Content-->
													<div class="tab-pane fade" id="rate_tab_3_info">

														<div class="rate_tab_pane_inner">
<div class="items_title">
																<h4 id="items_title">Repair/Removal</h4>
																<div class="clear"> </div>
															</div>

															<table class="data-table table table-stripped">
																<tr>
																	<td>Window</td>
																	<td>300</td>
																</tr>
																<tr>
																	<th>Door</th>
																	<th></th>
																</tr>
																<tr>
																	<td>Hinge</td>
																	<td>50</td>
																</tr>
																<tr>
																	<td>Mesh</td>
																	<td>200</td>
																</tr>
																<tr>
																	<td>New Door</td>
																	<td>Upon Inspection</td>
																</tr>
																<tr>
																	<th>Furniture</th>
																	<th></th>
																</tr>
																<tr>
																	<td>Chair</td>
																	<td>130</td>
																</tr>
																<tr>
																	<td>Table</td>
																	<td>130</td>
																</tr>
																<tr>
																	<td>Stool</td>
																	<td>130</td>
																</tr>
																<tr>
																	<td>Drawer</td>
																	<td>110</td>
																</tr>
																<tr>
																	<td>Desk</td>
																	<td>180</td>
																</tr>
																<tr>
																	<td>Almirah</td>
																	<td>250</td>
																</tr>
																<tr>
																	<td>Cabinet</td>
																	<td>250</td>
																</tr>
																<tr>
																	<td>Sofa</td>
																	<td>300</td>
																</tr>
																<tr>
																	<td>Dressing Table</td>
																	<td>250</td>
																</tr>
																<tr>
																	<td>Bed Dissemble</td>
																	<td>200</td>
																</tr>
															</table>


															<div class="rate_text" id="rate_text">Involves standard repair work. Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
														</div>

													</div>

													<!--Tab 2 Content End-->

												</div>
											</div>
										</div>
								</div>
							</div>
							<!--Tab Panel 2 End-->
								</div>
						</div>

					</div>
					<!--Tab Panel End-->

				</div>
				<!--tab container End-->

			</div>
			<!--Tab group End-->

			<!--------------------------------------------FAQ------------------------------------------------->

			<div class="custom_faq_content">

				<!-- Content Row -->
				<div class="container">
					<div class="row">
						<br>
						<h1>Frequently Asked Question</h1>
						<br>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1.  Which type of carpentry services do you provide?

 </a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
										Ans :We provide all the carpentry services directly related to your home, office, school, building etc.

									</div>
								</div>
							</div>
							<!-- /.panel -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What are the Carpentry charges?

</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										Ans : • Minimum Service charge is 200 Rs, it will be adjusted in billing amount.

                           <br>• 100 Rs will be the inspection charges if work not done on same day.
									</div>
								</div>
							</div>
							<!-- /.panel -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. Who will serve you?

</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										Ans :•	Trained and certified Carpenter
                            <br>•	Background verified staff
									</div>
								</div>
							</div>
							<!-- /.panel -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. How will I know the serviceman is charging me correctly?

 </a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										Ans : We have a standard rate card for the services on website and app. You can cross check the proceedings

									</div>
								</div>
							</div>
							<!-- /.panel -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q5. How much advance will I have to pay in case the work requires more than one visit?
 </a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										Ans : Material cost has to be paid in advance and service cost will be paid as per the discussion with the service professional

									</div>
								</div>
							</div>
							<!-- /.panel -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q6. Is their any charges apart from services and inspection charges?

 </a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										Ans : If our service man goes to buy something from your behalf, transportation charges Rs 5o will be applicable.
									</div>
								</div>
								<!-- /.panel -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q7. Is their any warranty for the services?</a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
											Ans : HomBuilt.com provides 15 Day guarantee on the bill for the services offered from our service man.
										</div>
									</div>
								</div>
								<!-- /.panel -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Q8. Any other warning from HomBuilt.com?</a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse">
										<div class="panel-body">
											Ans :Please do not entertain any request from the service provider/serviceman or encourage them to provide services directly to customers without registering call with HomBuilt.com. In case you do so, HomBuilt.com will not take any responsibility and/or liability for such services or loss, if any caused to the customers.
										</div>
									</div>
								</div>
								<!-- /.panel -->

							</div>
							<!-- /.panel-group -->
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->

					<!-- ----------------------------------------------------------------------------- -->
				</div>
				<!--Faq-container End-->


				<!--Testimonial-->

				<section id="carousel">
					<div class="container">
						<div class="row">
<h1 class="h1_title test11" >Testimonials</h1>
							<div class="col-md-12">

								<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
									<!-- Carousel indicators -->
									<ol class="carousel-indicators">
										<li data-target="#fade-quote-carousel" data-slide-to="0"></li>
										<li data-target="#fade-quote-carousel" data-slide-to="1"></li>
										<li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
										<li data-target="#fade-quote-carousel" data-slide-to="3"></li>

									</ol>
									<!-- Carousel items -->
									<div class="carousel-inner">
										<div class="item">
											<div class="profile-circle" style="background-image: url('images/test/Abhishek_shandaliya.jpg');background-color: rgba(0,0,0,.2);"></div>
											<blockquote>
												<p>I am so content with the grievance group of HomBuilt.com, they are so patient to listen our issues and prepared to determine it. They have settled my issues and I am super content with the way he took care of my case.Will clearly allude numerous more clients

												</p>
											</blockquote>
											By: Abhishek shandaliya
										</div>
										<div class="item">
											<div class="profile-circle" style="background-image: url('images/test/Akshay_Bansal.jpg');background-color: rgba(77,5,51,.2);"></div>
											<blockquote>
												<p>Extremely proficient. There were extraordinary and steady correspondence which helped the venture complete in the most ideal way. I will prescribe HomBuilt.com to others and will utilize them again for future venture


												</p>
											</blockquote>
											By: Akshay Bansal
										</div>
										<div class="active item">
											<div class="profile-circle" style="background-image: url('images/test/Anirudh_dubey.jpg');background-color: rgba(145,169,216,.2);"></div>
											<blockquote>
												<p>Good and careful employment. Looking back the craftsman yesterday was not as viable and over cited also.Great work HOMBUILT.

												</p>
											</blockquote>
											By: Anirudh dubey
										</div>
										<div class="item">
											<div class="profile-circle" style="background-image: url('images/test/Ankit_gupta.jpg');background-color: rgba(77,5,51,.2);"></div>
											<blockquote>
												<p>My bed was broken and wanted to renovate it asap as i had a party. They fixed it immediately without any help. After that work we hired them for our all furniture work and my house is looking very beautiful now.

												</p>
											</blockquote>
											By: Ankit gupta

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<style>
					.myclass {
						padding: 50px 30px 50px 80px;
						text-align: justify;
						font-size: 16px;
						font-weight: bold;
												font-family: initial;
					}
					
					.myclass:before {
						content: '\201C';
						font-size: 30px;
					}
					
					.myclass:after {
						content: '\201D';
						font-size: 20px;
					}

				</style>

				<div class="container">
					<div class="row">
						<div class="col-md-12 myclass">
							Call us now to get solutions by our gathering of unfathomably gifted and conferred devoted carpenter. Book carpenter services online from hombuilt.com and get best solution from our administration that will help you to fix extensive variety of wooden work, repairing furniture, wooden work and many more. Handyman professionals will not get you a single chance to worry about your wooden problems. Get best carpenter services online in Delhi, Jaipur, Gurgaon, Noida, Dehradun and many more cities. Book now to hire an carpenter online from hombuilt.com. You are a call away from getting a perfect solution for all your furniture related problems.


						</div>
					</div>
				</div>


			</div>

		<!--Testimonial Close-->

		<!-- Page section End-->

		<!--       Do Not edit below Page     -->

		
		<!-- content -->


		<?php include 'inc/footer.php';?>


		<script type="text/javascript">


		</script>

		<script>
			$(document).ready(function() {

				var quantitiy = 0;
				$('.quantity-right-plus').click(function(e) {

					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($(this).parent().siblings('#quantity').val());

					// If is not undefined

					$(this).parent().siblings('#quantity').val(quantity + 1);


					// Increment

				});

				$('.quantity-left-minus').click(function(e) {
					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($(this).parent().siblings('#quantity').val());

					// If is not undefined

					// Increment
					if (quantity > 0) {
						$(this).parent().siblings('#quantity').val(quantity - 1);
					}
				});

			});
		</script>

		<!-- main content -->
	</body>

	</html>
