<style>
   <!--
      .wrapper {
                  		width: 100%;
                  	}
                  			 
                  	section {
                  		width: 100%;
                  		float: left;
                  		margin: 0 2%;
                  	}
                  			 
                  	input[type="checkbox"] {
                  		position: relative;
                  		top: 1px;
                  	}
                  			 
                  	.isSelected {
                  		background-color: lightgreen;
                  	}
                  			 
                  	div.checker{
                  		height:0!IMPORTANT;
                  	}
                  	  
                  	div.checker span{
                  		background-image:none!IMPORTANT;
                  	}
                  		
                  	.label-custom{
                  		display: block;
                  		padding: 5px 10px;
                  		margin: 5px 0;
                  		font: Arial, sans-serif;
                  		background-color: white;
                  		border:1px solid #d6d4d4;
                  		border-radius: 7px;
                  		color:grey;
                  		font-size:1.6em!IMPORTANT;
                  		font-weight:lighter!IMPORTANT;
                  		text-align: left;
                  		padding-left: 20px;
                  		padding-top: 10px;
                  		padding-bottom: 10px;
                  		font-size: 1.1em !important;
                  		line-height: 10px;
                  	}
                  		
                  	.label-custom:hover{
                  		background-color: #ededed;
                  		cursor: pointer;
                  	}
                  	  
                  	.label-form-kapitan{
                  		display: inline-block;
                  		max-width: 100%;
                  		margin-bottom: 5px;
                  		font-weight: 700; 
                  	}
                  	  
                  	.btn-step1{
                  		background-color: #38a7ac;
                  		color: #fff;
                  		font-size: 18px;
                  		border-radius: 4px;
                  		padding: 8px 40px;
                  		min-width: 300px;
                  	}
                    
                  	.btn-step1:hover, .btn-step1:focus{
                  		background-color: #1C6F74;
                  		color: white;
                  	}
                  	
                  	.btn-step1[disabled], .btn-step1[disabled]:hover{
                  		background-color: #38a7ac87 !important;
                  	}
                  	  
                  	.question-font{
                  		color: #4c4c4d;
                  		font-size: 1.6em;
                  		padding-left: 15px;
                  	}
                  	
                  	.question-welcomekit{
                  		padding-right: 5px; 
                  		padding-left: 5px; 
                  		padding-top: 5px;
                  	}
                  	
                  	.tnc-word-color{
                  		color:#b4b3b4;
                  	}
                  		
                  	.main-title-color{
                  		color: #4c4c4d;
                  	}
                  	
                  	.has-error-validation{
                  		border: solid 2px #f90012 !important;
                  	}
                  	
                  	.error-msg{
                  		color:#f90012;
                  		font-size: 12px;
                  	}
                  	
                  	.question-welcomekit .form-control{
                  		background-color:white;
                  	}
                  	
                  	.benefit-div{
                  		min-height:240px;
                  	}
                  	
                  	.motherhood-title{
                  		font-size:30px;
                  		margin-bottom: 35px;
                  	}
                  	
                  	.benefit-title{
                  		font-size:17px;
                  	}
                  	
                  	.benefit-desc{
                  		font-size:13px;
                  	}
                  	
                  	.row-btn-next{
                  		padding-top:20px;
                  	}
                  	
                  	@media only screen and (max-width: 600px){
                  		.benefit-div{
                  			min-height:188px;
                  		}
                  		
                  		.motherhood-title{
                  			font-size:19px;
                  			margin-bottom: 20px;
                  		}
                  		
                  		.benefit-title, .benefit-desc{
                  			font-size:10px;
                  		}
                  		
                  		.row-btn-next{
                  			padding-top:5px;
                  		}
                  	}
      -->
