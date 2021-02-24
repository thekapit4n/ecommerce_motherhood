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
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/tagify/dist/tagify.min.js" type="text/javascript"></script>


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
		margin-left:5px;
	}
	
	.checkbox label {
		display: flex !important;
	}
	
	.div-address-info{
		padding:15px; 
		border: 1px solid #b4b3b4;
		position:relative;
		margin-bottom: 15px;
		min-height:220px;
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
	
	.is-invalid, .is-invalid:focus,.mandotary-field {
		color: #b94a48;
		border-color: #e9322d !important;
	}
	
	.mandotary-ico:after{
		content: '*';
		color: #b94a48;
	}
	
	.error-msg{
		color:#e9322d
	}
	
	.info-tagify-milkbrand
	{
		display:none
	}
	
	.tagify-milkbrand, .tagify-diapers, .tagify-pastreviewbrand, .tagify-contractbrand, .tagify-brandlove
	{
		display:none
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
								<label><input type="checkbox" class="check-campaign-productid" value="{$campaign['tester_product_id']}" data-campaignid="{$campaign['tester_id']}" data-campaignname="{$campaign['name']}" checked></label>
							</div>
						</div>
					</div>
				</section>
				
				<!-- SECTION 2 -->
				<h4></h4>
				<section style="display:none;">
					<font class="mandotary-field" style="font-size:14px;">* Mandotary field</font>
					<div class="panel-group" id="accordion" style="margin-top:5px;">
						<div class="panel panel-default" style="border-color:#2ea7ad!important;">
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
													<label for="cust-firstname"><font class="remark-ico"></font>First Name</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-firstname"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm cust-firstname-input input-info" id="cust-name" name="firstname" value="{$customer->firstname}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-firstname-info">{$customer->firstname}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-lastname"><font class="remark-ico"></font>Last Name</label>
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
													<label for="cust-email"><font class="remark-ico"></font>Email</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-email"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm  cust-email-input input-info" id="cust-email" name="email" value="{$customer->email}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-email-info">{$customer->email}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-mobile"><font class="remark-ico"></font>Mobile No</label>
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
													<label for="cust-gender"><font class="remark-ico"></font>Gender</label>
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
													<label for="cust-abouturself"><font class="remark-ico"></font>Tell us about yourself</label>
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
						<div class="panel panel-default " style="border-color:#2ea7ad!important;">
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
													<label for="cust-about-dob"><font class="remark-ico"></font>Date of Birth</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-about-dob"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm cust-about-dob input-info dobinput" name="dob"  value="{$customer->birthday|date_format:"%d/%m/%Y"}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-about-dob-info">{$customer->birthday|date_format:"%d/%m/%Y"}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-about-occupation"><font class="remark-ico"></font>Your occupation</label>
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
													<label for="cust-about-race"><font class="remark-ico"></font>Your Race</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-about-race"}
														{if $additionalInfo['race'] == 'Malay' || $additionalInfo['race'] == 'Chinese' || $additionalInfo['race'] == 'Indian'}
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
													<label for="cust-about-salaryrange"><font class="remark-ico"></font>Your household income range(yearly)</label>
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
						<div class="panel panel-default" style="border-color:#2ea7ad!important;">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-family">
								<h4 class="panel-title">
									Family <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-family" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<form id="form-customer-family">
										<input type="hidden" class="form-type" name="formtype" value="customer_family">
										<input type="hidden" class="input_typeprocess" value="">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-family" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
													</button>
													<button type="button" id="btn-save-cust-family" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-family" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-family-maritalstatus"><font class="remark-ico"></font>Marital status:</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-maritalstatus"}<!-- to check if this input has been set on admin page -->
														<select class="input-sm input-info select-mmy cust-marital-status" name="marital_status" style="display:none;">
															<option value="">Please select marital status</option>
															<option value="Married" {if $additionalInfo['married'] == 'Married'} selected="selected"{/if}>Married</option>
															<option value="Not Married" {if $additionalInfo['married'] == 'Not Married'} selected="selected"{/if}>Not Married</option>
															<option value="Single Parent" {if $additionalInfo['married'] == 'Not Married'} selected="selected"{/if}>Single Parent</option>
														</select>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info marital-status-info">{$additionalInfo['married']}</p>
												</div>
											</div>
											
											{if $additionalInfo['married'] == 'Married' || $additionalInfo['married'] == 'Single Parent' } 
												{assign var="displayfamily_div" value="block"} 
											{else} 
												{assign var="displayfamily_div" value="none"} 
											{/if}
											
											{if $additionalInfo['pregnant'] != 'No' && $additionalInfo['pregnant'] != ''}
												{assign var="expect_edd_display" value="block"} 
											{else}
												{assign var="expect_edd_display" value="none"} 
											{/if}
											
											<div class="col-md-6 family-div" style="display:{$displayfamily_div};">
												<div class="form-group">
													<label for="cust-family-newborn"><font class="remark-ico"></font>Are you expecting newborn?</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-newborn"}<!-- to check if this input has been set on admin page -->
														<select class="input-sm input-info expect-newborn select-mmy" name="expect_newborn" id="cust-family-newborn" style="display: none;">
															<option value="No" {if $additionalInfo['pregnant'] == 'No'} selected="selected"{/if}>No</option>
															<option value="Yes-1" {if $additionalInfo['pregnant'] == 'Yes-1'} selected="selected"{/if}>Yes-1</option>
															<option value="Yes-Twins" {if $additionalInfo['pregnant'] == 'Yes-Twins'} selected="selected"{/if}>Yes-Twins</option>
															<option value="Yes-More" {if $additionalInfo['pregnant'] == 'Yes-Twins'} selected="selected"{/if}>Yes-More</option>
														</select>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info expect-newborn-display">{$additionalInfo['pregnant']}</p>
												</div>
											</div>
										</div>
										<div class="row family-div " style="display:{$displayfamily_div};">
											<div class="col-md-6 div-edd-date" style="display:{$expect_edd_display};">
												<div class="form-group">
													<label for="cust-family-edd"><font class="remark-ico"></font>Expectation Due Date(EDD) ?</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-edd"}
														<input type="text" class="form-control input-sm input-info dobinput" name="edd" id="cust-family-edd" value="{if $additionalInfo['edd'] != '0000-00-00'}{$additionalInfo['edd']|date_format:"%d/%m/%Y"}{/if}" style="display:none">
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-family-edd-info">{if $additionalInfo['edd'] != '0000-00-00'}{$additionalInfo['edd']|date_format:"%d/%m/%Y"}{/if}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cust-family-numchild"><font class="remark-ico"></font>How many children do you have ?</label>
													{if $campaign['tester_campaign_fields']|strstr:"cust-family-numchild"}
														<select class="input-sm input-info num-child select-mmy" name="num_child" style="display: none;">
															<option value="0" {if $additionalInfo['childno'] == 0} selected="selected" {/if}>0</option>
															<option value="1" {if $additionalInfo['childno'] == 1} selected="selected" {/if}>1</option>
															<option value="2" {if $additionalInfo['childno'] == 2} selected="selected" {/if}>2</option>
															<option value="3" {if $additionalInfo['childno'] == 3} selected="selected" {/if}>3</option>
															<option value="4" {if $additionalInfo['childno'] == 4} selected="selected" {/if}>4</option>
															<option value="5" {if $additionalInfo['childno'] == 5} selected="selected" {/if}>5</option>
															<option value="6" {if $additionalInfo['childno'] == 6} selected="selected" {/if}>6</option>
														</select>
														<small class="error-msg"></small>
													{/if}
													<p class="display-info cust-family-nochild-info">{$additionalInfo['childno']}</p>
												</div>
											</div>
										</div>
										<div>
											<input type="hidden" class="dummy-childdob1" value="{if $additionalInfo['childbirthyear1'] != '0000-00-00'}{$additionalInfo['childbirthyear1']|date_format:"%d/%m/%Y"}{/if}">
											<input type="hidden" class="dummy-childdob2" value="{if $additionalInfo['childbirthyear2'] != '0000-00-00'}{$additionalInfo['childbirthyear2']|date_format:"%d/%m/%Y"}{/if}">
											<input type="hidden" class="dummy-childdob3" value="{if $additionalInfo['childbirthyear3'] != '0000-00-00'}{$additionalInfo['childbirthyear3']|date_format:"%d/%m/%Y"}{/if}">
											<input type="hidden" class="dummy-childdob4" value="{if $additionalInfo['childbirthyear4'] != '0000-00-00'}{$additionalInfo['childbirthyear4']|date_format:"%d/%m/%Y"}{/if}">
											<input type="hidden" class="dummy-childdob5" value="{if $additionalInfo['childbirthyear5'] != '0000-00-00'}{$additionalInfo['childbirthyear5']|date_format:"%d/%m/%Y"}{/if}">
											<input type="hidden" class="dummy-childdob6" value="{if $additionalInfo['childbirthyear6'] != '0000-00-00'}{$additionalInfo['childbirthyear6']|date_format:"%d/%m/%Y"}{/if}">
											{if $campaign['tester_campaign_fields']|strstr:"cust-family-childdob"}
												<input type="hidden" class="status-view-childdob" value="true">
											{else}
												<input type="hidden" class="status-view-childdob" value="false">
											{/if}
										</div>
										<div class="family-div" style="display:{$displayfamily_div};">
											<div class="row child-dob-row">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default" style="border-color:#2ea7ad!important;">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-favorites">
								<h4 class="panel-title">
									Favorites <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-favorites" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<form id="form-customer-favorites">
										<input type="hidden" class="form-type" name="formtype" value="customer_favorites">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-favorites" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
													</button>
													<button type="button" id="btn-save-cust-favorites" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-favorites" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
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
														<input name='milk_brand' class="input-info tagify-milkbrand" value="{$additionalInfo['favMilk']}" id="favourites-milk" style="display:none">
													{/if}
													<p class="display-info milkbrand-info">{$additionalInfo['favDiaper']}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="favourites-diapers">Your child's diaper brand:</label>
													{if $campaign['tester_campaign_fields']|strstr:"favourites-diapers"}<!-- to check if this input has been set on admin page -->
														<input name='diapers_brand' class="input-info tagify-diapers" value="{$additionalInfo['favDiaper']}" id="favourites-diapers" style="display:none">
													{/if}
													<p class="display-info diapers-brand-info">{$additionalInfo['favDiaper']}</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="favourites-pastreviewbrands">Brand of products reviews you have done in the past 6 months</label>
													{if $campaign['tester_campaign_fields']|strstr:"favourites-pastreviewbrands"}<!-- to check if this input has been set on admin page -->
														<input name='past_review_brands' class="input-info tagify-pastreviewbrand" value="{$additionalInfo['affBrands']}" id="favourites-pastreviewbrands" style="display:none">
													{/if}
													<p class="display-info past-review-brand-info">
														{$additionalInfo['affBrands']}
													</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="favourites-contractbrands">Are you tied on a contract with any brand?</label>
													{if $campaign['tester_campaign_fields']|strstr:"favourites-contractbrands"}<!-- to check if this input has been set on admin page -->
														<input name='contract_brands' class="input-info tagify-contractbrand" value="{$additionalInfo['contracts']}" id="favourites-contractbrands" style="display:none">
													{/if}
													<p class="display-info contract-brand-info">
														{$additionalInfo['contracts']}
													</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="favourites-favOther">What do you love?</label>
													{if $campaign['tester_campaign_fields']|strstr:"favourites-favOther"}<!-- to check if this input has been set on admin page -->
														<input name='love_brand' class="input-info tagify-brandlove" value="{$additionalInfo['favOther']}" id="favourites-favOther" style="display:none">
													{/if}
													<p class="display-info love-brand-info">
														{$additionalInfo['favOther']}
													</p>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default" style="border-color:#2ea7ad!important;">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion" data-target="#customer-interests">
							<h4 class="panel-title">
								Interests <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
							</h4>
							</div>
							<div id="customer-interests" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									<form id="form-customer-interest">
										<input type="hidden" class="form-type" name="formtype" value="customer_interest">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-interest" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
													</button>
													<button type="button" id="btn-save-cust-interest" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-interest" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
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
														<input type="text" class="form-control input-sm input-info" id="interest-igaccount" name="interest_igaccount" value="{$additionalInfo['insta_url']}" style="display:none">
													{/if}
													<p class="display-info url-ig-info">{$additionalInfo['insta_url']}</p>
												</div>
											</div>
										</div>
										<div class="row" style="display:none;">
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
										<div class="row" style="display:none;">
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
													<label for="interest-hostshow">Can host FB/IG live show:</label>
													{if $campaign['tester_campaign_fields']|strstr:"interest-hostshow"}<!-- to check if this input has been set on admin page -->
														<div class="input-info" style="display:none">
															<div class="checkbox">
																<label><input type="checkbox" value="1" id="interest-hostshow" name="interest_hostshow" {if $additionalInfo['can_host_live'] == 1} checked {/if}>Yes</label>
															</div>
														</div>
													{/if}
													<p class="display-info url-hostshow-info">
														{if $additionalInfo['can_host_live'] == 1}
															Yes
														{else}
															No
														{/if}
													</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="interest-fbaccount">Your Facebook account:</label>
													{if $campaign['tester_campaign_fields']|strstr:"interest-igaccount"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm input-info" id="interest-fbaccount" name="interest_fbaccount" value="{$additionalInfo['fbUrl']}" style="display:none">
													{/if}
													<p class="display-info url-fb-info">{$additionalInfo['fbUrl']}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="interest-blogwebsite">Blogwebsite:</label>
													{if $campaign['tester_campaign_fields']|strstr:"interest-blogwebsite"}<!-- to check if this input has been set on admin page -->
														<input type="text" class="form-control input-sm input-info" id="interest-blogwebsite" name="interest_blogwebsite" value="{$additionalInfo['blogUrl']}" style="display:none">
													{/if}
													<p class="display-info url-blog-info">{$additionalInfo['blogUrl']}</p>
												</div>
											</div>
										</div>
									</form>
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
				<section style="display:none;padding-right: 15px;padding-left: 15px;">
					<div class="row">
						<div class="col-md-6">
							Choose a delivery address
						</div>
						<div class="col-md-6">
							<div class="form-group" style="text-align:end;">
								<button type="button" class="btn btn-default btn-pill btn-pill-color btn-add-address" data-typeaddrform="delivery_address">
									<span>Add new delivery address</span>
								</button>
							</div>
						</div>
					</div>
					<div class="row list-address" style="padding-left: 20px; padding-right: 20px;">
						<div class="row">
							{*	File address list 
								if change this varibale name 'arrAddress', please change also in file enlineamixmod-tester-campaign-ajaxpost.php
							*}
							{include file="$mamacubatry_view/templates/front/mamacubatry_listaddr.tpl"
								arrAddress = $arr_address
							}
						</div>
					</div>
					<div class="row form-address" style="margin-top:25px;display:none;">
						<h4> Address Info</h4>
						<form id="address_form">
							<input type="hidden" class="form-type" name="formtype" value="customer_address">
							<input type="hidden" class="type_addres_form" name="type_addres_form" value="">
							<input type="hidden" class="form-address-id" name="address_id" value="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-name">Address title</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-title" name="addr_title" value="">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-name">First name</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-firstname" name="addr_firstname" value="{$customer->firstname}">
										<small class="error-msg"></small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-email">Last name</label>
										<input type="text" class="form-control input-sm  cust-email-input input-info addr-lastname" name="addr_lastname" value="{$customer->lastname}">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="cust-name">Address 1</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-line1" name="addr_line1" value="">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="cust-name">Address 2</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr_line2" name="addr_line2" value="">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="cust-name">Postcode</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-postcode postcode-address" name="addr_postcode" value="" autocomplete="off">
										<small class="error-msg"></small>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="cust-name">City</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-city" name="addr_city" value="" autocomplete="off">
										<small class="error-msg"></small>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="cust-name">State</label>
										<select class="input-sm input-info addr-state select-mmy addr-state" name="addr_state" autocomplete="off">
											<option value="" >Select state</option>
											{if $liststate}
												{foreach from=$liststate item=liststate1}
													{if $liststate1.state_name == 'Wilayah Persekutuan Kuala Lumpur'}
														{assign var="statename" value="Kuala Lumpur"} 
													{else if $liststate1.state_name == 'Wilayah Persekutuan Labuan'}
														{assign var="statename" value="Labuan"} 
													{else if $liststate1.state_name == 'Wilayah Persekutuan Putrajaya'}
														{assign var="statename" value="Putrajaya"} 
													{else}
														{assign var="statename" value=$liststate1.state_name} 
													{/if}
													<option value="{$statename}" data-statecode="{$liststate1.state_code}">{$statename}</option>
												{/foreach}
											{/if}
										</select>
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-name">Country</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-country" name="addr_country" value="Malaysia" autocomplete="off" readonly>
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-name">Mobile no.</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-mobileno" name="addr_mobileno" value="">
										<small class="error-msg"></small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="cust-name">Home no.</label>
										<input type="text" class="form-control input-sm cust-name-input input-info addr-homeno" name="addr_homeno" value="">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="cust-name">Additional info.</label>
										<input type="text" class="form-control input-sm cust-name-input input-info" name="addr_additionalinfo" value="">
										<small class="error-msg"></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<button type="button" id="btn-save-cust-address" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-action">
											<span>Save</span>
										</button>
										<button type="button" id="btn-cancel-cust-address" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color">
											<span>Cancel</span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
				<!-- SECTION 5 -->
				<h4></h4>
				<section style="display:none">
					<div class="row">
						<div class="col-md-12" style="padding-left: 25px; padding-right: 25px;">
							Agreement Details: {$campaign['tester_agreement']}
						</div>
					</div>
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
		
		var optionMaritalStatus = function(){
			var maritalStatus = $('body').find('.cust-marital-status').val();
			if(maritalStatus != '' && maritalStatus != undefined)
			{
				if(maritalStatus.toLowerCase() == 'not married')
				{
					$('body').find('.family-div').hide('fast');
				}
				else
				{
					$('body').find('.family-div').show('fast');
				}
			}
			else
			{
				$('body').find('.family-div').hide('fast');
			}
		}
		
		var exepctedEdd = function(){
			var expectEdd = $('body').find('.expect-newborn').val();
			
			if(expectEdd == 'No')
			{
				$('body').find('.div-edd-date').hide('fast');
			}
			else
			{
				$('body').find('.div-edd-date').show('fast')
			}
		}
		
		var ajx_list_addr = function(){
			$.ajax({
				url		 : '../modules/enlineamixmod/enlineamixmod-tester-campaign-ajaxpost.php', 
				data	 : {'formtype' : 'customer_list_address'},
				dataType :'json',
				method 	 : 'post',
				success	 : function(result){
					if(result.status == true)
					{
						if(result.data.html != undefined && result.data.html != '')
						{
							$('body').find('.list-address').html(result.data.html);
						}
					}
				},
				error: function () {
					
					Swal.fire({
						icon: 'error',
						title: 'Unexpected server response',
						text: "Contact admin",
					});
				}
			});
		}
		
		var checkbillingaddr = function(){
			var ischeck = $('body').find('.check-billing-addr').prop('checked');
			
			if(ischeck)
			{
				$('body').find('.billing-address').hide('fast');
			}
			else
			{
				$('body').find('.billing-address').show('fast');
			}
		}
		
		/** manage view of number of childer under secton family in step my particular **/
		var optNumChild = function(){
			var numChild 	   		= $('body').find('.num-child').val();
			var statusChilddob 		= $('body').find('.status-view-childdob').val();
			var typrprocess    		= $('body').find('#form-customer-family .input_typeprocess').val();
			var display_info_child 	= 'none';
			var display_input_child = 'block';
			var remarkfont 			= '<font class="remark-ico  mandotary-ico"></font>';
			
			if(typrprocess != 'edit')
			{
				display_info_child  = 'block';
				display_input_child = 'none';
				remarkfont 			= '<font class="remark-ico"></font>';
			}
			
			console.log("numChild = " + numChild + " statusChilddob = " + statusChilddob);
			console.log("typrprocess = " + typrprocess + " display_info_child = " + display_info_child + " display_input_child " + display_input_child);
			if(numChild > 0 && statusChilddob == "true")
			{
				var childHtml = '';
				$('body').find('.child-dob-row').html("");
				for (i = 1; i <= numChild; i++){
					var dobChild  = $('body').find('.dummy-childdob' + i).val();
				
					childHtml += '<div class="col-md-6">';
					childHtml += '<div class="form-group">';
					childHtml += '<label for="cust-family-childdob">' + remarkfont + 'Child ' + i + ' date of birth ?</label>';
					childHtml += '<input type="text" class="form-control input-sm input-info child-dob' + i + ' childdobinput" name="child_dob[]" value="' + dobChild + '" style="display:' + display_input_child + '">';
					childHtml += '<small class="error-msg"></small>';
					childHtml += '<p class="display-info dob-child-info" style="display:' + display_info_child  + '">' + dobChild + '</p>';
					childHtml += '</div>';
					childHtml += '</div>';
				}
				$('body').find('.child-dob-row').html(childHtml);
			}
			else
			{
				$('body').find('.child-dob-row').html("");
			}
			
			/** need to initilize input mask js after jquery step **/
			var selectorDOB = document.getElementsByClassName("childdobinput");
			Inputmask('datetime',{
				alias 		 :'datetime',
				inputFormat  : "dd/mm/yyyy", 
				outputFormat : "dd/mm/yyyy",
				leapday: "29.02."
			}).mask(selectorDOB);
		}
		/** end manage view number children **/
		
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
				
				if ($(this).closest('#form-customer-family').length > 0){
					$(this).closest('#form-customer-family').find('.input_typeprocess').val('edit');
				}
				
				$(this).closest('.panel-motherhood').find('.input-info').show('fast');
				$(this).closest('.panel-motherhood').find('.tagify-milkbrand').css('display', 'block');
				$(this).closest('.panel-motherhood').find('.tagify-diapers').css('display', 'block');
				$(this).closest('.panel-motherhood').find('.tagify-pastreviewbrand').css('display', 'block');
				$(this).closest('.panel-motherhood').find('.tagify-contractbrand').css('display', 'block');
				$(this).closest('.panel-motherhood').find('.tagify-brandlove').css('display', 'block');
				$(this).closest('.panel-motherhood').find('.display-info').hide('fast');
				$(this).closest('.panel-motherhood').find('.btn-action').show('fast');
				$(this).closest('.panel-motherhood').find('.btn-action').show('fast');
				$(this).closest('.panel-motherhood').find('.remark-ico').addClass('mandotary-ico');
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
								
								$('body').find('#form-customer-family .input_typeprocess').val('');
								
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
										
										_this.closest('.panel-motherhood').find('.remark-ico').removeClass('mandotary-ico');
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
										
										_this.closest('.panel-motherhood').find('.remark-ico').removeClass('mandotary-ico');
									}
									else if(formtype == 'customer_family')
									{
										if(result.data.marital_status != undefined && result.data.marital_status != '')
										{
											$('body').find('.marital-status-info').html(result.data.marital_status);
										}
										
										if(result.data.expect_newborn != undefined && result.data.expect_newborn != '')
										{
											$('body').find('.expect-newborn-display').html(result.data.expect_newborn);
										}
										
										if(result.data.edd != undefined && result.data.edd != '')
										{
											$('body').find('.cust-family-edd-info').html(result.data.edd);
										}
										
										if(result.data.num_child != undefined && result.data.num_child != '')
										{
											$('body').find('.cust-family-nochild-info').html(result.data.num_child);
										}
										
										if(result.data.child_dob != undefined && result.data.child_dob != '' && $.isArray(result.data.child_dob))
										{
											$.each(result.data.child_dob, function( index, childdob ) {
												var childSeq = (index+1);
												$('body').find('.dummy-childdob' + childSeq).val(childdob);
											});
											optNumChild();
										}
										
										_this.closest('.panel-motherhood').find('.remark-ico').removeClass('mandotary-ico');
									}
									else if(formtype == 'customer_favorites')
									{
										if(result.data.string_milkbrand != undefined && result.data.string_milkbrand != '')
										{
											$('body').find('.milkbrand-info').html(result.data.string_milkbrand);
										}
										
										if(result.data.string_diaperbrand != undefined && result.data.string_diaperbrand != '')
										{
											$('body').find('.diapers-brand-info').html(result.data.string_diaperbrand);
										}
										
										if(result.data.string_pastbrand != undefined && result.data.string_pastbrand != '')
										{
											$('body').find('.past-review-brand-info').html(result.data.string_pastbrand);
										}
										
										if(result.data.string_lovebrand != undefined && result.data.string_lovebrand != '')
										{
											$('body').find('.love-brand-info').html(result.data.string_lovebrand);
										}
										
										if(result.data.string_contractbrand != undefined && result.data.string_contractbrand != '')
										{
											$('body').find('.contract-brand-info').html(result.data.string_contractbrand);
										}
									}
									else if(formtype == 'customer_interest')
									{
										if(result.data.interest_igaccount != undefined && result.data.interest_igaccount != '')
										{
											$('body').find('.url-ig-info').html(result.data.interest_igaccount);
										}
										
										if(result.data.interest_hostshow != undefined && result.data.interest_hostshow != '')
										{
											var host = 'No';
											if(result.data.interest_hostshow == 1)
											{
												host = 'Yes';
											}
											$('body').find('.url-hostshow-info').html(host);
										}
										else
										{
											console.log('else condition cannot host');
											$('body').find('.url-hostshow-info').html("No");
										}
										
										if(result.data.interest_fbaccount != undefined && result.data.interest_fbaccount != '')
										{
											$('body').find('.url-fb-info').html(result.data.interest_fbaccount);
										}
										
										if(result.data.interest_blogwebsite != undefined && result.data.interest_blogwebsite != '')
										{
											$('body').find('.url-blog-info').html(result.data.interest_blogwebsite);
										}
									}
									else if(formtype == 'customer_address')
									{
										ajx_list_addr();
										$('body').find('.billing-address').show('fast');
										$('body').find('.list-address').show('fast');
										$('body').find('.form-address').hide('fast');
										_this.closest('.panel-motherhood').find('.remark-ico').removeClass('mandotary-ico');
									}
								}
								
								_this.closest('.panel-motherhood').find('.input-info').hide('fast');
								_this.closest('.panel-motherhood').find('.display-info').show('fast');
								_this.closest('.panel-motherhood').find('.btn-action').hide('fast');
								_this.closest('.panel-motherhood').find('.btn-edit').show('fast');
								_this.closest('.panel-motherhood').find('.tagify-milkbrand').css('display', 'none');
								_this.closest('.panel-motherhood').find('.tagify-diapers').css('display', 'none');
								_this.closest('.panel-motherhood').find('.tagify-pastreviewbrand').css('display', 'none');
								_this.closest('.panel-motherhood').find('.tagify-contractbrand').css('display', 'none');
								_this.closest('.panel-motherhood').find('.tagify-brandlove').css('display', 'none');
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
					$(this).closest('.panel-motherhood').find('.tagify-milkbrand').css('display', 'none');
					$(this).closest('.panel-motherhood').find('.tagify-diapers').css('display', 'none');
					$(this).closest('.panel-motherhood').find('.tagify-pastreviewbrand').css('display', 'none');
					$(this).closest('.panel-motherhood').find('.tagify-contractbrand').css('display', 'none');
					$(this).closest('.panel-motherhood').find('.tagify-brandlove').css('display', 'none');
					$(this).closest('.panel-motherhood').find('.remark-ico').removeClass('mandotary-ico');
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
			
			$('body').on('change', '.cust-marital-status', function(){
				optionMaritalStatus();
			});
			
			$('body').on('change', '.expect-newborn', function(){
				exepctedEdd();
			});
			
			$('body').on('change', '.num-child', function(){
				optNumChild();
			});
			
			$('body').on('click', '.btn-add-address', function(){
				var typeaddrform = $(this).attr('data-typeaddrform');
				console.log("typeaddrform" + typeaddrform);
				$('body').find('.type_addres_form').val(typeaddrform);
				$('body').find('.billing-address').hide('fast');
				$('body').find('.list-address').hide('fast');
				$('body').find('.form-address').show('fast');
			})
			
			$('body').on('click', '#btn-cancel-cust-address', function(){
				$('body').find('.billing-address').show('fast');
				$('body').find('.list-address').show('fast');
				$('body').find('.form-address').hide('fast');
			});
			
			$('body').on('change', '.check-billing-addr', function(){
				checkbillingaddr()
			});
			
			/**  fetch address details from db using ajax **/
			$('body').on('click', '.btn-edit-address', function(){
				var addrId = $(this).attr('data-addressid');
				
				if(addrId > 0)
				{
					$.ajax({
						url		 : '../modules/enlineamixmod/enlineamixmod-tester-campaign-ajaxpost.php', 
						data	 : {'formtype' : 'customer_address_details', 'addr_id' : addrId},
						dataType :'json',
						method 	 : 'post',
						success	 : function(result){
							if(result.status == true)
							{
								if(result.data.alias != '' && result.data.alias != undefined && result.data.alias != null)
								{
									$('body').find('.addr-title').val(result.data.alias);
								}
								
								if(result.data.firstname != '' && result.data.firstname != undefined && result.data.firstname != null)
								{
									$('body').find('.addr-firstname').val(result.data.firstname);
								}
								
								if(result.data.lastname != '' && result.data.lastname != undefined && result.data.lastname != null)
								{
									$('body').find('.addr-lastname').val(result.data.lastname);
								}
								
								if(result.data.address1 != '' && result.data.address1 != undefined && result.data.address1 != null)
								{
									$('body').find('.addr-line1').val(result.data.address1);
								}
								
								if(result.data.address2 != '' && result.data.address2 != undefined && result.data.address2 != null)
								{
									$('body').find('.addr_line2').val(result.data.address2);
								}								
								
								if(result.data.postcode != '' && result.data.postcode != undefined && result.data.postcode != null)
								{
									$('body').find('.addr-postcode').val(result.data.postcode);
								}
								
								if(result.data.city != '' && result.data.city != undefined && result.data.city != null)
								{
									$('body').find('.addr-city').val(result.data.city);
								}
								
								if(result.data.statename != '' && result.data.statename != undefined && result.data.statename != null)
								{
									$('body').find('.addr-state').val(result.data.statename);
								}
								
								if(result.data.phone_mobile != '' && result.data.phone_mobile != undefined && result.data.phone_mobile != null)
								{
									$('body').find('.addr-mobileno').val(result.data.phone_mobile);
								}
								
								if(result.data.phone != '' && result.data.phone != undefined && result.data.phone != null)
								{
									$('body').find('.addr-homeno').val(result.data.phone);
								}
								
								if(result.data.id != '' && result.data.id != undefined && result.data.id != null)
								{
									$('body').find('.form-address-id').val(result.data.id);
								}
								
								$('body').find('.billing-address').hide('fast');
								$('body').find('.list-address').hide('fast');
								$('body').find('.form-address').show('fast');
							}
						}
					})
				}
				else
				{
					Swal.fire({
						icon: 'error',
						title: 'Address id not set',
						text: "Contact admin",
					});
				}
				
			})
			/** end fetch address details **/
			
			
			$('body').find("#mamacubatry-wizard").steps({
				headerTag			  : "h4",
				bodyTag				  : "section",
				transitionEffect	  : "fade",
				enableAllSteps		  : true,
				enableKeyNavigation   : false,
				transitionEffectSpeed : 500,
				onStepChanging		  : function (event, currentIndex, newIndex) { 
				
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
			
			optNumChild();
						
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
			
			var selectorDOB = document.getElementsByClassName("childdobinput");
			Inputmask('datetime',{
				alias 		 :'datetime',
				inputFormat  : "dd/mm/yyyy", 
				outputFormat : "dd/mm/yyyy",
				leapday: "29.02."
			}).mask(selectorDOB);
			
			/** end of initialize input mask **/
			
			var tagifymilkbrand = document.querySelector('input[name="milk_brand"]');
			new Tagify(tagifymilkbrand);
			
			var tagifydiapers = document.querySelector('input[name="diapers_brand"]');
			new Tagify(tagifydiapers);
			
			var tagifypastbrand = document.querySelector('input[name="past_review_brands"]');
			new Tagify(tagifypastbrand);
			
			var tagifycontract = document.querySelector('input[name="contract_brands"]');
			new Tagify(tagifycontract);
			
			var tagifybrandlove = document.querySelector('input[name="love_brand"]');
			new Tagify(tagifybrandlove);
			
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