{capture name=path}
	{l s='Mamacubatry'  mod='agilemultipleseller'}
{/capture}

<meta property="og:url"        content="https://www.motherhood.com.my/mamacubatry/{$campaign.link_rewrite}" />
<meta property="og:type"       content="website" />
<meta property="og:title" content="{$meta_title}" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/signature_pad/docs/css/signature-pad-mmy.css" rel="stylesheet" type="text/css" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/signature_pad/docs/js/signature_pad.umd.js" type="text/javascript"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/Inputmask-5.x/dist/inputmask.js" type="text/javascript"></script>

<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
<style>
	.tab-header{
		color: #555454;
		font-weight:700;
	}
	
	.btn-pill, .btn-pill-color:hover, .btn-pill-color:focus{
		border-radius:25px;
	}

	.btn-pill-color, btn-pill-color:hover, .btn-pill-color:focus{
		background-color: #f3866f !important;
		color: white;
		border-color: #f3866f !important;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px;
		outline:unset;
	}

	.btn-pill-color:hover, .btn-pill-color:focus{
		background-color: #ec3a47 !important;
		color: white !important;
		border-color: #ec3a47 !important;
	}
	
	.checkbox{
		text-align: -webkit-center;
	}
	
	.checkbox .checker{
		float: none;
	}
	
	.accordian-heading-motherhood{
		text-align:left;
		color: #fff !important;
		background-color: #2ea7ad !important; 
		border-color: #2ea7ad !important;
	}
	
	.ikon-collapse-motherhood{
		float:right !important;
		font-size:18px !important;
	}
	
	.input-sm, .input-group-sm>.form-control, .input-group-sm>.input-group-addon, .input-group-sm>.input-group-btn>.btn {
		height: 30px !important;
		padding: 5px 10px !important;
		font-size: 12px !important;
		line-height: 1.5 !important;
		border-radius: 3px !important;
	}
	
	.badge-motherhood-joined{
		border-radius:15px;
	}
	
	.checkbox label {
		display: flex !important;
	}
	
	.div-address-info{
		padding:15px; 
		border: 1px solid #b4b3b4;
		position:relative;
		margin-bottom: 15px;
	}
	
	.btn-edit-address, .btn-edit-address:focus{
		position:absolute;
		top:0;
		right:0;
		margin-right: 5px; 
		margin-top: 5px;
		outline:unset;
	}
	
	.select-mmy{
		width: 100% !important; 
		height: 37px; 
		font-size: 14px; 
		padding-top: 7px; 
		padding-bottom: 5px; 
		border: 1px solid #ccc !important; 
		box-shadow: inset 0 1px 3px #ddd !important; 
		border-radius: 4px !important; 
		vertical-align: middle !important; 
		box-sizing: border-box !important; 
		margin-top: 0px !important;
	}
	
	.is-invalid, .is-invalid:focus {
		color: #b94a48;
		border-color: #e9322d !important;
	}
	
	.error-msg{
		color:#e9322d
	}
	/** starting css for form wizard **/
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
		/* margin-right: 60px;*/
		/*padding: 107px 75px 65px;*/ 
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
		
	}

	.steps ul li.first a, .steps ul li.checked a {
        background: #30a7ad !important;
		color:#30a7ad !important;
        transition: all 0.5s ease; 
		outline: unset;
	}
 
	.steps ul:before {
		content: "Select Product";
		font-size: 18px;
		font-family: Arial,Helvetica,sans-serif;
		color: #333;
		top: -27px;
		position: absolute;
	}

	.steps ul.step-2:before {
		content: "Your Particulars"; 
	}
	
	.steps ul.step-3:before {
		content: "Campaign Information"; 
	}
	
	.steps ul.step-4:before {
      content: "Your Address"; 
	}
	
	.steps ul.step-5:before {
      content: "Campaign Agreement"; 
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
		left: 26px; 
	}
	
	.actions li:first-child a:hover {
		background: #ccc; 
	}
	
	.actions li:last-child a {
	  padding-left: 29px;
	  width: 167px;
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
	}
 /** end of css for form wizard **/
