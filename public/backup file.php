<?php 
// include 'submit_booking.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Send money to anyone, anywhere.">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flathub</title>
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ip_responsive.css">

<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
		<script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script>
	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- sweet alert -->
	
</head>
<body>

	<header>
		<nav class="navbar navbar-default h-60 mh-66 m-b-0 bg-white border-bottom" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand m-l-32 m-t-0 h-36 f-40 c-bck" href="#"><p class="flat">Flat<span class="c-grey">Hub</span></p></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse p-t-10">
					<ul class="nav navbar-nav navbar-right f-1">
						<!--<li><a href="#">Home</a></li>
						<li><a href="#">Location</a></li>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Log In</a></li>-->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>

	<section>
		<div class="mm-auto ">
			<a href="index.html"><p class="m-l-40 m-t-10 bgyco f-16 mm-l-14 p-10 mf-18">Our Location </a><i class="fa fa-angle-right p-l-5 mf-12"></i><a href=""><span class="p-l-5 f-16">Yaba</span></a><i class="fa fa-angle-right p-l-5"></i><span class="bgcy p-l-5 f-16 ">Montgomery Street</span></p>
		</div>
		
		
		<div class="row m-auto width-93p p-t-38 mp-t-0 mwidth-100 p-l-38 mp-l-0 mm_5">
			<div class="col-md-8 col-sm-8 col-xs-12 h-420 width-759 mwidth-100 mh-100p" style="position: relative;">
				<div id="myCarousel" class="carousel slide h-420 mh-100p" data-ride="carousel">
				    <!-- Indicators -->
				    <!-- <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol> -->

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
				        <img src="assets/img/Heres.jpg" alt="" style="width:100%;" class="h-420 mh-100p img-responsive">
				      </div>

				      <div class="item">
				        <img src="assets/img/apartments.jpg" alt="" style="width:100%;" class="h-420 mh-100p img-responsive">
				      </div>
				    
				      <div class="item">
				        <img src="assets/img/inside.jpg" style="width:100%;" class="h-420 mh-100p img-responsive">
				      </div>

				      <div class="item">
				        <img src="assets/img/Modern.jpg" style="width:100%;" class="h-420 mh-100p img-responsive">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>

					<div class="b-0 r-0 bgcy pos-abs bg-brown c-white width-168 h-48 mh-35">
						<p class="f-16 p-l-14 m-b-0 p-t-10">&#8358;60,000 per Month</p>
					</div>
				</div>
				<h2 class="text-center f-24">Alagomeji, Yaba, Lagos, Nigeria</h2>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 bd-brandf h-420 mh-345 width-361 m-l-32 p-t-45 mwidth-100 mp-t-10 mm-l-0">
				<form class=" mm-t-8 mp-l-0 p-l-15 p-t-13" action="" method="post">

					<div class="form-group pos-rel">
				    	<label>Move in on</label>
				    	<input type="date" name="" id="input" class="form-control width-300 h-48  mwidth-100 pos-abs" value=""  ><br>
				    	<span class="pos-abs calendar"><img src="assets/icons/calendar_big.png" width="20px" height="20px"></span>
				    	<label class="m-t-49">Duration</label>
				    	
				    	<select name="" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100" >
				    		<option value="">1 Month</option>
				    		<option value="">2 Month</option>
				    		<option value="">3 Month</option>
				    	</select>
				    </div>
				</form>
			    <div class="m-l-17 mm-l-0">
					<button type="" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" href='#modal-1'>
					Book a Viewing
					</button>

					<!-- #modal 1 -->
					<div class="modal fade" id="modal-1">
					  	<div class="modal-dialog mwidth-355">
					    	<div class="modal-content mwidth-78">
					      		<div class="modal-header no-bdmodal p-b-0">
					        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        		<!-- <h4 class="modal-title">Modal title</h4> -->
					      		</div>
					      		<div class="modal-body">
					        		
					        		<p class="text-center f-18">Tell us a bit about yourself </p>

					        		<div class="m-auto width-456">
				    					<form  class="form-inline" role="form">
					    					<div class="">
					    						<div class="form-group">
					    						<input type="text" name="fullname" class="form-control h-48 width-216 mm-l-16" id="view_fullname" placeholder="Full name">
												</div>

						    					<div class="form-group">
						    						<input type="email" name="email" class="form-control h-48 width-216 mm-l-16" id="view_email" placeholder=" Email">
						    					</div>
					    					</div>
					    					
					    					<div class="">
					    						<div class="form-group m-t-10">
					    							<input type="text"  name="phone" class="form-control h-48 width-216 mm-l-16" id="view_phone" placeholder="Phone number">
												</div>
					    					</div>
					    					
					    					<div class="">
					    						<div class="form-group m-t-10">
						    						<input type="text" name="company_name" class="form-control h-48 width-216 mm-l-16" id="view_company_name" placeholder="Company name">
						    					</div>
						    					<div class="form-group m-t-10">

						    						<input type="text" name="company_address" class="form-control h-48 width-216 mm-l-16 " id="view_company_address" placeholder=" Company address">
						    					</div>
					    					</div>
					    					
					    					<div class="">
					    						<div class="form-group m-t-10">
						    						<input type="date" name="date" id="view_date" class="form-control h-48 width-216 mm-l-16  " value="" placeholder="dd/mm/yy" required="" >
						    						<!-- <span class="pos-abs calendarmodal"><img src="assets/icons/calendar_big.png" width="20px" height="20px"></span> -->
							    				</div>	

						    					<div class="form-group m-t-10">
						    						<select name="time" id="view_time" class="form-control h-48 width-216 mm-l-16" required="required">
						    							<option value="">Select Time Range</option>
						    							<option value="8-10am" class="text-center">8 - 10am</option>
						    							<option value="10-12pm" class="text-center">10 - 12pm</option>
						    							<option value="12-2pm" class="text-center">12 - 2pm</option>
						    							<option value="2-4pm" class="text-center">2 - 4pm</option>
						    							<option value="4-6pm" class="text-center">4 - 6pm</option>
						    							<option value="6-8pm" class="text-center">6 - 8pm</option>
						    						</select>
						    					</div>
					    					</div>
					    					

					    				
					    					<input type="submit" name="book_viewing" id="book_view" value="Book Now!" class="width-450 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mm-l-16 m-t-10 mwidth-217" data-dismiss="modal">
					    				</form>
				    				</div>
					  			</div>
					      	</div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->  



					<!-- #modal 2 -->
					<div class="modal fade" id="modal-2">
					  	<div class="modal-dialog mwidth-355">
					    	<div class="modal-content m-auto width-361">
					      		<div class="modal-header no-bdmodal p-b-0">
					        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        		
					        		<button type="" class="close back" data-toggle="modal" data-dismiss="modal" href='#modal-1'><span aria-hidden="true"><i class="fa fa-mail-reply"></i></span><span class="sr-only">Close</span></button>
					        		<!-- <h4 class="modal-title">Modal title</h4> -->
					      		</div>
					        	<div class="modal-body">
						        	<p class="text-center f-18 p-10">Please select a viewing date </p>

					        		<div class="m-auto p-l-5p mp-l-0">
				    					<!--<form class="">-->
					    					<input type="date" name="date" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100 " value="" placeholder="dd/mm/yy" required="" >
					    					<span class="pos-abs calendarmodal"><img src="assets/icons/calendar_big.png" width="20px" height="20px"></span>
						    				<br>

						    				<input type="time" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Time" name="time">
						    				<span class="pos-abs clock"><img src="assets/icons/schedule_big.png" width="20px" height="20px"></i></span>
						    				<br>

						    				<input type="submit" value="Book Now!" name="book_viewing" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-dismiss="modal" />
					    				</form>
				    				</div>
								</div>
					        	</div>
					  		</div>
						</div> 

					<!-- #modal 3 -->
					<!--<div class="modal fade" id="modal-3">-->
					<!--  	<div class="modal-dialog">-->
					<!--    	<div class="modal-content">-->
					<!--      		<div class="modal-header no-bdmodal">-->
					<!--        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
					        		
					<!--      		</div>-->
					<!--      		<div class="modal-body">-->
					<!--        		<p>Modal 3</p>-->
					        
					<!--        		<p class="text-center f-18 p-10">Please choose a username and password so we can create an account for you </p>-->

					<!--        		<div class="m-auto p-l-24p">-->
				 <!--   					<form class="">-->
					<!--    					<input type="text" name="" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100 " value="" placeholder="Username" required="" >-->
					<!--	    				<br>-->

					<!--	    				<input type="password" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="email" placeholder="Pawword" name=""><br>-->

					<!--	    				<input type="password" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Confirm password" name=""><br>-->

					<!--	    				<button type="" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" data-dismiss="modal" href='#modal-4'>Booking viewing</button>-->
					<!--    				</form>-->
				 <!--   				</div>-->
					<!--			</div>-->
					<!--      	</div>-->
					<!--  	</div>-->
					<!--</div>-->
				</div>


				<br>


				<div class="2 m-l-17 mm-l-0">
					<button type="submit" class="width-300 h-48 bgcy f-18 w-500  bd-brandb bg-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" href='#modal-2-1'>
					Book Now
					</button>  
						<!-- #modal 2-1 -->
					<div class="modal fade" id="modal-2-1">
						<div class="modal-dialog mwidth-355">
							<div class="modal-content m-auto width-361">
  								<div class="modal-header no-bdmodal">
   									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    								<!-- <h4 class="modal-title">Modal title</h4> -->
  								</div>
  								<div class="modal-body">
    								<p class="text-center f-18 p-10">Tell us a bit about you so we can get you settled in as soon as possible</p>

					        		<div class="m-auto p-l-5p mp-l-0">
				    					<form class="" method="POST" action="">
					    					<input type="text" name="fullname" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100 " value="" placeholder="Full name" required="" >
						    				<br>

						    				<input type="email" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="email" placeholder="Email" name="email"><br>

						    				<input type="text" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Phone number" name="phone"><br>

						    				<input type="text" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Company name" name="company_name"><br>

						    				<input type="text" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Company address" name="company_address"><br>

						    				<select name="" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100" >
						    					<option value="">Monthly income </option>
						    					<option value="">&#8358; 100k - 150k </option>
						    					<option value="">&#8358; 150k - 250k </option>
						    					<option value="">&#8358; 250k - 350k</option>
						    					<option value="">&#8358; 350k - 450k</option>
						    					<option value="">&#8358; 450k - 550k+ </option>
						    				</select><br>

						    				<button type="" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" data-dismiss="modal" href='#modal'>Book Now</button>
					    				</form>
				    				</div>
								</div>
  							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->  



					<!-- #modal 2-2 -->
					<!--<div class="modal fade" id="modal-2-2">-->
					<!--	<div class="modal-dialog">-->
					<!--		<div class="modal-content">-->
  			<!--					<div class="modal-header no-bdmodal">-->
    	<!--							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
    								
  			<!--					</div>-->
  			<!--					<div class="modal-body">-->
    	<!--							<p>Modal 2</p>-->
    	<!--							<p class="text-center f-18 p-10">Tell us a bit about you so we can get you settled in as soon as possible</p>-->

    	<!--							<div class="m-auto p-l-24p">-->
				 <!--   					<form class="">-->
					<!--    					<input type="text" name="" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100 " value="" placeholder="Full name" required="" >-->
					<!--	    				<br>-->

					<!--	    				<input type="email" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="email" placeholder="Email" name=""><br>-->

					<!--	    				<button type="" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" data-dismiss="modal" href='#modal-2-3'>Next</button>-->
					<!--	    			</form>-->
					<!--    			</div>-->
  			<!--				    </div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<!-- #modal 2-3 -->
					<!--<div class="modal fade" id="modal-2-3">-->
					<!--		<div class="modal-dialog">-->
					<!--		<div class="modal-content">-->
  			<!--					<div class="modal-header no-bdmodal">-->
   		<!--							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
    								
  			<!--					</div>-->
  			<!--					<div class="modal-body">-->
    	<!--							<p>Modal 3</p>-->
					        
					<!--        		<p class="text-center f-18 p-10">Please choose a username and password so we can create an account for you </p>-->

					<!--        		<div class="m-auto p-l-24p">-->
				 <!--   					<form class="">-->
					<!--    					<input type="text" name="" id="input" class="form-control width-300 h-48 mm-l-0 mwidth-100 " value="" placeholder="Username" required="" >-->
					<!--	    				<br>-->

					<!--	    				<input type="password" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="email" placeholder="Pawword" name=""><br>-->

					<!--	    				<input type="password" class="form-control width-300 h-48 mm-l-0 mwidth-100" id="" placeholder="Confirm password" name=""><br>-->

					<!--	    				<button type="" class="width-300 h-48 bgc f-18 w-500 no-bd c-white bd-4 mm-l-0 mwidth-100" data-toggle="modal" data-dismiss="modal" href='#modal-2-4'>Book Now</button>-->
					<!--    				</form>-->
				 <!--   				</div>-->
					<!--			</div>-->
					<!--		</div> -->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</section>


	<section>
		<div class="col-md-12 col-sm-12 m-auto width-93p p-t-38">
			<h1 class="text-center m-t-48 f-36 mm-t-10 p-l-40 mp-l-0">About</h1>
			<p class="f-16 p-l-97 h-60 mwidth-100 mh-100p mp-l-0 mm-auto mwidth-230">This 2 bedroom apartment is located in Sabo, Yaba. The apartment is on Montgomery street which is just of  Herbert Macaluay road. The apartment is on the third floor in a modern building called Adepate House. There is a lift for your convenience and and a roof top balcony accessbile to all tenants of the building. </p>
			<hr class="width-576 m-t-48 ">
		</div>

		<div class="text-center width-300 m-auto">
			<h1 class="">The Space</h1>
		</div>
		<div class="row m-auto width-93p p-t-48 mp-t-0">
			<div class="col-md-4 p-l-260 p-5 mp-l-0">
				<p class="text-center ">Bedrooms: <strong>2</strong> </p>
			</div>
			<div class="col-md-4 width-296">
				<p class=" p-5 p-l-107">Beds: <strong>2</strong></p>
			</div>
			<div class="col-md-4">
				<p class="mp-l-40">Minimum Let period: <strong>1 Month</strong></p>
			</div>
		</div>
		<div class="row m-auto width-93p p-t-38 mp-t-0">
			<div class="col-md-4 p-l-260 p-5 mp-l-0">
				<p class="text-center">Sofa: <strong>1</strong></p>
			</div>
			<div class="col-md-4 width-296">
				<p class="text-center">Floors: <strong>2</strong></p>
			</div>
			<!-- <div class="col-md-4">
				<p class="mm-l-80">Floor: <strong>3rd floor</strong> </p>
			</div> -->
		</div>
		<hr class="width-576 m-t-48 mm-t-0">

		<h1 class="text-center m-t-48 f-36 mm-t-0">Amenities</h1>

		<div class="">
			<div class="row width-66p m-auto p-t-49 mp-t-0 mwidth-100">

				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/air-conditioner.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10">
						<p class="f-16 p-5 ">Air-conditioner</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/car.png" class="width-24">
					</div>
					<div class="col-md-6 col-sm-6  col-xs-8 p-l-0 mp-l-10">
						<p class="f-16 p-5">Packing</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/wheelchair.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 p-l-0 col-xs-4  mp-l-10 width-70p">
						<p class="f-16 p-5">Wheelchair access</p>
					</div>
				</div>
			</div>
	

			<div class="row width-66p m-auto p-t-49 mp-t-20 mwidth-100">

				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/oven.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10">
						<p class="f-16 p-5 ">Cooker</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/power-cord.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10">
						<p class="f-16 p-5">Stable Power</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/wifi.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10 width-70p">
						<p class="f-16 p-5">Wifi</p>
					</div>
				</div>
			</div>

			<div class="row width-66p m-auto p-t-49 mp-t-20 mwidth-100">

				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/sofa.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10">
						<p class="f-16 p-5 ">Funiture</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/washing-machine.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10 width-70p">
						<p class="f-16 p-5">Washing maching</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 mp-l-60">
					<div class="col-md-6  col-sm-6 col-xs-2 width-17p">
						<img src="assets/icons/locked.png" class="width-24">
					</div>
					<div class="col-md-6  col-sm-6 col-xs-8  p-l-0 mp-l-10 width-70p">
						<p class="f-16 p-5">24/7 security</p>
					</div>
				</div>
			</div>
		</div>

		


		<hr class="width-576 m-t-48 mm-t-0">

		<h1 class="text-center m-t-48 f-36 mm-t-0">House rules</h1>

		<div class="row p-t-48 mp-t-0 m-auto width-30p mwidth-50">
			<div class="col-md-6 col-xs-12 ">
				<p class="">No pets</p>
			</div>
			<div class="col-md-6 col-xs-12 ">
				<p class="mm-l-0">No Smoking</p>
			</div>
		</div>
		<hr class="width-576 m-t-48 mm-t-0">

		<h1 class="text-center m-t-48 f-36 mm-t-0">Price</h1>

		<div class="row p-t-48 mp-t-0 m-auto width-30p mwidth-50">
			<div class="col-md-6 col-xs-12">
				<p class="">Deposit: <span>&#8358;160k</span></p>
			</div>
			<div class="col-md-6 col-xs-12">
				<p class="">Monthly rent: &#8358;60k</p>
			</div>
		</div>
		<hr class="width-576 m-t-48 mm-t-0">

	</section>

	

	<footer class="nb-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 m-t-24">
					<div class="footer-info-single">
						<p>Copyright &copy; FlatHub.ng</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-12  p-l-20p">
					<div class="footer-info-single">
						<p>About Us</p>
						<p>Privacy <span class="p-l-56">FAQ's</span> </p>
						<p>Terms of Use <span class="p-l-19">Contact us</span> <span class="p-l-20">Follow us on <a href="http://fb.com/FlatHubNG" target="_blank"><i class="fa fa-facebook-square"></i> </a><i class="fa fa-instagram"></i></span> </p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	

<script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="libraries/bootstrap/js/jquery.min.js"></script>
<script src="libraries/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="libraries/bootstrap/js/book_viewing.js"></script>

</body>
</html>