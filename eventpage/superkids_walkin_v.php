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
      	
      		
      	/** review slider css start **/
      		.ratings .star.-full.star.-full {
      			color: #f9c614;
            	}
      
      		.customer-img-review{
      			width: 100%; 
      		}
      		
      		.review-item-panel{
      			width:100%;
      		}
      		
      		.p-comment{
      			line-height:18px;
      			min-height: 90px;
      			color:#4c4c4d;
      		}
      		
      		.customer-name-comment{
      			font-weight:700;
      			margin-top:3%;
      			margin-bottom:3%;
      			color:#4c4c4d;
      		}
      		
      		.div-img-review{
      			padding-top:10px;
      		}
      		
      		.slick-slider{
      			background:unset;
      		}
      		
      		.slick-slider:before{
      			content:unset;
      		}
      		
      		.review-item-slick-slide .customer-img-review{
      			margin: unset;
      		}
      		
      		.review-item-slick-slide .star{
      			width: 14px;
      			overflow: inherit;
      		}
      		
      		.slick-dots li button:before{
      			font-size:12px;
      		}
      		
      		.review-item-slick-slide .slick-initialized .slick-slide{
      			font-size:15px;
      		}
      		
      		.mmy-superkid-slick-slide .product-image-container{
      			padding:7px;
      		}
      		
      		.mmy-webinar-date .reviewBox-calendar{
      			padding:15px;
      			position:relative;
      		}
      		
      		
      		.row-star{
      			margin-bottom: 5%;
      			margin-left: 0px;
      		}
      		
      		.slick-next:before {
      			content: '→';
      		}
      		
      		.slick-prev:before {
      			content: '←';
      		}
      		
      		.slick-prev:before, .slick-next:before {
      			font-family: 'slick';
      			font-size: 25px;
      			line-height: 1;
      			opacity: .75;
      			color: black;
      			-webkit-font-smoothing: antialiased;
      			-moz-osx-font-smoothing: grayscale;
      		}
      		
      		.slick-prev, .slick-next{
      			top:45%;
      		}
      		
      		.review-item-slick-slide .slick-prev {
      			left: -20px;
      		}
      		
      		.review-item-slick-slide .slick-next {
      			right: -14px;
      		}
      		
      		.mmy-superkid-slick-slide .slick-prev {
      			left: -25px;
      		}
      		
      		.mmy-superkid-slick-slide .slick-next {
      			right: -20px;
      		}
      		
      		.mmy-webinar-date  .slick-prev {
      			left: -25px;
      		}
      		
      		.mmy-webinar-date  .slick-next {
      			right: -20px;
      		}
      		
      	/** review slider css end **/
      -->
</style>
<!-- 
   Note:
   all the wording start with "{{ sometext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
   -->
<div class="row mb-4">
   <div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/August/Superkids/q.png" width="100%" /></div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2">
      <p class="lead my-1" style="font-weight: 600; font-size: 18px;">Parents</p>
      <hr style="margin-top: 6px; border: 2px solid;" />
   </div>
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
   <div class="col-md-6 px-2"><label for="parentdob" class="form-label required">Your Date of Birth</label> 
	<input type="text" class="form-control" id="parentdob" name="subscriber_question2" required="" style="min-width: 100%;" /> 
	<small class="error-msg"></small></div>
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
<div class="row my-2">
   <div class="col-md-12 px-2">
      <div class="row" style="margin-left: 1px;"><label class="form-label">Are you interested to receive other free gifts/samples from brands below? If yes, please select:</label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Aptaclub" id="option-milk-a" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-a" style="font-weight: 400;"> Aptaclub </label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Anmum Essential Gold" id="option-milk-b" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-b" style="font-weight: 400;"> Anmum Essential Gold </label></div>
      <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Dugro" id="option-milk-c" /> <label class="form-check-label noUniform px-3 py-1" for="option-milk-c" style="font-weight: 400;"> Dugro </label></div>
      <input type="hidden" name="subscriber_question3" class="other-milk-brand-input" />
   </div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2"><label for="address" class="form-label required">Address 1</label> <input type="text" class="form-control input-addr" id="address" name="subscriber_question4" required="" placeholder="House number &amp; Jalan" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-12 px-2"><label for="address2" class="form-label">Address 2</label> <input type="text" class="form-control input-addr2" id="address2" name="subscriber_question5" placeholder="Taman &amp; Seksyen" /> <small class="error-msg"></small></div>
