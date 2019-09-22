<?php
error_reporting(0);
include('inc/db.php');
include 'architectsService.php';
include 'personalDetails.php';

//echo $cudate.$dtime;

//die;

$price=1000;
$url="architects.php";

/*if(empty($_SESSION['name'])){
    //echo "<script>alert('Login First');</script>";
    header('Location:login-sign.php');

}*/

if(isset($_POST['submi'])){
    session_start();
    $checkbox1=$_POST['what'];
    //echo "<pre>";print_r($checkbox1);die;
    //$architecture=$_POST['architecture'];
     //echo "<pre>";print_r($architecture);die;
    $need=$_POST['need'];
    //echo "<pre>";print_r($need);die;
    $des=$_post['des'];
    $email=$_SESSION['email'];
    //echo $email;die;
    $Date=$_POST['date'];
    $time=$_POST['time'];
    $bdate=date("Y-m-d");
    date_default_timezone_set("asia/kolkata");
    $btime=date("h:i:sa");
    //$bdate=date(Y-M-D);
    //$btime=time(H-m-s);
    $bookingID=time();
    $status=$_POST['status'];
   // echo $bdate;die;

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
    
     if(empty($_SESSION['name'])) {
     	

    	
        // echo "<script>alert('Login First');</script>";
        header('Location:login-sign.php?service='.$service.'&url='.$url.'&date='.$Date.'&time='.$time.'&price='.$price);
    }else{
    		
    		//$url="architects.php";
        
    		header('Location:checkout.php?service='.$service.'&total='.$total.'&qty='.$qtyPro.'&date='.$Date.'&time='
    			.$time.'&price='.$price.'&url='.$url);
    		
   } 		
}



?>
<!doctype html>
<html>

<head>

<title> Best Architect service| Architect consultant– Hombuilt.com </title>
<meta name="keywords" content="home architecture, architects near me, house architecture, architecture drawing, modern
architecture, Architects, architect design home, architect services, architectural services, architects in jaipur, architects in dehradun, architects in gurgaon, architects in noidia, architects in Delhi."/>
	<meta name="description" content="Hire best professional and expert architects for renovation and construction purpose. Updated techniques to provide quality services. 3D, 2D designing, elevation, mapping and drafting services. "/>
	<link rel="stylesheet" href="themes/Files/css/service_desc.css">
	
  <?php include 'inc/head.php';?>
 
		

<style>

.panel.with-nav-tabs.panel-info form.form-default.form {
    padding: 20px 20px;
}

.panel.with-nav-tabs.panel-info form.form-default.form label.checkbox-inline {
    margin-left: 0;
    margin-right: 10px;
    margin-bottom: 5px;
    margin-top: 4px;
}

.panel.with-nav-tabs.panel-info form.form-default.form {
    min-height: 150px;
}

