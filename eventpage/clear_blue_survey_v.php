<style>
	<!--

	.amchart-mmy {
	  width: 100%;
	  height: 270px;
	}
	
	.survey-question-div{
		padding-left : 20px;
		height : 270px;
	}
	
	ul {
	  padding: 0;
	  margin: 0;
	  list-style: none; 
	}

	.wrapper {
		max-width: 1400px;
		height: 100vh;
		margin: auto;
		display: flex;
		align-items: center; 
	}
	
	.wizard > .steps .current-info, .wizard > .steps .number {
		display: none; 
	}

	#mamacubatry-wizard {
		min-height: 834px;
		background: #fff;
	}

	.steps {
		margin-bottom: 30px; 
	}
	
	.steps ul {
		display: flex;
		position: relative; 
	}
	
	.steps ul li {
		width: 20.16%;
		margin-right: 10px; 
	}
	
	.steps ul li a {
        display: inline-block;
        width: 100%;
        height: 7px;
		color:#f6f6f6 !important;
        background: #f6f6f6 !important;
        border-radius: 3.5px; 
		outline: unset;
		pointer-events: none;
	}

	.steps ul li.first a, .steps ul li.checked a {
        background: #30a7ad !important;
		color:#30a7ad !important;
        transition: all 0.5s ease; 
		outline: unset;
	}
 
	.steps ul:before {
		content: "RIGHT NOW I FEEL?";
		font-size: 18px;
		font-family: Arial,Helvetica,sans-serif;
		color: #4c4c4d;
		top: -27px;
		position: absolute;
	}

	.steps ul.step-2:before {
		content: ""; 
	}
	
	/*.steps ul.step-3:before {
		content: ""; 
	}*/
	
	.steps ul.step-3:before {
      content: ""; 
	}
	
	.steps ul.step-4:before {
      content: ""; 
	}
	.actions ul {
	  display: flex;
	  margin-top: 30px;
	  justify-content: space-between; 
	}
	
	.actions ul.step-last {
		justify-content: flex-end; 
	}
    
	.actions ul.step-last li:first-child {
      display: none; \
	}
	
	.actions li a {
		border-radius:25px;
		background-color: #f3866f!important;
		color: #fff;
		border-color: #f3866f!important;
		padding: 0;
		border: none;
		display: inline-flex;
		height: 37px;
		width: 121px;
		align-items: center;
		cursor: pointer;
		position: relative;
		padding-left: 41px;
		-webkit-transform: perspective(1px) translateZ(0);
		transform: perspective(1px) translateZ(0);
		-webkit-transition-duration: 0.3s;
		transition-duration: 0.3s;
		font-weight: 400; 
	}
	
	.actions li a:before {
		content: '\f2ee';
		position: absolute;
		top: 11px;
		right: 37px;
		font-family: Material-Design-Iconic-Font;
		-webkit-transform: translateZ(0);
		transform: translateZ(0); 
	}
	
	
	.actions li a:hover {
		background: #d9bda3; 
	}
	
    .actions li a:hover:before {
		-webkit-animation-name: hvr-icon-wobble-horizontal;
		animation-name: hvr-icon-wobble-horizontal;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-timing-function: ease-in-out;
		animation-timing-function: ease-in-out;
		-webkit-animation-iteration-count: 1;
		animation-iteration-count: 1; 
	}
	
	.actions li[aria-disabled="true"] a {
		display: none; 
	}
	
	.actions li:first-child a {
	  background: #e6e6e6;
	  padding-left: 48px; 
	}
	
	.actions li:first-child a:before {
		content: '\f2ea';
		left: -10px; 
	}
	
	.actions li:first-child a:hover {
		background: #ccc; 
	}
	
	.actions li:last-child a {
		padding-left: 29px;
		width: 115px;
		font-weight: 400;
	}
	
	.actions li:last-child a:before {
		right: 30px; 
	}

	@-webkit-keyframes hvr-icon-wobble-horizontal {
	  16.65% {
		-webkit-transform: translateX(6px);
		transform: translateX(6px); }
	  33.3% {
		-webkit-transform: translateX(-5px);
		transform: translateX(-5px); }
	  49.95% {
		-webkit-transform: translateX(4px);
		transform: translateX(4px); }
	  66.6% {
		-webkit-transform: translateX(-2px);
		transform: translateX(-2px); }
	  83.25% {
		-webkit-transform: translateX(1px);
		transform: translateX(1px); }
	  100% {
		-webkit-transform: translateX(0);
		transform: translateX(0); } 
	}
	
	@keyframes hvr-icon-wobble-horizontal {
	  16.65% {
		-webkit-transform: translateX(6px);
		transform: translateX(6px); }
	  33.3% {
		-webkit-transform: translateX(-5px);
		transform: translateX(-5px); }
	  49.95% {
		-webkit-transform: translateX(4px);
		transform: translateX(4px); }
	  66.6% {
		-webkit-transform: translateX(-2px);
		transform: translateX(-2px); }
	  83.25% {
		-webkit-transform: translateX(1px);
		transform: translateX(1px); }
	  100% {
		-webkit-transform: translateX(0);
		transform: translateX(0); } 
	}
	
	@media (max-width: 1500px) {
		.wrapper {
			height: auto; 
		} 
	}
	
	@media (max-width: 1199px) {
		.wrapper {
			height: 100vh; 
		}

		#mamacubatry-wizard {
			min-height: 829px;
		} 
	}
	
	@media (max-width: 991px) {
		.wrapper {
			justify-content: center; 
		}
		.wrapper .image-holder {
		  display: none; 
		}
		  
		.wrapper form {
		  width: 60%; 
		}

		#mamacubatry-wizard {
			margin-right: 0;
		} 
		
		.address-details {
		  padding-left:15px;
		}
		
		.motherhood-br{
			display:none;
		}
		
		.ballon-icon-tq{
			width:30%;
		}
	}
	
	@media (max-width: 767px) {
		.wrapper {
			height: auto;
			display: block; 
		}
		
		.wrapper .image-holder {
			width: 100%;
			display: block;
		}
		
		.wrapper form {
		  width: 100%; 
		}

		#mamacubatry-wizard {
			min-height: unset;
		}

		.form-row.form-group {
			display: block; 
		}
		
		.form-row.form-group .form-holder {
		  width: 100%;
		  margin-right: 0;
		  margin-bottom: 24px; 
		}
		
		.address-details {
		  padding-left:15px;
		}
		
		.motherhood-br{
			display:none;
		}
		
		.ballon-icon-tq{
			width:30%;
		}
	}
 /** end of css for form wizard **/
	-->
