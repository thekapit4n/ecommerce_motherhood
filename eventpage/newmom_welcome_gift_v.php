<style>
   <!--
   #scroll_content_top{
		display:none;
	}
	
	input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
		outline: unset;
		outline: unset;
		outline-offset: unset;
	}
	
	.form-check-input {
		width: 1.3em;
		height: 1.3em;
	}
      -->
</style>
<!-- 
   Note:
   all the wording start with "{{ sometext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
   -->
	<div class="row">
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;">
			<img src="https://via.placeholder.com/1170x481.png?text=Banner+holder+1170+by+480" width="100%" />
		</div>
	</div>
   <div class="row mb-2">
		<div class="col-md-12 px-2 text-center">
			<h2>Motherhood welcome gift form</h2>
		</div>
	</div>
    <div class="row mb-2">
		<div class="col-md-12 px-2">
			<label for="newemail" class="form-label required">Email</label>
			<input type="email" class="form-control" id="newemail" name="newEmail" value="{{predefine-email}}" required>
			<small class="error-msg"></small>
		</div>
	</div>
   <div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="firstname" class="form-label required">First name</label> 
			<input type="text" class="form-control" id="firstname" name="newFirstName" required /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="lastname" class="form-label required">Last name</label> 
			<input type="text" class="form-control" id="lastname" name="newLastName" required/> 
			<small class="error-msg"></small>
		</div>
   </div> 
   <div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="mobilenumber" class="form-label required">Mobile no.</label> 
			<input type="text" class="form-control" id="mobilenumber" name="subscriber_question1"  placeholder="Mobile number without '-'" required /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="parentdob" class="form-label required">Your Date of Birth</label> 
			<input type="date" class="form-control" id="parentdob" name="subscriber_question2" required/ style="min-width:100%;"> 
			<small class="error-msg"></small>
		</div>
   </div> 
   <div class="row mb-2" style="display:{{row-password-display}}">
		<div class="col-md-6 px-2">
			<label for="newpassword" class="form-label required">Password</label>
			<input type="password" class="form-control inputpassword" id="newpassword" name="newPassword">
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2 div-confirm-password">
			<label for="confirmpassword" class="form-label required">Password confirmation</label>
			<input type="password" class="form-control inputconfirmpassword" id="confirmpassword" name="confirmPassword">
			<small class="error-msg"></small>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="currentmilkbrand" class="form-label required">Current maternal milk brand</label>
			<select id="currentmilkbrand" class="form-select" name="subscriber_question9">
				<option value="">Please select</option>
         		{{option-listmilk}}
			</select>
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="pregnancy-month" class="form-label required">Pregnancy Month?</label>
			<select id="pregnancy-month" class="form-select" name="subscriber_question12">
				<option value="">Please select</option>
				<option value="planning to get pregnant">Planning to get pregnant</option>
				<option value="1 month">1 month</option>
				<option value="2 month">2 month</option>
				<option value="3 month">3 month</option>
				<option value="4 month">4 month</option>
				<option value="5 month">5 month</option>
				<option value="6 month">6 month</option>
				<option value="7 month">7 month</option>
				<option value="8 month">8 month</option>
				<option value="9 month">9 month</option>
         		
			</select>
			<small class="error-msg"></small>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-md-12 px-2">
			<div class="row" style="margin-left:1px;">
				<label class="form-label">Are you interested to receive other milk samples? If yes, please select:</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Enfamama A+" id="option-milk-a">
				<label class="form-check-label noUniform px-3 py-1" for="option-milk-a" style="font-weight:400;">
				Enfamama A+
				</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Anmum Materna" id="option-milk-b">
				<label class="form-check-label noUniform px-3 py-1" for="option-milk-b" style="font-weight:400;">
					Anmum Materna
				</label>
			</div>
			<input type="hidden" name="subscriber_question11" class="other-milk-brand-input">
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-12 px-2"><label for="address" class="form-label required">Address 1</label> 
		<input type="text" class="form-control input-addr" id="address" name="subscriber_question3" required="" placeholder="House number & Jalan"/> 
		<small class="error-msg"></small></div>
	</div>
	<div class="row mb-2">
		<div class="col-md-12 px-2">
			<label for="address2" class="form-label">Address 2</label>
			<input type="text" class="form-control input-addr2" id="address2" name="subscriber_question8" placeholder="Taman & Seksyen">
			<small class="error-msg"></small>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
			<label for="postcode-address" class="form-label required">Postcode</label>
			<input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question4" required>
			<small class="error-msg"></small>
		</div>
		<div class="col-md-4 px-2 mb-3 mb-md-1">
			<label for="city-address" class="form-label required">City</label>
			<input type="text" class="form-control addr-city" id="city-address" name="subscriber_question5" required>
			<small class="error-msg"></small>
		</div>
		<div class="col-md-4 px-2 mb-3 mb-md-1">
			<label for="state-address" class="form-label required">State</label>
			<select class="form-select addr-state" name="subscriber_question7" id="state-address" aria-label="" style="height:37px;" required>
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
	<div class="row mb-2">
		<div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
			<label for="postcode-country" class="form-label required">Country</label>
			<input type="text" class="form-control" id="postcode-country" name="subscriber_question10" required readonly value="Malaysia" style="background-color:white;">
			<small class="error-msg"></small>
		</div>
	</div>
	<div class="row my-4">
		<div class="col-md-12 px-2">
			<div class="form-check">
				<input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question13" required>
				<label class="form-check-label noUniform px-3" for="tnccheckbox">
					By submitting this application, I hereby agree to the Terms & Conditions and the processing of my personal data in accordance with the terms of the Privacy Policy. Motherhood.com.my may collect my personal details and use for communication purposes and other milk brand collaborations that include but are not limited to club memberships, Motherhood.com.my products, and Motherhood.com.my brands only.
					<br>
					One redemption per user only.
				</label>
			</div>
		</div>
	</div>
	<div class="row my-4">
		<div class="col-md-12 px-2 text-center">
			<button type="button" class="btn btn-primary btn-submit-display col-8">
				Submit
			</button>
			<button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button>
		</div>
	</div>
   <div id="sponsored_content" sponsored_content="1"></div>
   <!-- disabled overlay banner --->
   <div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Wishlist/tnc.jpg"> </a></div>
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
                        	var eventID 					= 106;
                        	
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
                        		var eddStatus    = true;
                        		var emailStatus  = emailCheckedInpSelector.val();
                        		var mobileStatus  = validateMobileno();
                        		
                        		console.log('Email status = ' + emailStatus + ' Edd status = ' + eddStatus + ' mobileStatus = ' + mobileStatus);
                        		
                        		if(eddStatus == true && emailStatus == "true" && mobileStatus == true)
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
	
	var optionOthermilk = function(){
		var optionselected = "";
		$('.option-other-milkbrand').each(function(indx, ele){
			if($(ele).is(":checked"))
			{
				optionselected += (optionselected != "" ? "," : "") + $(ele).val();
			}
		});
		
		$('body').find('.other-milk-brand-input').val(optionselected);
	}
	
	var validateMobileNo = function(){
		var mobileno  = mobileSelector.val();
		var flagCheck = true;
		mobileSelector.removeClass('is-invalid');
		
		if(mobileno != '' && mobileno != undefined && mobileno != null)
		{
			mobileSelector.closest('.row').find(errorSelector).html("");
			var mobilenumber = mobileno.replace("-"," ");
			mobileno 		 = mobilenumber.trim();
			var prefix 		 = mobileno.substring(0,3);
			var firstNo 	 = mobileno.substring(0,1);
			var phoneLength  = mobileno.length;
			
			if(firstNo != 0 && firstNo != 5){
				mobileSelector.addClass('is-invalid');
				msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
				mobileSelector.closest('div').find(errorSelector).html(msg);
				flagCheck = false;
			}
			else if(firstNo == '0'){
				var prefixArray = ["010", "011", "012", "013", "014", "015", "016", "017", "018", "019"];
				var checkPrefix = prefixArray.includes(prefix);
				if(checkPrefix){
					if(prefix == '011'){
						
						if(phoneLength < 10 || phoneLength > 11){
							mobileSelector.addClass('is-invalid');
							msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
							mobileSelector.closest('div').find(errorSelector).html(msg);
							flagCheck = false;
						}
					}
					else{
						if(phoneLength < 10 || phoneLength > 10){
							mobileSelector.addClass('is-invalid');
							msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
							mobileSelector.closest('div').find(errorSelector).html(msg);
							flagCheck = false;
						}
					}  
				}
				else
				{
					mobileSelector.addClass('is-invalid');
					msg = "Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).";
					mobileSelector.closest('div').find(errorSelector).html(msg);
					flagCheck = false;
				}
			}
			else if(firstNo == '5'){
				if(phoneLength < 9 || phoneLength > 9){
					mobileSelector.addClass('is-invalid');
					msg = "Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777";
					mobileSelector.closest('div').find(errorSelector).html(msg);
					flagCheck = false;
				}
			}
		}
		else
		{
			mobileSelector.addClass('is-invalid');
			msg = "Please enter mobile no";
			mobileSelector.closest('div').find(errorSelector).html(msg);
			flagCheck = false;
		}
		
		return flagCheck;
	}
	
    $(function(){
		$(window).load(function() {
			$.uniform.restore(".noUniform");
		});
		
		$('body').on('blur', '.addr-postcode', function(){
			validatePostcode($(this));
		});
		
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
		
		$('body').on('change', '.option-other-milkbrand', function(){
			optionOthermilk();
		});
		
		$('body').on('blur', '#mobilenumber', function(){
			validateMobileNo();
		});
	
		
		$('body').on('change', '#emailNew, #newPassword ', function(){
			checkEmail();
		});
	
		
		$('body').on('submit', '#eventform', function(){
			$('body').find('#btn-submit-form1').html('<i class="fas fa-spinner fa-pulse"></i> Processing...');
		});
		
		// validateEmail(true);
      	$('body').on('click', '.btn-submit-display', function(){
      			$(this).html('Submit');
      			validateEmail();
      			var fname 			 = $('body').find('.fname').val();
      			var lname 			 = $('body').find('.lname').val();
      			var milkbrand 		 = $('body').find('.current-milkbrand').val();
      			var childname 		 = $('body').find('.childname').val();
      			var address 		 = $('body').find('.input-addr').val();
      			var address2 		 = $('body').find('.input-addr2').val();
      			var city 			 = $('body').find('.addr-city').val();
      			var state 			 = $('body').find('.addr-state').val();
      			var emailInputStatus = $('body').find('.status-input-email').val();
      			var emailCodeStatus  = $('body').find('.status-code-email').val();
      			var confirmPassword  = $('body').find('.inputconfirmpassword').val();
      			var password 		 = $('body').find('.inputpassword').val();
      			var tncCheck         = $('body').find('#tnccheckbox').is(':checked');
      			var mobileValidate 	 = validateMobileNo();
      			var postcodeValidate = validatePostcode();
      			var dobValidate 	 = validateChildDob();
      			var flagCheck 		 = true;
      			var userid 			 = $('body').find('.user-id').val(); 
      			var loginemail 		 = $('body').find('.login-input-email').val(); /** hidden input for pre-define email **/ 
      			var inputEmail 		 = emailSelector.val(); 
      			
      			fnameSelector.removeClass('is-invalid');
      			fnameSelector.closest('div').find(errorSelector).html("");
      			
      			lnameSelector.removeClass('is-invalid');
      			lnameSelector.closest('div').find(errorSelector).html("");
      			
      			$('body').find('.current-milkbrand').removeClass('is-invalid');
      			$('body').find('.current-milkbrand').closest('div').find(errorSelector).html("");
      			
      			// $('body').find('.childname').removeClass('is-invalid');
      			// $('body').find('.childname').closest('div').find(errorSelector).html("");
      			
      			$('body').find('.input-addr').removeClass('is-invalid');
      			$('body').find('.input-addr').closest('div').find(errorSelector).html("");
      			
      			$('body').find('.addr-state').removeClass('is-invalid');
      			$('body').find('.addr-state').closest('div').find(errorSelector).html("");
      			
      			$('body').find('.addr-state2').removeClass('is-invalid');
      			$('body').find('.addr-state2').closest('div').find(errorSelector).html("");
      			
      			$('body').find('.inputpassword').removeClass('is-invalid');
      			$('body').find('.inputpassword').closest('div').find(errorSelector).html("");
      			
      			$('body').find('.inputconfirmpassword').addClass('is-invalid');
      			$('body').find('.inputconfirmpassword').closest('div').find(errorSelector).html("");
      			
      			if(fname == '' || fname == undefined || fname == null)
      			{
      				fnameSelector.addClass('is-invalid');
      				fnameSelector.closest('div').find(errorSelector).html("Please insert your firstname");
      				flagCheck = false;
      			}
      			
      			if(lname == '' || lname == undefined || lname == null)
      			{
      				lnameSelector.addClass('is-invalid');
      				lnameSelector.closest('div').find(errorSelector).html("Please insert your lastname");
      				flagCheck = false;
      			}
      			
      			if(address == '' || address == undefined || address == null)
      			{
      				$('body').find('.input-addr').addClass('is-invalid');
      				$('body').find('.input-addr').closest('div').find(errorSelector).html("Please insert address 1");
      				flagCheck = false;
      			}
      			
      			if(address2 == '' || address2 == undefined || address2 == null)
      			{
      				$('body').find('.input-addr2').addClass('is-invalid');
      				$('body').find('.input-addr2').closest('div').find(errorSelector).html("Please insert address 2");
      				flagCheck = false;
      			}
      			
      			if(city == '' || city == undefined || city == null)
      			{
      				$('body').find('.addr-city').addClass('is-invalid');
      				$('body').find('.addr-city').closest('div').find(errorSelector).html("Please insert city of address");
      				flagCheck = false;
      			}
      			
      			if(state == '' || state == undefined || state == null)
      			{
      				$('body').find('.addr-state').addClass('is-invalid');
      				$('body').find('.addr-state').closest('div').find(errorSelector).html("Please insert state of address");
      				flagCheck = false;
      			}
      			
      			if(loginemail == inputEmail && userid > 0)
      			{
      				console.log('loginemmail = ' + loginemail + " inputEmail = " + inputEmail + " userid = " + userid);
      			}
      			else
      			{
      				if(password == '' || password == undefined || password == null)
      				{
      					$('body').find('.inputpassword').addClass('is-invalid');
      					$('body').find('.inputpassword').closest('div').find(errorSelector).html("Please insert password");
      					flagCheck = false;
      				}
      				else if(password.length < 6){
      					$('body').find('.inputpassword').addClass('is-invalid');
      					$('body').find('.inputpassword').closest('div').find(errorSelector).html("Minimum length for password is 6");
      					flagCheck = false;
      				}
      			}
      			
      			if(emailCodeStatus == 'new_customer_event' && password != confirmPassword)
      			{
      				$('body').find('.inputconfirmpassword').addClass('is-invalid');
      				$('body').find('.inputconfirmpassword').closest('div').find(errorSelector).html("Password and confirm password not match");
      				flagCheck = false;
      			}
      			
      			if(emailInputStatus == 'false')
      			{
      				emailInputStatus = false
      				flagCheck = emailInputStatus;
      			}
      			
      			if(mobileValidate == false)
      			{
      				flagCheck = mobileValidate;
      			}
      			
      			if(postcodeValidate == false)
      			{
      				flagCheck = postcodeValidate;
      			}
      			
      			// if(dobValidate == false)
      			// {
      				// flagCheck = dobValidate;
      			// }
      			
      			if(tncCheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Error',
      					text: 'Please tick box to indicate you have read and understand our term and condition',
      				});
      				
      				return false;
      			}
      			
      			if(flagCheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Oops...',
      					text: 'Required input has validation error',
      				});
      				
      				return false;
      			}
      			else
      			{
      				$(this).html('<i class="fas fa-spinner fa-spin"></i> Processing...')
      				$('body').find('#btnsubmit').trigger('click');
      			}
      		});
	});
  
</script>
