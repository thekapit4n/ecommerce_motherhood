<style>
<!--	
	@import url('https://fonts.googleapis.com/css2?family=Lexend+Deca');
	body{
		font-family: Arial,Helvetica,sans-serif;
		
	}
	
	#eventform{
		background-color:#203764;
		font-family: 'Lexend Deca', sans-serif;
	}
	
	.font-fact{
		font-family: 'Lexend Deca', sans-serif;
	}
	
	.label-cb-custom{
		color:white;
	}
	
	.font-fact-highlight{
		font-weight:700; 
		color:#ffde00
	}
	
	
	.fact-of-the-day{
		font-size: 25px;
		color: #ffffff;
	}
	
	.card-fact-box{
		background-color:#203764;
		border-radius: 10px;
		border:0px;
	}
	
	.blockquote-map-malaysia{
		margin-top:11%;
	}
	
	.card-map-malaysia, .card-miscarrige{
		width: 60%;
	}
	
	.image-miscarriage{
		width:170px;
	}
	
	.amchart-mmy {
	  width: 100%;
	  height: 270px;
	}
	
	.survey-question-div{
		padding-left : 20px;
		height : 270px;
	}
	
	.small-customer-info-msg{
		color:#d8d8d8;
	}
	
	ul {
	  padding: 0;
	  margin: 0;
	  list-style: none; 
	}

	.wrapper {
		max-width: 1400px;
		height: 100vh;
		margin: auto;
		display: flex;
		align-items: center; 
	}
	
	.wizard > .steps .current-info, .wizard > .steps .number {
		display: none; 
	}

	#mamacubatry-wizard {
		min-height: 834px;
		background: #fff;
	}

	.steps {
		margin-bottom: 30px; 
	}
	
	.steps ul {
		display: flex;
		position: relative; 
	}
	
	.steps ul li {
		width: 20.16%;
		margin-right: 10px; 
	}
	
	.steps ul li a {
        display: inline-block;
        width: 100%;
        height: 7px;
		color:#f6f6f6 !important;
        background: #f6f6f6 !important;
        border-radius: 3.5px; 
		outline: unset;
		pointer-events: none;
	}

	.steps ul li.first a, .steps ul li.checked a {
        background: #f18773 !important;
		color:#f18773 !important;
        transition: all 0.5s ease; 
		outline: unset;
	}
 
	.steps ul:before {
		content: "Question 1";
		font-size: 18px;
		font-family: 'Lexend Deca', sans-serif;
		color: white;
		top: -27px;
		position: absolute;
	}

	.steps ul.step-2:before {
		content: ""; 
	}
	
	.steps ul.step-3:before {
      content: "Question 2"; 
	}
	
	.steps ul.step-4:before {
      content: ""; 
	}
	
	.steps ul.step-5:before {
      content: "Question 3"; 
	}
	
	.steps ul.step-6:before {
      content: ""; 
	}
	
	.steps ul.step-7:before {
      content: "Question 4"; 
	}
	
	.steps ul.step-8:before {
      content: ""; 
	}
	
	.steps ul.step-9:before {
      content: "Question 5"; 
	}
	
	.steps ul.step-10:before {
      content: ""; 
	}
	
	.steps ul.step-11:before {
      content: "Question 6"; 
	}
	
	.steps ul.step-12:before {
      content: ""; 
	}
	
	.steps ul.step-13:before {
      content: "Question 7"; 
	}
	
	.steps ul.step-14:before {
      content: ""; 
	}
	
	.steps ul.step-15:before {
      content: "Question 8"; 
	}
	
	.steps ul.step-16:before {
      content: ""; 
	}
	
	.steps ul.step-17:before {
      content: "Question 9"; 
	}
	
	.steps ul.step-18:before {
      content: ""; 
	}
	
	.steps ul.step-19:before {
      content: "Question 10"; 
	}
	
	.steps ul.step-20:before {
      content: ""; 
	}
	
	.steps ul.step-21:before {
      content: "Question 11"; 
	}
	
	.steps ul.step-22:before {
      content: ""; 
	}
	
	.actions{
		padding-right: 25px;
	}
	
	.actions ul {
	  display: flex;
	  margin-top: 30px;
	  justify-content: space-between; 
	}
	
	.actions ul.step-last {
		justify-content: flex-end; 
	}
    
	.actions ul.step-last li:first-child {
      display: none; \
	}
	
	.actions li a {
		border-radius:25px;
		background-color: #f3866f!important;
		color: #fff;
		border-color: #f3866f!important;
		padding: 0;
		border: none;
		display: inline-flex;
		height: 37px;
		width: 121px;
		align-items: center;
		cursor: pointer;
		position: relative;
		padding-left: 41px;
		-webkit-transform: perspective(1px) translateZ(0);
		transform: perspective(1px) translateZ(0);
		-webkit-transition-duration: 0.3s;
		transition-duration: 0.3s;
		font-weight: 400; 
	}
	
	.actions li a:before {
		content: '\f2ee';
		position: absolute;
		top: 9px;
		right: 37px;
		font-family: Material-Design-Iconic-Font;
		-webkit-transform: translateZ(0);
		transform: translateZ(0); 
	}
	
	
	.actions li a:hover {
		background: #d9bda3; 
	}
	
    .actions li a:hover:before {
		-webkit-animation-name: hvr-icon-wobble-horizontal;
		animation-name: hvr-icon-wobble-horizontal;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-timing-function: ease-in-out;
		animation-timing-function: ease-in-out;
		-webkit-animation-iteration-count: 1;
		animation-iteration-count: 1; 
	}
	
	.actions li[aria-disabled="true"] a {
		display: inline-flex; 
	}
	
	.actions li:first-child a {
	  background: #e6e6e6;
	  padding-left: 48px; 
	}
	
	.actions li:first-child a:before {
		content: '\f2ea';
		left: 30px;
		top: 9px;
	}
	
	.actions li:first-child a:hover {
		background: #ccc; 
	}
	
	.actions li:last-child a {
		padding-left: 29px;
		width: 115px;
		font-weight: 400;
	}
	
	.actions li:last-child a:before {
		right: 30px; 
	}
	
	input[type="radio"]:focus{
		outline: unset !important;
		outline: 0px !important;
	}
	
	.btn-cb-custom {
		background-color: #f18773;
		border-color: #f18773;
		width: 50%;
		padding: 10px;
		padding-bottom: 10px;
		font-size: 17px;
		font-weight: 600;
		outline:unset;
		box-shadow: unset;
	}
	
	.btn-cb-custom:hover, .btn-cb-custom:active, .btn-cb-custom:focus{
		background-color:#f9634e;
		border-color: #f9634e;
		outline:unset;
		box-shadow: unset;
	}
	
	.img-clearblue{
		width:15%;
	}
	

	@-webkit-keyframes hvr-icon-wobble-horizontal {
	  16.65% {
		-webkit-transform: translateX(6px);
		transform: translateX(6px); }
	  33.3% {
		-webkit-transform: translateX(-5px);
		transform: translateX(-5px); }
	  49.95% {
		-webkit-transform: translateX(4px);
		transform: translateX(4px); }
	  66.6% {
		-webkit-transform: translateX(-2px);
		transform: translateX(-2px); }
	  83.25% {
		-webkit-transform: translateX(1px);
		transform: translateX(1px); }
	  100% {
		-webkit-transform: translateX(0);
		transform: translateX(0); } 
	}
	
	@keyframes hvr-icon-wobble-horizontal {
	  16.65% {
		-webkit-transform: translateX(6px);
		transform: translateX(6px); }
	  33.3% {
		-webkit-transform: translateX(-5px);
		transform: translateX(-5px); }
	  49.95% {
		-webkit-transform: translateX(4px);
		transform: translateX(4px); }
	  66.6% {
		-webkit-transform: translateX(-2px);
		transform: translateX(-2px); }
	  83.25% {
		-webkit-transform: translateX(1px);
		transform: translateX(1px); }
	  100% {
		-webkit-transform: translateX(0);
		transform: translateX(0); } 
	}
	
	@media (max-width: 1500px) {
		.wrapper {
			height: auto; 
		} 
	}
	
	@media (max-width: 1199px) {
		.wrapper {
			height: 100vh; 
		}

		#mamacubatry-wizard {
			min-height: 829px;
		} 
	}
	
	@media (max-width: 991px) {
		.wrapper {
			justify-content: center; 
		}
		.wrapper .image-holder {
		  display: none; 
		}
		  
		.wrapper form {
		  width: 60%; 
		}

		#mamacubatry-wizard {
			margin-right: 0;
		} 
		
		.address-details {
		  padding-left:15px;
		}
		
		.motherhood-br{
			display:none;
		}
		
		.ballon-icon-tq{
			width:30%;
		}
	}
	
	@media (max-width: 767px) {
		.actions{
			padding-right: 15px;
		}
		
		.wrapper {
			height: auto;
			display: block; 
		}
		
		.wrapper .image-holder {
			width: 100%;
			display: block;
		}
		
		.wrapper form {
		  width: 100%; 
		}

		#mamacubatry-wizard {
			min-height: unset;
		}

		.form-row.form-group {
			display: block; 
		}
		
		.form-row.form-group .form-holder {
		  width: 100%;
		  margin-right: 0;
		  margin-bottom: 24px; 
		}
		
		.address-details {
		  padding-left:15px;
		}
		
		.motherhood-br{
			display:none;
		}
		
		.ballon-icon-tq{
			width:30%;
		}
		
		.card-map-malaysia{
			min-height: 185px;
			width: 100%;
		}
		
		.card-miscarrige{
			width: 100%;
		}
		
		.blockquote-map-malaysia{
			margin-top:0%;
		}
		
		.fact-of-the-day{
			font-size:15px;
		}
		
		.card-miscarrige{
			min-height: 336px;
			width: 100%;
		}
	
		.image-miscarriage{
			width:105px;
		}
		
		.btn-cb-custom{
			width: 100%;
		}
		
		.br-fact{
			display:none;
		}
		
		.row-custom{
			position:relative;
			right:12px;
		}
		
		.img-clearblue{
			width:34%;
		}
	}
 /** end of css for form wizard **/
