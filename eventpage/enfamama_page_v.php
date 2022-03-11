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
            
            .form-check-input:focus {
                box-shadow:unset;
            }
            .input-group-border{
                border-right:0px;
            }
            
            .input-group-icon-hide{
                display:none;
            }
            
            .input-group-icon{
                display:flex;
                background-color:transparent; 
                border-left:0px;
            }
            
            .form-label.required:before {
                content:"*";
                color:red;
            }
            
            .btn-submit{
                width:33.3333333333%;
                padding-top: 10px; 
                padding-bottom: 10px; 
                font-size: 18px;
            }
            
            .error-msg{
                color:red;
            }
            
            .btn-submit-display, .btn-submit-display:hover, .btn-submit-display:focus, .btn-submit-display:active{
                width: 55%;
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 18px;
                background-color:#cb508a;
                border-color:#cb508a;
            }
            
            @media only screen and (max-width: 768px) {
                /* For mobile phones: */
                .btn-submit, .btn-submit-display{
                    width: 100%;
                }
            }
            
        }
      -->
</style>
<div class="container">
   <div class="row mb-2" style="margin-left: 0px; margin-right: 0px; margin-bottom: -15px !important;">
      	<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
	  		<img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/EnfamamaA%2B/1170.png" width="100%" />
		</div>
   </div>
   <div style="background-color: #f7f7f7; padding-top: 40px;">
      <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-12 px-2">
            <label for="email" class="form-label required">Email</label>
                <div class="input-group"><input type="text" class="form-control input-email" aria-label="email" aria-describedby="basic-addon1" name="newEmail" value="{{predefine-email}}" required="" /> 
                <input type="hidden" class="form-control login-input-email" value="{{predefine-email}}" /> 
                <input type="hidden" class="form-control user-id" value="{{predefine-user}}" /> 
                <input type="hidden" class="form-control status-input-email" /> 
                <input type="hidden" class="form-control status-code-email" /> 
                <span class="input-group-text span-email-input input-group-icon-hide" id="basic-addon1"></span></div>
            <small class="error-msg error-email-msg"></small>
         </div>
      </div>
      <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-6 px-2">
            <label for="firstname" class="form-label required">First name </label> 
            <input type="text" class="form-control fname" id="firstname" name="newFirstName" required="" /> 
            <small class="error-msg"></small>
        </div>
         <div class="col-md-6 px-2">
            <label for="lastname" class="form-label required">Last name </label> 
            <input type="text" class="form-control lname" id="lastname" name="newLastName" /> 
            <small class="error-msg"></small>
        </div>
      </div>
        <div class="row mb-2 px-md-5 mx-md-5">
            <div class="col-md-6 px-2">
                <label for="mobileno" class="form-label required">Mobile number </label> 
                <input type="text" class="form-control mobile-no" id="mobileno" name="subscriber_question1" required="" /> 
                <small class="error-msg"></small>
            </div>
            <div class="col-md-6 px-2">
                <label for="userdob" class="form-label required">Mum Date of Birth</label>
                <input type="text" class="form-control user-dob" id="userdob" name="subscriber_question2" required="" /> 
                <small class="error-msg"></small>
            </div>
        </div>
        <div class="row mb-2 px-md-5 mx-md-5">
            <div class="col-md-6 px-2">
                <label for="areyoupregnant" class="form-label required">Are you pregnant?</label>
                <select class="form-select" name="subscriber_question8" id="areyoupregnant" aria-label="" style="height: 37px;" required="">
                <option value="">Please select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                </select>
                <small class="error-msg"></small>
            </div>
            <div class="col-md-6 px-2">
                <label for="currentbrand" class="form-label required">Which brand do you currently use</label>
                <select class="form-select" name="subscriber_question9" id="currentbrand" aria-label="" style="height: 37px;" required="">
                    <option value="">Please select</option>
                    <option value="Anmum Materna">Anmum Materna</option>	
                    <option value="Frisomum Gold">Frisomum Gold</option>
                    <option value="Nestlé MOM">Nestlé MOM</option>
                    <option value="Similac Mom">Similac Mom</option>
                    <option value="Wyeth Promama">Wyeth Promama</option>
                    <option value="Others">Others</option>
                    <option value="I do not use any"> I do not use any</option>
                </select>
                <small class="error-msg"></small>
            </div>
        </div>
        <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-12 px-2">
            <label for="address" class="form-label required">Full address</label> 
            <input type="text" class="form-control input-addr" id="address" name="subscriber_question3" required="" placeholder="" /> 
            <small class="error-msg"></small>
         </div>
      </div>
      <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
            <label for="postcode-address" class="form-label required">Postcode</label> 
            <input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question4" required="" /> 
            <small class="error-msg"></small>
         </div>
         <div class="col-md-4 px-2 mb-3 mb-md-1">
            <label for="city-address" class="form-label required">City</label> 
            <input type="text" class="form-control addr-city" id="city-address" name="subscriber_question5" required="" /> 
            <small class="error-msg"></small>
         </div>
         <div class="col-md-4 px-2 mb-3 mb-md-1">
            <label for="state-address" class="form-label required">State</label>
            <select class="form-select addr-state" name="subscriber_question7" id="state-address" aria-label="" style="height: 37px;" required="required">
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
      <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode"><label for="postcode-country" class="form-label required">Country</label> <input type="text" class="form-control" id="postcode-country" name="subscriber_question13" required="" readonly="readonly" value="Malaysia" style="background-color: white;" /> <small class="error-msg"></small></div>
      </div>
      <div class="row my-4 px-md-5 mx-md-5">
         <div class="col-md-12 px-2">
            <div class="form-check">
                <input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question10" required="" /> 
                <label class="form-check-label noUniform px-3" for="tnccheckbox"> 
                    By submitting this form, I agree that Mead Johnson Nutrition (Malaysia) Sdn Bhd (“MJN”), Reckitt Benckiser (Malaysia) Sdn Bhd and/or its affiliates (collectively, “RB”) and/or any third party under contract with MJN or 
					RB may contact me from time to time, by telephone, letter or other electronic means to market/to promote/sell MJN 
					and/or RB products and services and/or information related to Enfamama A+ Club (collectively referred to as “Purpose” ). 
					I consent to all use of my information by MJN and/or RB in accordance with the <a href="https://www.enfagrow.com.my/privacy-policy-mead-johnson-nutrition" target="_blank">Privacy Policy</a> which I have read and understood. I have the option of not cooperating at any 
					time from receiving calls, SMS, letters or other electronic communications to provide information related to the Purpose. Contact us for more information.
                </label>
            </div>
         </div>
      </div>
      <div class="row my-4 px-md-5 mx-md-5">
         <div class="col-md-12 px-2 text-center"><button type="button" class="btn btn-primary btn-submit-display"> Submit </button></div>
      </div>
      <div style="background-color: #154694;">
         <div class="row my-4 px-md-5 mx-md-5">
            <div class="col-md-12 px-2 py-4" style="color: white;">
               <h6>Terms &amp; Conditions</h6>
               <ol style="list-style: decimal; padding-left: 20px;" start="1">
                  <li class="text-left tnc_li">This sample redemption is only open for first-time Enfamama A+ users who have not redeemed in the last 6 months.</li>
                  <li class="text-left tnc_li">Enfamama A+ is for pregnant & lactating mums.</li>
                  <li class="text-left tnc_li">Enfamama A+ samples will be provided based on availability of flavours and will only be given to pregnant mothers. </li>
                  <li class="text-left tnc_li">KelabMama  and Motherhood.com.my will not be responsible for any unsuccessful registrations due to internet interruptions.</li>
                  <li class="text-left tnc_li">KelabMama  and Motherhood.com.my reserve the right to vary, cancel, discontinue, or suspend registration or any part, or any part of the applicable terms and conditions, from time to time, with or without any prior notice.</li>
                  <li class="text-left tnc_li">Registration will only be accepted if the ADDRESS and other details are filled in completely and correct.</li>
                  <li class="text-left tnc_li">Incomplete registration forms will not be accepted.</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<p><button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button></p>
