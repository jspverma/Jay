<?php
error_reporting(0);
include('inc/db.php');
include 'personalDetails.php';
include 'modularService.php';
/*if(empty($_SESSION['name'])){
    //echo "<script>alert('Login First');</script>";
    header('Location:login-sign.php');
}*/
if(isset($_POST['submi'])){
    if(empty($_SESSION['name'])){
        //echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php');
    }
    session_start();
    $checkbox1=$_POST['vehicle'];
 // print_r($checkbox1);die;
    //$architecture=$_POST['architecture'];
    //$need=$_POST['need'];
    //$des=$_post['des'];
    $email=$_SESSION['email'];
    $serviceID=$_POST['book_serviceID'];

    $price=1000;
    $Date=$_POST['Date'];
    $time=$_POST['time'];
    $bookingID=time();
    $status=$_POST['status'];
    $bdate=date("Y-m-d");
    date_default_timezone_set("asia/kolkata");
    $btime=date("h:i:sa");
    // $rval="";
    //$nval="";
    //$dval="";
    for($i=0; $i<count($checkbox1); $i++){
        $val=$checkbox1[$i].",".$val;
    }

    /*for($i=0; $i<count($architecture); $i++){
        $rval=$architecture[$i].",".$rval;
    }
    for($i=0; $i<count($need); $i++){
        $nval=$need[$i].",".$nval;
    }
    for($i=0; $i<count($des); $i++){
        $dval=$des[$i].",".$dval;
    }*/
    $service=$val;




    if(empty($_SESSION['name']))
    {
        $url="modular-kitchen.php";
        // echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php?id=' . $id . '&total=' . $total .'&url='.$url. '&qty=' . $qtyPro . '&service=' . $service . '&date=' . $Date . '&time=' . $time .'&st=' . $st.'&price=' . $price);
    }else {

        $url="modular-kitchen.php";

    header('Location:checkout.php?id=' . $id . '&total=' . $total .'&url='.$url. '&qty=' . $qtyPro . '&service=' . $service . '&date=' . $Date . '&time=' . $time .'&st=' . $st.'&price=' . $price);
//       $sql="INSERT INTO `hombura9_hombuilt`.`booking_tbl` (`id`, `booking_id`, `user_id (email)`, `service_id`, `service_name`, `quantity`, `price`, `total`, `service_type`, `booking_date`, `booking_time`, `delivery_date`, `delivery_time`, `status`) VALUES (NULL, '$bookingID', '$email', 'modular-kichen', '$ser', 'not defined', 'not defined', 'not defined', 'not defined', '$bdate', '$btime', '$Date', '$time', '1')";
//        $result=$mysqli->query($sql);
//        if ($result) {
//            echo "<script>alert('placed successfully');</script>";
//            echo "<script>window.location.href='index.php';</script>";
    //header('Location:index.php');
}




}


?>


<!doctype html>
	<html>

	<head>
		<title>Best Modular Kitchen design and installation services- Hombuilt.com  </title>
