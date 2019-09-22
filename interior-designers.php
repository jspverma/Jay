<?php
error_reporting(0);
include('inc/db.php');
include 'personalDetails.php';
include 'interiorService.php';
/*if(empty($_SESSION['name'])){
    //echo "<script>alert('Login First');</script>";
    header('Location:login-sign.php');
}*/

$price=1000;
$url="interior-designers.php";
if(isset($_POST['submi'])){
    session_start();
    $checkbox1=$_POST['what'];
    $architecture=$_POST['require'];
    $need=$_POST['need'];
    $des=$_post['budget'];
    $email=$_SESSION['email'];
    $Date=$_POST['date'];
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
    //echo $service;die;
    if(empty($_SESSION['name'])) {
        $url="interior-designers.php";
        // echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php?service='.$service.'&url='.$url.'&date='.$Date.'&time='.$time.'&price='.$price);
    }
    else{

    	header('Location:checkout.php?service='.$service.'&total='.$total.'&qty='.$qtyPro.'&date='.$Date.'&time='
    			.$time.'&price='.$price.'&url='.$url);
    		

        


    }


    

}

?>
<!doctype html>
<html>

<head>
	<title> Best interior designer in india| Interior design consultation– Hombuilt.com </title>
<meta name="keywords" content="interior designer, interior, contemporary interior design, office interior design, interior designers
near me, bedroom interior designs, home interior décor, interior designer services, home design, interior designer in jaipur, interior designer in dehradun, interior designer in gurgaon, interior designer in nodia, interior designers in Delhi."/>
	<meta name="description" content="Book best interior designer for consultation. Available in Delhi ncr, Dehradun, Jaipur, Mumbai, Bangalore. Valuable and unique designs for your residence."/>
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
    background-image: url(themes/Files/Images/banner/interior-min.jpg);
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
												<h3 id="heading">Book an Interior Designer</h3>
												
							<div class="panel with-nav-tabs panel-info" style="padding: 20px;height: 300px;overflow-x: hidden;overflow-y: scroll;">

				<form class="form-default form">
				<fieldset>

				<!-- Multiple radios (inline) -->
				<div class="form-group">
				  <label class="control-label">What are you looking for ?</label>
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
					  <input type="radio" name="what[]" id="What you want to avail for-2" value="Office">
					  Office
					</label>
					<label class="radio-inline" for="What you want to avail for-3">
					  <input type="radio" name="what[]" id="What you want to avail for-3" value="Resturant">
					  Resturant
					</label>
				  </div>
				</div>

				<!-- Multiple checkboxes (inline) -->
				<div class="form-group">
				  <label class="control-label">Choose the requirements</label>
				  <div class="">
					<label class="checkbox-inline" for="requirements-0">
					  <input type="checkbox" name="require[]" id="requirements-0" value="Home Decor">
					  Home Decor
					</label>
					<label class="checkbox-inline" for="requirements-1">
					  <input type="checkbox" name="require[]" id="requirements-1" value="Design Consultant">
					  Design Consultant
					</label>
					<label class="checkbox-inline" for="requirements-2">
					  <input type="checkbox" name="require[]" id="requirements-2" value="Tiling and Flooring">
					  Tiling and Flooring
					</label>
					<label class="checkbox-inline" for="requirements-3" style="margin-left: 0px;">
					  <input type="checkbox" name="require[]" id="requirements-3" value="Wall Craft">
					  Wall Craft
					</label>
					<label class="checkbox-inline" for="requirements-4">
					  <input type="checkbox" name="require[]" id="requirements-4" value="Wall Designing">
					  Wall Designing
					</label>
					<label class="checkbox-inline" for="requirements-5">
					  <input type="checkbox" name="require[]" id="requirements-5" value="Home Makeover">
					  Home Makeover
					</label>
				  </div>
				</div>

				<!-- Multiple radios (inline) -->
				<div class="form-group">
				  <label class=" control-label">Space of your Premises</label>
				  <div class="">
					<label class="radio-inline" for="Service You Need-0">
					  <input type="radio" name="need[]" id="Service You Need-0" value="Less than 1000 sq. ft.">
					  Less than 1000 sq. ft.
					</label>
					<label class="radio-inline" for="Service You Need-1">
					  <input type="radio" name="need[]" id="Service You Need-1" value="1000-2500 sq. ft.">
					  1000-2500 sq. ft.
					</label>
					<label class="radio-inline" for="Service You Need-2" style="margin-left: 0.5px;">
					  <input type="radio" name="need[]" id="Service You Need-2" value="More than 2500 sq. ft.">
					  More than 2500 sq. ft.
					</label>
				  </div>
				</div>
					
					<!-- Multiple radios (inline) -->
				<div class="form-group">
				  <label class=" control-label">Budget</label>
				  <div class="">
					<label class="radio-inline" for="Budget-0">
					  <input type="radio" name="budget[]" id="Budget-0" value="Less than 2 lakhs">
					  Less than 2 lakhs
					</label>
					<label class="radio-inline" for="Budget-1">
					  <input type="radio" name="budget[]" id="Budget-1" value="2-10 lakhs">
					  2-10 lakhs
					</label>
					<label class="radio-inline" for="Budget-2">
					  <input type="radio" name="budget[]" id="Budget-2" value="More than 10 lakhs">
					  More than 10 lakhs
					</label>
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
					</div>
		
					<div class="panel-footer" style="border-top: none; padding: 0px 0px;">
						
							<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="date" placeholder="Select Date" class="form-control" type="date" required="">
							</div>


                        <div class="input-group col-md-4 bootstrap-timepicker timepicker" style="float: left; margin-top: 0px; margin-right: 5px;" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <select class="form-control ui-timepicker-optionst" name="time" required="">
                                <option class="ui-timepicker-am" value="0" name="time" required="">select time</option>
                                <option class="ui-timepicker-am" value="9:00-11:00 am" name="time" >9:00-11:00 am</option>
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
							<div class="tab-pane" id="panel2" style="height:390px;">
					<div class="row">
						<div class="col-md-12">
						
						<div class="panel with-nav-tabs panel-info">

						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Design </a></li>
								<li><a href="#rate_tab_2_info" data-toggle="tab">Décor</a></li>
								<li><a href="#rate_tab_3_info" data-toggle="tab">Renovate</a></li>
							</ul>
						</div>

						<div class="panel-body">
							<div class="tab-content">
								<!--Tab 1 Content-->
								<div class="tab-pane fade in active" id="rate_tab_1_info">

									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Design</h4>
											<div class="clear"> </div>
										</div>
										<table class="table table-stripped">
    <tr>
        <td>2D Drawing+ Furniture layout</td>
        <td>Start from Rs 7000</td>
    </tr>
    <tr>
        <td>3D rendering View</td>
        <td>Starts Rs 17000/ view</td>
    </tr>
    <tr>
        <td>False ceiling with supervision</td>
        <td>Starts Rs 250/sq.ft</td>
    </tr>

     <tr>
        <td>Custom Cabinets Designing</td>
        <td>Starts Rs 40/sq.ft</td>
    </tr>
     <tr>
        <td>Custom Wall Panels</td>
        <td>Starts Rs 42/sq.ft</td>
    </tr>
    <tr>
        <td>Wardrobe Designing</td>
        <td>Starts Rs 40/sq.ft</td>
    </tr>

     <tr>
        <td>Custom Homebars</td>
        <td>Starts Rs 62/sq.ft</td>
    </tr>
     <tr>
        <td>Open Kitchen Drawing</td>
        <td>Starts Rs 40/sq.ft</td>
    </tr>
     <tr>
        <td>Terrace Pergola Design</td>
        <td>Starts Rs 68/sq.ft</td>
    </tr>


