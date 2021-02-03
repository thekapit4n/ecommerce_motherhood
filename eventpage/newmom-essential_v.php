<p>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
</p>
<style>
   <!--
	.row-form{
		margin-top:5px;
		margin-bottom:5px;
	}
		
	.box-overlay-display {
		background-color: #b4b3b482;      
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		z-index:2;
		display:block !important;
	}

	.text-overlay{
		position: relative;
		top: 50%;
		left: 50%;
		font-size: 35px;
		color: #4c4c4d;
		transform: translate(-50%,-50%);
		-ms-transform: translate(-50%,-50%);
	}
		
	.unclickable{
		cursor: not-allowed;
	}
		
	.background-grey-readonly{
		background-color:#b4b3b452 !important;
		color:#4c4c4d !important;
	}
		
	.btn-step1{
		background-color: #38a7ac;
		color: #fff;
		font-size: 18px;
		border-radius: 4px;
		padding: 8px 40px;
		min-width: 300px;
	}
		  
		.btn-step1:hover, .btn-step1:focus{
			background-color: #1C6F74;
			color: white;
		}
			
		.btn-step1[disabled], .btn-step1[disabled]:hover{
			background-color: #38a7ac87 !important;
		}
		
				
      p{
			  margin-bottom:20px;
			  font-size:18px;
			  line-height:28px;
			  color:#444;
		  }
          
          h1,h2{
              font-weight:700;
          }
          .weeklyBox{
              background-color:#005b9c;
              color:white;
              font-size: 20px;
              font-weight: bold;
              padding: 20px 0px;
              cursor: pointer;
              width:200px;
              margin-right:3px;
              display: inline-block;
              color: white;
              text-align: center;
              text-decoration: none;
              margin-bottom:15px;
              border-radius:12px;
          }
          .weeklyBox:hover{
              background-color:#29969b;
          }
      #style-7::-webkit-scrollbar-track
      {
          background-color: #F5F5F5;
          border-radius: 10px;
      }
      
      #style-7::-webkit-scrollbar
      {
          width: 10px;
          background-color: #F5F5F5;
      }
      
      #style-7::-webkit-scrollbar-thumb
      {
          border-radius: 10px;
          background-color: #7a99d9;
      }
	  @media only screen and (max-width: 680px){
		 .enlinea_slider{
			 max-width:398px;
		 }
	  }
     -->
</style>
<!-- 
	Note:
	all the wording start with "{{ somtext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
