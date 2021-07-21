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
      	
      	.btn-submit-display{
      		width: 55%;
      		padding-top: 10px;
      		padding-bottom: 10px;
      		font-size: 18px;
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
   <div class="row mb-2">
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
			<img class="background" id="background" src="https://via.placeholder.com/1170x481.png?text=Banner+holder+1170+by+480" width="100%" />
		</div>
		<div class="col-md-12 px-2 text-center">
			<h2>Dumex Dugro- Untuk Perkembangan 360⁰</h2>
		</div>
   </div>
   <div class="row mb-2">
      <div class="col-md-12 px-2">
         <label for="email" class="form-label required">Emel</label>
         <div class="input-group">
			<input type="text" class="form-control input-email" aria-label="email" aria-describedby="basic-addon1" name="newEmail" value="{{predefine-email}}" required="" /> 
			<input type="hidden" class="form-control login-input-email" value="{{predefine-email}}" /> 
			<input type="hidden" class="form-control user-id" value="{{predefine-user}}" />
			<input type="hidden" class="form-control status-input-email" /> 
			<input type="hidden" class="form-control status-code-email" /> 
			<span class="input-group-text span-email-input input-group-icon-hide" id="basic-addon1"></span></div>
			<small class="error-msg"></small>
      </div>
   </div>
   <div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="firstname" class="form-label required">Nama pertama</label> <input type="text" class="form-control fname" id="firstname" name="newFirstName" required="" /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="lastname" class="form-label required">Nama keluarga</label> 
			<input type="text" class="form-control lname" id="lastname" name="newLastName" /> 
			<small class="error-msg"></small>
		</div>
   </div>
   <div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="mobileno" class="form-label required">No. telefon</label> 
			<input type="text" class="form-control mobile-no" id="mobileno" name="subscriber_question1" required="" /> 
			<small class="error-msg"></small>
		</div>
   </div>
   <div class="row mb-2 row-password" style="display: {{row-password-display}};">
		<div class="col-md-12 px-2">
			<p class="lead my-1 new-account-text" style="font-weight: 600;">
				<i class="fas fa-info-circle text-info"></i> 
				kata laluan adalah untuk sistem motherhood membuat akauan anda secara automatik.
			</p>
		</div>
	</div>
   <div class="row mb-2 row-password" style="display: {{row-password-display}};">
		<div class="col-md-6 px-2">
			<label for="newpassword" class="form-label required">Kata laluan</label> 
			<input type="password" class="form-control inputpassword" id="newpassword" name="newPassword" /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2 div-confirm-password">
			<label for="confirmpassword" class="form-label required">Pengesahan kata laluan</label>
			<input type="password" class="form-control inputconfirmpassword" id="confirmpassword" name="confirmPassword" /> 
		<small class="error-msg"></small></div>
   </div>
	<div class="row mb-2">
		<div class="col-md-12 px-2">
			<p class="lead my-1" style="font-weight: 600;"><i class="fas fa-info-circle text-info"></i> Kanak-kanak berumur 1 tahun - 3 tahun</p>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="childname" class="form-label required">Nama si manja</label> 
			<input type="text" class="form-control childname" id="childname" name="subscriber_question8" required="" /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="childdob" class="form-label required">Tarikh lahir si manja</label> 
			<input type="date" class="form-control childodb" id="childdob" name="subscriber_question2" required="" /> 
			<small class="error-msg"></small>
		</div>
	</div>
    <div class="row mb-2">
        <div class="col-md-6 px-2">
         	<label for="current-milkbrand" class="form-label required">Jenama susu semasa</label>
         	<select class="form-select current-milkbrand" name="subscriber_question9" id="current-milkbrand" aria-label="" style="height:37px;" required>
         		<option value="">Sila pilih jenama susu semasa</option>
         		{{option-listmilk}}
         	</select>
         	<small class="error-msg"></small>
        </div>
		<div class="col-md-6 px-2 div-use-milk">
         	<label for="current-milkbrand-use" class="form-label required current-milkbrand-use">Berapa lama anda telah menggunakan jenama susu ini?</label>
			<div class="input-group mb-3">
				<input type="number" class="form-control input-use-years" placeholder="tahun" aria-label="tahun" name="subscriber_question14">
				<span class="input-group-text">Tahun</span>
				<input type="number" class="form-control input-use-month" placeholder="bulan" aria-label="bulan" name="subscriber_question15">
				<span class="input-group-text">Bulan</span>
			</div>
         	<small class="error-msg"></small>
        </div>
   </div>
   
   
   <div class="row mb-2">
		<div class="col-md-12 px-2">
			<label for="address" class="form-label required">Alamat 1</label> 
			<input type="text" class="form-control input-addr" id="address" name="subscriber_question3" required="" placeholder="Nombor rumah &amp; Jalan" /> 
			<small class="error-msg"></small>
		</div>
   </div>
   <div class="row mb-2">
      <div class="col-md-12 px-2"><label for="address2" class="form-label required">Alamat 2</label> <input type="text" class="form-control input-addr2" id="address2" name="subscriber_question11" placeholder="Taman &amp; Seksyen" required="" /> <small class="error-msg"></small></div>
   </div>
   <div class="row mb-2">
      <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
		<label for="postcode-address" class="form-label required">Poskod</label> 
			<input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question4" required="" /> 
			<small class="error-msg"></small>
		</div>
		<div class="col-md-4 px-2 mb-3 mb-md-1"><label for="city-address" class="form-label required">Bandar</label>
			<input type="text" class="form-control addr-city" id="city-address" name="subscriber_question5" required="" /> 
			<small class="error-msg"></small>
		</div>
      <div class="col-md-4 px-2 mb-3 mb-md-1">
         <label for="state-address" class="form-label required">Negeri</label>
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
      <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
		<label for="postcode-country" class="form-label required">Negara</label> 
		<input type="text" class="form-control" id="postcode-country" name="subscriber_question13" required="" readonly="readonly" value="Malaysia" style="background-color: white;" /> <small class="error-msg"></small>
		</div>
   </div>
   <div class="row my-4">
      <div class="col-md-12 px-2">
        <div class="form-check"><input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question12" required="" /> 
			<label class="form-check-label noUniform px-3" for="tnccheckbox">
			Dengan memberikan maklumat peribadi saya, saya telah menyatakan and menjamin bahawa saya bersetuju dengan Terma dan Syarat serta mengizinkan Danone Specialized Nutrition (Malaysia) Sdn Bhd memproses maklumat peribadi saya mengikut cara yang dinyatakan dalam Polisi Privasi.
			<br>
			Dengan ini saya mengizin dan membenarkan untuk menerima maklumat Dumex Dugro melalui surat / sms / telefon / e-mel dan sampel percuma*. Data yang dikumpulkan juga dapat digunakan untuk tujuan perkhidmatan pelanggan.
			</label>
		</div>
      </div>
   </div>
   <div class="row my-4">
      <div class="col-md-12 px-2 text-center"><button type="button" class="btn btn-primary btn-submit-display"> Hantar </button></div>
   </div>
   <div class="row my-4">
      <div class="col-md-12 px-2" style="color: black;">
         <h6>Terms &amp; condition</h6>
         <ol style="list-style: decimal; padding-left: 20px;" start="1">
            <li class="text-left tnc_li">Penebusan ini hanya sah untuk ibu bapa yang mempunyai anak berumur 1 - 3 tahun sahaja </li>
            <li class="text-left tnc_li">Hanya pendaftaran dengan alamat pos yang LENGKAP akan diterima</li>
            <li class="text-left tnc_li">Borang pendaftaran yang tidak lengkap tidak akan diterima</li>
            <li class="text-left tnc_li">Penebusan mungkin berbeza tertakluk kepada ketersediaan  </li>
            <li class="text-left tnc_li">Setiap akaun berdaftar / isi rumah berhak untuk menerima hanya SATU (1) penebusan</li>
            <li class="text-left tnc_li">Dengan mengemukakan permohonan ini, anda telah menyatakan keizinan untuk kami mengumpulkan, menggunakan, dan / atau memproses data peribadi anda</li>
         </ol>
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
         
      	var validatePostcode = function(_this){
      		var postcode = postcodeSelector.val();
      		
      		postcodeSelector.removeClass('is-invalid');
      		postcodeSelector.closest('.div-postcode').find('.error-msg').html('');
      		if(postcode == '' || postcode == undefined || postcode == null)
      		{
      			postcodeSelector.addClass('is-invalid');
      			postcodeSelector.closest('.div-postcode').find('.error-msg').html('Sila masukkan poskod');
      			
      			return false;
      		}
      		else if(isNaN(postcode))
      		{
      			postcodeSelector.addClass('is-invalid');
      			postcodeSelector.closest('.div-postcode').find('.error-msg').html('Poskod adalah dalam format nombor sahaja');
      			
      			return false;
      		}
      		else if(postcode.length != 5)
      		{
      			postcodeSelector.addClass('is-invalid');
      			postcodeSelector.closest('.div-postcode').find('.error-msg').html('Poskod hanya mempunyai 5 digit sahaja');
      			
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
      							msg = "Kesalahan format telefon number. Format betul(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
      							mobileSelector.closest('div').find(errorSelector).html(msg);
      							flagCheck = false;
      						}
      					}
      					else{
      						if(phoneLength < 10 || phoneLength > 10){
      							mobileSelector.addClass('is-invalid');
      							msg = "Kesalahan format telefon number. Format betul(XXXXXXXXXXX), e.g. 0123334444 / 0198887777.";
      							mobileSelector.closest('div').find(errorSelector).html(msg);
      							flagCheck = false;
      						}
      					}  
      				}
      				else
      				{
      					mobileSelector.addClass('is-invalid');
      					msg = "Salah nombor awalan untuk nombor telefon. Nombor awalan betul (010,011,012,013,014,015,016,017,018,019).";
      					mobileSelector.closest('div').find(errorSelector).html(msg);
      					flagCheck = false;
      				}
      			}
      			else if(firstNo == '5'){
      				if(phoneLength < 9 || phoneLength > 9){
      					mobileSelector.addClass('is-invalid');
      					msg = "Format nombor telefon singapore salah. Format(5 XXXX XXXX), e.g. 5 66667777";
      					mobileSelector.closest('div').find(errorSelector).html(msg);
      					flagCheck = false;
      				}
      			}
      		}
      		else
      		{
      			mobileSelector.addClass('is-invalid');
      			msg = "Sila masukkan nombor telefon";
      			mobileSelector.closest('div').find(errorSelector).html(msg);
      			flagCheck = false;
      		}
			
			var checkMobile = verifyMobileRegister();
			var checkStatusMobile = checkMobile['status'];
			var checkStatusMsg    = checkMobile['msg'];
			
			if(checkStatusMobile == false)
			{
				mobileSelector.addClass('is-invalid');
      			msg = "Anda telah mendaftar menggunakan nombor ni.";
				mobileSelector.closest('div').find(errorSelector).html(msg);
				flagCheck = false;
			}
			
      		return flagCheck;
      	}
		
		
		var verifyMobileRegister = function(){
			var mobileno  = mobileSelector.val();
			var eventID   = 107;
			var firstNo   = mobileno.substring(0,1);
			firstNo 	  = parseInt(firstNo);
			var datareturn = null;
			
			if(firstNo == 0)
			{
				mobileno = "6" + mobileno;
			}
			
			$.ajax({
				url		 : '../modules/enlineamixmod/enlineamixmod-checkmobileno.php', 
				data	 :{'mobileno': mobileno, 'eventid' : eventID},
				dataType :'json',
				method 	 : 'post',
				async	 : false,
				success	 : function(result){
					datareturn =  result;
				}
			});
			
			return datareturn;
		}
      	
      	var validateChildDob = function(){
      		var childob = childDobselector.val();
      		currentDate = new Date();
      		currentYear = currentDate.getFullYear();
      		childDobselector.removeClass('is-invalid');
      		childDobselector.closest('div').find(errorSelector).html("");
      		
      		if(childob == '' || childob == undefined || childob == null)
      		{
      			childDobselector.addClass('is-invalid');
      			msg = "Sila masukkan tarikh lahir si manja";
      			childDobselector.closest('div').find(errorSelector).html(msg);
      			
      			return false;
      		}
      		else
      		{
      			var arrDate = childob.split("/")
      			if(typeof arrDate[2] !== undefined && arrDate[2] !== null)
      			{
      				var dobYear = parseInt(arrDate[2]);
      				var age 	= currentYear - dobYear;
      				
      				if(age < 1 || age > 3)
      				{
      					childDobselector.addClass('is-invalid');
      					msg = "Sampel percuma ini hanya layak untuk ibubapa yang mempunyai anak dari usia 1-3 tahun sahaja.";
      					childDobselector.closest('div').find(errorSelector).html(msg);
      					
      					return false;
      				}
      			}
      		}
      		
      		return true;
      	}
      	
      	var validateEmail = function(autorun){
      		var eventID  = 107;
      		var email 	 = emailSelector.val();
      		var password = passSelector.val();
      		
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
      							emailSelector.closest('.row').find(errorSelector).html("Emel anda dijumpai didalam sistem motherhood.");
      							
      							/** if customer already login we hide password input **/
      							if(loginemail != '' && loginemail == email && userid > 0)
      							{
      								passSelector.closest('.row').find(errorSelector).html("");
      								$('body').find('.row-password').hide('fast');
      								$('body').find('.status-input-email').val(true);
      							}
      							else
      							{
      								passSelector.closest('.row').find(errorSelector).html("Sila masukkan kata laluan");
      								emailSelector.addClass('is-invalid');
      								passSelector.addClass('is-invalid');
      							}
      							
      							$('body').find('.div-confirm-password').hide('fast');
      							
      						}
      						else if(result.status_code == 'exist_customer_motherhood_password_invalid')
      						{
      							emailSelector.closest('.row').find(errorSelector).html("Emel anda dijumpai didalam sistem motherhood.");
      							passSelector.closest('.row').find(errorSelector).html(result.msg);
      							emailSelector.addClass('is-invalid');
      							passSelector.addClass('is-invalid');
      							$('body').find('.div-confirm-password').hide('fast');
      							$('body').find('.row-password').hide('fast');
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
      							$('body').find('.div-confirm-password').show('fast');
      						}
      						else if(result.status_code == 'exist_customer_motherhood_valid')
      						{
      							$('body').find('.div-confirm-password').hide('fast');
								$('body').find('.row-password').hide('fast');
								
								if(result.data.userid != '' && result.data.userid != undefined && result.data.userid != null)
      							{
      								$('body').find('.user-id').val(result.data.userid);
      							}
								
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
      							
      							if(result.data.milkbrand != '' && result.data.milkbrand != undefined && result.data.milkbrand != null)
      							{
      								$('body').find('.current-milkbrand').val(result.data.milkbrand);
      							}
      							
      							if(result.data.fulladdress != '' && result.data.fulladdress != undefined && result.data.fulladdress != null)
      							{
      								$('body').find('.input-addr').val(result.data.fulladdress);
      							}
      							
      							if(result.data.fulladdress2 != '' && result.data.fulladdress2 != undefined && result.data.fulladdress2 != null)
      							{
      								$('body').find('.input-addr2').val(result.data.fulladdress2);
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
								
								if(result.data.year_used != '' && result.data.year_used != undefined && result.data.year_used != null)
      							{
      								$('body').find('.input-use-years').val(result.data.year_used);
      							}
								
								if(result.data.year_used != '' && result.data.month_used != undefined && result.data.month_used != null)
      							{
      								$('body').find('.input-use-month').val(result.data.month_used);
      							}
								
								if(result.data.child_name != '' && result.data.child_name != undefined && result.data.child_name != null)
      							{
      								$('body').find('.childname').val(result.data.child_name);
      							}
								
								if(result.data.child_dob != '' && result.data.child_dob != undefined && result.data.child_dob != null)
      							{
      								$('body').find('.childodb').val(result.data.child_dob);
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
		
		var validateMonth = function(){
			var month   = $('body').find('.input-use-month').val();
			var year   = $('body').find('.input-use-years').val();
			var milkopt = $('body').find('.current-milkbrand').val();
			if(month == '')
				month = 0;
			
			if(year == '')
				year = 0;
			
			month = parseInt(month);
			year = parseInt(year);
			
			if(milkopt != 'Others' && milkopt != 'Not consuming any milk' && milkopt != '')
			{
				if(month <= 0 && year <= 0)
				{
					$('body').find('.input-use-month').closest('.div-use-milk').find('.error-msg').html('Sila masukan nilai tahun atau bulan');
					return false;
				}
				
				if(month > 12)
				{
					$('body').find('.input-use-month').closest('.div-use-milk').find('.error-msg').html('Nilai bulan tidak boleh melebihi 12');
					return false;
				}
				else
				{
					$('body').find('.input-use-month').closest('.div-use-milk').find('.error-msg').html('');
					return true;
				}
			}
			
			return true;
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
			
			$('body').on('blur', '.input-use-month, .input-use-years', function(){
				validateMonth();
			})
      		
      		$('body').on('blur', '#childdob', function(){
      			validateChildDob();
      		});
      		
      		$('body').on('blur', '.input-email', function(){
      			validateEmail();
      		});
      		
      		$('body').on('blur', '.inputpassword', function(){
      			validateEmail();
      		});
			
			$('body').on('change', '.current-milkbrand', function(){
				milkbrand = $(this).val();
				if(milkbrand == 'Others' || milkbrand == 'Not consuming any milk')
				{
					$('body').find('.div-use-milk').hide('fast');
				}
				else
				{
					$('body').find('.div-use-milk').show('fast');
				}
			});
      		
      		validateEmail(true);
      		$('body').on('click', '.btn-submit-display', function(){
      			$(this).html('Submit');
      			validateEmail();
				validateMonth();
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
      			
      			if(fname == '' || fname == undefined || fname == null)
      			{
      				fnameSelector.addClass('is-invalid');
      				fnameSelector.closest('div').find(errorSelector).html("Sila masukkan nama pertama");
      				flagCheck = false;
      			}
      			
      			if(lname == '' || lname == undefined || lname == null)
      			{
      				lnameSelector.addClass('is-invalid');
      				lnameSelector.closest('div').find(errorSelector).html("Sila masukkan nama keluarga");
      				flagCheck = false;
      			}
				
				if(childname == '' || childname == undefined || childname == null)
      			{
      				$('body').find('.childname').addClass('is-invalid');
      				$('body').find('.childname').closest('div').find(errorSelector).html("Sila masukkan nama si manja");
      				flagCheck = false;
      			}
      			
      			if(address == '' || address == undefined || address == null)
      			{
      				$('body').find('.input-addr').addClass('is-invalid');
      				$('body').find('.input-addr').closest('div').find(errorSelector).html("Sila masukkan alamat 1");
      				flagCheck = false;
      			}
      			
      			if(address2 == '' || address2 == undefined || address2 == null)
      			{
      				$('body').find('.input-addr2').addClass('is-invalid');
      				$('body').find('.input-addr2').closest('div').find(errorSelector).html("Sila masukkan alamat 2");
      				flagCheck = false;
      			}
      			
      			if(city == '' || city == undefined || city == null)
      			{
      				$('body').find('.addr-city').addClass('is-invalid');
      				$('body').find('.addr-city').closest('div').find(errorSelector).html("Sila masukkan bandar");
      				flagCheck = false;
      			}
      			
      			if(state == '' || state == undefined || state == null)
      			{
      				$('body').find('.addr-state').addClass('is-invalid');
      				$('body').find('.addr-state').closest('div').find(errorSelector).html("Sila pilih negeri");
      				flagCheck = false;
      			}
      			
				console.log('loginemmail = ' + loginemail + " inputEmail = " + inputEmail + " userid = " + userid);
      			if(loginemail == inputEmail && userid > 0)
      			{
      				// console.log('loginemmail = ' + loginemail + " inputEmail = " + inputEmail + " userid = " + userid);
      			}
      			else
      			{
					if( inputEmail != '' && userid > 0)
					{
						console.log('input email tak kosong' + userid);
					}
					else
					{
						if(password == '' || password == undefined || password == null)
						{
							$('body').find('.inputpassword').addClass('is-invalid');
							$('body').find('.inputpassword').closest('div').find(errorSelector).html("Sila masukkan kata laluan");
							flagCheck = false;
						}
						else if(password.length < 6){
							$('body').find('.inputpassword').addClass('is-invalid');
							$('body').find('.inputpassword').closest('div').find(errorSelector).html("Minimum panjang kata laluan adalah 6");
							flagCheck = false;
						}
					}
      			}
      			
      			if(emailCodeStatus == 'new_customer_event' && password != confirmPassword)
      			{
      				$('body').find('.inputconfirmpassword').addClass('is-invalid');
      				$('body').find('.inputconfirmpassword').closest('div').find(errorSelector).html("Kata laluan dan pengesahan kata laluan tidak sama");
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
      			
      			if(dobValidate == false)
      			{
      				flagCheck = dobValidate;
      			}
      			
      			if(tncCheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Error',
      					text: 'Sila tanda kotak jika anda bersetuju dengan syarat dan terma yang dinyatakan',
      				});
      				
      				return false;
      			}
      			
      			if(flagCheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Oops...',
      					text: 'Maklumat wajib diisi mempunyai kesalahan',
      				});
      				
      				return false;
      			}
      			else
      			{
      				$(this).html('<i class="fas fa-spinner fa-spin"></i> Proses...')
      				$('body').find('#btnsubmit').trigger('click');
      			}
      		});
      	});
       
      // ]]>
   </script>
</p>