</style>
<!-- MODULE mamacubatryproducts -->
<div class="container" style="font-size:13px;">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-bottom:20px;margin-top:20px;line-height: 20px;">
				<font style="color:#555454; font-weight:700;">Hey {$customer->firstname} {$customer->lastname},<br></font>
				<font style="color:#30a7ad; font-weight:700;">Please complete the form<br></font>
				In order for us to offer product tests that suit you, we'll need a few details
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<input type="hidden" class="input-flag-checking-step" value="false">
			<div id="mamacubatry-wizard" style="margin-top:35px;">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="row">
						<div class="col-md-2">
							<img src="{$campaign['tester_cover_image']}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$campaign.name|escape:html:'UTF-8'}" />
						</div>
						<div class="col-md-8">
							<div class="row" style="margin-bottom:20px;">
								<a class="open-comment-form" href="#large_product_desc" style="color:#36a7ac">
									<span >{$campaign['name']} <span>
								</a>
							</div>
							<div class="row">
								<div style='color:#555454;font-weight:300;'class="text-left">{$campaign['description_short']}</div>
							</div>
						</div>
						<div class="col-md-2" style="text-align:center">
							<div class="checkbox">
								<label><input type="checkbox" class="check-campaign-productid" value="{$campaign['tester_product_id']}" data-campaignid="{$campaign['tester_id']}" data-campaignname="{$campaign['name']}"></label>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 2 -->
				<h4></h4>
				<section style="display:none;">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading accordian-heading-motherhood">
								<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#customer-information">
									Information <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-information" class="panel-collapse collapse in panel-motherhood">
								<div class="panel-body">
									<form id="form-customer-info">
										<input type="hidden" class="form-type" name="formtype" value="customer_info">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-info" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
													</button>
													<button type="button" data-typeprocess='save'  class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<label for="cust-firstname">First Name</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-firstname"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm cust-firstname-input input-info" id="cust-name" name="firstname" value="{$customer->firstname}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-firstname-info">{$customer->firstname}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-lastname">Last Name</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-lastname"}
														<input type="text" class="form-control input-sm  cust-lastname-input input-info" id="cust-lastname" name="lastname" value="{$customer->lastname}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-lastname-info">{$customer->lastname}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-email">Email:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-email"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm  cust-email-input input-info" id="cust-email" name="email" value="{$customer->email}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-email-info">{$customer->email}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-mobile">Mobile No:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-mobile"}
														<input type="text" class="form-control input-sm cust-phoneno-input input-info mobilenumber" id="cust-mobile" name="phone_mobile" value="{$additionalInfo['phone']}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-phoneno-info">{$additionalInfo['phone']}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-gender">Gender:</label>
													{if $customer->id_gender == 1}
														{assign var="gender" value="male"}
													{elseif $customer->id_gender == 2 || $customer->id_gender == 3}
														{assign var="gender" value="female"}
													{/if}
													
													{if $campaign['tester_campaign_fields']|strstr:"cust-gender"}
														<select class="input-sm input-info select-mmy cust-gender-input" name="gender" id="cust-gender" style="display:none;">
															<option value="male" {if $gender == 'male'} 'selected=selected'{/if}>Male</option>
															<option value="female" {if $gender == 'female'} 'selected=selected'{/if}>Female</option>
														</select>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-gender-info">{$gender}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="cust-abouturself">Tell us about yourself:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-gender"}
														<textarea class="form-control input-info cust-abouturself-input" rows="5" id="cust-abouturself" name="about_yourself" style="display:none">{$additionalInfo['shortBio']}</textarea>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-abouturself-info">
														{$additionalInfo['shortBio']}
													</p>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-about">
								<h4 class="panel-title">
									About <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-about" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<form id="form-customer-about">
										<input type="hidden" class="form-type" name="formtype" value="customer_about">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-about" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
													</button>
													<button type="button" id="btn-save-cust-about" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-about" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-about-dob">Date of Birth:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-about-dob"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm cust-about-dob input-info dobinput" name="dob"  value="{$customer->birthday|date_format:"%d/%m/%Y"}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-about-dob-info">{$customer->birthday|date_format:"%d/%m/%Y"}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-about-occupation">Your occupation:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-about-occupation"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm input-info cust-occupation" name="cust_occupation" id="cust-about-occupation" value="{$additionalInfo['occupation']}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-occupation-info">{$additionalInfo['occupation']}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-about-race">Your Race:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-about-race"}
														{if $additionalInfo['race'] == 'Malays' || $additionalInfo['race'] == 'Chinese' || $additionalInfo['race'] == 'Indian'}
															{assign var="raceoption" value=$additionalInfo['race']}
															{assign var="raceoinput" value=$additionalInfo['race']}
														{else}
															{assign var="raceoption" value="Others"}
															{assign var="raceoinput" value=$additionalInfo['race']}
														{/if}
														<select class="input-sm input-info select-mmy listrace race-input" style="display: none;">
															<option value="">Select race</option>
															{if $arr_race}
																{foreach from=$arr_race item=race}
																	<option value="{$race}" {if $raceoption == $race} selected='selected' {/if}>{$race}</option>
																{/foreach}
															{/if}
														</select>
														<input type="text" class="form-control input-sm cust-about-race-input race-input" placeholder="Please state your race" id="cust-about-race" name="cust_race" value="{$raceoinput}" style="display:none ;margin-top:5px;">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-about-race-info">{$raceoinput}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-about-salaryrange">Your household income range(yearly):</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-gender"}
														<select class="input-sm input-info select-mmy cust-about-salaryrange" id="cust-about-salaryrange" name="cust_salaryrange" style="display: none;">
															<option value="">Select salary range</option>
															{if $arr_salary}
																{foreach from=$arr_salary item=salarayrange}
																	<option value="{$salarayrange}" {if $additionalInfo['annual_income_range'] ==  $salarayrange} selected="selected" {/if}>{$salarayrange}</option>
																{/foreach}
															{/if}
														</select>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-about-salaryrange-info">
														{$additionalInfo['annual_income_range']}
													</p>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-family">
								<h4 class="panel-title">
									Family <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-family" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group" style="text-align:end;">
												<button type="button" id="btn-edit-cust-about" class="btn btn-default btn-pill btn-pill-color btn-edit" >
													<span>Edit</span>
												</button>
												<button type="button" id="btn-save-cust-about" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
													<span>Save</span>
												</button>
												<button type="button" id="btn-cancel-cust-about" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
													<span>Cancel</span>
												</button>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="cust-family-maritalstatus">Marital status:</label>
												{if $campaign['tester_campaign_fields']|strstr:"cust-family-maritalstatus"}<!-- to check if this input has been set on admin page -->
													<input type="text" class="form-control input-sm cust-about-dob input-info" name="marital_status" id="cust-family-maritalstatus" value="Married" style="display:none">
												{/if}
												<p class="display-info">Married</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="cust-family-newborn">Are you expecting newborn?</label>
												{if $campaign['tester_campaign_fields']|strstr:"cust-family-newborn"}<!-- to check if this input has been set on admin page -->
													<select class="input-sm input-info expect-edd" name="expect_newborn" id="cust-family-newborn" style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: none; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;">
														<option value="yes">Yes</option>
														<option value="no">No</option>
													</select>
												{/if}
												<p class="display-info">Yes</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="cust-family-edd">Expectation Due Date(EDD) ?</label>
												{if $campaign['tester_campaign_fields']|strstr:"cust-family-edd"}
													<input type="text" class="form-control input-sm input-info" id="cust-family-edd" value="01/06/2021" style="display:none">
												{/if}
												<p class="display-info">01/06/2021</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="cust-family-numchild">How many do you have ?</label>
												{if $campaign['tester_campaign_fields']|strstr:"cust-family-numchild"}
													<input type="text" class="form-control input-sm cust-about-dob input-info" name="num_child" id="cust-family-numchild" value="2" style="display:none">
												{/if}
												<p class="display-info">2</p>
											</div>
										</div>
									</div>
									<div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-family-childdob">Child 1 date of birth ?</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-childdob"}
														<input type="text" class="form-control input-sm input-info" value="01/06/2017" style="display:none">
													{/if}
													<p class="display-info">01/06/2017</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-family-childdob">Child 2 date of birth ?</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-childdob"}
														<input type="text" class="form-control input-sm input-info" value="01/06/2018" style="display:none">
													{/if}
													<p class="display-info">01/06/2018</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-favorites">
								<h4 class="panel-title">
									Favorites <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-favorites" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group" style="text-align:end;">
												<button type="button" id="btn-edit-cust-about" class="btn btn-default btn-pill btn-pill-color btn-edit" >
													<span>Edit</span>
												</button>
												<button type="button" id="btn-save-cust-about" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
													<span>Save</span>
												</button>
												<button type="button" id="btn-cancel-cust-about" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
													<span>Cancel</span>
												</button>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="favourites-milk">Your child's milk brand:</label>
												{if $campaign['tester_campaign_fields']|strstr:"favourites-milk"}<!-- to check if this input has been set on admin page -->
													<select class="input-sm input-info milk-brand" name="milk_brand" id="favourites-milk" style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: none; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;">
														<option value="Frisomum Gold">Frisomum Gold</option>
														<option value="NatureOne Dairy Pregnancy Formula">NatureOne Dairy Pregnancy Formula</option>
														<option value="Anmum Materna">Anmum Materna</option>
													</select>
												{/if}
												<p class="display-info">Frisomum Gold</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="favourites-diapers">Your child's diaper brand:</label>
												{if $campaign['tester_campaign_fields']|strstr:"favourites-diapers"}<!-- to check if this input has been set on admin page -->
													<select class="input-sm input-info diapers-brand" name="diapers_brand" id="favourites-diapers" style="width: 100%; height: 37px; font-size: 14px; padding-top: 7px; padding-bottom: 5px; display: none; border: 1px solid #ccc; box-shadow: inset 0 1px 3px #ddd; border-radius: 4px; vertical-align: middle; box-sizing: border-box; margin-top: 0px;">
														<option value="huggies">huggies</option>
														<option value="mammypoko">mammypoko</option>
													</select>
												{/if}
												<p class="display-info">Huggies</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="favourites-milk">Brand of products reviews you have done in the past 6 months</label>
												<p class="display-info">
													<span class="label label-info badge-motherhood-joined">Scotts</span>
													<span class="label label-info badge-motherhood-joined">Huggies</span>
													<span class="label label-info badge-motherhood-joined">Pensonic</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
						  <div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-interests">
							<h4 class="panel-title">
								Interests <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
							</h4>
						  </div>
						  <div id="customer-interests" class="panel-collapse collapse panel-motherhood">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" style="text-align:end;">
											<button type="button" id="btn-edit-cust-about" class="btn btn-default btn-pill btn-pill-color btn-edit" >
												<span>Edit</span>
											</button>
											<button type="button" id="btn-save-cust-about" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
												<span>Save</span>
											</button>
											<button type="button" id="btn-cancel-cust-about" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
												<span>Cancel</span>
											</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="interest-igaccount">Your ig account:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-igaccount"}<!-- to check if this input has been set on admin page -->
												<input type="text" class="form-control input-sm input-info" id="interest-igaccount"name="interest_igaccount" value="https://www.instagram.com/motherhood.com.my/" style="display:none">
											{/if}
											<p class="display-info">https://www.instagram.com/motherhood.com.my/</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="favourites-milk">Your posting style:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-postingstyle"}<!-- to check if this input has been set on admin page -->
												<div class="input-info" style="display:none">
													<div class="checkbox">
														<label><input type="checkbox" value="food" id="interest-postingstyle-food" name="interest_postingstyl_food" checked>Food</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="travelling" id="interest-postingstyle-travelling" name="interest_postingstyle_travelling" checked>Travelling</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="lifestyle" id="interest-postingstyle-lifestyle" name="interest_postingstyle_lifestyle">Lifestyle</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="parenting" id="interest-postingstyle-parenting" name="interest_postingstyle_parenting">Parenting</label>
													</div>
												</div>
											{/if}
											<p class="display-info">
												<span class="label label-info badge-motherhood-joined">Food</span>
												<span class="label label-info badge-motherhood-joined">Travelling</span>
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="interest-location">Your location:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-location"}<!-- to check if this input has been set on admin page -->
												<select class="input-sm input-info interest-location select-mmy" name="interest_location" id="interest-location" style="display: none !important;">
												
													<option value="" >Select state</option>
													{if $liststate}
														{foreach from=$liststate item=liststate1}
															<option value="{$liststate1.state_name}" data-statecode="{$liststate1.state_code}">{$liststate1.state_name}</option>
														{/foreach}
													{/if}
												</select>
											{/if}
											<p class="display-info">
												<span class="label label-info badge-motherhood-joined">Kuala Lumpur</span>
												<span class="label label-info badge-motherhood-joined">Pulau Pinang</span>
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="interest-hostshow">Your location:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-hostshow"}<!-- to check if this input has been set on admin page -->
												<div class="input-info" style="display:none">
													<div class="checkbox">
														<label><input type="checkbox" value="yes" id="interest-hostshow" name="interest_hostshow" checked>Yes</label>
													</div>
												</div>
											{/if}
											<p class="display-info">
												Yes
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="interest-fbaccount">Your Facebook account:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-igaccount"}<!-- to check if this input has been set on admin page -->
												<input type="text" class="form-control input-sm input-info" id="interest-fbaccount" name="interest_fbaccount" value="https://www.facebook.com/motherhood.com.my/" style="display:none">
											{/if}
											<p class="display-info">https://www.facebook.com/motherhood.com.my/</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="interest-blogwebsite">Blogwebsite:</label>
											{if $campaign['tester_campaign_fields']|strstr:"interest-blogwebsite"}<!-- to check if this input has been set on admin page -->
												<input type="text" class="form-control input-sm input-info" id="interest-blogwebsite" name="interest_blogwebsite" value="https://story.motherhood.com.my/" style="display:none">
											{/if}
											<p class="display-info">https://story.motherhood.com.my/</p>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
					</div> 
				</section>

				<!-- SECTION 3 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<p>
									<h3>{$campaign['tester_name']}</h3>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Brand</label>
								<p>{Manufacturer::getnamebyid($product.id_manufacturer)} </p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Category</label>
								<p>{$productCategory->name[1]}</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Date</label>
								<p>{$campaign['tester_registration_start']|date_format:"%d %b %Y"} - {$campaign['tester_registration_end']|date_format:"%d %b %Y"} </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Description</label>
								{$campaign['description']} 
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 4 -->
				<h4></h4>
				<section style="display:none;">
					<div class="row">
						<div class="col-md-6">
							Choose a delivery address
						</div>
						<div class="col-md-6">
							<div class="form-group" style="text-align:end;">
								<button type="button" class="btn btn-default btn-pill btn-pill-color btn-add" >
									<span>Add new delivery address</span>
								</button>
							</div>
						</div>
					</div>
					<div class="row list-address">
						<div class="row">
							<div class="col-md-6" >
								<div class="div-address-info">
									<button type="button" class="btn btn-xs btn-info btn-edit-address"><i class="fas fa-pencil-alt"></i></button>
									<div class="row">
										<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
											<div class="radio">
												<label><input type="radio" name="optradio"></label>
											</div>
										</div>
										<div class="col-md-8 col-xs-8">
											<p><b>My office</b></p>
											<p>Mr. Programmer</p>
											<p>H-89-1, Block H, Jaya One,</p>
											<p> 72A Jalan Universiti,</p> 
											<p>46200 Petaling Jaya,</p> 
											<p>Selangor, Malaysia</p>
											<p>012-3456789</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="div-address-info">
									<button type="button" class="btn btn-xs btn-info btn-edit-address"><i class="fas fa-pencil-alt"></i></button>
									<div class="row">
										<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
											<div class="radio">
												<label><input type="radio" name="optradio"></label>
											</div>
										</div>
										<div class="col-md-8 col-xs-8">
											<p><b>My Home</b></p>
											<p>Mr. Programmer</p>
											<p>H-89-1, Block H, Jaya One,</p>
											<p> 72A Jalan Universiti,</p> 
											<p>46200 Petaling Jaya,</p> 
											<p>Selangor, Malaysia</p>
											<p>012-3456789</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="padding-left:0px;">
							<div style="margin-top:5px;">
								<div class="checkbox">
									<label><input type="checkbox" value="">Billing address same as delivery address</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row billing-address">
						<div class="billing-address-info">
							<div class="row">
								<div class="col-md-6" >
									<div class="div-address-info">
										<button type="button" class="btn btn-xs btn-info btn-edit-address"><i class="fas fa-pencil-alt"></i></button>
										<div class="row">
											<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
												<div class="radio">
													<label><input type="radio" name="optradio"></label>
												</div>
											</div>
											<div class="col-md-8 col-xs-8">
												<p><b>My office</b></p>
												<p>Mr. Programmer</p>
												<p>H-89-1, Block H, Jaya One,</p>
												<p> 72A Jalan Universiti,</p> 
												<p>46200 Petaling Jaya,</p> 
												<p>Selangor, Malaysia</p>
												<p>012-3456789</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="div-address-info">
										<button type="button" class="btn btn-xs btn-info btn-edit-address"><i class="fas fa-pencil-alt"></i></button>
										<div class="row">
											<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
												<div class="radio">
													<label><input type="radio" name="optradio"></label>
												</div>
											</div>
											<div class="col-md-8 col-xs-8">
												<p><b>My Home</b></p>
												<p>Mr. Programmer</p>
												<p>H-89-1, Block H, Jaya One,</p>
												<p> 72A Jalan Universiti,</p> 
												<p>46200 Petaling Jaya,</p> 
												<p>Selangor, Malaysia</p>
												<p>012-3456789</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row form-address" style="margin-top:25px;">
						<h4> Address Info</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-name">Address title</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_title" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-name">First name</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_firstname" value="{$customer->firstname}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-email">Last name</label>
									<input type="text" class="form-control input-sm  cust-email-input input-info" name="addr_lastname" value="{$customer->lastname}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="cust-name">Address 1</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_line1" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="cust-name">Address 2</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_line2" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cust-name">Postcode</label>
									<input type="text" class="form-control input-sm cust-name-input input-info addr-postcode" name="addr_postcode" value="" autocomplete="off">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cust-name">City</label>
									<input type="text" class="form-control input-sm cust-name-input input-info addr-city" name="addr_city" value="" autocomplete="off">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cust-name">State</label>
									<select class="input-sm input-info addr-state select-mmy" name="addr_state" autocomplete="off">
										<option value="" >Select state</option>
										{if $liststate}
											{foreach from=$liststate item=liststate1}
												<option value="{$liststate1.state_name}" data-statecode="{$liststate1.state_code}">{$liststate1.state_name}</option>
											{/foreach}
										{/if}
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-name">Country</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_country" value="Malaysia" autocomplete="off" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-name">Mobile no.</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_mobileno" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cust-name">Home no.</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_homeno" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="cust-name">Additional info.</label>
									<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_additionalinfo" value="">
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 5 -->
				<h4></h4>
				<section style="display:none">
					<div class="body-signature">
						<div id="signature-pad" class="signature-pad">
							<div class="signature-pad--body">
							  <canvas></canvas>
							</div>
							<div class="signature-pad--footer">
							  <div class="description">Sign above</div>

							  <div class="signature-pad--actions">
								<div>
									<button type="button" class="button btn-clear-signature">Clear</button>
									<button type="button" class="button btn-changecolor-signature">Change color</button>
									<button type="button" class="button btn-undo-signature">Undo</button>
								</div>
								<div>
								  <button type="button" class="button save btn-save-png">Save as PNG</button>
								  <button type="button" class="button save btn-save-jpg">Save as JPG</button>
								  <button type="button" class="button save btn-save-svg">Save as SVG</button>
								</div>
							  </div>
							</div>
						</div>
					</div>
					<table class="table table-rewards">
						<tbody>
							<tr>
								<td style="border-right: 0px solid !important; border-left : 0px solid !important;text-align: left; font-size:13px; width:660px;">
									Agreement Details: {$campaign['tester_agreement']}
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</div>
</div>
{literal}
	<script type="text/javascript">
		var errorSelector = '.error-msg';
		var icon 	  	  = '<i class="fas fa-info-circle"></i>';
		
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
		
		var checkSelectedProduct = function(){
			numberOfProduct = $('body').find('.check-campaign-productid').length;
			if(numberOfProduct > 0)
			{
				var result = false;
				$('.check-campaign-productid').each(function(indx, elem){
					if($(elem).prop("checked") == true){
						result = true;
						return false;
					}
					else if($(elem).prop("checked") == false){
						result = false;
						return false;
					}
				});
				
				return result;
			}
			else
			{
				return false;
			}
		}
		
		var downloadSignature = function(dataURL, filename) {
			if (navigator.userAgent.indexOf("Safari") > -1 && navigator.userAgent.indexOf("Chrome") === -1) {
				window.open(dataURL);
			} 
			else {
				var blob = dataURLToBlob(dataURL);
				var url = window.URL.createObjectURL(blob);

				var a = document.createElement("a");
				a.style = "display: none";
				a.href = url;
				a.download = filename;

				document.body.appendChild(a);
				a.click();

				window.URL.revokeObjectURL(url);
			}
		}
		
		var failedResponse = function(formElem = '', arrArr = []){
			if(formElem != '' && formElem != undefined)
			{
				if(arrArr.length > 0){
					$.each(arrArr, function(key, inputClass){
					
						if($.isArray(inputClass)){
							$($(formElem + ' .' + inputClass[0])[inputClass[1]]).addClass('is-invalid');
						}
						else{
							$(formElem + ' .' + inputClass).addClass('is-invalid');
							$(formElem + ' .' + inputClass).focus();
						}
					});
				}
			}
		}
		
		var raceOption = function(){
			var selectedRace = $('body').find('.listrace').val();
			console.log("selectedRace " + selectedRace)
			if(selectedRace != '')
			{
				if(selectedRace.toLowerCase() == 'others')
				{
					var checkRaceInput = $('body').find('.cust-about-race-input').val();
					if(checkRaceInput == 'Malay' || checkRaceInput == 'Chinese' || checkRaceInput == 'Indian')
					{
						$('body').find('.cust-about-race-input').val("");
					}
					
					$('body').find('.cust-about-race-input').show('fast');
				}
				else
				{
					$('body').find('.cust-about-race-input').hide('fast');
					$('body').find('.cust-about-race-input').val(selectedRace);
				}
			}
			else
			{
				$('body').find('.cust-about-race-input').val("");
			}
		}
		
		// One could simply use Canvas#toBlob method instead, but it's just to show
		// that it can be done using result of SignaturePad#toDataURL.
		dataURLToBlob = function(dataURL) {
			// Code taken from https://github.com/ebidel/filer.js
			var parts		= dataURL.split(';base64,');
			var contentType = parts[0].split(":")[1];
			var raw 		= window.atob(parts[1]);
			var rawLength 	= raw.length;
			var uInt8Array 	= new Uint8Array(rawLength);

			for (var i = 0; i < rawLength; ++i) {
				uInt8Array[i] = raw.charCodeAt(i);
			}

			return new Blob([uInt8Array], { type: contentType });
		}
		
		$(document).ready(function() {
			$('body').on('click', '.btn-edit' ,function(){
				var formtype 	= $(this).closest('form').find('.form-type').val();
				if(formtype == 'customer_about')
				{
					raceOption();
				}
				
				$(this).closest('.panel-motherhood').find('.input-info').show('fast');
				$(this).closest('.panel-motherhood').find('.display-info').hide('fast');
				$(this).closest('.panel-motherhood').find('.btn-action').show('fast');
				$(this).closest('.panel-motherhood').find('.btn-action').show('fast');
				$(this).hide('fast');
			});
			
			$('body').on('click', '.btn-action' ,function(){
				var typeprocess = $(this).attr('data-typeprocess');
				var formtype 	= $(this).closest('form').find('.form-type').val();
				var _this 		= $(this); // so it will represent this for button event.
				if(typeprocess == 'save')
				{
					$(this).html('Processing...');
					$(this).attr('disabled', true);
					$(this).closest('form').find('.btn-cancel').attr('disabled', true);
					
					var formid 	 = $(this).closest('form').attr('id')
					var dataform = $('#' + formid).serialize();
					
					$.ajax({
						url		 : '../modules/enlineamixmod/enlineamixmod-tester-campaign-ajaxpost.php', 
						data	 : dataform,
						dataType :'json',
						method 	 : 'post',
						success	 : function(result){
							_this.html('Save');
							_this.attr('disabled', false);
							_this.closest('form').find('.btn-cancel').attr('disabled', false);
							
							if(result.status == true)
							{
								Swal.fire({
									icon: 'success',
									title: 'Saved',
									text: 'All changes has been saved',
								});
								
								if(result.data != undefined && result.data != '')
								{
									if(formtype == 'customer_info')
									{
										if(result.data.firstname != undefined && result.data.firstname != '')
										{
											$('body').find('.cust-firstname-info').html(result.data.firstname);
										}
										
										if(result.data.lastname != undefined && result.data.lastname != '')
										{
											$('body').find('.cust-lastname-info').html(result.data.lastname);
										}
										
										if(result.data.email != undefined && result.data.email != '')
										{
											$('body').find('.cust-email-info').html(result.data.email);
										}
										
										if(result.data.phone_mobile != undefined && result.data.phone_mobile != '')
										{
											$('body').find('.cust-phoneno-info').html(result.data.phone_mobile);
										}
										
										if(result.data.gender != undefined && result.data.gender != '')
										{
											$('body').find('.cust-gender-info').html(result.data.gender);
										}
										
										if(result.data.about_yourself != undefined && result.data.about_yourself != '')
										{
											$('body').find('.cust-abouturself-info').html(result.data.about_yourself);
										}
									}
									else if(formtype == 'customer_about')
									{
										if(result.data.dob != undefined && result.data.dob != '')
										{
											$('body').find('.cust-about-dob-info').html(result.data.dob);
										}
										
										if(result.data.cust_occupation != undefined && result.data.cust_occupation != '')
										{
											$('body').find('.cust-occupation-info').html(result.data.cust_occupation);
										}
										
										if(result.data.cust_race != undefined && result.data.cust_race != '')
										{
											$('body').find('.cust-about-race-info').html(result.data.cust_race);
										}
										
										if(result.data.cust_salaryrange != undefined && result.data.cust_salaryrange != '')
										{
											$('body').find('.cust-about-salaryrange-info').html(result.data.cust_salaryrange);
										}
									}
								}
								
								_this.closest('.panel-motherhood').find('.input-info').hide('fast');
								_this.closest('.panel-motherhood').find('.display-info').show('fast');
								_this.closest('.panel-motherhood').find('.btn-action').hide('fast');
								_this.closest('.panel-motherhood').find('.btn-edit').show('fast');
								$('body').find('.cust-about-race-input').hide('fast');
							}
							else
							{
								failedResponse('#' + formid, result.error_field);
								if(result.error_field != '' && result.error_field != undefined)
								{
									$('.' + result.error_field).closest('.form-group').find(errorSelector).html(icon + " " + result.msg);
								}
								Swal.fire({
									icon: 'warning',
									title: 'Action Failed',
									text: result.msg,
								});
							}
						},
						error: function () {
							_this.html('Save');
							_this.attr('disabled', false);
							_this.closest('form').find('.btn-cancel').attr('disabled', false);
							
							Swal.fire({
								icon: 'error',
								title: 'Unexpected server response',
								text: "Contact admin",
							});
						}
					});
				}
				else{
					$(this).closest('.panel-motherhood').find('.input-info').hide('fast');
					$(this).closest('.panel-motherhood').find('.display-info').show('fast');
					$(this).closest('.panel-motherhood').find('.btn-action').hide('fast');
					$(this).closest('.panel-motherhood').find('.btn-edit').show('fast');
					$('body').find('.cust-about-race-input').hide('fast');
				}
			});
			
			/** Begin auto detect city and state based on postcode **/
			$('body').on('blur', '.addr-postcode', function(){
				validatePostcode($(this));
			});
			/** End auto detect city and state based on postcode **/
			
			/** Begin Remove Error Mark **/
			$('body').on('change', '.is-invalid', function(){
				if($.trim($(this).val()) != ''){
					$(this).removeClass('is-invalid');
					$(this).closest('.form-group').find(errorSelector).html("");
				}
			});
			/** End Remove Error Mark **/
			
			$('body').on('change', '.listrace', function(){
				raceOption();
			});
			
			
			$('body').find("#mamacubatry-wizard").steps({
				headerTag: "h4",
				bodyTag: "section",
				transitionEffect: "fade",
				enableAllSteps: true,
				transitionEffectSpeed: 500,
				onStepChanging: function (event, currentIndex, newIndex) { 
					console.log("currentIndex = " + currentIndex);
					console.log("newIndex = " + newIndex);
					if(currentIndex === 0)
					{
						validation = checkSelectedProduct();
						$('body').find('.input-flag-checking-step').val(validation);
						console.log("validtion = " + validation);
						if(validation != true)
						{
							
							Swal.fire({
								icon: 'error',
								title: 'No product selected',
								text: 'Please select product before proceed',
							});
							
							return false;
						}
					}
					
					
					if (newIndex === 1) {
						$('.steps ul').addClass('step-2');
					} else {
						$('.steps ul').removeClass('step-2');
					}
						
					if ( newIndex === 2 ) {
						$('.steps ul').addClass('step-3');
					} else {
						$('.steps ul').removeClass('step-3');
					} 
					
					if ( newIndex === 3 ) {
						$('.steps ul').addClass('step-4');
					} else {
						$('.steps ul').removeClass('step-4');
					}

					if ( newIndex === 4 ) {
						$('.steps ul').addClass('step-5');
						$('.actions ul').addClass('step-last');
					} else {
						$('.steps ul').removeClass('step-5');
						$('.actions ul').removeClass('step-last');
					}
					
					return true; 
					
				},
				labels: {
					finish: "Submit",
					next: "Next",
					previous: "Back"
				}
			});
			
			// Custom Steps Jquery Steps
			$('.wizard > .steps li a').click(function(){
				var highLight = $('body').find('.input-flag-checking-step').val();
				
				if(highLight == "true")
				{
					$(this).parent().addClass('checked');
				}
				
				$(this).parent().prevAll().addClass('checked');
				$(this).parent().nextAll().removeClass('checked');
			});
			
			// Custom Button Jquery Steps
			$('.forward').click(function(){
				$("#mamacubatry-wizard").steps('next');
			})
			
			$('.backward').click(function(){
				$("#mamacubatry-wizard").steps('previous');
			})
			
			// Checkbox
			$('.checkbox-circle label').click(function(){
				$('.checkbox-circle label').removeClass('active');
				$(this).addClass('active');
			})
			
			
			/** need to initilize input mask js after jquery step **/
			var selectorDOB = document.getElementsByClassName("dobinput");
			Inputmask('datetime',{
				alias 		 :'datetime',
				inputFormat  : "dd/mm/yyyy", 
				outputFormat : "dd/mm/yyyy",
				leapday: "29.02."
			}).mask(selectorDOB);
			
			var selectorMobile = document.getElementsByClassName("mobilenumber");
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
			
			var selectorPostcode = document.getElementsByClassName("postcode-address");
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
			/** end of initialize input mask **/
			
			
			
			/** signature pad **/
			var wrapper 		  = document.getElementById("signature-pad");
			var clearButton 	  = wrapper.querySelector("[data-action=clear]");
			var changeColorButton = wrapper.querySelector("[data-action=change-color]");
			var undoButton 		  = wrapper.querySelector("[data-action=undo]");
			var savePNGButton 	  = wrapper.querySelector("[data-action=save-png]");
			var saveJPGButton 	  = wrapper.querySelector("[data-action=save-jpg]");
			var saveSVGButton 	  = wrapper.querySelector("[data-action=save-svg]");
			var canvas  		  = wrapper.querySelector("canvas");
			var signaturePad 	  = new SignaturePad(canvas, {
			  // It's Necessary to use an opaque color when saving image as JPEG; this option can be omitted if only saving as PNG or SVG
				backgroundColor: 'rgb(255, 255, 255)',
			});
			
			// Adjust canvas coordinate space taking into account pixel ratio, to make it look crisp on mobile devices. This also causes canvas to be cleared.
			var resizeCanvas = function() {
				/*
				* When zoomed out to less than 100%, for some very strange reason, 
				* some browsers report devicePixelRatio as less than 1 and only part of the canvas is cleared then. **/
				var ratio 		= Math.max(window.devicePixelRatio || 1, 1);
				var canvasWidth = canvas.offsetWidth;
				var canvasHeight = canvas.offsetHeight;
				
				if(canvasWidth <= 0)
				{
					canvasWidth = 664;
				}
				
				if(canvasHeight <= 0)
				{
					canvasHeight = 366;
				}
			
				/** This part causes the canvas to be cleared **/
				canvas.width  = canvasWidth * ratio;
				canvas.height = canvasHeight * ratio;
				canvas.getContext("2d").scale(ratio, ratio);

			  // This library does not listen for canvas changes, so after the canvas is automatically
			  // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
			  // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
			  // that the state of this library is consistent with visual state of the canvas, you
			  // have to clear it manually.
				signaturePad.clear();
			}

			// On mobile devices it might make more sense to listen to orientation change,
			// rather than window resize events.
			window.onresize = resizeCanvas;
			resizeCanvas();

			$('body').on('click', '.btn-clear-signature', function(){
				signaturePad.clear();
			});
			
			$('body').on('click', '.btn-undo-signature', function(){
				var data = signaturePad.toData();
				if (data) 
				{
					data.pop(); // remove the last dot or line
					signaturePad.fromData(data);
				}
			});

			$('body').on('click', '.btn-changecolor-signature', function(){
				var r 	  = Math.round(Math.random() * 255);
				var g  	  = Math.round(Math.random() * 255);
				var b 	  = Math.round(Math.random() * 255);
				var color = "rgb(" + r + "," + g + "," + b +")";
				signaturePad.penColor = color;
			});
			
			$('body').on('click', '.btn-save-png', function(){
				if (signaturePad.isEmpty()) {
					Swal.fire({
						icon: 'info',
						title: 'No signature',
						text: 'Please provide a signature first.',
					})
				}
				else {
					var dataURL = signaturePad.toDataURL();
					downloadSignature(dataURL, "signature.png");
				}
			});
			
			$('body').on('click', '.btn-save-jpg', function(){
				if (signaturePad.isEmpty()) {
					Swal.fire({
						icon: 'info',
						title: 'No signature',
						text: 'Please provide a signature first.',
					})
				}
				else {
					var dataURL = signaturePad.toDataURL("image/jpeg");
					downloadSignature(dataURL, "signature.jpg");
				}
			});

			$('body').on('click', '.btn-save-svg', function(){
				if (signaturePad.isEmpty()) {
					Swal.fire({
						icon: 'info',
						title: 'No signature',
						text: 'Please provide a signature first.',
					})
				}
				else {
					var dataURL = signaturePad.toDataURL('image/svg+xml');
					downloadSignature(dataURL, "signature.svg");
				}
			});
			
		});
	</script>
{/literal}
<!-- END : MODULE mamacubatryproducts -->