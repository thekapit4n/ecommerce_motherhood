<style>
   <!--
      h1, h2, h3, h4, h5,  p, button, input {
			font-family: GothamRounded-medium;
		  }
		  
	.btn-typeof-course{
		width: 100%;
		font-size: 35px;
		border-radius: 5px;
		padding-top: 1px;
		padding-bottom: 1px;
	}
	
	.btn-online-course, .btn-online-course:hover, .btn-online-course:active, .btn-online-course:focus{
		background-color: #fae2e7;
		border: 3px solid #fae2e7;
		color: #265e70;	 
		outline: transparent;
	}
	
	.btn-offline-course, .btn-offline-course:hover, .btn-offline-course:active, .btn-offline-course:focus{
		background-color: #265e70;
		border: 3px solid #265e70;
		color: #fae2e7;	 
		outline: transparent;
	}
	
	.row-btn-typecouse{
			margin-bottom:30px;
			margin-top:20px;
	}
		  
		  

		  .speakerName {
			border-bottom: 5px solid #265e70;
			color: #5d5d5d;
			margin-left: 50px;
			margin-right: 50px;
			padding-bottom: 5px;
		  }
		  .speakerDescription {
			color: #5d5d5d;
			color: #5d5d5d;
			margin-left: 30px;
			margin-right: 30px;
		  }
		  .speakerBox {
			padding-left: 0px;
			padding-right: 0px;
			-moz-box-shadow: inset 0 0 10px #000000;
			-webkit-box-shadow: inset 5px 5px 10px lightgrey;
			box-shadow: 5px 5px 10px lightgrey;
			padding-bottom: 10px;
			min-height: 355px;
			margin-bottom: 20px;
			background-color: white;
		  }
		  .checklistText {
			text-align: left;
			color: white;
			font-weight: 100;
			background-color: #265e70;
			padding: 20px 15px;
			font-family: GothamRounded-medium;
		  }
		  
	  .reviewBox {
		background: #ffe1e7;
		color: #265e70;
		padding: 30px;
		text-align: left;
		font-size: 15px;
		line-height: 1.2;
		-moz-box-shadow: inset 0 0 10px #000000;
		-webkit-box-shadow: inset 5px 5px 10px lightgrey;
		box-shadow: 5px 5px 10px lightgrey;
		min-height: 450px;
	  }
	  .reviewStars {
		font-size: 40px;
		font-weight: bold;
	  }
	  .offlineItineraryRow {
		border-bottom: 2px solid #edd0ce;
		font-family: GothamRounded-medium;
		font-size: 20px;
	  }
	  .ItinerarytimeDate {
		font-family: GothamRounded-medium;
		font-size: 20px;
		color: white;
	  }
	  .ItineraryTitle {
		font-family: GothamRounded-medium;
		font-size: 20px;
		color: white;
		line-height: 1;
	  }
	  .offlineItineraryTimeBox {
		width: 49%;
		display: inline-block;
		padding-top: 20px;
		padding-bottom: 20px;
		vertical-align: middle;
	  }
	  .offlineItineraryTitleBox {
		width: 50%;
		display: inline-block;
		padding-top: 20px;
		padding-bottom: 20px;
		text-align: left;
		padding-left: 60px;
		min-height: 93px;
		vertical-align: middle;
	  }
	  .ItineraryTitle-small {
		font-weight: 100;
		color: white;
		font-size: 15px;
		font-family: sans-serif;
	  }
	
	  .parentcraftDescription {
		 line-height: 1.3;
		color: #444444;
		font-size: 15px;
		font-family: GothamRounded-medium;
		text-align: justify;
		padding-left: 20px;
		padding-right: 20px;
	  }
	  .parentcraftTitle {
		color: #265e70;
		display: inline-block;
		font-weight: bold;
		font-size: 32px;
		font-family: GothamRounded-medium;
	  }
	
	  .sliderTextTitle{
		font-size: 30px; 
		padding-bottom: 20px;
	  }
	  .sliderTextPoints{
	   font-size: 18px;
		text-align: left;
	  }
	  .epTitle{
		color: #265e70; 
		font-weight: bold; 
		padding-left: 10px;
	  }
	  .epDesc{
		font-size: 15px;
		line-height: 1.5;
		padding: 5px 0px 20px 10px;
	  }
	  #topBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		left: 30px;
		z-index: 9999;
		font-size: 18px;
		border: none;
		outline: none;
		background-color: #ff7fae;
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 4px;
	}
	
	.desc-webinar
	{
		min-height: 53px;
	}
	
	.speaker-webinar
	{
		min-height: 37px;
	}
	
	.btn-view-event, .btn-view-event:hover{
		background-color:#265e70;
		color: white;
	}
	
	.div-row-pastwebinarpic{
		margin-bottom: 22px;  
	}
	
	.div-row-calendar-slider
	{
		margin-bottom:25px
	}

   .nbs-flexisel-container{
		border:0px;
	}
  
	.schedule-div{
		min-height:193px
	}
    
	.div-web-desc{
		color: #444444;
	}	
	@media only screen and (max-width: 600px) 
	{
		#topBtn {
		  bottom: 70px;
		  left: 8px;
		  font-size: 12px;
		  padding: 12px;
		}
		
		.ItineraryTitle {
		  font-size:14px;
		}
		
		.ItineraryTitle-small{
		  font-size:12px;
		}
		
		.offlineItineraryTitleBox {
		  width: 64%;
		  padding-left: 10px;
		}
		.offlineItineraryTimeBox {
		  width: 32%;
		}
		.ItinerarytimeDate {
		  font-size:14px;
		}
		
		#homepage-sliderforth{
			padding-top:0;
		}
		
		.love-image{
			width: 24px!important;
			margin-top: -10px!important;
			right: 0;
			position: absolute;
		}
		
		.love-image-small{
			width: 24px!important;
			margin-top: -10px!important;
			position: absolute;
		}
		
		.bx-wrapper{
			max-width:1183px!important;
		} 
		
		.epTitle{
			font-size:19px;
		}
		.epDesc{
			font-size: 16px;
		}
		.sliderTextTitle{
			font-size: 19px;
		}
		.sliderTextPoints{
			font-size: 16px;
		}
		.parentcraftDescription {
		  font-size: 15px;
		  text-align: left;
		  line-height: 1.5;
		}
		.parentcraftTitle {
		  font-size: 18px;
		}
		.reviewStars {
		  font-size: 20px;
		}

		.reviewBox {
		  font-size: 13px;
		}
		.onofflinebutton {
		  font-size: 2.5em;
		}
		.speakerName {
		  margin-left: 10px;
		  margin-right: 10px;
		}
		.speakerDescription {
		  margin-left: 8px;
		  margin-right: 8px;
		  font-size: 13px;
		  line-height: 1.1;
		}
		.speakerBox {
		  min-height: 293px;
		  padding-bottom: 5px;
		}
	  
		.div-web-desc{
			margin-top: 15px;
		}
		
		.div-row-pastwebinarpic{
			margin-bottom: 10px;  
		}

		.div-row-calendar-slider
		{
			min-height: 394px;
		}

		.desc-webinar
		{
			min-height: 95px;
		}

		.date-webinar
		{
			min-height: 34px;
		}

		.schedule-div{
			min-height:120px
		}
		
		.btn-typeof-course{
			width: 100%;
			font-size: 25px;
			border-radius: 5px;
		}
		
		.row-btn-typecouse{
			margin-bottom:1px;
			margin-top:15px;
		}
		
		.ytp-cued-thumbnail-overlay-image{
			height: 122%;
		}
	}
      -->