-->
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/new-essential-header.png" width="100%" /></div>
	<div class="row row-question" style="padding-top: 20px; padding-bottom: 20px;">
		<div class="col-md-10 col-md-offset-1" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
			<p style="font-size: 25px; color: #005b9c; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;" class="title-form">{{pre-define-titleform}}</p>
			<div class="row row-form">
				<div class="col-md-6 text-left question-welcomekit">
					<label>Email</label> 
					<input type="email" id="emailNew" name="newEmail" class="form-control input-info {{greybg-readonly-class}}" placeholder="Email" required="required" style="background-color: white;" value="{{pre-define-email}}" data-input-disabled/> 
					<input type="hidden" id="scrollingInput" class="form-control" value="{{pre-scrolling-val}}"/> 
					<input type="hidden" id="subscribe-id" class="form-control" value="{{pre-subscribe-id}}"/> 
					<small class="error-msg"></small>
				</div>
				<div class="col-md-6 text-left question-welcomekit div-password" style="display:{{display-password-input}}">
					<label>Password</label> 
					<input type="password" id="newPassword" name="newPassword" class="form-control input-info {{greybg-readonly-class}}" minlength="6/" placeholder="Password" required="required" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
			</div>
			<div class="row row-form">
				<div class="col-md-6 text-left question-welcomekit">
					<label>First Name</label> 
					<input type="text" id="newFirstName" name="newFirstName" class="form-control input-info {{greybg-readonly-class}}" placeholder="First Name" required="required"  autocomplete="off"  value="{{pre-define-fistname}}" data-input-disabled/>
					<small class="error-msg"></small>
				</div>
				<div class="col-md-6 text-left question-welcomekit">
					<label>Last Name</label> 
					<input type="text" id="newLastName" name="newLastName" class="form-control input-info {{greybg-readonly-class}}" placeholder="Last Name" required="required" autocomplete="off" value="{{pre-define-lastname}}" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
			</div>
			<div class="row row-form">
				<div class="col-md-6 text-left question-welcomekit">
					<label>Mobile Number</label>
					<input type="text" id="mobilenumber" name="subscriber_question1" class="form-control input-info {{greybg-readonly-class}}"  placeholder="Mobile number without '-'" required="required" autocomplete="off" value="{{pre-define-mobileno}}" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
				
				<div class="col-md-6 text-left question-welcomekit">
					<label>Your Date of Birth</label> 
					<input name="subscriber_question2" type="text" id="dobParent" required="required" placeholder="DOB" class="form-control dob-parent input-info {{greybg-readonly-class}}" value="{{pre-define-dob}}" data-input-disabled/>
					<small class="error-msg"></small>
				</div>
			</div>
			<div class="row row-form">
				<div class="col-md-12 text-left question-welcomekit">
					<label>Full Address</label> 
					<input type="text" name="subscriber_question3" id="full-address"  required="required" placeholder="Full Address" class="form-control input-info {{greybg-readonly-class}}" autocomplete="off" value="{{pre-define-fulladdress}}" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
			</div>
			<div class="row row-form">
				<div class="col-md-4 text-left question-welcomekit">
					<label>Postcode</label> 
					<input type="text" name="subscriber_question4" id="postcode-address" class="form-control input-info {{greybg-readonly-class}}" required="required" placeholder="Postcode" autocomplete="off" value="{{pre-define-postcode}}" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
				<div class="col-md-4 text-left question-welcomekit">
					<label>City</label> 
					<input name="subscriber_question5" id="city-address" type="text" size="60" required="required" placeholder="City" class="form-control input-info {{greybg-readonly-class}}" autocomplete="off" value="{{pre-define-city}}" data-input-disabled/> 
					<small class="error-msg"></small>
				</div>
				<div class="col-md-4 text-left question-welcomekit" style="padding-top: 0px;">
					<label>State</label>
					<select name="subscriber_question7" id="state-address" class="input-info {{greybg-readonly-class}}"  style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;" required="required" data-input-disabled>
					   <option value="">State</option>
					   <option value="Selangor" dataselected-selangor>Selangor</option>
					   <option value="Wilayah Persekutuan" dataselected-wilayah_persekutuan>Wilayah Persekutuan</option>
					   <option value="Perlis" dataselected-perlis>Perlis</option>
					   <option value="Kedah" dataselected-kedah>Kedah</option>
					   <option value="Pulau Pinang" dataselected-pulau_pinang>Pulau Pinang</option>
					   <option value="Perak" dataselected-perak>Perak</option>
					   <option value="Negeri Sembilan" dataselected-negeri_sembilan>Negeri Sembilan</option>
					   <option value="Melaka" dataselected-melaka>Melaka</option>
					   <option value="Johor" dataselected-johor>Johor</option>
					   <option value="Kelantan" dataselected-kelantan>Kelantan</option>
					   <option value="Terengganu" dataselected-terengganu>Terengganu</option>
					   <option value="Pahang" dataselected-pahang>Pahang</option>
					   <option value="Sabah" dataselected-sabah>Sabah</option>
					   <option value="Sarawak" dataselected-sarawak>Sarawak</option>
					   <option value="Labuan" dataselected-labuan>Labuan</option>
					</select>
					<small class="error-msg"></small>
				 </div>
			</div>
			<div class="row row-form">
				
			</div>
			 <div class="clearfix"></div>
			 <div class="col-md-4 col-md-offset-4" style="padding-top: 20px;">
				<button type="submit" name="submit" id="btn-submit-form1" class="btn btn-default btn-step1" style="display:{{display-btn-submit-form1}}"> Submit </button>
			</div>
		</div>
	</div>
	
	<div id="row-features" class="row row-feature" style="position: relative;min-height:600px;">
		<div class="div-overlay {{pre-define-display-class-overlay}}" style="display:{{pre-define-display-overlay}};">
			<div class="text-overlay" style="display:{{pre-define-display-overlay}};">Register to access our tool</div>
		</div>
		<div class="row row-icon-features">
			<div class="col-md-3 col-xs-6">
				<img id="myImage" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/due-date-calculator.png" class="img-responsive icon-image clicker-img {{pre-define-unclickable-class}}"  alt="due-date-calculator" width="100%" data-typeview="dueDateCalculator"/>
			</div>
			<div class="col-md-3 col-xs-6">
				<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/baby's-journey.png" class="img-responsive icon-image clicker-img {{pre-define-unclickable-class}}"   alt="baby-journey" width="100%" data-typeview="pregnancyJourney" />
			</div>
			<div class="col-md-3 col-xs-6">
				<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/eArtboard+%E2%80%93+29.png" class="img-responsive icon-image clicker-img {{pre-define-unclickable-class}}"  alt="newmom" width="100%" data-typeview="eMag" />
			</div>
			<div class="col-md-3 col-xs-6">
				<a href="https://story.motherhood.com.my/blog/category/recipes-foodie/" id="receipehref" target="_blank" rel="noopener"> 
					<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/recipes-icon.png" class="img-responsive icon-image clicker-img-href {{pre-define-unclickable-class}}" alt="recipe" width="100%" /> 
				</a>
			</div>
		</div>
		
		<!-- due date calculator -->
		<div class="dueDateCalculator tools" style="display:none;min-height:400px">
			<div id="front" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
				<h1 style="color: #ec4f9b;">Due Date Calculator</h1>
				<h2>Calculation Method</h2>
				<select name="method" id="way" class="text-center" style="margin: 0 auto; width: 100%; text-align: center; font-size: 1.5em; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
					<option value="period" selected="selected">Last Period</option>
					<option value="conception">Conception Date</option>
					<option value="ivf">IVF</option>
				</select>
			</div>
		   <div id="last_period" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			  <h2>The first day of your last period</h2>
			  <br /> <input type="date" name="previousPeriod" id="previous_period" class="text-center" style="margin: 0 auto; width: 100%; font-size: 1.5em; text-align: center; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" />
			  <h2>Cycle Length</h2>
			  <select name="cycle_length" id="cycle" class="text-center" style="margin: 0 auto; width: 100%; text-align: center; font-size: 1.5em; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
				 <option value="21">21 Days</option>
				 <option value="22">22 Days</option>
				 <option value="23">23 Days</option>
				 <option value="24">24 Days</option>
				 <option value="25">25 Days</option>
				 <option value="26">26 Days</option>
				 <option value="27">27 Days</option>
				 <option value="28" selected="selected">28 Days</option>
				 <option value="29">29 Days</option>
				 <option value="30">30 Days</option>
				 <option value="31">31 Days</option>
				 <option value="32">32 Days</option>
				 <option value="33">33 Days</option>
				 <option value="34">34 Days</option>
				 <option value="35">35 Days</option>
			  </select>
		   </div>
		   <div id="conception" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			  <h2>Date of Conception</h2>
			  <input type="date" id="concept_date" name="conceptionDate" class="text-center" style="margin: 0 auto; font-size: 1.5em; width: 100%; text-align: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" />
		   </div>
		   <div id="ivf" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			  <h2>Date of Transfer</h2>
			  <input type="date" id="ivf_date" name="ivfDate" class="text-center" style="margin: 0 auto; width: 100%; font-size: 1.5em; text-align: center; margin-bottom: 20px; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" /> <input type="radio" name="ivfDay" value="3" id="ivf3" class="text-center" style="margin: 0 auto; width: 100%; text-align: center;" /> IVF 3 Day Transfer Date <input type="radio" name="ivfDay" value="5" id="ivf5" class="text-center" style="margin: 0 auto; width: 100%; text-align: center;" /> IVF 5 Day Transfer Date
		   </div>
		   <div style="margin-top: 30px;" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2"><input type="button" id="result" class="btn btn-primary" value="Calculate My Due Date" style="padding: 10px 20px; font-size: 1.5em; background-color: #ec4f9b; color: white; border-color: #ec4f9b; border-radius: 12px;" /></div>
		   <div id="showResult" style="text-align: center;" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/congratulations.png" width="50%" alt="congratulations" />
			  <p style="color: #08537e; font-size: 2.5em;">You will meet your baby on</p>
			  <input type="date" id="ivf_result" class="text-center" style="margin: 0 auto; width: 100%; background: transparent; color: #08537e; font-weight: bolder; text-align: center; box-shadow: none; border: none; font-size: 2em; padding-left: 70px;" readonly="readonly" required="required" /> <a style="font-weight: bold; text-decoration: underline; color: #ec4f9b; font-size: 1.5em; margin-top: 30px;" onclick="recalculate();">Recalculate&gt;</a>
		   </div>
		</div>
		
		<!-- baby journey tools -->
		<div class="babyJourney tools">
			<div id="edd-form" class="row" style="display:{{pre-define-display-eddform}};">
			  <div class="col-lg-12 col-md-12">
				 <div class="col-md-12" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
					<div class="clearfix"></div>
					<p style="font-size: 25px; color: #005b9c; font-weight: bold; line-height: 1;">Let's personalise your journey.</p>
					<p style="font-size: 25px; color: #4c4c4d; font-weight: bold; line-height: 1;">Enter your Estimate Date of Delivery (EDD)</p>
					<div class="clearfix"></div>
					<div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
					   <select id="babyYear" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
						  <option value="" disabled="disabled" selected="selected">Year</option>
						  <option value="2020">2020</option>
						  <option value="2021">2021</option>
						  <option value="2021">2022</option>
					   </select>
					</div>
					<div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
					   <select id="babyMonth" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
						  <option value="" disabled="disabled" selected="selected">Month</option>
						  <option value="1">January</option>
						  <option value="2">February</option>
						  <option value="3">March</option>
						  <option value="4">April</option>
						  <option value="5">May</option>
						  <option value="6">June</option>
						  <option value="7">July</option>
						  <option value="8">August</option>
						  <option value="9">September</option>
						  <option value="10">October</option>
						  <option value="11">November</option>
						  <option value="12">December</option>
					   </select>
					</div>
					<div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
					   <select id="babyDay" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
						  <option value="" disabled="disabled" selected="selected">Day</option>
					   </select>
					   <input type="hidden" name="subscriber_question3" id="edd-question" />
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="col-md-12" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
					<div class="clearfix"></div>
					<div class="col-md-4 col-md-offset-4" style="padding-top: 20px;">
						<button type="button" id="submitedd" class="btn btn-default button button-medium  pull-right" style="border: none; background: none;" > 
							<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/newNewmom/lets-go.png" width="100%" alt="letsGo" /> 
						</button>
					</div>
				 </div>
				</div>
		   </div>
		   <div id="div-pregnancytracker" class="row" style="display:{{pre-define-display-pregnancytracker}};">
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-12">
						<div class="row">
							<p style="font-size: 22px; color: #005b9c; font-weight: bold; line-height: 1;">Explore pregnancy Week by week</p>
						</div>
						<div class="row">
							<div class="enlinea_slider" style="min-height:190px;">
							   <div class="slider_container">
								  <ul class="pregnancy-tracker">
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="4">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W4.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="5">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W5.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="6">
											<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W6.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="7">
										<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W7.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="8"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W8.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="9"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W9.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="10"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W10.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="11"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W11.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W12.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="13"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W13.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="14"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W14.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="15"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W15.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="16"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W16.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="17"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W17.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="18"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W18.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="19"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W19.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="20"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W20.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="21"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W21.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="22"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W22.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="23"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W23.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="24"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W24.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="25"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W25.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="26"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W26.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="27"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W27.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="28"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W28.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="29"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W29.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="30"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W30.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="31"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W31.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="32"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W32.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="33"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W33.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="34"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W34.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="35"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W35.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="36"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W36.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="37"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W37.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="38"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W38.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="39"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W39.png" alt="article2" width="100%" /></div>
									 </li>
									 <li class="product-box item" style="min-width: 178px;">
										<div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="40"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W40.png" alt="article2" width="100%" /></div>
									 </li>
								  </ul>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					 <div class="col-md-12 yourWeek">
						<p style="color: #25a7ae; font-size: 2em; padding-top: 15px; line-height: 1.2;" class="wording-baby-weeks">Your baby is on week {{pre-define-babyweek}}!</p>
					 </div>
					 <div class="clearfix"></div>
					 <div class="col-md-7 col-md-offset-3" id="Pregnancydetails" style="text-align: justify; color: #444; font-size: 18px; line-height: 28px;">
					 </div>
				</div>
		   </div>
		</div>
		<!-- E-magazine tool -->
		<div class="eMag tools" style="display: none;min-height:400px">
		   <div class="row">
				<div style="overflow: auto; white-space: nowrap;" id="style-7">
					<div class=" weeklyBox" onclick="babyWeek(this);" week="1">Week 1</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="2">Week 2</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="3">Week 3</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="4">Week 4</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="5">Week 5</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="6">Week 6</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="7">Week 7</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="8">Week 8</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="9">Week 9</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="10">Week 10</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="11">Week 11</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="12">Week 12</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="13">Week 13</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="14">Week 14</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="15">Week 15</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="16">Week 16</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="17">Week 17</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="18">Week 18</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="19">Week 19</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="20">Week 20</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="21">Week 21</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="21">Week 22</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="23">Week 23</div>
					<div class=" weeklyBox" onclick="babyWeek(this);" week="24">Week 24</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="25">Week 25</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="26">Week 26</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="27">Week 27</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="28">Week 28</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="29">Week 29</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="30">Week 30</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="31">Week 31</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="32">Week 32</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="33">Week 33</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="34">Week 34</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="35">Week 35</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="36">Week 36</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="37">Week 37</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="38">Week 38</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="39">Week 39</div>
					 <div class=" weeklyBox" onclick="babyWeek(this);" week="40">Week 40</div>
				</div>
		   </div>
		   <div class="clearfix"></div>
		   <div class="row">
			  <div class="col-md-7 col-md-offset-3" id="babyWeeksdetails" style="margin-top: 15px; margin-bottom: 15px; text-align: center; color: black; font-size: 18px; line-height: 1.3;"></div>
		   </div>
		</div>
	</div>