</style>
<div class="main-div-nemum">
   <div class="row step1">
      <div class="container" style="position: relative; text-align: center;">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/logo-nm.png" alt="newmom logo" width="30%" />
         <div class="col-md-12" style="padding-right: 23px;">
            <div class="row" style="margin-top: 25px;">
               <div class="col-md-12">
                  <p style="font-size: 20px; margin-top: 15px; font-weight: bold; line-height: 20px;">Sign up now and receive exclusive privileges on your parenting journey!</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="margin-top: 30px;">
                  <div class="col-md-offset-2 col-md-4 col-xs-12" style="margin-bottom: 10px;"><button class="btn btn-default btn-step1 step1btnv1" data-typepregnancy="pregnant" data-formstep="1"> Pregnant </button></div>
                  <div class="col-md-3 col-xs-12"><button class="btn btn-default btn-step1 step1btnv1" data-typepregnancy="babyOut" data-formstep="2"> New Mom </button></div>
                  <input type="hidden" name="subscriber_question4" id="subscriber_question4" style="margin-bottom: 10px;" /><!-- input for type of preganancy -->
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <!-- Step 2 version 1 pregnant-->
   <div class="row step2v1" style="display: none; background-size: cover; background-position: top center; background-repeat: no-repeat; padding-top: 20px; padding-bottom: 20px;">
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      <div class="col-md-12" style="margin-top: 20px;" align="center">
         <p style="font-weight: bold;" class="main-title-color motherhood-title">Motherhood New Mom Privilege</p>
         <div class="row">
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b4.png" width="100%" alt="flashcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Parentcraft Online Class</p>
                  <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Get 50% off to prepare for your pregnancy journey</p>
               </div>
            </div>
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b1+new.png?v=1" width="100%" alt="newmomcardandgiftcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Free Membership &amp; Welcome Gift</p>
                  <p style="font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1; min-height: 10px;" class="tnc-word-color benefit-desc">RM20 Gift Card + 5% Discount + limited edition flashcard</p>
               </div>
            </div>
            <!--
               <div class="col-md-3 col-xs-3">
                  <div class="benefit-div">
                     <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b2.png" width="100%" alt="flashcard" />
                     <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Mom to be Free Gift</p>
                     <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1; min-height: 10px;" class="tnc-word-color benefit-desc">Get limited-edition flashcards</p>
                  </div>
               </div>
               -->
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b3.png" width="100%" alt="enfamama" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title"><span style="color: fc439f;">FREE</span> Enfamama A+ Sample!*</p>
                  <p style="font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Refer to T&amp;C</p>
               </div>
            </div>
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/huggies-benefit.png" width="100%" alt="flashcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Free Huggies Natural Soft Diaper</p>
                  <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Refer to T&amp;C</p>
               </div>
            </div>
            <!--
               <div class="col-md-4 col-xs-6">
               <div class="benefit-div">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/tips.png" width="100%" alt="newmomcardandgiftcard" />
               <p style="font-size: 17px; font-weight: bold; padding-top: 20px; padding-bottom: 0px; line-height: 1; min-height: 53px;" class="main-title-color">#NewMom Tips & Tricks</p>
               <p style="font-size: 13px; font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color">Malaysian moms get real about what motherhood is really like</p>
               </div>
               </div>
               <div class="col-md-4 col-xs-6">
               <div style="min-height: 170px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/lucky-draw.png" width="100%" alt="newmomluckydraw" />
               <p style="font-size: 17px; font-weight: bold; padding-top: 20px; padding-bottom: 0px; line-height: 1; min-height: 53px;" class="main-title-color">Monthly Lucky Draw</p>
               <p style="font-size: 13px; font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color">1 lucky new mum will be selected monthly to win attractive prizes!</p>
               </div>
               </div>
               -->
         </div>
         <div class="row"></div>
      </div>
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      <div class="col-md-12 text-center row-btn-next"><button type="button" class="btn btn-default btn-step1 step2btnv1"> Next </button></div>
      <div class="clearfix"></div>
      <div class="tnc-word-color" style="margin-top: 30px; padding: 70px 20px 20px 20px; display: inline-block;">
         <div class="col-md-6" style="text-align: left;">
            <p style="font-size: 2em; font-weight: bold;">FAQs</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I apply for a New Mom member card?<br /> A: Complete our online registration form (click &ldquo;NEXT&rdquo; to fill up the form) to enjoy exclusive member benefits.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: Can I register again if I am already a member?<br /> A: This programme is reserved for new users ONLY.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: Can I apply for the programme if I am not a Malaysian citizen?<br /> A: Yes, all moms and dads are welcomed to join the programme.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How much is the New Mom Program fee?<br /> A: Our New Mom gift set is FREE (excluding shipping fee of RM5.50).</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I redeem the free gift(s)?<br /> A: A step-by-step instruction will appear on the page after you have filled up your details accordingly.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How long does it take to deliver my gift(s)?<br /> A: About 3&ndash;7 working days upon verification.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: What are the benefits of having a New Mom member card?<br /> A: Learn more about our New Mom member card benefits here: www.motherhood.com.my/membersprivilege</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: When will my New Mom member card expire?<br /> A: The expiration date for an inactive New Mom member card is TWO (2) months upon activation.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I renew my New Mom member card?<br /> A: Spend a min. of RM100 on Motherhood.com.my and your card will be auto-converted to a 1-year membership.</p>
         </div>
         <div class="col-md-6" style="text-align: left;">
            <p style="font-size: 2em; font-weight: bold;">Terms &amp; Conditions</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- For Enfamama A+ sample request, I agree that Mead Johnson Nutrition (Malaysia) Sdn Bhd (&ldquo;MJN&rdquo;), Reckitt Benckiser (Malaysia) Sdn Bhd and/or its affiliates (collectively, &ldquo;RB&rdquo;) and/or any third party under contract with MJN or RB, may contact me from time to time, by telephone, mail, or other electronic <span id="seeMore1" style="font-weight: bold;"> see more </span> <span id="seeMoreContent1" style="display: none;"> means to market/promote/sell MJN and/or RB products and services and/or information related to Enfamama A+ Club (collectively referred to as &ldquo;Purpose&rdquo;). I agree the collection and use of my information by MJN and/or RB is in accordance with the Privacy Policy that I have read and understood. I have the option to withdraw at any time from receiving calls, SMS, mail, or other electronic communications about information related to the Purpose.</span></p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Only pregnant moms are eligible to receive Enfamama A+ samples.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Each registered family is entitled to receive ONE (1) New Mom gift set (includes RM20 cash voucher, New Mom member card, limited-edition flashcards, special VIP invites). Multiple registrations from the same family will be disqualified.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Gifts may vary depend on the availability.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Motherhood.com.my will not be responsible nor liable for unsuccessful registrations due to interruptions in internet connectivity.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Motherhood.com.my reserves the right to alter, cancel, terminate, or suspend an application and/or any part thereof without any liability and prior notice at any time upon its sole and absolute discretion.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Registrations will only be accepted with the FULL postal address provided.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Incomplete registration forms will not be accepted.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Only pregnant moms are eligible for the Lucky Draw. Participants who successfully sign up, complete the purchase of the new mom gift set and pay the associated shipping fee at the checkout page.will be automatically eligible for the Lucky Draw. Kindly visit <a href="https://bit.ly/3sEWTj5" target="_blank"> https://bit.ly/3sEWTj5 </a> for full T&Cs.</p>
         </div>
      </div>
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
   </div>
   <!-- Extra Cord Blood question Pregnant page 3-->
   <div class="row step3v1" style="display: none; padding-top: 20px; padding-bottom: 20px;">
      <div class="row">
         <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
         <div class="col-md-8 text-left" style="margin-top: 50px;">
            <div class="row" style="margin-bottom: 15px;">
               <p class="question-font">Have you&nbsp;considered&nbsp;banking your baby's precious cord blood?&nbsp;Are you interested to learn more about cord blood banking?</p>
               <div class="col-md-6"><label class="label-custom lblcordblood"> <input type="radio" name="subscriber_question12" class="cordblood maincordblood" value="Yes" required="" />Yes </label></div>
               <div class="col-md-6"><label class="label-custom lblcordblood"> <input type="radio" name="subscriber_question12" class="cordblood" value="No" />No </label></div>
               <small class="cord-msg" style="padding-left: 15px; display: none;">By selecting "yes", you acknowledge and provide your consent to Cyrocord to contact you via phone call regarding to cord blood banking.</small>
            </div>
            <div class="row">
               <p class="question-font">Are you planning to deliver at a private or government hospital?</p>
               <div class="col-md-6"><label class="label-custom lblhospquest"> <input type="radio" name="subscriber_question13" class="hospitalquestion mainhospitalquestion" value="PRIVATE" required="" />Private </label></div>
               <div class="col-md-6"><label class="label-custom lblhospquest"> <input type="radio" name="subscriber_question13" class="hospitalquestion" value="GOVERNMENT" />Government </label></div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center" style="padding-top: 20px;"><button type="button" id="step3btn" class="btn btn-default btn-step1 step3btn"> Next </button></div>
      </div>
   </div>
   <!-- Step 2 version 2 new mom option-->
   <div class="row step2v2" style="display: none; padding-top: 20px; padding-bottom: 20px;">
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      <div class="col-md-12" style="margin-top: 20px;" align="center">
         <p style="font-weight: bold;" class="main-title-color motherhood-title">Motherhood New Mom Privilege</p>
         <div class="row">
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b4.png" width="100%" alt="flashcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Parentcraft Online Class</p>
                  <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Get 50% off to prepare for your pregnancy journey</p>
               </div>
            </div>
            <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b1+new.png?v=1" width="100%" alt="newmomcardandgiftcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Free Membership &amp; Welcome Gift</p>
                  <p style="font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1; min-height: 10px;" class="tnc-word-color benefit-desc">RM20 Gift Card + 5% Discount + limited edition flashcard</p>
               </div>
            </div>
            <!--
               <div class="col-md-3 col-xs-3">
                  <div class="benefit-div">
                     <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b2.png" width="80%" alt="flashcard" />
                     <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Mom to be Free Gift</p>
                     <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1; min-height: 10px;" class="tnc-word-color benefit-desc">Get limited-edition flashcards</p>
                  </div>
               </div>
               
               <div class="col-md-3 col-xs-3">
               <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/huggies-benefit.png" width="100%" alt="flashcard" />
                  <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title">Free Huggies Natural Soft Diaper</p>
                  <p style="font-weight: normal; padding-top: 0px; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Refer to T&C</p>
               </div>
               </div>
               
               <div class="col-md-3 col-xs-3">
                  <div class="benefit-div">
                     <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/b3.png" width="100%" alt="" />
                     <p style="font-weight: bold; padding-top: 10px; padding-bottom: 0px; line-height: 1; min-height: 50px;" class="main-title-color benefit-title"><span style="color: fc439f;">FREE</span> Enfamama A+ Sample!*</p>
                     <p style="font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color benefit-desc">Refer to T&C</p>
                  </div>
               </div>
               
                  <div class="col-md-4 col-xs-6">
                  <div class="benefit-div">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/tips.png" width="100%" alt="newmomcardandgiftcard" />
                  <p style="font-size: 17px; font-weight: bold; padding-top: 20px; padding-bottom: 0px; line-height: 1; min-height: 53px;" class="main-title-color">#NewMom Tips & Tricks</p>
                  <p style="font-size: 13px; font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color">Malaysian moms get real about what motherhood is really like</p>
                  </div>
                  </div>
                  <div class="col-md-4 col-xs-6">
                  <div style="min-height: 170px;">
                  <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/lucky-draw.png" width="100%" alt="newmomluckydraw" />
                  <p style="font-size: 17px; font-weight: bold; padding-top: 20px; padding-bottom: 0px; line-height: 1; min-height: 53px;" class="main-title-color">Monthly Lucky Draw</p>
                  <p style="font-size: 13px; font-weight: normal; padding-top: 0; padding-bottom: 0px; line-height: 1;" class="tnc-word-color">1 lucky new mum will be selected monthly to win attractive prizes!</p>
                  </div>
                  </div>
                  -->
         </div>
      </div>
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      <div class="col-md-12 text-center" style="padding-top: 20px;"><button type="button" class="btn btn-default btn-step1 step2btn"> Next </button></div>
      <div class="clearfix"></div>
      <div class="tnc-word-color" style="margin-top: 30px; padding: 70px 20px 20px 20px; display: inline-block; background: white; background-size: cover; background-position: top center; background-repeat: no-repeat;">
         <div class="col-md-6" style="text-align: left;">
            <p style="font-size: 2em; font-weight: bold;">FAQs</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I apply for a New Mom member card?<br /> A: Complete our online registration form (click &ldquo;NEXT&rdquo; to fill up the form) to enjoy exclusive member benefits.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: Can I register again if I am already a member?<br /> A: This programme is reserved for new users ONLY.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: Can I apply for the programme if I am not a Malaysian citizen?<br /> A: Yes, all moms and dads are welcomed to join the programme.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How much is the New Mom Program fee?<br /> A: Our New Mom gift set is FREE (excluding shipping fee of RM5.50).</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I redeem the free gift(s)?<br /> A: A step-by-step instruction will appear on the page after you have filled up your details accordingly.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How long does it take to deliver my gift(s)?<br /> A: About 3&ndash;7 working days upon verification.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: What are the benefits of having a New Mom member card?<br /> A: Learn more about our New Mom member card benefits here: www.motherhood.com.my/membersprivilege</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: When will my New Mom member card expire?<br /> A: The expiration date for an inactive New Mom member card is TWO (2) months upon activation.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">Q: How do I renew my New Mom member card?<br /> A: Spend a min. of RM100 on Motherhood.com.my and your card will be auto-converted to a 1-year membership.</p>
         </div>
         <div class="col-md-6" style="text-align: left;">
            <p style="font-size: 2em; font-weight: bold;">Terms &amp; Conditions</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Each registered family is entitled to receive ONE (1) New Mom gift set (includes RM20 cash voucher, New Mom member card, limited-edition flashcards, special VIP invites). Multiple registrations from the same family will be disqualified.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Gifts may vary depend on the availability.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Motherhood.com.my will not be responsible nor liable for unsuccessful registrations due to interruptions in internet connectivity.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Motherhood.com.my reserves the right to alter, cancel, terminate, or suspend an application and/or any part thereof without any liability and prior notice at any time upon its sole and absolute discretion.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Registrations will only be accepted with the FULL postal address provided.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Incomplete registration forms will not be accepted.</p>
            <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Only pregnant moms are eligible to receive the Babybox. To qualify for the Babybox, you are required to complete the purchase of the new mom gift set and pay the associated shipping fee at the checkout page. 50 new moms will be selected at random every month. Kindly expect some delay in the delivery due to the MCO.</p>
         </div>
      </div>
      <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
   </div>
   <!-- page 3 v2 Newmom -->
   <div class="row step3v2" style="display: none; padding-top: 20px; padding-bottom: 20px;">
      <div class="row">
         <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
         <div class="col-md-8" style="margin-top: 50px;" align="center">
            <h1 style="padding: 0 20px; font-weight: bold; margin-top: 75px;" class="question-font">New baby's Date of Birth</h1>
            <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
               <select id="babyYear" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; border: 1px solid #d6d4d4; color: #512f2e;">
                  <option value="" disabled="disabled" selected="selected">Year</option>
               </select>
               <small class="error-msg"></small>
            </div>
            <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
               <select id="babyMonth" disabled="disabled" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; border: 1px solid #d6d4d4; ; color: #512f2e;">
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
               <small class="error-msg"></small>
            </div>
            <div class="col-md-4" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
               <select id="babyDay" disabled="disabled" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; border: 1px solid #d6d4d4; ; color: #512f2e;">
                  <option value="" disabled="disabled" selected="selected">Day</option>
               </select>
               <input type="hidden" name="subscriber_question3" id="subscriber_question3" /> <small class="error-msg"></small>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center" style="padding-top: 20px;">
            <p>If you have children above 1 year old, please redeem your free Activity Box by joining <a href="../../../events/motherhood-superkids">Motherhood Superkids Club</a></p>
            <button type="button" class="btn btn-default btn-step1 step3v2btn"> Next </button>
         </div>
      </div>
   </div>
   <!-- Step 3 -->
   <div class="row step3" style="display: none; padding-top: 20px; padding-bottom: 20px;">
      <div class="col-md-10 col-md-offset-1" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
         <p style="font-size: 3em; color: #005b9c; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;">It&rsquo;s time to receive your welcome kit!</p>
         <div class="col-md-6 text-left question-welcomekit"><label>Email</label> <input type="email" id="emailNew" name="newEmail" class="form-control" placeholder="Email" required="required" style="background-color: white;" /> <small class="error-msg"></small></div>
         <div class="col-md-6 text-left question-welcomekit"><label>Password</label> <input type="password" id="newPassword" name="newPassword" class="form-control" minlength="6/" placeholder="Password" required="required" /> <small class="error-msg"></small></div>
         <div class="clearfix"></div>
         <div class="col-md-6 text-left question-welcomekit"><label>First Name</label> <input type="text" id="newFirstName" name="newFirstName" class="form-control" placeholder="First Name" required="required" /> <small class="error-msg"></small></div>
         <div class="col-md-6 text-left question-welcomekit"><label>Last Name</label> <input type="text" id="newLastName" name="newLastName" class="form-control" placeholder="Last Name" required="required" /> <small class="error-msg"></small></div>
         <div class="clearfix"></div>
         <div class="col-md-7 text-left question-welcomekit">
            <label>Mobile Number</label>
            <p style="width: 10%; font-size: 16px; background: white; float: left; padding-top: 10px; padding-bottom: 8px; border: 1px solid #ccc; margin-top: 4px; border-right: none; box-shadow: inset 0 1px 3px #ddd;">+6</p>
            <input type="number" id="subscriber_question1" name="subscriber_question1" style="width: 90%; font-size: 14px; padding-top: 10px; padding-bottom: 10px; ;display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; border-top-left-radius: 0px; border-bottom-left-radius: 0px;" title="xxx xxxxx" placeholder="Mobile Number" pattern=".{10,}" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="required" /> <small class="error-msg"></small>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-12 text-left question-welcomekit"><label>Full Address</label> <input type="text" name="subscriber_question8" id="subscriber_question8" size="80" required="required" placeholder="Full Address" class="form-control" /> <small class="error-msg"></small></div>
         <div class="clearfix"></div>
         <div class="col-md-4 text-left question-welcomekit"><label>Postcode</label> <input type="number" name="subscriber_question9" id="subscriber_question9" class="form-control" size="10" required="required" onkeydown="javascript: return event.keyCode == 69 ? false : true" placeholder="Postcode" /> <small class="error-msg"></small></div>
         <div class="col-md-4 text-left question-welcomekit"><label>City</label> <input name="subscriber_question10" id="subscriber_question10" type="text" size="60" required="required" placeholder="City" class="form-control" /> <small class="error-msg"></small></div>
         <div class="col-md-4 text-left question-welcomekit" style="padding-top: 0px;">
            <label>State</label>
            <select name="subscriber_question11" id="subscriber_question11" type="text" style="width: 100%; font-size: 16px; padding-top: 10px; padding-bottom: 8px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box;" required="required">
               <option value="">State</option>
               <option value="Johor">Johor</option>
               <option value="Kedah">Kedah</option>
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
            <small class="error-msg"></small>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-4 text-left question-welcomekit"><label>Your Date of Birth</label> <input name="subscriber_question14" type="text" id="dobParent" required="required" placeholder="DOB" class="form-control dob-parent" /> <small class="error-msg"></small></div>
         <div class="clearfix"></div>
         <div class="col-md-4 col-md-offset-4" style="padding-top: 20px;"><button type="submit" name="submit" id="btn-submit-form1" class="btn btn-default btn-step1 "> Submit </button></div>
      </div>
   </div>
   <!-- huggies row -->
   <div class="row huggies-row" style="display: none; padding-top: 20px; padding-bottom: 20px;">
      <div class="col-md-10 col-md-offset-1" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
         <p style="font-size: 3em; color: #005b9c; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;">Redeem FREE Huggies Natural Soft Diaper Samples</p>
         <div class="container" style="position: relative; text-align: center;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Huggies/huggies-banner.png" width="100%" alt="banner-huggies" /></div>
         <div class="row">
            <div class="col-md-6 text-left">
               <label>What is your preferred diaper size ? </label>
               <select name="subscriber_question15" id="huggies-preferred-size" type="text" style="width: 100%; font-size: 16px; padding-top: 5px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box;" required="required">
                  <option value="">Please select size</option>
                  <option value="NB">New Born (NB)</option>
                  <option value="S">Small (S)</option>
               </select>
               <small class="error-msg"></small>
            </div>
            <div class="col-md-6 text-left">
               <label>What is your preferred diaper type ?</label>
               <select name="subscriber_question16" id="huggies-preferred-type" type="text" style="width: 100%; font-size: 16px; padding-top: 5px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box;" required="required">
                  <option value="">Please select type</option>
                  <option value="tape">Tape</option>
                  <!--<option value="pant">Pant</option>-->
               </select>
               <small class="error-msg"></small>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-6 text-left">
               <label>What is your preferred language?</label>
               <select name="subscriber_question17" id="huggies-preferred-lang" type="text" style="width: 100%; font-size: 16px; padding-top: 5px; padding-bottom: 5px; display: inline-block; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box;" required="required">
                  <option value="">Please select language</option>
                  <option value="english">English</option>
                  <option value="malay">Malay</option>
               </select>
               <small class="error-msg"></small>
            </div>
         </div>
         <div class="col-md-4 col-md-offset-4" style="padding-top: 20px;"><button type="button" class="btn btn-default btn-step1 btn-next-huggies" id="btn-next-huggies"> Next </button></div>
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12">
               <div class="tnc-word-color" style="margin-top: 30px;">
                  <div class="col-md-12" style="text-align: left;">
                     <p style="font-size: 2em; font-weight: bold;">Terms &amp; Conditions</p>
                     <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Please expect sample delivery of 6 weeks.</p>
                     <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Limited to one (1) Huggies sample pack per person and/or address over a period of 6 months.</p>
                     <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Only valid for those residing in Malaysia.</p>
                     <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- Incomplete entries will not be processed</p>
                     <p class="text-left" style="font-size: 1em; line-height: 1.2; padding: 10px 10px 0px 10px;">- I consent to the processing of my personal information in accordance with the <span style="text-decoration: underline;" class="tncbtn">privacy policy<span></span></span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/Privacy_Policy_Huggies.pdf"> </a></div>