-->
</style>
<p>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/core.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/charts.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/plugins/annotation.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/dataviz.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/frozen.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/animated.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
</p>

<div class="row" style="margin-top:25px;">
	<div class="row">
		<div class="col-md-12" style="padding-right:24px !important;">
			<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/clearblue-white-logo.png" class="rounded float-end img-clearblue" alt="clearbluelogo" style="">
		</div>
	</div>
	<div class="row row-custom">
		<div class="col-md-12 text-center mb-4">
			<h3 class="font-fact title-survey" style="color:#f18773"> 
				Welcome to Clearblue Survey
			</h3>
		</div>
	</div>
	<div class="row customer-info">
		<div class="col-md-12 mb-4">
			<div class="row">
				<div class="col-md-6 px-2">
					<div class="form-floating mb-3" style="right:10px;">
						<input type="text" class="form-control customer-info-input input-firstname" name="newFirstName" id="floatingFName" placeholder="First name" value="{{predefine-fullname}}">
						<label for="floatingFName">Full Name</label>
						<small class="small-customer-info-msg"></small>
					</div>
				</div>
				<div class="col-md-6 px-2">
					<div class="form-floating mb-3" style="right:10px;">
						<input type="email" class="form-control customer-info-input input-email" name="newEmail" id="floatingEmail" placeholder="email" value="{{predefine-email}}">
						<label for="floatingEmail">Your Email</label>
						<small class="small-customer-info-msg"></small>
						<input type="hidden" class="form-control status-input-email">
						<input type="hidden" class="form-control status-code-email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 px-2">
					<div class="form-floating mb-3" style="right:10px;">
						<input type="text" class="form-control customer-info-input input-mobilenumber" id="floatingMobileNo" name="subscriber_question15" placeholder="mobile no" value="{{predefine-mobileno}}">
						<label for="floatingMobileNo">Your Contact No</label>
						<small class="small-customer-info-msg"></small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 px-2 text-center">
					<button type="button" class="btn btn-primary btn-cb-custom btn-next-customer" style="position: relative; right: 10px; margin-top:1%;font-weight: 200;">Next</button>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" class="checkHighlight" value="">
	<div class="row survey-row" style="display:none;">
		<div class="col-md-12" style="margin-top:20px;">
			<div id="clearbluewizzard">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="row row-form row-custom" >
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">1. As you’re trying to conceive, right now you feel?</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question1" id="quest1a" type="radio" name="subscriber_question1" value="love">
									<label class="form-check-label" for="quest1a">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/in-love.png" class="img-fluid rounded float-start" alt="inlove" style="width:15%;">
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question1" id="quest1b" type="radio" name="subscriber_question1" value="crying">
									<label class="form-check-label" for="quest1b">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/sad.png" class="img-fluid rounded float-start" alt="crying" style="width:15%;">
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question1" id="quest1c" type="radio" name="subscriber_question1" value="sleepy">
									<label class="form-check-label" for="quest1c">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/sleepy.png" class="img-fluid rounded float-start" alt="sleepy" style="width:15%;">
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question1" id="quest1d" type="radio" name="subscriber_question1" value="happy">
									<label class="form-check-label" for="quest1d">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/happy.png" class="img-fluid rounded float-start" alt="happy" style="width:15%;">
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 2 (emoji chart) -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom" >
						<div class="col-md-12 text-center">
							<h3 class="label-cb-custom"> How we feeling right now</h3>
						</div>
					</div>
					<div class="row row-custom">
						<div id="mmy-chartfeeling" class="amchart-mmy">
							<center><h3 class="mt-4"> Loading graph...</h3></center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 3  -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">2. You might want to skip this question, but your age is…?</label>
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question2" type="radio" id="quest2a" name="subscriber_question2" value="under 30">
									<label class="form-check-label label-cb-custom" for="quest2a">
										still young &amp; Under 30
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question2" type="radio" id="quest2b" name="subscriber_question2" value="30 to 39">
									<label class="form-check-label label-cb-custom" for="quest2b">
										Early thirties 30 - 39, but I’m not worried
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question2" type="radio" id="quest2c" name="subscriber_question2" value="above 40">
									<label class="form-check-label label-cb-custom" for="quest2c">
										40 something &amp; fabulous
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 4  -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12 text-center">
							<p class="font-fact fact-of-the-day label-cb-custom">
								In general, ageing does affect fertility. A woman &amp; man's peak productive period is usually in their 20s.
							</p>
						</div>
					</div>
					<div class="row row-custom">
						<div id="mmy-chartproductiveperiod" class="amchart-mmy">
							<center><h3 class="mt-4"> Loading graph...</h3></center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 5  -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom label-cb-custom">3. No pressure or anything but so far, you’ve been trying for…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question3" type="radio" id="quest3a" name="subscriber_question3" value="Just recently started & enjoying it so far">
									<label class="form-check-label label-cb-custom" for="quest3a">
										Just recently started & enjoying it so far
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question3" type="radio" id="quest3b" name="subscriber_question3" value="Less than a year">
									<label class="form-check-label label-cb-custom" for="quest3b">
										Less than a year
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question3" type="radio" id="quest3c" name="subscriber_question3" value="12 months or more">
									<label class="form-check-label label-cb-custom" for="quest3c">
										12 months or more
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 6 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-map-malaysia card-fact-box">
									<img class="card-img" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/map.png">
									<div class="card-img-overlay text-center">
										<blockquote class="blockquote blockquote-map-malaysia" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day  " style="color:white;">
												Did you know the number of children <br>born per woman in 2019 was 1.8?<br> A huge decline from 4.9 in 1970
											</p>
											<footer class="blockquote-footer font-fact" style="color:white; margin-top:5px;">Source
												<cite title="Department of Statistics Malaysia" style="font-style: italic;">Department of Statistics Malaysia</cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 7  -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">4. Time to open up! When it comes to miscarriage…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question4" type="radio" id="quest4a" name="subscriber_question4" value="never_experience">
									<label class="form-check-label label-cb-custom" for="quest4a">
										I’ve never experienced it
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question4" type="radio" id="quest4b" name="subscriber_question4" value="had_one">
									<label class="form-check-label label-cb-custom" for="quest4b">
										I had one
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question4" type="radio" id="quest4c" name="subscriber_question4" value="more_than_one">
									<label class="form-check-label label-cb-custom" for="quest4c">
										I’ve had more than one
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 8 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-miscarrige card-fact-box">
									<div class="text-center pt-3">
									<img class="card-img-top image-miscarriage" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/20.png" >
									</div>
									<div class="card-body text-center label-cb-custom">
										<blockquote class="blockquote mb-0" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day" style="color:white;">
												It may be comforting to know that <font class="font-fact-highlight">you’re not alone</font>. Miscarriage is possibly more common than you think; affecting affecting up to 20% of pregnant women.
											</p>
											
											<footer class="blockquote-footer font-fact" style="color:white; margin-top:5px;">Source
												<cite title="" style="font-style: italic">Obsterical and Gynaecological  Society of Malaysia</cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 9  -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">5. Don’t be shy now! Making love with your partner when trying to conceive is…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question5" type="radio" id="quest5a" name="subscriber_question5" value="romantic">
									<label class="form-check-label label-cb-custom" for="quest5a">
										Romantic
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question5" type="radio" id="quest5b" name="subscriber_question5" value="stressful">
									<label class="form-check-label label-cb-custom" for="quest5b">
										Stressful
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question5" type="radio" id="quest5c" name="subscriber_question5" value="workout">
									<label class="form-check-label label-cb-custom" for="quest5c">
										A workout
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question5" type="radio" id="quest5d" name="subscriber_question5" value="full_time_job">
									<label class="form-check-label label-cb-custom" for="quest5d">
										A full-time job
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 10 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-map-malaysia card-fact-box">
									<div class="card-body text-center >
										<blockquote class="blockquote mb-0 label-cb-custom" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day" style="color:white;">
												<font class="font-fact-highlight">A friendly reminder:</font> 
												We understand trying for a baby can be an overwhelming experience, but don’t let it affect your sex life. 
												Try your best to spice things up in the bedroom & just enjoy the ride! 
											</p>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 11 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">6. Let’s be honest: Your main concern so far about trying for a baby is…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question6" type="radio" id="quest6a" name="subscriber_question6" value="my_health">
									<label class="form-check-label label-cb-custom" for="quest6a">
										My health
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question6" type="radio" id="quest6b" name="subscriber_question6" value="my_career">
									<label class="form-check-label label-cb-custom" for="quest6b">
										My age
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question6" type="radio" id="quest6c" name="subscriber_question6" value="my_partner">
									<label class="form-check-label label-cb-custom" for="quest6c">
										My career
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question6" type="radio" id="quest6d" name="subscriber_question6" value="my_financial_status">
									<label class="form-check-label label-cb-custom" for="quest6d">
										My financial status
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 12 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-map-malaysia card-fact-box">
									<div class="card-body" >
										<blockquote class="blockquote mb-0 label-cb-custom" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day" style="color:white;">
												<font class="font-fact-highlight">Hey, look at what we’ve just discovered:</font> A person’s age, having a career & earning an income is actually one of the 
												<font class="font-fact-highlight">highest contributing factors to affect fertility</font> decisions among Malaysian women.
											</p>
											<footer class="blockquote-footer font-fact" style="color:white; margin-top:5px;">Source
												<cite title="" style="font-style: italic;">Ministry of Woman, Family and Community Development</cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 13 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">7. Let’s reminisce! When news of your pre-pregnancy plans first broke out, everyone was…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question7" type="radio" id="quest7a" name="subscriber_question7" value="Loving & supportive">
									<label class="form-check-label label-cb-custom" for="quest7a">
										Loving & supportive
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question7" type="radio" id="quest7b" name="subscriber_question7" value="being judgemental">
									<label class="form-check-label label-cb-custom" for="quest7b">
										Being judgemental
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question7" type="radio" id="quest7c" name="subscriber_question7" value="asking too many questions">
									<label class="form-check-label label-cb-custom" for="quest7c">
										Asking too many questions
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question7" type="radio" id="quest7d" name="subscriber_question7" value="having too many opinions">
									<label class="form-check-label label-cb-custom" for="quest7d">
										Having too many opinions
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question7" type="radio" id="quest7e" name="subscriber_question7" value="feeling sorry for me">
									<label class="form-check-label label-cb-custom" for="quest7e">
										Feeling sorry for me
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 14 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12 text-center">
							<p class="font-fact fact-of-the-day label-cb-custom">
								This is what some of us have experienced before
							</p>
						</div>
					</div>
					<div class="row row-custom">
						<div id="mmy-chartprepregnancy" class="amchart-mmy" style="min-height:387px;"></div>
					</div>
				</section>
				
				<!-- SECTION 15 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">8. Oh boy! So with all the pressure of getting pregnant fast, you’re…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question8" type="radio" id="quest8a" name="subscriber_question8" value="going with my own flow here">
									<label class="form-check-label label-cb-custom" for="quest8a">
										Going with my own flow here
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question8" type="radio" id="quest8b" name="subscriber_question8" value="looking forward to having a lot of sex">
									<label class="form-check-label label-cb-custom" for="quest8b">
										Looking forward to having a lot of sex
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question8" type="radio" id="quest8c" name="subscriber_question8" value="going crazy looking at baby bump photos on social media">
									<label class="form-check-label label-cb-custom" for="quest8c">
										Going crazy looking at baby bump photos on social media
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 16 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-map-malaysia card-fact-box">
									<div class="card-body" >
										<blockquote class="blockquote mb-0 label-cb-custom" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day" style="color:white;">
												<font class="font-fact-highlight">Pssst… here’s a tip:</font> Did you know an ovulation test can maximise your chances of getting pregnant? It’s good to know your most fertile days when you 
												can get pregnant just by using an ovulation test. A great way to help speed things up in the baby-making department!
											</p>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				<!-- SECTION 17 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">9. Tell us your secret! You manage your emotions when trying to get pregnant by…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question9" type="radio" id="quest9a" name="subscriber_question9" value="exchange_my_exp_other_mom">
									<label class="form-check-label label-cb-custom" for="quest9a">
										Exchanging my experience with other mums
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question9" type="radio" id="quest9b" name="subscriber_question9" value="taking_break_baby_making">
									<label class="form-check-label label-cb-custom" for="quest9b">
										Taking a break from baby-making
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question9" type="radio" id="quest9c" name="subscriber_question9" value="not_letting_my_period_down">
									<label class="form-check-label label-cb-custom" for="quest9c">
										Not letting my period get me down
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question9" type="radio" id="quest9d" name="subscriber_question9" value="practice_relaxtion_technique">
									<label class="form-check-label label-cb-custom" for="quest9d">
										Practising relaxation techniques
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question9" type="radio" id="quest9e" name="subscriber_question9" value="limiting_going_online_to_find_out_pregnancy_stuff">
									<label class="form-check-label label-cb-custom" for="quest9e">
										Limiting going online to find out about pregnancy stuff
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 18 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12 text-center">
							<p class="font-fact fact-of-the-day label-cb-custom">
								Wow! Here’s how many women manage their emotions just like you
							</p>
						</div>
					</div>
					<div class="row row-custom">
						<div id="mmy-chartshareemotion" class="amchart-mmy" style="min-height:387px;">
							<center><h3 class="mt-4"> Loading graph...</h3></center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 19 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">10. Your biggest “cheerleader” throughout your beautiful baby-making journey is…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question10" type="radio" id="quest10a" name="subscriber_question10" value="my_partner">
									<label class="form-check-label label-cb-custom" for="quest10a">
										My partner
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question10" type="radio" id="quest10b" name="subscriber_question10" value="my_family">
									<label class="form-check-label label-cb-custom" for="quest10b">
										My family
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question10" type="radio" id="quest10c" name="subscriber_question10" value="my_friends">
									<label class="form-check-label label-cb-custom" for="quest10c">
										My friends
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question10" type="radio" id="quest10d" name="subscriber_question10" value="my_colleagues">
									<label class="form-check-label label-cb-custom" for="quest10d">
										My colleagues
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question10" type="radio" id="quest10e" name="subscriber_question10" value="kind_strangers">
									<label class="form-check-label label-cb-custom" for="quest10e">
										Kind strangers
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 20 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-custom">
						<div class="col-md-12">
							<center>
								<div class="card card-map-malaysia card-fact-box">
									<div class="card-body" >
										<blockquote class="blockquote mb-0 label-cb-custom" style="border-left: 0px;">
											<p class="font-fact fact-of-the-day" style="color:white;">
												<font class="font-fact-highlight">A friendly reminder:</font> It has been proven that couples who sought support had improved fertility rates. So, go ahead & seek support when you're trying to get pregnant. 
												We know that it can sometimes seem as if the whole world already has a baby or is expecting one. 
											</p>
											<footer class="blockquote-footer font-fact" style="color:white; margin-top:5px;">Source
												<cite title="Department of Statistics Malaysia" style="font-style: italic;"></cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</center>
						</div>
					</div>
				</section>
				
				<!-- SECTION 21 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row row-form row-custom">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">11. Spill the tea! Your no.1 source when planning for your trying-to-conceive journey is…</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question11" type="radio" name="subscriber_question11" id="quest11a" value="seek advice from a gynecologist">
									<label class="form-check-label label-cb-custom" for="quest11a">
										Seek advice from a gynecologist/fertility specialist
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question11" type="radio" name="subscriber_question11" id="quest11b" value="get tips from other mums">
									<label class="form-check-label label-cb-custom" for="quest11b">
										Get tips from other mums
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question11" type="radio" name="subscriber_question11" id="quest11c" value="track using fertility tools">
									<label class="form-check-label label-cb-custom" for="quest11c">
										Track using fertility tools (eg. ovulation kit)
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question11" type="radio" name="subscriber_question11" id="quest11d" value="read up on pregnancy tips online">
									<label class="form-check-label label-cb-custom" for="quest11d">
										Read up on pregnancy tips online
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-form row-custom mt-4">
						<div class="col-md-12 text-left">
							<label class="label-cb-custom">12. Which brand do you trust the most when it comes to conceiving?</label> 
							<div class="p-2">
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question12" type="radio" name="subscriber_question12" id="quest12a" value="ClearBlue">
									<label class="form-check-label label-cb-custom" for="quest12a">
										Clearblue
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input noUniform custom-checkbox subscriber_question12" type="radio" name="subscriber_question12" id="quest12b" value="Others">
									<label class="form-check-label label-cb-custom" for="quest12b">
										Others
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

