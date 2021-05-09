{capture name=path}
	{l s='Mamacubatry'  mod='agilemultipleseller'}
{/capture}

<meta property="og:url"        content="https://www.motherhood.com.my/mamacubatry/{$campaign.link_rewrite}" />
<meta property="og:type"       content="website" />
<meta property="og:title" content="{$meta_title}" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<!--
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/signature_pad/docs/css/signature-pad-mmy.css" rel="stylesheet" type="text/css" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/signature_pad/docs/js/signature_pad.umd.js" type="text/javascript"></script>
-->
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
		background-color: #e86b5b !important;
		color: white;
		border-color: #e86b5b !important;
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
	
	.btn-cancel, .btn-cancel:hover, .btn-cancel:focus{
		background-color: #b4b3b4 !important;
		color: white !important;
		border-color: #b4b3b4 !important;
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
	
	.accordian-heading-motherhood-toggle{
		text-align:left;
		color: #fff !important;
		background-color: #1c6f74 !important; 
		border-color: #1c6f74 !important;
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
		min-height:140px;
	}	
	
	.div-address-info-checked{
		background-color:#b4b3b424;
	}
	
	.btn-edit-address, .btn-edit-address:focus, .btn-edit-address:hover{
		background-color:#38a7ac;
		border-color:#38a7ac;
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
		color: #ea3d4c;
		border-color: #ea3d4c !important;
	}
	
	.mandotary-ico:after{
		content: '*';
		color: #ea3d4c;
	}
	
	.error-msg{
		color:#ea3d4c
	}
	
	.info-tagify-milkbrand
	{
		display:none
	}
	.address-details {
	  padding-left:0px;
	}
	
	.tagify-milkbrand, .tagify-diapers, .tagify-pastreviewbrand, .tagify-contractbrand, .tagify-brandlove
	{
		display:none
	}
	
	.ballon-icon-tq{
		width:30%;
	}
	
	.div-tester-agreement ul{
		list-style:initial;
		padding-left:18px;
		color:black;
	}
	
	.div-tester-agreement ul > li{
		margin-bottom:5px;
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
		content: "Product Information";
		font-size: 18px;
		font-family: Arial,Helvetica,sans-serif;
		color: #4c4c4d;
		top: -27px;
		position: absolute;
	}

	.steps ul.step-2:before {
		content: "My Info"; 
	}
	
	/*.steps ul.step-3:before {
		content: "Precondition Form"; 
	}*/
	
	.steps ul.step-3:before {
      content: "My Address"; 
	}
	
	.steps ul.step-4:before {
      content: "Agreement"; 
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
</style>
<!-- MODULE mamacubatryproducts -->
<div class="container" style="font-size:13px;">
	<div class="row form-application" style="display:{if $applied == 1}none {else} block {/if}">
		<div class="col-md-8">
			<div style="margin-bottom:20px;margin-top:20px;line-height: 20px;">
				<font style="color:#4c4c4d; font-weight:700;">Hey {$customer->firstname} {$customer->lastname},<br></font>
				<font style="color:#30a7ad; font-weight:700;">To be a Mamacubatry tester, <br></font>you are required to update your information and complete the Precondition form. 
			</div>
		</div>
		<div class="col-md-4">
			<div class="text-left" style="margin-bottom:10px;margin-top:10px;">
				<a href="https://www.motherhood.com.my/my-product-review?productreview=1" class="btn btn-default btn-pill btn-pill-color">Back to Mamacubatry List</a>
			</div>
		</div>
	</div>
	<div class="row form-application" style="display:{if $applied == 1}none {else} block {/if}">
		<div class="col-md-12">
			<input type="hidden" class="cust-id" value="{$customer->id}">
			<input type="hidden" class="link-rewrite" value="{$campaign.link_rewrite}">
			<input type="hidden" class="applied-program" value="{$applied}">
			<input type="hidden" class="input-flag-checking-step" value="false">
			<input type="hidden" class="input-flag-checking-step" value="false">
			<div id="mamacubatry-wizard" style="margin-top:35px;">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="row">
						<div class="col-md-2">
							<img src="{$campaign['tester_cover_image']}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$campaign.name|escape:html:'UTF-8'}" />
						</div>
						<div class="col-md-10">
							<div class="row" style="margin-bottom:20px;">
								<a class="open-comment-form" href="#large_product_desc" style="color:#36a7ac">
									<span >{$campaign['name']} <span>
								</a>
							</div>
							<div class="row">
								<div style='color:#555454;font-weight:300;'class="text-left">{$campaign['description_short']}</div>
							</div>
							
							{if isset($campaign['description']) && $campaign['description'] != ''}
							<div class="row">
								<div style='color:#555454;font-weight:300;'class="text-left">{$campaign['description']}</div>
							</div>
							{/if}
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
								<h4 class="panel-title" data-toggle="collapse" data-target="#customer-information">
									Information <span class="ikon-collapse-motherhood"><i class="fas fa-angle-down"></i></span>
								</h4>
							</div>
							<div id="customer-information" class="panel-collapse collapse panel-motherhood">
								<div class="panel-body">
									
									<form id="form-customer-info">
										<input type="hidden" class="form-type" name="formtype" value="customer_info">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-edit-cust-info" class="btn btn-default btn-pill btn-pill-color btn-edit" >
														<span>Edit</span>
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
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" data-typeprocess='save'  class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default " style="border-color:#2ea7ad!important;">
							<div class="panel-heading accordian-heading-motherhood" data-toggle="collapse" data-parent="#accordion"  data-target="#customer-about">
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
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-save-cust-about" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-about" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
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
														<input type="text" class="form-control input-sm input-info dobinput cust-family-edd" name="edd" id="cust-family-edd" value="{if $additionalInfo['edd'] != '0000-00-00'}{$additionalInfo['edd']|date_format:"%d/%m/%Y"}{/if}" style="display:none">
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
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-save-cust-family" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-family" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
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
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-save-cust-favorites" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-favorites" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
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
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="text-align:end;">
													<button type="button" id="btn-save-cust-interest" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-save btn-action" style="display:none;">
														<span>Save</span>
													</button>
													<button type="button" id="btn-cancel-cust-interest" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel btn-action" style="display:none;">
														<span>Cancel</span>
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div> 
				</section>

				<!-- SECTION 3 original need to hide first -->
				<!--
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
				-->
				
				<!-- SECTION 3 -->
				<h4></h4>
				<section style="display:none;padding-right: 15px;padding-left: 15px;">
					<div class="row">
						<div class="col-md-6 col-xs-8">
							Choose a delivery address
						</div>
						<div class="col-md-6 col-xs-4">
							<div class="form-group" style="text-align:end;">
								<button type="button" class="btn btn-default btn-pill btn-pill-color btn-add-address" style="padding-right:15px;padding-left:15px;" data-typeaddrform="delivery_address">
									<span>Add address</span>
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
									<div class="form-group" style="text-align:end;">
										<button type="button" id="btn-save-cust-address" data-typeprocess='save' class="btn btn-default btn-pill btn-pill-color btn-action">
											<span>Save</span>
										</button>
										<button type="button" id="btn-cancel-cust-address" data-typeprocess='cancel' class="btn btn-default btn-pill btn-pill-color btn-cancel">
											<span>Cancel</span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
				<!-- SECTION 4 -->
				<h4></h4>
				<section style="display:none">
					<div class="row">
						<div class="col-md-12 div-tester-agreement" style="padding-left: 25px; padding-right: 25px;">
							<font style="font-size:14px;color:black;">Agreement Details:</font> {$campaign['tester_agreement']}
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="padding-left: 15px; padding-right: 15px;font-size:14px;">
							<div style="margin-top: 10px; margin-bottom: 10px;">
								<div class="checkbox">
									<label style="text-align: left;line-height: 16px;color:black;"><input type="checkbox" value="yes" class="check-tnc" name="check_tnc">I have read and agree to the Terms & Conditions of this campaign.</label>
								</div>
							</div>
						</div>
					</div>
					<form id="form-tester-campaign">
						<input type="hidden" class="form-type" name="formtype" value="tester_campaign_details">
						<input type="hidden" name="tester_product_id" class="tester-product-id" value="{$campaign['tester_product_id']}">
						<input type="hidden" name="tester_id" class="tester-id" value="{$campaign['tester_id']}">
						<input type="hidden" name="delivery_id" class="delivery-id" value="">
						<input type="hidden" name="billing_id" class="billing-id" value="">
						<input type="hidden" name="same_delivery" class="same-delivery-id" value="">
					</form>
				</section>
			</div>
		</div>
	</div>
	<div class="row success-application" style="display:{if $applied == 1}block {else} none {/if};text-align:center;margin-top:10%;">
		<div class="container" style="position:relative">
			<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Feb/Mamacubatry/Balloon.png" alt="ballon-thank-you" class="ballon-icon-tq">
			<h2 style="font-weight: 700;color: #38a7ac;"> Thank You</h2>
			<h4 style="color:#4c4c4d;margin-bottom:44px;line-height:25px;">You have successfully applied for the Mamacubatry Campaign.<br class="motherhood-br">We will notify you via email if you are shortlisted as a tester.</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group" style="text-align:center;">
						<a href="https://www.motherhood.com.my/" class="btn btn-default btn-pill btn-pill-color btn-action">
							<span>Keep Shopping</span>
						</a>
					</div>
				</div>
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
				else
				{
					$(formElem + ' .' + inputClass).addClass('is-invalid');
					$(formElem + ' .' + inputClass).focus();
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
							bgColorAddr();
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
		
		/*
		var checkbillingaddr = function(){
			var ischeck = $('body').find('.check-billing-addr').prop('checked');
			
			if(ischeck)
			{
				$('body').find('.billing-address').hide('fast');
			}
			else
			{
				console.log("diff address");
				$('body').find('.billing-address').css('overflow', 'initial');
				$('body').find('.billing-address').css('width','auto');
				$('body').find('.billing-address').show('fast');
			}
		}
		*/
		
		var bgColorAddr = function(){
			$('body').find('input[name="delivery_address"]').closest('.div-address-info').removeClass('div-address-info-checked');
			$('body').find('input[name="delivery_address"]:checked').closest('.div-address-info').addClass('div-address-info-checked');	
			
			/*
			$('body').find('input[name="billing_address"]').closest('.div-address-info').removeClass('div-address-info-checked');
			$('body').find('input[name="billing_address"]:checked').closest('.div-address-info').addClass('div-address-info-checked');
			*/
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
		
		var generalCheck_input = function(){
			var selectorFirstname 	  = $('body').find('.cust-firstname-input');
			var selectorLastname  	  = $('body').find('.cust-lastname-input');
			var selectorEmail 	  	  = $('body').find('.cust-email-input');
			var selectorPhone	  	  = $('body').find('.cust-phoneno-input');
			var selectorGender	  	  = $('body').find('.cust-gender-input');
			var selectorDob	  	  	  = $('body').find('.cust-about-dob');
			var selectorJob	  	  	  = $('body').find('.cust-occupation');
			var selectorRace	  	  = $('body').find('.cust-about-race-input');
			var selectorSelectRace	  = $('body').find('.race-input');
			var selectorSalary		  = $('body').find('.cust-about-salaryrange');
			var selectorMaritalStatus = $('body').find('.cust-marital-status');
			var selectorExpectNewborn = $('body').find('.expect-newborn');
			var selectorEdd			  = $('body').find('.cust-family-edd');
			var selectorNumChild	  = $('body').find('.num-child');
			
			if(selectorFirstname.val() == '')
			{
				selectorFirstname.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorFirstname.closest('form').attr('id');
				var formElem 		= '#' + formid;
				var arr_error_field = ['cust-firstname-input'];
			
				failedResponse(formElem, arr_error_field);
				selectorFirstname.closest('.form-group').find(errorSelector).html(icon + " First name required");
				selectorFirstname.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'First name required',
				});
				
				return false;
			}
			
			if(selectorLastname.val() == '')
			{
				selectorLastname.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorLastname.closest('form').attr('id');
				var formElem 		= '#' + formid;
				var arr_error_field = ['cust-lastname-input'];
			
				failedResponse(formElem, arr_error_field);
				selectorLastname.closest('.form-group').find(errorSelector).html(icon + " Last name required");
				selectorLastname.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Last name required',
				});
				
				return false;
			}
			
			if(selectorEmail.val() == '')
			{
				selectorEmail.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorEmail.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-email-input'];
			
				failedResponse(formElem, arr_error_field);
				selectorEmail.closest('.form-group').find(errorSelector).html(icon + " Email required");
				selectorEmail.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Email required',
				});
				
				return false;
			}
			
			if(selectorPhone.val() == '')
			{
				selectorPhone.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorPhone.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-phoneno-input'];
			
				failedResponse(formElem, arr_error_field);
				selectorPhone.closest('.form-group').find(errorSelector).html(icon + " Mobile no. required");
				selectorPhone.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Mobile no. required',
				});
				
				return false;
			}
			
			if(selectorDob.val() == '')
			{
				selectorDob.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorDob.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-about-dob'];
			
				failedResponse(formElem, arr_error_field);
				selectorDob.closest('.form-group').find(errorSelector).html(icon + " Date of birth required");
				selectorDob.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Date of birth required',
				});
				
				return false;
			}
			
			if(selectorJob.val() == '')
			{
				selectorJob.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorJob.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-occupation'];
			
				failedResponse(formElem, arr_error_field);
				selectorJob.closest('.form-group').find(errorSelector).html(icon + " Occupation required");
				selectorJob.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Occupation required',
				});
				
				return false;
			}
			
			if(selectorRace.val() == '')
			{
				selectorRace.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorRace.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['race-input'];
			
				failedResponse(formElem, arr_error_field);
				selectorRace.closest('.form-group').find(errorSelector).html(icon + " Race required");
				selectorRace.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Race required',
				});
				
				return false;
			}
			
			if(selectorSalary.val() == '')
			{
				selectorSalary.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorSalary.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-about-salaryrange'];
			
				failedResponse(formElem, arr_error_field);
				selectorSalary.closest('.form-group').find(errorSelector).html(icon + " Salary range required");
				selectorSalary.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Salary range required',
				});
				
				return false;
			}
			
			if(selectorMaritalStatus.val() == '')
			{
				selectorMaritalStatus.closest('form').find('.btn-edit').trigger('click');
				var formid 			= selectorMaritalStatus.closest('form').attr('id');
				var formElem	    = '#' + formid;
				var arr_error_field = ['cust-marital-status'];
			
				failedResponse(formElem, arr_error_field);
				selectorMaritalStatus.closest('.form-group').find(errorSelector).html(icon + " Marital status required");
				selectorMaritalStatus.closest('.panel-collapse').addClass('in');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Marital status required',
				});
				
				return false;
			}
			
			if(selectorMaritalStatus.val() != 'Not Married')
			{
				if(selectorExpectNewborn.val() == '')
				{
					selectorExpectNewborn.closest('form').find('.btn-edit').trigger('click');
					var formid 			= selectorExpectNewborn.closest('form').attr('id');
					var formElem	    = '#' + formid;
					var arr_error_field = ['cust-marital-status'];
				
					failedResponse(formElem, arr_error_field);
					selectorExpectNewborn.closest('.form-group').find(errorSelector).html(icon + " Please select option for expected newborn");
					selectorExpectNewborn.closest('.panel-collapse').addClass('in');
					
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'Please select option for expected newborn',
					});
					
					return false;
				}
				
				if(selectorExpectNewborn.val() != 'No')
				{
					if(selectorEdd.val() == '')
					{
						selectorEdd.closest('form').find('.btn-edit').trigger('click');
						var formid 			= selectorEdd.closest('form').attr('id');
						var formElem	    = '#' + formid;
						var arr_error_field = ['cust-marital-status'];
					
						failedResponse(formElem, arr_error_field);
						selectorEdd.closest('.form-group').find(errorSelector).html(icon + " Edd required");
						selectorEdd.closest('.panel-collapse').addClass('in');
						
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'Edd required',
						});
						
						return false;
					}
				}
				
				if(selectorNumChild.val() > 0)
				{
					numChild = selectorNumChild.val();
					for(var i = 1; i <= numChild; i++)
					{
						var dobchild = $('body').find('.child-dob' + i).val();
						if(dobchild == '')
						{
							$('.child-dob' + i).closest('form').find('.btn-edit').trigger('click');
							var formid 			= $('.child-dob' + i).closest('form').attr('id');
							var formElem	    = '#' + formid;
							var arr_error_field = ['child-dob' + i];
						
							failedResponse(formElem, arr_error_field);
							$('.child-dob' + i).closest('.form-group').find(errorSelector).html(icon + " Child dob" + i + " required");
							$('.child-dob' + i).closest('.panel-collapse').addClass('in');
							
							Swal.fire({
								icon: 'error',
								title: 'Error',
								text: 'Child dob' + i + ' required',
							});
							
							return false;
						}
					}
				}
			}
			
			return true;
		}
		
		var validateUserAccess = function(){
			var user_id   = $('body').find('.cust-id').val();
			var linkwrite = $('body').find('.link-rewrite').val();
			if(user_id <= 0)
			{
				Swal.fire({
					icon: 'info',
					title: "Login Required",
					text: "You must login before proceed",
				}).then(function() {
					window.location = "../../../login?back=mamacubatry/" + linkwrite;
				});
			}
		}
		
		$(document).ready(function() {
			validateUserAccess();
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
								/*Swal.fire({
									icon: 'success',
									title: 'Saved',
									text: 'All changes has been saved',
								});*/
								
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
										$('body').find('.btn-add-address').show('fast');
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
					$(this).closest('.panel-motherhood').find('.error-msg').html('');
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
				$(this).hide('fast');
			})
			
			$('body').on('click', '#btn-cancel-cust-address', function(){
				$('body').find('.billing-address').show('fast');
				$('body').find('.list-address').show('fast');
				$('body').find('.form-address').hide('fast');
				$('body').find('.btn-add-address').show('fast');
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
				enableAllSteps		  : false,
				enableKeyNavigation   : false,
				transitionEffectSpeed : 500,
				onStepChanging		  : function (event, currentIndex, newIndex) { 
					
					if(currentIndex === 0)
					{
						$('body').find('.input-flag-checking-step').val(true);
					}
					
					if(currentIndex == 1)
					{
						validation = generalCheck_input();
						if(!validation)
						{
							$('body').find('.input-flag-checking-step').val(false);
							return false;
						}
						else
						{
							$('body').find('.input-flag-checking-step').val(true);
						}
					}
					
					if(currentIndex == 2)
					{
						var deliveryAddr = $('body').find('input[name="delivery_address"]:checked').val();
						var sameDelivery = $('body').find('input[name="same_address_delivery"]:checked').val();
						var billingAddr  = $('body').find('input[name="billing_address"]:checked').val();
						
						if(deliveryAddr == '' || deliveryAddr == undefined)
						{
							Swal.fire({
								icon: 'error',
								title: 'Delivery address',
								text: "Please select delivery address",
							});
							
							$('body').find('.input-flag-checking-step').val(false);
							return false;
						}
						
						/*
						if(sameDelivery == '' || sameDelivery == undefined)
						{
							if(billingAddr == '' || billingAddr == undefined)
							{
								Swal.fire({
									icon: 'error',
									title: 'Billing address',
									text: "Please select billing address",
								});
								
								$('body').find('.input-flag-checking-step').val(false);
								return false;
							}
							else
							{
								$('body').find('.input-flag-checking-step').val(true);
						
								return true;
							}
						}
						*/
						
						$('body').find('.input-flag-checking-step').val(true);
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
					var deliveryAddr  	  = $('body').find('input[name="delivery_address"]:checked').val();
					var sameDelivery 	  = $('body').find('input[name="same_address_delivery"]:checked').val();
					var billingAddr  	  = $('body').find('input[name="billing_address"]:checked').val();
					var campaignId   	  = $('body').find('.tester-id').val();
					var tester_product_id = $('body').find('.tester-product-id').val();
					var tncRead			  = $('body').find('.check-tnc').is(":checked");
					
					console.log(tncRead);
					if(tncRead != true)
					{
						Swal.fire({
							icon: 'error',
							title: 'Terms & Conditions',
							text: "Please tick the box to confirm that you agree to the Terms & Conditions of this campaign.",
						});
						
						return false;
					}
					
					if(tester_product_id <= 0)
					{
						Swal.fire({
							icon: 'error',
							title: 'Product id invalid',
							text: "Please contact admin",
						});
						
						return false;
					}
					
					if(campaignId <= 0)
					{
						Swal.fire({
							icon: 'error',
							title: 'Campaign id invalid',
							text: "Please contact admin",
						});
						
						return false;
					}
					
					if(deliveryAddr == '' || deliveryAddr == undefined)
					{
						Swal.fire({
							icon: 'error',
							title: 'Delivery address',
							text: "Please select delivery address",
						});
						
						return false;
					}
					
					/*if(sameDelivery == '' || sameDelivery == undefined)
					{
						if(billingAddr == '' || billingAddr == undefined)
						{
							Swal.fire({
								icon: 'error',
								title: 'Billing address',
								text: "Please select billing address",
							});
						}
						
						return false;
					}*/
					
					$('body').find('#form-tester-campaign .delivery-id').val(deliveryAddr);
					$('body').find('#form-tester-campaign .billing-id').val(billingAddr);
					$('body').find('#form-tester-campaign .same-delivery-id').val(sameDelivery);
					var dataform = $('#form-tester-campaign').serialize();
					
					$.ajax({
						url		 : '../modules/enlineamixmod/enlineamixmod-tester-campaign-ajaxpost.php', 
						data	 : dataform,
						dataType :'json',
						method 	 : 'post',
						success	 : function(result){
							if(result.status == true)
							{
								Swal.fire({
									icon: 'success',
									title: 'Thank You',
									text: result.msg,
								}).then(function() {
									window.location = "https://www.motherhood.com.my/my-product-review?productreview=1";
								});

								$('body').find('.success-application').css('display', 'block');
								$('body').find('.form-application').css('display', 'none');
							}
							else
							{
								
								Swal.fire({
									icon: 'warning',
									title: 'Action Failed',
									text: result.msg,
								});
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
					
					
					
				},
				labels: {
					finish: "Submit",
					next: "Next",
					previous: "Back"
				}
			});
			
			// Custom Steps Jquery Steps
			$('.wizard > .steps li a').click(function(){
				var highlight = $('body').find('.input-flag-checking-step').val();
				
				if(highlight == 'true'){
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
			
			/** 
			*need to initilize input mask js after jquery step 
			* if anyting js behaviour not work as expected need to declare after jquery step
			**/
			//checkbillingaddr();
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
			
			$('.panel-collapse').on('shown.bs.collapse', function() {
				$(this).closest('.panel').find('.accordian-heading-motherhood').addClass('accordian-heading-motherhood-toggle');
			  });

			$('.panel-collapse').on('hidden.bs.collapse', function() {
				$(this).closest('.panel').find('.accordian-heading-motherhood').removeClass('accordian-heading-motherhood-toggle');
			});
			
			bgColorAddr();
			$('body').on('change', '.opt-delivery-addr, .opt-billing-addr', function(){
				$('body').find('.div-delivery-addr span').removeClass('checked');
				$(this).closest('.div-delivery-addr span').addClass('checked');
				
				bgColorAddr();
			});
		});
	</script>
{/literal}
<!-- END : MODULE mamacubatryproducts -->