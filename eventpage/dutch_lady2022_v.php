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
          <img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Dutch+Lady/homeslider.jpg" width="100%" />
          <div class="alert alert-warning" role="alert">Applicable to children from 1 to 6 years old</div>
       </div>
    </div>
    <div style="background-color: #f7f7f7; padding-top: 40px;">
       <div class="row mb-2 px-md-5 mx-md-5">
          <div class="col-md-6 px-2">
             <label for="email" class="form-label required">Email</label>
             <div class="input-group"><input type="text" class="form-control input-email" aria-label="email" aria-describedby="basic-addon1" name="newEmail" value="{{predefine-email}}" required="" /> <input type="hidden" class="form-control login-input-email" value="{{predefine-email}}" /> <input type="hidden" class="form-control user-id" value="{{predefine-user}}" /> <input type="hidden" class="form-control status-input-email" /> <input type="hidden" class="form-control status-code-email" /> 
             <input type="hidden" class="year-min" value="{{ageyear1}}" /> 
             <input type="hidden" class="year-max" value="{{ageyear7}}" /> 
             <span class="input-group-text span-email-input input-group-icon-hide" id="basic-addon1"></span></div>
             <small class="error-msg error-email-msg"></small>
          </div>
          <div class="col-md-6 px-2"><label for="mobileno" class="form-label required">Mobile number</label> <input type="text" class="form-control mobile-no" id="mobileno" name="subscriber_question1" required="" /> <small class="error-msg"></small></div>
       </div>
       <div class="row mb-2 px-md-5 mx-md-5">
          <div class="col-md-6 px-2"><label for="firstname" class="form-label required">First name</label> <input type="text" class="form-control fname" id="firstname" name="newFirstName" required="" /> <small class="error-msg"></small></div>
          <div class="col-md-6 px-2"><label for="lastname" class="form-label required">Last name</label> <input type="text" class="form-control lname" id="lastname" name="newLastName" /> <small class="error-msg"></small></div>
       </div>
       <div class="row mb-2 px-md-5 mx-md-5 row-password" style="display: {{row-password-display}};">
          <div class="col-md-6 px-2"><label for="newpassword" class="form-label required">Create Account Password </label> <input type="password" class="form-control inputpassword" id="newpassword" name="newPassword" /> <small class="error-msg">Please assign a password for your Motherhood account</small></div>
          <div class="col-md-6 px-2 div-confirm-password"><label for="confirmpassword" class="form-label required">Password confirmation</label> <input type="password" class="form-control inputconfirmpassword" id="confirmpassword" name="confirmPassword" /> <small class="error-msg"></small></div>
       </div>
       <div class="row mb-2 mb-2 px-md-5 mx-md-5">
          <div class="col-md-6 px-2"><label for="fulladdress" class="form-label required">Child's Date of Birth</label> 
          <input type="text" id="dobChild" name="subscriber_question4" class="form-control" placeholder="Child's DOB" required="required" /> 
          <small><i class="fas fa-info-circle"></i> Applicable for children 1 to 6 years old only</small></div>
          <div class="col-md-6 px-2">
             <label class="form-label required">Sample: Product Name</label>
             <select class="form-select selection-kidmilk" id="kid-milk-brand" name="subscriber_question3" aria-label="" style="height: 37px;" required="">
                <option disabled="disabled" selected="selected" value="">Choose one</option>
                <option value="Dutch Lady Maxgro ">Dutch Lady Maxgro</option>
             </select>
             <small class="error-msg"></small>
          </div>
       </div>
       <div class="row mb-2 px-md-5 mx-md-5">
          <div class="col-md-12 px-2"><label for="address" class="form-label required">Full address</label> <input type="text" class="form-control input-addr" id="address" name="subscriber_question5" required="" placeholder="" /> <small class="error-msg"></small></div>
       </div>
       <div class="row mb-2 px-md-5 mx-md-5">
          <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode"><label for="postcode-address" class="form-label required">Postcode</label> <input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question8" required="" /> <small class="error-msg"></small></div>
          <div class="col-md-4 px-2 mb-3 mb-md-1"><label for="city-address" class="form-label required">City</label> <input type="text" class="form-control addr-city" id="city-address" name="subscriber_question9" required="" /> <small class="error-msg"></small></div>
          <div class="col-md-4 px-2 mb-3 mb-md-1">
             <label for="state-address" class="form-label required">State</label>
             <select class="form-select addr-state" name="subscriber_question10" id="state-address" aria-label="" style="height: 37px;" required="">
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
            <input type="text" class="form-control" id="postcode-country" name="" required="" readonly="readonly" value="Malaysia" style="background-color: white;" /> 
            <small class="error-msg"></small>
        </div>
       </div>
       <div class="row my-4 px-md-5 mx-md-5">
          <div class="col-md-12 px-2">
             <div class="form-check">
             <input class="form-check-input noUniform" type="checkbox" value="agree" id="tnccheckbox" name="subscriber_question12" required="" /> 
             <label class="form-check-label noUniform px-3" for="tnccheckbox"> I agree to the processing of my personal data in accordance with <span style="text-decoration: underline;" class="tncbtn">Privacy Policy</span>.</label>
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
                   <li class="text-left tnc_li">Applicable to children from 1 to 6 years old</li>
                   <li class="text-left tnc_li">Registration will only be accepted with a FULL postal address provided.</li>
                   <li class="text-left tnc_li">Incomplete registration form will not be accepted.</li>
                   <li class="text-left tnc_li">Each registered account is entitled to receive only ONE(1) redemption.</li>
                   <li class="text-left tnc_li">By submitting this application, you hereby consent to us collecting, using, and/or processing your personal data in accordance with our <a href="../../../page/privacy-policy" target="_blank" rel="noopener">Privacy Policy.</a></li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </div>
 <p><button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button></p>
 <div id="sponsored_content" sponsored_content="1"></div>
 <div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/dutch+lady/Privacy+Policy+-+Dutch+Lady.pdf"> </a></div>
 <p>
    <!-- disabled overlay banner --->
    <script>// <![CDATA[
       var validatePostcode = function(_this){
               var postcodeSelector	= $('body').find('.addr-postcode');
               var postcode = postcodeSelector.val();
               
               postcodeSelector.removeClass('is-invalid');
               postcodeSelector.closest('.div-postcode').find('.error-msg').html('');
               if(postcode == '' || postcode == undefined || postcode == null)
               {
                   Swal.fire({
                       icon: 'error',
                       title: 'Error',
                       text: 'Please insert postcode',
                   });
                               
                   return false;
               }
               else if(isNaN(postcode))
               {
                   Swal.fire({
                       icon: 'error',
                       title: 'Error',
                       text: 'Postcode must be in numeric value',
                   });
                           
                   return false;
               }
               else if(postcode.length != 5)
               {
                   Swal.fire({
                       icon: 'error',
                       title: 'Error',
                       text: 'Postcode contain 5 digits only',
                   });
                           
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
               var errorSelector  	= $('body').find('.error-msg');
               var mobileSelector = $('body').find('.mobile-no');
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
           
           var validateChildDob = function(){
               var dobChild = $('body').find('#dobChild').val();
           
               if(dobChild != '')
               {
                   var arryDate = dobChild.split("/");
                   
                   if(arryDate.length == 3)
                   {
                       if(isNaN(arryDate[0]) || isNaN(arryDate[1]) || isNaN(arryDate[2]))
                       {
                           Swal.fire({
                               icon: 'error',
                               title: 'Error',
                               text: 'Please enter your child Date of Birth in correct format',
                           });
       
                           return false;
                       }
                   }
               }
       
               return true;
           }

           $(".tncbtn").on("click", function () {
              $("#tncpopupimg").magnificPopup("open");
            });
       
           var validateEmail = function(autorun){
               var eventID  = 90;
               var email = $('body').find('.input-email').val();
       
               if(email != '' && email != undefined && email != null)
               {
                   $.ajax({
                       url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
                       data	 :{'checkemail': email, 'eventid': eventID},
                       dataType :'json',
                       method 	 : 'post',
                       async	 : false,
                       success	 : function(result){
                           $('body').find('.status-code-email').val(result.status_code);
                           if(result.status == true)
                           {
                               if(result.status_code == 'exist_customer_motherhood')
                               {
                                   $('body').find('.row-password').hide('fast')
                                   $('body').find('.btn-submit-display').show('fast');
                               }
                               else if(result.status_code == 'new_customer_event')
                               {
                                   $('body').find('.row-password').show('fast')
                                   $('body').find('.btn-submit-display').show('fast');
                               }
                               else if(result.status_code == 'exist_customer_event')
                               {
                                   Swal.fire({
                                       icon: 'error',
                                       title: 'Error',
                                       text: 'This email has been registered',
                                   });
                                   $('body').find('.row-password').hide('fast');
                                   $('body').find('.btn-submit-display').hide('fast');
                               }
                           }
                           else
                           {
                               Swal.fire({
                                   icon: 'error',
                                   title: 'Error',
                                   text: 'An error occur on server side',
                               });
                           }
                       }
                   });
               }
               else
               {
                   if(autorun != true)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your email',
                       });
                   }
               }
               
           }
                                       
           $(function(){
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
               
               $('body').on('blur', '#dobChild', function(){
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
       
                   var status_code_email = $('body').find('.status-code-email').val();
                   var inputEmail = $('body').find('.input-email').val();
                   var loginemail = $('body').find('.login-input-email').val();
                   var firstname = $('body').find('.fname').val();
                   var lastname = $('body').find('.lname').val();	
                   var mobileno = $('body').find('#mobileno').val();	
                   var dobchild = $('body').find('#dobChild').val();	
                   var kidmilkbrand = $('body').find('#kid-milk-brand').val();	
                   var address = $('body').find('#address').val();	
                   var postcode = $('body').find('#postcode-address').val();	
                   var state = $('body').find('#state-address').val();	
                   var city = $('body').find('#city-address').val();	
                   var country = $('body').find('#postcode-country').val();	
                   var password = $('body').find('#newpassword').val();	
                   var confirmPassword = $('body').find('#confirmpassword').val();	
                   var tncCheck = $('body').find('#tnccheckbox').is(':checked');
       
                   if(inputEmail == '' || inputEmail == undefined || inputEmail == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your email',
                       });
       
                       return false;
                   }
                   
                   if(mobileno == '' || mobileno == undefined || mobileno == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your mobile no',
                       });
       
                       return false;
                   }
       
                   var check_mobileNo = validateMobileNo();
       
                   if(check_mobileNo == false)
                   {
                       return false;
                   }
                   
                   if(firstname == '' || firstname == undefined || firstname == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your firstname',
                       });
       
                       return false;
                   }
                   
                   if(lastname == '' || lastname == undefined || lastname == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your lastname',
                       });
       
                       return false;
                   }
       
                   if(dobchild == '' || dobchild == undefined || dobchild == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your child Date of birth',
                       });
       
                       return false;
                   }
       
                   var check_childDOb = validateChildDob();
       
                   if(check_childDOb == false)
                   {
                       return false
                   }
                   
                   if(kidmilkbrand == '' || kidmilkbrand == undefined || kidmilkbrand == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please select one of option available for milk brand',
                       });
       
                       return false;
                   }
                   
                   if(kidmilkbrand == '' || kidmilkbrand == undefined || kidmilkbrand == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please select one of option available for milk brand',
                       });
       
                       return false;
                   }
           
                   if(address == '' || address == undefined || address == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your address',
                       });
       
                       return false;
                   }
                                   
                   if(city == '' || city == undefined || city == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please enter your city',
                       });
       
                       return false;
                   }
                   
                   if(state == '' || state == undefined || state == null)
                   {
                       Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: 'Please select your state',
                       });
       
                       return false;
                   }
                   
                   if(status_code_email == 'new_customer_event')
                   {
                       if(password == '' || password == undefined || password == null)
                       {
                           Swal.fire({
                               icon: 'error',
                               title: 'Error',
                               text: 'Please insert password',
                           });
       
                           return false;
                       }
                       else if(password.length < 6){
                           Swal.fire({
                               icon: 'error',
                               title: 'Error',
                               text: 'Minimum length for password is 6',
                           });
       
                           return false;
                       }
       
                       if( password != confirmPassword)
                       {
                           Swal.fire({
                               icon: 'error',
                               title: 'Error',
                               text: 'Password and confirm password not match',
                           });
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
       
                   $(this).html('<i class="fas fa-spinner fa-spin"></i> Processing...')
                   $('body').find('#btnsubmit').trigger('click');
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
               
               var today = new Date();
               var currentYear = today.getFullYear();
               var maxAge = $('body').find('.year-min').val();
               var minAge =  "01/01/" + (currentYear-6);
       
               console.log("max Age = " + maxAge  + " min age = " + minAge);
       
               var selector = document.getElementById("dobChild");
               Inputmask('datetime',{
                   alias 		 :'datetime',
                   inputFormat  : "dd/mm/yyyy", 
                   outputFormat : "yyyy-mm-dd",
                   leapday: "29.02.",
                   min: minAge, 
                   max: maxAge,
               }).mask(selector);	
           });
        
       // ]]>
    </script>
 </p>