<button type="submit" id="dummy-btn-to-submit" name="submit" style="display:none;">hidden submitbutton</button>
<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
</div>
<p>
<script type="text/javascript">

	var emailvalidation = function(){
		var eventID  = 95;
		var email 	 = $('body').find('.input-email').val();
		$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html('<i class="fas fa-spinner fa-spin"></i> Checking...');
		
		if(email != '' && email != undefined && email != null)
		{
			$.ajax({
				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
				data	 :{'checkemail': email, 'eventid': eventID, 'password' : ''},
				dataType :'json',
				method 	 : 'post',
				success	 : function(result){
					if(result.status_code == 'exist_customer_event')
					{
						Swal.fire({
							icon: 'info',
							title: 'Oops...',
							text: 'You have already joined this survey',
						})
						
						$('body').find('.btn-next-customer').hide('fast');
						$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html('<i class="fas fa-info-circle"></i> You have already joined this survey');
					}
					else
					{
						$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html('');
						$('body').find('.status-input-email').val(result.status);
						$('body').find('.status-code-email').val(result.status_code);
					}
				}
			});
		}
		else
		{
			$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html('');
		}
	}
	
	var validationCustomerInfo = function(){
		$('body').find('.customer-info-input').removeClass('is-valid');
		$('body').find('.customer-info-input').removeClass('is-invalid');
		$('body').find('.btn-next-customer').show('fast');
		
		var firstname = $('body').find('.input-firstname').val();
		var email     = $('body').find('.input-email').val();
		var mobileno  = $('body').find('.input-mobilenumber').val();
		var flagCheck = true; /* if true can proceed */
		
		if(firstname == '' || firstname == undefined || firstname == null)
		{
			var msg = 'Please insert full name';
			$('body').find('.input-firstname').addClass('is-invalid');
			$('.input-firstname').closest('.form-floating').find('.small-customer-info-msg').html(msg);
			flagCheck = false;
		}
		else
		{
			$('body').find('.input-firstname').removeClass('is-invalid');
			$('.input-firstname').closest('.form-floating').find('.small-customer-info-msg').html("");
		}
		
		if(email == '' || email == undefined || email == null)
		{
			var msg = 'Please insert email';
			$('body').find('.input-email').addClass('is-invalid');
			$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html(msg);
			flagCheck = false;
		}
		else
		{
			emailvalidation();
			$('body').find('.input-email').removeClass('is-invalid');
			$('.input-email').closest('.form-floating').find('.small-customer-info-msg').html("");
		}
		
		if(mobileno == '' || mobileno == undefined || mobileno == null)
		{
			var msg = 'Please insert mobile no';
			$('body').find('.input-mobilenumber').addClass('is-invalid');
			$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
			flagCheck = false;
		}
		else
		{
			var mobilenumber = mobileno.replace("-"," ");
			mobileno 		 = mobilenumber.trim();
			var prefix 		 = mobileno.substring(0,3);
            var firstNo 	 = mobileno.substring(0,1);
            var phoneLength  = mobileno.length;
			
			$('body').find('.input-mobilenumber').removeClass('is-invalid');
			$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html("");
			
			if(firstNo != 0 && firstNo != 5){
                msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
				$('body').find('.input-mobilenumber').addClass('is-invalid');
				$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
				flagCheck = false;
            }
			else if(firstNo == '0'){
				var prefixArray = ["010", "011", "012", "013", "014", "015", "016", "017", "018", "019"];
				var checkPrefix = prefixArray.includes(prefix);
				if(checkPrefix){
					if(prefix == '011'){
						console.log("2");
						if(phoneLength < 10 || phoneLength > 11){
							msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
							$('body').find('.input-mobilenumber').addClass('is-invalid');
							$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
							flagCheck = false;
						}
					}
					else{
						if(phoneLength < 10 || phoneLength > 10){
							console.log("3");
							msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
							$('body').find('.input-mobilenumber').addClass('is-invalid');
							$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
							flagCheck = false;
						}
					}  
				}
				else
				{
					console.log("4");
					msg = "Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).";
					$('body').find('.input-mobilenumber').addClass('is-invalid');
					$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
					flagCheck = false;
				}
			}
			else if(firstNo == '5'){
				if(phoneLength < 9 || phoneLength > 9){
					console.log("5");
                    msg = "Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777";
					$('body').find('.input-mobilenumber').addClass('is-invalid');
					$('.input-mobilenumber').closest('.form-floating').find('.small-customer-info-msg').html(msg);
					flagCheck = false;
                }
			}
		}
		
		if(flagCheck == false){
			$('.is-invalid').filter(":first").focus();
		}
		
		return flagCheck;
	}
	
	var chartFeeling = function(){
		var colorLove  = "#ffffff";
		var colorCry   = "#ffffff";
		var colorSleep = "#ffffff";
		var colorHappy = "#ffffff";
		var question_1 = $('body').find('.subscriber_question1:checked').val();
		
		if(question_1 == 'love')
		{
			colorLove = "#1d9dd9";
		}
		else if(question_1 == 'crying')
		{
			colorCry = "#1d9dd9";
		}
		else if(question_1 == 'sleepy')
		{
			colorSleep = "#1d9dd9";
		}
		else if(question_1 == 'happy')
		{
			colorHappy = "#1d9dd9";
		}
		
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create chart instance
		var chart = am4core.create("mmy-chartfeeling", am4charts.XYChart);

		// Add data
		chart.data = [{
			"name": "inlove",
			"points": 55654,
			"color": colorLove,
			"bullet": "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/in-love.png"
		}, {
			"name": "crying",
			"points": 36456,
			"color": colorCry,
			"bullet": "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/sad.png"
		}, {
			"name": "sleepy",
			"points": 25724,
			"color": colorSleep,
			"bullet": "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/sleepy.png"
		}, {
			"name": "happy",
			"points": 60654,
			"color": colorHappy,
			"bullet": "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Clearblue/happy.png"
		}];

		// Create axes
		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "name";
		categoryAxis.renderer.grid.template.disabled = true;
		categoryAxis.renderer.minGridDistance = 30;
		categoryAxis.renderer.inside = false;
		categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
		categoryAxis.renderer.labels.template.fontSize = 20;
		categoryAxis.renderer.baseGrid.disabled = true;
		

		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.renderer.grid.template.strokeDasharray = "4,4";
		valueAxis.renderer.labels.template.disabled = true;
		valueAxis.renderer.baseGrid.disabled = true;
		valueAxis.min = 0;

		// Do not crop bullets
		chart.maskBullets = false;
	
		// Remove padding
		chart.paddingBottom = 0;

		// Create series
		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.valueY = "points";
		series.dataFields.categoryX = "name";
		series.columns.template.propertyFields.fill = "color";
		series.columns.template.propertyFields.stroke = "color";
		series.columns.template.column.cornerRadiusTopLeft = 20;
		series.columns.template.column.cornerRadiusTopRight = 20;
		series.columns.template.width = am4core.percent(40);
		// series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/b]";

		// Add bullets
		var bullet = series.bullets.push(new am4charts.Bullet());
		var image = bullet.createChild(am4core.Image);
		image.horizontalCenter = "middle";
		image.verticalCenter = "bottom";
		image.dy = 20;
		image.y = am4core.percent(100);
		image.propertyFields.href = "bullet";
		image.tooltipText = series.columns.template.tooltipText;
		image.propertyFields.fill = "color";
		image.filters.push(new am4core.DropShadowFilter());

	}
	
	var chartBestProductive = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// create chart
		var chart = am4core.create("mmy-chartproductiveperiod", am4charts.GaugeChart);
		chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

		chart.innerRadius = -25;

		var axis = chart.xAxes.push(new am4charts.ValueAxis());
		axis.min = 0;
		axis.max = 100;
		axis.strictMinMax = true;
		axis.renderer.grid.template.stroke = new am4core.InterfaceColorSet().getFor("background");
		axis.renderer.labels.template.fill = am4core.color("#ffffff");
		axis.renderer.grid.template.strokeOpacity = 0.3;

		var colorSet = new am4core.ColorSet();
		console.log(colorSet);
		var range0 = axis.axisRanges.create();
		range0.value = 0;
		range0.endValue = 50;
		range0.axisFill.fillOpacity = 1;
		range0.axisFill.fill = colorSet.getIndex(0);
		range0.axisFill.zIndex = - 1;

		var range1 = axis.axisRanges.create();
		range1.value = 50;
		range1.endValue = 80;
		range1.axisFill.fillOpacity = 1;
		range1.axisFill.fill = colorSet.getIndex(2);
		range1.axisFill.zIndex = -1;

		var range2 = axis.axisRanges.create();
		range2.value = 80;
		range2.endValue = 100;
		range2.axisFill.fillOpacity = 1;
		range2.axisFill.fill = colorSet.getIndex(4);
		range2.axisFill.zIndex = -1;

		var hand = chart.hands.push(new am4charts.ClockHand());
		hand.fill = am4core.color("#f9634e");
		hand.stroke = am4core.color("#f9634e");
		hand.radius = am4core.percent(85);

		// using chart.setTimeout method as the timeout will be disposed together with a chart
		chart.setTimeout(randomValue, 2000);
		
		function randomValue() {
			var max 		= 30;
			var min  		= 20
			var randomAge   = Math.floor(Math.random() * (max - min + 1) + min);
			hand.showValue(randomAge, 1000, am4core.ease.cubicOut);
			chart.setTimeout(randomValue, 2000);
		}
	}
	
	var chartPrepregnancy = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		var chart = am4core.create("mmy-chartprepregnancy", am4charts.XYChart);
		chart.padding(10, 10, 10, 10);
		chart.responsive.enabled = true;
		
		chart.data = [
		  {
			category: "Loving & supportive",
			quantity: 725
		  },
		  {
			category: "Being judgemental",
			quantity: 625
		  },  
		  {
			category: "Asking too many questions",
			quantity: 602
		  },
		  {
			category: "Having too many opinions",
			quantity: 509
		  }
		  ,{
			category: "Feeling sorry for me",
			quantity: 409
		  }
		];
		
		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.renderer.grid.template.location = 0;
		categoryAxis.dataFields.category = "category";
		categoryAxis.renderer.minGridDistance = 40;
		categoryAxis.fontSize = 13;
		categoryAxis.renderer.labels.template.dy = 5;

		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.min = 0;
		valueAxis.max = 1000;
		valueAxis.strictMinMax = true; 
		valueAxis.renderer.baseGrid.disabled = false;
		valueAxis.renderer.grid.template.disabled = true


		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.categoryX = "category";
		series.dataFields.valueY = "quantity";
		series.columns.template.tooltipText = "{valueY.value}";
		series.columns.template.tooltipY = 0;
		series.columns.template.column.cornerRadiusTopLeft = 5;
		series.columns.template.column.cornerRadiusTopRight = 5;
		series.columns.template.strokeOpacity = 0;
		series.columns.template.width = am4core.percent(20);
		
		
		// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
		series.columns.template.adapter.add("fill", function(fill, target){
		  return chart.colors.getIndex(target.dataItem.index);
		});
		
		var legend = new am4charts.Legend();
		legend.parent = chart.chartContainer;
		legend.itemContainers.template.togglable = false;
		legend.marginTop = 20;
		
		series.events.on("ready", function(ev) {
			var legenddata = [];
			series.columns.each(function(column) {
				
				legenddata.push({
					name: column.dataItem.categoryX + " : " + column.dataItem.valueY,
					fill: column.fill,
					columnDataItem: column.dataItem,
				})
			});
		  legend.data = legenddata;
		});
		
		/*  legend items toggle related columns as well as show tooltip on a column when rolled over a legend item. */
		legend.itemContainers.template.events.on("hit", function(ev) {
		  //console.log("Clicked on ", ev.target.dataItem.className);
			console.log(ev.target);
			if (!ev.target.isActive) {
				ev.target.isActive = true;
				ev.target.dataItem.dataContext.columnDataItem.hide();
			}
			else {
				ev.target.isActive = false;
				ev.target.dataItem.dataContext.columnDataItem.show();
			}
		});

		legend.itemContainers.template.events.on("over", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = true;
			ev.target.dataItem.dataContext.columnDataItem.column.showTooltip();
		});

		legend.itemContainers.template.events.on("out", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = false;
			ev.target.dataItem.dataContext.columnDataItem.column.hideTooltip();
		});
		
		legend.labels.template.fill = am4core.color("#ffffff");
		chart.responsive.rules.push({
		  relevant: function(target) {
			if (target.pixelWidth <= 400) {
				categoryAxis.renderer.labels.template.disabled  = true;
				valueAxis.renderer.labels.template.disabled = true;
				chart.padding(20, 20, 20, 20);
				return true;
			}
			return false;
		  },
		  state: function(target, stateId) {
			return;
		  }
		});
	}
	
	
	var chartShareEmotion = function(){
		
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		var chart = am4core.create("mmy-chartshareemotion", am4charts.XYChart);
		chart.padding(10, 10, 10, 10);
		chart.responsive.enabled = true;
		
		chart.data = [
		  {
			category: "Exchanging my experience with other mums",
			quantity: 725
		  },
		  {
			category: "Taking a break from baby-making",
			quantity: 625
		  },  
		  {
			category: "Not letting my period get me down",
			quantity: 602
		  },
		  {
			category: "Practising relaxation techniques",
			quantity: 509
		  }
		  ,{
			category: "Feeling sorry for me",
			quantity: 409
		  }
		];
		
		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.renderer.grid.template.location = 0;
		categoryAxis.dataFields.category = "category";
		categoryAxis.renderer.minGridDistance = 40;
		categoryAxis.fontSize = 13;
		categoryAxis.renderer.labels.template.dy = 5;

		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.min = 0;
		valueAxis.max = 1000;
		valueAxis.strictMinMax = true; 
		valueAxis.renderer.baseGrid.disabled = false;
		valueAxis.renderer.grid.template.disabled = true


		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.categoryX = "category";
		series.dataFields.valueY = "quantity";
		series.columns.template.tooltipText = "{valueY.value}";
		series.columns.template.tooltipY = 0;
		series.columns.template.column.cornerRadiusTopLeft = 5;
		series.columns.template.column.cornerRadiusTopRight = 5;
		series.columns.template.strokeOpacity = 0;
		series.columns.template.width = am4core.percent(20);
		
		var label = categoryAxis.renderer.labels.template;
		label.wrap = true;
		label.maxWidth = 150;
		
		
		// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
		series.columns.template.adapter.add("fill", function(fill, target){
		  return chart.colors.getIndex(target.dataItem.index);
		});
		
		var legend = new am4charts.Legend();
		legend.parent = chart.chartContainer;
		legend.itemContainers.template.togglable = false;
		legend.marginTop = 20;
		
		series.events.on("ready", function(ev) {
			var legenddata = [];
			series.columns.each(function(column) {
				
				legenddata.push({
					name: column.dataItem.categoryX + " : " + column.dataItem.valueY,
					fill: column.fill,
					columnDataItem: column.dataItem,
				})
			});
		  legend.data = legenddata;
		});
		
		/*  legend items toggle related columns as well as show tooltip on a column when rolled over a legend item. */
		legend.itemContainers.template.events.on("hit", function(ev) {
		  //console.log("Clicked on ", ev.target.dataItem.className);
			console.log(ev.target);
			if (!ev.target.isActive) {
				ev.target.isActive = true;
				ev.target.dataItem.dataContext.columnDataItem.hide();
			}
			else {
				ev.target.isActive = false;
				ev.target.dataItem.dataContext.columnDataItem.show();
			}
		});

		legend.itemContainers.template.events.on("over", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = true;
			ev.target.dataItem.dataContext.columnDataItem.column.showTooltip();
		});

		legend.itemContainers.template.events.on("out", function(ev) {
			ev.target.dataItem.dataContext.columnDataItem.column.isHover = false;
			ev.target.dataItem.dataContext.columnDataItem.column.hideTooltip();
		});
		
		legend.labels.template.fill = am4core.color("#ffffff");
		chart.responsive.rules.push({
		  relevant: function(target) {
			if (target.pixelWidth <= 400) {
				categoryAxis.renderer.labels.template.disabled  = true;
				valueAxis.renderer.labels.template.disabled = true;
				chart.padding(20, 20, 20, 20);
				return true;
			}
			return false;
		  },
		  state: function(target, stateId) {
			return;
		  }
		});
		legend.labels.template.truncate = false;
		legend.labels.template.wrap = true;
	}
	
	// var testAjx = function(){
		// $.ajax({
			// url		 : '../modules/enlineamixmod/graph_amchart/enlineamixmod-graph-process.php', 
			// data	 :{'test':'test1'},
			// dataType :'html',
			// method 	 : 'post',
			// success	 : function(result){
				// $('body').find('#first_graph').html(result);
			// }
		// });
		
	// }
	
	var alertError = function(){
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Please select one of these options before proceed',
		})
	}
	
	var checkHighlight = function(){
		$('body').find('.checkHighlight').val("false");
	}
	
	$(function(){
		$(window).load(function() {
		  $.uniform.restore(".noUniform");
		});
		
		$('body').find("#clearbluewizzard").steps({
				headerTag			  : "h4",
				bodyTag				  : "section",
				transitionEffect	  : "fade",
				enableAllSteps		  : true,
				enableKeyNavigation   : true,
				transitionEffectSpeed : 500,
				onInit 				  : function (event, currentIndex) { 
					console.log("oninit currentIndex" + currentIndex);
					$('body').find('.actions .disabled a').attr('href', '#cancel');
				},
				onCanceled 			  : function (event) { 
					$('body').find('.survey-row').hide('fast');
					$('body').find('.customer-info').show('fast');
				},
				onStepChanging		  : function (event, currentIndex, newIndex) { 
					$('body').find('.checkHighlight').val("");
					
					console.log("currentIndex = " + currentIndex + " newIndex = " + newIndex);
					if(newIndex > 0)
					{
						$('body').find('.title-survey').html('');
					}
					else
					{
						$('body').find('.title-survey').html('Welcome to Clearblue Survey');
					}
					
					if(currentIndex === 0)
					{
						var question_1 = $('body').find('.subscriber_question1:checked').val();
						if((question_1 == '' || question_1 == undefined || question_1 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 2)
					{
						
						var question_2 = $('body').find('.subscriber_question2:checked').val();
						if((question_2 == '' || question_2 == undefined || question_2 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 4)
					{
						var question_3 = $('body').find('.subscriber_question3:checked').val();
						if((question_3 == '' || question_3 == undefined || question_3 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 6)
					{
						var question_4 = $('body').find('.subscriber_question4:checked').val();
						if((question_4 == '' || question_4 == undefined || question_4 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 8)
					{
						var question_5 = $('body').find('.subscriber_question5:checked').val();
						if((question_5 == '' || question_5 == undefined || question_5 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 10)
					{
						var question_6 = $('body').find('.subscriber_question6:checked').val();
						if((question_6 == '' || question_6 == undefined || question_6 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 12)
					{
						var question_7 = $('body').find('.subscriber_question7:checked').val();
						if((question_7 == '' || question_7 == undefined || question_7 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 14)
					{
						var question_8 = $('body').find('.subscriber_question8:checked').val();
						if((question_8 == '' || question_8 == undefined || question_8 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 16)
					{
						var question_9 = $('body').find('.subscriber_question9:checked').val();
						if((question_9 == '' || question_9 == undefined || question_9 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 18)
					{
						var question_10 = $('body').find('.subscriber_question10:checked').val();
						if((question_10 == '' || question_10 == undefined || question_10 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if(currentIndex === 20)
					{
						var question_11 = $('body').find('.subscriber_question11:checked').val();
						if((question_11 == '' || question_11 == undefined || question_11 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
						
						var question_12 = $('body').find('.subscriber_question12:checked').val();
						if((question_12 == '' || question_12 == undefined || question_12 == null) && (newIndex > currentIndex))
						{
							alertError();
							checkHighlight();
							return false;
						}
					}
					
					if (newIndex === 1) {
						$('.steps ul').addClass('step-2');
						chartFeeling();
					} 
					else {
						$('.steps ul').removeClass('step-2');
					}
						
					if ( newIndex === 2 ) {
						$('.steps ul').addClass('step-3');
					} else {
						$('.steps ul').removeClass('step-3');
					} 
					
					if ( newIndex === 3 ) {
						$('.steps ul').addClass('step-4');
					} else {
						$('.steps ul').removeClass('step-4');
					}

					if ( newIndex === 4) {
						$('.steps ul').addClass('step-5');
					} else {
						$('.steps ul').removeClass('step-5');
					}
					
					if ( newIndex === 5) {
						$('.steps ul').addClass('step-6');
					} else {
						$('.steps ul').removeClass('step-6');
					}
					
					if ( newIndex === 6) {
						$('.steps ul').addClass('step-7');
					} else {
						$('.steps ul').removeClass('step-7');
					}
					
					if ( newIndex === 7) {
						$('.steps ul').addClass('step-8');
						chartPrepregnancy()
					} else {
						$('.steps ul').removeClass('step-8');
					}
					
					if ( newIndex === 8) {
						$('.steps ul').addClass('step-9');
					} else {
						$('.steps ul').removeClass('step-9');
					}
					
					if ( newIndex === 9) {
						$('.steps ul').addClass('step-10');
						chartShareEmotion();
					} else {
						$('.steps ul').removeClass('step-10');
					}
					
					if ( newIndex === 10) {
						$('.steps ul').addClass('step-11');
					} else {
						$('.steps ul').removeClass('step-11');
					}
					
					if ( newIndex === 11) {
						$('.steps ul').addClass('step-12');
					} else {
						$('.steps ul').removeClass('step-12');
					}
					
					if ( newIndex === 12) {
						$('.steps ul').addClass('step-13');
					} else {
						$('.steps ul').removeClass('step-13');
					}
					
					if ( newIndex === 13) {
						$('.steps ul').addClass('step-14');
					} else {
						$('.steps ul').removeClass('step-14');
					}
					
					if ( newIndex === 14) {
						$('.steps ul').addClass('step-15');
					} else {
						$('.steps ul').removeClass('step-15');
					}
					
					if ( newIndex === 15) {
						$('.steps ul').addClass('step-16');
					} else {
						$('.steps ul').removeClass('step-16');
					}
					
					if ( newIndex === 16) {
						$('.steps ul').addClass('step-17');
					} else {
						$('.steps ul').removeClass('step-17');
					}
					
					if ( newIndex === 17) {
						$('.steps ul').addClass('step-18');
					} else {
						$('.steps ul').removeClass('step-18');
					}
					
					if ( newIndex === 18) {
						$('.steps ul').addClass('step-19');
					} else {
						$('.steps ul').removeClass('step-19');
					}
					
					if ( newIndex === 19) {
						$('.steps ul').addClass('step-20');
					} else {
						$('.steps ul').removeClass('step-20');
					}
					
					if ( newIndex === 20) {
						$('.steps ul').addClass('step-21');
					} else {
						$('.steps ul').removeClass('step-21');
					}
					
					return true; 
					
				},
				onStepChanged :function (event, currentIndex, priorIndex) { 
					if(currentIndex === 0){
						$('body').find('.actions .disabled a').attr('href', '#cancel');
					}
					else{
						$('body').find('.actions a[href="#cancel"]').attr('href', '#previous');
					}
						
				},
				onFinished  : function(){
					$('body').find('#dummy-btn-to-submit').trigger('click');
				},
				labels: {
					finish: "Submit",
					next: "Next",
					previous: "Back",
					cancel: "Cancel",
					loading: "Loading ..."
				}
			});
			
			// Custom Steps Jquery Steps
			$('.wizard > .steps li a').click(function(){
				var stepHighlight = $('body').find('.checkHighlight').val();
				
				if(stepHighlight != "false")
				{
					$(this).parent().addClass('checked');
				}
				
				$(this).parent().prevAll().addClass('checked');
				$(this).parent().nextAll().removeClass('checked');
			});
			
			$('body').on('click', '.btn-next-customer', function(){
				var res = validationCustomerInfo();
				if(res == true){
					$('body').find('.survey-row').show('fast');
					$('body').find('.customer-info').hide('fast');
				}
			});
			
			$('body').on('blur', '.input-email', function(){
				validationCustomerInfo();
			});
			
			
		// testAjx();
		chartBestProductive();	
		emailvalidation();
	});
</script>
</p>
