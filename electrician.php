<?php
error_reporting(0);
include('inc/db.php');
include 'personalDetails.php';
include 'electricianService.php';

$inspection_charge=100;
$minimum_service_charges=200;

if(isset($_POST['submit1'])){
    $Date=$_POST['Date'];
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
        $url="electrician.php";
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
		<title> Electrican Services online| Best electrician- Hombuilt.com </title>
		<meta name="keywords" content="electrician, electrical services, electrical contractor, electrical repair, home electrical wiring, fuse check, short circuit repair, electrican online, electrician in Noida, electrician in gurgaon, electrician in Dehradun, electrician in jaipur, electrician services, electrician near me, electrician in Delhi." />
		<meta name="description" content="Book electrical services online from your place at best service price. We serve the entire in Delhi, Gurgaon, Jaipur, Mumbai. Hire best electrician online." />

		<link rel="stylesheet" href="themes/Files/css/service_desc.css">

		<?php include 'inc/head.php';?>


		<style>		
			.tab-content-group {
				background-image: url(themes/Files/Images/banner/Electrical.jpg);
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
					<div class="container">


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
												<h3 id="heading">Book an Electrician</h3>
												
							<div class="panel with-nav-tabs panel-info">
								
								<div class="row">
									<div class="popup-panel-heading col-md-4 col-sm-12">
										<ul class="nav nav-tabs">
											<li class="active" style="width: 169px;"><a href="#book_pop_tab_1_info" data-toggle="tab">Installation</a></li>
											<li style="width: 169px;"><a href="#book_pop_tab_2_info" data-toggle="tab">Repair / Removal</a></li>
										</ul>
									</div>
									
									<div class="panel-body col-md-8 col-sm-12">
										<div class="tab-content">
											<!--Tab 1 Content-->
											<div class="tab-pane fade in active" id="book_pop_tab_1_info">
									<div class="rate_tab_pane_inner">
                                        <?php
                                        $sql="select * from tbl_products where services='Electrician'";
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
															<button type="button"
                                                                    class="quantity-left-minus btn btn-xs btn-number"
                                                                    data-type="minus" data-field="">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
														</span>
                                                            <input type="hidden" name="book_service[]" value="<?php echo $row['installation_charge']; ?>">
                                                            <input type="hidden" name="book_serviceID[]" value="<?php echo $row['id']; ?>">
                                                            <input type="text" id="quantity" name="qty[]" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button"
                                                                    class="quantity-right-plus btn btn-xs btn-number"
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
													<h3>Tubelight with frame</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="wallMountedFan" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Starter problem</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="exhaustFan" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Choke problem</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="tubeLight" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Ceiling fan</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="fancyLight" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Exhaust fan</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="homeTheratre" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Wall fan</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="switchSocketBulbHolder" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Motor Rewinding</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="doorBel" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Window AC</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="electricChimney" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Split AC</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="cooler" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Window AC Service(S)</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED30inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Split AC Service(N)</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED31-44inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Window AC Service(C)</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Split AC Service(C)</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Gas Filling Window</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Gas Filling Split</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Home Theatre</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Geyser</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Door Bell</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Fuse Charge</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>New MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="LCD/LED45-60inch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
															</button>
														</span>
													</div>
												</div>
											</div>
										</div>
										
										
									</div>
									
									<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
									
								</div>

																			<!--Tab 2 Content-->
												<div class="tab-pane fade" id="book_pop_tab_2_info">
								
									<div class="rate_tab_pane_inner">
                                        <?php
                                        $sql="select * from tbl_products where services='Electrician'";
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
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>

                                                        <input type="hidden" value="<?php echo $row['id']; ?>" name="repSerID[]">
                                                        <input type="hidden" value="<?php echo $row['repair_charge']; ?>" name="repCharge[]">
                                                        <input type="text" id="quantity" name="repQty[]" class="form-control input-number" value="0" min="0" max="1000">

														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Tubelight with frame change</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="tubeFancyLight" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Ceiling fan</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="switchSockReplac" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Exhaust fan</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mainCircuitMeter" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Wall fan</h3>
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="changeOverSwitch" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Wall condenser</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Celing fan condenser</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Window AC</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Split AC</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Home Theatre</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Geyser(with water connection)</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
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
													<h3>Door Bell</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="mcb" class="form-control input-number" value="0" min="0" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-xs btn-number" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
															</button>
														</span>
													</div>
												</div>
											</div>
										</div>
										
										
										
									</div>
								<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
								</div>

																			<!--Tab 2 Content End-->

																			<!--Tab 3 Content-->
											
																			
											
										</div>
									</div>
									
		</div>
								
		</div>		
					<div class="panel-footer" style="border-top: none; padding: 0px 0px;">
						
							<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="Date" placeholder="Select Date" class="form-control" type="date" required="">
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
													<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Installation</a></li>
													<li><a href="#rate_tab_2_info" data-toggle="tab">Repair / Removal</a></li>
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
		<th>Lights</th>
        <th></th>
    </tr>
    <tr>
        <td>Socket/Holder</td>
        <td>90</td>
    </tr>
    <tr>
        <td>Tubelight with frame</td>
        <td>60</td>
    </tr>
    <tr>
        <td>Starter problem</td>
        <td>40</td>
    </tr>
    <tr>
        <td>Choke problem</td>
        <td>60</td>
    </tr>
    <tr>
        <th>Fans</th>
        <th></th>
    </tr>
    <tr>
        <td>Ceiling fan</td>
        <td>90</td>
    </tr>
    <tr>
        <td>Exhaust fan</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Wall fan</td>
        <td>300</td>
    </tr>
    <tr>
        <td>Motor Rewinding</td>
        <td>370</td>
    </tr>
    <tr>
        <th>A.C.</th>
        <th></th>
    </tr>
    <tr>
        <td>Window AC</td>
        <td>500</td>
    </tr>
    <tr>
        <td>Split AC</td>
        <td>1600</td>
    </tr>
	<tr>
        <td>Window AC Service(S)</td>
        <td>350</td>
    </tr>
	<tr>
        <td>Split AC Service(N)</td>
        <td>500</td>
    </tr>
	<tr>
        <td>Window AC Service(C)</td>
        <td>450</td>
    </tr>
	<tr>
        <td>Split AC Service(C)</td>
        <td>550</td>
    </tr>
	<tr>
        <td>Gas Filling Window</td>
        <td>Starts at Rs. 1800</td>
    </tr>															
	<tr>
        <td>Gas Filling Split</td>
        <td>Starts at Rs. 1900</td>
    </tr>
																<tr>
																<th>Home Theatre</th>
        <th>Starts Rs 350</th>
																</tr>
																<tr>
																<th>Geyser</th>
        <th>Starts Rs 250</th>
																</tr>
																<tr>
																<th>Door Bell</th>
        <th>250</th>
																</tr>
																<th>Fuse Charge</th>
        <th>60</th>
																<tr>
																<th>New MCB</th>
        <th>90</th>
																</tr>
</table>
															<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
														</div>
													</div>

													<!--Tab 2 Content-->
																<div class="tab-pane fade" id="rate_tab_2_info">
								
									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Repair / Removal</h4>
											<div class="clear"> </div>
										</div>
										
<table class="table table-stripped">
    <tr>
		<th>Lights</th>
		<th></th>
    </tr>
    <tr>
        <td>Socket/Holder</td>
        <td>110</td>
    </tr>
    <tr>
        <td>Tubelight with frame change</td>
        <td>100</td>
    </tr>
    <tr>
        <th>Fans</th>
		<th></th>
    </tr>
    <tr>
        <td>Ceiling fan</td>
        <td>90</td>
    </tr>
    <tr>
        <td>Exhaust fan</td>
        <td>110</td>
    </tr>
	<tr>
        <td>Wall fan</td>
        <td>130</td>
    </tr>
	<tr>
        <td>Wall condenser</td>
        <td>90</td>
    </tr>
	<tr>
        <td>Celing fan condenser</td>
        <td>50</td>
    </tr>
	<tr>
        <th>A.C.</th>
		<th></th>
    </tr>
	<tr>
        <td>Window AC</td>
        <td>350</td>
    </tr>
	<tr>
        <td>Split AC</td>
        <td>900</td>
    </tr>
	<tr>
        <th>Home Theatre</th>
		<th>Starts at Rs. 150</th>
    </tr>
	<tr>
        <th>Geyser(with water connection)</th>
		<th>Starts at Rs. 400</th>
    </tr>
	<tr>
        <th>Door Bell</th>
		<th>200</th>
    </tr>
</table>


															<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1. Which type of Electrical services do you provide? </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : We provide all the Electrical services directly related to your home, office, school, building etcWe provide all the Electrical services directly related to your home, office, school, building etc.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What are the Electrical charges?</a>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. Who will serve you?</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : •	Trained and certified Electrician
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q6.  Is their any charges apart from services and inspection charges?

 </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : If our service man goes to buy something from your behalf, transportation charges Rs 5o will be applicable.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q7. Is their any warranty for the services?
</a>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Q8.  Any other warning from HomBuilt.com?

</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans :Please do not entertain any request from the serviceman or encourage them to provide services directly to customers without registering call with HomBuilt.com. In case you do so, HomBuilt.com will not take any responsibility and/or liability for such services or loss, if any caused to the customers.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                

            </div>
                <!-- /.panel -->
                

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
                        <div class="profile-circle" style="background-image: url('images/test/prateek_sharma.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>I might want to express my a debt of gratitude is in order for the five star workmanship and help your agents gave us amid the establishment and will unquestionably prescribe your organization to every one of our loved ones.</p>
				    		
				    	</blockquote>	
				    	By: Prateek sharma
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/chaman_singh.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>On account of your organization.The works completed looks extremely brilliant. Would like to prescribe you again later on.
					
</p>
				    	</blockquote>
				    	By:Chaman singh
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Rohit_Gupta.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Thanks to your two electricians who were most courteous and efficient and made every effort to course me as little inconvenience as possible.
					
</p>
				    	</blockquote>
				    		BY: Rohit Gupta
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Ashish_agarwal.jpg');background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>I simply needed to state what a magnificent employment your electrician did on my roof fan Celling. Minimal effort and great administrations. Amazing!!
							
</p>
				    	</blockquote>
				    	By: Ashish agarwal
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
							Call us now to get helped by our group of incredibly skilled and committed dedicated Electricians. Book electrical services online from hombuilt.com and get best arrangement from our organization that will help you to look into issues like electrical wiring, fixing tube lights, ceiling fans installation, switch boards repair, AC services, AC installation, and many more. Get best electrical services online in Delhi, Jaipur, Gurgaon, Noida, Dehradun and many more cities. Best electrical services are available at your door steps. Book now to hire an expert from hombuilt.com. Hire now from getting an ideal answer for all your electrical problems.

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