<p>
   <script>// <![CDATA[
      /** if other function that need to use same input for validation, we can just use this selector  **/
                  	var emailSelector 	 	= $('body').find('#emailNew');
                  	var passSelector  	 	= $('body').find('#newPassword');
                  	var fnameSelector    	= $('body').find('#newFirstName');
                  	var lnameSelector    	= $('body').find('#newLastName');
                  	var addrSelector     	= $('body').find('#subscriber_question8');
                  	var postcodeSelector 	= $('body').find('#subscriber_question9');
                  	var citySelector  	 	= $('body').find('#subscriber_question10');
                  	var stateSelector    	= $('body').find('#subscriber_question11');
                  	var dobSelector      	= $('body').find('#dobParent');
                  	var mobileSelector   	= $('body').find('#subscriber_question1');
                  	var huggiesRowSelector  = $('body').find('.huggies-row');
                  	var errorSelector 	 	= '.error-msg';
                  	var hasValidation 	 	= 'has-error-validation';
                  	var icon 	  		 	= '<i class="fa fa-info-circle"></i>';
                              		
                  	var toTop = function(){
                  		$('html,body').animate({ scrollTop: 0 }, 'slow');
                  	}
                  	
                  	/* var checkEmail = function(){
                  		var checkemail = emailSelector.val();
                  		var password   = passSelector.val();
                  		
                  		if(checkemail != undefined && checkemail != '' && password != undefined && password != '')
                  		{
                  			$.ajax({
                  				url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
                  				data	 :{'checkemail': checkemail, 'password': password},
                  				dataType :'json',
                  				method 	 : 'post',
                  				success	 : function(result){
                  					if(result.status == true)
                  					{
                  						console.log('correct signin info');
                  					}
                  					else
                  					{
                  						alert('Your email already exists on Motherhood. To sign up for this program, kindly fill in the email and password of your Motherhood account when register.');
                  					}
                  				}
                  			});
                  		}
                  	} */
                              		
                  	var checkingForm = function(){
                  			var email 	  	= emailSelector.val();
                  			var password  	= passSelector.val();
                  			var firstname 	= fnameSelector.val();
                  			var lastname  	= lnameSelector.val();
                  			var address   	= addrSelector.val();
                  			var postcode  	= postcodeSelector.val();
                  			var city  	  	= citySelector.val();
                  			var state  	  	= stateSelector.val();
                  			var dobparent 	= dobSelector.val();
                  			var mobileno  	= mobileSelector.val();
                  			var phonenumber = mobileno.replace(/-/g, ' ');
                  			phonenumber 	= phonenumber.trim();
                  			var msg		  	= "";
                  			var arrFocus  	= []; 
                  			
                  			if(email == '')
                  			{
                  				arrFocus.push(emailSelector);
                  				msg = icon + " Please insert email";
                  				emailSelector.addClass(hasValidation);
                  				emailSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				emailSelector.removeClass(hasValidation);
                  				emailSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(password == '')
                  			{
                  				arrFocus.push(passSelector);
                  				msg = icon + " Please insert password";
                  				passSelector.addClass(hasValidation);
                  				passSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				passSelector.removeClass(hasValidation);
                  				passSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(firstname == '')
                  			{
                  				arrFocus.push(fnameSelector);
                  				msg = icon + " Please first name";
                  				fnameSelector.addClass(hasValidation);
                  				fnameSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				fnameSelector.removeClass(hasValidation);
                  				fnameSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(lastname == '')
                  			{
                  				arrFocus.push(lnameSelector);
                  				msg = icon + " Please insert last name";
                  				lnameSelector.addClass(hasValidation);
                  				lnameSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				lnameSelector.removeClass(hasValidation);
                  				lnameSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(address == '')
                  			{
                  				arrFocus.push(addrSelector);
                  				msg = icon + " Please insert addresss";
                  				addrSelector.addClass(hasValidation);
                  				addrSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				addrSelector.removeClass(hasValidation);
                  				addrSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(postcode == '' || !$.isNumeric(postcode) ||  postcode.length != 5)
                  			{
                  				arrFocus.push(postcodeSelector);
                  				msg = icon + " Please insert postcode. Postcode must be in numeric value and length of postcode must 5 digit";
                  				postcodeSelector.addClass(hasValidation);
                  				postcodeSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				postcodeSelector.removeClass(hasValidation);
                  				postcodeSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(city == '')
                  			{
                  				arrFocus.push(citySelector);
                  				msg = icon + " Please insert city";
                  				citySelector.addClass(hasValidation);
                  				citySelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				citySelector.removeClass(hasValidation);
                  				citySelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(state == '')
                  			{
                  				arrFocus.push(stateSelector);
                  				msg = icon + " Please select state";
                  				stateSelector.addClass(hasValidation);
                  				stateSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				stateSelector.removeClass(hasValidation);
                  				stateSelector.closest('div').find(errorSelector).html('');
                  			}
                  			
                  			if(dobparent == '')
                  			{
                  				arrFocus.push(dobSelector);
                  				msg = icon + " Please select your DOB";
                  				dobSelector.addClass(hasValidation);
                  				dobSelector.closest('div').find(errorSelector).html(msg);
      							
      							return false;
                  			}
                  			else
                  			{
                  				dobSelector.removeClass(hasValidation);
                  				dobSelector.closest('div').find(errorSelector).html('');
                  			}
                  				
                  			if(mobileno == "")
                  			{
                  				arrFocus.push(mobileSelector);
                  				msg = icon + " Please insert mobile no";
                  				mobileSelector.addClass(hasValidation);
                  				mobileSelector.closest('div').find(errorSelector).html(msg);
      							return false;
                  			}
                  			else{
                  				if ($.trim(phonenumber) != "") {
                  					var prefix = phonenumber.substring(0,3);
                  					var firstNo = phonenumber.substring(0,1);
                  					var phoneLength = phonenumber.length;
                  					
                  					if(firstNo != 0 && firstNo != 5){
                  						arrFocus.push(mobileSelector);
                  						msg = icon + " Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019)";
                  						mobileSelector.addClass(hasValidation);
                  						mobileSelector.closest('div').find(errorSelector).html(msg);
      									return false;
                  					}
                  					else
                  					{
                  						mobileSelector.removeClass(hasValidation);
                  						mobileSelector.closest('div').find(errorSelector).html('');
                  						if(firstNo == '0'){
                  							if(prefix == '010' || prefix == '011' || prefix == '012' || prefix == '013' || prefix == '014' || prefix == '015' || prefix == '016' || prefix == '017' || prefix == '018' || prefix == '019'){
                  									if(prefix == '011'){
                  										if(phoneLength < 10 || phoneLength > 11){
                  											arrFocus.push(mobileSelector);
                  											msg = icon + " Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 012 3334444 / 019-8887777";
                  											mobileSelector.addClass(hasValidation);
                  											mobileSelector.closest('div').find(errorSelector).html(msg);
      														return false;
                  										}
                  										else
                  										{
                  											mobileSelector.removeClass(hasValidation);
                  											mobileSelector.closest('div').find(errorSelector).html('');
                  										}
                  									}
                  									else{
                  										if(phoneLength != 10){
                  											arrFocus.push(mobileSelector);
                  											msg = icon + " Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 012 3334444 / 019-8887777";
                  											mobileSelector.addClass(hasValidation);
                  											mobileSelector.closest('div').find(errorSelector).html(msg);
      														return false;
                  										}
                  										else
                  										{
                  											mobileSelector.removeClass(hasValidation);
                  											mobileSelector.closest('div').find(errorSelector).html('');
                  										}
                  									}  
                  							}else{
                  								arrFocus.push(mobileSelector);
                  								msg = icon + " Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019)";
                  								mobileSelector.addClass(hasValidation);
                  								mobileSelector.closest('div').find(errorSelector).html(msg);
      											
      											return false;
                  							} 
                  						}
                  						else if(firstNo == '5') /* for singapore*/ 
                  						{
                  							if(phoneLength < 9 || phoneLength > 9){
                  								arrFocus.push(mobileSelector);
                  								msg = icon + " Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777";
                  								mobileSelector.addClass(hasValidation);
                  								mobileSelector.closest('div').find(errorSelector).html(msg);
      											return false;
                  							}
                  							else{
                  								mobileSelector.removeClass(hasValidation);
                  								mobileSelector.closest('div').find(errorSelector).html('');
                  							}
                  						}
                  						else{
                  							arrFocus.push(mobileSelector);
                  							msg = icon + " Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019)";
                  							mobileSelector.addClass(hasValidation);
                  							mobileSelector.closest('div').find(errorSelector).html(msg);
      										
      										return false;
                  						}
                  					}
                  				}
                  			}
                  			
                  			if(arrFocus.length > 0)
                  			{
                  				arrFocus[0].focus();
                  			}
      						else
      						{
      							var typePregnancy = $('body').find('#subscriber_question4').val();
      							if(typePregnancy.toLowerCase() == 'pregnant')
      							{
      								$('body').find('.step3').hide();
      								toTop();
      								$('body').find('#step3btn').attr('type', 'submit');
      								$('body').find('#step3btn').attr('name', 'submit');
      								$('body').find('#step3btn').html('Submit');
      								// $('body').find('.step3v1').show('fast');
      								huggiesRowSelector.show();
      							}
      							else if(typePregnancy.toLowerCase() == 'babyout')
      							{
      								// $('body').find('.step3').hide();
      									// toTop();
      								// huggiesRowSelector.show();
      							}
      						}
      					
      					return true;
                  	}
                        			
                  	var manageBtnKit = function(){
                  		var typePregnancy = $('body').find('#subscriber_question4').val();
            			
                  		if(typePregnancy.toLowerCase() == 'pregnant')
                  		{
                  			$('body').find('#btn-submit-form1').attr('type', 'button');
                  			$('body').find('#btn-submit-form1').html('Next');
                  			$('body').find('.maincordblood').prop('required',true);
                  			$('body').find('.mainhospitalquestion').prop('required',true);
                  			$('body').find('#momYear').prop('required',true);
                  			$('body').find('#momMonth').prop('required',true);
                  			$('body').find('#momDay').prop('required',true);
      						$('body').find('#huggies-preferred-size').prop('required',true);
      						$('body').find('#huggies-preferred-type').prop('required',true);
      						$('body').find('#huggies-preferred-lang').prop('required',true);
                  		}
                  		else if(typePregnancy.toLowerCase() == 'babyout')
                  		{
                  			$('body').find('#btn-submit-form1').attr('type', 'Submit');
                  			$('body').find('#btn-submit-form1').html('Submit');
      						$('body').find('#eventform').attr('onsubmit','return checkingForm();');
      						$('body').find('#btn-next-huggies').attr('type', 'submit');
      						$('body').find('#btn-next-huggies').attr('name', 'submit');
                  			$('body').find('#btn-next-huggies').html('Submit');
                  			$('body').find('.maincordblood').prop('required',false);
                  			$('body').find('.mainhospitalquestion').prop('required',false);
                  			$('body').find('#momYear').prop('required',false);
                  			$('body').find('#momMonth').prop('required',false);
                  			$('body').find('#momDay').prop('required',false);
      						$('body').find('#huggies-preferred-size').prop('required',false);
      						$('body').find('#huggies-preferred-type').prop('required',false);
      						$('body').find('#huggies-preferred-lang').prop('required',false);
                  		}
                  	}
                  
                  	$(document).ready(function(){
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
            			
                  		$('body').on('click', '#btn-submit-form1', function(){
                  			checkingForm();
                  		});
      					
      					 $('body').on('submit', '#eventform', function(){
      						var typePregnancy = $('body').find('#subscriber_question4').val();
                  			if(typePregnancy.toLowerCase() == 'babyout')
                  			{
      							if(res == true)
      							{
      								$('#btn-submit-form1').html('Processing...');
      							}
      							else
      							{
      								$('#btn-submit-form1').html('Submit');
      							}
                  				
                  				// $(this).prop('disabled', true);
                  			}
                  			else
                  			{
                  				$('#btn-submit-form1').html('Next')
                  				// $(this).prop('disabled', false);
                  			}
      						
      						// return checkingForm();
      					}); 
                  		
                  		/** this is to hanlde to remove error class, when user input data  **/
                  		$('body').on('change', '#emailNew, #newPassword, #newFirstName, #newLastName, #subscriber_question1, #subscriber_question8, #subscriber_question9, #subscriber_question10, #subscriber_question11, #dobParent, #huggies-preferred-size, #huggies-preferred-type, #huggies-preferred-lang', function(){
                  			var myInputVal = $(this).val();
                  			if(myInputVal != '')
                  			{
                  				$(this).removeClass(hasValidation);
                  				$(this).closest('div').find(errorSelector).html('');
                  			}
                  		});
                  		
                  			
                  		$('body').on('click', '.step1btnv1', function(){
                  			var sq4 	 = $(this).attr('data-typepregnancy');
                  			var formstep = $(this).attr('data-formstep');
                  			$('body').find('#subscriber_question4').val(sq4);
                  			$('body').find('.step1').hide();
                  			toTop();
                  			
                  			/* user select == pregnant  */
                  			if(formstep == 1)
                  			{
                  				$('body').find('.step2v1').show('fast');
                  				$('body').find('.step2v2').hide('fast');
                  			}
                  			/* user select == new mum  */
                  			else if(formstep == 2)
                  			{
                  				$('body').find('.step2v1').hide('fast');
                  				$('body').find('.step2v2').show('fast');
                  			}
                  			manageBtnKit();
                  		});
                  		
                  	/* next button after pregnant benenfit  */
                  		$('body').on('click', '.step2btnv1', function(){
                  			$('body').find('.step2v1').hide();
                  			$('body').find('.step2v2').hide();
                  			toTop();
                  			$('body').find('.step3v1').hide();
                  			$('body').find('.step3').show('fast');
                  		});
                  		
                  		$('body').on('click', '.step2btn', function(){
                  			$('body').find('.step2v1').hide();
                  			$('body').find('.step2v2').hide();
                  			$('body').find('.step3v1').hide();
                  			toTop();
                  			$('body').find('.step3v2').show();
                  		});
                  		
                  		$('body').on('click', '.step3btn', function(){
                  			var isCordBloodCheck 		= $('body').find('.cordblood').is(':checked');
                  			var isHospitalQuestionCheck = $('body').find('.hospitalquestion').is(':checked');
                  			
                  			if(isCordBloodCheck == true && isHospitalQuestionCheck == true)
                  			{
                  				$(this).html('Processing...');
                  				// $(this).prop('disabled', true);
                  				$('body').find('.step2v1').hide();
                  				$('body').find('.step2v2').hide();
                  				// $('body').find('.step3v1').hide();
                  				// $('body').find('.step3').show();
                  			}
                  			else
                  			{
                  				$(this).html('Processing...');
                  				// $(this).prop('disabled', false);
                  				if(isCordBloodCheck == false)
                  				{
                  					$('body').find('.lblcordblood').addClass('has-error-validation');
                  				}
                  				
                  				if(isHospitalQuestionCheck == false)
                  				{
                  					$('body').find('.lblhospquest').addClass('has-error-validation');
                  				}
                  				
                  				alert("Please answer all the question before proceed. Thank you");
                  			}
                  		});
                  		
                  		$('body').on('change', '.hospitalquestion', function(){
                  			var isHospitalQuestionCheck = $('body').find('.hospitalquestion').is(':checked');
                  			 			
                  			if(isHospitalQuestionCheck == true)
                  			{
                  				$('body').find('.lblhospquest').removeClass('has-error-validation');
                  			}
                  		});
            			
            			$('body').on('change', '.cordblood', function(){
                  			var isCordBloodCheck 		= $('body').find('.cordblood').is(':checked');
                  			var valCordBloodCheck 		= $(this).val();
                  			
                  			if(isCordBloodCheck == true)
                  			{
                  				$('body').find('.lblcordblood').removeClass('has-error-validation');
                  			}
            				
            				if(valCordBloodCheck != '' && valCordBloodCheck.toLowerCase() == 'yes')
            				{
            					$('body').find('.cord-msg').show('slow');
            				}
            				else
            				{
            					$('body').find('.cord-msg').hide('slow');
            				}
                  		});
                  		
                  		
                  		$('.step3v2btn').on('click',function(event){
                  			var year  = $('#babyYear').val();
                  			var month = $('#babyMonth').val();
                  			var day   = $('#babyDay').val();
                  			var flagError = false; 
                  			var datecheck = $('#subscriber_question3').val();
                  			if(datecheck){
                  				  $('.step2v1').hide();
                  				  $('.step2v2').hide();
                  				  $('.step3v1').hide();
                  				  $('.step3v2').hide();
                  				  $('.step3').show();
                  			}else{
                  				
                  				if(year == ''|| year == null)
                  				{
                  					flagError = true;
                  					msg = icon + " Please select year";
                  					$('#babyYear').addClass(hasValidation);
                  					$('#babyYear').closest('div').find(errorSelector).html(msg);
                  				}
                  				else
                  				{
                  					$('#babyYear').removeClass(hasValidation);
                  					$('#babyYear').closest('div').find(errorSelector).html('');
                  				}
                  				
                  				if(month == '' || month == null)
                  				{
                  					flagError = true;
                  					msg = icon + " Please select month";
                  					$('#babyMonth').addClass(hasValidation);
                  					$('#babyMonth').closest('div').find(errorSelector).html(msg);
                  				}
                  				else
                  				{
                  					$('#babyMonth').removeClass(hasValidation);
                  					$('#babyMonth').closest('div').find(errorSelector).html('');
                  				}
                  				
                  				if(day == '' || day == null)
                  				{
                  					flagError = true;
                  					msg = icon + " Please select day";
                  					$('#babyDay').addClass(hasValidation);
                  					$('#babyDay').closest('div').find(errorSelector).html(msg);
                  				}
                  				else
                  				{
                  					$('#babyDay').removeClass(hasValidation);
                  					$('#babyDay').closest('div').find(errorSelector).html('');
                  				}
                  				
                  				alert("Please answer all the question before proceed. Thank you");
                  			}
                  		});
                  		
                  		$('body').on('blur', '#emailNew, #newPassword', function(){
                  			// checkEmail();
                  		});
                  		
                  		$('body').on('click', '#seeMore', function(){
                  			$('#seeMoreContent').show();
                  			$('#seeMore').hide();
                  			$("img").trigger("unveil");
                  		});
                  	  
                  		$('body').on('click', '#seeMore1', function(){
                  			$('#seeMoreContent1').show();
                  			$('#seeMore1').hide();
                  			$("img").trigger("unveil");
                  		});
                  		
                  		$('#seeMore2').on('click',function(event){
                  			$('#seeMoreContent2').show();
                  			$('#seeMore2').hide();
                  			$("img").trigger("unveil");
                  		});
                  		
                  		$('#seeMore3').on('click',function(event){
                  			$('#seeMoreContent3').show();
                  			$('#seeMore3').hide();
                  			$("img").trigger("unveil");
                  		});
                    
                  		  $('.step4btn').on('click',function(event){
                  			  $('.step4').hide();
                  			  $('.step5').show();
                  			  $("img").trigger("unveil");
                  		  });
                  		  $('.step5btn').on('click',function(event){
                  			  $('.step5').hide();
                  			  $('.step6').show();
                  			  $("img").trigger("unveil");
                  		  });
                  					  
                  		$(".milkBrand").on("click", function(){
                  			  $(this).parent().parent().parent().toggleClass("isSelected");
                  			  var milkbrand = $(this).attr('value');
                  		});
                  	  
                  		for (var i = 2020; i <= 2021; i++) {
                  		  $('#babyYear').append('<option value="' + i + '">' + i + '</option>');
                  		}
                  	  
                  		  $("#babyYear").on("change",function(){
                  				$('#babyMonth').prop('disabled', false);
                  				$('#babyYear').removeClass(hasValidation);
                  				$('#babyYear').closest('div').find(errorSelector).html('');
                  		  });
                  	  
                  		$("#babyMonth").on("change",function(){
                  			var year = $('#babyYear').val();
                  			var month = $('#babyMonth').val();
                  			if(year !== '' && month !== ''){
                  					$('#babyDay').prop('disabled', false);
                  					$('#babyDay').find('option').remove().end();
                  					$('#babyMonth').removeClass(hasValidation);
                  					$('#babyMonth').closest('div').find(errorSelector).html('');
                  				  var days = new Date(year, month, 0).getDate(); 
                  				  $('#babyDay').append('<option value=" " disabled selected> Day </option>');
                  					  for (var i = 1; i <= days; i++) {
                  						  $('#babyDay').append('<option value="' + i + '">' + i + '</option>');}
                  			}
                  		});
                  	  
                  		$("#babyDay").on("change",function(){
                  			var year = $('#babyYear').val();
                  			var month = $('#babyMonth').val();
                  			var day = $('#babyDay').val();
                  			var month = ("0" + month).slice(-2);
                  			var day = ("0" + day).slice(-2);
                  			$('#babyDay').removeClass(hasValidation);
                  			$('#babyDay').closest('div').find(errorSelector).html('');
                  			$('#subscriber_question3').val(day+'-'+month+'-'+year);
                  		});
            			
            			$('body').on('click', '.btn-next-huggies', function(){
            				var typePregnancy  = $('body').find('#subscriber_question4').val();
            				var sizeSelector   = $('body').find('#huggies-preferred-size');
            				var typeSelector   = $('body').find('#huggies-preferred-type');
            				var langSelector   = $('body').find('#huggies-preferred-lang');
            				// var pampers_size   = sizeSelector.val();
            				var pampers_type   = typeSelector.val();
            				var preferred_lang = langSelector.val();
            				var flagError 	   = false;
            				
            				// if(pampers_size == '' || pampers_size == null)
            				// {
            					// flagError = true;
            					// msg = icon + " Please select preferred size";
                  				// sizeSelector.addClass(hasValidation);
                  				// sizeSelector.closest('div').find(errorSelector).html(msg);
            				// }
            				// else
            				// {
            					// sizeSelector.removeClass(hasValidation);
                  				// sizeSelector.closest('div').find(errorSelector).html('');
            				// }
            				
            				if(pampers_type == '' || pampers_type == null)
            				{
            					flagError = true;
            					msg = icon + " Please select preferred type";
                  				typeSelector.addClass(hasValidation);
                  				typeSelector.closest('div').find(errorSelector).html(msg);
            				}
            				else
            				{
            					typeSelector.removeClass(hasValidation);
                  				typeSelector.closest('div').find(errorSelector).html('');
            				}
            				
            				if(preferred_lang == '' || preferred_lang == null)
            				{
            					flagError = true;
            					msg = icon + " Please select preferred language";
                  				langSelector.addClass(hasValidation);
                  				langSelector.closest('div').find(errorSelector).html(msg);
            				}
            				else
            				{
            					langSelector.removeClass(hasValidation);
                  				langSelector.closest('div').find(errorSelector).html('');
            				}
            				
            				if(flagError != true)
            				{
            					
            					if(typePregnancy.toLowerCase() == 'pregnant')
            					{
            						huggiesRowSelector.hide();
            						$('.step3v1').show();
            						toTop();
            					}
            					else
            					{
            						$(this).html('Processing...');
            					}
            				}
            			});
            			
            			var selector = document.getElementById("dobParent");
            			Inputmask('datetime',{
            				alias 		 :'datetime',
            				inputFormat  : "dd/mm/yyyy", 
            				outputFormat : "dd/mm/yyyy",
            				leapday: "29.02."
            			}).mask(selector);
            		
                  		
                  	});
       
      // ]]>
   </script>
</p>