</div>
<div class="row mb-2">
   <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode"><label for="postcode-address" class="form-label required">Postcode</label> <input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question7" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-4 px-2 mb-3 mb-md-1"><label for="city-address" class="form-label required">City</label> <input type="text" class="form-control addr-city" id="city-address" name="subscriber_question8" required="" /> <small class="error-msg"></small></div>
   <div class="col-md-4 px-2 mb-3 mb-md-1">
      <label for="state-address" class="form-label required">State</label>
      <select class="form-select addr-state" name="subscriber_question9" id="state-address" aria-label="" style="height: 37px;" required="">
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
<div class="div-child-section-info">
   <div class="div-child-questions">
      <div class="row mb-2">
         <div class="d-flex ">
            <div class="me-auto p-2 bd-highlight"><span style="font-weight: 600; font-size: 18px;" class="num-child-title">Child #1</span></div>
            <div class="p-2 bd-highlight"><button type="button" class="btn btn-info btn-add-child">Add</button></div>
            <div class="p-2 bd-highlight"><button type="button" class="btn btn-danger btn-del-child">Delete</button></div>
         </div>
         <hr style="margin-top: 3px; border: 2px solid;" />
      </div>
      <div class="row mb-2">
         <div class="col-md-6 px-2 div-question"><label for="" class="form-label required">Child name</label> <input type="text" class="form-control child-name-input" name="" /> <small class="error-msg"></small></div>
         <div class="col-md-6 px-2 div-question"><label for="" class="form-label required">Mykids IC</label> <input type="text" class="form-control child-ic-input" name="" /> <small class="error-msg"></small></div>
      </div>
      <div class="row mb-2">
         <div class="col-md-6 px-2 div-question"><label for="" class="form-label required">Child DOB</label> <input type="text" class="form-control child-dob child-dob-input" name="" id="" style="min-width: 100%;" /> <small class="error-msg"></small></div>
         <div class="col-md-6 px-2 div-question">
            <label for="" class="form-label required">Child gender</label>
            <select class="form-select child-gender-input" name="" style="height: 37px;">
               <option value="">Please select gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
            </select>
            <small class="error-msg"></small>
         </div>
      </div>
      <div class="row mb-2">
         <div class="col-md-6 px-2 div-question">
            <label for="" class="form-label required">Current Milk Brand</label>
            <select class="form-select current-milkbrand child-milkbrand-input" name="" style="height: 37px;">
               <option value="">Please select</option>
               {{option-listmilk}}
            </select>
            <small class="error-msg milkbrand-msg"></small>
         </div>
         <div class="col-md-6 px-2 div-question div-use-brand-question">
            <label for="currentmilkbrand" class="form-label required">How long have your child been consuming this milk brand?</label>
            <div class="input-group mb-1"><input type="number" class="form-control brand-use-input brand-year-use" placeholder="years" aria-label="years" /> <span class="input-group-text">Years</span> <input type="number" class="form-control brand-use-input brand-month-use" placeholder="months" aria-label="bulan" name="" /> <span class="input-group-text">Months</span></div>
            <input type="hidden" class="form-control duration-uses child-brand-uses-input" name="" /> <small>Duration of consuming the milk brand. E.g. 1 Year 10 Months</small> <br /> <small class="error-msg brand-usage-message"></small>
         </div>
      </div>
   </div>
