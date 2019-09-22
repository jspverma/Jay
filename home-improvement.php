<?php
error_reporting(0);
include('inc/db.php');
include 'personalDetails.php';
include 'homeService.php';

$url='home-improvement.php';
$price=2000;

if(isset($_POST['submi'])){
    session_start();
    $checkbox1=$_POST['vehicle'];
    //$architecture=$_POST['architecture'];
    //$need=$_POST['need'];
    //$des=$_post['des'];
    $email=$_SESSION['email'];
    $Date=$_POST['Date'];
    $time=$_POST['time'];
    $bdate=date("Y-m-d");
    date_default_timezone_set("asia/kolkata");
    $btime=date("h:i:sa");
    $bookingID=time();
    $status=$_POST['status'];

    $val="";
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
               
        header('Location:login-sign.php?service='.$service.'&url='.$url.'&date='.$Date.'&time='.$time.'&price=' . $price);
    }else{

        header('Location:checkout.php?id=' . $id . '&total=' . $total . '&qty=' . $qtyPro . '&service=' . $service . '&date=' . $Date . '&time=' . $time .'&st=' . $st.'&price=' . $price.'&url='.$url);

}
}

?>
<!doctype html>
<html>

<head>

<title>Vastu consultant in india| Vastu solution – Hombuilt.com</title>
<meta name="keywords" content=" Home improvement, vastu consultancy, vastu shastra, vaastu solution, pyramid installation, fengshui, Vastu consultant in delhi, residential vastu, office vastu, vastu services, vastu architect,  vastu services in delhi, top vastu expert,  "/>
	<meta name="description" content="Improve your living with Vaastu consultancy. Consult Vaastu expert and feel the change in your life. We have better tips for residencial and commercial spaces. Vastu solutions that can change your life."/>
	<link rel="stylesheet" href="themes/Files/css/service_desc.css">
	
     <?php include 'inc/head.php';?>

<style>

.tab-content-group {
    background-image: url(themes/Files/Images/banner/Vastu-min.jpg);
}

</style>

</head>

	<body>

		<div id="main_container" class="text-left">

			<?php include 'inc/header.php';?>

			<div id="content">
				<h1><br></h1>
				


				<!--         Do Not edit Above Page        -->

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
												<h3 id="heading">Book a Vastu Consultant</h3>
												
							<div class="panel with-nav-tabs panel-info">

								<div class="row">
									<div class="popup-panel-heading col-md-4 col-sm-12">
										<ul class="nav nav-tabs">
											<li class="active" style="width: 169px;"><a href="#book_pop_tab_1_info" data-toggle="tab">Consultation</a></li>
										</ul>
									</div>
									
									<div class="panel-body col-md-8 col-sm-12">
										<div class="tab-content">
											<!--Tab 1 Content-->
											<div class="tab-pane fade in active" id="book_pop_tab_1_info">
									<div class="rate_tab_pane_inner">
																				
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3> Vaastu Consultancy	</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Vaastu Consultancy">
												</div>
											</div>
										</div>
										
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3>  Vaastu Designing	</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Vaastu Designing">
												</div>
											</div>
										</div>
										
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3>  Fenshui</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Fenshui">
												</div>
											</div>
										</div>
										
										<div class="items_select">
											<div class="row">
												<div class="col-sm-10">
													<h3>  Pyramidiology</h3>
													
												</div>
												
												<div class="col-sm-2">
													<input type="checkbox" name="vehicle[]" value="Pyramidiology">
												</div>
											</div>
										</div>
										
										
										
									</div>
									
									<div class="rate_text" id="rate_text">Visiting Charges and Consultation charges will be Rs 2000 per session </div>
									
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
							
							<a href="#"><input type="submit" name = "submi" class="btn btn-success btn-primary pull-left" value ="Book Now" style="float: right !important;"></a>
							
					</div>
																			
										</div>
											
			</div>
									</form>
								</div>
							
							<!--Tab Panel 1 End-->

							<!--Tab Panel 2-->
							<div class="tab-pane" id="panel2" style="height:342px;">
								<div class="row">

										<div class="panel with-nav-tabs panel-info">

											<div class="panel-heading">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#rate_tab_1_info" data-toggle="tab">Consultation</a></li>
												</ul>
											</div>

											<div class="panel-body">
												<div class="tab-content">
													<!--Tab 1 Content-->
													<div class="tab-pane fade in active" id="rate_tab_1_info">
														<div class="rate_tab_pane_inner">
															<div class="items_title">
																<h4 id="items_title">Consultation</h4>
																<div class="clear"> </div>
															</div>

															<table class="table table-stripped">
    <tr>
        <td>Residential</td>
        <td>Starts from Rs 13000</td>
    </tr>
    <tr>
        <td>Commercial</td>
        <td>Starts from Rs 17000</td>
    </tr>
    <tr>
        <td>Industrial</td>
        <td>Starts from Rs 27000</td>
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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1. What is home improvement all about?

</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Home Improvement is all about removing negativity from your house and your life.
                            <br/>
For that we provide services: <br/>
•	Vaastu consultancy <br/>
•	Vaastu for homes <br/>
•	Pyramid installation
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q2. What is the fees for the services?
</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans :You need to pay 2000 Rs for the Home visit/normal consultation for the session for your problem.


                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q3. Do you provide Designing according to vaastu?

</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : Yes we do. We are having a team of designers who can design according to your requirements after advised from expert.

                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q4. Is designing included in fees only?

 </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ans : No, 2000 Rs is for the normal consultation/visiting. You need to pay according for your requirements.
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
										
									</ol>
									<!-- Carousel items -->
									<div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Ratish.jpg');background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>Excellent job. One of the best vastu consultant & interior designer I have ever met. I was facing problems in my business but after consulting her my business is running very smoothly. </p>
				    	</blockquote>	
				    	By: Anil Raj
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-image: url('images/test/Abhishek.jpg');background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>Did home consultation regarding vaastu. Perfectly described my problems and suggested me some remedies.  Everything is on the right track now.
						
</p>
				    	</blockquote>
				    	By: Abhishek Arora
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-image: url('images/test/Alok.jpg');background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>LI got benefited with the vaastu and numerological remedies of their consultant .it's great working with as I am also an architect. I would surely recommend them.
							
</p>
				    	</blockquote>
				    	By: Mohit Madnani
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
							Vaastu shastra, is an ancient myth that indicates the arrangements that senses the vibes from man. As per vaastu, each premises whether it is residential or commercial has its own vitality that influence on the nature of the individual living in it. Therefore it is required to construct your living as per the laws of vaastu. It is known fact that the universe is made up of five elements that are air, fire, water, sky and land. A proportion of your illness that can be stomach problems, body ache, sleeping disorders, tension and stress occur due to wrong vaastu arrangement of your living. There are some remedies to live a healthy life that can be explained by our experts. Get full assistance to make your living peaceful with vaastu solution. Vaastu consultancy, vaastu designing, vaastu architect are some of the solutions that hombuilt.com provide. Book consultant before it is too late.


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