<div class="motherhoodRecipe tools" style="display: none;"></div>
<!--====================FOOTER BRAND ====================-->
<!--
<div class="mmyslider" data-sliderid="76" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="77" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="78" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="79" data-imagepos="left" data-slidercount="5"></div>
-->


<!--====================ARTICLE1 ====================-->
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/article.png" width="100%" /></div>
<p></p>
<!-- Article slider -->
<div class="row" style="border-radius: 0px; border: 0px solid #174976; padding: 15px; text-align: center;">
   <div class="col-md-12 enlinea_slider">
      <div class="slider_container">
         <ul id="nestlekol_list_car">
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a2.png" alt="article2" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Give Your Baby&rsquo;s Room A Beautiful Makeover</p>
                  <a href="https://story.motherhood.com.my/blog/baby-room-beautiful-makeover/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 2====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a3.png" alt="article3" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Common Skin Conditions In Newborns</p>
                  <a href="https://story.motherhood.com.my/blog/skin-conditions-newborns/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 3====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a6.png" alt="article6" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">How To Pick The Best Breast Pump For You</p>
                  <a href="https://story.motherhood.com.my/blog/pick-best-breast-pump/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 4====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a8.png" alt="article8" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Optimal Growth &ndash; Brain and Physical Growth</p>
                  <a href="https://www.startwell.nestle.com.my/articles/toddlerhood/optimal-growth-brain-and-physical-growth" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 5====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a12.png" alt="article12" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Hospital Checklist For New Mum And Newborn</p>
                  <a href="https://story.motherhood.com.my/blog/hospital-checklist-for-new-mum-and-newborn/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 6====================-->
            <li class="product-box item" style="min-width: 0px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a1.png" alt="article1" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">The Advantages And Disadvantages Of Epidural Injections</p>
                  <a href="https://story.motherhood.com.my/blog/advantages-disadvantages-epidural-injections/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 7====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a4.png" alt="article4" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">How To Get A Good Deep Latch: The Key To Successful Breastfeeding</p>
                  <a href="https://story.motherhood.com.my/blog/how-to-get-a-good-deep-latch-the-key-to-successful-breastfeeding/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 8====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a5.png" alt="article5" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Crucial To Know: How To Burp A Baby (Includes Videos)</p>
                  <a href="https://story.motherhood.com.my/blog/crucial-to-know-burp-baby/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 9====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a7.png" alt="article7" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Love In Every Drop | Answering All Your Common Breastfeeding Questions</p>
                  <a href="https://story.motherhood.com.my/blog/solution-common-breastfeeding-questions/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 10====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a9.png" alt="article9" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Things You Need To Know About Bottle Feeding Your Baby</p>
                  <a href="https://story.motherhood.com.my/blog/things-need-know-bottle-feeding-baby/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 11====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a10.png" alt="article10" width="100%" />
                  <p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">Vaginal Delivery Vs Caesarean: Is There A Right Answer?</p>
                  <a href="https://story.motherhood.com.my/blog/vaginal-delivery-vs-caesarean/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
            <!--====================ARTICLE 12====================-->
            <li class="product-box item" style="min-width: 178px;">
               <div style="border-radius: 4px; border: 4px solid #ececec; padding: 10px; text-align: center; min-height: 336px; position: relative;">
					<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a11.png" alt="article11" width="100%" />
					<p style="color: #25a7ae; font-size: 1em; padding-top: 15px; line-height: 1.2;">5 Baby Care Tips: How To Care For Your Newborn Baby</p>
					<a href="https://story.motherhood.com.my/blog/baby-care-tips-newborn-baby/" target="_blank" rel="noopener"> <img style="padding-top: 0px; padding-bottom: 0px; vertical-align: bottom; position: center; bottom: 20; padding: 20px; right: 20;" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/readmore.png" alt="readmoreButton" width="70%" /> </a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>
