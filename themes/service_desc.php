<!doctype html>
<html>

<head>
	<link rel="stylesheet" href="themes/Files/css/service_desc.css">
	
    <?php include 'Include/Head.php';?>
<title>Service Description</title>

<style>
/*
.form-group.custom_date_time_group .input-group {
    display: inline-block;
    float: left;
}

.form-group.custom_date_time_group .form-control {
    padding-left: 3px;
    padding-right: 0;
}

.form-group.custom_date_time_group .input-group span.input-group-addon {
    top: 0;
    position: absolute;
    right: 0;
    z-index: 9999;
    border-radius: 0;
    width: 40px;
    height: 33px;
}*/

</style>


</head>

<body>

    <div id="main_container">

        <?php include 'Include/Header.php';?>

        <div id="content">
            <h1><br></h1>
            <h1><br></h1>


            <!--          Do Not edit Above Page        -->

            <!-- Page section -->

			<div class="tab-content-group ">
			<div class="container">
			<!--Tab Panel-->
			<div class="tabbable custom-tabs tabs-left col-md-offset-1 tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll row">
			<ul class="nav nav-tabs col-md-3 col-xs-12">
				<li class="active"><a href="#panel1" data-toggle="tab" class="active "><i class="fa fa-Service"></i>&nbsp;<span>Book Service</span></a></li>
				<li><a href="#panel2" data-toggle="tab"><i class="fa fa-book"></i>&nbsp;<span>Rate Card</span></a></li>
			</ul>
			<div class="tab-content col-md-8 col-xs-12">
			<!--Tab Panel 1-->
				<div class="tab-pane active" id="panel1">
					<div class="row">
						<!--Col 1-->
						<div class="col-md-6 col-xs-12">
						<h3>Details</h3>
							<form class="form-horizontal" id="contact_form">
								<fieldset>
									<!-- Form Name -->


									<!-- Text input-->

									<div class="form-group">

										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input name="first_name" placeholder="Name" class="form-control" type="text">
											</div>
										</div>
									</div>


							  
									<!-- Text input-->
									<div class="form-group">

										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
												<input name="email" placeholder="E-Mail Address" class="form-control" type="text">
											</div>
										</div>
									</div>


									<!-- Text input-->

									<div class="form-group">

										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												<input name="phone" placeholder="xxxx-xx-xxxx" class="form-control" type="text">
											</div>
										</div>
									</div>

									<!-- Text input-->

									<div class="form-group">

										<div class="col-md-12 inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
												<textarea class="form-control" name="Address" placeholder="Address"></textarea>
											</div>
										</div>
									</div>

									<div class="form-group">

										<div class="col-md-12">
											<p class="text-primary">story to establish your credibility on this topic.</p>

										</div>
									</div>

								</fieldset>
							</form>
						</div>
						<!--Col 2-->
						<div class="col-md-6">
						<h3>Select Service</h3>
							
							<button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#Choose_Service_1"><i class="fa fa-expand" aria-hidden="true"></i> Choose Service</button>
							
							<div class="form-group custom_date_time_group">

									<div class="input-group col-xs-12">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<input name="Date" placeholder="Select Date" class="form-control" type="date">
									</div>
									
									<div class="input-group bootstrap-timepicker timepicker  col-xs-12">
										<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
										<select class="form-control ui-timepicker-optionst">
											<option class="ui-timepicker-am" value="12:00am">12:00am</option>
											<option class="ui-timepicker-am" value="12:30am">12:30am</option>
											<option class="ui-timepicker-am" value="1:00am">1:00am</option>
											<option class="ui-timepicker-am" value="1:30am">1:30am</option>
											<option class="ui-timepicker-am" value="2:00am">2:00am</option>
											<option class="ui-timepicker-am" value="2:30am">2:30am</option>
											<option class="ui-timepicker-am" value="3:00am">3:00am</option>
											<option class="ui-timepicker-am" value="3:30am">3:30am</option>
											<option class="ui-timepicker-am" value="4:00am">4:00am</option>
											<option class="ui-timepicker-am" value="4:30am">4:30am</option>
											<option class="ui-timepicker-am" value="5:00am">5:00am</option>
											<option class="ui-timepicker-am" value="5:30am">5:30am</option>
											<option class="ui-timepicker-am" value="6:00am">6:00am</option>
											<option class="ui-timepicker-am" value="6:30am">6:30am</option>
											<option class="ui-timepicker-am" value="7:00am">7:00am</option>
											<option class="ui-timepicker-am" value="7:30am">7:30am</option>
											<option class="ui-timepicker-am" value="8:00am">8:00am</option>
											<option class="ui-timepicker-am" value="8:30am">8:30am</option>
											<option class="ui-timepicker-am" value="9:00am">9:00am</option>
											<option class="ui-timepicker-am" value="9:30am">9:30am</option>
											<option class="ui-timepicker-am" value="10:00am">10:00am</option>
											<option class="ui-timepicker-am" value="10:30am">10:30am</option>
											<option class="ui-timepicker-am" value="11:00am">11:00am</option>
											<option class="ui-timepicker-am" value="11:30am">11:30am</option>
											<option class="ui-timepicker-pm selected" value="">12:00pm</option>
											<option class="ui-timepicker-pm" value="">12:30pm</option>
											<option class="ui-timepicker-pm" value="">1:00pm</option>
											<option class="ui-timepicker-pm" value="">1:30pm</option>
											<option class="ui-timepicker-pm" value="">2:00pm</option>
											<option class="ui-timepicker-pm" value="">2:30pm</option>
											<option class="ui-timepicker-pm" value="">3:00pm</option>
											<option class="ui-timepicker-pm" value="">3:30pm</option>
											<option class="ui-timepicker-pm" value="">4:00pm</option>
											<option class="ui-timepicker-pm" value="">4:30pm</option>
											<option class="ui-timepicker-pm" value="">5:00pm</option>
											<option class="ui-timepicker-pm" value="">5:30pm</option>
											<option class="ui-timepicker-pm" value="">6:00pm</option>
											<option class="ui-timepicker-pm" value="">6:30pm</option>
											<option class="ui-timepicker-pm" value="">7:00pm</option>
											<option class="ui-timepicker-pm" value="">7:30pm</option>
											<option class="ui-timepicker-pm" value="">8:00pm</option>
											<option class="ui-timepicker-pm" value="">8:30pm</option>
											<option class="ui-timepicker-pm" value="">9:00pm</option>
											<option class="ui-timepicker-pm" value="">9:30pm</option>
											<option class="ui-timepicker-pm" value="">10:00pm</option>
											<option class="ui-timepicker-pm" value="">10:30pm</option>
											<option class="ui-timepicker-pm" value="">11:00pm</option>
											<option class="ui-timepicker-pm" value="">11:30pm</option>
										</select>
									</div>
							</div>
							
							<textarea class="form-control" placeholder="Additional Information"></textarea>
							<br>
							<a href="checkout.php" class="btn btn-success btn-block">Proceed</a>

 <!-- Modal -->

	  <div class="modal fade" id="Choose_Service_1" role="dialog">

		<div class="modal-dialog">

		

		  <!-- Modal content-->

		  <div class="modal-content">

			<div class="modal-header" style="padding:35px 50px;">

			  <button type="button" class="close" data-dismiss="modal">&times;</button>

			  <h4><span class="glyphicon glyphicon-lock"></span>Choose Service from Plumber</h4>

			</div>

			

			<!--Pop Up content | Product Description-->

			<div class="modal-body" style="padding:40px 50px;">

				
				<div class="panel with-nav-tabs panel-info">

						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#book_pop_tab_1_info" data-toggle="tab">Installation/Removal </a></li>
								<li><a href="#book_pop_tab_2_info" data-toggle="tab">Repair</a></li>
							</ul>
						</div>

						<div class="panel-body">
							<div class="tab-content">
								<!--Tab 1 Content-->
								<div class="tab-pane fade in active" id="book_pop_tab_1_info">
									<div class="rate_tab_pane_inner">
																				
										<div class="items_select">
											<div class="row">
												<div class="col-sm-8">
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
															</button>
														</span>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="rate_text" id="rate_text">Involves standard installation/removal work. </div>
									
								</div>
								
								<!--Tab 2 Content-->
								<div class="tab-pane fade" id="book_pop_tab_2_info">
								
									<div class="rate_tab_pane_inner">
										
										
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-8">
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
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
													<h3><input type="checkbox" name="vehicle" value="Car"> MCB</h3>
													
												</div>
												
												<div class="col-sm-4">
													<div class="input-group pull-right">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
															  <span class="glyphicon glyphicon-minus"></span>
															</button>
														</span>
														
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
														
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
																<span class="glyphicon glyphicon-plus"></span>
															</button>
														</span>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								<div class="rate_text" id="rate_text">Involves standard repair work.</div>
								</div>
								
								<!--Tab 2 Content End-->
							</div>
						</div>
						
						
						
					</div>



			</div>

			

			<!--Pop Up content | Buy Now button-->

			<div class="modal-footer">

			  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Cancel <span class="glyphicon glyphicon-remove"></span> </button>

			  

			  <a type="submit" href="#" class="btn btn-success btn-primary pull-left" >Book Now <span class="glyphicon glyphicon-ok"></span></a>

			  

			</div>

			

		  </div>

		  

		</div>

	  </div> 

