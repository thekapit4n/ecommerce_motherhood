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
      	
      	.error-msg{
      		color:red;
      	}
      -->
</style>
<!-- 
   Note:
   all the wording start with "{{ sometext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
   -->
<div class="row mb-4">
   <div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/July/Newmom/main-banner.png" width="100%" /></div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2"><label for="newemail" class="form-label required">Email</label> <input type="email" class="form-control" id="newemail" name="newEmail" value="{{predefine-email}}" required="" /> <input type="hidden" class="form-control statuscodeemail" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-6 px-2"><label for="firstname" class="form-label required">First name</label> <input type="text" class="form-control" id="firstname" name="newFirstName" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-6 px-2"><label for="lastname" class="form-label required">Last name</label> <input type="text" class="form-control" id="lastname" name="newLastName" required="" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-6 px-2"><label for="mobilenumber" class="form-label required">Mobile no.</label> <input type="text" class="form-control" id="mobilenumber" name="subscriber_question1" placeholder="Mobile number without '-'" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-6 px-2"><label for="parentdob" class="form-label required">Your Date of Birth</label> <input type="text" class="form-control" id="parentdob" name="subscriber_question2" required="" style="min-width: 100%;" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2 row-password" style="display: {{row-password-display}};">
   <div class="col-md-12 px-2">
      <p class="lead my-1" style="font-weight: 600;"><i class="fas fa-info-circle text-info"></i> Please assign a password for your Motherhood account.</p>
   </div>
</div>
<div class="row mb-2 row-password" style="display: {{row-password-display}};">
   <div class="col-md-6 px-2"><label for="newpassword" class="form-label required">Password</label> <input type="password" class="form-control inputpassword" id="newpassword" name="newPassword" /> <small class="error-msg"></small></div>
   <div class="col-md-6 px-2 div-confirm-password"><label for="confirmpassword" class="form-label required">Password confirmation</label> <input type="password" class="form-control inputconfirmpassword" id="confirmpassword" name="confirmPassword" /> <small class="error-msg"></small></div>
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
   <div class="col-md-6 px-2"><label for="pregnancy-month" class="form-label">Estimated Date of Delivery (EDD)</label> <input type="text" class="form-control" id="pregnancy-month" name="subscriber_question12" style="min-width: 100%;" /> <small class="error-msg"></small></div>
</div>
<div class="row my-2">
   <div class="col-md-12 px-2">
      <div class="row" style="margin-left: 1px;"><label class="form-label">Are you interested to receive other free gifts/samples from brands below? If yes, please select:</label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Enfamama A+" id="option-milk-a" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-a" style="font-weight: 400;"> Enfamama A+ </label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Anmum Materna" id="option-milk-b" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-b" style="font-weight: 400;"> Anmum Materna </label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Aptaclub" id="option-milk-c" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-b" style="font-weight: 400;"> Aptaclub </label></div>
      <input type="hidden" name="subscriber_question11" class="other-milk-brand-input" />
   </div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2"><label for="address" class="form-label required">Address 1</label> <input type="text" class="form-control input-addr" id="address" name="subscriber_question3" required="" placeholder="House number &amp; Jalan" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2"><label for="address2" class="form-label">Address 2</label> <input type="text" class="form-control input-addr2" id="address2" name="subscriber_question8" placeholder="Taman &amp; Seksyen" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode"><label for="postcode-address" class="form-label required">Postcode</label> <input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question4" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-4 px-2 mb-3 mb-md-1"><label for="city-address" class="form-label required">City</label> <input type="text" class="form-control addr-city" id="city-address" name="subscriber_question5" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-4 px-2 mb-3 mb-md-1">
      <label for="state-address" class="form-label required">State</label>
      <select class="form-select addr-state" name="subscriber_question7" id="state-address" aria-label="" style="height: 37px;" required="">
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
   <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode"><label for="postcode-country" class="form-label required">Country</label> <input type="text" class="form-control" id="postcode-country" name="subscriber_question10" required="" readonly="readonly" value="Malaysia" style="background-color: white;" /> <small class="error-msg"></small></div>
</div>
<div class="row my-4">
   <div class="col-md-12 px-2">
      <div class="form-check"><input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question13" required="" /> <label class="form-check-label noUniform px-3" for="tnccheckbox"> By submitting this application, I hereby agree to the Terms &amp; Conditions and the processing of my personal data in accordance with the terms of the Privacy Policy. Motherhood.com.my may collect my personal details and use for communication purposes and other milk brand collaborations that include but are not limited to club memberships, Motherhood.com.my products, and Motherhood.com.my brands only. One redemption per user only. <br /> <br /> I further agree to be registered as a member of Wyeth Nutrition ParenTeam Club and to the processing of your personal data in accordance with such club/membership terms (including to receive marketing and promotional information, product services and events for maternal milk, adult nutrition and growing up milk for children). </label></div>
   </div>