</div>
<div class="row my-4">
   <div class="col-md-12 px-2">
      <div class="form-check"><input class="form-check-input noUniform" type="checkbox" value="yes" id="tnccheckbox" name="subscriber_question11" required="" /> <label class="form-check-label noUniform px-3" for="tnccheckbox"> By submitting this application, I hereby agree to the Terms &amp; Conditions and the processing of my personal data in accordance with the terms of the Privacy Policy. Motherhood.com.my may collect my personal details and use for communication purposes and other milk brand collaborations that include but are not limited to club memberships, Motherhood.com.my products, and Motherhood.com.my brands only. <br /> </label></div>
   </div>
</div>
<div class="row my-4 align-items-center"><button type="button" class="btn btn-primary btn-submit-display" style="padding-top: 10px; padding-bottom: 10px; font-size: 14px;"> Submit </button> <button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button></div>
<div class="row mt-4">
   <div class="col-md-12 text-center">
      <p style="font-size: 24px; color: #4c4c4d; font-weight: bold; line-height: 1; margin-top: 33px;">Check out what moms think about our activity box!</p>
   </div>
</div>
<div class="row my-3 review-item-slick-slide">
   <!-- ==== Start slider review==== -->
   <div class="multiple-reviews-slider" style="display: none;">
      <!-- ==== item review 1 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/sp1.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/sp1.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Thank you so much for the awesome Superkids Club Activity Box, what a lovely surprise. The kids are so excited and happy. Thank you Motherhood.com.my</p>
                        <div class="text-left customer-name-comment">Suk Teng Leong</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 2 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Rashidah.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Rashidah.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Terima kasih Motherhood atas hadiah Superkids Club Activity Box. Anak teruja dan seronok dapat hadiah!</p>
                        <div class="text-left customer-name-comment">Rashidah Abdu Rahim</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 3 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Liew-Soo-Hui.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Liew-Soo-Hui.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">My child is super excited to receive this Superkids Club Activity Box! There are body wash, oral aid, nappy cream, and toys for sensory play. He learn and play using all the products inside. Thank you for sending us such a creative activity box!</p>
                        <div class="text-left customer-name-comment">Liew Soo Hui</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 4 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nur-Hidayah.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nur-Hidayah.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Thank you motherhood for this awesome box that fully of entertainment &amp; joy for my son!</p>
                        <div class="text-left customer-name-comment">Nur Hidayah Binti Mohd Nazri</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 5 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Mary-Joyce-Medina.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Mary-Joyce-Medina.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">First thank you for the free activity box. As soon as my daughter sees the box, she was so excited to unbox and dig everything.. She love it, especially the flash cards that come with it.</p>
                        <div class="text-left customer-name-comment">Mary Joyce Medina</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 6 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nurul-Asma.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nurul-Asma.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Anak umur 2y 5m mmg seronok sbb ada alphabet card tu. Brg2 yg ada dalam tu pon best boleh guna semuanya</p>
                        <div class="text-left customer-name-comment">Nurul Asma</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 7 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Cyrena-deosing2.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Cyrena-deosing2.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">terima kasih motherhood... semua barangan dalam kotak saya suka dan anak pun gembira.</p>
                        <div class="text-left customer-name-comment">Cyrena deosing</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 8 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Pick-Yee-Chen.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Pick-Yee-Chen.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row row-star">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Thanks for the free gifts! Only need to pay for the shipping fees! My kids like the activities box so much!</p>
                        <div class="text-left customer-name-comment">Pick Yee Chen</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== item review 9 ==== -->
      <div class="row review-item">
         <div class="col-sm-12">
            <div class="card review-item-panel">
               <div class="row">
                  <div class="col-md-3 col-12">
                     <div class="div-img-review" style="padding-top: 10px;"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nik+Nor+Izyanty+Che+Mazlan.png"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nik+Nor+Izyanty+Che+Mazlan.png" class="img-fluid customer-img-review" /> </a></div>
                  </div>
                  <div class="col-md-9 col-12" style="padding-left: 10px !important;">
                     <div class="card-body" style="padding-top: 5px;">
                        <div class="row" style="margin-bottom: 2px; margin-left: 0px;">
                           <div class="ratings">
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                              <span class="star">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 46.93 44.88" style="enable-background: new 0 0 46.93 44.88;" xml:space="preserve">
                                    <style type="text/css">
                                       <!--
                                          .st0{fill:#F7DC04;}
                                          -->
                                    </style>
                                    <path class="st0" d="M13.14,44.37c-2.83,1.46-6.13-0.93-5.61-4.08c0.44-2.66,0.87-5.16,1.35-7.65c0.51-2.63-0.08-4.61-2.1-6.46
                                       c-1.9-1.75-3.74-3.55-5.64-5.45c-2.24-2.24-0.99-6.07,2.13-6.57c2.58-0.41,5.04-0.78,7.51-1.02c2.94-0.29,4.69-1.61,5.89-4.18
                                       c1.05-2.24,2.14-4.47,3.3-6.8c1.43-2.87,5.53-2.87,6.95,0.01c0.94,1.9,1.83,3.75,2.63,5.62c1.48,3.44,3.58,5.35,7.55,5.59
                                       c2.15,0.13,4.28,0.43,6.55,0.81c3.13,0.52,4.36,4.35,2.1,6.59c-1.63,1.62-3.22,3.15-4.89,4.58c-2.79,2.4-3.58,5.01-2.8,8.54
                                       c0.46,2.11,0.84,4.25,1.2,6.47c0.51,3.14-2.78,5.53-5.61,4.07c-1.77-0.92-3.49-1.82-5.18-2.75c-3.17-1.75-7.03-1.75-10.21-0.02
                                       C16.62,42.56,14.93,43.45,13.14,44.37z"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                        <p class="card-text text-left p-comment">Thank you for giving us a lot of goodies inside the Superkids Club Activity Box. My kids had so much fun playing with the flash card. So many benefit inside the box.</p>
                        <div class="text-left customer-name-comment">Nik Nor Izyanty Che Mazlan</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== end item review 9 ==== -->
   </div>
   <!-- ==== End slider review==== -->
</div>
<div class="row mt-5">
   <div class="col-md-12 text-center">
      <p style="font-size: 24px; color: #4c4c4d; font-weight: bold; line-height: 1;">Join The #MotherhoodSuperKid Family</p>
   </div>
</div>
<div class="row mmy-superkid-slick-slide" style="padding-left: 10px; padding-right: 10px;">
   <div class="multiple-img-slider" style="display: none;">
      <div class="product-container ">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/1.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/1.jpg" alt="testimonials_1" title="testimonials_1" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/2.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/2.jpg" alt="testimonials_2" title="testimonials_2" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/3.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/3.jpg" alt="testimonials_3" title="testimonials_3" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/4.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/4.jpg" alt="testimonials_4" title="testimonials_4" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/5.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/5.jpg" alt="testimonials_5" title="testimonials_5" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/6.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/6.jpg" alt="testimonials_6" title="testimonials_6" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/7.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/7.jpg" alt="testimonials_7" title="testimonials_7" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/8.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/8.jpg" alt="testimonials_8" title="testimonials_8" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/9.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/9.jpg" alt="testimonials_9" title="testimonials_9" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/10.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/10.jpg" data-src="" alt="testimonials_10" title="testimonials_10" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/11.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/11.jpg" alt="testimonials_11" title="testimonials_11" itemprop="image" /> </a></div>
      </div>
      <div class="product-container">
         <div class="product-image-container"><a class="pop-out-img" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/12.jpg"> <img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/12.jpg" alt="testimonials_12" title="testimonials_12" /> </a></div>
      </div>
   </div>
</div>
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
      	var eventID 	    = 143;
      	
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
      							alert("You have registered. System will redirect to redeemption page. Thank you");
      							
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
      	
      	var hndle_content_childinfo = function(){
      		var countnum = 1;
      		var numchilddiv = $('body').find('.div-child-questions').length;
      		
      		if(numchilddiv > 0)
      		{
      			$('.div-child-questions').each(function(indx, ele){
      				$(ele).find('.num-child-title').html('Child #' + countnum);
      				$(ele).closest('.div-question').find(errorSelector).html("");
      				$(ele).closest('.div-question').removeClass('is-invalid');
      				var child_input_name  		= '';
      				var child_input_ic    		= '';
      				var child_input_dob   		= '';
      				var child_input_gender 		= '';
      				var child_input_milkbrand 	= '';
      				var child_input_branduses 	= '';
      				
      				if(countnum == 1)
      				{
      					child_input_name  		= 'subscriber_question12';
      					child_input_ic    		= 'subscriber_question13';
      					child_input_dob   		= 'subscriber_question14';
      					child_input_dobid   	= 'childdob1';
						child_input_gender 		= 'subscriber_question15';
      					child_input_milkbrand 	= 'subscriber_question16';
      					child_input_branduses 	= 'subscriber_question17';
						
      				}
      				else if(countnum == 2)
      				{
      					child_input_name  		= 'subscriber_question18';
      					child_input_ic    		= 'subscriber_question19';
      					child_input_dob   		= 'subscriber_question20';
						child_input_dobid   	= 'childdob2';
      					child_input_gender 		= 'subscriber_question21';
      					child_input_milkbrand 	= 'subscriber_question22';
      					child_input_branduses 	= 'subscriber_question23';
      				}
      				else if(countnum == 3)
      				{
      					child_input_name  		= 'subscriber_question24';
      					child_input_ic    		= 'subscriber_question25';
      					child_input_dob   		= 'subscriber_question26';
						child_input_dobid   	= 'childdob3';
      					child_input_gender 		= 'subscriber_question27';
      					child_input_milkbrand 	= 'subscriber_question28';
      					child_input_branduses 	= 'subscriber_question29';
      				}
      				
      				$(ele).find('.child-name-input').attr('name', child_input_name);
      				$(ele).find('.child-ic-input').attr('name', child_input_ic);
      				$(ele).find('.child-dob-input').attr('name', child_input_dob);
      				$(ele).find('.child-dob-input').attr('id', child_input_dobid);
      				$(ele).find('.child-gender-input').attr('name', child_input_gender);
      				$(ele).find('.child-milkbrand-input').attr('name', child_input_milkbrand);
      				$(ele).find('.child-brand-uses-input').attr('name', child_input_branduses);
					
					dobval = $(ele).find('.child-dob-input').val();
					
					if(dobval == '')
					{
						var selectorchildDOb = document.getElementById(child_input_dobid);
						Inputmask('datetime',{
							alias 		 :'datetime',
							inputFormat  : "dd/mm/yyyy", 
							outputFormat : "dd/mm/yyyy",
							separator: '/',
							leapday: "29/02/",
						}).mask(selectorchildDOb);
					}
      				
      				++countnum;
      			});
      		}
      	}
      	
      	// function to manage enable and disabled add/remove button
      	var calc_childinfo = function(){
      		var numchilddiv = $('body').find('.div-child-questions').length;
      		
      		// handle delete button 
      		if(numchilddiv == 1)
      		{
      			$('body').find('.btn-del-child').attr('disabled', true);
      		}
      		else
      		{
      			$('body').find('.btn-del-child').attr('disabled', false);
      		}
      		
      		// handle add button
      		if(numchilddiv >= 3)
      		{
      			$('body').find('.btn-add-child').attr('disabled', true);
      		}
      		else
      		{
      			$('body').find('.btn-add-child').attr('disabled', false);
      		}
      	}
      	
      	var validateMonthUse = function(year_val, month_val, milkbrand_val){
      		var res     = {};
      		var month   = month_val;
      		var year    = year_val;
      		var milkopt = milkbrand_val;
      		if(month == '')
      			month = 0;
      		
      		if(year == '')
      			year = 0;
      		
      		month = parseInt(month);
      		year = parseInt(year);
      		
      		console.log("milkopt" + milkopt);
      		if(milkopt != 'Others' && milkopt != 'Not consuming any milk' && milkopt != '')
      		{
      			if(month <= 0 && year <= 0)
      			{
      				res['status'] 	   = false;
      				res['status_code'] = 'year_month_empty';
      				res['msg']    	   = 'Please enter years and months';
      				
      				return res;
      			}
      			
      			if(year > 10)
      			{
      				res['status'] 	   = false;
      				res['status_code'] = 'year_exceed';
      				res['msg']    	   = 'Years not more than 10';
      				
      				return res;
      			}
      			
      			
      			if(month > 11)
      			{
      				res['status'] 	   = false;
      				res['status_code'] = 'month_exceed';
      				res['msg']    	   = 'Months not more than 11';
      				
      				return res;
      			}
      		}
      		else if(milkopt == '')
      		{
      			res['status'] 	   = false;
      			res['status_code'] = 'milkbrand_empty';
      			res['msg']    	   = 'Please select current milk brand';
      			
      			return res;
      		}
      		
      		
      		res['status'] 	   = true;
      		res['status_code'] = 'succeed';
      		res['msg']   	   = ''
      		
      		return res;
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
				separator: '/',
				leapday: "29/02/",
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
				$('body').find('#btn-submit-form1').attr('disbaled', true);
      			$('body').find('#btn-submit-form1').html('<i class="fas fa-spinner fa-pulse"></i> Processing...');
      		});
      	
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
      			var location_redeem 	= $('body').find('#location-redeem').val();
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
      			
      			// if(currentmilkbrand == '' || currentmilkbrand == null || currentmilkbrand == undefined)
      			// {
      				// $('body').find('#currentmilkbrand').addClass('is-invalid');
      				// $('body').find('#currentmilkbrand').closest('div').find(errorSelector).html(icon + " Please select option of milk brand");
      				
      				// flagcheck = false;
      			// }
      			
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
      			
      			// if(location_redeem == '' || location_redeem == null || location_redeem == undefined)
      			// {
      				// $('body').find('#location-redeem').addClass('is-invalid');
      				// $('body').find('#location-redeem').closest('div').find(errorSelector).html(icon + " Please select location redeem");
      				
      				// flagcheck = false;
      			// }
      			
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
      			
      			var numchilddiv = $('body').find('.div-child-questions').length;
      			if(numchilddiv > 0)
      			{
      				$('.div-child-questions').each(function(indx, ele){
      					
      					var childname 			 = $(ele).find('.child-name-input').val();
      					var childic   			 = $(ele).find('.child-ic-input').val();
      					var childob   			 = $(ele).find('.child-dob-input').val();
      					var childgender 		 = $(ele).find('.child-gender-input').val();
      					var childmilkbrand  	 = $(ele).find('.child-milkbrand-input').val();
      					var childbranduses  	 = $(ele).find('.child-brand-uses-input').val();
      					var childbranduses_year  = $(ele).find('.brand-year-use').val();
      					var childbranduses_month = $(ele).find('.brand-month-use').val();
      					
      					if(childname == '')
      					{
      						$(ele).find('.child-name-input').addClass('is-invalid');
      						$(ele).find('.child-name-input').closest('.div-question').find(errorSelector).html(icon + " Please insert child name");
      						
      						flagcheck = false;
      					}
      					
      					if(childic == '')
      					{
      						$(ele).find('.child-ic-input').addClass('is-invalid');
      						$(ele).find('.child-ic-input').closest('.div-question').find(errorSelector).html(icon + " Please insert child mykids ic");
      						
      						flagcheck = false;
      					}
      					
      					if(childob == '')
      					{
      						$(ele).find('.child-dob-input').addClass('is-invalid');
      						$(ele).find('.child-dob-input').closest('.div-question').find(errorSelector).html(icon + " Please insert child DOB");
      						
      						flagcheck = false;
      					}
      					
      					if(childgender == '')
      					{
      						$(ele).find('.child-gender-input').addClass('is-invalid');
      						$(ele).find('.child-gender-input').closest('.div-question').find(errorSelector).html(icon + " Please select child gender");
      						
      						flagcheck = false;
      					}
      					
      					if(childmilkbrand == '')
      					{
      						$(ele).find('.child-milkbrand-input').addClass('is-invalid');
      						$(ele).find('.child-milkbrand-input').closest('.div-question').find(errorSelector).html(icon + " Please select child milk brand option");
      						
      						flagcheck = false;
      					}
      					else
      					{
      						if(childmilkbrand != 'Not consuming any milk')
      						{
      							if(childbranduses_year == '')
      								childbranduses_year = 0;
      							
      							if(childbranduses_month == '')
      								childbranduses_month = 0;
      							
      							childbranduses_year  = parseInt(childbranduses_year);
      							childbranduses_month = parseInt(childbranduses_month);
      							
      							if(childbranduses_year <= 0 && childbranduses_month <= 0)
      							{
      								$(ele).find('.brand-use-input').addClass('is-invalid');
      								$(ele).find('.brand-use-input').closest('.div-question').find(errorSelector).html(icon + " Please insert the duration");
      								
      								flagcheck = false;
      							}
      							
      							if(childbranduses_year > 10)
      							{
      								$(ele).find('.brand-use-input').addClass('is-invalid');
      								$(ele).find('.brand-use-input').closest('.div-question').find(errorSelector).html(icon + " Please insert years cannot more than 10 years");
      								
      								flagcheck = false;
      							}
      							
      							if(childbranduses_month > 11)
      							{
      								$(ele).find('.brand-use-input').addClass('is-invalid');
      								$(ele).find('.brand-use-input').closest('.div-question').find(errorSelector).html(icon + " Please insert years cannot more than 11 months");
      								
      								flagcheck = false;
      							}
      							
      						}
      					}
      					
      					// ++countnum;
      				});
      			}
      			
      			if(flagcheck == false)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Oops...',
      					text: 'Required input has validation error',
      				});
      				
      				$('body').find(".is-invalid:first").focus()
					$('body').find('#btn-submit-form1').attr('disbaled', false);
      				return false;
      			}
      			
      			if(!tncchecked)
      			{
      				Swal.fire({
      					icon: 'error',
      					title: 'Error',
      					text: 'Please tick box to indicate you have read and understand our term and condition',
      				});
      				
					$('body').find('#btn-submit-form1').attr('disbaled', false);
					
      				return false;
      			}
      			
      			if(flagcheck)
      			{
      				$(this).html('<i class="fas fa-spinner fa-spin"></i> Processing...')
      				$('body').find('#btnsubmit').trigger('click');
      			}
      		});
      		
      		calc_childinfo();
      		hndle_content_childinfo();
      		$('body').on('click', '.btn-add-child', function(){
      			var medivchild = $(this).closest('.div-child-questions').clone();
      			medivchild.find('input:text').val("");
      			medivchild.find('.child-dob').val("");
      			medivchild.find('.brand-year-use').val("");
      			medivchild.find('.brand-month-use').val("");
      			$('body').find('.div-child-section-info').append(medivchild)
      			hndle_content_childinfo();
      			calc_childinfo();
      		});
      		
      		$('body').on('click', '.btn-del-child', function(){
      			$(this).closest('.div-child-questions').remove();
      			hndle_content_childinfo();
      			calc_childinfo();
      		});
      		
      		$('body').on('blur', '.brand-use-input', function(){
      			var year    = $(this).closest('.div-use-brand-question').find('.brand-year-use').val();
      			var month   = $(this).closest('.div-use-brand-question').find('.brand-month-use').val();
      			var milkopt = $(this).closest('.div-child-questions').find('.current-milkbrand').val();
      			
      			$(this).closest('.div-child-questions').find('.brand-usage-message').html("");
      			$(this).closest('.div-use-brand-question').find('.error-msg').html("");
      			console.log("year" + year + " month" + month + " milkopt" + milkopt);
      			var res = validateMonthUse(year, month, milkopt);
      			
      			if(res.status == true && milkopt != 'Not consuming any milk')
      			{
      				if(milkopt == 'Not consuming any milk')
      				{
      					$(this).closest('.div-child-questions').find('.brand-year-use').val("");
      					$(this).closest('.div-child-questions').find('.brand-month-use').val("");
      				}
      				else{
      					var durationHtml = "";
      					if(year > 0)
      					{
      						if(year == 1)
      						{
      							durationHtml += year + " year ";
      						}
      						else
      						{
      							durationHtml += year + " years ";
      						}
      						
      					}
      					
      					if(month > 0)
      					{
      						if(month == 1)
      						{
      							durationHtml += month + " month";
      						}
      						else
      						{
      							durationHtml += month + " months";
      						}
      					}
      					$(this).closest('.div-child-questions').find('.duration-uses').val(durationHtml);
      				}
      			}
      			else(res.status == false)
      			{
      				if(res.status_code == 'milkbrand_empty')
      				{
      					$(this).closest('.div-child-questions').find('.current-milkbrand').addClass('is-invalid')
      					$(this).closest('.div-child-questions').find('.milkbrand-msg').html(res.msg)
      				}
      				else
      				{
      					$(this).closest('.div-use-brand-question').find('.error-msg').html(res.msg);
      				}
      			}
      			
      		});
      		
      		$('body').on('change', '.current-milkbrand', function(){
      			var year    = $(this).closest('.div-child-questions').find('.brand-year-use').val();
      			var month   = $(this).closest('.div-child-questions').find('.brand-month-use').val();
      			var milkopt = $(this).val();
      			$(this).removeClass('is-invalid');
      			$(this).closest('.div-child-questions').find('.milkbrand-msg').html("")
      			
      			console.log("year" + year + " month" + month + " milkopt" + milkopt);
      			var res = validateMonthUse(year, month, milkopt);
      			
      			$(this).closest('.div-child-questions').find('.duration-uses').val("");
      			if(res.status == true)
      			{
      				if(milkopt == 'Not consuming any milk')
      				{
      					$(this).closest('.div-child-questions').find('.brand-year-use').val("");
      					$(this).closest('.div-child-questions').find('.brand-month-use').val("");
      				}
      				else{
      					var durationHtml = "";
      					if(year > 0)
      					{
      						if(year == 1)
      						{
      							durationHtml += year + " year ";
      						}
      						else
      						{
      							durationHtml += year + " years ";
      						}
      						
      					}
      					
      					if(month > 0)
      					{
      						if(month == 1)
      						{
      							durationHtml += month + " month";
      						}
      						else
      						{
      							durationHtml += month + " months";
      						}
      					}
      					
      					$(this).closest('.div-child-questions').find('.duration-uses').val(durationHtml);
      				}
      			}
      			else if(res.status == false)
      			{
      				if(res.status_code == 'milkbrand_empty')
      				{
      					$(this).addClass('is-invalid')
      					$(this).closest('.div-child-questions').find('.milkbrand-msg').html(res.msg)
      				}
      				else
      				{
      					$(this).closest('.div-child-questions').find('.brand-usage-message').html(res.msg);
      				}
      			}
      		});
      		
      		$('body').find('.multiple-reviews-slider').slick({
      			infinite: true,
      			slidesToShow: 2,
      			slidesToScroll: 2,
      			dots: true,
      			adaptiveHeight:true,
      			responsive: [
      			{
      				breakpoint: 600,
      				settings: {
      					slidesToShow: 1,
      					slidesToScroll: 1,
      					dots: true,
      					adaptiveHeight:true,
      					arrows:false,
      				}
      			}]
      		});
      		$('body').find('.multiple-reviews-slider').show();
      		
      		$('body').find('.multiple-img-slider').slick({
      			infinite: true,
      			slidesToShow: 4,
      			slidesToScroll: 4,
      			dots: true,
      			adaptiveHeight:true,
      			responsive: [
      			{
      				breakpoint: 600,
      				settings: {
      					slidesToShow: 2,
      					slidesToScroll: 2,
      					dots: true,
      					adaptiveHeight:true,
      					arrows:false,
      				}
      			}]
      		});
      		$('body').find('.multiple-img-slider').show();
			
			
		});
        
       
       
       
      // ]]>
   </script>
</p>