</style>
<p>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/core.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/charts.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/plugins/annotation.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/amcharts4/dist/script/themes/animated.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
	<script src="../../../themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
	<link href="../../../themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="../../../themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
</p>

<div class="row">
	<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;">
		
	</div>
</div>
<div class="row" style="margin-top:50px;">
	<div class="col-md-12">
		<div id="clearbluewizzard">
			<!-- SECTION 1 -->
			<h4></h4>
			<section>
				 <div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>1. As you’re trying to conceive, right now you feel?</label> 
						<div class="survey-question-div">
							<div class="radio">
								<label><input type="radio" name="subscriber_question1" value="love" checked><i class="fas fa-grin-hearts" style="font-size:42px;color:#483092;"></i></label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question1" value="crying"><i class="fas fa-sad-tear" style="font-size:42px;color:#483092;"></i></label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question1" value="sleepy"><i class="fas fa-frown-open" style="font-size:42px;color:#483092;"></i></label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question1" value="happy"><i class="fas fa-smile-beam" style="font-size:42px;color:#483092;"></i></label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 2 (emoji chart) -->
			<h4></h4>
			<section style="display:none;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3> How we feeling right now</h3>
					</div>
				</div>
				<div class="row">
					<div id="mmy-chartfeeling" class="amchart-mmy"></div>
				</div>
			</section>
			
			<!-- SECTION 3  -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>2. You might want to skip this question, but your age is…?</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="under_30" checked>still young &amp; Under 30</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="30_to_39">Early thirties 30 - 39, but I’m not worried</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="above_40">40 something &amp; fabulous</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 4  -->
			<h4></h4>
			<section style="display:none;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3> In general, ageing does affect fertility. A woman &amp; man's peak productive period is usually in their 20s.</h3>
					</div>
				</div>
				<div class="row">
					<div id="mmy-chartproductiveperiod" class="amchart-mmy"></div>
				</div>
			</section>
			
			<!-- SECTION 5  -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>3. No pressure or anything but so far, you’ve been trying for…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="started" checked>Just recently started & enjoying it so far</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="less_than_year">Less than a year</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="more_than_year">12 months or more</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 6 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>GRAPH 3 [map chart mybe not suitable with this survey because it will be consume many device resource to process]</h1>
				</div>
			</section>
			
			<!-- SECTION 7  -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>4. Time to open up! When it comes to miscarriage…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="never_experience" checked>I’ve never experienced it</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="had_one">I had one</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="more_than_one">I’ve had more than one</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 8 -->
			<h4></h4>
			<section>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3> It may be comforting to know that you’re not alone. Miscarriage is possibly more common than you think; affecting affecting up to 20% of pregnant women.</h3>
					</div>
				</div>
				<div class="row">
					<div id="mmy-chartmiscarriege" class="amchart-mmy"></div>
				</div>
			</section>
			
			<!-- SECTION 9  -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>5. Don’t be shy now! Making love with your partner when trying to conceive is…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="romantic" checked>Romantic</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="stressful">Stressful</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="workout">A workout</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="full_time_job">A full-time job</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 10 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>note of the day</h1>
				</div>
			</section>
			
			<!-- SECTION 11 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>6. Let’s be honest: Your main concern so far about trying for a baby is…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_health" checked>My health</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_age">My age</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_career">My career</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_partner">My partner</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_financial_status">My financial status</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 12 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>note of the day</h1>
				</div>
			</section>
			
			<!-- SECTION 13 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>7. Let’s reminisce! When news of your pre-pregnancy plans first broke out, everyone was…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="loving_supportive" checked>Loving & supportive</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="being_judgemental">Being judgemental</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="ask_too_many_questions">Asking too many questions</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="too_many_opinion">Having too many opinions</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="sorry_for_me">Feeling sorry for me</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 14 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>note of the day</h1>
				</div>
			</section>
			
			<!-- SECTION 15 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>8. Oh boy! So with all the pressure of getting pregnant fast, you’re…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="going_with_own_flow" checked>Going with my own flow here</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="looking_forwad_having_lot_of_sex">Looking forward to having a lot of sex</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="baby_bum_photo_social_media">Going crazy looking at baby bump photos on social media</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			<!-- SECTION 16 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>note of the day</h1>
				</div>
			</section>
			<!-- SECTION 17 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>9. Tell us your secret! You manage your emotions when trying to get pregnant by…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="exchange_my_exp_other_mom" checked>Exchanging my experience with other mums</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="taking_break_baby_making">Taking a break from baby-making</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="not_letting_my_period_down">Not letting my period get me down</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="practice_relaxtion_technique">Practising relaxation techniques</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="limiting_going_online_to_find_out_pregnancy_stuff">Limiting going online to find out about pregnancy stuff</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 18 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>[graph manage emotion]</h1>
				</div>
			</section>
			
			<!-- SECTION 19 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>10. Your biggest “cheerleader” throughout your beautiful baby-making journey is…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_partner" checked>My partner</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_family">My family</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_friends">My friends</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="my_colleagues">My colleagues</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="kind_strangers">Kind strangers</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 20 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>fact of the day</h1>
				</div>
			</section>
			
			<!-- SECTION 21 -->
			<h4></h4>
			<section>
				<div class="row row-form">
                    <div class="col-md-12 text-left">
						<label>11. Spill the tea! Your no.1 source when planning for your trying-to-conceive journey is…</label> 
						<div style="padding-left:20px">
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="advice_gynecologist" checked>Seek advice from a gynecologist/fertility specialist</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="tips_from_other_moms">Get tips from other mums</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="track_using_fertility_tools">Track using fertility tools (eg. ovulation kit)</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="subscriber_question2" value="read_up_pregnancy_tips_online">Read up on pregnancy tips online</label>
							</div>
						</div>
					</div>
                </div>
			</section>
			
			<!-- SECTION 22 -->
			<h4></h4>
			<section>
				<div class="row">
					<h1>[graph convince human]</h1>
				</div>
			</section>
		</div>
	</div>
