<?php
error_reporting(0);
include('inc/db.php');
include 'plumberService.php';
include 'personalDetails.php';

$inspection_charge=100;
$minimum_service_charges=200;
if(isset($_POST['submit1'])){
    $Date=$_POST['Date'];
    $time=$_POST['time'];
    $bdate=date("Y-m-d");
    date_default_timezone_set("asia/kolkata");
    $btime=date("h:i:sa");
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
//$inspection_charge
    if(empty($_SESSION['name'])) {
    	
        $url="plumber.php";
        // echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php?id='.$id.'&total='.$total.'&qty='.$qtyPro.'&service='.$service.'&date='.$Date.'&time='.$time.'&url='.$url.'&inspection_charge='.$inspection_charge.'&minimum_service_charges='.$minimum_service_charges);
    }else{
     header('Location:checkout.php?id='.$id.'&total='.$total.'&qty='.$qtyPro.'&service='.$service.'&date='.$Date.'&time='.$time

     	.'&inspection_charge='.$inspection_charge.'&minimum_service_charges='.$minimum_service_charges);
    }
}


?>

	<!doctype html>
	<html>

	<head>
		<title> Plumber service online| Best plumber- Hombuilt.com </title>
		<meta name="keywords" content="plumber, plumber service, plumbing repair, plumbing contractor,plumbing companies, plumber in Noida, plumber in gurgaon, plumber in Dehradun, plumber in jaipur, plumbing services, plumber near me, plumber in Delhi." />
		<meta name="description" content="Book plumbing services online from your place at best service price.  We serve the entire in Delhi, Gurgaon, Jaipur, Mumbai. Hire best plumbers online." />

		<link rel="stylesheet" href="themes/Files/css/service_desc.css">

		<?php include 'inc/head.php';?>


		<style>		
			.tab-content-group {
				background-image: url(themes/Files/Images/banner/plumber.jpg);
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

<!--						<h3 class="custom_booking_head">Book A plumber</h3>-->

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
                                    <input type="hidden" name="url" value="pilumber">
                                    
									<div class="row">
										
											<!--Col 1-->
											<div class="col-md-12 col-xs-12">
												<h3 id="heading">Book a plumber</h3>
												
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
																	$sql="select * from tbl_products where services='Plumber'";
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
															<button type="button" class="quantity-left-minus btn btn-xs btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
                                                        <input type="hidden" name="book_service[]" value="<?php echo $row['installation_charge']; ?>">
                                                        <input type="hidden" name="book_serviceID[]" value="<?php echo $row['id']; ?>">
														<input type="text" id="quantity" name="qty[]" class="form-control input-number" value="0" min="0" max="1000">
														
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
								
							
										
										
										
									</div>

					<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>

											</div>

																			<!--Tab 2 Content-->
                                                                            
												<div class="tab-pane fade" id="book_pop_tab_2_info">
                                                    <div class="rate_tab_pane_inner">
										
										                            <?php
																	$sql="select * from tbl_products where services='Plumber'";
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
									
										
									</div>
                                    
								<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200. This will be adjusted in the billing amount.</div>
								</div>

																			<!--Tab 2 Content End-->

							
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
								<option class="ui-timepicker-am" value="" required="">select time</option>
								<option class="ui-timepicker-am" value="9:00-11:00" name="time">9:00-11:00 am</option>
								<option class="ui-timepicker-pm" value="11:00-1:00" name="time">11:00-1:00 pm</option>
								<option class="ui-timepicker-pm" value="13:00-15:00" name="time">1:00-3:00 pm</option>
								<option class="ui-timepicker-pm" value="15:00-17:00" name="time">3:00-5:00 pm</option>
								<option class="ui-timepicker-pm" value="17:00-19:00" name="time">5:00-7:00 pm</option>
								<option class="ui-timepicker-pm" value="19:00-21:00" name="time">7:00-9:00 pm</option>
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

															<table class="data-table table table-stripped">
    <tr>
        <th>Toilet Work</th>
        <th></th>
    </tr>
    <tr>
        <td>Commode(Close Coupled)</td>
        <td>800</td>
    </tr>
    <tr>
        <td>Commode(Wall Hanging)</td>
        <td>1050</td>
    </tr>
    <tr>
        <td>Seat Cover</td>
        <td>130</td>
    </tr>
    <tr>
        <td>Bidet Cover</td>
        <td>350</td>
    </tr>
    <tr>
        <td>Toilet Jet</td>
        <td>150</td>
    </tr>
    <tr>
        <td>Bath Tub</td>
        <td>900</td>
    </tr>
    <tr>
        <td>Bath Tub with shower</td>
        <td>1500</td>
    </tr>
    <tr>
        <td>Wall Shower</td>
        <td>130</td>
    </tr>
    <tr>
        <td>Wash Basin (R)</td>
        <td>350</td>
    </tr>
    <tr>
        <td>Wash Basin (F)</td>
        <td>600</td>
    </tr>
    <tr>
        <td>Tap Normal</td>
        <td>110</td>
    </tr>
    <tr>
        <td>Tap Mixer</td>
        <td>190</td>
    </tr>
    <tr>
        <td>Water Tank</td>
        <td>Starts at Rs. 500</td>
    </tr>
    <tr>
        <td>Water Tank Plastic cleaning</td>
        <td>Starts at Rs. 300</td>
    </tr>
    <tr>
        <td>Water Tank Concrete cleaning</td>
        <td>Starts at Rs. 650</td>
    </tr>
	<tr>
    	<th>R.O.</th>
    	<th>400</th>
	</tr>
    <tr>
    	<th>Other</th>
    	<th></th>
	</tr>
    <tr>
        <td>Toilet paper Holder</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Soap Stand</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Towel Road</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Mirror</td>
        <td>Starts at Rs. 130</td>
    </tr>
	<tr>
    	<th>Other Plumbing Work</th>
    	<th>Upon Inspection</th>
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
										

<table class="data-table table table-stripped">
    <tr>
        <td>Commode(Close Coupled)</td>
        <td>400</td>
    </tr>
    <tr>
        <td>Commode(Wall Hanging)</td>
        <td>500</td>
    </tr>
    <tr>
        <td>Toilet Jet</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Bath Tub</td>
        <td>Starts at Rs. 600</td>
    </tr>
    <tr>
        <td>Wall Shower</td>
        <td>130</td>
    </tr>
    <tr>
        <td>Wash Basin</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Sink Leakage</td>
        <td>400</td>
    </tr>
    <tr>
        <td>Toilet paper Holder</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Soap Stand</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Towel Road</td>
        <td>100</td>
    </tr>
</table>
										<div class="rate_text" id="rate_text">Minimum Service charges will be Rs 200 This will be adjusted in the billing amount.</div>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1.  Which type of Plumbing services do you provide? </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : We provide all the plumbing services directly related to your home, office, school, building etc. as per mentioned in rate card.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What are the Plumbing charges?</a>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. Who will serve you??</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : •	Trained and certified Plumbers
                            <br>•	Background verified staff
        
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. How will I know the serviceman is charging me correctly?</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : We have a standard rate card for the services on website and app. You can cross check the proceedings.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q5. How much advance will I have to pay in case the work requires more than one visit?</a>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q6. Any other charges apart from services and inspection charges? </a>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q7. Any warranty for the services?</a>
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
                            Ans :Please do not entertain any request from the serviceman or encourage them to provide services directly to customers without registering call with HomBuilt.com. In case you do so, HomBuilt.com will not take any responsibility and/or liability for such services or loss, if any caused to the customers.
                        </div>
                    </div>
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
                        <div class="profile-circle" style="background-image: url('images/test/Anish_chaudhary.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>I utilized plumber services of HomBuilt.com and handyman made a decent showing with regards to likewise cost were moderate. The best part about them was that they were talented and I never needed to direct the handyman on any event.</p>
				    		
				    	</blockquote>	
				    	By: Anish chaudhary
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Anshu_chawdhary.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>We had a leak at our washer carrier vicinity and two days before last. HomBuilt.com team set new valves and actually had to come lower back because the leak continued but their persistence and professionalism solved our hassle.</p>
				    		
				    	</blockquote>
				    	By: Anshu chawdhary
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Nand_kishore.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Accurate Plumbing is one of the most professional and excellent-pushed corporations with whom i've had the satisfaction to do commercial enterprise. From the initial request for an estimate, to having the leak in my basement repaired, i wasimpressed with the wonderful carrier and courtesy I obtained.</p>
				    		
				    	</blockquote>
				    	By: Nand kishore
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Pathik_chamaria.jpg');background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Brief carrier, respectable expenses. They have been attentive to the plumbing issues and labored speedy to resolve my troubles. Would refer them.</p>
				    		
				    	</blockquote>
				    	By:  Pathik chamaria
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
							Call us now to get assisted by our team of exceptionally talented and dedicated hardworking plumbers. Book plumber services online from hombuilt.com and get best solution from our administration that will help you to resolve problems like hole discovery and repair, fixing of pipe and repairing, adding or subtracting taps and many more. Get best plumbing services in delhi, jaipur, gurgaon, noida, Dehradun, pune and many more cities. For emergency plumbing , get experts for pipe fitting, lavatory plumbing arrangements, floor trap cleaning, shower repair and many more at hombuilt.com plumbing solutions. Best plumbing services are available at your door steps. Book  now to hire an expert from hombuilt.com. You are a call away from getting a perfect solution for all your plumbing problems.
						</div>
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