<p>
   <script>// <![CDATA[
	 /** if other function that need to use same input for validation, we can just use this selector  **/
	var emailSelector 	 			= $('body').find('#emailNew');
	var passSelector  	 			= $('body').find('#newPassword');
	var fnameSelector    			= $('body').find('#newFirstName');
	var lnameSelector    			= $('body').find('#newLastName');
	var addrSelector     			= $('body').find('#full-address');
	var postcodeSelector 			= $('body').find('#postcode-address');
	var citySelector  	 			= $('body').find('#city-address');
	var stateSelector    			= $('body').find('#state-address');
	var dobSelector      			= $('body').find('#dobParent');
	var mobileSelector   			= $('body').find('#mobilenumber');
	var scrollingSelector   		= $('body').find('#scrollingInput');
	var subidSelector   			= $('body').find('#subscribe-id');
	var eddSelector   				= $('body').find('#edd-question');
	var eddFormSelector   			= $('body').find('#edd-form');
	var divPregnancytrackerSelector = $('body').find('#div-pregnancytracker');
	var wordingBabyWeeksSelector    = $('body').find('.wording-baby-weeks');
	var errorSelector 	 			= '.error-msg';
	var hasValidation 	 			= 'has-error-validation';
	var icon 	  		 			= '<i class="fas fa-info-circle"></i>';
	var eventID 					= 102;
	
	var checkEmail = function(){
		var checkemail = emailSelector.val();
		var msg 	   = "";
		if(checkemail != undefined && checkemail != '')
		{
			msg = "<i class='fas fa-spinner fa-spin'></i> Please wait while we checking your email...";
			// mobileSelector.addClass(hasValidation);
			emailSelector.closest('div').find(errorSelector).html(msg);
			$.ajax({
				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
				data	 :{'checkemail': checkemail, 'eventid': eventID},
				dataType :'json',
				method 	 : 'post',
				success	 : function(result){
					if(result.status == true)
					{
						console.log(result);
						/** if customer registered before, we allow them to use tool **/
						if(result.status_code == 'exist_customer_event')
						{
							emailSelector.closest('div').find(errorSelector).html(icon + " You have registered");
							var firstname   = result.data.firstname;
							var lastname    = result.data.lastname;
							var email       = result.data.email;
							var mobile      = result.data.mobile;
							var dob_parent  = result.data.dob_parent;
							var fulladdress = result.data.fulladdress;
							var postcode 	= result.data.postcode;
							var city 		= result.data.city;
							var state 		= result.data.state;
							var eddDate 	= result.data.edd_date;
							var eddWeek 	= result.data.week;
							
							fnameSelector.val(firstname);
							lnameSelector.val(lastname);
							addrSelector.val(fulladdress);
							citySelector.val(city);
							stateSelector.val(state);
							
							if(dob_parent != '' && dob_parent != null && dob_parent != undefined)
							{
								var selectorDOB = document.getElementById("dobParent");
								selectorDOB.inputmask.setValue(dob_parent);
							}
							
							if(mobile != '' && mobile != null && mobile != undefined)
							{
								var selectorMobile = document.getElementById("mobilenumber");
								selectorMobile.inputmask.setValue(mobile);
							}
							
							if(postcode != '' && postcode != null && postcode != undefined)
							{
								var selectorPostcode = document.getElementById("postcode-address");
								selectorPostcode.inputmask.setValue(postcode);
							}
							
							if((eddDate != "" && eddDate != undefined) && eddWeek > 0)
							{
								wordingBabyWeeksSelector.html('Your baby is on ' + eddWeek + " weeks");
								eddFormSelector.hide('fast');
								divPregnancytrackerSelector.show('fast');
							}
							else
							{
								eddFormSelector.show('fast');
								divPregnancytrackerSelector.hide('fast');
							}
							
							$('body').find('.title-form').html('You have registered!');
							$('body').find('.input-info').addClass('background-grey-readonly');
							$('body').find('.input-info').attr('disabled', true);
							$('body').find('.div-password').hide("fast");
							$('body').find('#btn-submit-form1').css('display', "none");
							$('body').find('.div-overlay').css('display', "none");
							$('body').find('.div-overlay').removeClass('box-overlay-display');
							$('body').find('.clicker-img').removeClass('unclickable');
							$('body').find('.clicker-img-href').removeClass('unclickable');
						}
						else
						{
							emailSelector.closest('div').find(errorSelector).html(icon + " Kindly proceed to fill in all the required fields");
							/** customer need to register first if email never exist  **/
							$('body').find('.div-overlay').addClass('box-overlay-display');
							$('body').find('.div-overlay').css('display', "block");
							$('body').find('.clicker-img').addClass('unclickable');
							$('body').find('.input-info').removeClass('background-grey-readonly');
							$('body').find('.input-info').attr('disabled', false);
							$('body').find('#btn-submit-form1').css('display', "block");
							$('body').find('.div-password').show("fast");
							$('body').find('.title-form').html('Fill up your information');
							eddFormSelector.show('fast');
							divPregnancytrackerSelector.hide('fast');
						}
					}
					else
					{
						$('body').find('.div-overlay').addClass('box-overlay-display');
						$('body').find('.div-overlay').block('display', "block");
						$('body').find('.clicker-img').addClass('unclickable');
						$('body').find('.input-info').removeClass('background-grey-readonly');
						$('body').find('.input-info').attr('disabled', false);
						$('body').find('#btn-submit-form1').css('display', "block");
						$('body').find('.div-password').show("fast");
						$('body').find('.title-form').html('Fill up your information');
						eddFormSelector.show('fast');
						divPregnancytrackerSelector.hide('fast');
					}
				}
			});
		}
		else
		{
			$('body').find('.div-overlay').addClass('box-overlay-display');
			$('body').find('.div-overlay').block('display', "block");
			$('body').find('.clicker-img').addClass('unclickable');
		}
		
	} 
	
	var animatedScroll = function(){
		var isScroll = scrollingSelector.val();
		console.log(isScroll);
		if(isScroll == 'yes')
		{
			$('html, body').animate({
				scrollTop: $("#row-features").offset().top
				}, 2000);
			
		}
	}
	
	var optionBabyday = function(){
		var year  = $('body').find('#babyYear').val();
        var month = $('body').find('#babyMonth').val();
		
        if(year !== '' && month !== '')
		{
			$('body').find('#babyDay').prop('disabled', false);
			$('body').find('#babyDay').find('option').remove().end();
			
			var days = new Date(year, month, 0).getDate(); 
			$('body').find('#babyDay').append('<option value=" " disabled selected> Day </option>');
			
			for (var i = 1; i <= days; i++) {
				$('body').find('#babyDay').append('<option value="' + i + '">' + i + '</option>');
			}
		}
	}
   
  
   
	$(function(){
		$('body').on('click', '.clicker-img', function(){
			var typeshow = $(this).data('typeview');
			var checkemail = emailSelector.val();
			if(checkemail == undefined || checkemail == '')
			{
				alert('Please fill in email');
			}
			else{
				$('body').find(".tools").hide('fast');
				if(typeshow == 'dueDateCalculator'){
					$('body').find(".dueDateCalculator").show('fast');
				}
				else if(typeshow == 'pregnancyJourney'){
       
					$('body').find(".babyJourney").show('fast');
				}
				else if(typeshow == 'eMag'){
					$('body').find(".eMag").show('fast');
				}
			}
		});
		
		$('body').on('change', '#emailNew', function(){
			checkEmail();
		});
		
		$('body').on('click', '#submitedd', function(){
			var edd 		 = eddSelector.val();
			var subscribe_id = subidSelector.val();
			
			if(edd != '')
			{
				console.log(edd);
				$.ajax({
					url		 : '../modules/enlineamixmod/enlineamixmod-edd-newmom-ajax.php', 
					data	 :{'edd': edd, 'subscribe_id' : subscribe_id ,'eventid': eventID},
					dataType :'json',
					method 	 : 'post',
					success	 : function(result){
						if(result.status == true)
						{
							// if(result.data.week != undefined && result.data.week != null){
								// wordingBabyWeeksSelector.html('Your baby is on ' + result.data.week + " weeks");
							// }
							// eddFormSelector.hide('fast');
							// divPregnancytrackerSelector.show('fast');
							location.reload();
						}
					}
				});
			}
		});
		
		var selectorDOB = document.getElementById("dobParent");
		Inputmask('datetime',{
			alias 		 :'datetime',
			inputFormat  : "dd/mm/yyyy", 
			outputFormat : "dd/mm/yyyy",
			leapday: "29.02."
		}).mask(selectorDOB);
		
		var selectorMobile = document.getElementById("mobilenumber");
		var phoneNumSettings = {
				'mask' : "***********",
				"placeholder": "",
				"definitions": {
					'*': {
						validator: "[0-9]"
					}
				}
			}
		Inputmask(phoneNumSettings).mask(selectorMobile);
		
		var selectorPostcode = document.getElementById("postcode-address");
		var postcodeSettings = {
				'mask' : "*****",
				"placeholder": "",
				"definitions": {
					'*': {
						validator: "[0-9]"
					}
				}
			}
		Inputmask(postcodeSettings).mask(selectorPostcode);
		
		animatedScroll();
	});
	
	/** end develop by haiqal  **/
      
      for (var i = 1940; i <= 2011; i++) {
      $('#momYear').append('<option value="' + i + '">' + i + '</option>');}
      
      $("#babyYear").on("change",function(){
          $('#babyMonth').prop('disabled', false);
		  optionBabyday();
      });
      $("#babyMonth").on("change",function(){
        optionBabyday();
      });
	  
      $("#babyDay").on("change",function(){
          var year = $('#babyYear').val();
          var month = $('#babyMonth').val();
          var day = $('#babyDay').val();
          var month = ("0" + month).slice(-2);
          var day = ("0" + day).slice(-2);
          $('#edd-question').val(day+'-'+month+'-'+year);
      });
      
      $("#momYear").on("change",function(){
          $('#momMonth').prop('disabled', false);
      });
      $("#momMonth").on("change",function(){
          var year = $('#momYear').val();
          var month = $('#momMonth').val();
          if(year !== '' && month !== ''){
          $('#momDay').prop('disabled', false);
          $('#momDay').find('option').remove().end();
          var days = new Date(year, month, 0).getDate(); 
          $('#momDay').append('<option value=" " disabled selected> Day </option>');
              for (var i = 1; i <= days; i++) {
                  $('#momDay').append('<option value="' + i + '">' + i + '</option>');}}
      });
      $("#momDay").on("change",function(){
          var year = $('#momYear').val();
          var month = $('#momMonth').val();
          var day = $('#momDay').val();
          var month = ("0" + month).slice(-2);
          var day = ("0" + day).slice(-2);
          $('#subscriber_question2').val(day+'-'+month+'-'+year);
      });
      
      function pregnancyWeek(item){
          var week = item.getAttribute("week");
          if(week !== ''){
              getPregnancyDetails(week);
          }
      }
      
      function getPregnancyDetails(week){
          $.ajax({
              type: 'post',
              url: '/modules/enlineamixmod/enlineamixmod-ajax-getStory.php',
              data: 'storywk=' + week,
              dataType: 'text',
              success: function (data) {
                  if (data) {
                      $("#Pregnancydetails").html(data);
                  }else {
                  window.alert('Unable to retrieve pregnancy details now.');
                  }
              }
              })
          .fail(function () {
              alert('failed');
          })
      }
      
      function babyWeek(item){
          var week = item.getAttribute("week");
          if(week !== ''){
              console.log(week);
              getBabyDetails(week);
          }
      }
      
      function getBabyDetails(week){
          $.ajax({
              type: 'post',
              url: '/modules/enlineamixmod/enlineamixmod-ajax-getBabyWeeks.php',
              data: 'storywk=' + week,
              dataType: 'text',
              success: function (data) {
                  if (data) {
                      $("#babyWeeksdetails").html(data);
                  }else {
                  window.alert('Unable to retrieve eMag details now.');
                  }
              }
              })
          .fail(function () {
              alert('failed');
          })
      }
      
      //due date calculator
      
      function recalculate(){
      $("div#front").show();
      $("div#last_period").show();
      $("div#showResult").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").show();
      }
      
      $("#submitForm").click(function(){
      $("div#mainpage").hide();
      $("div#showResult").hide();
      $("div#front").show();
       $("div#last_period").show();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").show();
      });
      
      $("#result").click(function(){
       if($("#way").val()=="period"){
      var prePeriod = document.getElementById('previous_period').value;
      document.getElementById('ivf_result').value = prePeriod;
      document.getElementById('ivf_result').stepUp(280);
      }else if($("#way").val()=="conception"){
      var con = document.getElementById('concept_date').value;
      document.getElementById('ivf_result').value = con;
      document.getElementById('ivf_result').stepUp(266);
      }else if ($("#way").val()=="ivf"){
      var ivfValue = $('input[name=ivfDay]:checked').val();
      var ivfDayy = document.getElementById('ivf_date').value;
      document.getElementById('ivf_result').value = ivfDayy;
      document.getElementById('ivf_result').stepUp(266-ivfValue);
      
      }
      
      $("div#showResult").show();
      $("div#front").hide();
       $("div#last_period").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").hide();
      });
      
      $("#way").change(function(){
         if($(this).val()=="period"){    
             $("div#last_period").show();
             $("div#conception").hide();
             $("div#ivf").hide();
      $("div#showResult").hide();
      
         }else{
              $("div#last_period").hide();
          }
         if($(this).val()=="conception"){    
             $("div#conception").show();
      $("div#last_period").hide();
             $("div#ivf").hide();
      $("div#showResult").hide();
      }else{
          $("div#conception").hide();}
      
      if($(this).val()=="ivf"){    
             $("div#ivf").show();
           $("div#conception").hide();
             $("div#last_period").hide();
          $("div#showResult").hide();
      }else{
          $("div#ivf").hide();}
      }).change();
      
      $("div#mainpage").show();
      $("div#showResult").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       
      // ]]>
   </script>
</p>