</style>
<!-- Online Offline button-->
<div class="bg-color-change" style="background-color:#fae2e7">
<div class="row row-btn-typecouse" >
   <div class="col-md-6 col-lg-6 col-xs-6">
      <!--<h1 class="onlineBtn onofflinebutton focus">ONLINE</h1>-->
	  <button type="button" class="btn btn-primary btn-typeof-course onlineBtn btn-online-course btn-typeof-course-focus">Online</button>
   </div>
   <div class="col-md-6 col-lg-6 col-xs-6">
      <!--<h1 class="offlineBtn onofflinebutton">OFFLINE</h1>-->
	  <button type="button" class="btn btn-primary btn-typeof-course btn-offline-course offlineBtn">Offline</button>
   </div>
</div>
<!-- Online Offline Button END-->
<p></p>
<!-- Online Content -->
<div class="online-content">
   <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/maincoveronline.png" width="100%" alt="onlineBanner" /></div>
      <!-- Join Now Speaker-->
      <div class="col-md-12 col-lg-12 col-xs-12"><a href="../../../campaign-nurengroup/education/baby-learning/baby-enrichment-classes/parentcraft-class-online.html" target="_blank" rel="noopener"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/registernow.gif" width="100%" /></a></div>
      <!-- Motherhood Antenatal Class -->
      <div class="col-md-12 col-lg-12 col-xs-12">
         <h2 class="parentcraftTitle">What is Motherhood Antenatal Class?</h2>
         <img class="love-image" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
         <p class="parentcraftDescription">Dear expecting parents, do you know about antenatal class? How exactly is antenatal care and how does these two relate? An antenatal class can help parents, especially new parents, to prepare for labour, birth, and your parenthood journey.&nbsp; Motherhood welcomes you to our online antenatal class to guide you on the essential measure of antenatal and prenatal care. If you are expecting a baby soon, do come and join Motherhood Antenatal Class - the premium online antenatal class in Malaysia - for an enjoyable yet educational antenatal class for all parents.</p>
      </div>
      <!-- Antenatal Care -->
      <div class="col-md-12 col-lg-12 col-xs-12">
         <h2 class="parentcraftTitle">The Importance of Antenatal Care</h2>
         <img class="love-image" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
         <p class="parentcraftDescription">Antenatal classes help expecting parents to focus on your pregnancy and forthcoming labour and birth. It could help you with your antenatal care during pregnancy, antenatal diet and plan, exercises, childbirth, and many more. Most importantly, it covers all the general information about the process of labour, childbirth, and after delivery.</p>
      </div>
      <!-- Programme Highlights -->
      <div class="col-md-12 col-lg-12 col-xs-12">
         <h2 class="parentcraftTitle">Programme Highlights</h2>
         <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/tittle/ph_tittle.png" width="100%" alt="programmeHighlight" />-->
      </div>
      <div class="clearfix"></div>
      <!-- Gallery slider -->
	  <div style="padding-right:15px;padding-left:15px;">
		  <div id="slider_row" class="col-md-6 col-lg-6 col-xs-12" style="margin-bottom: 10px; padding: 0;">
			 <div id="homepage-slidersecond" class="home_slider" style="padding-top: 0;">
				<ul id="homeslidersecond">
				   <li class="homeslider-container">
					  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/slide1_speaker.png" width="100%" /></div>
				   </li>
				   <li class="homeslider-container">
					  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/parentkit.png" width="100%" /></div>
				   </li>
				   <li class="homeslider-container">
					  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/onlineprogrammehighlight3.png" width="100%" /></div>
				   </li>
				</ul>
			 </div>
		  </div>
		  <!-- Gallery Slider END -->
		  <div class="col-md-6 col-lg-6 col-xs-12" style="background-color: #265e70; padding: 24px 50px; height: 100%; color: white; line-height: 1.5; display: block;">
			 <p class="sliderTextTitle">This Course Includes:</p>
			 <p class="sliderTextPoints">⭐ Learn Everything from Pregnancy to Newborn Care.</p>
			 <p class="sliderTextPoints">⭐ 1-Year Access to Learning Portal.</p>
			 <p class="sliderTextPoints">⭐ Learn 17 Key Topics - Easy to Watch Video Classes.</p>
			 <p class="sliderTextPoints">⭐ Access to Over 10 Panel of Experts.</p>
			 <p class="sliderTextPoints">⭐ Watch Whenever and Wherever You Like.</p>
			 <p class="sliderTextPoints">⭐ Bi-weekly Webinars on Selected Topics with Panel of Expert.</p>
			 <p class="sliderTextPoints">⭐ Receive FREE Motherhood Parentcraft Kit worth RM75 delivered to your home.</p>
		  </div>
	  </div>
      <div class="clearfix"></div>
      <!-- Content under programme highlight -->
      <div class="col-md-12 col-lg-12 col-xs-12" style="padding-right: 0; padding-left: 0; margin-top: 25px;">
         <h2 class="parentcraftTitle">Upcoming Webinar</h2>
         <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/tittle/upcomingevent_tittle.png" width="100%" alt="image1" />-->
      </div>
      <!-- UPCOMING EVENT SLIDER -->
      <div class="clearfix"></div>
      <div class="col-md-12 enlinea_slider div-row-calendar-slider" style="padding-top: 20px;">
         <div class="slider_container">
            <ul class="calendar-slider">
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_jan23.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout with Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_feb6.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Mental and Emotional Preperation For Your Baby</p>
                           <p class="speaker-webinar">SPEAKER : PAMILIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_feb27.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">How to Care of a Newborns Gentle Skin</p>
                           <p class="speaker-webinar">SPEAKER : DR ADRIAN YONG</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_mar13.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Pregnancy Nutrition Guide</p>
                           <p class="speaker-webinar">SPEAKER : LEE CHUN HSIEN</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_apr03.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout With Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_apr.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">1st to 4th Trimester Diet Guide</p>
                           <p class="speaker-webinar">SPEAKER : LEE CHUN HSIEN</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_apr24.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Delivery &amp; Vacination Process</p>
                           <p class="speaker-webinar">SPEAKER :</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_may08.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Pregnancy Nutrition Chart</p>
                           <p class="speaker-webinar">SPEAKER : LEE CHUN HSIEN</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_may.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Tips on How to Bath Your Baby</p>
                           <p class="speaker-webinar">SPEAKER : LIM SIEW PEI</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_may29.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout With Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_jun.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Sleep Tips</p>
                           <p class="speaker-webinar">SPEAKER : SARAH ONG</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_jun26.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout With Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_jul.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Safe Exercising Tips From Trimester 1 To After Delivery</p>
                           <p class="speaker-webinar">SPEAKER : PAVITHRA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_jul24.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Myths And Facts On Delivery And What To Expect In 2021</p>
                           <p class="speaker-webinar">SPEAKER :</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_aug.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">How To Ensure Optimum Milk Supply</p>
                           <p class="speaker-webinar">SPEAKER : DR ZARINA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_aug28.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout With Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_sep.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Infant CPR</p>
                           <p class="speaker-webinar">SPEAKER : DR SHAHRUL</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_sep25.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Baby Bump Workout With Lavinia</p>
                           <p class="speaker-webinar">SPEAKER : LAVINIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_oct.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Right Nutrition is The Key Factor to Solving Pregnancy Complications</p>
                           <p class="speaker-webinar">SPEAKER : LEE CHUN HSIEN</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/2021_oct23.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Important Tips To Know When Going Through Delivery</p>
                           <p class="speaker-webinar">SPEAKER :</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_nov.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Child Brain Development with Playtime</p>
                           <p class="speaker-webinar">SPEAKER : PAMILIA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="product-box item" style="min-width: 150px;">
                  <div class="reviewBox-calendar">
                     <div class="speakerBox-calendar">
                        <div class="col-md-5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/webinarupcomingdates/updateddate/date_dec.png" width="100%" alt="january" /></div>
                        <div class="col-md-7 div-web-desc">
                           <p style="font-weight: normal;" class="date-webinar">3.00pm-4.00pm (Sat)</p>
                           <p class="desc-webinar">Safe Exercising Tips from Trimester 1 Till Delivery</p>
                           <p class="speaker-webinar">SPEAKER : PAVITHRA</p>
                           <a href="../../../events/zoom-live-registration-form" class="btn btn-default btn-view-event">VIEW EVENT</a>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="clearfix"></div>
      <!-- Content under programme highlight -->
      <div class="col-md-12 col-lg-12 col-xs-12">
         <h2 class="parentcraftTitle">Past Webinars</h2>
         <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
         <p class="parentcraftDescription">Join Parentcraft now to watch all webinars</p>
      </div>
      <!-- <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/tittle/pastevent_tittle.png" width="100%" alt="image1" />-->
   </div>
   <!-- PAST EVENT SLIDER -->
   <div id="section-slider">
      <div class="section_container">
         <div id="section-thekapitan" style="border: 0px !important;">
            <ul class="clearfix row section_slidethekapitan section5   nbs-flexisel-ul">
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/drazrai.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/drazrai.png" alt="pandemic" title="pandemic" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/elpeni.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/elpeni.png" alt="breastfeeding" title="breastfeeding" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayde_nov14.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayde_nov14.png" alt="dietary_guide" title="dietary_guide" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/lavinia_june20.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/lavinia_june20.png" alt="aches_and_pain_during_pregnancy" title="aches_and_pain_during_pregnancy" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayden_july04.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayden_july04.png" alt="pregnancy_myths" title="pregnancy_myths" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayden_nov28.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/jayden_nov28.png" alt="pregnancy_complication" title="pregnancy_complication" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/sarah-ong.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/sarah-ong.png" alt="baby's_nap" title="baby's_nap" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/pastwebinars/jan09.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/pastwebinars/jan09.png" alt="baby's_nap" title="baby's_nap" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
               <li class="nbs-flexisel-item" style="width: 262.5px;">
                  <div class="product-container">
                     <div class="left-block2">
                        <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/limsiewpei.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/webinar/limsiewpei.png" alt="breastfeeding" title="breastfeeding" itemprop="image" /></div>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
   <!-- Video testimonial -->
   <div class="col-md-12 col-lg-12 col-xs-12" style="margin-top: 9px;">
      <h2 class="parentcraftTitle">Video</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/tittle/video_tittle.png" width="100%" alt="videoTestimonial" />-->
   </div>
   <div class="col-lg-12 col-md-12"><iframe src="https://www.youtube.com/embed/Ugbhb5zWwns" allowfullscreen="allowfullscreen" width="100%" height="500px" frameborder="0"></iframe></div>
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Speakers</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
      <p class="parentcraftDescription">Motherhood.com.my's parentcraft classes are facilitated by experienced consultants, gynaecologist, nurses, physiotherapist, nutritional therapist and certified Pilates instrutor.</p>
   </div>
   <div class="clearfix"></div>
   <!-- Join Now Speaker END --> <!-- Speakers-->
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drcaryn.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DATIN DR CARYN</p>
         <p class="speakerDescription">Dental Surgeon, Kuala Lumpur International Dental Center, BDS (MAHE), AACD (USA)</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drtan-cheng.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. TAN CHENG</p>
         <p class="speakerDescription">Consultant Obstetrician &amp; Gynaecologist in Tung Shin Hospital. MBChb (Bristol, UK) MRCOG (London, UK)</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_lavinia.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">LAVINIA CHEW MEI SUM</p>
         <p class="speakerDescription">Bachelor of Physiotherapy (Hons), Physio-fitness practitioner, <a href="https://www.flexmobstudios.com/flexcoach/lavcms" style="text-decoration: none;"> Founder of Flexmob Studios and WWB. </a></p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_kexin.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. YIP KE XIN</p>
         <p class="speakerDescription">Pediatrician of HappyKids Child Specialist Clinic, Paediatric Clinical Specialist.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_druma.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. UMA SOTHINATHAN</p>
         <p class="speakerDescription">Consultant Neonatologist from Pantai Hospital Kuala Lumpur.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_leechunhsien.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">LEE CHUN HSIEN</p>
         <p class="speakerDescription">Nutritional Therapist for Pregnancy Nutrition, B.Sc. Degree in Nutrition Science, Certified in Nutritional Medicine</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drnada.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. NADA SUDHAKARAN</p>
         <p class="speakerDescription">Consultant Paediatric General &amp; Urology Surgeon</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drzarina.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. ZARINA RAHMAN</p>
         <p class="speakerDescription">Family Doctor at Klinik Famili Gravidities and a certified lactation counsellor.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_pamilia.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">PAMILIA</p>
         <p class="speakerDescription">Clinical Psychologist and Health Coach</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drshahrul.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR. SHAHRUL NIZAM</p>
         <p class="speakerDescription">Emergency Medicine Specialist and FirstAid Trainer, Klinik Famili Gravidities &amp; Gravidities Academy Wangsa Maju</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_elpeni.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">ELPENI BINTI RAMLI</p>
         <p class="speakerDescription">Staff Nurse 2010, Certified Lactation Counselor, National Lactation Centre 2015.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_pavithra.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">PAVITHRA CHANDERAN</p>
         <p class="speakerDescription">Pilates Instructor, Diploma in Physiotherapy, Pre- &amp; Post-natal Pilates and Rehabilitation Pilates.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_sarah.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">SARAH ONG</p>
         <p class="speakerDescription"><a href="https://www.sarahong.co/about" style="text-decoration: none;">Baby Sleep Coach</a>, Member of the Association of Professional Sleep Consultants.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drJoAnn.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR JOANN RAJAH</p>
         <p class="speakerDescription">Paediatrician from ABC Children Specialist Clinic.</p>
      </div>
   </div>
   <div class="col-md-3 col-lg-3 col-xs-6">
      <div class="speakerBox">
         <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker+bg/speaker_drfoo.png" width="100%" alt="Physiotherapy" />
         <p class="speakerName">DR FOO CHEE HOE</p>
         <p class="speakerDescription">Paediatrician from Pantai Hospital Ampang and <a href="https://drfooclinic.wordpress.com/" style="text-decoration: none;"> Dr Foo Child Specialis Clinic. </a></p>
      </div>
   </div>
   <!-- Speakers END-->
   <div class="clearfix"></div>
   <ul>
      <ul>
         <!-- Email Question -->
      </ul>
   </ul>
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Checklists</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
      <p class="parentcraftDescription">To ease your pregnancy journey, Motherhood prepared exclusive checklists for all expecting parents. Download now !</p>
   </div>
   <div class="clearfix"></div>
   <div class="checklistBox col-md-4 col-lg-4 col-xs-12">
      <img width="100%" class="img-responsive checklistImage" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/checklist+image/hospitalbagchecklist_image.png" />
      <p class="checklistText"><span style="font-size: 16px;">Hospital Bag Checklist</span><br /><br /> Here is an extensive list of what you will need to pack for <a href="https://story.motherhood.com.my/blog/category/pregnancy-and-birth/labour-delivery/" style="text-decoration: none;"> labour and after delivery </a> in your hospital bag. It is better to pack early!</p>
   </div>
   <div class="checklistBox col-md-4 col-lg-4 col-xs-12">
      <img width="100%" class="img-responsive checklistImage" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/checklist+image/mommytodolist_image.png" />
      <p class="checklistText"><span style="font-size: 16px;">The Mommy To-Do-List</span> <br /><br /> <a href="https://story.motherhood.com.my/blog/category/pregnancy-and-birth/trimesters/" style="text-decoration: none;"> From the first trimester up until your last weeks</a>, here are the essential things that you should do before the birth of your baby.</p>
   </div>
   <div class="checklistBox col-md-4 col-lg-4 col-xs-12">
      <img width="100%" class="img-responsive checklistImage" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/checklist+image/shoppinglist_image.png" />
      <p class="checklistText"><span style="font-size: 16px;">Baby Shopping List</span> <br /><br /> Overwhelmed (and excited) with the countless baby products? Here is the perfect List of what you should get - and don't - for your newborn.</p>
   </div>
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12" style="background: #ffe1e7; padding: 25px 0px 85px 0px;">
      <div class="col-md-4 col-lg-4 col-xs-12" style="padding-left: 25px;">
         <h3 style="color: #265e70; font-weight: bold; font-size: 25px;">Get free checklists</h3>
      </div>
      <div class="col-md-5 col-lg-5 col-xs-8" style="padding-right: 0;"><input id="newEmail" placeholder="Insert Your Email" style="color: black; box-shadow: none !important; border-radius: 0; font-size: 18px; padding: 13px 10px; margin-top: 0;" name="newEmail" required="required" type="email" /></div>
      <div class="col-md-2 col-lg-2 col-xs-4" style="padding-left: 0; padding-right: 25px;"><button class="btn btn-default button button-medium pull-right" style="font-size: 18px; background: #ff7fae; width: 100%; border: none; padding: 15px 15px 15px 15px; color: white; margin-top: 0;" name="submit" type="submit"> Submit </button></div>
   </div>
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Topics</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
   </div>
   <div style="padding-right:9px;padding-left:9px;">
	   <div class="row" style="margin-left: -10px; margin-right: -10px; color: #265e70; background: #ffcfda; padding: 50px 10px; text-align: left;">
		  <div class="col-md-3 col-lg-3 hidden-xs"></div>
		  <div class="col-md-7 col-lg-7 col-xs-12">
			 <h3 class="epTitle">EPISODE 1 :</h3>
			 <p class="epDesc">CHANGES IN HORMONES AND POSTURES</p>
			 <h3 class="epTitle">EPISODE 2 :</h3>
			 <p class="epDesc">COMMON ACHES AND PAIN</p>
			 <h3 class="epTitle">EPISODE 3 :</h3>
			 <p class="epDesc">DELIVERY PROCESS AND PROCEDURES - VAGINAL BIRTH AND CESAREAN BIRTH</p>
			 <h3 class="epTitle">EPISODE 4 :</h3>
			 <p class="epDesc">CONTRACTION AND RELAXATION</p>
			 <h3 class="epTitle">EPISODE 5 :</h3>
			 <p class="epDesc">PREGNANCY NUTRITION</p>
			 <h3 class="epTitle">EPISODE 6 :</h3>
			 <p class="epDesc">PRE-NATAL PILATES PRACTICAL SESSIONS</p>
			 <h3 class="epTitle">EPISODE 7 :</h3>
			 <p class="epDesc">HOW TO PREPARE YOUR MIND DURING AND AFTER PREGNANCY</p>
			 <h3 class="epTitle">EPISODE 8 :</h3>
			 <p class="epDesc">INFANT AND TODDLER NUTRITION</p>
			 <h3 class="epTitle">EPISODE 9 :</h3>
			 <p class="epDesc">CHILDBIRTH - ASSISTED VAGINAL BIRTH</p>
			 <h3 class="epTitle">EPISODE 10 :</h3>
			 <p class="epDesc"><a href="https://story.motherhood.com.my/blog/how-to-get-a-good-deep-latch-the-key-to-successful-breastfeeding/" style="text-decoration: none;"> SUCCESSFUL BREASTFEEDING</a></p>
			 <h3 class="epTitle">EPISODE 11 :</h3>
			 <p class="epDesc">BABY BATH &amp; BABY BURPING &amp; BABY MASSAGE</p>
			 <h3 class="epTitle">EPISODE 12 :</h3>
			 <p class="epDesc">DENTISTRY IN PREGNANCY &amp; NEWBORN ORAL CARE</p>
			 <h3 class="epTitle">EPISODE 13 :</h3>
			 <p class="epDesc">PAEDIATRIC - DECISIONS TO MAKE ABOUT YOUR NEWBORN</p>
			 <h3 class="epTitle">EPISODE 14 :</h3>
			 <p class="epDesc">PAEDIATRIC - CARING FOR NEWBORN DURING THE FIRST 30 DAYS</p>
			 <h3 class="epTitle">EPISODE 15 :</h3>
			 <p class="epDesc">WHEN DOES A NEWBORN NEED TO GO THROUGH SURGERY?</p>
			 <h3 class="epTitle">EPISODE 16 :</h3>
			 <p class="epDesc">NEWBORN SLEEPING TIPS FOR NEW PARENTS</p>
			 <h3 class="epTitle">EPISODE 17 :</h3>
			 <p class="epDesc">FIRST AID - BABY CPR AND BABY CHOKING</p>
			 <p style="float: right; font-size: bold; font-style: italic;">*Subject to change.</p>
		  </div>
		  <!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/Parencraft_websitedesigntopicnew.png" width="100%" alt="topicImage" />-->
	   </div>
   </div>
   <div class="clearfix"></div>
   <!-- Reviews -->
   <div class="col-md-12 enlinea_slider" style="padding-top: 20px;">
      <div class="slider_container">
         <ul id="nestlearticle_list_car">
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>25/06/2020</p>
                  <p style="font-weight: bold;">Yuki Au Yong</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">I Like The Q&amp;A Session As I Get My Questions Answered As Well</p>
                  <p>While the course is nice and short with all the necessary information highlighted on the go. It is easy to understand for busy moms who needs to know the essentials.</p>
               </div>
            </li>
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>24/06/2020</p>
                  <p style="font-weight: bold;">Loi Pei Lui</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">I Like The COVID-19 Talk &amp; How Can Pregnant Mums Protect Themselves</p>
                  <p>It is an amazing and a great class for new mums. It is a good talk to help pregnant mum. I just want to say that I highly recommended this antenatal class in Selangor to all my pregnant friend. Attending this programme was a valuable experience for me.</p>
               </div>
            </li>
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>22/06/2020</p>
                  <p style="font-weight: bold;">Sofia Sarena Michael</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">It Was Informative Especially The Question And Answer Session.</p>
                  <p>It was an informative class and Dr Zarina was great. As a first-time mum to be, some questions were answered and it also assured me that I need to be positive in tackling my breastfeeding journey. Thanks again doctor and motherhood!</p>
               </div>
            </li>
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>19/06/2020</p>
                  <p style="font-weight: bold;">Phoebe Lee</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">Sharing Talk By Dr Caryn</p>
                  <p>I feel lucky to be able to join this talk for free. Looking forward to more similar talks in the future and experience sharing by the professionals. It would be a great help to all the mothers or soon-to-be mothers out there.</p>
               </div>
            </li>
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>16/06/2020</p>
                  <p style="font-weight: bold;">Joanna Oh</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">Made Me Realise That I Have To Prepare More On How To Handle Baby</p>
                  <p>This is a very good session for us pregnant mum during this pandemic, especially for those in KL as it is indeed a very worrying time and knowing that there are mums out there who are as worried and share is very comforting.</p>
               </div>
            </li>
            <li class="product-box item" style="min-width: 178px;">
               <div class="reviewBox">
                  <p>20/05/2020</p>
                  <p style="font-weight: bold;">Elaine T</p>
                  <p class="reviewStars">★ ★ ★ ★</p>
                  <p style="font-weight: bold;">Learned A Lot And Feel More Prepared</p>
                  <p>Joined the class just about a week ago, has been quite a week especially with this MCO. I'm really glad me and my husband signed up for it, as I am expected to deliver in another 2 weeks, and I feel a lot more prepared. Thank you Motherhood.</p>
               </div>
            </li>
         </ul>
      </div>
   </div>
   <!-- Reviews END-->
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/Parencraft_taglinenew.png" width="100%" alt="parentCraftTagline" /></div>
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12" style="padding-bottom: 20px;">
      <h2 class="parentcraftTitle">Lesson You Don't Want To Miss</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/tittle/tittle_lesson.png" width="75%" alt="titlelesson" />-->
   </div>
   <div class="col-md-6 col-lg-6 col-xs-12"><iframe width="100%" height="315" src="https://www.youtube.com/embed/Fc6YRlTbKR4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
   <div class="col-md-6 col-lg-6 col-xs-12"><iframe width="100%" height="315" src="https://www.youtube.com/embed/eUbX5JrSEqE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
   <div class="clearfix"></div>
   <!-- ParentCraft Tagline END -->
   <p></p>
   <!-- Online Content END -->
   <div class="online-content" style="background-color: #ffcfda; padding: 15px; z-index: 999; position: fixed; bottom: 0; width: 100%; left: 0; box-shadow: 0px 0px 13px #ff7fae;">
      <div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-xs-12"><a href="../../../campaign-nurengroup/education/baby-learning/baby-enrichment-classes/parentcraft-class-online.html" target="_blank" rel="noopener"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/joinnowbutton.gif" width="100%" alt="joinNowBtn" /> </a></div>
   </div>
