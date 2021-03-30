<style>
	<!--
		.step1btn, .step1btn:hover, .step1btn:active, .step1btn:focus{
			width: 100%; 
			background: #16a6ae; 
			border: 1px solid rgba(0,0,0,.1); 
			padding: 20px; 
			font-size: 1.5em; 
			color: white;
			outline:unset;
		}
		
		.form-fair-label{
			color: #959595; 
			font-size:15px;
		}
	-->
</style>
<p>
	<script src="../../../themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
</p>
<div class="step1">
   <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Babyfair/March2021/coverbannermarchbabyfair.png" width="100%" />
				<h2 class="py-2">Which one are you now?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 px-2" style="padding-top: 10px;">
				<a href="#next" id="pregnant" value="pregnant" class="btn btn-primary step1btn">I'm Pregnant</a>
			</div>
			<div class="col-12 col-md-6 px-2" style="padding-top: 10px;">
				<a href="#next" id="babyOut" value="babyOut" class="btn btn-primary step1btn">I'm a Parent &amp; Others</a>
			</div>
			 <!--
				<div class="col-md-4" style="padding-top: 10px;">
				
				<a href="#" id="others" class="step1btn btn" value="others" style="width: 100%; background: #16a6ae; border: 1px solid rgba(0,0,0,.1); padding: 20px; font-size: 1.5em; color: white;"> Others</a> 
				
				 </div>
				 -->
		</div>
      <input type="hidden" name="subscriber_question2" id="subscriber_question2" />
   </div>
</div>
<div class="step2" style="display: none;">
   <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="col-md-4 col-md-offset-3 col-lg-6 col-lg-offset-3 col-lg-6 col-xs-12 col-sm-12" style="text-align: left;">
         <h1 style="color: #959595; font-size: 3em; font-weight: bold; margin-bottom: 5px; line-height: 1.2;">How do you know about us ?</h1>
         <h4 style="color: #959595; margin-top: 0; margin-bottom: 10px;">* You may choose more than 1</h4>
         <div class="col-md-12 col-lg-12" style="text-align: center; padding-top: 20px;">
            <div style="padding: 20px 20px 10px 30px; margin-top: 10px; border: 1px solid rgba(0,0,0,.1);">
				<input type="checkbox" class="subscriber_question33" style="padding-top: 10px;" value="fB,insta" /> Facebook,Instagram
			</div>
            <div style="padding: 20px 20px 10px 30px; margin-top: 10px; border: 1px solid rgba(0,0,0,.1);">
				<input type="checkbox" class="subscriber_question33" style="padding-top: 10px;" value="newsletter,mail" /> E-mail</div>
            <div style="padding: 20px 20px 10px 30px; margin-top: 10px; border: 1px solid rgba(0,0,0,.1);">
				<input type="checkbox" class="subscriber_question33" style="padding-top: 10px;" value="sms" /> sms</div>
            <div style="padding: 20px 20px 10px 30px; margin-top: 10px; border: 1px solid rgba(0,0,0,.1);">
				<input type="checkbox" class="subscriber_question33" style="padding-top: 10px;" value="banner,bunting" /> Roadside Banner,bunting</div>
            <div style="margin-top: 10px;">
			<button id="step2Check" style="margin-top: 10px; font-weight: bold; display: block; width: 100%; background: #16a6ae; border: 1px solid rgba(0,0,0,.1); padding: 20px; font-size: 1.3em; color: white;"> Submit </button> 
			<input type="hidden" id="subscriber_question3" name="subscriber_question3" /></div>
         </div>
      </div>
   </div>