</div>
<div class="row my-4 align-items-center"><button type="button" class="btn btn-primary btn-submit-display" style="padding-top: 10px; padding-bottom: 10px; font-size: 14px;"> Submit </button> <button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button></div>
<div id="sponsored_content" sponsored_content="1"></div>
<!-- disabled overlay banner --->
<div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Wishlist/tnc.jpg"> </a></div>
<p>
   <script>// <![CDATA[
      var errorSelector   = '.error-msg';
      	var icon 	  	    = '<i class="fas fa-info-circle"></i>';
      	var mobileSelector  = $('body').find('#mobilenumber');
      	var emailSelector 	= $('body').find('#newemail');
      	var passSelector  	= $('body').find('#newPassword');
      	var fnameSelector   = $('body').find('#newFirstName');
        var lnameSelector   = $('body').find('#newLastName');
      	var eventID 	    = 141;
      	
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
      				mobileSelector.closest('div').find(errorSelector).html(icon + msg);
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
      							mobileSelector.closest('div').find(errorSelector).html(icon + msg);
      							flagCheck = false;
      						}
      					}
      					else{
      						if(phoneLength < 10 || phoneLength > 10){
      							mobileSelector.addClass('is-invalid');
      							msg = "Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
      							mobileSelector.closest('div').find(errorSelector).html(icon + msg);
      							flagCheck = false;
      						}
      					}  
      				}
      				else
      				{
      					mobileSelector.addClass('is-invalid');
      					msg = "Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).";
      					mobileSelector.closest('div').find(errorSelector).html(icon + msg);
      					flagCheck = false;
      				}
      			}
      			else if(firstNo == '5'){
      				if(phoneLength < 9 || phoneLength > 9){
      					mobileSelector.addClass('is-invalid');
      					msg = "Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777";
      					mobileSelector.closest('div').find(errorSelector).html(icon + msg);
      					flagCheck = false;
      				}
      			}
      		}
      		else
      		{
      			mobileSelector.addClass('is-invalid');
      			msg = "Please enter mobile no";
      			mobileSelector.closest('div').find(errorSelector).html(icon + msg);
      			flagCheck = false;
      		}
      		
      		return flagCheck;
      	}
      	
      	
      	var checkEmail = function(autorun){
      		emailSelector.removeClass('is-invalid');
      		var checkemail = emailSelector.val();
      		var msg 	   = "";
      		if(checkemail != undefined && checkemail != '')
      		{
      			msg = "<i class='fas fa-spinner fa-spin'></i> Please wait while we checking your email...";
      			emailSelector.closest('div').find(errorSelector).html(msg);
      			
      			$.ajax({
      				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
      				data	 :{'checkemail': checkemail, 'eventid': eventID},
      				dataType :'json',
      				method 	 : 'post',
      				success	 : function(result){
      					console.log(result);
      					
      					$('body').find('.statuscodeemail').val(result.status_code);
      					if(result.status == true)
      					{
      						/** if customer registered before, we allow them to use tool **/
      						if(result.status_code == 'exist_customer_event')
      						{
      							$('body').find('.btn-submit-display').css('display', 'none');
      							emailSelector.closest('div').find(errorSelector).html(icon + " you have registered this events");
      							alert("You have registered. System will redirect to redemption page. Thank you");
      							
      							if(result.data.redirectUrl != undefined && result.data.redirectUrl != '')
      							{
      								window.location.href = result.data.redirectUrl;
      							}
      							
      						}
      						else if(result.status_code == 'exist_customer_other_event')
      						{
      							$('body').find('.btn-submit-display').css('display', 'none');
      							emailSelector.closest('div').find(errorSelector).html(icon + " You have registered before. This redemption is open for new Motherhood users only.");
      							alert("You have registered before. This redemption is open for new Motherhood users only.")							
      						}
      						else if(result.status_code == 'exist_customer_motherhood_valid')
      						{
      							$('body').find('.btn-submit-display').css('display', 'block');
      							$('body').find('.row-password').css('display', 'none');
      							$('body').find('#newpassword').attr('required', false);
      							$('body').find('#confirmpassword').attr('required', false);
      							emailSelector.closest('div').find(errorSelector).html('Your email has been found in our system.');
      							
      							if(result.data.firstname != '' && result.data.firstname != undefined && result.data.firstname != null)
      							{
      								$('body').find('#firstname').val(result.data.firstname);
      							}
      							
      							if(result.data.lastname != '' && result.data.lastname != undefined && result.data.lastname != null)
      							{
      								$('body').find('#lastname').val(result.data.lastname);
      							}
      						}
      						else
      						{
      							$('body').find('.row-password').css('display', 'flex');
      							$('body').find('#newpassword').attr('required', true);
      							$('body').find('#confirmpassword').attr('required', true);
      							emailSelector.closest('div').find(errorSelector).html('valid email');
      						}
      						
      						return true
      					}
      					else
      					{
      						$('body').find('.row-password').css('display', 'flex');
      						$('body').find('#newpassword').attr('required', true);
      						$('body').find('#confirmpassword').attr('required', true);
      						emailSelector.closest('div').find(errorSelector).html('');
      						
      						return false;
      					}
      				}
      			});
      		}
      		else
      		{
      			if(autorun != true)
      			{
      				emailSelector.addClass('is-invalid');
      				emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Please enter your email</font>");
      				
      				return false;
      			}
      			
      			return true;
      		}
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

			var selectorDOB = document.getElementById("parentdob");
			Inputmask('datetime',{
				alias 		 :'datetime',
				inputFormat  : "dd/mm/yyyy", 
				outputFormat : "dd/mm/yyyy",
				leapday: "29.02."
			}).mask(selectorDOB);	
			
			var selectorDOB = document.getElementById("pregnancy-month");
			Inputmask('datetime',{
				alias 		 :'datetime',
				inputFormat  : "dd/mm/yyyy", 
				outputFormat : "dd/mm/yyyy",
				leapday: "29.02."
			}).mask(selectorDOB);
      		
      		$('body').on('change', '.option-other-milkbrand', function(){
      			optionOthermilk();
      		});
      		
      		$('body').on('blur', '#mobilenumber', function(){
      			validateMobileNo();
      		});
      		
      		checkEmail(true);
      		$('body').on('change', '#newemail', function(){
      			checkEmail();
      		});
      	
      		
      		$('body').on('submit', '#eventform', function(){
      			$('body').find('#btn-submit-form1').html('<i class="fas fa-spinner fa-pulse"></i> Processing...');
      		});
      		
      		// validateEmail(true);
            	$('body').on('click', '.btn-submit-display', function(){
      			$(this).html('Submit'); 
      			var emailStatusCode 	= $('body').find('.statuscodeemail').val();
      			var email 				= $('body').find('#newemail').val();
      			var firstname 			= $('body').find('#firstname').val();
      			var lastname 			= $('body').find('#lastname').val();
      			var parentdob 			= $('body').find('#parentdob').val();
      			var mobilenumber 		= $('body').find('#mobilenumber').val();
      			var validateMobile 		= validateMobileNo();
      			var currentmilkbrand 	= $('body').find('#currentmilkbrand').val();
      			var pregnancymonth 		= $('body').find('#pregnancy-month').val();
      			var address 			= $('body').find('#address').val();
      			var postcode 			= $('body').find('#postcode-address').val();
      			var city 				= $('body').find('#city-address').val();
      			var state 				= $('body').find('#state-address').val();
      			var country 			= $('body').find('#postcode-country').val();
      			var newpassword 		= $('body').find('#newpassword').val();
      			var confirmpassword 	= $('body').find('#confirmpassword').val();
      			var tncchecked 			= $('body').find('#tnccheckbox').is(':checked');
      			var flagcheck 			= true;
      			
      			console.log("emailStatusCode " + emailStatusCode);
      			console.log("validateMobile " + validateMobile  +  typeof validateMobile);
      			
      			if(email == '' || email == null || email == undefined)
      			{
      				$('body').find('#newemail').addClass('is-invalid');
      				$('body').find('#newemail').closest('div').find(errorSelector).html(icon + " Please insert your email");
      				
      				flagcheck = false;
      			}
      			
      			if(firstname == '' || firstname == null || firstname == undefined)
      			{
      				$('body').find('#firstname').addClass('is-invalid');
      				$('body').find('#firstname').closest('div').find(errorSelector).html(icon + " Please insert your firstname");
      				
      				flagcheck = false;
      			}
      			
      			if(lastname == '' || lastname == null || lastname == undefined)
      			{
      				$('body').find('#lastname').addClass('is-invalid');
      				$('body').find('#lastname').closest('div').find(errorSelector).html(icon + " Please insert your lastname");
      				
      				flagcheck = false;
      			}
      			
      			if(parentdob == '' || parentdob == null || parentdob == undefined)
      			{
      				$('body').find('#parentdob').addClass('is-invalid');
      				$('body').find('#parentdob').closest('div').find(errorSelector).html(icon + " Please your birthday");
      				
      				flagcheck = false;
      			}
      			
      			if(mobilenumber == '' || mobilenumber == null || mobilenumber == undefined)
      			{
      				$('body').find('#mobilenumber').addClass('is-invalid');
      				$('body').find('#mobilenumber').closest('div').find(errorSelector).html(icon + " Please your mobile number");
      				
      				flagcheck = false;
      			}
      			
      			if(validateMobile == false)
      			{
      				flagcheck = false;
      			}
      			
      			if(currentmilkbrand == '' || currentmilkbrand == null || currentmilkbrand == undefined)
      			{
      				$('body').find('#currentmilkbrand').addClass('is-invalid');
      				$('body').find('#currentmilkbrand').closest('div').find(errorSelector).html(icon + " Please select option of milk brand");
      				
      				flagcheck = false;
      			}
      			
      			// if(pregnancymonth == '' || pregnancymonth == null || pregnancymonth == undefined)
      			// {
      				// $('body').find('#pregnancy-month').addClass('is-invalid');
      				// $('body').find('#pregnancy-month').closest('div').find(errorSelector).html(icon + " Please insert your EDD");
      				
      				// flagcheck = false;
      			// }
      			
      			if(address == '' || address == null || address == undefined)
      			{
      				$('body').find('#address').addClass('is-invalid');
      				$('body').find('#address').closest('div').find(errorSelector).html(icon + " Please insert address");
      				
      				flagcheck = false;
      			}
      			
      			if(postcode == '' || postcode == null || postcode == undefined)
      			{
      				$('body').find('#postcode-address').addClass('is-invalid');
      				$('body').find('#postcode-address').closest('div').find(errorSelector).html(icon + " Please insert postcode");
      				
      				flagcheck = false;
      			}
      			
      			if(city == '' || city == null || city == undefined)
      			{
      				$('body').find('#city-address').addClass('is-invalid');
      				$('body').find('#city-address').closest('div').find(errorSelector).html(icon + " Please insert city");
      				
      				flagcheck = false;
      			}
      			
      			if(state == '' || state == null || state == undefined)
      			{
      				$('body').find('#state-address').addClass('is-invalid');
      				$('body').find('#state-address').closest('div').find(errorSelector).html(icon + " Please insert state");
      				
      				flagcheck = false;
      			}
      			
      			if(country == '' || country == null || country == undefined)
      			{
      				$('body').find('#postcode-country').addClass('is-invalid');
      				$('body').find('#postcode-country').closest('div').find(errorSelector).html(icon + " Please insert country");
      				
      				flagcheck = false;
      			}
      			
      			if(emailStatusCode == "new_customer_event" || emailStatusCode == '')
      			{
      				if(newpassword == "" || newpassword == null || newpassword == undefined)
      				{
      					$('body').find('#newpassword').addClass('is-invalid');
      					$('body').find('#newpassword').closest('div').find(errorSelector).html(icon + " Please insert password");
      					
      					flagcheck = false;
      				}
      				
      				if(confirmpassword == "" || confirmpassword == null || confirmpassword == undefined)
      				{
      					$('body').find('#confirmpassword').addClass('is-invalid');
      					$('body').find('#confirmpassword').closest('div').find(errorSelector).html(icon + " Please insert confirm password");
      					
      					flagcheck = false;
      				}
      				
      				if(newpassword != '' && newpassword != undefined && newpassword != null && newpassword != confirmpassword)
      				{
      					$('body').find('#confirmpassword').addClass('is-invalid');
      					$('body').find('#confirmpassword').closest('div').find(errorSelector).html(icon + " Password and confirm password not match");
      					
      					flagcheck = false;
      				}
      			}
      			
      			
      			if(flagcheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Oops...',
      					text: 'Required input has validation error',
      				});
      				
      				$('body').find(".is-invalid:first").focus()
      				return false;
      			}
      			
      			if(!tncchecked)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Error',
      					text: 'Please tick box to indicate you have read and understand our term and condition',
      				});
      				
      				return false;
      			}
      			
      			if(flagcheck)
      			{
      				$(this).html('<i class="fas fa-spinner fa-spin"></i> Processing...')
      				$('body').find('#btnsubmit').trigger('click');
      			}
      		});
      	});
       
      // ]]>
   </script>
</p>