</div>
<!-- Offline Content-->
<div class="offline-content row">
   <!-- Offline Banner -->
   <div class="col-md-12 col-lg-12 col-xs-12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/parentcraftoffline_coverbanner.png" width="100%" alt="offlineBanner" /></div>
   <!-- Offline Banner END--> <!--==================== HIGHLIGHT ====================-->
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Programme Highlights</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
      <div class="clearfix"></div>
      <!--
         <!========================== GALLERY  ==========================-->
      <div id="slider_row" class="col-md-6 col-lg-6 col-xs-12" style="margin-bottom: 20px; padding-left: 0; padding-right: 0;">
         <div id="homepage-sliderthird" class="home_slider">
            <ul id="homesliderthird">
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_1.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_2.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_3.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_4.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_5.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_6.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_7.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_8.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_9.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_10.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_11.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_12.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_13.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_14.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_15.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_16.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_17.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_18.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_19.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_20.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_21.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_22.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_23.png" width="100%" /></div>
               </li>
               <li class="homeslider-container">
                  <div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/programme+highlights+image/pc_24.png" width="100%" /></div>
               </li>
            </ul>
         </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xs-12" style="background-color: #265e70; padding: 19px 50px; height: 100%; min-height: 436px; color: white; line-height: 1.5; display: block;">
         <p class="sliderTextTitle">What Will You Learn?</p>
         <p class="sliderTextPoints">Pregnancy and baby nutrition.</p>
         <p class="sliderTextPoints">Delivery process and procedures.</p>
         <p class="sliderTextPoints">Antenatal exercise.</p>
         <p class="sliderTextPoints">Breastfeeding tips, tricks, do's and don'ts.</p>
         <p class="sliderTextPoints">Baby Bath - safe, fun and exciting bath time.</p>
         <p class="sliderTextPoints">Oral care for babies.</p>
         <p class="sliderTextPoints">First aid and CPR awareness for newborn babies.</p>
      </div>
   </div>
   <div class="clearfix"></div>
   <!--==================== VIDEO ===================-->
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Video</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!--<img
         src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/videotittle.png" width="100%" alt="videotestimonialtitleoffline" /></div>
         <!================= VIDEO FULLSCREEN ===================-->
      <div class="col-lg-12 col-md-12"><iframe src="https://www.youtube.com/embed/XOpQyBybiBs" allowfullscreen="allowfullscreen" width="100%" height="500px" frameborder="0"></iframe></div>
   </div>
   <!--====================== CTA BUTTON ==========================-->
   <div class="row">
      <div class="col-lg-12">
         <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 40px; padding-right: 40px;"><a href="../../../campaign-nurengroup/education/baby-learning/baby-enrichment-classes/parentcraft-class-limited-seats-available.html" target="_blank" rel="noopener"> <img class="" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/joinnowbutton.gif" width="100%" /> </a></div>
      </div>
   </div>
   <!--==================== SPEAKER ====================-->
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Speakers</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" /> <!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/speaker_tittle.png" width="100%" alt="speaker" />-->
   </div>
   <div class="clearfix"></div>
   <!-- SPEAKERS -->
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker/speaker_lavinia.png" width="100%" /></div>
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker/speaker_jayden.png" width="100%" /></div>
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker/speaker_pavitranew.png" width="100%" /></div>
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/speaker/speaker_lim.png" width="100%" /></div>
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/speaker/speaker_pam.png" width="100%" /></div>
   <div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; padding-right: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/speaker/speaker_drtan.png" width="100%" /></div>
   <!-- Speakers END -->
   <div class="clearfix"></div>
   <!--========================== EVENT INFO ==========================-->
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Event Info</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
      <div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/venue_new.png" width="100%" /></div>
   </div>
   <p>
      <!--====================== SCHEDULE ========================-->
   </p>
   <div class="col-md-12 col-lg-12 col-xs-12">
      <h2 class="parentcraftTitle">Schedule</h2>
      <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
      <div class="clearfix"></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-07.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-08.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-09.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-10.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-11.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-12.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-13.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-14.png" width="100%" /></div>
      <div class="col-lg-2 col-md-2 col-xs-4 schedule-div" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px;"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/newdate/date/offlinedate_new-15.png" width="100%" /></div>
   </div>
   <p>
      <!--================== ITINERARY TITTLE ===============-->
   </p>
   <div class="clearfix"></div>
   <div class="col-md-12 col-lg-12 col-xs-12" style="margin-bottom: 3px !important; padding-bottom: 4px;">
      <div class="row" style="margin-top: 16px;    padding-left: 15px; padding-right: 15px;">
         <h2 class="parentcraftTitle">Itinerary</h2>
         <img class="love-image-small" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/love-03.png" style="width: 35px; margin-top: -40px;" alt="love" />
         <div class="clearfix"></div>
         <!-- Offline Itinerary Background -->
         <div class="col-lg-12 col-md-12" style="padding-left: 15px; padding-right: 15px; background-color: #265e70;">
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">8.00 am - 8.45 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Arrivals and Registrations</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">9.00 am - 9.10 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Welcome Speech &amp; Ice Breaking</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">9.10 am - 9.45 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Pre-natal Pilates</p>
                  <p class="ItineraryTitle-small">-- Pavithra Chanderan - Pilates Instructor</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">9.50 am - 10.20 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Changes In Your Body During and After Pregnancy</p>
                  <p class="ItineraryTitle-small">-- Lavinia Chew - Physio-fitness Practitioner</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">10.20 am - 10.35 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Contraction and Relaxations</p>
                  <p class="ItineraryTitle-small">-- Lavinia Chew - Physio-fitness Practinioner</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">10.40 am - 11.05 am</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Pregnancy Nutrition</p>
                  <p class="ItineraryTitle-small">-- Jayden Lee - Nutritional Therapist</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">11.35 am - 12.05 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Delivery Process and Post-partum Care</p>
                  <p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">12.10 pm - 12.30 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">The Wonders of Umbilical Cord Care</p>
                  <p class="ItineraryTitle-small">-- Cryocord</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">12.35 pm - 1.30 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Lunch Break</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">1.35 pm - 2.00 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Breastfeeding and Baby Burping</p>
                  <p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">2.05 pm - 2.35 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Baby Bath</p>
                  <p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">2.40 pm - 3.10 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Sharing of Baby Safety and First Aid Awareness</p>
                  <p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">3.30 pm - 3.45 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Mental Preparation and Post-partum Depression Awareness</p>
                  <p class="ItineraryTitle-small">-- Pamilia - Clinical Psychologist</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">3.30 pm - 3.45 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Lucky Draw</p>
               </div>
            </div>
            <div class="offlineItineraryRow">
               <div class="offlineItineraryTimeBox">
                  <p class="ItinerarytimeDate">3.45 pm - 3.55 pm</p>
               </div>
               <div class="offlineItineraryTitleBox">
                  <p class="ItineraryTitle">Announcement &amp; Closing</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Offline Itinerary Background END -->
   <div class="col-lg-12" style="margin-bottom: 16px;padding-left: 40px; padding-right: 40px;"><a href="../../../campaign-nurengroup/education/baby-learning/baby-enrichment-classes/parentcraft-class-limited-seats-available.html" target="_blank" rel="noopener"> <img class="" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/joinnowbutton.gif" width="100%" /></a></div>
   <p>
      <!--================== TAGLINE =================-->
   </p>
   <div class="clearfix"></div>
   <div class="col-lg-12 col-md-12" style="padding-left: 15px; padding-right: 15px;"><img class="" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/tagline01-pc.png" width="100%" /></div>
