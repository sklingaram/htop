<?php include "top_header.php"; ?>
<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<?php include "zerobug_connect.php"; ?>
<div class="zb_images">
	<div style="min-height: 50px;">
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>
        <div id="slider1_container" style=" position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1350px; height: 475px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1350px; height: 500px; overflow: hidden;">
                <div>
                    <img data-u="image" src="images/cur/slider2.jpg" alt="training institute in chennai"/>
                </div>
                <div>
                    <img data-u="image" src="images/cur/banner5.jpg" alt="aws training institute in chennai" />
                </div>
                <div>
                    <img data-u="image" src="images/cur/slide.jpg" alt="php training institute in chennai" />
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
            </style>
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->

           <!-- <a style="display: none" href="https://www.jssor.com"></a>-->
        </div>
        <!-- Jssor Slider End -->
    </div>
<div class="enquiry_from" id="enquiry_from">

	<center><span id="success_msg" style="color:red;"></span></center>
		<section class="form-gradient" style="">
    <!--Form with header-->
    <div class="card" style="background:linear-gradient(40deg,#FFD86F,#FC6262);">
        <!--Header-->
        <div class="pt-3 peach-gradient" >
            <div class="d-flex justify-content-center text-center">
                <h3 class="white-text mb-3 pt-3 font-bold quick_bold">Quick Enquiry</h3>
            </div>
        </div>
        <!--Header-->
		<div class="card-body mx-4 mt-4">
            <!--Body-->

<form id="quick_form" name="validation" class="zb_enquiryfrom" action="" method="POST">
							<div class="form-group">
									<div class="icon-addon addon-lg">
										<input placeholder="Name *" class="form-control form_ra" id="df_name" name="username" valid-name="fullname" style="" type="text">
										<!--<label for="dfusrname" class="glyphicon glyphicon-user" rel="tooltip" title="Name"></label>-->

									</div>
									
								</div>
								<div class="form-group">
									<div class="icon-addon addon-lg">
										<input placeholder="Mobile NO*" class="form-control form_ra" id="mobile_no" name="mobileno" valid-name="mobile" style="" type="text">
									<!--	<label for="dfusrname" class="glyphicon glyphicon-user" rel="tooltip" title="Name"></label>-->

									</div>
									
								</div>
								<div class="form-group">
									<div class="icon-addon addon-lg">
										<input placeholder="Email *" class="form-control form_ra" id="email" name="email" valid-name="email" style="" type="text">
										<!--<label for="dfusrname" class="glyphicon glyphicon-user" rel="tooltip" title="Name"></label>-->

									</div>
									
								</div>
								<div class="form-group">
									<div class="icon-addon addon-lg">
										<select class="form-control form_ra" placeholder="Service Type" valid-name="select" name="course" id="zfcourse">
											<option class="dfservice" value="Please select any one" disabled selected>select the course interested in</option>
											  <option value="1">AWS Course</option>
						<option value="2">Core JAVA And J2EE Course</option>
						<option value="3">Selenium Course</option>
						<option value="4">Hadoop Course</option>
						<option value="5">Android Course</option>
						<option value="6">Web Design Course</option>
						<option value="7">AWS Course</option>
						<option value="8">Digital Marketing Course</option>
						<option value="9">Testing Course</option>
						<option value="10">Python Course</option>
						<option value="11">Others Trainings Courses</option>
										</select>
										<!--<label for="dfservicetype" class="glyphicon glyphicon-cog" rel="tooltip" title="Service_type"></label>-->
									</div>
									
								</div>
								<div class="form-group">
									<div class="icon-addon addon-lg">
										<textarea placeholder="Type your Message Here... *" class="form-control resizearea form_ra" id="zbcontent" name="content" valid-name="comment" style=""></textarea>
										<!--<label for="df_address" class="glyphicon glyphicon-edit" rel="tooltip" title="Can you provide more details?"></label>-->
									</div>

								</div>
								<div class="form-group">
									<button type="submit" id="btn_newconnection" class="btn btn-block btn-new btn_connection" value="submit">Submit</button>
								</div>
