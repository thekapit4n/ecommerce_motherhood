<style>
   <!--
		input{
            padding-top:10px!important;
            padding-bottom:10px!important;
        }
		
		.has-error-validation{
			border: solid 2px #f90012 !important;
		}
		
		.error-msg{
			color:#f90012;
			font-size: 12px;
		}
			
        [placeholder]:focus::-webkit-input-placeholder {
                    color: transparent;
                }
                .filename{
                    display:none!important;
                }
                .action{
                    display:none!important;
                }
                .uploader{
                    height:0!important;
                }
        ::placeholder {
            color:#CCC;
        }
        .mfp-content{
            height:800px;
        }
        /* Chrome, Safari, Edge, Opera */
        .postcodeinput input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
      
        /* Firefox */
        .postcodeinput input[type=number] {
          -moz-appearance: textfield;
        }
      -->
</style>
<div id="sponsored_content" class="clearfix"></div>
<div class="row">
   <div class="col-md-12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Friso/LN25_Acquisition_Motherhood_1170x481+(1).png" width="100%" /></div>
</div>
<div class="row" style="background-color: #f7f7f7; padding: 10px 0px 0px 0px; margin: 0;">
   <div class="clearfix"></div>
   <div class="col-md-8 col-md-offset-2" style="text-align: left; color: #000000; font-weight: bold;">
      <div class="col-md-12">
         <!--------------------- Full Name ---------------------> <br />
         <p>Applicable to children from 1 to3 years old</p>
         <br />
         <p>Full Name ( AS PER MYKAD/PASSPORT)</p>
         <ul style="padding: 10px 0px 10px 0px;">
            <li style="float: left; width: 100%;"><input name="newFirstName" id="newFirstName" type="text" required="required" style="line-height: 1; border: none; box-shadow: none;" /></li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6">
         <!--------------------- Email ---------------------> <br />
         <p>Email</p>
         <ul style="padding: 10px 0px 10px 0px;">
            <li style="float: left; width: 100%;"><input name="newEmail" id="newEmail" type="text" required="required" style="line-height: 1; border: none; box-shadow: none;" /></li>
         </ul>
      </div>
      <div class="col-md-6">
         <!---------------------Moblie ---------------------><br />
         <p>Mobile Number</p>
         <ul style="padding: 10px 0px 10px 0px;">
            <li style="float: left; margin-right: 0px; padding-right: 0px;">
               <p style="float: left; line-height: 2.7; padding-right: 2px;">6</p>
            </li>
            <li style="margin-left: 0px; padding-left: 0px;" class="inputclass">
				<input style="float: left; width: 95%; padding-top: 10px; padding-bottom: 10px; line-height: 1; border: none; box-shadow: none;" name="subscriber_question1" id="subscriber_question1" type="number" 
					title="xxx xxxxx" placeholder="XXXXXXXXXX" pattern=".{10,}" 
					 required="required" />
				<small class="error-msg"></small>
			</li>
			
		 </ul>
      </div>
      <div class="clearfix"></div>
      <!--------------------- Child birth date ---------------------> <br /><br />
      <div class="col-md-12 col-xs-12">
         <p>Child's date of birth</p>
      </div>
      <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
         <select id="babyYear" required="required" style="width: 100%; font-size: 1.1em; box-shadow: none !important; border: none; color: #512f2e;">
            <option value="" disabled="disabled" selected="selected">Year</option>
         </select>
      </div>
      <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
         <select id="babyMonth" disabled="disabled" required="required" style="width: 100%; font-size: 1.1em; box-shadow: none !important; border: none; color: #512f2e;">
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
      <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
         <select disabled="disabled" required="required" id="babyDay" style="width: 100%; font-size: 1.1em; box-shadow: none !important; border: none; color: #512f2e;">
            <option value="" disabled="disabled" selected="selected">Day</option>
         </select>
         <input type="hidden" name="subscriber_question4" id="subscriber_question4" />
      </div>
      <div class="clearfix"></div>
      <!---------------------Current product usage* --------------------->
		<div class="col-md-12">
			<br /><br />
			<p>Current Milk Brand Used</p>
			 <ul style="padding: 10px 0px 10px 0px;">
				<li style="float: left; width: 100%;">
					<select name="subscriber_question3" id="subscriber_question3" required="required" style="line-height: 1; height: 34px; width: 100%; border: none; box-shadow: none;">
						<option value="">Please select</option>
						<option value="Abbott">Abbott</option>
						<option value="Anmum Essential">Anmum Essential</option>
						<option value="Dumex">Dumex</option>
						<option value="Dumex Mamil">Dumex Mamil</option>
						<option value="Dutch Lady">Dutch Lady</option>
						<option value="Enfagrow">Enfagrow</option>
						<option value="Fernleaf">Fernleaf</option>
						<option value="Friso Gold">Friso Gold </option>
						<option value="Gain Kid">Gain Kid </option>
						<option value="Isomil">Isomil</option>
						<option value="Lactogen">Lactogen</option>
						<option value="Morinaga">Morinaga</option>
						<option value="Nan">Nan</option>
						<option value="Novalac">Novalac</option>
						<option value="Pediasure">Pediasure</option>
						<option value="S-26">S-26</option>
						<option value="Snow">Snow </option>
						<option value="Sustagen">Sustagen</option>
						<option value="Do not consume milk powder">Do not consume milk powder </option>
						<option value="Others">Others</option>
					</select>
				</li>
			 </ul>
		</div>
      <div class="clearfix"></div>
      <div class="col-md-12">
         <!---------------------Address 1---------------------><br /><br />
         <p>Address Line 1 (House/Unit No., Condo/ Apartment Name)</p>
         <ul style="padding: 10px 0px 30px 0px;">
            <li style="float: left; width: 100%;"><input name="subscriber_question5" id="subscriber_question5" placeholder="ex. No 12 , Jalan ABC" type="text" size="80" required="required" style="line-height: 1; border: none; box-shadow: none;" /></li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
         <!---------------------Address 1---------------------><br />
         <p>Address Line 2 (Street Name, District)</p>
         <ul style="padding: 10px 0px 30px 0px;">
            <li style="float: left; width: 100%;"><input name="subscriber_question7" id="subscriber_question7" placeholder="Taman DEF" type="text" size="80" required="required" style="line-height: 1; border: none; box-shadow: none;" /></li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <!-- Postcode form-->
      <div class="col-md-4 col-lg-4 postcodeinput">
         <br /><br />
         <p>Postcode</p>
         <ul style="padding: 10px 0px 30px 0px;">
            <li style="float: left; width: 100%;">
				<input name="subscriber_question8" id="subscriber_question8" type="text" class="numeric" maxlength="5" placeholder="ex. 12345" required style="padding-top: 10px; padding-bottom: 10px; line-height: 1; border: none; box-shadow: none; width: 100%;"/>
			</li>
         </ul>
      </div>
      <div class="col-md-4 col-lg-4">
         <br /><br />
         <p>City</p>
         <ul style="padding: 10px 0px 30px 0px;">
            <li style="float: left; width: 100%;"><input name="subscriber_question9" id="subscriber_question9" type="text" required="required" style="padding-top: 10px; padding-bottom: 10px; line-height: 1; border: none; box-shadow: none; width: 100%;" /></li>
         </ul>
      </div>
      <!-- State form-->
      <div class="col-md-6 col-lg-4">
         <br /> <br />
         <p>State</p>
         <ul style="padding: 10px 0px 30px 0px;">
            <li style="float: left; width: 100%;">
               <select name="subscriber_question10" id="subscriber_question10" type="text" required="required" style="line-height: 1; width: 100%; height: 34px; border: none; box-shadow: none;">
                  <option value="">Choose</option>
                  <option value="Johor Darul Takzim">Johor Darul Takzim</option>
                  <option value="Kedah Darul Aman">Kedah Darul Aman</option>
                  <option value="Kelantan Darul Naim">Kelantan Darul Naim</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan Darul Khusus">Negeri Sembilan Darul Khusus</option>
                  <option value="Pahang Darul Makmur">Pahang Darul Makmur</option>
                  <option value="Perlis Indera Kayangan">Perlis Indera Kayangan</option>
                  <option value=" Perak Darul Ridzuan">Perak Darul Ridzuan</option>
                  <option value="Pulau Pinang">Pulau Pinang</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Selangor Darul Ehsan">Selangor Darul Ehsan</option>
                  <option value="Terengganu Darul Iman">Terengganu Darul Iman</option>
                  <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                  <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                  <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
               </select>
            </li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12 col-lg-12">
         <table style="margin: 15px 0px 15px 0px; font-weight: bold;">
            <tbody>
               <tr>
                  <td style="font-weight: bold; vertical-align: top;"><input id="subscriber_question12" name="subscriber_question12" value="agree" required="required" type="checkbox" checked="checked" style="display: inline-block;" /></td>
                  <td style="font-weight: bold;">
                     <p>Agree to terms and Conditions</p>
                     <p style="font-weight: 300;">I agree to the processing of my personal data in accordance with <span style="text-decoration: underline;" class="tncbtn">Privacy Policy</span>.</p>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="clearfix"></div>
      <button type="submit" name="submit" class="btn btn-default button button-medium btn-submit" style="padding: 8px 10px 8px 10px; visibilty: hidden; margin: 50px 0px 20px 0px; background: #476f7a; border: none; float: right;"> <span style="border: none;">Redeem Now<i class="icon-chevron-right right"></i></span> </button>
   </div>
   <br /><br />
