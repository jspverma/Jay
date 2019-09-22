<?php
error_reporting(0);
include('inc/db.php');
include 'solarService.php';
include 'personalDetails.php';

$url="solar-planting.php";
$price=1000;
        
if(isset($_POST['submi'])){
session_start();
$checkbox1=$_POST['what'];

$architecture=$_POST['where'];
$need=$_POST['need'];
$des=$_post['bill'];
$email=$_SESSION['email'];
$Date=$_POST['Date'];
$time=$_POST['time'];
    $bdate=date("Y-m-d");
    date_default_timezone_set("asia/kolkata");
    $btime=date("h:i:sa");
    $bookingID=time();
$status=$_POST['status'];

$val="";
$rval="";
$nval="";
$dval="";
for($i=0; $i<count($checkbox1); $i++){
    $val=$checkbox1[$i].",".$val;
}

for($i=0; $i<count($architecture); $i++){
    $rval=$architecture[$i].",".$rval;
}
for($i=0; $i<count($need); $i++){
    $nval=$need[$i].",".$nval;
}
for($i=0; $i<count($des); $i++){
    $dval=$des[$i].",".$dval;
}
$service=$rval.$val.$nval.$dval;
    if(empty($_SESSION['name']))


     {
                header('Location:login-sign.php?service='.$service.'&url='.$url.'&date='.$Date.'&time='.$time.'&price='.$price);
    }else
    {
       header('Location:checkout.php?service='.$service.'&total='.$total.'&qty='.$qtyPro.'&date='.$Date.'&time='
    			.$time.'&price='.$price.'&url='.$url);
       
    }




}
?>
	<!doctype html>
	<html>

	<head>
		<title>Solar panel installation services| Rooftop installation– Hombuilt.com</title>
		<meta name="keywords" content="Solar planting, Solar planting services, Solar planting in jaipur, Solar planting in dehradun, Solar planting in gurgaon, Solar planting in noida, Solar planting in Delhi." />
		<meta name="description" content="Hombuilt.com  have best solution & construction of Solar panel installation services in India. If you want to install solar panel, go to our website and do easily." />
		<link rel="stylesheet" href="themes/Files/css/service_desc.css">

		<?php include 'inc/head.php';?>


		<style>
			.panel.with-nav-tabs.panel-info form.form-default.form {
				padding: 20px 20px;
			}
			
			.panel.with-nav-tabs.panel-info form.form-default.form label.radio-inline {
				margin-left: 0;
				margin-right: 10px;
				margin-bottom: 5px;
				margin-top: 4px;
			}
			
			.panel.with-nav-tabs.panel-info form.form-default.form {
				min-height: 150px;
			}
			
			.tab-content-group {
				background-image: url(themes/Files/Images/banner/solar-min.jpg);
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
								<li class="active"><a href="#panel1" data-toggle="tab" class="active " style="border:none;"><i class="fa fa-shopping-cart"></i>&nbsp;<span>Book Service</span></a></li>
							</ul>
							<div class="tab-content col-md-8 col-xs-12">
								<!--Tab Panel 1-->
								<div class="tab-pane active" id="panel1">
									<form method="post">
									<div class="row">

										<!--Col 1-->
										<div class="col-md-12 col-xs-12">
											<h3 id="heading">Book Solar Planting Service</h3>

											<div class="panel with-nav-tabs panel-info" style="padding: 20px;height: 300px;overflow-x: hidden;overflow-y: scroll;">

												<form class="form-default form">
													<fieldset>

														<!-- Multiple radios (inline) -->
														<div class="form-group">
															<label class="control-label" for="What are you looking for">What are you looking for ?</label>
															<div class="">
																<label class="radio-inline" for="What you want to avail for-0">
					  <input type="radio" name="what[]" id="What you want to avail for-0" value="Residential">
					  Residential
					</label>
																<label class="radio-inline" for="What you want to avail for-1">
					  <input type="radio" name="what[]" id="What you want to avail for-1" value="Commercial">
					  Commercial
					</label>
																<label class="radio-inline" for="What you want to avail for-2">
					  <input type="radio" name="what[]" id="What you want to avail for-2" value="Industrial">
					  Industrial
					</label>
															</div>
														</div>

														<!-- Multiple radios (inline) -->
														<div class="form-group">
															<label class="control-label" for="requirements">Where do you want to Plant Solar Panels ?</label>
															<div class="">
																<label class="radio-inline" for="What you want to avail for-01">
					  <input type="radio" name="where[]" id="What you want to avail for-01" value="Rooftop">
					  Rooftop
					</label>
																<label class="radio-inline" for="What you want to avail for-11">
					  <input type="radio" name="where[]" id="What you want to avail for-11" value="Land">
					  Land
					</label>
															</div>
														</div>

														<!-- Multiple radios (inline) -->
														<div class="form-group">
															<label class="control-label" for="Service You Need">Space of your Premises</label>
															<div class="">
																<label class="radio-inline" for="Service You Need-0">
					  <input type="radio" name="need[]" id="Service You Need-0" value="Less than 1000 sq. ft.">Less than 1000 sq. ft.</label>
																<label class="radio-inline" for="Service You Need-1">
					  <input type="radio" name="need[]" id="Service You Need-1" value="1000-2500 sq. ft.">1000-2500 sq. ft.</label>
																<label class="radio-inline" for="Service You Need-2" style="margin-left: 0.5px;">
					  <input type="radio" name="need[]" id="Service You Need-2" value="More than 2500 sq. ft.">More than 2500 sq. ft.</label>
															</div>
														</div>

														<!-- Multiple radios (inline) -->
														<div class="form-group">
															<label class="control-label" for="Service You Need">Your Monthly Electricity Bill (in Rs.)</label>
															<div class="">
																<label class="radio-inline" for="Service You Need-01">
					  <input type="radio" name="bill[]" id="Service You Need-01" value="Less than 10000">Less than 10000</label>
																<label class="radio-inline" for="Service You Need-11">
					  <input type="radio" name="bill[]" id="Service You Need-11" value="10000-50000">10000-50000</label>
																<label class="radio-inline" for="Service You Need-21" style="margin-left: 1.6px;">
					  <input type="radio" name="bill[]" id="Service You Need-21" value="More than 50000">More than 50000</label>
															</div>
														</div>

														<!-- Textarea -->
														<div class="form-group">
															<label class=" control-label" for="Describe Your Project">Other Requirements</label>
															<div class="">
																<textarea class="form-control" id="Describe Your Project" name="Describe Your Project"></textarea>
															</div>
														</div>

													</fieldset>
												</form>
												<div class="rate_text" id="rate_text">Note: Charges will be decided upon inspection.</div>
											</div>

											<div class="panel-footer" style="border-top: none; padding: 0px 0px;">

												<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input name="Date" placeholder="Select Date" class="form-control" type="date" required="">
												</div>


                                                <div class="input-group col-md-4 bootstrap-timepicker timepicker" style="float: left; margin-top: 0px; margin-right: 5px;">
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

												<a href="#"><input type="submit" name="submi" class="btn btn-success btn-primary pull-left" value="Book Now" style="float: right !important;"></a>

											</div>

										</div>

									</div>
									</form>
								</div>

								<!--Tab Panel 1 End-->

								<div class="tab-pane" id="panel2">
									<div class="row">
										<div class="col-md-12">

											<div class="panel with-nav-tabs panel-info">

												<div class="panel-heading">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Installation/Removal </a></li>
														<!--<li><a href="#rate_tab_2_info" data-toggle="tab">Repair</a></li>-->
													</ul>
												</div>

												<div class="panel-body">
													<div class="tab-content">
														<!--Tab 1 Content-->
														<div class="tab-pane fade in active" id="rate_tab_1_info">
															<div class="rate_tab_pane_inner">
																<div class="items_title">
																	<h4 id="items_title">Installation/Removal </h4>
																	<div class="clear"> </div>
																</div>

																<table class="table table-stripped">
																	<tr>
																		<td>Roof top installation</td>
																		<td>Upon Inspection</td>
																	</tr>
																</table>
															</div>

														</div>

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
					<h1 style="text-align:center;">Frequently Asked Question</h1>
					<br>
<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1. What is a Solar Rooftop System?

 </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : In a solar rooftop system, the solar panels are installed in the roof of any residential, commercial, institutional and industrial buildings. This can be of two types (i) Solar Rooftop System with storage facility using battery, and (ii) Grid Connected Solar Rooftop System.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What is a Solar Rooftop System with Storage facility? 

</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Such rooftop system has battery as storage facility. The solar electricity is stored in the battery and can be utilized during night also when the sun is not available. 
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. What is a Grid Connected Solar Rooftop System? 

</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : In grid connected rooftop or small SPV system, the DC power generated from SPV panel is converted to AC power using power conditioning unit and is fed to the grid either of 33 kV/11 kV three phase lines or of 440/220 Volt three/single phase line depending on the capacity of the system installed at institution/commercial establishment or residential complex and the regulatory framework specified for respective States.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. Where such plants can be installed?

 </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Such rooftop systems can be installed at the roofs of residential and commercial complex, housing societies, community centers, government organizations, private institutions etc.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q5. . How much do I have to invest for a Solar PV Rooftop System?

</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : The cost of a Solar PV Rooftop Setup depends on many factors such as the connected load, type and quality of the components used in the system, total available roof area etc. As an estimate a grid connected solar PV System with Grade A manufacturer’s components costs around Rs. 1 Lac per KW while a battery connected system costs around Rs. 1.25 Lacs per KW.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q6. If I invest in a Solar Rooftop Setup, in how much time will I make my money back?


 </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : In a Solar Rooftop System, the major investment is its installation cost and has a minimal maintenance cost and no fuel cost. A 5 KW Solar PV System has average pay back period of approximately 4 to 5 years. With the life span of a PV System as high as 20 to 25 years 70 to 75% power produced by it may be considered as the free electricity.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q7. How much Roof Top Area do I require to install a Solar PV System?

</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : It is mandatory for a Solar PV Setup to have a shade free area all the time of the day. The most important factor on which the area of a Solar PV System depends is the Panel Efficiency. Generally, a Solar Panel with 15% efficiency requires 100 Sq. Ft. of shade free roof area. While a Panel with 12% efficiency needs approximately 125 Sq. Ft. of shade free roof area. Another factor is the weight of the Solar Panels that may put pressure on the roof of the building. For very old and poorly built buildings the Panels have to be scattered in a larger area so that the construction can withstand there weights.
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
									<li data-target="#fade-quote-carousel" data-slide-to="1" class="active"></li>
								

								</ol>
								<!-- Carousel items -->
								<div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Abhishek_arora.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>My decision to have solar panel in my house was great, one of the best decision of my life as it is helping me in saving resources and money. But major concern was installation and Hombuilt did that very well.</p>
				    	<br>
				    	By: Abhishek arora
	</blockquote>
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Anjali_kanojia.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>5 Times more electricity is been saved with the help of solar panel. Great work and designing from team Hombuilt.</p>
				    	<br>
				    	By: Anjali kanojia
  </blockquote>
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
						Power consumption is getting costly day by day as more population is growing rapidly. So we need to utilise some of the renewable resources given by nature to meet our needs and solar planting is one of the solution. Sunlight based P.V panel directly convert sun energy into electrical energy. Hombuult.com is having proficient group of solar panel installer who have broad experience and well executed framework that will help in your project. Rooftop installation is one of the major growing demands in urban areas especially nearby industrial units. As the demand of electricity is increasing, there is a need of resources which can directly impact the lives by saving our precious resources. Best way is to get solar panel installed on your rooftop. Call us to book an appointment. Consult and cover your terrace with rooftop solar panels.
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