</table>
										
									</div>


								</div>
								
								<!--Tab 2 Content-->
								<div class="tab-pane fade" id="rate_tab_2_info">
								
										<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Décor </h4>
											<div class="clear"> </div>
										</div>
										<table class="table table-stripped">
    <tr>
        <td>Colour Consultation</td>
        <td>Starts Rs 2500/visit</td>
    </tr>
    <tr>
        <td>Fengshui Installation</td>
        <td>Starts from Rs 6500</td>
    </tr>
    <tr>
        <td>Lightning Designs</td>
        <td>Starts from Rs 2500/visit</td>
    </tr>

     <tr>
        <td>Wall art</td>
        <td>Starts from Rs 125/sq.ft</td>
    </tr>
     <tr>
        <td>Travel wall designing</td>
        <td>Starts from Rs 52/sq.ft</td>
    </tr>
    <tr>
        <td>3D Designs</td>
        <td>Starts from Rs 17000</td>
    </tr>

</table>
										
									</div>

								
								
								</div>
								
								<!--Tab 2 Content End-->

								<div class="tab-pane fade" id="rate_tab_3_info">
									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Renovate </h4>
											<div class="clear"> </div>
										</div>
										<table class="table table-stripped">
    <tr>
        <td>Demolistion</td>
        <td>Starts from Rs 38/sq.ft</td>
    </tr>
    <tr>
        <td>Sketch plans</td>
        <td>Starts from Rs 6000</td>
    </tr>
    <tr>
        <td>Working plans</td>
        <td>Starts from Rs 6000</td>
    </tr>

     <tr>
        <td>Electrical Drawing</td>
        <td>Starts from Rs 4000</td>
    </tr>
     <tr>
        <td>Plumbing Drawings</td>
        <td>Starts from Rs 4000</td>
    </tr>
    <tr>
        <td>3D Designs</td>
        <td>Starts from Rs 17000</td>
    </tr>