<meta name="keywords" content="Modular kitchen, kitchen renovation, indian style kitchen design, modular kitchen design, modular kitchen in jaipur, kitchen cabinets, modular furniture, modular kitchen in gurgaon, modular kitchen in noida, modular kitchen in Dehradun, modular kitchen in Delhi."/>
	<meta name="description" content="Best Modular kitchen designing services for redesigning your kitchen in Delhi. Deals in modular kitchen with modern techniques and equipment. Ready to fit kitchens available. Book now to renovate your kitchen."/>

		<link rel="stylesheet" href="themes/Files/css/service_desc.css">

		<?php include 'inc/head.php';?>


		<style>		
			.tab-content-group {
				background-image: url(themes/Files/Images/banner/Modular-min.jpg);
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
												<h3 id="heading">Book for Modular Kitchen</h3>
												
							<div class="panel with-nav-tabs panel-info">

								<div class="row">
									<div class="popup-panel-heading col-md-4 col-sm-12">
										<ul class="nav nav-tabs">
											<li class="active" style="width: 169px;"><a href="#book_pop_tab_1_info" data-toggle="tab">Choose Design</a></li>
										</ul>
									</div>
									
									<div class="panel-body col-md-8 col-sm-12">
										<div class="tab-content">
											<!--Tab 1 Content-->
											<div class="tab-pane fade in active" id="book_pop_tab_1_info">
									<div class="rate_tab_pane_inner">

                                        <?php
                                        $sql="select * from tbl_products where services='modular-kitchen'";
                                        $result=$mysqli->query($sql);
                                        $row=$result->fetch_assoc($result)
                                        ?>

   												<div class="items_select">
											<div class="row">
												<div class="col-sm-10">

													<h3>L shape</h3>
                                                    <input type="hidden" name="book_serviceID[]" value="<?php echo $row['id']; ?>">
													
												</div>
												
												<div class="col-sm-2">

													<input type="checkbox" name="vehicle[]" value="L shape">
												</div>
											</div>
										</div>
										
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">

													<h3> U shape</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="U shape">
												</div>
											</div>
										</div>
										
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3>Straight</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Straigh">
												</div>
											</div>
										</div>
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3>Island kitchen</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Island kitchen">
												</div>
											</div>
										</div>
										<div class="form-group" style="margin-top: 10px;">
				  <label class=" control-label" for="Describe Your Project">Explain your Requirements</label>
				  <div class="">                     
					<textarea class="form-control" id="Describe Your Project" name="Describe Your Project"></textarea>
				  </div>
				</div>
										
									</div>
									
									<div class="rate_text" id="rate_text"></div>
									
								</div>						
											
										</div>
									</div>
									
		</div>

		</div>		
					<div class="panel-footer" style="border-top: none; padding: 0px 0px;">
						
							<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="Date" placeholder="Select Date" class="form-control" type="date" required="">
							</div>


                        <div class="input-group col-md-4 bootstrap-timepicker timepicker" style="float: left; margin-top: 0px; margin-right: 5px;" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <select class="form-control ui-timepicker-optionst" name="time" required="">
                                <option class="ui-timepicker-am" value="0" name="time" required="">select time</option>
                                <option class="ui-timepicker-am" value="9:00-11:00 am" name="time">9:00-11:00 am</option>
                                <option class="ui-timepicker-pm" value="11:00-1:00 pm" name="time">11:00-1:00 pm</option>
                                <option class="ui-timepicker-pm" value="1:00-3:00 pm" name="time">1:00-3:00 pm</option>
                                <option class="ui-timepicker-pm" value="3:00-5:00 pm" name="time">3:00-5:00 pm</option>
                                <option class="ui-timepicker-pm" value="5:00-7:00 pm" name="time">5:00-7:00 pm</option>
                                <option class="ui-timepicker-pm" value="7:00-9:00 pm" name="time">7:00-9:00 pm</option>
                            </select>
                        </div>


                        <a href="#"><input type="submit" name = "submi" class="btn btn-success btn-primary pull-left" value ="Book Now" style="float: right !important;"></a>
							
					</div>

										</div>
											
			</div>
									</form>
								</div>
							
							<!--Tab Panel 1 End-->

							<!--Tab Panel 2-->
							<div class="tab-pane" id="panel2" style="height:346px;">
								<div class="row">

										<div class="panel with-nav-tabs panel-info">

											<div class="panel-heading">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Design your Kitchen</a></li>
												</ul>
											</div>

											<div class="panel-body">
												<div class="tab-content">
													<!--Tab 1 Content-->
													<div class="tab-pane fade in active" id="rate_tab_1_info">
														<div class="rate_tab_pane_inner">
															<div class="items_title">
																<h4 id="items_title">Choose your Shape</h4>
																<div class="clear"> </div>
															</div>

															<table class="table table-stripped">
    <tr>
        <td>L shape</td>
        <td>Upon Inspection</td>
    </tr>
    <tr>
        <td>u shape</td>
        <td>Upon Inspection</td>
    </tr>
    <tr>
        <td class="border-bottom">Straight</td>
        <td class="border-bottom">Upon Inspection</td>
    </tr>
    <tr>
        <td>Island kitchen</td>
        <td>Upon Inspection</td>
    </tr>
</table>
															<div class="rate_text" id="rate_text"></div>
														</div>
													</div>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1. Why Modular kitchen?

 </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : •	Modular kitchen gives a fresh and beautiful look and as it is build perfectly optimized area. It is developed with contemporary finishes which gives longer life to the kitchen and its accessories.Usually Life of a Modular Kitchen depends on the quality of the material you use on your kitchen. Ideally a Mid- Segment Kitchen.
                            <br/>
•	Installation and repairs can easily be done as each part of the kitchen module is separate which gives a perfect look. 
<br/>
•	Cleaning of modular kitchen is very easy and it takes very less time
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. Can you help with the design of my kitchen?

</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans :  Yes, We have a Team of Designers and architects working with us, who would design and develop your layout and provide you 3D drawings for your kitchen.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. What type of designs & material are available with Design Indian Kitchen in carcass and shutters?

</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : As Design Indian Kitchen as its own Industry, manufacturing kitchen cabinets and shutters. We provide carcass in marine ply, WPC, MDF, HDF & ply. We offer wide range of shutters in membrane, acrylic, post form, four side edge bend in high gloss & matt finish and designer range shutters.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. How can I get a modular kitchen designed as per my requirements?

</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Design depends on the space available and the personal choice of a consumer. If a kitchen area is spacious, a combination of all black with a hint of steel or aluminum looks beautiful. If homeowners want a kitchen to look bright and bask in natural light, then light colors is the way to go. The kitchen should not be located below a toilet or adjacent to it. It is inauspicious to have kitchen in the centre of a home. The stove should not be placed under the overhead beams. It is always advisable to use bright gorgeous colors like oranges, green, brown, bright yellow as this is the hot sector of home.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q5. What materials are your kitchen cabinets built from?

</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : The skeleton or the carcass of our kitchen cabinets can be built entirely from marine grade plywood–Boiling Water Resistant plywood, or a mix of marine grade plywood and HMR (High Moisture Resistance) pre-laminated particle board. Should you opt for the latter, we will use marine grade plywood for the wet areas of the kitchen, i.e., around the sink, and (HMR) PLPB for the dry areas.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q6. What are the services included?

 </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : We will take care of: <br/>
•	Electrical work (for installing lights in the glass-front cabinets, and lights under the wall unit. We will also shift and/ or create new electrical points if needed)<br/>
•	Minor civil work <br/>
•	Plumbing <br/>
•	Gas piping <br/>
•	Core cutting and ducting for chimneys <br/>
•	Granite removal (for kitchens with builder-provided slab) and installation<br/>
•	Minor paint work for services that require cutting, etc.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q7. Will I be charged for the consultation with your designer?

</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Yes, the fees will be charged by the experts that will be Rs 1000 for visiting and consultation. 
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Q8. What is the time frame required to install modular kitchen from Design India Kitchen ?
 
</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : First, we initiate with layout then 3D design is created & shared with the client(2 designs). The order will be placed from the day of advance receipt and confirmation of final drawings  Once order is processed in our Industrial Unit, we take about 12 Days to manufacture the material. In the meantime complete fittings and other necessary materials are landed on the customer site.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                 <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsenine">Q9.  What are the payment terms once I finalize my kitchen?


</a>
                        </h4>
                    </div>
                    <div id="collapsenine" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : An advance equal to 40% of the total amount is required to book your kitchen, 20% at the mid of the installation and design approval. The remaining 40% of the amount is due prior to the delivery of your kitchen.
                        </div>
                    </div>
                </div>
                

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
                        <div class="profile-circle" style="background-image: url('images/test/Gaurav_singh.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>We picked HomBuilt.com for its extraordinary offers and boundless selection. We gain fast ground with our new home on account of the effective and adaptable working style of Hombuilt Modular kitchen, has now turned into the best some portion of our fantasy home.
						
</p>
				    	</blockquote>	
				    		By: Gaurav singh
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Sankalp_aluwalia.jpgg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>The kitchen looks fabulous, even the fittings and equipment are great. I am prescribing a customer to HomBuilt and they may enquire following 10 days.
						
</p>
				    	</blockquote>
				    	By: Sankalp aluwalia
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/shubham.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>
I would recommend them since I am exceptionally content with the item. Remembering every one of the necessities and needs of my kitchen, HomBuilt has figured out how to oblige it appropriately, making productive utilization of all the accessible space.
						
</p>
				    	</blockquote>
				    	By: Shubham
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Tanya_kumar.jpg');background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>
I would like to recommend HomBuilt.com  because it was cost effective as compared to other brands. Also, I am satisfied with the product quality. 
							</p>
				    	</blockquote>
				    	By; Tanya kumar

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
							Kitchens are the best part of house to show-off. Better designed kitchen speaks the mind of the person living there. We are having solution for your kitchen with wide variety of modular kitchen that add crisp to your home. We outline the type and manufacture the kitchen on your requirements that intend to satisfy singular needs. Nowadays modular kitchen offer a range og outline driven components that can be easily fixed with not much time. We have a team to visualise your needs in the space provided. You can choose from wide variety of designs. Book now and get best solutions from hombuilt.com. hire a expert for modular kitchen services online or you can call us for more information. Our team will visit at your place with proper consultation.

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