</div>
<div class="clearfix"></div>
<div class="row" style="background-color: #232f61; padding-bottom: 50px; margin: 0;">
   <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2" style="padding-top: 50px; text-align: left; padding-left: 50px;">
      <p style="font-weight: bold; color: white;">Terms &amp; Conditions</p>
      <p style="color: white;">- Registration will only be accepted with a FULL postal address provided.</p>
      <p style="color: white;">- The incomplete registration form will not be accepted.</p>
      <p style="color: white;">- The sample products may vary and subject to availability.</p>
      <p style="color: white;">- Each registered account is entitled to only ONE(1) redemption.</p>
      <p style="color: white; display: inline-block;">- By submitting this application, you hereby consent to us collecting, using, and/or processing your personal data in accordance with our <span style="text-decoration: underline;" class="tncbtn">Privacy Policy.</span></p>
   </div>
</div>
<div class="clearfix"></div>
<div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Friso/Privacy+policy+for+Friso+Gold.pdf"> </a></div>
<p>
   <script>// <![CDATA[
      $(document).ready(function () {
		var errorSelector 	 = '.error-msg';
		var hasValidation 	 = 'has-error-validation';
		var icon 	  		 = '<i class="fa fa-info-circle"></i>';
		
		$('.numeric').on('input', function (event) { 
			this.value = this.value.replace(/[^0-9]/g, '');
		});
		
		$("#tncpopupimg").magnificPopup({
			type: "iframe",
			closeOnContentClick: true,
			fixedContentPos: true,
			mainClass: "mfp-no-margins", // class to remove default margin from left and right side
			image: {
                verticalFit: false,
			},
			zoom: {
                enabled: false,
                duration: 100, // don't foget to change the duration also in CSS
			},
			callbacks: {
                close: function () {},
			},
		});
      
		$(".tncbtn").on("click", function () {
			$("#tncpopupimg").magnificPopup("open");
		});
      
		for (var i = 2018; i <= 2020; i++) {
			$("#babyYear").append('<option value="' + i + '">' + i + "</option>");
		}
		
		$("#babyYear").on("change", function () {
			$("#babyMonth").prop("disabled", false);
		});
          
      
		$("#babyMonth").on("change", function () {
			  var year = $("#babyYear").val();
			  var month = $("#babyMonth").val();
			  if (year !== "" && month !== "") {
				$("#babyDay").prop("disabled", false);
				$("#babyDay").find("option").remove().end();
				var days = new Date(year, month, 0).getDate();
				$("#babyDay").append(
				  '<option value=" " disabled selected> Day </option>'
				);
				for (var i = 1; i <= days; i++) {
				  $("#babyDay").append(
					'<option value="' + i + '">' + i + "</option>"
				  );
				}
			  }
		});
            $("#babyDay").on("change", function () {
              var year = $("#babyYear").val();
              var month = $("#babyMonth").val();
              var day = $("#babyDay").val();
              var month = ("0" + month).slice(-2);
              var day = ("0" + day).slice(-2);
              $("#subscriber_question4").val(day + "/" + month + "/" + year);
            });
      
            $("#subscriber_question1").on("change", function (event) {
				var mobileSelector 		  = $('body').find("#subscriber_question1");
				var msgPhoneNoError 	  = "Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 012 3334444 / 019-8887777";
				var msgPhoneNoPrefixError = "Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019)";
				var msgPhoneNoErrorSg 	  = "Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777";
				var phonenumber = $("#subscriber_question1").val();
				var phonenumber = phonenumber.replace(/-/g, " ");
				var phonenumber = phonenumber.trim();
				mobileSelector.closest('.inputclass').find(errorSelector).html('');			
				mobileSelector.removeClass(hasValidation);	
              if ($.trim(phonenumber) != "") {
					var prefix = phonenumber.substring(0, 3);
					var firstNo = phonenumber.substring(0, 1);
					var phoneLength = phonenumber.length;
					if (firstNo !== 0 && firstNo !== 5) {
						mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoError);			
						mobileSelector.addClass(hasValidation);	
					}
					if (firstNo == "0") {
						if (
							prefix == "010" ||
							prefix == "011" ||
							prefix == "012" ||
							prefix == "013" ||
							prefix == "014" ||
							prefix == "015" ||
							prefix == "016" ||
							prefix == "017" ||
							prefix == "018" ||
							prefix == "019"
						) {
                    if (prefix == "011") {
						if (phoneLength < 10 || phoneLength > 11) {
							mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoError);			
							mobileSelector.addClass(hasValidation);	
						} else {
							mobileSelector.closest('.inputclass').find(errorSelector).html('');			
							mobileSelector.removeClass(hasValidation);	
						}
                    } else {
                      if (phoneLength < 10 || phoneLength > 10) {
							mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoError);			
							mobileSelector.addClass(hasValidation);	
						} else {
							mobileSelector.closest('.inputclass').find(errorSelector).html('');			
							mobileSelector.removeClass(hasValidation);	
						}
                    }
                  } else {
						mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoPrefixError);			
						mobileSelector.addClass(hasValidation);	
                  }
                } 
				else if (firstNo == "5") {
					mobileSelector.closest('.inputclass').find(errorSelector).html('');			
					mobileSelector.removeClass(hasValidation);
					if (phoneLength < 9 || phoneLength > 9) {
						mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoErrorSg);			
						mobileSelector.addClass(hasValidation);
					} else {
						mobileSelector.closest('.inputclass').find(errorSelector).html('');			
						mobileSelector.removeClass(hasValidation);	
                  }
                } else {
					mobileSelector.closest('.inputclass').find(errorSelector).html(icon + " " + msgPhoneNoPrefixError);			
					mobileSelector.addClass(hasValidation);
                }
              }
            });
	});
       
      // ]]>
   </script>
</p>