</table>
										
									</div>


								
								
								</div>
								



<p>&nbsp;</p>

							</div>
						</div>
					</div>
						
						
						</div>						
					</div>
				</div>							<!--Tab Panel 2 End-->
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1.  When do I need an Interior Designer?

 </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Working with an Interior Designer will help you to move flawlessly and proficiently through the venture, and also help you counteract expensive slip-ups or evades en route.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What is your Fee Schedule?


</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Our fees are based off the scope of work and we charge a simple flat design fee when possible. However you need to pay Rs 1000 for consultation and visiting fees.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. What Kind of Projects Dreams Interior and Decoration Specialize in?

</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : We do Accept & have a Expertise in all kinds of Residential & Commercial Interior / Renovation Projects Like Apartments, Flats, Shops, Offices, Bungalows, Row houses, Villas, Hotels, Resort, Clinic, Etc.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. How long it will take to complete project?

 </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Our aim is to complete project within specified time and budget. It will require good communication between you and us.<br/>
500 sq ft – up to 45 Days<br/>
500 sq ft to 750 sq ft- up to 60 days<br/>
750sq ft to 1000 sq ft- up to 75 days<br/>
1000sq ft and above- up to 100 days<br/>
However, it will depend upon the client requirements for completion of project.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q5.Do i need to purchase and provide you my requirements?

 </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : No, we are having many design and furniture for your requirements, if you find them good we can include that in your services. Everything will be taken care by our team.
                        </div>
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
                        <div class="profile-circle" style="background-image: url('images/test/mathew.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>The room truly is splendid, fun and special, an exceptionally welcoming space to invest energy in. Much obliged to you for your inventive vision and execution. Your plan sense (shading, surface, and design) in the greater part of the rooms is phenomenal.
					
</p>
				    	</blockquote>	
				    	By: Kunal Garg
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Ranjan.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>The change of my house is all because of the genius of HomBuilt.com. They are anything but difficult to work with, was conscious to my spending necessities, has astounding associations with plan experts.
				
</p>
				    	</blockquote>
				    	By: Sahil Basin
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Salman.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Exceptionally recommended - I need to state I was somewhat terrified of having an Interior Designer. Not now after Hombuilt services.
						
</p>
				    	</blockquote>
				    	By: Sagar Khurana 
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Anshu.jpg');background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>HomBuilt.com beautified my lounge, family room and my girls' rooms. Each room has its own style, motivation and shading plan. They are master at blending textures, examples and hues to make complexity and wealth.
					
.</p>
				    	</blockquote>
				    	By: Yuvraj Yadav
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
							Designing is required in every field nowadays as it is playing major part in status symbol. Getting an interior designer hires is a basic approach for scintillating residential/commercial premises. Proficient Interior designer are not just limited to the selection of textures or designing layouts on paper but gives you a proper scenario of the existing and to be made drafts. They will take care of your matching furniture, paint on your walls, maintaining the decorum of your living. You can hire best team professional interior designer and decorators from hombuilt.com operating in Delhi, Noida, Gurgaon, Dehradun,jaipur,and many other cities. A professional can save your time and money. Book now for consultation.


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
