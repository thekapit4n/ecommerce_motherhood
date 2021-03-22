<p>
	<script src="../../../themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
	<link href="../../../themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
			outline:unset;
      	}
      	
      	.btn-step1:hover, .btn-step1:focus{
      		background-color: #1C6F74;
      		color: white;
			outline: unset;
      	}
      		
      	.btn-step1[disabled], .btn-step1[disabled]:hover{
      		background-color: #38a7ac87 !important;
      	}
      	
      	.motherhood-input-invalid, .motherhood-input-invalid:focus {
      		color: #b94a48;
      		border-color: #e9322d !important;
      	}
      	
      	.tnc_li{
      		margin-bottom: 5px;
      		font-size: 13px;
      	}
      	
      	.loading {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 50px;
			height: 50px;
			margin-left: -25px;
			margin-top: -25px;
			z-index: 99999;
		}
      	
      	.enlinea_slider_custom h3 {
      		text-align: left;
      	}
      
      	.enlinea_slider_custom .slider_container {
      		position: relative;
      	}
      
      	.enlinea_slider_custom .bx-wrapper {
      		margin: auto;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-prev {
      		left: -16px;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-next {
      		right: -20px;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a {
      		position: absolute;
      		top: 80px;
      		outline: 0;
      		width: 52px;
      		height: 52px;
      		z-index: 700;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a:after {
      		color: #2da2ac;
      		font-family: FontAwesome;
      		font-size: 26px;
      		display: block;
      		width: 48px;
      		height: 48px;
      		text-align: center;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a:hover:after {
      		color: #26989e;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-prev:after {
      		content: "\f053";
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-next:after {
      		content: "\f054";
      	}
      
      	.enlinea_slider_custom .bx-wrapper a.disabled {
      		display: none;
      	}
      
      	.enlinea_slider_custom .bx-pager-item{
      		display:none;
      	}
      	
      	.parent-article-title{
      		color: #4c4c4d; 
      		font-size: 16px;
      		font-weight: 600; 
      		padding-top: 15px; 
      		line-height: 1.2; 
      		min-height:53px;
      	}
      	
      	.parent-articale-btn, .parent-articale-btn:hover, .parent-articale-btn:focus, parent-articale-btn:active{
      		font-size: 18px;
      		border-radius: 4px;
      		padding: 8px 40px;
      		color: #fff;
      		background-color: #2ea7ad;
      		border-color: #2ea7ad;
      		width:100%;
      	}
      	
      	.section_title_motherhood {
      		text-align: center;
      		padding: 30px 0;
      		text-transform: uppercase;
      		display: block;
      		clear: both;
      	}
      	
      	.section_title_motherhood>span {
      		color: #2fa7ad;
      		font-size: 20px;
      		font-weight: bold;
      		padding: 0 40px;
      	}
      
      	.section_title_motherhood::before, .section_title_motherhood::after {
      		content: ":::::::::::::::::::::::::::::::::::::::::::::::::::::::";
      		color: #ababab;
      		vertical-align: text-bottom;
      		font-size: 8px;
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
      		
      		.parent-article-title{
      			font-size: 14px;
      			min-height:72px;
      		}
      
      		.parent-articale-btn, .parent-articale-btn:hover, .parent-articale-btn:focus, parent-articale-btn:active {
      			font-size: 14px;
      			padding: 5px 25px;
      		}
      		
      		.section_title_motherhood > span {
      			display: block;
      			padding: 0 20px!important;
      		}
			
			.text-overlay{
				font-size: 29px;
			}
			
			#row-features{
				 min-height: 150px;
				margin-bottom: -100px;
			}
      	}
      -->
</style>
<!-- 
   Note:
   all the wording start with "{{ sometext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
   -->
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/New+Mom+Essentials/Nestle-Mom-Banner-New.png" width="100%" /></div>
<div class="row row-question" style="padding-top: 20px; padding-bottom: 10px;">
   <p style="font-size: 25px; color: #2ea7ad; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;" class="title-form">{{pre-define-titleform}}</p>
   <div class="panel-group" id="accordion">
      <div class="panel panel-default">
         <div class="panel-heading heading-details-info" data-toggle="collapse" data-parent="#accordion" data-target="#infoform" style="text-align: left; color: #fff; background-color: #2ea7ad; border-color: #2ea7ad;">
            <h4 class="panel-title">Details Information <span style="float: right;" class="ikon-collapse"><i class="fas fa-minus"></i></span></h4>
         </div>
         <div id="infoform" class="panel-collapse collapse in">
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-10 col-md-offset-1" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
                     <div class="row row-form">
                        <div class="col-md-6 text-left question-welcomekit"><label>Email</label> <input type="email" id="emailNew" name="newEmail" class="form-control input-info {{greybg-readonly-email-class}}" placeholder="Email" required="required" style="background-color: white;" value="{{pre-define-email}}" data-input-email-disabled="" /> 
						<input type="hidden" id="scrollingInput" class="form-control" value="{{pre-scrolling-val}}" />
						<input type="hidden" id="subscribe-id" class="form-control" value="{{pre-subscribe-id}}" /> 
						<input type="hidden" id="user-id" class="form-control" value="{{pre-user-id}}" />
						<input type="hidden" id="user-login" class="form-control" value="{{pre-user-login}}" /> 
						<input type="hidden" id="email_checked_input" value="{{pre-define-emailcheckinpt}}" /> 
						<input type="hidden" id="edd_checked_input" value="{{pre-define-eddcheckinpt}}" /> 
						<input type="hidden" class="dummycart" value="{{dummycartid}}" /> 
							<small class="error-msg"></small>
						</div>
                        <div class="col-md-6 text-left question-welcomekit div-password" style="display: {{display-password-input}};">
						<label>Password</label> 
							<input type="password" id="newPassword" name="newPassword" class="form-control input-info {{greybg-readonly-class}}" minlength="6/" placeholder="Password" data-input-required="" data-input-disabled="" />
							<small class="error-msg"></small>
						</div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-6 text-left question-welcomekit"><label>First Name</label> <input type="text" id="newFirstName" name="newFirstName" class="form-control input-info {{greybg-readonly-class}}" placeholder="First Name" required="required" autocomplete="off" value="{{pre-define-fistname}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                        <div class="col-md-6 text-left question-welcomekit"><label>Last Name</label> <input type="text" id="newLastName" name="newLastName" class="form-control input-info {{greybg-readonly-class}}" placeholder="Last Name" required="required" autocomplete="off" value="{{pre-define-lastname}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-6 text-left question-welcomekit"><label>Mobile Number</label> <input type="text" id="mobilenumber" name="subscriber_question1" class="form-control input-info {{greybg-readonly-class}}" placeholder="Mobile number without '-'" required="required" autocomplete="off" value="{{pre-define-mobileno}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                        <div class="col-md-6 text-left question-welcomekit"><label>Your Date of Birth</label> <input name="subscriber_question2" type="text" id="dobParent" required="required" placeholder="DOB" class="form-control dob-parent input-info {{greybg-readonly-class}}" value="{{pre-define-dob}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                     </div>
                     <!--===== is for display only, that why input doesn't have name attaribute===== -->
                     <div class="row row-form display-edd-milk {{div-class-display-edd-milk}}">
                        <div class="col-md-6 text-left question-welcomekit "><label>Estimate Date of Delivery (EDD)</label> <input type="text" class="form-control input-info background-grey-readonly display-input-edd" value="{{pre-define-edd}}" readonly="readonly" /></div>
                        <div class="col-md-6 text-left question-welcomekit"><label>Maternal Milk Brand</label> <input type="text" class="form-control input-info background-grey-readonly display-input-milkbrand" value="{{pre-define-displaymilkbrad}}" readonly="readonly" /></div>
                     </div>
                     <!--===== end =====--->
                     <div class="row row-form row-question-milk-brand {{div-class-question-milk-brand}}">
                        <div class="col-md-6 text-left question-welcomekit">
                           <label>Maternal Milk Brand</label>
                           <select id="milk-brand" name="subscriber_question9" class="input-info {{greybg-readonly-class}}" style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;color:" required="required" data-input-disabled="">
                              <option value="" disabled="disabled" selected="selected">Please select milk</option>
                              <option class="{{milk-brand}}">milkbrand</option>
                           </select>
                           <small class="error-msg"></small>
                        </div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-12 text-left question-welcomekit"><label>Full Address</label> <input type="text" name="subscriber_question3" id="full-address" required="required" placeholder="Full Address" class="form-control input-info {{greybg-readonly-class}}" autocomplete="off" value="{{pre-define-fulladdress}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-4 text-left question-welcomekit"><label>Postcode</label> <input type="text" name="subscriber_question4" id="postcode-address" class="form-control input-info addr-postcode {{greybg-readonly-class}} " required="required" placeholder="Postcode" autocomplete="off" value="{{pre-define-postcode}}" data-input-disabled="" /> <small class="error-msg"></small></div>
                        <div class="col-md-4 text-left question-welcomekit"><label>City</label> <input name="subscriber_question5" id="city-address" type="text" size="60" required="required" placeholder="City" class="form-control input-info addr-city {{greybg-readonly-class}}" autocomplete="off" value="{{pre-define-city}}" data-input-disabled="" /> <small class="error-msg"></small></div>
							<div class="col-md-4 text-left question-welcomekit" style="padding-top: 0px;">
							   <label>State</label>
							   <select name="subscriber_question7" id="state-address" class="input-info {{greybg-readonly-class}} addr-state" style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;" required="required" data-input-disabled="">
								  <option value="">State</option>
								  <option value="Johor" dataselected-johor="">Johor</option>
								  <option value="Kedah" dataselected-kedah="">Kedah</option>
								  <option value="Kelantan" dataselected-kelantan="">Kelantan</option>
								  <option value="Kuala Lumpur" dataselected-kuala_lumpur="">Kuala Lumpur</option>
								  <option value="Labuan" dataselected-labuan="">Labuan</option>
								  <option value="Melaka" dataselected-melaka="">Melaka</option>
								  <option value="Negeri Sembilan" dataselected-negeri_sembilan="">Negeri Sembilan</option>
								  <option value="Pahang" dataselected-pahang="">Pahang</option>
								  <option value="Perak" dataselected-perak="">Perak</option>
								  <option value="Perlis" dataselected-perlis="">Perlis</option>
								  <option value="Pulau Pinang" dataselected-pulau_pinang="">Pulau Pinang</option>
								  <option value="Putrajaya" dataselected-putrajaya="">Putrajaya</option>
								  <option value="Sabah" dataselected-sabah="">Sabah</option>
								  <option value="Sarawak" dataselected-sarawak="">Sarawak</option>
								  <option value="Selangor" dataselected-selangor="">Selangor</option>
								  <option value="Terengganu" dataselected-terengganu="">Terengganu</option>
							   </select>
							   <small class="error-msg"></small>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12">
								<p style="font-size:13px;line-height: 23px; margin-bottom:12px;text-align:left; margin-top: 25px;">
									By clicking Submit, you hereby agree to the campaign’s Terms and Conditions and Privacy Notices. You further agree to be registered as a member of 
									Nestlé Start Well 2gether club and to the processing of your personal data in accordance with such club/membership terms (including 
									to receive marketing and promotional information, product services and events) in accordance with Nestlé (Malaysia) Berhad, and Motherhood.com.my. 
								</p>
								<table style="margin: 15px 0px 15px 0px; font-weight: bold;">
									<tbody>
										<tr>
											<td style="font-weight: bold; vertical-align: top; padding-right:10px">
												<input id="checked-tnc-nestle" name="subscriber_question10" value="agree" required="required" type="checkbox" style="display: inline-block;"/>
												<input  type="hidden" class="tnc-nestle-checked" value="{{tnc-nestle}}"/>
											</td>
											<td style="padding-left:0px">
												<p style="font-size:13px;line-height: 15px; margin-bottom:12px;padding-top:0px;">
													By clicking Submit, I agree to the <a href="https://www.startwell.nestle.com.my/terms-conditions" target="_blank">Terms and Conditions</a>, and <a href="https://www.nestle.com.my/info/privacy_notice" target="_blank">Privacy Policy</a> of Nestlé (Malaysia) Berhad.
												</p>
											</td>
										</tr>
										<tr>
											<td style="font-weight: bold; vertical-align: top; padding-right:10px">
												<input id="checked-tnc-mmy" name="subscriber_question11" value="agree" required="required" type="checkbox" style="display: inline-block;"/>
												<input  type="hidden" class="tnc-mmy-checked" value="{{tnc-mmy}}"/>
											</td>
											<td style="padding-left:0px">
												<p style="font-size:13px;line-height: 15px; margin-bottom:12px;padding-top:0px;">
													By clicking Submit, I agree to the <a href="https://www.motherhood.com.my/page/terms-of-service" target="_blank">Terms and Conditions,</a> and <a href="https://www.motherhood.com.my/page/privacy-policy" target="_blank">Privacy Policy</a> of Motherhood.com.my. 
												</p>
											</td>
										</tr>
										<tr>
											<td style="font-weight: bold; vertical-align: top; padding-right:10px">
												<input name="subscriber_question12" id="receive-news" value="agree"  type="checkbox" style="display: inline-block;"/>
												<input  type="hidden" class="news-promo-checked" value="{{news-promo}}"/>
											</td>
											<td style="padding-left:0px">
												<p style="font-size:13px;line-height: 15px; margin-bottom:12px;padding-top:0px;">
													Would you like to receive future marketing and promotional information about the Organiser’s products, services and events in the future?
												</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-4" style="padding-top: 20px;">
							<button type="submit" name="submit" id="btn-submit-form1" class="btn btn-default btn-step1" style="display: {{display-btn-submit-form1}};"> Submit </button>
						</div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 text-left">
                     <p>Terms &amp; Conditions</p>
                  </div>
                  <div class="col-md-6">
                     <ol style="list-style: decimal; padding-left: 20px;">
                        <li class="text-left tnc_li">This program is open to pregnant and lactating mothers who are residing in Malaysia only.</li>
                        <li class="text-left tnc_li">Limited to ONE sample per household (address) only.</li>
                        <li class="text-left tnc_li">
							For Nestlé® Mom™, by requesting a FREE sample, you will automatically be registered as a member of Nestlé Start Well 2gether Mom’s Club, 
							and allow to the processing of your personal data in accordance with such club/membership terms, 
							including to receive marketing and promotional information, product services and events in the future.
						</li>
                        <li class="text-left tnc_li">
							Each redemption will receive a full-size product (Nestlé® Mom™ Pouch with Pronatal Plus™ Pregnant & Lactating Milk (600g)).
						</li>
                     </ol>
                  </div>
                  <div class="col-md-6">
                     <ol style="list-style: decimal; padding-left: 20px;" start="5">
                        <li class="text-left tnc_li">
							A standard shipping & handling fee of RM5.00 will be charged for each sampling redemption.
						</li>
                        <li class="text-left tnc_li"> 
							Please expect sample delivery of 4-6 weeks.
						</li>
                        <li class="text-left tnc_li">
							Registrations will only be accepted with the FULL postal address provided. Incomplete registration forms will not be accepted.
						</li>
						<li class="text-left tnc_li">
							Motherhood.com.my reserves the right to alter, cancel, terminate, or suspend an application and/or any part thereof without any 
							liability and prior notice at any time upon its sole and absolute discretion.
						</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
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
      	var emailCheckedInpSelector     = $('body').find('#email_checked_input');
      	var eddCheckedInpSelector       = $('body').find('#edd_checked_input');
      	var userIdSelector       		= $('body').find('#user-id');
      	var userLoginSelector       	= $('body').find('#user-login');
      	var errorSelector 	 			= '.error-msg';
      	var hasValidation 	 			= 'has-error-validation';
      	var icon 	  		 			= '<i class="fas fa-info-circle"></i>';
      	var eventID 					= 102;
      	
      	var checkEmail = function(){
      		var checkemail = emailSelector.val();
      		var password   = passSelector.val();
      		var msg 	   = "";
      		var islogin    = userLoginSelector.val();       		
      		var userid     = userIdSelector.val();      		
      		if(checkemail != undefined && checkemail != '')
      		{
      			msg = "<i class='fas fa-spinner fa-spin'></i> Please wait while we checking your email...";
      			emailSelector.closest('div').find(errorSelector).html(msg);
      			$.ajax({
      				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
      				data	 :{'checkemail': checkemail, 'eventid': eventID, 'password' : password},
      				dataType :'json',
      				method 	 : 'post',
      				success	 : function(result){
      					console.log(result);
      					if(result.status == true)
      					{
      						emailCheckedInpSelector.val(true);
      						/** if customer registered before, we allow them to use tool **/
      						if(result.status_code == 'exist_customer_event')
      						{
      							emailSelector.closest('div').find(errorSelector).html(icon + " you have registered this events");
      							var firstname    = result.data.firstname;
      							var lastname     = result.data.lastname;
      							var email        = result.data.email;
      							var mobile       = result.data.mobile;
      							var dob_parent   = result.data.dob_parent;
      							var fulladdress  = result.data.fulladdress;
      							var postcode 	 = result.data.postcode;
      							var city 		 = result.data.city;
      							var state 		 = result.data.state;
      							var eddDate 	 = result.data.edd_date;
      							var eddWeek 	 = result.data.week;
      							var milkbrand 	 = result.data.milkbrand;
      							var subscriberid = result.data.subscriber_id;
      							var tnc_mmy 	 = result.data.tnc_mmy;
      							var tnc_nestle 	 = result.data.tnc_nestle;
      							var news_promo 	 = result.data.news_promo;
      							
      							fnameSelector.val(firstname);
      							lnameSelector.val(lastname);
      							addrSelector.val(fulladdress);
      							citySelector.val(city);
      							stateSelector.val(state);
      							subidSelector.val(subscriberid);
      							
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
      							
      							if(milkbrand != '' && milkbrand != null && milkbrand != undefined)
      							{
      								$('body').find('#milk-brand').val(milkbrand);
      								$('body').find('.display-input-milkbrand').val(milkbrand);
      							}
      							
      							if(eddWeek > 0)
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
      							
      							if(eddDate != "" && eddDate != undefined)
      							{
      								
      								$('body').find('.display-input-edd').val(eddDate);
      								$('body').find('.display-edd-milk').removeClass('visuallyhidden');
      								$('body').find('.question-edd').addClass('visuallyhidden');
      								$('body').find('.row-question-milk-brand').addClass('visuallyhidden');
      							}
      							else
      							{
      								$('body').find('.display-edd-milk').addClass('visuallyhidden');
      								$('body').find('.question-edd').removeClass('visuallyhidden');
      								$('body').find('.row-question-milk-brand').removeClass('visuallyhidden');
      							}
								
								if(tnc_mmy == 'agree')
								{
									$('body').find('#checked-tnc-mmy').closest('span').addClass('checked');
									$('body').find('#checked-tnc-mmy').attr('disabled', true);
								}
								
								if(tnc_nestle == 'agree')
								{
									$('body').find('#checked-tnc-nestle').closest('span').addClass('checked');
									$('body').find('#checked-tnc-nestle').attr('disabled', true);
								}
								
								if(news_promo == 'agree')
								{
									$('body').find('#receive-news').closest('span').addClass('checked');
									$('body').find('#receive-news').attr('disabled', true);
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
      							/** if user already login and userid more than 0, and email-api return false then do this condition to handle **/
      							if(islogin == "true" && userid > 0)
      							{
      								console.log("meet this condition - user already login and userid more than 0, and email-api return");
      							}
      							/** if user not login and email-api return false then do this condition **/
      							else
      							{
      								if(result.status_code == 'exist_customer_motherhood_password_valid')
      								{
      									var firstname    = result.data.firstname;
      									var lastname     = result.data.lastname;
      									
      									fnameSelector.val(firstname);
      									lnameSelector.val(lastname);
      							
      									/** exist customer motherhood, never join event, with valid password **/
      									emailSelector.closest('div').find(errorSelector).html("");
      									passSelector.attr("required", "required");
      									passSelector.closest('div').find(errorSelector).html('<font style="color:#50ae55"><i class="far fa-check-circle"></i> Password match</font>');
										$('body').find('#btn-submit-form1').attr('disabled', false);
									}
      								else
      								{
      									/** new customer that account never exist with motherhood  **/
										
										if(passSelector.val() == '')
										{
											emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Kindly proceed to fill in all the required fields.</font>");
											passSelector.closest('div').find(errorSelector).html("");
										}
										else
										{
											emailSelector.closest('div').find(errorSelector).html("");
											passSelector.closest('div').find(errorSelector).html("");
										}
      									
      									passSelector.attr("required", "required");
										$('body').find('#btn-submit-form1').attr('disabled', false);
      								}
      								
      								$('body').find('.div-overlay').addClass('box-overlay-display');
      								$('body').find('.div-overlay').css('display', "block");
      								$('body').find('.clicker-img').addClass('unclickable');
      								$('body').find('.input-info').removeClass('background-grey-readonly');
      								$('body').find('.input-info').attr('disabled', false);
      								$('body').find('.div-password').show("fast");
      								$('body').find('#btn-submit-form1').css('display', "block");
      								$('body').find('.title-form').html('Fill up your information');
      							}
      						}
      					}
      					else
      					{
      						emailCheckedInpSelector.val(false);
      						passSelector.closest('div').find(errorSelector).html("");
      						
      						/** email exist with motherhood, never join event, password empty **/
      						if(result.status_code == 'exist_customer_motherhood_password_empty')
      						{
      							passSelector.attr("required", "required");
      							emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Your email has been found in our system.  Kindly enter your account password.</font>");
      						}
      						
      						/** email exist with motherhood, never join event, invalid password **/
      						else if(result.status_code == 'exist_customer_motherhood_password_invalid')
      						{
      							passSelector.attr("required", "required");
      							passSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Please insert valid motherhood password to submit your info.</font>");
      							emailSelector.closest('div').find(errorSelector).html("");
      						}
      						
      						else if(result.status_code == 'invalid_email')
      						{
      							passSelector.attr("required", "required");
      							passSelector.closest('div').find(errorSelector).html("");
      							emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Please insert valid email format.</font>");
      						}
      						
      						$('body').find('.div-overlay').addClass('box-overlay-display');
      						$('body').find('.div-overlay').css('display', "block");
      						$('body').find('.clicker-img').addClass('unclickable');
      						$('body').find('.input-info').removeClass('background-grey-readonly');
      						$('body').find('.input-info').attr('disabled', false);
      						$('body').find('#btn-submit-form1').css('display', "block");
      						$('body').find('.div-password').show("fast");
      						$('body').find('.title-form').html('Fill up your information');
      					}
      					allowCollapse();
      					checkStatusInput();
      				}
      			});
      		}
      		else
      		{
      			$('body').find('.div-overlay').addClass('box-overlay-display');
      			$('body').find('.div-overlay').css('display', "block");
      			$('body').find('.clicker-img').addClass('unclickable');
      			$('body').find('#btn-submit-form1').css('display', "block");
      			$('body').find('.div-password').show("fast");
      			$('body').find('.title-form').html('Fill up your information');
      			passSelector.attr("required", "required");
      			passSelector.closest('div').find(errorSelector).html("");
      			emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Please enter your email</font>");
      			emailCheckedInpSelector.val(false);
      			checkStatusInput();
      			allowCollapse();
      		}
      	} 
      	
      	var checkStatusInput = function(){
      		
      		// var eddStatus   = eddCheckedInpSelector.val();
      		var eddStatus   = true;
      		var emailStatus = emailCheckedInpSelector.val();
      		
      		console.log('Email status = ' + emailStatus + ' Edd status = ' + eddStatus);
      		
      		if(eddStatus == true && emailStatus == "true")
      		{
      			$('body').find('#btn-submit-form1').attr('disabled', false);
      		}
      		else{
      			$('body').find('#btn-submit-form1').attr('disabled', true);
      		}
      	}
      	var allowCollapse = function(){
      		var subscribe_id = subidSelector.val();
      		if(subscribe_id > 0)
      		{
      			$('body').find('.heading-details-info').attr('data-target', '#infoform');
      		}
      		else
      		{
      			$('body').find('.heading-details-info').attr('data-target', '');
      		}
      	}
      	
      	var validatePostcode = function(_this){
      		var postcode = _this.val();
      		if(postcode != undefined && postcode != '')
      		{
      			$.ajax({
      				url		 : '../modules/enlineamixmod/enlineamixmod-postcode-ajax.php', 
      				data	 :{'postcode': postcode},
      				dataType :'json',
      				method 	 : 'post',
      				success	 : function(result){
      					if(result.status == true)
      					{
      						if(result.data.city != undefined && result.data.city != '')
      						{
      							_this.closest('.row').find('.addr-city').val(result.data.city);
      						}
      						
      						if(result.data.state_name != undefined && result.data.state_name != '')
      						{
      							_this.closest('.row').find('.addr-state').val(result.data.state_name);
      						}
      					}
      				}
      			});
      		}
      	}
		
		var checkBoxTnc = function(){
			var checkBox = $('body').find('#checked-tnc-nestle').prop("checked");
			if(checkBox == false)
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please tick box to indicate you have read and understand our term and condition',
				});
				
				return false;
			}
			else
				return true;
			
			var checkBox = $('body').find('#checked-tnc-mmy').prop("checked");
			if(checkBox == false)
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please tick box to indicate you have read and understand our term and condition',
				});
				
				return false;
			}
			else
				return true;
		}
		
		var checktnc_promo = function(){
			var tnc_mmy    = $('body').find('.tnc-mmy-checked').val();
			var tnc_nestle = $('body').find('.tnc-nestle-checked').val();
			var news_promo = $('body').find('.news-promo-checked').val();
			
			if(tnc_mmy == 'agree')
			{
				$('body').find('#checked-tnc-mmy').closest('span').addClass('checked');
				// $('body').find('#checked-tnc-mmy').attr('disabled', true);
			}
			
			if(tnc_nestle == 'agree')
			{
				$('body').find('#checked-tnc-nestle').closest('span').addClass('checked');
				// $('body').find('#checked-tnc-nestle').attr('disabled', true);
			}
			
			if(news_promo == 'agree')
			{
				$('body').find('#receive-news').closest('span').addClass('checked');
				// $('body').find('#receive-news').attr('disabled', true);
			}
		}
		
		      
      	$(function(){
      		allowCollapse();
      		
      		$('body').on('click', '.clicker-img', function(){
      			var typeshow   = $(this).data('typeview');
      			var checkemail = emailSelector.val();
      			if(checkemail == undefined || checkemail == '')
      			{
      				alert('Please fill in email');
      			}
      			else{
      				$('body').find(".tools-motherhood").addClass('visuallyhidden');
      				if(typeshow == 'dueDateCalculator'){
      					$('body').find(".dueDateCalculator").removeClass('visuallyhidden');
      				}
      				else if(typeshow == 'pregnancyJourney'){
      					$('body').find(".babyJourney").removeClass('visuallyhidden');
      					$('body').find("#div-pregnancytracker").removeClass('visuallyhidden');
      					$('body').find("#div-pregnancytracker").css('display', 'block');
      				}
      				else if(typeshow == 'eMag'){
      					$('body').find(".eMag").removeClass('visuallyhidden');
      				}
      			}
      		});
      		
      		$('body').on('change', '#emailNew, #newPassword ', function(){
      			checkEmail();
      		});
      		
      		$('body').on('change', '#edd-question', function(){
      			
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
      		
      		$('#infoform').on('shown.bs.collapse', function() {
      			$('body').find('.ikon-collapse').html('<i class="fas fa-minus"></i>');
      		  });
      
      		$('#infoform').on('hidden.bs.collapse', function() {
      			$('body').find('.ikon-collapse').html('<i class="fas fa-plus"></i>');
      		});
      		
      		$('body').on('submit', '#eventform', function(){
      			$('body').find('#btn-submit-form1').html('<i class="fas fa-spinner fa-pulse"></i> Processing...');
      		});
      		
      		$('body').on('blur', '.addr-postcode', function(){
      			validatePostcode($(this));
      		});
			
			$('body').on("change", "#babyYear", function(){
               $('#babyMonth').prop('disabled', false);
      		   optionBabyday();
            });
			
            $('body').on('change', "#babyMonth",function(){
              optionBabyday();
            });
      	  
            $('body').on('change', "#babyDay" ,function(){
                var year  = $('#babyYear').val();
                var month = $('#babyMonth').val();
                var day   = $ ('#babyDay').val();
                var month = ("0" + month).slice(-2);
                var day   = ("0" + day).slice(-2);
                $('#edd-question').val(day+'-'+month+'-'+year);
      		  // eddCheck();
            });
			
			$('body').on('click', '.btn-submtit-edd', function(){
				eddCheck();
			});
			
			 checktnc_promo();
      	});
		
      	/** end develop by haiqal  **/
      // ]]>
   </script>
</p>
</p>