</form>
 </div>
</section>
</div>
</div>
<div class="below_div">
	<div class="container">
		<div class="below_wrap">
			<div class="row">
				<div class="col-sm-12">
				<div class="zf_title">
					<h2>Welcome to H Top Solution</h2>
					<p>
H Top Solution is the leading IT training institute in chennai who offer software training for the freshers who are looking to begin their career in software Development and for the Professional who are looking for a job change. We designed the course syllabus according to needs of the corporates moreover the training Sessions are handled by working people from various IT companies around chennai who are capable of teaching concepts with real time examples.Zero Bug Academy limits the batch size so that we can provide individual attention and we have team of HR who will assist you after the completion of course. We have proven approach to each software training program which will help our students to achieve their goal and clear the interview easily.</p>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="zf_chooseus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="zf_title">
						<h2>Why Choose Us?</h2>
					</div>
				</div>
			</div>
			
					<div class="row" style="padding:45px 0px;">
					<div class="col-sm-3">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-handshake-o custom-icon " aria-hidden="true"></i>
							<h5>Real Time Training</h5>
							<p>H Top Solution offers software training in chennai with real time example which will help you to learn the concepts easily.</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-sort-asc custom-icon" aria-hidden="true"></i>
							<h5>Online Training</h5>
							<p>H Top Solution aim at providing the students with online training which will be achieved soon.</p>
						</div>
					</div>
						<div class="col-sm-3">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-tasks custom-icon" aria-hidden="true"></i>
							<h5>Project Training</h5>
							<p>H Top Solution offers software projects to the students with best support at affordable cost.</p><p>
						</p></div>
					</div>
					<div class="col-sm-3">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-user-o custom-icon " aria-hidden="true"></i>
							<h5>Expert IT Trainers</h5>
							<p>H Top Solution Provides opportunity to learn software courses from Experts of IT industry.
						</p></div>
					</div>
					
				</div>
				<div class="row" style="padding:45px 0px;">
					<div class="col-sm-4">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-laptop  custom-icon " aria-hidden="true"></i>
							<h5>Corporate Training</h5>
						<p>A part From Classroom training H Top Solution offers best corporate training in chennai.</p>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-flask  custom-icon" aria-hidden="true"></i>
							<h5>Lab Support</h5>
							<p>H Top Solution have fully equipped lab with high speed internet facility.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="text-center our_service hvr-push">
							<i class="fa fa-phone custom-icon " aria-hidden="true"></i>
							<h5>Free Demo class</h5>
						<p>H Top Solution is only Training Institute in Chennai who provide free demo classes to the students.</p>
						</div>
					</div>
					
				</div>
		</div>
	</div>
	<div class="cursol_image">
		
	<div class="container">
    <div class="row">
		<div class="col-md-12">
		<h2>Featured Software Course</h2>
                <div id="Carousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-2"><img src="images\featured\python.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-2"><img src="images\featured\oracle.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-2"><img src="images\featured\jquery.png" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-2"><img src="images\featured\json.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-2"><img src="images\featured\json.jpg" alt="Image" style="max-width:100%;"></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                	  <div class="col-md-3"><img src="images\featured\net.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\salesforce.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\jquery.png" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\json.jpg" alt="Image" style="max-width:100%;"></div>
					  
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                	  <div class="col-md-3"><img src="images\featured\cc++.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\data.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\hadoop.jpg" alt="Image" style="max-width:100%;"></div>
                	  <div class="col-md-3"><img src="images\featured\andorid.png" alt="Image" style="max-width:100%;"></div>
					  
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  
                </div><!--.Carousel-->
                 
		</div>
	</div>
</div><!--.container-->
	
	</div>
<?php include "footer.php"; ?>	