</div>

<button type="submit" id="dummy-btn-to-submit" name="submit" style="display:none;">test</button>
<p>
<script type="text/javascript">
	
	var chartFeeling = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create chart instance
		var chart = am4core.create("mmy-chartfeeling", am4charts.XYChart);

		// Add data
		chart.data = [{
			"name": "John",
			"points": 35654,
			// "color": chart.colors.next(),
			"color": "#483092",
			"bullet": "https://www.amcharts.com/lib/images/faces/A04.png"
		}, {
			"name": "Damon",
			"points": 65456,
			"color": "#e2e2ff",
			"bullet": "https://www.amcharts.com/lib/images/faces/C02.png"
		}, {
			"name": "Patrick",
			"points": 45724,
			"color": "#483092",
			"bullet": "https://www.amcharts.com/lib/images/faces/D02.png"
		}, {
			"name": "Mark",
			"points": 13654,
			"color": "#483092",
			"bullet": "https://www.amcharts.com/lib/images/faces/E01.png"
		}];

		// Create axes
		var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "name";
		categoryAxis.renderer.grid.template.disabled = true;
		categoryAxis.renderer.minGridDistance = 30;
		categoryAxis.renderer.inside = false;
		categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
		categoryAxis.renderer.labels.template.fontSize = 20;
		categoryAxis.renderer.baseGrid.disabled = true;
		

		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.renderer.grid.template.strokeDasharray = "4,4";
		valueAxis.renderer.labels.template.disabled = true;
		valueAxis.renderer.baseGrid.disabled = true;
		valueAxis.min = 0;

		// Do not crop bullets
		chart.maskBullets = false;
	
		// Remove padding
		chart.paddingBottom = 0;

		// Create series
		var series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.valueY = "points";
		series.dataFields.categoryX = "name";
		series.columns.template.propertyFields.fill = "color";
		series.columns.template.propertyFields.stroke = "color";
		series.columns.template.column.cornerRadiusTopLeft = 20;
		series.columns.template.column.cornerRadiusTopRight = 20;
		series.columns.template.width = am4core.percent(30);
		// series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/b]";

		// Add bullets
		var bullet = series.bullets.push(new am4charts.Bullet());
		var image = bullet.createChild(am4core.Image);
		image.horizontalCenter = "middle";
		image.verticalCenter = "bottom";
		image.dy = 20;
		image.y = am4core.percent(100);
		image.propertyFields.href = "bullet";
		image.tooltipText = series.columns.template.tooltipText;
		image.propertyFields.fill = "color";
		image.filters.push(new am4core.DropShadowFilter());

	}
	
	var chartBestProductive = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// create chart
		var chart = am4core.create("mmy-chartproductiveperiod", am4charts.GaugeChart);
		chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

		chart.innerRadius = -25;

		var axis = chart.xAxes.push(new am4charts.ValueAxis());
		axis.min = 0;
		axis.max = 100;
		axis.strictMinMax = true;
		axis.renderer.grid.template.stroke = new am4core.InterfaceColorSet().getFor("background");
		axis.renderer.grid.template.strokeOpacity = 0.3;

		var colorSet = new am4core.ColorSet();
		console.log(colorSet);
		var range0 = axis.axisRanges.create();
		range0.value = 0;
		range0.endValue = 50;
		range0.axisFill.fillOpacity = 1;
		range0.axisFill.fill = colorSet.getIndex(0);
		range0.axisFill.zIndex = - 1;

		var range1 = axis.axisRanges.create();
		range1.value = 50;
		range1.endValue = 80;
		range1.axisFill.fillOpacity = 1;
		range1.axisFill.fill = colorSet.getIndex(2);
		range1.axisFill.zIndex = -1;

		var range2 = axis.axisRanges.create();
		range2.value = 80;
		range2.endValue = 100;
		range2.axisFill.fillOpacity = 1;
		range2.axisFill.fill = colorSet.getIndex(4);
		range2.axisFill.zIndex = -1;

		var hand = chart.hands.push(new am4charts.ClockHand());

		// using chart.setTimeout method as the timeout will be disposed together with a chart
		chart.setTimeout(randomValue, 2000);
		
		function randomValue() {
			var max 		= 30;
			var min  		= 20
			var randomAge   = Math.floor(Math.random() * (max - min + 1) + min);
			hand.showValue(randomAge, 1000, am4core.ease.cubicOut);
			chart.setTimeout(randomValue, 2000);
		}
	}
	
	var chartMiscarriage = function(){
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		var chart = am4core.create("mmy-chartmiscarriege", am4charts.PieChart3D);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

		chart.data = [
		  {
			country: "Lithuania",
			litres: 501.9
		  },
		  {
			country: "Czech Republic",
			litres: 301.9
		  },
		  {
			country: "Ireland",
			litres: 201.1
		  },
		  {
			country: "Germany",
			litres: 165.8
		  },
		  {
			country: "Australia",
			litres: 139.9
		  },
		  {
			country: "Austria",
			litres: 128.3
		  }
		];

		chart.innerRadius = am4core.percent(40);
		chart.depth = 120;

		chart.legend = new am4charts.Legend();

		var series = chart.series.push(new am4charts.PieSeries3D());
		series.dataFields.value = "litres";
		series.dataFields.depthValue = "litres";
		series.dataFields.category = "country";
		series.slices.template.cornerRadius = 5;
		series.colors.step = 3;
	}
	
	
	
	// var testAjx = function(){
		// $.ajax({
			// url		 : '../modules/enlineamixmod/graph_amchart/enlineamixmod-graph-process.php', 
			// data	 :{'test':'test1'},
			// dataType :'html',
			// method 	 : 'post',
			// success	 : function(result){
				// $('body').find('#first_graph').html(result);
			// }
		// });
		
	// }
	
	
	
	$(function(){
		$('body').find("#clearbluewizzard").steps({
				headerTag			  : "h4",
				bodyTag				  : "section",
				transitionEffect	  : "fade",
				enableAllSteps		  : true,
				enableKeyNavigation   : false,
				transitionEffectSpeed : 500,
				onStepChanging		  : function (event, currentIndex, newIndex) { 
					
					console.log("newIndex" + newIndex);
					if (newIndex === 1) {
						$('.steps ul').addClass('step-2');
						// $('body').find("#clearbluewizzard").steps('remove','2');
						// $(this).steps('finish','2');
						chartFeeling();
					} else {
						$('.steps ul').removeClass('step-2');
					}
						
					if ( newIndex === 2 ) {
						$('.steps ul').addClass('step-3');
						chartBestProductive();
					} else {
						$('.steps ul').removeClass('step-3');
					} 
					
					/*if ( newIndex === 3 ) {
						$('.steps ul').addClass('step-4');
					} else {
						$('.steps ul').removeClass('step-4');
					}*/

					if ( newIndex === 3 ) {
						$('.steps ul').addClass('step-4');
						//$('.actions ul').addClass('step-last');
					} else {
						$('.steps ul').removeClass('step-4');
						//$('.actions ul').removeClass('step-last');
					}
					
					return true; 
					
				},
				onStepChanged : function(event, currentIndex, priorIndex){
					
				},
				onFinished  : function(){
					// alert("testfinish")
					// $('body').find('#dummy-btn-to-submit').trigger('click');
				},
				labels: {
					finish: "Submit",
					next: "Next",
					previous: "Back"
				}
			});
			
			// Custom Steps Jquery Steps
			$('.wizard > .steps li a').click(function(){
				$(this).parent().addClass('checked');
				$(this).parent().prevAll().addClass('checked');
				$(this).parent().nextAll().removeClass('checked');
			});
			
			
		// testAjx();	
		chartMiscarriage();	
		
	});
</script>
</p>
<div id="first_graph"></div>