</div>
<div class="step3" style="display: none;">
   <div class="row" style="padding-top: 10px; padding-bottom: 50px;">
      <div class="col-md-12 text-center">
         <h3 style="padding-top: 10px;"><span style="color: #959595;">Welcome Parents!<br /></span></h3>
      </div>
		<div class="col-md-12 mobile-style-large" align="left">
		<div class="row">
			<div class="col-md-12 px-2 mb-2">
				<label for="newEmail" class="form-label required mobile-style-normal form-fair-label">Email</label>
				<input type="email" class="form-control"id="newEmail" name="newEmail" required="required">
				<small id="errorSpan" style="color: red;"></small>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 px-2 mb-2">
				<label for="firstname" class="form-label required mobile-style-normal form-fair-label">First Name</label>
				<input id="newFirstName" name="newFirstName" type="text" class="form-control" required="required"/>
			</div>
			<div class="col-md-6 px-2 mb-2">
				<label for="newLastName" class="form-label required mobile-style-normal form-fair-label">Last Name</label>
				<input id="newLastName" name="newLastName" type="text" class="form-control" required="required"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 px-2 mb-2">
				<label for="subscriber_question13" class="form-label required mobile-style-normal form-fair-label">When is mommy's birthday?</label>
				<input id="subscriber_question13" name="subscriber_question13"  type="text" class="form-control"  required="required"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 px-2 mb-2">
				<label for="subscriber_question14" class="form-label required mobile-style-normal form-fair-label">What brand of milk does mommy like or is currently consuming?</label>
				<select id="subscriber_question14" class="form-select" name="subscriber_question14" required>
					<option disabled="disabled" selected="selected" value="">Choose one</option>
					<option value="a2 Nutrition for Mothers">a2 Nutrition for Mothers</option>
					<option value="Anmum Lacta">Anmum Lacta</option>
					<option value="Anmum Materna">Anmum Materna</option>
					<option value="Aptamom">Aptamom</option>
					<option value="Bellamy&rsquo;s Organic Pregnancy Formula">Bellamy&rsquo;s Organic Pregnancy Formula</option>
					<option value="Dumex Mamil&reg; Mama">Dumex Mamil&reg; Mama</option>
					<option value="Enfamama A+">Enfamama A+</option>
					<option value="Fresh Goat Milk">Fresh Goat Milk</option>
					<option value="Fresh Milk">Fresh Milk</option>
					<option value="Frisomum Gold">Frisomum Gold</option>
					<option value="MOMMA Evermom Non-GMO Soy">MOMMA Evermom Non-GMO Soy</option>
					<option value="MOMMA Pregolact">MOMMA Pregolact</option>
					<option value="Natrel Milk">Natrel Milk</option>
					<option value="NatureOne Dairy Pregnancy Formula">NatureOne Dairy Pregnancy Formula</option>
					<option value="Nestl&eacute; MOM">Nestl&eacute; MOM</option>
					<option value="Similac Mom">Similac Mom</option>
					<option value="Snow Maternity">Snow Maternity</option>
					<option value="Susu Efferty Ikhtiar Hamil">Susu Efferty Ikhtiar Hamil</option>
					<option value="WILDAN Mama Premium">WILDAN Mama Premium</option>
					<option value="Wyeth Promama">Wyeth Promama</option>
					<option value="Others">Others</option>
					<option value="Not consuming any milk">Not consuming any milk</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 px-2 mb-2">
				<label for="subscriber_question15" class="form-label required mobile-style-normal form-fair-label">What milk brand is your kid currently consuming?</label>
				<select id="subscriber_question15" name="subscriber_question15"  class="form-select" required>
					<option disabled="disabled" selected="selected" value="">Choose one</option>
                        <option value="4m">4m</option>
                        <option value="Abbott">Abbott</option>
                        <option value="Anmum">Anmum</option>
                        <option value="Appeton">Appeton</option>
                        <option value="AptaGro">AptaGro</option>
                        <option value="Aptamil">Aptamil</option>
                        <option value="Awarua">Awarua</option>
                        <option value="Baby Bio">Baby Bio</option>
                        <option value="Baby Steps">Baby Steps</option>
                        <option value="Bellamy's">Bellamy's</option>
                        <option value="Colostrum">Colostrum</option>
                        <option value="Dugro">Dugro</option>
                        <option value="Dumex">Dumex</option>
                        <option value="Dupro">Dupro</option>
                        <option value="Dutch Baby">Dutch Baby</option>
                        <option value="Enfagrow">Enfagrow</option>
                        <option value="Enfalac">Enfalac</option>
                        <option value="Enfamil">Enfamil</option>
                        <option value="Farmers">Farmers</option>
                        <option value="Fernleaf">Fernleaf</option>
                        <option value="Friso">Friso</option>
                        <option value="Frisolac">Frisolac</option>
                        <option value="G-Star">G-Star</option>
                        <option value="Glucerna">Glucerna</option>
                        <option value="Habib">Habib</option>
                        <option value="Isomil">Isomil</option>
                        <option value="Karihome">Karihome</option>
                        <option value="Lactogen">Lactogen</option>
                        <option value="Lactogrow">Lactogrow</option>
                        <option value="Lazz">Lazz</option>
                        <option value="Mamex">Mamex</option>
                        <option value="Mamil">Mamil</option>
                        <option value="Merry Nation">Merry Nation</option>
                        <option value="Miwako">Miwako</option>
                        <option value="Morinaga Milk">Morinaga Milk</option>
                        <option value="Nana">Nana</option>
                        <option value="Nankid">Nankid</option>
                        <option value="Nestle">Nestle</option>
                        <option value="Novalac">Novalac</option>
                        <option value="Pediasure">Pediasure</option>
                        <option value="S26">S26</option>
                        <option value="Similac">Similac</option>
                        <option value="Snow">Snow</option>
                        <option value="Suffy">Suffy</option>
                        <option value="Sustagen">Sustagen</option>
                        <option value="Wildan">Wildan</option>
                        <option value="Wyeth">Wyeth</option>
                        <option value="Others">Others</option>
                        <option value="Not consuming any milk">Not consuming any milk</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 px-2 mb-2">
				<label for="subscriber_question1" class="form-label required mobile-style-normal form-fair-label">Contact Number</label>
				<input  class="form-control" id="subscriber_question1" name="subscriber_question1" required="required" type="number" title="xxx xxxxx" placeholder="XXX XXXXXXX" onkeydown="javascript: return event.keyCode == 69 ? false : true" pattern=".{10,}">
				<small class="mobile-style-small" style="color: #959595;">*For singapore number,+5 for prefix (+65). e.g. +5 XXXX XXXX.</small><br/>
				<small style="color: red; display: none;" id="phoneNoError">Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777. <br></small>
				<small style="color: red; display: none;" id="phoneNoPrefixError">Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019). <br></small>
				<small style="color: red; display: none;" id="phoneNoErrorSg">Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777.<br></small>
			</div>
		</div>
		<div class="row" id="newUserSpan">
			<div class="col-md-6 px-2 mb-2">
				<label for="newPassword" class="form-label required mobile-style-normal form-fair-label">New Password</label>
				<input id="newPassword" name="newPassword" type="password" class="form-control"/>
				<small style="color: #959595;" class="mobile-style-small">(*More than 6 Characters )</small>
			</div>
			<div class="col-md-6 px-2 mb-2">
				<label for="confirmPassword" class="form-label required mobile-style-normal form-fair-label">Confirm Password</label>
				<input id="confirmPassword" name="confirmPassword" type="password" class="form-control" />
			</div>
		</div>
		<!--
		petrina request 28/3/2021.
		--->
		<div class="row">
			<div class="col-md-12 px-2 mb-2">
				<label for="subscriber_question7" class="form-label mobile-style-normal form-fair-label">Address (optional)</label>
				<input type="text" class="form-control" name="subscriber_question7" class="subscriber_question7">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 px-2 mb-2">
				<label for="subscriber_question8" class="form-label required mobile-style-normal form-fair-label">Postcode</label>
				<input type="text" class="form-control addr-postcode" name="subscriber_question8" id="subscriber_question8" required="required" onkeydown="javascript: return event.keyCode == 69 ? false : true">
			</div>
			<div class="col-md-4 px-2 mb-2">
				<label for="subscriber_question9" class="form-label required mobile-style-normal form-fair-label">City</label>
				<input type="text" class="form-control addr-city" type="text" name="subscriber_question9" id="subscriber_question9" required="required">
			</div>
			<div class="col-md-4 px-2 mb-2">
				<label for="subscriber_question10" class="form-label required mobile-style-normal form-fair-label">State</label>
				<select id="subscriber_question10" name="subscriber_question10"  class="form-select addr-state" required="required" style="height:37px;">
					 <option value="">State</option>
					  <option value="Johor">Johor</option>
					  <option value="Kedah" >Kedah</option>
					  <option value="Kelantan">Kelantan</option>
					  <option value="Kuala Lumpur">Kuala Lumpur</option>
					  <option value="Labuan">Labuan</option>
					  <option value="Melaka">Melaka</option>
					  <option value="Negeri Sembilan">Negeri Sembilan</option>
					  <option value="Pahang">Pahang</option>
					  <option value="Perak">Perak</option>
					  <option value="Perlis">Perlis</option>
					  <option value="Pulau Pinang">Pulau Pinang</option>
					  <option value="Putrajaya">Putrajaya</option>
					  <option value="Sabah">Sabah</option>
					  <option value="Sarawak">Sarawak</option>
					  <option value="Selangor">Selangor</option>
					  <option value="Terengganu">Terengganu</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" name="submit" class="btn btn-default button button-medium  pull-right " id="submitButton"> <span>Submit Information<i class="icon-chevron-right right"></i></span> </button>
			</div>
		</div>
		<input class="pull-left" id="subscriber_question5" name="subscriber_question5" value="confirmAccurate" type="checkbox" checked="checked" style="display:none"/>
         <div class="row">
               <!--
                  <div class="row">
                  <div class="col-md-12 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">Estimate Due Date of Delivery (EDD) or Youngest Child of birth D.O.B</label> <input type="text" name="subscriber_question4" class="subscriber_question4" id="datepicker" data-date-start-date="01-01-2008" data-date-end-date="31-12-2021" style="padding-top: 8px; padding-bottom: 8px; width: 100%; color: black; line-height: 1.7; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important;" required="required" /></div>
                  </div>-->
				<!--
               <div class="clearfix"></div>
			   
               <div class="col-md-12" style="margin-top: 30px; display: none;"><label style="color: #959595; font-size: 0.8em;">*By clicking 'Submit', you agree to become a member of Motherhood.com.my</label></div>
               <div class="clearfix"></div>
               <div class="col-md-12" style="display: none;">
                  <table style="background: none!IMPORTANT;">
                     <tbody style="background: none!IMPORTANT;">
                        <tr style="background: none!IMPORTANT;">
                           <td style="background: none!IMPORTANT; width: 20px;">
                           <td style="background: none!IMPORTANT;"><label class="pull-left" style="color: #959595;">Terms &amp; Conditions</label></td>
                        </tr>
                     </tbody>
                  </table>
                  <a href="#" id="readMore" onchange="readMore()" class="pull-left" style="color: #959595; margin-left: 10px; font-size: 0.8em;">Read More</a>
               </div>
               <div class="col-md-12 tnc" style="display: none; color: #959595;">
                  <table>
                     <tbody>
                        <tr>
                           <td style="vertical-align: top;">i.</td>
                           <td style="color: #959595; font-size: 0.8em;">I agree that Motherhood.com.my, Mead Johnson Nutrition (Malaysia) Sdn Bhd (&ldquo;MJN&rdquo;), Reckitt Benckiser (Malaysia) Sdn Bhd and/or its affiliates (collectively, &ldquo;RB&rdquo;) and/or any third party under contract with MJN or RB, may contact me from time to time, by telephone, mail or other electronic means to market/to promote/sell MJN and/or RB products and services and/or information related to Enfamama A+ Club (collectively referred to as &ldquo;Purpose&rdquo;). I agree the collection of use of my information by MJN and/or RB in accordance with the <a href="https://www.enfagrow.com.my/privacy-policy-mead-johnson-nutrition" target="_blank" rel="noopener">Privacy Policy</a> that I have read and understood. I have the option to withdraw at any time from receiving calls, SMS, mail or other electronic communications to provide information related to the Purpose. <a href="https://www.enfagrow.com.my/help-centre" target="_blank" rel="noopener">Contact Us</a> for more details.</td>
                        </tr>
                        <tr>
                           <td style="vertical-align: top; font-weight: bold; background-color: none!important; color: #959595; font-size: 0.8em;">ii.</td>
                           <td style="background-color: none!important; color: #959595; font-size: 0.8em;">* Anyone who has previously requested for Enfagrow A+ Stage 3 (1-3 years old) or Enfagrow A+ Stage 4 (4-6 years old) samples in 2018 will not be eligible to get the samples. For those who has successfully requested for the samples, please expect to receive it in 4-6weeks</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="clearfix"></div>
			   -->
         </div>
      </div>
   </div>
