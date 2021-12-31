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
	  		<img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Nov/Cambridge-English-For-Life/mainbanner.png" width="100%" />
		</div>
   </div>
   <div style="background-color: #f7f7f7; padding-top: 40px;">
      <div class="row mb-2 px-2">
         <div class="col-md-12">
			<p style="text-align: justify;font-size: 16px; font-weight: 600; color: black; line-height: 20px;">
				English is more than a language. It is the key that opens doors and minds. It is the global passport that crosses cultures and continents and connects people around the world. Cambridge English For Life, the country’s largest network of award-winning English language centres, has taught more than 100,000 children and adults to read, write, listen and speak confidently in UK-standard English for over 20 years. 
			</p>
			<p style="text-align: justify;font-size: 16px; font-weight: 600; color: black; line-height: 20px;">
				Register your child for our 2022 Intake to help them open the doors in life. 
			</p>
         </div>
      </div>
	  <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-12 px-2">
            <label for="email" class="form-label required">Email</label>
            <div class="input-group"><input type="text" class="form-control input-email" aria-label="email" aria-describedby="basic-addon1" name="newEmail" value="{{predefine-email}}" required="" /> <input type="hidden" class="form-control login-input-email" value="{{predefine-email}}" /> 
			<input type="hidden" class="form-control user-id" value="{{predefine-user}}" /> 
			<input type="hidden" class="form-control status-input-email" />
			 <input type="hidden" class="form-control status-code-email" /> 
			 <span class="input-group-text span-email-input input-group-icon-hide" id="basic-addon1"></span>
			 </div>
            <small class="error-msg error-email-msg"></small>
         </div>
      </div>
      <div class="row mb-2 px-md-5 mx-md-5">
        <div class="col-md-6 px-2">
		 	<label for="firstname" class="form-label required">First name (as per IC)</label> 
			 <input type="text" class="form-control fname" id="firstname" name="newFirstName" required="" /> 
			 <small class="error-msg"></small>
		</div>
        <div class="col-md-6 px-2">
		 	<label for="lastname" class="form-label required">Last name (as per IC)</label> 
			 <input type="text" class="form-control lname" id="lastname" name="newLastName" /> 
			 <small class="error-msg"></small>
		</div>
      </div> 
 
	  <div class="row mb-2 px-md-5 mx-md-5">
	 	 <div class="col-md-6 px-2">
		 		<label for="mobileno" class="form-label required">Mobile phone number (e.g. 0127880912)</label> 
			 	<input type="text" class="form-control mobile-no" id="mobileno" name="subscriber_question1" required="" /> 
			 	<small class="error-msg"></small>
			</div>
         <div class="col-md-6 px-2">
		 	<label for="firstname" class="form-label required">Preferred programme</label> 
			<select class="form-select addr-state" name="subscriber_question2" id="state-address" aria-label="" style="height: 37px;" required="">
               <option value="">Please select a programme</option>
               <option value="Preschoolers (4 – 6 years old)">Preschoolers (4 – 6 years old)</option>
               <option value="Primary Students (7 – 12 years old)">Primary Students (7 – 12 years old)</option>
               <option value="Secondary to University Students (13 and above)">Secondary to University Students (13 and above)</option>
               <option value="Adults (18 and above)">Adults (18 and above)</option>
            </select>
			<small class="error-msg"></small>
		</div>
      </div>
      <div class="row mb-2 px-md-5 mx-md-5">
         <div class="col-md-6 px-2 mb-3 mb-md-1">
            <label for="state-address" class="form-label required">State</label>
            <select class="form-select addr-state" name="subscriber_question3" id="state-address" aria-label="" style="height: 37px;" required="">
               <option value="">Please select a state</option>
               <option value="Johor" data-state="johor">Johor</option>
               <option value="Kelantan" data-state="kelantan">Kelantan</option>
               <option value="Kuala Lumpur" data-state="kualalumpur">Kuala Lumpur</option>
               <option value="Melaka" data-state="melaka">Melaka</option>
               <option value="Negeri Sembilan" data-state="n9">Negeri Sembilan</option>
               <option value="Perak" data-state="perak">Perak</option>
               <option value="Pulau Pinang" data-state="penang">Pulau Pinang</option>
               <option value="Putrajaya" data-state="putrajaya">Putrajaya</option>
               <option value="Sabah" data-state="sabah">Sabah</option>
               <option value="Sarawak" data-state="sarawak">Sarawak</option>
               <option value="Selangor" data-state="selangor">Selangor</option>
            </select>
            <small class="error-msg"></small>
         </div> 
		 <div class="col-md-6 px-2 mb-3 mb-md-1">
            <label for="state-address" class="form-label required">Preferred centre</label>
			<input type="hidden" class="form-control" id="state-center-selected" name="subscriber_question4" /> 
			<select class="form-select" id="nocenterselected" aria-label="" style="height: 37px;  display:block;">
			   <option value="">Please select a centre</option>
            </select>
            <select class="form-select bystatecenter" id="center-selangor" aria-label="" style="height: 37px;  display:none;">
			   <option value="">Please select a centre</option>
               <option value="Ampang Utama">Ampang Utama</option>
               <option value="Anggun City">Anggun City</option>
               <option value="Bandar Ambang Botanic">Bandar Ambang Botanic</option>
               <option value="Bandar Baru Ampang">Bandar Baru Ampang</option>
               <option value="Bandar Baru Klang">Bandar Baru Klang</option>
               <option value="Bandar Baru Rawang">Bandar Baru Rawang</option>
               <option value="Bandar Kinrara">Bandar Kinrara</option>
			   <option value="Bandar Mahkota Cheras">Bandar Mahkota Cheras</option>
               <option value="Bandar Parklands">Bandar Parklands</option>
               <option value="Bandar Puteri Puchong">Bandar Puteri Puchong</option>
               <option value="Bandar Rimbayu">Bandar Rimbayu</option>
               <option value="Banting">Banting</option>
               <option value="Bukit Serdang">Bukit Serdang</option>
               <option value="Cheras Selatan">Cheras Selatan</option>
               <option value="Cyberjaya">Cyberjaya</option>
               <option value="Damansara Jaya">Damansara Jaya</option>
               <option value="Kajang Metro Avenue">Kajang Metro Avenue</option>
               <option value="Kelana Jaya">Kelana Jaya</option>
               <option value="Kota Damansara">Kota Damansara</option>
               <option value="Kota Kemuning">Kota Kemuning</option>
               <option value="Puncak Jalil">Puncak Jalil</option>
               <option value="Pusat Bandar Puchong Utama">Pusat Bandar Puchong Utama</option>
               <option value="Putra Heights">Putra Heights</option>
               <option value="Semenyih">Semenyih</option>
               <option value="Seri Kembangan">Seri Kembangan</option>
               <option value="Setia Alam">Setia Alam</option>
               <option value="Shah Alam Seksyen 7">Shah Alam Seksyen 7</option>
               <option value="SS 19">SS 19</option>
               <option value="Subang Perdana">Subang Perdana</option>
               <option value="Sungai Buloh">Sungai Buloh</option>
			   <option value="Taman Bukit Segar">Taman Bukit Segar</option>
               <option value="Taman Serdang Raya">Taman Serdang Raya</option>
               <option value="USJ 21">USJ 21</option>
            </select>
			<select class="form-select bystatecenter" id="center-sarawak" aria-label="" style="height: 37px;  display:none;">
               <option value="">Please select a centre</option>
               <option value="Bintulu">Bintulu</option>
               <option value="Kuching">Kuching</option>
            </select>
			<select class="form-select bystatecenter" id="center-sabah" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
               <option value="Kota Kinabalu">Kota Kinabalu</option>
            </select>
			<select class="form-select bystatecenter" id="center-putrajaya" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
               <option value="Putrajaya">Putrajaya</option>
            </select>
			<select class="form-select bystatecenter" id="center-penang" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
               <option value="Arena Curve">Arena Curve</option>
               <option value="Island Glades">Island Glades</option>
               <option value="Raja Uda Butterworth">Raja Uda Butterworth</option>
            </select>
			<select class="form-select bystatecenter" id="center-perak" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
               <option value="Ipoh Garden">Ipoh Garden</option>
               <option value="Taiping">Taiping</option>
            </select>
			<select class="form-select bystatecenter" id="center-n9" aria-label="" style="height: 37px;  display:none;"">
				<option value="">Please select a centre</option>
               <option value="Betaria">Betaria</option>
               <option value="Port Dickson">Port Dickson</option>
               <option value="Putra Nilai">Putra Nilai</option>
               <option value="Rasah Prima">Rasah Prima</option>
               <option value="Seremban 2">Seremban 2</option>
            </select>
			<select class="form-select bystatecenter" id="center-melaka" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
                <option value="Putra Sentosa">Putra Sentosa</option>
            </select>
			<select class="form-select bystatecenter" id="center-kelantan" aria-label="" style="height: 37px;  display:none;">
				<option value="">Please select a centre</option>
                <option value="Kota Bharu">Kota Bharu</option>
            </select>
			<select class="form-select bystatecenter" id="center-johor" aria-label="" style="height: 37px;  display:none;" >
				<option value="">Please select a centre</option>
                <option value="Batu Pahat">Batu Pahat</option>
                <option value="Johor Jaya">Johor Jaya</option>
                <option value="Muar">Muar</option>
                <option value="Nusa Bestari">Nusa Bestari</option>
            </select>
			<select class="form-select bystatecenter" id="center-kualalumpur" aria-label="" style="height: 37px; display:none;">
				<option value="">Please select a centre</option>
                <option value="Alam Damai">Alam Damai</option>
                <option value="Bandar Sri Damansara">Bandar Sri Damansara</option>
                <option value="Bukit Jalil">Bukit Jalil</option>
                <option value="Danau Desa">Danau Desa</option>
                <option value="Desa Petaling">Desa Petaling</option>
                <option value="Desa Sri Hartamas">Desa Sri Hartamas</option>
                <option value="Jalan Ipoh">Jalan Ipoh</option>
                <option value="Kepong">Kepong</option>
                <option value="Kuchai Lama">Kuchai Lama</option>
                <option value="Laman Rimbunan">Laman Rimbunan</option>
                <option value="Pandan Indah">Pandan Indah</option>
                <option value="Setapak">Setapak</option>
                <option value="Sri Petaling">Sri Petaling</option>	
                <option value="Taman Cheras">Taman Cheras</option>
            </select>
            <small class="error-msg"></small>
         </div>
      </div>
         <div class="row my-4 px-md-5 mx-md-5">
             <div class="col-md-12 px-2">
                 <div class="form-check">
                     <input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question5" required="" /> 
                     <label class="form-check-label noUniform px-3" for="tnccheckbox"> 
						 	By submitting this form, I hereby agree to the Terms and Conditions and consent to the collection and processing of my personal data by Cambridge English For Life in accordance with the Privacy Policy.
							I hereby consent to receive information by Cambridge English For Life via mail/sms/phone/email. Collected data can also be used for customer service purpose.
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
                  <li class="text-left tnc_li">Please ensure that all information provided is correct and up to date. Registration forms that are incomplete will not be accepted.</li>
                  <li class="text-left tnc_li">
				  Only applicants who successfully enrol for a Cambridge English For Life new course will be entitled to receive the full benefits: RM50 off tutorial fees, RM30 off course text, a free STEAM class worth RM150, a free online placement test and a chance to win a free 12-month subscription to the National Geographic e-magazine (12 winners only).
				  </li>
                  <li class="text-left tnc_li">
				 	 By submitting this application, you hereby consent to us collecting, using, and / or processing your personal data in accordance with our privacy policy.
				  </li>
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
		var errorSelector  	= $('body').find('.error-msg');
		var childDobselector = $('body').find('#childdob');
		var emailSelector	= $('body').find('.input-email');
		var passSelector		= $('body').find('.inputpassword');
		var fnameSelector	= $('body').find('.fname');
		var lnameSelector	= $('body').find('.lname');
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
		var eventID  = 148;
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

					emailSelector.closest('.row').find(errorSelector).html("");
					emailSelector.removeClass('is-invalid');
					if(result.status == true)
					{
						if(result.status_code == 'exist_customer_motherhood')
						{
							emailSelector.closest('.row').find(errorSelector).html("Kindly proceed to fill in the information below");
						}
						else if(result.status_code == 'exist_customer_event')
						{
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

							if(result.data.state != '' && result.data.state != undefined && result.data.state != null)
							{
								$('body').find('.addr-state').val(result.data.state);
							}
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
		
		$('body').on('change', '.addr-state', function(){
			var statename = $(this).find(':selected').attr('data-state');
			$('body').find('.bystatecenter').hide();
			$('body').find('#state-center-selected').val("")
			if(statename != '' && statename != undefined)
			{
				$('body').find('#nocenterselected').hide();
				$('body').find('#center-' + statename).show();
			}
			else
			{
				$('body').find('#nocenterselected').show();
				$('body').find('#center-' + statename).hide();
			}
		});
			
		$('body').on('change', '.bystatecenter', function(){
			var statecenter =$(this).find(':selected').val();
			
			if(statecenter != '' && statecenter != undefined)
			{
				$('body').find('#state-center-selected').val(statecenter);
			}
			else
			{
				$('body').find('#state-center-selected').val("");
			}
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
	});
       
       
       
       
      // ]]>
   </script>
</p>