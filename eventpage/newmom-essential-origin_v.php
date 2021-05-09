<style>
   <!--
      p{
              margin-bottom:20px;
              font-size:18px;
              line-height:28px;
              color:#444;
          }
          li{
              list-style: square;
          }
          ul, ol{
              padding-left: 20px;
          }
          h1,h2{
              font-weight:700;
          }
          .weeklyBox{
              background-color:#005b9c;
              color:white;
              font-size: 20px;
              font-weight: bold;
              padding: 20px 0px;
              cursor: pointer;
              width:200px;
              margin-right:3px;
              display: inline-block;
              color: white;
              text-align: center;
              text-decoration: none;
              margin-bottom:15px;
              border-radius:12px;
          }
          .weeklyBox:hover{
              background-color:#29969b;
          }
      #style-7::-webkit-scrollbar-track
      {
          background-color: #F5F5F5;
          border-radius: 10px;
      }
      
      #style-7::-webkit-scrollbar
      {
          width: 10px;
          background-color: #F5F5F5;
      }
      
      #style-7::-webkit-scrollbar-thumb
      {
          border-radius: 10px;
          background-color: #7a99d9;
      }
	  
	  
	   .row-form{
      		margin-top:5px;
      		margin-bottom:5px;
      	}
      		
      	.box-overlay-display {
      		background-color: #b4b3b482;      
      		position: absolute;
      		left: 0;
      		right: 0;
      		top: 0;
      		bottom: 0;
      		z-index:2;
      		display:block !important;
      	}
      
      	.text-overlay{
      		position: relative;
      		top: 50%;
      		left: 50%;
      		font-size: 35px;
      		color: #4c4c4d;
      		transform: translate(-50%,-50%);
      		-ms-transform: translate(-50%,-50%);
      	}
      		
      	.unclickable{
      		cursor: not-allowed;
      	}
      		
      	.background-grey-readonly{
      		background-color:#b4b3b452 !important;
      		color:#4c4c4d !important;
      	}
      		
      	.btn-step1{
      		background-color: #38a7ac;
      		color: #fff;
      		font-size: 18px;
      		border-radius: 4px;
      		padding: 8px 40px;
      		min-width: 300px;
			outline:unset;
      	}
      	
      	.btn-step1:hover, .btn-step1:focus{
      		background-color: #1C6F74;
      		color: white;
			outline: unset;
      	}
      		
      	.btn-step1[disabled], .btn-step1[disabled]:hover{
      		background-color: #38a7ac87 !important;
      	}
      	
      	.motherhood-input-invalid, .motherhood-input-invalid:focus {
      		color: #b94a48;
      		border-color: #e9322d !important;
      	}
      	
      	.tnc_li{
      		margin-bottom: 5px;
      		font-size: 13px;
      	}
      	
      	.loading {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 50px;
			height: 50px;
			margin-left: -25px;
			margin-top: -25px;
			z-index: 99999;
		}
      	
      	.enlinea_slider_custom h3 {
      		text-align: left;
      	}
      
      	.enlinea_slider_custom .slider_container {
      		position: relative;
      	}
      
      	.enlinea_slider_custom .bx-wrapper {
      		margin: auto;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-prev {
      		left: -16px;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-next {
      		right: -20px;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a {
      		position: absolute;
      		top: 80px;
      		outline: 0;
      		width: 52px;
      		height: 52px;
      		z-index: 700;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a:after {
      		color: #2da2ac;
      		font-family: FontAwesome;
      		font-size: 26px;
      		display: block;
      		width: 48px;
      		height: 48px;
      		text-align: center;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-controls-direction a:hover:after {
      		color: #26989e;
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-prev:after {
      		content: "\f053";
      	}
      
      	.enlinea_slider_custom .bx-wrapper .bx-next:after {
      		content: "\f054";
      	}
      
      	.enlinea_slider_custom .bx-wrapper a.disabled {
      		display: none;
      	}
      
      	.enlinea_slider_custom .bx-pager-item{
      		display:none;
      	}
      	
      	.parent-article-title{
      		color: #4c4c4d; 
      		font-size: 16px;
      		font-weight: 600; 
      		padding-top: 15px; 
      		line-height: 1.2; 
      		min-height:53px;
      	}
      	
      	.parent-articale-btn, .parent-articale-btn:hover, .parent-articale-btn:focus, parent-articale-btn:active{
      		font-size: 18px;
      		border-radius: 4px;
      		padding: 8px 40px;
      		color: #fff;
      		background-color: #2ea7ad;
      		border-color: #2ea7ad;
      		width:100%;
      	}
      	
      	.section_title_motherhood {
      		text-align: center;
      		padding: 30px 0;
      		text-transform: uppercase;
      		display: block;
      		clear: both;
      	}
      	
      	.section_title_motherhood>span {
      		color: #2fa7ad;
      		font-size: 20px;
      		font-weight: bold;
      		padding: 0 40px;
      	}
      
      	.section_title_motherhood::before, .section_title_motherhood::after {
      		content: ":::::::::::::::::::::::::::::::::::::::::::::::::::::::";
      		color: #ababab;
      		vertical-align: text-bottom;
      		font-size: 8px;
      	}
      	
      				
            p{
      			  margin-bottom:20px;
      			  font-size:18px;
      			  line-height:28px;
      			  color:#444;
      		  }
                
                h1,h2{
                    font-weight:700;
                }
                .weeklyBox{
                    background-color:#005b9c;
                    color:white;
                    font-size: 20px;
                    font-weight: bold;
                    padding: 20px 0px;
                    cursor: pointer;
                    width:200px;
                    margin-right:3px;
                    display: inline-block;
                    color: white;
                    text-align: center;
                    text-decoration: none;
                    margin-bottom:15px;
                    border-radius:12px;
                }
                .weeklyBox:hover{
                    background-color:#29969b;
                }
            #style-7::-webkit-scrollbar-track
            {
                background-color: #F5F5F5;
                border-radius: 10px;
            }
            
            #style-7::-webkit-scrollbar
            {
                width: 10px;
                background-color: #F5F5F5;
            }
            
            #style-7::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                background-color: #7a99d9;
            }
      	
      	@media only screen and (max-width: 680px){
      		
      		.parent-article-title{
      			font-size: 14px;
      			min-height:72px;
      		}
      
      		.parent-articale-btn, .parent-articale-btn:hover, .parent-articale-btn:focus, parent-articale-btn:active {
      			font-size: 14px;
      			padding: 5px 25px;
      		}
      		
      		.section_title_motherhood > span {
      			display: block;
      			padding: 0 20px!important;
      		}
			
			.text-overlay{
				font-size: 29px;
			}
			
			#row-features{
				 min-height: 150px;
				margin-bottom: -100px;
			}
      	}
      -->
</style>
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/new-essential-header.png" width="100%" /></div>
<div class="row">
   <div class="col-md-3 col-xs-6"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/due-date-calculator.png" onclick="toolsChange(this);" toolsname="dueDateCalculator" width="100%" /></div>
   <div class="col-md-3 col-xs-6"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/baby's-journey.png" onclick="toolsChange(this);" toolsname="pregnancyJourney" width="100%" /></div>
   <div class="col-md-3 col-xs-6"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/eArtboard+%E2%80%93+29.png" onclick="toolsChange(this);" toolsname="eMag" width="100%" /></div>
   <div class="col-md-3 col-xs-6"><a href="https://story.motherhood.com.my/blog/category/lifestyle-happening-now/recipes/" target="_blank" rel="noopener"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/recipes-icon.png" toolsname="recipe" width="100%" /> </a></div>
   <div class="col-md-3"></div>
   <div class="col-md-3"></div>
</div>
<div class="babyJourney tools">
   <div id="newMomEssentialForm">
      <div class="col-lg-12 col-md-12">
         <div class="col-md-12" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
            <div class="clearfix"></div>
            <p style="font-size: 2em; color: #005b9c; font-weight: bold; line-height: 1;">Let's personalise your journey.</p>
            <p style="font-size: 2em; color: #005b9c; font-weight: bold; line-height: 1;">Enter your <span style="color: #d58892;">Estimate Date of Delivery (EDD)</span></p>
            <p style="font-size: 2em; color: #005b9c; font-weight: bold; padding-bottom: 20px; line-height: 1;">or <span style="color: #d58892;">New Baby's Birthday</span></p>
            <div class="clearfix"></div>
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="babyYear" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
                  <option value="" disabled="disabled" selected="selected">Year</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
               </select>
            </div>
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="babyMonth" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
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
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="babyDay" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
                  <option value="" disabled="disabled" selected="selected">Day</option>
               </select>
               <input type="hidden" name="subscriber_question3" id="subscriber_question3" required="required" />
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-md-12" style="background: rgba(255, 255, 255, 0.8); background-size: cover; padding-top: 20px; padding-bottom: 20px; border-radius: 10px;">
            <div class="clearfix"></div>
            <p style="font-size: 2em; color: #005b9c; font-weight: bold; padding-bottom: 20px; line-height: 1;"><span style="color: #d58892;">Mom's Birthday (DOB)</span></p>
            <div class="clearfix"></div>
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="momYear" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
                  <option value="" disabled="disabled" selected="selected">Year</option>
               </select>
            </div>
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="momMonth" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
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
            <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
               <select id="momDay" disabled="disabled" required="required" style="width: 100%; font-size: 1.7em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
                  <option value="" disabled="disabled" selected="selected">Day</option>
               </select>
               <input type="hidden" name="subscriber_question2" id="subscriber_question2" /> <input type="hidden" name="newEmail" id="newEmail" value="{{email}}" />
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-md-offset-4" style="padding-top: 20px;"><button type="submit" name="submit" id="submitBtn" class="btn btn-default button button-medium  pull-right" style="border: none; background: none;" onclick="fbq('track', 'CompleteRegistration');"> <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/newNewmom/lets-go.png" width="100%" alt="letsGo" /> </button></div>
         </div>
      </div>
   </div>
   <div id="newMomEssentialPregnancyTracker">
      <div class="col-md-12" style="padding-top: 20px;">
         <p style="font-size: 2em; color: #005b9c; font-weight: bold; line-height: 1;">Explore pregnancy Week by week</p>
         <div class="row" style="border-radius: 0px; border: 0px solid #174976; padding: 15px; text-align: center;">
            <div class="col-md-12 enlinea_slider">
               <div class="slider_container">
                  <ul id="pregnancy_tracker_slider">
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="4"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W4.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="5"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W5.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="6"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W6.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="7"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W7.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="8"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W8.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="9"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W9.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="10"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W10.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="11"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W11.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="12"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W12.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="13"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W13.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="14"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W14.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="15"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W15.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="16"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W16.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="17"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W17.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="18"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W18.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="19"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W19.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="20"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W20.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="21"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W21.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="22"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W22.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="23"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W23.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="24"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W24.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="25"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W25.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="26"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W26.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="27"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W27.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="28"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W28.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="29"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W29.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="30"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W30.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="31"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W31.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="32"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W32.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="33"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W33.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="34"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W34.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="35"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W35.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="36"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W36.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="37"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W37.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="38"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W38.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="39"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W39.png" alt="article2" width="100%" /></div>
                     </li>
                     <li class="product-box item" style="min-width: 178px;">
                        <div style="border-radius: 4px; padding: 7px; text-align: center; position: relative;" onclick="pregnancyWeek(this);" week="40"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/baby+dev/W40.png" alt="article2" width="100%" /></div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7 col-md-offset-3 yourWeek">
            <p style="color: #25a7ae; font-size: 2em; padding-top: 15px; line-height: 1.2;">Your baby is on Week {{yourbabyweek}}!</p>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-7 col-md-offset-3" id="Pregnancydetails" style="text-align: justify; color: #444; font-size: 18px; line-height: 28px;"></div>
      </div>
   </div>
</div>
<div class="dueDateCalculator tools" style="display: none;">
   <div id="front" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <h1 style="color: #ec4f9b;">Due Date Calculator</h1>
      <h2>Calculation Method</h2>
      <select name="method" id="way" class="text-center" style="margin: 0 auto; width: 100%; text-align: center; font-size: 1.5em; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
         <option value="period" selected="selected">Last Period</option>
         <option value="conception">Conception Date</option>
         <option value="ivf">IVF</option>
      </select>
   </div>
   <div id="last_period" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <h2>The first day of your last period</h2>
      <br /> <input type="date" name="previousPeriod" id="previous_period" class="text-center" style="margin: 0 auto; width: 100%; font-size: 1.5em; text-align: center; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" />
      <h2>Cycle Length</h2>
      <select name="cycle_length" id="cycle" class="text-center" style="margin: 0 auto; width: 100%; text-align: center; font-size: 1.5em; text-align-last: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;">
         <option value="21">21 Days</option>
         <option value="22">22 Days</option>
         <option value="23">23 Days</option>
         <option value="24">24 Days</option>
         <option value="25">25 Days</option>
         <option value="26">26 Days</option>
         <option value="27">27 Days</option>
         <option value="28" selected="selected">28 Days</option>
         <option value="29">29 Days</option>
         <option value="30">30 Days</option>
         <option value="31">31 Days</option>
         <option value="32">32 Days</option>
         <option value="33">33 Days</option>
         <option value="34">34 Days</option>
         <option value="35">35 Days</option>
      </select>
   </div>
   <div id="conception" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <h2>Date of Conception</h2>
      <input type="date" id="concept_date" name="conceptionDate" class="text-center" style="margin: 0 auto; font-size: 1.5em; width: 100%; text-align: center; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" />
   </div>
   <div id="ivf" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <h2>Date of Transfer</h2>
      <input type="date" id="ivf_date" name="ivfDate" class="text-center" style="margin: 0 auto; width: 100%; font-size: 1.5em; text-align: center; margin-bottom: 20px; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" /> <input type="radio" name="ivfDay" value="3" id="ivf3" class="text-center" style="margin: 0 auto; width: 100%; text-align: center;" /> IVF 3 Day Transfer Date <input type="radio" name="ivfDay" value="5" id="ivf5" class="text-center" style="margin: 0 auto; width: 100%; text-align: center;" /> IVF 5 Day Transfer Date
   </div>
   <div style="margin-top: 30px;" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2"><input type="button" id="result" class="btn btn-primary" value="Calculate My Due Date" style="padding: 10px 20px; font-size: 1.5em; background-color: #ec4f9b; color: white; border-color: #ec4f9b; border-radius: 12px;" /></div>
   <div id="showResult" style="text-align: center;" class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/New+Mom+Essentials/congratulations.png" width="50%" alt="congratulations" />
      <p style="color: #08537e; font-size: 2.5em;">You will meet your baby on</p>
      <input type="date" id="ivf_result" class="text-center" style="margin: 0 auto; width: 100%; background: transparent; color: #08537e; font-weight: bolder; text-align: center; box-shadow: none; border: none; font-size: 2em; padding-left: 70px;" readonly="readonly" required="required" /> <a style="font-weight: bold; text-decoration: underline; color: #ec4f9b; font-size: 1.5em; margin-top: 30px;" onclick="recalculate();">Recalculate&gt;</a>
   </div>
</div>
<div class="eMag tools" style="display: none;">
   <div class="row">
      <div style="overflow: auto; white-space: nowrap;" id="style-7">
         <div class=" weeklyBox" onclick="babyWeek(this);" week="1">Week 1</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="2">Week 2</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="3">Week 3</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="4">Week 4</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="5">Week 5</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="6">Week 6</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="7">Week 7</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="8">Week 8</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="9">Week 9</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="10">Week 10</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="11">Week 11</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="12">Week 12</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="13">Week 13</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="14">Week 14</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="15">Week 15</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="16">Week 16</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="17">Week 17</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="18">Week 18</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="19">Week 19</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="20">Week 20</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="21">Week 21</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="21">Week 22</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="23">Week 23</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="24">Week 24</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="25">Week 25</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="26">Week 26</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="27">Week 27</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="28">Week 28</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="29">Week 29</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="30">Week 30</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="31">Week 31</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="32">Week 32</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="33">Week 33</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="34">Week 34</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="35">Week 35</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="36">Week 36</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="37">Week 37</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="38">Week 38</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="39">Week 39</div>
         <div class=" weeklyBox" onclick="babyWeek(this);" week="40">Week 40</div>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-7 col-md-offset-3" id="babyWeeksdetails" style="margin-top: 15px; margin-bottom: 15px; text-align: center; color: black; font-size: 18px; line-height: 1.3;"></div>
   </div>
</div>
<div class="motherhoodRecipe tools" style="display: none;"></div>
<!--====================FOOTER BRAND ====================-->
<div class="mmyslider" data-sliderid="76" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="77" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="78" data-imagepos="left" data-slidercount="5"></div>
<div class="mmyslider" data-sliderid="79" data-imagepos="left" data-slidercount="5"></div>
<!--====================ARTICLE1 ====================-->
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;">
   <div class="section_container">
      <div class="section_title_motherhood"><span>Article for Parents</span></div>
   </div>
</div>
<!-- Article slider -->
<div class="row" style="border-radius: 0px; border: 0px solid #174976; padding: 15px; text-align: center;">
   <div class="col-md-12 enlinea_slider">
      <div class="slider_container">
         <ul id="nestlekol_list_car">
            <!--====================ARTICLE 1====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a2.png" alt="article2" width="100%" />
               <p class="parent-article-title">Give Your Baby&rsquo;s Room A Beautiful Makeover</p>
               <a href="https://story.motherhood.com.my/blog/baby-room-beautiful-makeover/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 2====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a3.png" alt="article3" width="100%" />
               <p class="parent-article-title">Common Skin Conditions In Newborns</p>
               <a href="https://story.motherhood.com.my/blog/skin-conditions-newborns/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 3====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a6.png" alt="article6" width="100%" />
               <p class="parent-article-title">How To Pick The Best Breast Pump For You</p>
               <a href="https://story.motherhood.com.my/blog/pick-best-breast-pump/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 4====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a8.png" alt="article8" width="100%" />
               <p class="parent-article-title">Optimal Growth &ndash; Brain and Physical Growth</p>
               <a href="https://www.startwell.nestle.com.my/articles/toddlerhood/optimal-growth-brain-and-physical-growth" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 5====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a12.png" alt="article12" width="100%" />
               <p class="parent-article-title">Hospital Checklist For New Mum And Newborn</p>
               <a href="https://story.motherhood.com.my/blog/hospital-checklist-for-new-mum-and-newborn/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 6====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a1.png" alt="article1" width="100%" />
               <p class="parent-article-title">The Advantages And Disadvantages Of Epidural Injections</p>
               <a href="https://story.motherhood.com.my/blog/advantages-disadvantages-epidural-injections/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 7====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a4.png" alt="article4" width="100%" />
               <p class="parent-article-title">How To Get A Good Deep Latch: The Key To Successful Breastfeeding</p>
               <a href="https://story.motherhood.com.my/blog/how-to-get-a-good-deep-latch-the-key-to-successful-breastfeeding/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 8====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a5.png" alt="article5" width="100%" />
               <p class="parent-article-title">Crucial To Know: How To Burp A Baby (Includes Videos)</p>
               <a href="https://story.motherhood.com.my/blog/crucial-to-know-burp-baby/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 9====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a7.png" alt="article7" width="100%" />
               <p class="parent-article-title">Love In Every Drop | Answering All Your Common Breastfeeding Questions</p>
               <a href="https://story.motherhood.com.my/blog/solution-common-breastfeeding-questions/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 10====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a9.png" alt="article9" width="100%" />
               <p class="parent-article-title">Things You Need To Know About Bottle Feeding Your Baby</p>
               <a href="https://story.motherhood.com.my/blog/things-need-know-bottle-feeding-baby/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 11====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a10.png" alt="article10" width="100%" />
               <p class="parent-article-title">Vaginal Delivery Vs Caesarean: Is There A Right Answer?</p>
               <a href="https://story.motherhood.com.my/blog/vaginal-delivery-vs-caesarean/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
            <!--====================ARTICLE 12====================-->
            <li class="product-box item" style="min-width: 178px;">
               <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/NEW+MOM/a11.png" alt="article11" width="100%" />
               <p class="parent-article-title">5 Baby Care Tips: How To Care For Your Newborn Baby</p>
               <a href="https://story.motherhood.com.my/blog/baby-care-tips-newborn-baby/" target="_blank" rel="noopener" class="btn btn-default parent-articale-btn"> Read More </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<p>
   <script>// <![CDATA[
      function toolsChange(tool){
          var toolName = tool.getAttribute("toolsname");
          $(".tools").hide();
          if(toolName == 'dueDateCalculator'){
              $(".dueDateCalculator").show();
          }else if(toolName == 'pregnancyJourney'){
              $(".babyJourney").show();
              $(window).resize();
              $("img").trigger("unveil");
          }else if(toolName == 'eMag'){
              $(".eMag").show();
              $(window).resize();
              $("img").trigger("unveil");
          }else{}
      }
      
      for (var i = 1940; i <= 2011; i++) {
      $('#momYear').append('<option value="' + i + '">' + i + '</option>');}
      
      $("#babyYear").on("change",function(){
          $('#babyMonth').prop('disabled', false);
      });
      $("#babyMonth").on("change",function(){
          var year = $('#babyYear').val();
          var month = $('#babyMonth').val();
          if(year !== '' && month !== ''){
          $('#babyDay').prop('disabled', false);
          $('#babyDay').find('option').remove().end();
          var days = new Date(year, month, 0).getDate(); 
          $('#babyDay').append('<option value=" " disabled selected> Day </option>');
              for (var i = 1; i <= days; i++) {
                  $('#babyDay').append('<option value="' + i + '">' + i + '</option>');}}
      });
      $("#babyDay").on("change",function(){
          var year = $('#babyYear').val();
          var month = $('#babyMonth').val();
          var day = $('#babyDay').val();
          var month = ("0" + month).slice(-2);
          var day = ("0" + day).slice(-2);
          $('#subscriber_question3').val(day+'-'+month+'-'+year);
      });
      
      $("#momYear").on("change",function(){
          $('#momMonth').prop('disabled', false);
      });
      $("#momMonth").on("change",function(){
          var year = $('#momYear').val();
          var month = $('#momMonth').val();
          if(year !== '' && month !== ''){
          $('#momDay').prop('disabled', false);
          $('#momDay').find('option').remove().end();
          var days = new Date(year, month, 0).getDate(); 
          $('#momDay').append('<option value=" " disabled selected> Day </option>');
              for (var i = 1; i <= days; i++) {
                  $('#momDay').append('<option value="' + i + '">' + i + '</option>');}}
      });
      $("#momDay").on("change",function(){
          var year = $('#momYear').val();
          var month = $('#momMonth').val();
          var day = $('#momDay').val();
          var month = ("0" + month).slice(-2);
          var day = ("0" + day).slice(-2);
          $('#subscriber_question2').val(day+'-'+month+'-'+year);
      });
      
      function pregnancyWeek(item){
          var week = item.getAttribute("week");
          if(week !== ''){
              getPregnancyDetails(week);
          }
      }
      
      function getPregnancyDetails(week){
          $.ajax({
              type: 'post',
              url: '/modules/enlineamixmod/enlineamixmod-ajax-getStory.php',
              data: 'storywk=' + week,
              dataType: 'text',
              success: function (data) {
                  if (data) {
                      $("#Pregnancydetails").html(data);
                  }else {
                  window.alert('Unable to retrieve pregnancy details now.');
                  }
              }
              })
          .fail(function () {
              alert('failed');
          })
      }
      
      function babyWeek(item){
          var week = item.getAttribute("week");
          if(week !== ''){
              console.log(week);
              getBabyDetails(week);
          }
      }
      
      function getBabyDetails(week){
          $.ajax({
              type: 'post',
              url: '/modules/enlineamixmod/enlineamixmod-ajax-getBabyWeeks.php',
              data: 'storywk=' + week,
              dataType: 'text',
              success: function (data) {
                  if (data) {
                      $("#babyWeeksdetails").html(data);
                  }else {
                  window.alert('Unable to retrieve eMag details now.');
                  }
              }
              })
          .fail(function () {
              alert('failed');
          })
      }
      
      //due date calculator
      
      function recalculate(){
      $("div#front").show();
      $("div#last_period").show();
      $("div#showResult").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").show();
      }
      
      $("#submitForm").click(function(){
      $("div#mainpage").hide();
      $("div#showResult").hide();
      $("div#front").show();
       $("div#last_period").show();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").show();
      });
      
      $("#result").click(function(){
       if($("#way").val()=="period"){
      var prePeriod = document.getElementById('previous_period').value;
      document.getElementById('ivf_result').value = prePeriod;
      document.getElementById('ivf_result').stepUp(280);
      }else if($("#way").val()=="conception"){
      var con = document.getElementById('concept_date').value;
      document.getElementById('ivf_result').value = con;
      document.getElementById('ivf_result').stepUp(266);
      }else if ($("#way").val()=="ivf"){
      var ivfValue = $('input[name=ivfDay]:checked').val();
      var ivfDayy = document.getElementById('ivf_date').value;
      document.getElementById('ivf_result').value = ivfDayy;
      document.getElementById('ivf_result').stepUp(266-ivfValue);
      
      }
      
      $("div#showResult").show();
      $("div#front").hide();
       $("div#last_period").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       $("input#result").hide();
      });
      
      $("#way").change(function(){
         if($(this).val()=="period"){    
             $("div#last_period").show();
             $("div#conception").hide();
             $("div#ivf").hide();
      $("div#showResult").hide();
      
         }else{
              $("div#last_period").hide();
          }
         if($(this).val()=="conception"){    
             $("div#conception").show();
      $("div#last_period").hide();
             $("div#ivf").hide();
      $("div#showResult").hide();
      }else{
          $("div#conception").hide();}
      
      if($(this).val()=="ivf"){    
             $("div#ivf").show();
           $("div#conception").hide();
             $("div#last_period").hide();
          $("div#showResult").hide();
      }else{
          $("div#ivf").hide();}
      }).change();
      
      $("div#mainpage").show();
      $("div#showResult").hide();
      $("div#conception").hide();
       $("div#ivf").hide();
       
       
      // ]]>
   </script>
</p>