<div id="sponsored_content" sponsored_content="1"></div>
<p>
   <!-- disabled overlay banner --->
   <script>// <![CDATA[
      var mobileSelector 	= $('body').find('.mobile-no');
      		var errorSelector  	 = $('body').find('.error-msg');
      		var childDobselector = $('body').find('#childdob');
      		var emailSelector	 = $('body').find('.input-email');
      		var passSelector	 = $('body').find('.inputpassword');
      		var fnameSelector	 = $('body').find('.fname');
      		var lnameSelector	 = $('body').find('.lname');
      		var postcodeSelector	= $('body').find('.addr-postcode');
      
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
      				msg = "Please enter mobile phone number(0127880912)";
      				mobileSelector.closest('div').find(errorSelector).html(msg);
      				flagCheck = false;
      			}
      			
      			return flagCheck;
      		}
                  
      	var validateEmail = function(autorun){
      		var eventID  = 149;
      		var email 	 = emailSelector.val();
      
      		
      		var errorSelector = '.error-email-msg';
      		emailSelector.closest('.row').find(errorSelector).html("");
      		emailSelector.removeClass('input-group-border');
      		emailSelector.removeClass('is-invalid');
      		emailSelector.removeClass('is-valid');
      		passSelector.addClass('is-invalid');
      		emailSelector.closest('.row').find('.span-email-input').removeClass('input-group-icon').addClass('input-group-icon-hide').html('');
      		$('body').find('.row-password').show('fast');
      		$('body').find('.div-confirm-password').show('fast');
      		$('body').find('.btn-submit-display').show('fast');
      		
      		if(email != '' && email != undefined && email != null)
      		{
      			emailSelector.addClass('input-group-border');
      			emailSelector.closest('.row').find('.span-email-input').removeClass('input-group-icon-hide');
      			emailSelector.closest('.row').find('.span-email-input').addClass('input-group-icon');
      			emailSelector.closest('.row').find('.span-email-input').html('<i class="fas fa-spinner fa-spin text-info"></i>');
      			
      			$.ajax({
      				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
      				data	 :{'checkemail': email, 'eventid': eventID},
      				dataType :'json',
      				method 	 : 'post',
      				async	 : false,
      				success	 : function(result){
      					emailSelector.removeClass('input-group-border');
      					emailSelector.closest('.row').find(errorSelector).html("");
      					emailSelector.closest('.row').find('.span-email-input').removeClass('input-group-icon').addClass('input-group-icon-hide').html('');
      				
      					$('body').find('.status-input-email').val(result.status);
      					$('body').find('.status-code-email').val(result.status_code);
      
      					if(result.data != undefined && result.data != null)
      					{
      						if(result.data.firstname != '' && result.data.firstname != undefined && result.data.firstname != null)
      						{
      							fnameSelector.val(result.data.firstname);
      						}
      						
      						if(result.data.lastname != '' && result.data.lastname != undefined && result.data.lastname != null)
      						{
      							lnameSelector.val(result.data.lastname);
      						}
      					}
      
      					emailSelector.closest('.row').find(errorSelector).html("");
      					emailSelector.removeClass('is-invalid');
      					if(result.status == true)
      					{
      						if(result.status_code == 'exist_customer_motherhood')
      						{
      							emailSelector.closest('.row').find(errorSelector).html("Kindly proceed to fill in the information below");
      						}
      					}
                        else
                        {
                            if(result.status_code == 'exist_customer_event_newmom')
      						{
      							emailSelector.closest('.row').find(errorSelector).html("This email has been registered with new mom program 6 months ago");
                                $('body').find('.btn-submit').hide('fast');
      							$('body').find('.btn-submit-display').hide('fast');
                            }
      						else if(result.status_code == 'exist_customer_event')
      						{
                                emailSelector.closest('.row').find(errorSelector).html("This email has been registered");
      							$('body').find('.btn-submit').hide('fast');
      							$('body').find('.btn-submit-display').hide('fast');
      						}
                        }					
      				}
      			});
      		}
      		else
      		{
      			if(autorun != true)
      			{
      				msg = "Please insert email";
      				emailSelector.addClass('is-invalid');
      				emailSelector.closest('.row').find(errorSelector).html(msg);
      				
      				$('body').find('.status-input-email').val(false);
      				$('body').find('.status-code-email').val('email_empty');
      			}
      		}
      		
      	}

        var validatePostcode = function(_this)
		{
			var postcode = postcodeSelector.val();
			
			postcodeSelector.removeClass('is-invalid');
			postcodeSelector.closest('.div-postcode').find('.error-msg').html('');
			if(postcode == '' || postcode == undefined || postcode == null)
			{
				postcodeSelector.addClass('is-invalid');
				postcodeSelector.closest('.div-postcode').find('.error-msg').html('Please insert postcode');
				
				return false;
			}
			else if(isNaN(postcode))
			{
				postcodeSelector.addClass('is-invalid');
				postcodeSelector.closest('.div-postcode').find('.error-msg').html('Postcode must be in numeric value');
				
				return false;
			}
			else if(postcode.length != 5)
			{
				postcodeSelector.addClass('is-invalid');
				postcodeSelector.closest('.div-postcode').find('.error-msg').html('Postcode contain 5 digits only');
				
				return false;
			}
			else
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
								postcodeSelector.closest('.row').find('.addr-city').val(result.data.city);
							}
							
							if(result.data.state_name != undefined && result.data.state_name != '')
							{
								postcodeSelector.closest('.row').find('.addr-state').val(result.data.state_name);
							}
						}
					}
				});
				
				return true;
			}
		}
                        		
      	$(function(){
      		$(window).load(function() {
      			$.uniform.restore(".noUniform");
      		});
      		
      		$('body').on('click', '.btn-test', function(){
      			$('.input-test').addClass('input-group-border');
      			$('.input-test').html('<i class="fas fa-spinner fa-spin"></i>');
      			$('.input-test').removeClass('is-valid');
      			$('.input-group-icon').css('display','flex');
      		});
      		
      		$('body').on('click', '.btn-test2', function(){
      			$('.input-test').removeClass('input-group-border');
      			$('.input-test').addClass('is-valid');
      			$('.input-group-icon').css('display','none');
      		});
      		
      		
      		$('body').on('blur', '.addr-postcode', function(){
                validatePostcode();
            });

      		$('body').on('blur', '.mobile-no', function(){
      			validateMobileNo();
      		});
      
      		$('body').on('blur', '.input-email', function(){
      			validateEmail();
      		});
      
      		validateEmail(true);
      		$('body').on('click', '.btn-submit-display', function(){
      			$(this).html('Submit');
      			validateEmail();
      			var fname 			 = $('body').find('.fname').val();
      			var lname 			 = $('body').find('.lname').val();
      			var mobileValidate 	 = validateMobileNo();
      			var flagCheck 		 = true;
      			var state 			 = $('body').find('.addr-state').val();
      			var state_center 	 = $('body').find('#state-center-selected').val();
      			var loginemail 		 = $('body').find('.login-input-email').val(); /** hidden input for pre-define email **/ 
      			var inputEmail 		 = emailSelector.val(); 
      			var emailInputStatus = $('body').find('.status-input-email').val();
      			var emailCodeStatus  = $('body').find('.status-code-email').val();
      			var tncCheck         = $('body').find('#tnccheckbox').is(':checked');
				var parentdob 		 = $('body').find('#userdob').val();

      			fnameSelector.removeClass('is-invalid');
      			fnameSelector.closest('div').find(errorSelector).html("");
      			
      			lnameSelector.removeClass('is-invalid');
      			lnameSelector.closest('div').find(errorSelector).html("");								
      			if(state == '' || state == undefined || state == null)
      			{
      				$('body').find('.addr-state').addClass('is-invalid');
      				$('body').find('.addr-state').closest('div').find(errorSelector).html("Please insert state of address");
      				flagCheck = false;
      			}
      		
      			if(emailInputStatus == 'false')
      			{
      				console.log("error 1");
      				emailInputStatus = false
      				flagCheck = emailInputStatus;
      			}
      			
      			if(mobileValidate == false)
      			{
      				console.log("error 2");
      				flagCheck = mobileValidate;
      			}

				var arryDate = parentdob.split("/");
		
				if(arryDate.length == 3)
				{
					if(isNaN(arryDate[0]) || isNaN(arryDate[1]) || isNaN(arryDate[2]))
					{
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'Please enter mum date of birth in correct format',
						});

						return false;
					}
				}
      			
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
      
      		var selectorMobile = document.getElementById("mobileno");
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

            var selectorDOB = document.getElementById("userdob");
            Inputmask('datetime',{
                alias 		 :'datetime',
                inputFormat  : "dd/mm/yyyy", 
                outputFormat : "dd/mm/yyyy",
                min: "01/01/1942", 
                max: "31/12/2004",
                leapday: "29.02."
            }).mask(selectorDOB); 
      	});
       
      // ]]>
   </script>
</p>