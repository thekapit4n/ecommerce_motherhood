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
	
	.btn-submit-display, .btn-submit-display:hover, .btn-submit-display:focus, .btn-submit-display:active
	{
		width: 55%;
		padding-top: 10px;
		padding-bottom: 10px;
		font-size: 18px;
		background-color:#5bc5c5;
		border-color:#5bc5c5;
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
  	<!-- 
	<div class="row mb-2" style="margin-left: 0px; margin-right: 0px; margin-bottom: -15px !important;">
      	<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
	  		<img class="background" id="background" src="https://via.placeholder.com/1170x481?text=bannerhere" width="100%" />
		</div>
   </div>
   -->
   <div class="row my-4">
			<div class="col-lg-12 col-md-12 text-center">
				<h1>One more step to get your FREE WARDAH BOOSTER ESSENCE SAMPLING! Fill out the form below and GET NOW!</h1>
			</div>
		</div>
   <div style="background-color: #f7f7f7; padding-top: 40px;">
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="email" class="form-label required">Email</label>
				<div class="input-group"><input type="text" class="form-control input-email" aria-label="email" aria-describedby="basic-addon1" name="newEmail" value="{{predefine-email}}" required="" /> 
					<input type="hidden" class="form-control login-input-email" value="{{predefine-email}}" /> 
					<input type="hidden" class="form-control user-id" value="{{predefine-user}}" /> 
					<input type="hidden" class="form-control status-input-email" /> 
					<input type="hidden" class="form-control status-code-email" /> 
					<span class="input-group-text span-email-input input-group-icon-hide" id="basic-addon1"></span>
				</div>
				<small class="error-msg error-email-msg"></small>
			</div>
			<div class="col-md-6 px-2">
				<label for="mobileno" class="form-label required">Mobile number</label> 
				<input type="text" class="form-control mobile-no" id="mobileno" name="subscriber_question1" required="" /> 
				<small class="error-msg"></small>
			</div>
		</div>
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="firstname" class="form-label required">First name</label> 
				<input type="text" class="form-control fname" id="firstname" name="newFirstName" required="" /> 
				<small class="error-msg"></small>
			</div>
			<div class="col-md-6 px-2">
				<label for="lastname" class="form-label required">Last name</label> 
				<input type="text" class="form-control lname" id="lastname" name="newLastName" /> 
				<small class="error-msg"></small>
			</div>
		</div>
		<div class="row mb-2 px-md-5 mx-md-5 row-password" style="display: {{row-password-display}};">
			<div class="col-md-6 px-2">
				<label for="newpassword" class="form-label required">Create Account Password </label> 
				<input type="password" class="form-control inputpassword" id="newpassword" name="newPassword" /> 
				<small class="error-msg">Please assign a password for your Motherhood account</small>
			</div>
			<div class="col-md-6 px-2 div-confirm-password">
				<label for="confirmpassword" class="form-label required">Password confirmation</label> 
				<input type="password" class="form-control inputconfirmpassword" id="confirmpassword" name="confirmPassword" /> 
				<small class="error-msg"></small>
			</div>
		</div>
	
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="agegroup" class="form-label required">What is your age group? </label> 
				<select class="form-select" name="subscriber_question9" id="agegroup" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="20 - 30 years">20 - 30 years</option>
					<option value="30 - 40 years">30 - 40 years</option>
					<option value="40 - 50 years">40 - 50 years</option>
				</select>
				<small class="error-msg"></small>
			</div>
			<div class="col-md-6 px-2">
				<label for="maritalstatus" class="form-label required">What is your marital status?</label> 
				<select class="form-select" name="subscriber_question10" id="maritalstatus" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Others">Others</option>
				</select>
				<small class="error-msg"></small>
			</div>
		</div>	
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="employmentstatus" class="form-label required">What is your employment status? </label> 
				<select class="form-select" name="subscriber_question11" id="employmentstatus" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Unemployed">Unemployed</option>
					<option value="Part-time">Part-time</option>
					<option value="Full-time">Full-time</option>
					<option value="Others">Others</option>
				</select>
				<small class="error-msg"></small>
			</div>
			<div class="col-md-6 px-2">
				<label for="skintype" class="form-label required">What is your skin type?</label> 
				<select class="form-select" name="subscriber_question12" id="skintype" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Dry">Dry</option>
					<option value="Oily">Oily</option>
					<option value="Combination">Combination</option>
					<option value="Sensitive">Sensitive</option>
					<option value="Normal">Normal</option>
					<option value="Hyper-pigmented">Hyper-pigmented</option>
				</select>
				<small class="error-msg"></small>
			</div>
		</div>
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="allergyskincare" class="form-label required">Do you have experienced allergy towards skincare product? </label> 
				<select class="form-select" name="subscriber_question13" id="allergyskincare" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
				<small class="error-msg"></small>
			</div>
			<div class="col-md-6 px-2">
				<label for="skincarebrand" class="form-label required">Are you currently using any Skincare product?</label> 
				<select class="form-select" name="subscriber_question14" id="skincarebrand" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Bio-Essence">Bio-Essence</option>
					<option value="Eucerin">Eucerin</option>
					<option value="Hada Labo">Hada Labo</option>
					<option value="Innisfree">Innisfree</option>
					<option value="La Roche Posay">La Roche Posay</option>
					<option value="Safi">Safi</option>
					<option value="Some by Mi">Some by Mi</option>
					<option value="Wardah">Wardah</option>
					<option value="Garnier">Garnier</option>
					<option value="None">None</option>
					<option value="Other brands">Other brands</option>
				</select>
				<div class="row row-other-skin-brand" style="margin-left:0px;margin-right:0px;display:none;">
					<div class="pt-2">
						<input type="text" class="form-control other-skin-brand" name="subscriber_question15" /> 
					</div>
				</div>
				<small class="error-msg"></small>
			</div>
		</div>
		<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-6 px-2">
				<label for="brandawareness" class="form-label required">How do you know about Wardah Skincare? </label> 
				<select class="form-select" name="subscriber_question16" id="brandawareness" aria-label="" style="height: 37px;" required="required">
					<option value="">Please select</option>
					<option value="Facebook ads">Facebook ads</option>
					<option value="YouTube ads">YouTube ads</option>
					<option value="Facebook/Instagram Live">FB / IG Live</option>
					<option value="Recommended by influencers">Recommended by influencers</option>
					<option value="Recommended by friends / relatives">Recommended by friends / relatives</option>
					<option value="Online shopping sites">Online shopping sites</option>
					<option value="Online Articles">Online Articles</option>
				</select>
				<small class="error-msg"></small>
			</div>
		</div>
	
      	<div class="row mb-2 px-md-5 mx-md-5">
			<div class="col-md-12 px-2">
				<label for="address" class="form-label required">Full address</label> 
				<input type="text" class="form-control input-addr" id="address" name="subscriber_question3" required="required" placeholder="" /> 
				<small class="error-msg"></small>
			</div>
      	</div>
      	<div class="row mb-2 px-md-5 mx-md-5">
        	<div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
		 		<label for="postcode-address" class="form-label required">Postcode</label> 
		 		<input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question4" required="required" /> 
				 <small class="error-msg"></small>
			</div>
         	<div class="col-md-4 px-2 mb-3 mb-md-1">
		 		<label for="city-address" class="form-label required">City</label> 
				<input type="text" class="form-control addr-city" id="city-address" name="subscriber_question5" required="required" /> 
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
			<div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
				<label for="postcode-country" class="form-label required">Country</label>
				<input type="text" class="form-control" id="postcode-country" name="subscriber_question8" required="" readonly="readonly" value="Malaysia" style="background-color: white;" /> 
				<small class="error-msg"></small>
			</div>
		</div>
        <div class="row my-4 px-md-5 mx-md-5">
             <div class="col-md-12 px-2">
                 <div class="form-check">
                     <input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question17" required="" /> 
                     <label class="form-check-label noUniform px-3" for="tnccheckbox"> 
                     TERMS AND CONDITIONS
                     </label>
                 </div>
             </div>
        </div>
		<div class="row my-4 px-md-5 mx-md-5">
			<div class="col-md-12 px-2 text-center"><button type="button" class="btn btn-primary btn-submit-display"> Submit </button></div>
		</div>
		<div style="background-color:#5bc5c5;">
			<div class="row my-4 px-md-5 mx-md-5" style="color:white;">
				<div class="col-md-12 px-2 py-4">
				<h6>Terms &amp; Conditions</h6>
				<ol style="list-style: decimal; padding-left: 20px;" start="1">
					<li class="text-left tnc_li">Registration will only be accepted with a FULL postal address provided.</li>
					<li class="text-left tnc_li">Incomplete registration form will not be accepted.</li>
					<li class="text-left tnc_li">By submitting this application, you hereby consent to us collecting, using, and/or processing your personal data in accordance with our <a href="../../../page/privacy-policy" target="_blank" rel="noopener">Privacy Policy.</a></li>
				</ol>
				</div>
			</div>
		</div>
   </div>
</div>
<p>
	<button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button>
</p>
<div id="sponsored_content" sponsored_content="1"></div>
<p>
   <!-- disabled overlay banner --->
<script>// <![CDATA[
var mobileSelector 	= $('body').find('.mobile-no');
var errorSelector  	= $('body').find('.error-msg');
var childDobselector = $('body').find('#childdob');
var emailSelector	= $('body').find('.input-email');
var passSelector		= $('body').find('.inputpassword');
var fnameSelector	= $('body').find('.fname');
var lnameSelector	= $('body').find('.lname');
var postcodeSelector	= $('body').find('.addr-postcode');
	
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
            
var validateEmail = function(autorun){
	var eventID  = 147;
	var email 	 = emailSelector.val();
	var password = passSelector.val();
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
			data	 :{'checkemail': email, 'eventid': eventID, 'password' : password},
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
				
				if(result.status == false)
				{
					if(result.status_code == 'exist_customer_motherhood_password_empty')
					{
						var userid 		= $('body').find('.user-id').val();
						var loginemail  = $('body').find('.login-input-email').val();
						emailSelector.closest('.row').find(errorSelector).html("Kindly proceed to fill in the information below");
						$('body').find('.row-password').hide('fast');
						$('body').find('.status-input-email').val(true);
						/** if customer already login we hide password input **/
						/* if(loginemail != '' && loginemail == email && userid > 0)
						{
							passSelector.closest('.row').find(errorSelector).html("");
							$('body').find('.row-password').hide('fast');
							$('body').find('.status-input-email').val(true);
						}
						else
						{
							passSelector.closest('.row').find(errorSelector).html("Kindly enter your account password");
							emailSelector.addClass('is-invalid');
							passSelector.addClass('is-invalid');
						} */
						
						$('body').find('.div-confirm-password').hide('fast');
					}
					else if(result.status_code == 'exist_customer_motherhood_password_invalid')
					{
						emailSelector.closest('.row').find(errorSelector).html("Kindly proceed to fill in the information below");
						passSelector.closest('.row').find(errorSelector).html(result.msg);
						emailSelector.addClass('is-invalid');
						passSelector.addClass('is-invalid');
						$('body').find('.row-password').hide('fast');
						$('body').find('.div-confirm-password').hide('fast');
					}
					
				}
				else
				{
					emailSelector.closest('.row').find(errorSelector).html("");
					passSelector.closest('.row').find(errorSelector).html("");
					emailSelector.removeClass('is-invalid');
					passSelector.removeClass('is-invalid');
						
					if(result.status_code == 'new_customer_event')
					{
						$('body').find('.row-password').show('fast');
						$('body').find('.div-confirm-password').show('fast');
					}
					else if(result.status_code == 'exist_customer_motherhood_password_valid')
					{
						$('body').find('.div-confirm-password').hide('fast');
						$('body').find('.row-password').hide('fast');
					}
					else if(result.status_code == 'exist_customer_event')
					{
						$('body').find('.div-confirm-password').hide('fast');
						$('body').find('.row-password').hide('fast');
						$('body').find('.btn-submit').hide('fast');
						$('body').find('.btn-submit-display').hide('fast');
						
						if(result.data.firstname != '' && result.data.firstname != undefined && result.data.firstname != null)
						{
							$('body').find('.fname').val(result.data.firstname);
						}
						
						if(result.data.lastname != '' && result.data.lastname != undefined && result.data.lastname != null)
						{
							$('body').find('.lname').val(result.data.lastname);
						}
						
						if(result.data.mobile != '' && result.data.mobile != undefined && result.data.mobile != null)
						{
							$('body').find('.mobile-no').val(result.data.mobile);
						}
													
						if(result.data.fulladdress != '' && result.data.fulladdress != undefined && result.data.fulladdress != null)
						{
							$('body').find('.input-addr').val(result.data.fulladdress);
						}
						
						if(result.data.postcode != '' && result.data.postcode != undefined && result.data.postcode != null)
						{
							$('body').find('.addr-postcode').val(result.data.postcode);
						}
						
						if(result.data.city != '' && result.data.city != undefined && result.data.city != null)
						{
							$('body').find('.addr-city').val(result.data.city);
						}
						
						if(result.data.state != '' && result.data.state != undefined && result.data.state != null)
						{
							$('body').find('.addr-state').val(result.data.state);
						}
						
						if(result.data.state != '' && result.data.state != undefined && result.data.state != null)
						{
							$('body').find('.addr-state').val(result.data.state);
						}
						
						$('body').find('#tnccheckbox').prop('checked', true);
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
                  		
$(function(){
	$(window).load(function() {
		$.uniform.restore(".noUniform");
	});
		
	$('body').on('blur', '.addr-postcode', function(){
		validatePostcode();
	});
	
	$('body').on('blur', '.mobile-no', function(){
		validateMobileNo();
	});
	
	$('body').on('blur', '#childdob', function(){
		validateChildDob();
	});
	
	$('body').on('blur', '.input-email', function(){
		validateEmail();
	});
	
	$('body').on('blur', '.inputpassword', function(){
		validateEmail();
	});
	
	validateEmail(true);
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
		var agegroup 		 = $('body').find('#agegroup').val();
		var maritalstatus 	 = $('body').find('#maritalstatus').val();
		var employmentstatus = $('body').find('#employmentstatus').val();
		var skintype		 = $('body').find('#skintype').val();
		var allergyskincare	 = $('body').find('#allergyskincare').val();
		var skincarebrand	 = $('body').find('#skincarebrand').val();
		var otherskinbrand	 = $('body').find('.other-skin-brand').val();
		var brandawareness	 = $('body').find('#brandawareness').val();
		var tncCheck         = $('body').find('#tnccheckbox').is(':checked');
		var mobileValidate 	 = validateMobileNo();
		var postcodeValidate = validatePostcode();
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
		
		$('body').find('.childname').removeClass('is-invalid');
		$('body').find('.childname').closest('div').find(errorSelector).html("");
		
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
		
		$('body').find('#agegroup').removeClass('is-invalid');
		$('body').find('#agegroup').closest('div').find(errorSelector).html("");
		
		$('body').find('#maritalstatus').removeClass('is-invalid');
		$('body').find('#maritalstatus').closest('div').find(errorSelector).html("");
		
		$('body').find('#employmentstatus').removeClass('is-invalid');
		$('body').find('#employmentstatus').closest('div').find(errorSelector).html("");	
		
		$('body').find('#skintype').removeClass('is-invalid');
		$('body').find('#skintype').closest('div').find(errorSelector).html("");
		
		$('body').find('#allergyskincare').removeClass('is-invalid');
		$('body').find('#allergyskincare').closest('div').find(errorSelector).html("");
		
		$('body').find('#skincarebrand').removeClass('is-invalid');
		$('body').find('#skincarebrand').closest('div').find(errorSelector).html("");
		
		$('body').find('#brandawareness').removeClass('is-invalid');
		$('body').find('#brandawareness').closest('div').find(errorSelector).html("");
		
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
		
		if(agegroup == '' || agegroup == undefined || agegroup == null)
		{
			$('body').find('#agegroup').addClass('is-invalid');
			$('body').find('#agegroup').closest('div').find(errorSelector).html("Please select age of group");
			flagCheck = false;
		}
		
		if(maritalstatus == '' || maritalstatus == undefined || maritalstatus == null)
		{
			$('body').find('#maritalstatus').addClass('is-invalid');
			$('body').find('#maritalstatus').closest('div').find(errorSelector).html("Please select marital status");
			flagCheck = false;
		}
		
		if(employmentstatus == '' || employmentstatus == undefined || employmentstatus == null)
		{
			$('body').find('#employmentstatus').addClass('is-invalid');
			$('body').find('#employmentstatus').closest('div').find(errorSelector).html("Please select employment status");
			flagCheck = false;
		}
		
		if(skintype == '' || skintype == undefined || skintype == null)
		{
			$('body').find('#skintype').addClass('is-invalid');
			$('body').find('#skintype').closest('div').find(errorSelector).html("Please select skin type");
			flagCheck = false;
		}
		
		if(allergyskincare == '' || allergyskincare == undefined || allergyskincare == null)
		{
			$('body').find('#allergyskincare').addClass('is-invalid');
			$('body').find('#allergyskincare').closest('div').find(errorSelector).html("Please select an answer yes or no");
			flagCheck = false;
		}
		
		console.log(skincarebrand + " otherskinbrand" + otherskinbrand);
		if(skincarebrand == '' || skincarebrand == undefined || skincarebrand == null)
		{
			$('body').find('#skincarebrand').addClass('is-invalid');
			$('body').find('#skincarebrand').closest('div').find(errorSelector).html("Please select skincare brand currently use");
			flagCheck = false;
		}
		else if(skincarebrand == 'Other brands' && otherskinbrand == '')
		{
			console.log(skincarebrand);
			$('body').find('#skincarebrand').addClass('is-invalid');
			$('body').find('#skincarebrand').closest('div').find(errorSelector).html("Please insert skincare brand currently use");
			flagCheck = false;
		}
		
		if(brandawareness == '' || brandawareness == undefined || brandawareness == null)
		{
			$('body').find('#brandawareness').addClass('is-invalid');
			$('body').find('#brandawareness').closest('div').find(errorSelector).html("Please select an answer");
			flagCheck = false;
		}

		if(address == '' || address == undefined || address == null)
		{
			$('body').find('.input-addr').addClass('is-invalid');
			$('body').find('.input-addr').closest('div').find(errorSelector).html("Please insert address 1");
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
	
	$('body').on('change', '#skincarebrand', function(){
		var brandname = $(this).val();
		if(brandname == 'Other brands')
		{
			$('body').find('.other-skin-brand').val('');
			$('body').find('.other-skin-brand').attr('required', 'required');
			$('body').find('.row-other-skin-brand').show('fast');
		}
		else
		{
			$('body').find('.other-skin-brand').val('');
			$('body').find('.other-skin-brand').attr('required', '');
			$('body').find('.row-other-skin-brand').hide('fast');
		}
	});
});
       
      // ]]>
   </script>
</p>