</div>
<script>// <![CDATA[
	var validatePostcode = function(_this){
		var postcode = _this.val();
		if(postcode != undefined && postcode != '')
		{
			$.ajax({
				url		 : 'https://www.motherhood.com.my/modules/enlineamixmod/enlineamixmod-postcode-ajax.php', 
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
		
	$(function(){
        $("#myButtons .btn").click(function()
		{
			$(this).button('toggle');
		});
		
		function readMore(){
			$('.tnc').show();
		};
		
		$("#readMore").click(function(){
			$('.tnc').show();
		});
	 
		$('.step1btn').on('click',function(event){
			 var sq2 = $(this).attr('value');
			 $('#subscriber_question2').val(sq2);
			 $('.step1').hide();
			 $('.step2').show();
			 $("img").trigger("unveil");
		});
         
             // /$('.step1btn').on('click',function(event){
             // $('#eventform').submit();
             // /});
         
		$('#step2Check').on('click',function(event){
				var test = [];
				 $("input[class='subscriber_question33']:checked").map(function(){
					 test.push($(this).val());
				  });
				var test1 = test.join();
				$('#subscriber_question3').val(test1);
				var stepval = $('#subscriber_question2').val();
			  if(stepval == 'others'){
				 $('.step2').hide();
				 $("#newEmail").attr("required", false);
				 $("#newFirstName").attr("required", false);
				 $("#newLastName").attr("required", false);
				 $("#subscriber_question1").attr("required", false);
				 $(".subscriber_question4").attr("required", false);
				 $(".subscriber_question7").attr("required", false);
				 $("#subscriber_question8").attr("required", false);
				 $("#subscriber_question9").attr("required", false);
				 $("#subscriber_question10").attr("required", false);
				 $('#submitButton').click();
			  }else{
				 $('.step2').hide();
				 $('.step3').show();
			  }
		});
		
		$('#subscriber_question1').on('change',function(event){
         	var phonenumber = $('#subscriber_question1').val();
             var phonenumberr = phonenumber.replace("-"," ");
             var phonenumber = phonenumberr.trim();
             if ($.trim(phonenumber) != "") {
                 var prefix = phonenumber.substring(0,3);
                 var firstNo = phonenumber.substring(0,1);
                 var phoneLength = phonenumber.length;
                 if(firstNo !== 0 || firstNo !== 5){
                     $('#phoneNoError').show();
                     $("#subscriber_question1").css('background-color', 'red');
                     $("#submitButton").attr("disabled", true);
                 }
                 if(firstNo == '0'){
                     if(prefix == '010' || prefix == '011' || prefix == '012' || prefix == '013' || prefix == '014' || prefix == '015' || prefix == '016' || prefix == '017' || prefix == '018' || prefix == '019'){
                         $('#phoneNoPrefixError').hide();
                         $("#subscriber_question1").css('background-color', 'white'); 
                         $("#submitButton").attr("disabled", false);
                             if(prefix == '011'){
                                 if(phoneLength < 10 || phoneLength > 11){
                                     $('#phoneNoError').show();
                                     $("#subscriber_question1").css('background-color', 'red');
                                     $("#submitButton").attr("disabled", true);
                                 }else{
                                     $('#phoneNoError').hide();
                                     $('#phoneNoErrorSg').hide();
                                     $("#subscriber_question1").css('background-color', 'white');
                                     $("#submitButton").attr("disabled", false);
                                 }
                             }else{
                                 if(phoneLength < 10 || phoneLength > 10){
                                     $('#phoneNoError').show();
                                     $("#subscriber_question1").css('background-color', 'red');
                                     $("#submitButton").attr("disabled", true);
                                 }else{
                                     $('#phoneNoError').hide();
                                     $('#phoneNoErrorSg').hide();
                                     $("#subscriber_question1").css('background-color', 'white');
                                     $("#submitButton").attr("disabled", false);
                                 }
                             }  
                         }else{
                         $('#phoneNoPrefixError').show();
                         $("#subscriber_question1").css('background-color', 'red');
                         $("#submitButton").attr("disabled", true);
                     } 
                 }else if(firstNo == '5'){
                         $('#phoneNoErrorSg').hide();
                         $('#phoneNoError').hide();
                         $("#subscriber_question1").css('background-color', 'white'); 
                         $("#submitButton").attr("disabled", false);
                     if(phoneLength < 9 || phoneLength > 9){
                         $('#phoneNoErrorSg').show();
                         $("#subscriber_question1").css('background-color', 'red');
                         $("#submitButton").attr("disabled", true);
                     }else{
                         $('#phoneNoErrorSg').hide();
                         $('#phoneNoError').hide();
                         $("#subscriber_question1").css('background-color', 'white');
                         $("#submitButton").attr("disabled", false);
                     }
                 }else{
                     $('#phoneNoPrefixError').show();
                     $("#subscriber_question1").css('background-color', 'red');
                     $("#submitButton").attr("disabled", true);
                 }
             }
        });
		
		var selectorPostcode = document.getElementById("subscriber_question8");
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
		
		var selectorDOB = document.getElementById("subscriber_question13");
		Inputmask('datetime',{
			alias 		 :'datetime',
			inputFormat  : "dd/mm/yyyy", 
			outputFormat : "dd/mm/yyyy",
			leapday: "29.02."
		}).mask(selectorDOB);
		
		$('body').on('blur', '.addr-postcode', function(){
			validatePostcode($(this));
		});
	});
         //function pregnantCheck(value){
         //    var value;
         //    var addresscheck1 = $("input[name='subscriber_question11']:checked").val();
         //    var addresscheck2 = $("input[name='subscriber_question3']:checked").val();
         //    if(value == "yes"){
         //        $('.pregnantYes').show();
         //        $(".subscriber_question12").attr("required", true);
         //        $('.addressInfo').show();
         //        $(".subscriber_question2").attr("required", true);
         //        $(".subscriber_question7").attr("required", true);
         //        $(".subscriber_question8").attr("required", true);
         //        $(".subscriber_question9").attr("required", true);
         //        $('.addressInfo').show();
         //        $(".subscriber_question2").attr("required", true);
         //        $(".subscriber_question7").attr("required", true);
         //        $(".subscriber_question8").attr("required", true);
         //        $(".subscriber_question9").attr("required", true);
         //        $(".subscriber_question13").attr("required", true);
         //    }else if(value == "no"){
         //        $('.pregnantYes').hide();
         //        $(".subscriber_question12").attr("required", false);
         //        $('.addressInfo').hide();
         //        $(".subscriber_question2").attr("required", false);
         //        $(".subscriber_question7").attr("required", false);
         //        $(".subscriber_question8").attr("required", false);
         //        $(".subscriber_question9").attr("required", false);
         //        $(".subscriber_question13").attr("required", false);
         //    }
         //}
         //function childrenCheck(value){
         //    var value;
         //    var addresscheck1 = $("input[name='subscriber_question3']:checked").val();
         //    var addresscheck2 = $("input[name='subscriber_question11']:checked").val();
         //    if(value == "yes"){
         //        $('.childYes').show();
         //        $(".subscriber_question4").attr("required", true);
         //        $(".subscriber_question10").attr("required", true);
         //        $('.addressInfo').show();
         //        $(".subscriber_question2").attr("required", true);
         //        $(".subscriber_question7").attr("required", true);
         //        $(".subscriber_question8").attr("required", true);
         //        $(".subscriber_question9").attr("required", true);
         //        $(".subscriber_question13").attr("required", true);
         //    }else if(value == "no"){
         //        $('.childYes').hide();
         //        $(".subscriber_question4").attr("required", false);
         //        $(".subscriber_question10").attr("required", false);
         //    }
         //    if(addresscheck1 == "yes"){
         //        $('.addressInfo').show();
         //        $(".subscriber_question2").attr("required", true);
         //        $(".subscriber_question7").attr("required", true);
         //        $(".subscriber_question8").attr("required", true);
         //        $(".subscriber_question9").attr("required", true);
         //        $(".subscriber_question13").attr("required", true);
         //    }else if(addresscheck1 =="no" && addresscheck2 == "no"){
         //        $('.addressInfo').hide();
         //        $(".subscriber_question2").attr("required", false);
         //        $(".subscriber_question7").attr("required", false);
         //        $(".subscriber_question8").attr("required", false);
         //        $(".subscriber_question9").attr("required", false);
         //        $(".subscriber_question13").attr("required", false);
         //    }else{}
         //}
          
         
    
   // ]]>
</script>