<!-- Modal Pop up End | Product-->


						</div><!--Col 2 End-->
						
					
					</div>
				</div><!--Tab Panel 1 End-->
				
				<!--Tab Panel 2-->
				<div class="tab-pane" id="panel2">
					<div class="row">
						<div class="col-md-12">
						
						<div class="panel with-nav-tabs panel-info">

						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Installation/Removal </a></li>
								<li><a href="#rate_tab_2_info" data-toggle="tab">Repair</a></li>
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
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Ceiling Fan</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 100</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Wall Mounted Fan</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 150</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Exhaust Fan</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 100</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Tube Light </h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 100</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Fancy Light</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 200</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Home Theatre</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 400</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Switch, Socket, Bulb Holder</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 50</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Door bell</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 200</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Electric chimney for kitchen</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 300</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Cooler</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 200</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Wall mounted LCD/LED Television - small (upto 30")</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 300</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Wall mounted LCD/LED Television - medium (31" to 44")</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 500</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Wall mounted LCD/LED Television - large (45" to 60")</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 700</h2>
												</div>
											</div>
										</div>
										<div class="rate_text" id="rate_text">Involves standard installation/removal work. </div>
									</div>
								</div>
								
								<!--Tab 2 Content-->
								<div class="tab-pane fade" id="rate_tab_2_info">
								
									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Repair </h4>
											<div class="clear"> </div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Servicing of Fan</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 100</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Tube Light/Fancy Light</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 100</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Switch/Socket Replacement</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 50</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Main Circuit Panel/Meter board</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 200</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>Changeover switch</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 150</h2>
												</div>
											</div>
										</div>
										<div class="items_select">
											<div class="row">
												<div class="col-md-7">
													<h3>MCB</h3>
													<p></p>
												</div>
												<div class="col-md-5">
													<h2><i class="fa fa-inr"></i> 150</h2>
												</div>
											</div>
										</div>
										<div class="rate_text" id="rate_text">Involves standard repair work.</div>
									</div>
								
								</div>
								
								<!--Tab 2 Content End-->
							</div>
						</div>
					</div>
						
						
						</div>						
					</div>
				</div><!--Tab Panel 2 End-->
			</div>

			</div><!--Tab Panel End-->

			</div><!--tab container End-->
			
			</div><!--Tab group End-->
			
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q.  Would buying a Service be better than going in for an LCD / LED TV? Is it bright enough to replace TV and could it be used for 5-7 hours a day? </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : PLAY Services are replacing TV sets in many homes as they deliver a true home theater experience. This is bright
                            enough to work in 1 to 2 tube light condition and can run continuously for 12 hours for over
                            20 years
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q. Why are LED fast replacing lamps in Services, what are its advantages</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : A. Replacement Free - Life long Lamp – LED has life of over 30,000 hours as compared to 3000 to 4000 hrs of normal
                            UHP lamp used in Services. Meaning that you can enjoy watching your favorite movies or TV shows
                            every day for 4 to 5 hrs for up to 20 years without worrying about costly lamp replacement (70%
                            cost of Service).

                            <br><br> B. Green Technology - Low Power – LEDs are mercury free and consumes half or less power
                            compare to traditional Lamp Services.
                            <br><br> C. Constant Brightness – The brightness of LED does not decrease with its usages or
                            passing months as there is no filament burning as in lamp Services who decrease in brightness
                            with every single use. LEDs remain nearly constant for its entire life span, meaning the day
                            it is today it may be similarly bright even after a decade.
                            <br><br> D. Low Cost – not only PLAY Services are half the price of competitive products, the
                            LED lamp if at all needed to be changed is also cheaper than its counterpart and may cost around
                            5k to 6k only.
                            <br><br> E. Eye – Vision friendly – If you have kids at home, it is imperative that you immediately
                            switch to Services from LCD/LED TV. As LED TV are very harmful for eyes as you are directly
                            looking into the brightest technology i.e. LED. However in case of Services you are actually
                            looking at only a reflection on wall or on a fabric screen without any radiation or light source.
                            <br><br> F. Cool Technology - Instant switch on/off – LEDs are much cooler technology and hence
                            do not require to wait to switch on again while the lamp is still hot. All PLAY Services are
                            equipped with instant on /off . Meaning that it is THE technology for India , where in power
                            cuts are frequent and in case of a power cut the lamp will not get damaged as in other Lamp Services
                            in absence of internal fan abruptly switching off due to power cut.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q. But then why PLAY Services?</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : A. E-Core -Most of the other Service manufacturers are from western countries having low heat and dust environment
                            and virtually no power cut. However PLAY Service with E-Core technology is fitted with the
                            3 MOST important thing needed for this country. 1. Cool Technology of LED 2. Dust Proof E-Core
                            Engine & 3. Instant on/off avoiding lamp damage in power cut situations.
                            <br> <br> B. Connectivity / interface – Undoubtedly PLAY comes with most of the interface ports
                            seen in Services in this range. You name it and we have it from USB, HDMI, TV, Video, VGA etc.
                            This is because we have designed it to fit both Home and Office unlike others for office use
                            only.
                            <br><br> C. Custom Warranty –with warranty centre at your home country you have absolute peace
                            of mind in case it goes wrong. What more you can design your own warranty, yes just choose the
                            tenure you like to have.
                            <br><br> D. Screen Size : with Screen size of up to 200 inches(diagonally) or more than 15 feet
                            (depending on models that you choose) why would you still settle for a TV.
                            <br><br> E. HD – irrespective of the model that you buy all supports up to HD 1080 input.
                            <br><br> F. Pricing -And of course the icing on the cake is it’s PRICING.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q. Why are PLAY products half the price of any other LED Service? </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : PLAY’s global vision is to be leader in projection technology and deliver the best LED-based Services at the most
                            affordable price. In many countries PLAY is already price leader in its segment. This is also
                            due to huge volume production on a state-of –the-art assembly line.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q. Why is PLAY Service slightly bigger than DLP or 3 LCD and LCOS? </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : DLP and/or LCOS use 1” or lesser size LCD while PLAY uses 3.5, 5 and 5.8” LCD to deliver true color & motion representation
                            needed for cinema viewing . These other competing technologies were designed for office slide
                            presentations, and so have inherent problem of fast motion image freezing for seconds because
                            of small LCD size/FPS & rainbow effects, however these problem are not there in PLAY Services
                            due to its large size of LCDs.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q. Why do PLAY Services have multiple ports and USB slots, while other brands don’t even have even one USB? What formats can be played through USB ? </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : PLAY Services provides multiple ports & USB so that you can connect horde of your electronic gadgets from set top
                            box, DVD, Blue ray, game console phone etc and also have the option of using pen drive and/or
                            HDD with your favorite content eliminating the need of a media player or PC. PLAY USB plays almost
                            all media formats. (Please see the list on specification page)
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q. Can we connect TV signal to PLAY Service?</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Yes all digital signals can be input to PLAY Service. Any set-top box having AV Out or HDMI can be connected e.g
                            TATA SKY, DISH TV, AIRTEL, etc .
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Q. Do I need still need  to have a computer if I buy the wifi model. How does it work.</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans :You may not require a PC. The wifi model comes with inbuilt CPU, ram, storage, Operating System & Lan/wifi connectivity.
                            So just switch on your internet modem and connect it through wifi / Lan and you are ON net. Use
                            your remote as mouse or connect any external mouse/keyboard if you so desire. The android OS
                            allows you to browse net, chat with friends, open office documents, open mails and download just
                            the way you do with your PC, tablet or smart phone.
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


<!-------------------------Testimonial---------------------->

<div name="blog" id="blog" class="container">

<h1><br /></h1>

    <div class="row">
        <h1>Testimonials</h1><br>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-lg-6 blog-bg plr-0">
            <div class="col-lg-4 text-center">
                <br>
                <p><img src="themes/Files/Images/mar-17/t1.png" class="img img-circle img-responsive"></p>
                <h4>Shekhar Gupta</h4>
                <h5>Gurgaon.</h5>
            </div>
            <div class="col-lg-8 blog-content text-left">
                <h2>Great Product</h2>
                <p>Very Great Product. The quality of the output is very good, clear, great throw distance. 4500 lumens is more then enough for our conference rooms, which have really bright new florescent lighting with  ...</p>

                <br>
            </div>
        </div>
        <!-- /col -->

        <div class="col-lg-6 blog-bg  plr-0">
            <div class="col-lg-4 text-center">

                <br>

                <p><img src="themes/Files/Images/mar-17/t2.png" class="img img-circle img-responsive"></p>

                <h4>Jyoti Rathi</h4>

                <h5>New Delhi</h5>

            </div>

            <div class="col-lg-8 blog-content text-left">

                <h2>Best in class</h2>

                <p>Very Great Product. The quality of the output is very good, clear, great throw distance. 4500 lumens is more then enough for our conference rooms, which have really bright new florescent lighting with  ...</p>

                <br>

            </div>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>

<!----------------------Testimonial End-------------->

<!----------------------Review-------------->

<div class="review-box">
<h1><br /></h1>
    <div class="container">
	
        <div class="row">
		
		<h1>Awesome Review</h1><br>
            <div class="col-md-6">

				<iframe width="100%" height="300" src="https://www.youtube.com/embed/JoSefuAQCMQ" frameborder="0" allowfullscreen></iframe>

            </div>

            <div class="col-md-6">

				<iframe width="100%" height="300" src="https://www.youtube.com/embed/JoSefuAQCMQ" frameborder="0" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</div>
			
			
			
			

            <!-- Page section End-->

            <!--       Do Not edit below Page     -->

        </div>
        <!-- content -->


        <?php include 'Include/Footer.php';?>
		
		
		<script type="text/javascript">
        </script>
		
		<script>
			$(document).ready(function(){

				var quantitiy=0;
				   $('.quantity-right-plus').click(function(e){
						
						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($(this).parent().siblings('#quantity').val());
						
						// If is not undefined
							
							$(this).parent().siblings('#quantity').val(quantity + 1);

						  
							// Increment
						
					});

					 $('.quantity-left-minus').click(function(e){
						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($(this).parent().siblings('#quantity').val());
						
						// If is not undefined
					  
							// Increment
							if(quantity>0){
							$(this).parent().siblings('#quantity').val(quantity - 1);
							}
					});
					
				});
			</script>
        
    </div>
    <!-- main content -->

</body>

</html>