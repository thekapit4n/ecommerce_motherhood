<p>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
   <script>// <![CDATA[
      $( document ).ready(function() {
          $('#datepicker').datepicker({
              format: 'dd-mm-yyyy',
              startView: 'years',
          });
          $('#datepickerr').datepicker({
              format: 'dd-mm-yyyy',
              startView: 'years',
          });
      });
       
      // ]]>
   </script>
</p>
<div class="step3" style="display: block;">
   <div class="row" style="padding-top: 10px; padding-bottom: 50px;">
      <div class="col-md-12 text-center">
         <h3 style="padding-top: 10px;"><span style="color: #959595;">Register to get your Motherhood VIP Pass now!<br /></span></h3>
      </div>
      <div class="col-md-12 mobile-style-large" align="left">
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
               <div class="row">
                  <div class="col-md-12 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="email" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">Email <input id="newEmail" name="newEmail" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" required="required" type="email" /></label><label id="errorSpan" style="color: red;"></label></div>
                  <div class="clearfix"></div>
                  <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="firstname" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">First Name</label> <input required="required" id="newFirstName" name="newFirstName" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="text" /></div>
                  <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="lastname" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">Last Name</label> <input required="" id="newLastName" name="newLastName" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="text" /></div>
                  <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="When is mommy's birthday?" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">When is Mommy's Birthday?</label> <input required="" id="mommy'sbirthday" name="mommy'sbirthday" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="text" /></div>
                  <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="brandmilk" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">What brand of milk does mommy like or is currently consuming?</label> <input required="" id="brandmilk" name="brandmilk" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="text" /></div>
                  <div class="col-md-12 col-xs-12 col-lg-12" style="padding-left: 5px; padding-right: 5px;"><label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">What milk brand is your kid currently consuming?</label> <input type="text" name="subscriber_question11" class="subscriber_question11" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" required="required" /></div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="contactnum" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;"> Contact Number</label> <input required="required" id="subscriber_question1" name="subscriber_question1" onkeydown="javascript: return event.keyCode == 69 ? false : true" style="padding-top: 8px; padding-bottom: 8px; line-height: 1.7; width: 100%; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important;" type="number" title="xxx xxxxx" placeholder="XXX XXXXXXX" pattern=".{10,}" /> <label style="color: #959595;" class="mobile-style-small">*For singapore number,+5 for prefix (+65). e.g. +5 XXXX XXXX.</label> <label style="color: red; display: none;" id="phoneNoError">Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.</label> <label style="color: red; display: none;" id="phoneNoPrefixError">Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).</label> <label style="color: red; display: none;" id="phoneNoErrorSg">Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777.</label></div>
               </div>
               <div class="clearfix"></div>
               <div id="newUserSpan">
                  <div class="row">
                     <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="password" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">New Password<span style="color: #ffffff;" class="mobile-style-small">(*More than 6 Characters )</span></label> <input id="newPassword" name="newPassword" style="padding-top: 8px; padding-bottom: 8px; color: black; width: 100%; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="password" /></div>
                     <div class="col-md-6 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label for="password" class="required mobile-style-normal" style="color: #959595; font-size: 1.1em;">Confirm Password</label> <input id="confirmPassword" name="confirmPassword" style="padding-top: 8px; padding-bottom: 8px; color: black; width: 100%; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" type="password" /></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-xs-12 col-lg-12" style="padding-left: 5px; padding-right: 5px;"><label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">Address</label> <input type="text" name="subscriber_question7" class="subscriber_question7" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" required="required" /></div>
                  <div class="col-md-4 col-lg-4 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">Postcode</label> <input type="number" name="subscriber_question8" id="subscriber_question8" size="10" required="required" onkeydown="javascript: return event.keyCode == 69 ? false : true" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7; width: 100%;" /></div>
                  <div class="col-md-4 col-lg-4 col-xs-12" style="padding-left: 5px; padding-right: 5px;"><label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">City</label> <input type="text" name="subscriber_question9" id="subscriber_question9" size="60" required="required" style="padding-top: 8px; padding-bottom: 8px; color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7;" /></div>
                  <div class="col-md-4 col-lg-4 col-xs-12" style="padding-left: 5px; padding-right: 5px;">
                     <label style="color: #959595; font-size: 1.1em;" class="mobile-style-normal">State</label>
                     <select name="subscriber_question10" id="subscriber_question10" required="required" style="color: black; border: 1px solid rgba(0,0,0,.1); box-shadow: none; border-radius: 10px!important; line-height: 1.7; width: 100%; height: 49px;">
                        <option value="">State</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Pulau Pinang">Pulau Pinang</option>
                        <option value="Perak">Perak</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Johor">Johor</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Terenganu">Terenganu</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Labuan">Labuan</option>
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="col-md-12" style="margin-top: 30px; display: none;"><label style="color: #959595; font-size: 0.8em;">*By clicking 'Submit', you agree to become a member of Motherhood.com.my</label></div>
               <div class="clearfix"></div>
               <div class="col-md-12" style="display: none;">
                  <table style="background: none!IMPORTANT;">
                     <tbody style="background: none!IMPORTANT;">
                        <tr style="background: none!IMPORTANT;">
                           <td style="background: none!IMPORTANT; width: 20px;"><input class="pull-left" id="subscriber_question5" name="subscriber_question5" value="confirmAccurate" type="checkbox" checked="checked" /></td>
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
               <br /><br /> <button type="submit" name="submit" class="btn btn-default button button-medium  pull-right " id="submitButton"> <span>Continue<i class="icon-chevron-right right"></i></span> </button>
            </div>
         </div>
      </div>
   </div>
</div>
<p>
   <script>// <![CDATA[
      $(document).ready(function(){
          $("#myButtons .btn").click(function(){
              $(this).button('toggle');
          });
      });
      $(document).ready(function(){
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
      });
      
       
      $(document).ready(function($){
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
      });
       
      // ]]>
   </script>
</p>