</div>
<p><a href="#" onclick="topFunction()" id="topBtn" title="Go to top"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a></p>
<!-- Offline Content END -->
<p>
</div>
   <script>// <![CDATA[
      $(window).load(function () {
                  		$(".offline-content").addClass("visuallyhidden");
                  	});
                  		
                      function scrollFunction() {
                  		var mybutton = document.getElementById("topBtn");
                  		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  			mybutton.style.display = "block";
                  		} 
                  		else {
                  			mybutton.style.display = "none";
                  		}
                  	}
                  	
                  	// When the user clicks on the button, scroll to the top of the document
                  	function topFunction() {
                  		document.body.scrollTop = 0;
                  		document.documentElement.scrollTop = 0;
                  	}
                   
                  	$(document).ready(function(){
                  		// When the user scrolls down 20px from the top of the document, show the button
                  		window.onscroll = function() {scrollFunction()};
					
                  		$(".onlineBtn").on("click", function () {
                              //$('.online-content').show();
                              //$('.offline-content').hide();
                              $(".offline-content").addClass("visuallyhidden");
                              $(".online-content").removeClass("visuallyhidden");
                              $(window).resize();
                              $("img").trigger("unveil");
							  $('body').find('.nbs-flexisel-inner').addClass('bg-color-change');
							  $('body').find('.bg-color-change').css('background-color', "#fae2e7");
                  		});
                  		
                  		$(".offlineBtn").on("click", function () {
                              //$('.offline-content').show();
                              //$('.online-content').hide();
                              $(".online-content").addClass("visuallyhidden");
                              $(".offline-content").removeClass("visuallyhidden");
                              $(window).resize();
                              $("img").trigger("unveil");
							  $('body').find('.nbs-flexisel-inner').addClass('bg-color-change');
							  $('body').find('.bg-color-change').css('background-color', "#265e70");
                  		});
            			
            			$('body').find('.section_slidethekapitan').flexisel({
            				visibleItems: 5,
            				flipPage: true,
            				animationSpeed: 500,
            				animationLoop: true,
            				clone: false,
            				autoPlay: false
            			});
						
						$('body').find('.nbs-flexisel-inner').addClass('bg-color-change');
						$('body').find('.bg-color-change').css('background-color', "#fae2e7");
                  	});
       
      // ]]>
   </script>
</p>