.tab-content-group {
    background-image: url(themes/Files/Images/banner/architech.jpg);
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


                      <!--form will starts from here-->

                                    <form method="post">
									<div class="row">
										
											<!--Col 1-->
											<div class="col-md-12 col-xs-12">
												<h3 id="heading">Book an Architect</h3>
												
							<div class="panel with-nav-tabs panel-info" style="padding: 20px;height: 300px;overflow-x: hidden;overflow-y: scroll;">
				<fieldset>

				<!-- Multiple Checkboxes (inline) -->
				<div class="form-group">
				  <label class=" control-label" for="What you want to avail for">What you want to avail for</label>
				  <div class="">
					<label class="checkbox-inline" for="What you want to avail for-0">
					  <input type="checkbox" name="what[]" id="What you want to avail for-0" value="Home">
					  Home
					</label>
					<label class="checkbox-inline" for="What you want to avail for-1">
					  <input type="checkbox" name="what[]" id="What you want to avail for-1" value="Commercial">
					  Commercial
					</label>
					<label class="checkbox-inline" for="What you want to avail for-2">
					  <input type="checkbox" name="what[]" id="What you want to avail for-2" value="Restaurant">
					  Restaurant
					</label>
				  </div>
				</div>





				<!-- Multiple Checkboxes (inline) -->
				<div class="form-group">
				  <label class=" control-label" for="Architecture Project">Architecture Project</label>
				  <div class="">
					<label class="checkbox-inline" for="Architecture Project-0">
					  <input type="checkbox" name="architecture[]" id="Architecture Project-0" value="New Structure">
					  New Structure
					</label>
					<label class="checkbox-inline" for="Architecture Project-1">
					  <input type="checkbox" name="architecture[]" id="Architecture Project-1" value="Add Story">
					  Add Story
					</label>
					<label class="checkbox-inline" for="Architecture Project-2">
					  <input type="checkbox" name="architecture[]" id="Architecture Project-2" value="Reconstruction">
					  Reconstruction
					</label>
				  </div>
				</div>

				<!-- Multiple Checkboxes (inline) -->
				<div class="form-group">
				  <label class=" control-label" for="Service You Need">Service You Need</label>
				  <div class="">
					<label class="checkbox-inline" for="Service You Need-0">
					  <input type="checkbox" name="need[]" id="Service You Need-0" value="Plan">
					  Plan
					</label>
					<label class="checkbox-inline" for="Service You Need-1">
					  <input type="checkbox" name="need[]" id="Service You Need-1" value="Section">
					  Section
					</label>
					<label class="checkbox-inline" for="Service You Need-2">
					  <input type="checkbox" name="need[]" id="Service You Need-2" value="Elevation">
					  Elevation
					</label>
					<label class="checkbox-inline" for="Service You Need-3">
					  <input type="checkbox" name="need[]" id="Service You Need-3" value="Supervision">
					  Supervision
					</label>
					<label class="checkbox-inline" for="Service You Need-4">
					  <input type="checkbox" name="need[]" id="Service You Need-4" value="3D for All">
					  3D for All
					</label>
					<label class="checkbox-inline" for="Service You Need-5" style="margin-left: 0px;">
					  <input type="checkbox" name="need[]" id="Service You Need-5" value="2D for All">
					  2D for All
					</label>
					<label class="checkbox-inline" for="Service You Need-6">
					  <input type="checkbox" name="need[]" id="Service You Need-6" value="With Vastu Consultant">
					  With Vastu Consultant
					</label>
				  </div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
				  <label class=" control-label" for="Describe Your Project">Describe Your Project</label>
				  <div class="">                     
					<textarea class="form-control" id="Describe Your Project" name="Des"></textarea>
				  </div>
				</div>

				</fieldset>
					</div>
		
					<div class="panel-footer" style="border-top: none; padding: 0px 0px;">
						
							<div class="input-group col-md-2" style="float: left; margin-top: 0px; margin-right: 5px;">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input name="date" placeholder="Select Date" class="form-control" type="date">
							</div>
						
						
						<div class="input-group col-md-4 bootstrap-timepicker timepicker" style="float: left; margin-top: 0px; margin-right: 5px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							<select class="form-control ui-timepicker-optionst" name="time">
								<option class="ui-timepicker-am" value="0" name="time">select time</option>
								<option class="ui-timepicker-am" value="9:00-11:00 am" name="time">9:00-11:00 am</option>
								<option class="ui-timepicker-pm" value="11:00-1:00 pm" name="time">11:00-1:00 pm</option>
								<option class="ui-timepicker-pm" value="1:00-3:00 pm" name="time">1:00-3:00 pm</option>
								<option class="ui-timepicker-pm" value="3:00-5:00 pm" name="time">3:00-5:00 pm</option>
								<option class="ui-timepicker-pm" value="5:00-7:00 pm" name="time">5:00-7:00 pm</option>
								<option class="ui-timepicker-pm" value="7:00-9:00 pm" name="time">7:00-9:00 pm</option>
							</select>
						</div>
							
							<a><input type="submit" name = "submi" class="btn btn-success btn-primary pull-left" value ="Book Now" style="float: right !important;"></a>
							
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
								<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Architectural</a></li>
								<li><a href="#rate_tab_2_info" data-toggle="tab">Landscape</a></li>
							<!--	<li><a href="#" data-toggle="tab">Vaastu Desigining</a></li> -->
							</ul>
						</div>

						<div class="panel-body">
							<div class="tab-content">
								<!--Tab 1 Content-->
								<div class="tab-pane fade in active" id="rate_tab_1_info">

									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Architectural </h4>
											<div class="clear"> </div>
										</div>
										<table class="table table-stripped">
    <tr>
        <th>Residential</th>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td>Sketch Plan</td>
        <td>Starts From Rs 5000</td>
    </tr>
    <tr>
        <td>Sketch Plan with vastu</td>
        <td>Starts From Rs 9000</td>
    </tr>
     <tr>
        <td>Working Drawing</td>
        <td>Starts From Rs 6000</td>
    </tr>
    <tr>
        <td>Plumbing Drawing</td>
        <td>Starts From Rs 4000</td>
    </tr>
    <tr>
        <td>Electrical Drawing</td>
        <td>Starts From Rs 4000</td>
    </tr>
     <tr>
        <td>Landscaping Drawing</td>
      <td>Starts From 24 rs/sq.ft</td>
    </tr>
    <tr>
        <td>3D rendering View</td>
        <td>Starts Rs 12,000 per view</td>
    </tr>
    <tr>
        <td>Supervision</td>
        <td>Starts Rs 3500 per visit</td>
    </tr>

        <tr>
        <th>Commercial</th>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td>Sketch Plan + Furniture Layout</td>
        <td>Starts From Rs 6000</td>
    </tr>
    <tr>
        <td>Sketch Plan with vastu</td>
        <td>Starts From Rs 13000</td>
    </tr>
     <tr>
        <td>Working Drawing</td>
        <td>Starts From Rs 8000</td>
    </tr>
    <tr>
        <td>Plumbing Drawing</td>
        <td>Starts From Rs 6000</td>
    </tr>
    <tr>
        <td>Electrical Drawing</td>
        <td>Starts From Rs 6000</td>
    </tr>
     <tr>
        <td>Landscaping Drawing</td>
      <td>Starts From 24 rs/sq.ft</td>
    </tr>
    <tr>
        <td>3D rendering View</td>
        <td>Starts Rs 17,000 per view</td>
    </tr>
    <tr>
        <td>Supervision</td>
        <td>Starts Rs 3500 per visit</td>
    </tr>

</table>
										
									</div>



								</div>
								
								<!--Tab 2 Content-->
								<div class="tab-pane fade" id="rate_tab_2_info">

									<div class="rate_tab_pane_inner">
										<div class="items_title">
											<h4 id="items_title">Landscape </h4>
											<div class="clear"> </div>
										</div>
										<table class="table table-stripped">
    <tr>
        <td>Garden Design</td>
        <td>Starts 52 Rs per sq.ft</td>
    </tr>
    <tr>
        <td>Gazebo Design</td>
        <td>Starts 58 Rs per sq.ft</td>
    </tr>
    <tr>
        <td>Water Feature Design</td>
        <td>Starts 52 Rs per sq.ft</td>
    </tr>
     <tr>
        <td>Pool Landscaping</td>
        <td>Starts 52 Rs per sq.ft</td>
    </tr>

</table>
										
									</div>



								
								
								</div>
								
								<!--Tab 2 Content End-->
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1. Why do I need an Architect? </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Not any architect, preferably HomBuilt.com, the fact we hold professional indemnity insurance or how as chartered architects we provide a client centred service, value for money and excellent design skills.


                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. Is their any consultation charges?


</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Yes, you will be charged Rs 1000 as the consultation charges or it can be the visiting charges.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. What will be the time take to handover the drawing?

</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : It will take a 2-3 days for 2D designing and it may take 6 Working days for 3D projects. 
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. How qualified are your architects and designers?

 </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Our architects are the certified and well trained professional. Having an experience of more than 5 years in the same, they are equipped with lots of new designing concepts.

                        </div>
                    </div>
                </div>
              
                

            </div>
            <!-- /.panel-group -->
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
                        <div class="profile-circle" style="background-image: url('images/test/rao.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>Hombuilt  Architects were receptive and captured our imagination. They are professional and enthusiastic from start to completion of our wonderful eco home. A first class friendly service that we would highly recommend to anyone.

</p>
				    	</blockquote>	
				    	BY: Mukesh Verma
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/rajesh.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>We were extremely satisfied with the outline and they were exceptionally useful through a troublesome arranging endorsement handle. Hats off HomBuilt.com 
					
</p>
				    	</blockquote>
				    	By: Pranav Mehra
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Sitanshu.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>We are exceptionally happy with the last arranges and anticipate making the most of our new reason assembled home.
			
</p>
				    	</blockquote>
				    		By: Aman Kumar
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Nitish.jpg');background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>We worked with HomBuilt Architects on a venture in Delhi. We were extremely awed with their innovative approach and present day arrangement which satisfied our concise splendidly. We would exceptionally recommend them and delighted in working with them in particular.
				
</p>
				    	</blockquote>
				    	By: Ayush Kejriwal

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
							It is said that when you are building your house, you are building your dreams and desires. An architect helps you to live your dreams by adding best configuration to your dreams. They can help you to plan and use those vacant places fruitfully. An architect will play vital role in creating your living weather it is residential or commercial. It is generally not simple to find out best person, but hombuilt.com is having dedicated team of professionals who are ever ready to take up your tasks. To book hombuilt.com considered proficient architect, post your requirements online or you can call us. Get best architect services online in Delhi, Noida, Gurgaon, Jaipur, Dehradun, Pune, Bangalore and other cities.


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
