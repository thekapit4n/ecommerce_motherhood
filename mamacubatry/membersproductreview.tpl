<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script type="text/javascript">
var productcomments_controller_url = '{$productcomments_controller_url}';
var confirm_report_message = '{l s='Are you sure that you want to report this review?' mod='productcomments' js=1}';
var secure_key = '{$secure_key}';
var productcomments_url_rewrite = '{$productcomments_url_rewriting_activated}';
var productcomment_added = '{l s='Your review has been added!' mod='productcomments' js=1}';
var productcomment_added_moderation = '{l s='Your review has been submitted and will be available once approved by a moderator.' mod='productcomments' js=1}';
var productcomment_title = '{l s='New review' mod='productcomments' js=1}';
var productcomment_ok = '{l s='OK' mod='productcomments' js=1}';
var moderation_active = {$moderation_active};
var minlengthofcomment = 100;

$('#content').keyup(function() {

  var length = $(this).val().length;
  var length = minlengthofcomment-length;
  $('#wordscomment').text(length+' characters left to qualify for review reward points');
});

function setProductReview(_this){
	var productName    = $(_this).closest('.row-item').find('.product-name').val();
	var productID      = $(_this).closest('.row-item').find('.product-id').val();
	var productImgSrc  = $(_this).closest('.row-item').find('.product-img-src').val();
	var productImgAlt  = $(_this).closest('.row-item').find('.product-img-alt').val();
	var productDesc    = $(_this).closest('.row-item').find('.product-desc').val();

	
	$("#newcomment_name").text(productName);
	$("#newcomment_img").attr("src",productImgSrc);
	$("#newcomment_img").attr("alt",productImgAlt);
	$("#id_product_comment_send").val(productID);
	$("#content").val("");
	$("#comment_title").val("");
}

function setProductFullDesc(clickElement){
	var name=clickElement.innerText;
	$("#fullproduct_name").text(name);

	var desc=clickElement.nextSibling.nextSibling.nextSibling.value;
	document.getElementById("fullproduct_desc").innerHTML=desc;
	
	var imgsrc=clickElement.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.firstElementChild.src;
	$("#fullproduct_img").attr("src",imgsrc);
	$("#fullproduct_img").attr("alt",name);
	
}

var myAddress='{$currentAddressId}';
</script>
<style>
	.nav-tabs {
		border-bottom: 5px solid #f6f6f6;
	}
	
	ul.nav-tabs li a:hover{
	  border-color: transparent;
	  background-color: transparent;
	  margin-bottom: -3px;
	  border-bottom: 5px solid #30a7ad;
	  
	}

	ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover, ul.nav-tabs li.active a:focus, ul.nav-tabs li.active a:active{
	  border-color: transparent;
	  margin-bottom: -3px;
	  border-bottom: 5px solid #30a7ad;
	}
	
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
		color: #30a7ad;
		font-weight:700;
	}
	
	.tab-header{
		color: #555454;
		font-weight:700;
	}
	
	.btn-pill, .btn-pill-color:hover, .btn-pill-color:focus{
		border-radius:25px;
		outline:unset;
	}

	.btn-pill-color, btn-pill-color:hover, .btn-pill-color:focus{
		background-color: #f3866f !important;
		color: white;
		border-color: #f3866f !important;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 7px;
		padding-bottom: 7px;
	}

	.btn-pill-color:hover, .btn-pill-color:focus{
		background-color: #ec3a47 !important;
		color: white !important;
		border-color: #ec3a47 !important;
	}
	
	.btn-approved-color, .btn-approved-color:hover, .btn-approved-color:focus{
		background-color: #36a7ac !important;
		color: white;
		border-color: #36a7ac !important;
	}
	
	.btn-complete-color, .btn-complete-color:hover, .btn-complete-color:focus{
		background-color: #f5a700 !important;
		color: white;
		border-color: #f5a700 !important;
	}
	
	.btn-pending-color, .btn-pending-color:hover, .btn-pending-color:focus{
		background-color: #d6d4d4 !important;
		color: white;
		border-color: #d6d4d4 !important;
	}
	
	.btn-apply-color, .btn-apply-color:hover, .btn-apply-color:focus{
		background-color: #ea3d4c !important;
		color: white;
		border-color: #ea3d4c !important;
	}
	
	.star-align{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
	.font-weight-7x{
		font-weight:700;
	}
	
	/* css for other than mobile view */	
	@media only screen and (max-width: 600px) {
		
		.btn-pill-color, btn-pill-color:hover, btn-pill-color:focus{
			padding-left: 80px;
			padding-right: 80px;
			padding-top: 13px;
			padding-bottom: 13px;
			font-size: 16px;
		}
		
		.br-review-product{
			display:none;
		}
		
		.label-review-product{
			min-width:102px;
		}
	}
</style>

<!-- MODULE membersproductreview -->

<div id="rewards_account" class="rewards">
	<h1 class="page-heading">{l s='My Product Reviews' mod='membersproductreview'}</h1>
<div class="table-responsive">

{* $productreviewheader->content[1] *}
<div class="row">
	<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/main-banner-mct.png" class="img-responsive">
</div>

{if $testerlist}
<br id="cubatry">
<br>
{$testerCMS->content[1]}
<br>
<!-- Fancybox -->
<div style="display: none;">
	<div id="new_information_form">
		<form id="new_information_form2" action="/modules/enlineamixmod/enlineamixmod-ajax-customer-additionalinfo.php">
			<h2 class="page-subheading">
				Complete Your Profile
			</h2>
			<div class="row">
				<div class="new_comment_form_content col-xs-12 col-sm-12">
					<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
						<ul></ul>
					</div>
						
                <!-- Additional Info For Tester-->
                        <input type="hidden" name="additionalInfo" id="additionalInfo" value="0" />
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="childUnder12">
                                    {l s='Do you have any children under 12 years old?'}
                                </label><br>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="checkbox" name="cu12[]" class="cu12" value="Girl/s" 
                                {if $additionalInfo.children_under_12|strstr:"Girl/s"}checked="checked"{/if}
                                />Girl/s</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="checkbox" name="cu12[]" class="cu12" value="Boy/s" 
                                {if $additionalInfo.children_under_12|strstr:"Boy/s"}checked="checked"{/if}/>Boy/s</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="checkbox" name="cu12[]" class="cu12" value="No Children" 
                                {if $additionalInfo.children_under_12|strstr:"No Children"}checked="checked"{/if}/>No Children</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="checkbox" name="cu12[]" class="cu12" value="Pregnant" 
                                {if $additionalInfo.children_under_12|strstr:"Pregnant"}checked="checked"{/if}/>Pregnant</label> </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="annualIncome">
                                    {l s='Which best describes your household annual income range?'}
                                </label><br>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="radio" name="annualIncome" class="annualIncome" value="24,000 - 36,000" 
                                {if $additionalInfo.annual_income_range|strstr:"24,000 - 36,000"}checked="checked"{/if}
                                />24,000 - 36,000</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="radio" name="annualIncome" class="annualIncome" value="36,000 - 60,000"
                                {if $additionalInfo.annual_income_range|strstr:"36,000 - 60,000"}checked="checked"{/if}
                                 />36,000 - 60,000</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="radio" name="annualIncome" class="annualIncome" value=" 60,000 - 120,000" 
                                {if $additionalInfo.annual_income_range|strstr:"60,000 - 120,000"}checked="checked"{/if}
                                /> 60,000 - 120,000</label></div>
                                <div class="radio-inline">
                                <label style="font-weight:lighter;"><input type="radio" name="annualIncome" class="annualIncome" value="120,000 and above" 
                                 {if $additionalInfo.annual_income_range|strstr:"120,000 and above"}checked="checked"{/if}
                                />120,000 and above</label> </div>                 
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="childrenBorn">
                                    {l s='When were your children born?'}
                                </label><br>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2021" 
                                {if $additionalInfo.children_born_year|strstr:"2021"}checked="checked"{/if}/>2021</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2020" 
                                {if $additionalInfo.children_born_year|strstr:"2020"}checked="checked"{/if}/>2020</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2019" 
                                {if $additionalInfo.children_born_year|strstr:"2019"}checked="checked"{/if}/>2019</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2018" 
                                {if $additionalInfo.children_born_year|strstr:"2018"}checked="checked"{/if}/>2018</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2017" 
                                {if $additionalInfo.children_born_year|strstr:"2017"}checked="checked"{/if}/>2017</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2016" 
                                {if $additionalInfo.children_born_year|strstr:"2016"}checked="checked"{/if}/>2016</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2015" 
                                {if $additionalInfo.children_born_year|strstr:"2015"}checked="checked"{/if}/>2015</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2014" 
                                {if $additionalInfo.children_born_year|strstr:"2014"}checked="checked"{/if}/>2014</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2013" 
                                {if $additionalInfo.children_born_year|strstr:"2013"}checked="checked"{/if}/>2013</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2012" 
                                {if $additionalInfo.children_born_year|strstr:"2012"}checked="checked"{/if}/>2012</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2011" 
                                {if $additionalInfo.children_born_year|strstr:"2011"}checked="checked"{/if}/>2011</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2010" 
                                {if $additionalInfo.children_born_year|strstr:"62010"}checked="checked"{/if}/>2010</label></div>
                                <div class="radio-inline"><label style="font-weight:lighter;"><input type="checkbox" name="children_born_year[]" class="children_born_year" value="2009" 
                                {if $additionalInfo.children_born_year|strstr:"2009"}checked="checked"{/if}/>2009</label></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="occupation">
                                    {l s='Your occupation?'}
                                </label>
                                <input class="form-control" type="text" id="occuption" name="occuption" value="{$additionalInfo.occupation}" />
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="edd">
                                    {l s='If pregnant, please key in EDD (Estimate Due Date)'}
                                </label>
                                <div class="row">
                                    <div class="col-xs-4 col-md-4">
                                        <select name="eddday" id="eddday" class="form-control" day="{$additionalInfo.edd|substr:-2}">
                                            <option value="">-</option>
                                            {foreach from=$days item=v}
                                                <option value="{$v}" {if ($additionalInfo.edd|substr:-2 == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>{/foreach}
                                        </select></div>
                                    <div class="col-xs-4 col-md-4" style="max-width:110px;">
                                        <select id="eddmonth" name="eddmonth" class="form-control" style="width:100px;max-width:100px;" month="{$additionalInfo.edd|substr:5:2}">
                                            <option value="">-</option>
                                            {foreach from=$months key=k item=v}
                                                <option value="{$k}" {if ($additionalInfo.edd|substr:5:6 == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>{/foreach}
                                        </select></div>
                                    <div class="col-xs-4 col-md-4" style="width:100%;">
                                        <select id="eddyear" name="eddyear" class="form-control" style="width:100%;" year="{$additionalInfo.edd|substr:0:4}">
                                            <option value="">-</option>
                                      
											{for $v=2020 to 2023}
                                                <option value="{$v}" {if ($additionalInfo.edd|substr:0:4 == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
											{/for}
										
                                        </select></div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="instaURL">
                                    {l s='Your instagram url'}
                                </label>
                                <input class="form-control" type="text" id="insta_url" name="insta_url" value="{$additionalInfo.insta_url}" />
                            </div>
                        </div>
				
				
						
						
					<div id="new_comment_form_footer">
						<input id="tester_id" name="tester_id" type="hidden" value='2' />
						<p class="fl required"><sup>*</sup> Required fields</p>
						<p class="fr">
							<button type="submit" class="btn button button-small">
								<span>Send</span>
							</button>&nbsp;
							or&nbsp;
							<a href="#" onclick="$.fancybox.close();">
								Cancel
							</a>
						</p>
						<div class="clearfix"></div>
					</div> <!-- #new_comment_form_footer -->
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->

<!-- Fancybox -->
<div style="display: none;width:90%">
	<div id="address_form">
		<form id="address_form2" name="address_form2"  action="/address" method="POST">
			<h2 class="page-subheading">
				Complete Your Address
			</h2>
						
											

					<div class="box edit-address">
					  <h1 class="page-subheading">Your addresses</h1>
					  <p class="info-title">     To add a new address, please fill out the form below. You need an address before checkout.
						 </p>
					  

					  <p class="required"><sup class="red">*</sup>Required field</p>
					  <div class="row">
						<form action="https://www.motherhood.com.my/address" method="post" class="std" id="add_address">
						  <!--h3 class="page-subheading">Your address</h3--> 
																   
										 <div class="required edit-address-group">
							  <label for="firstname">First name <sup class="red">*</sup></label>
							  <input class="is_required validate form-control" data-validate="isName" type="text" name="firstname" id="firstname" value="" required/>
							</div>
																   
											   <div class="required edit-address-group">
							  <label for="lastname">Last name <sup class="red">*</sup></label>
							  <input class="is_required validate form-control" data-validate="isName" type="text" id="lastname" name="lastname" value="" required/>
							</div>
																   
													 <div class="required edit-address-group">
							  <label for="address1">Address (Line 1) <sup class="red">*</sup></label>
							  <input class="is_required validate form-control" data-validate="isAddress" type="text" id="address1" name="address1" value="" required/>
							</div>	   
														   <div class="required edit-address-group">
							  <label for="address2">Address (Line 2)</label>
							  <input class="validate form-control" data-validate="isAddress" type="text" id="address2" name="address2" value="" required/>
							</div>
										 <div class="required postcode edit-address-group">
							  <label for="postcode">Zip/Postal Code <sup class="red">*</sup></label>
							  <input class="is_required validate form-control" data-validate="isPostCode" type="text" id="postcode" name="postcode" value="" required/>
							</div>
										 <div class="required edit-address-group">
							  <label for="city">City <sup class="red">*</sup></label>
							  <input class="is_required validate form-control" data-validate="isCityName" type="text" name="city" id="city" value="" maxlength="64" required/>
						   </div>
														   <div class="required id_state edit-address-group dd-control">
							  <label for="id_state">State <sup>*</sup></label>
							  <select name="id_state" id="id_state" class="form-control">
								<option value="313">Wilayah Persekutuan Kuala Lumpur</option>
								<option value="314">Wilayah Persekutuan Labuan</option>
								<option value="315">Putrajaya</option>
								<option value="316">Johor</option>
								<option value="317">Kedah</option>
								<option value="318">Kelantan</option>
								<option value="319">Melaka</option>
								<option value="320">Negeri Sembilan</option>
								<option value="321">Pahang</option>
								<option value="322">Perak</option>
								<option value="323">Perlis</option>
								<option value="324">Pulau Pinang</option>
								<option value="325">Sabah</option>
								<option value="326">Sarawak</option>
								<option value="327">Selangor</option>
								<option value="328">Terengganu</option>
								<option value="329">Langkawi</option>

							  </select>
							</div>
						   
											   <div class="required edit-address-group dd-control">
							  <label for="id_country">Country <sup class="red">*</sup></label>
							  <select id="id_country" class="form-control" name="id_country">
								<option value="136">Malaysia</option>
							  </select>
							</div>
																 <div class="edit-address-group phone-number">
							  <label for="phone">Home phone (eg. 60388888888) <sup class="red">**</sup>        </label>
							  <input class="is_required validate form-control" data-validate="isPhoneNumber" type="tel" id="phone" name="phone" value=""/>

							</div>
																	   <div class="required edit-address-group">
							  <label for="phone_mobile">Mobile phone (eg. 60128888888) <sup class="red">**</sup></label>
							  <input class="validate form-control" data-validate="isPhoneNumber" type="tel" id="phone_mobile" name="phone_mobile" value="" />
							</div>
											
								   <div class="required edit-address-group" id="adress_alias">
							  <label for="alias">Please assign an address title for future reference. <sup class="red">*</sup></label>
							  <input type="text" id="alias" class="is_required validate form-control" data-validate="isGenericName" name="alias" value="My address" required/>
							</div>

							 <div class="edit-address-group" id="Additional_information">
							  <label for="other">Additional information</label>
							  <textarea class="validate form-control" data-validate="isMessage" id="other" name="other" cols="26" rows="3"></textarea>
							</div>
							
							
        
                     <div class="required dni edit-address-group" style='visibility:hidden;display:none'>
						<label for="dni">Identification number <sup class="red">*</sup></label>
						<input class="is_required form-control" data-validate="isDniLite" type="text" name="dni" id="dni" value=""/>
						<span class="form_info">DNI / NIF / NIE</span> </div>
		
									   <div class="clearfix"></div>
								<div class="col-md-12" style="margin-top:15px;">
							<p class="submit2">           <input type="hidden" name="id_address" value="{$currentAddressId}"/>
																	  <input type="hidden" name="select_address" value="0"/>
																	  <input type="hidden" name="ajax" value="1"/>
																	  <input type="hidden" name="submitAddress" value="1"/>
										<input type="hidden" name="token" value="{$ajaxToken}"/>
										
							  <button type="submit" name="submitAddress" id="submitAddress" class="btn btn-default button button-medium"> <span> Save <i class="icon-chevron-right right"></i> </span> </button>
							</p>
							 <small class="required" style="margin:5px 0; color:#F00;">** You must register at least one phone number.</small> 
						  </div>
						</form>
					  </div>
					</div>



		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->





<!-- Fancybox -->
<div style="display: none;">
	<div id="large_product_desc">
		<form id="large_product_desc" action="#">
			<h2 class="page-subheading">
				Product Description
			</h2>
			<div class="row" style='max-width:100%'>
									<div class="product clearfix  col-xs-12 col-sm-12">
						<img id='fullproduct_img' src="" height="125" width="125" alt="" />
						<div class="product_desc">
							<p class="product_name">
								<strong id='fullproduct_name'></strong>
							</p><style>#fullproduct_desc img{literal}{ max-width:100% }{/literal}</style>
							<div id='fullproduct_desc' class="fullproduct_desc">
                            </div>
						</div>
					</div>
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->


{/if}
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="{if $productReview != true} active {/if}"><a data-toggle="tab" class="tab-header" href="#myreview">My Reviews</a></li>
			<li class="{if $productReview == true} active {/if}"><a data-toggle="tab" class="tab-header" href="#mycampaign">Mamacubatry list</a></li>
		</ul>
		<div class="tab-content">
			<!--  Review tab--->
			<div id="myreview" class="tab-pane fade {if $productReview != true} active in {/if}">
				{foreach from=$productlist item=product name=myLoop}
					<div class="row row-item" style="border: 1px solid #b4b3b463; margin-top: 10px; margin-bottom: 10px;">
						<div class="col-md-2">
							<div class="row" style="padding:20px;text-align:center">
								<img src="{$product.productcomment_cover_image}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$product.name|escape:html:'UTF-8'}" />
							</div>
						</div>
						<div class="col-md-7" style="padding-bottom:27px; padding-top:27px;">
							<div style="padding-left:20px; padding-right:20px;">
								<div class="row">
									<div class="col-md-12">
										<h4>
											<b>
												{$product.name|escape:'strval'}
											</b>
										</h4>
									</div>
								</div>
								<div class="row" style="style="color:#38a7ac">
									<div class="col-md-4 col-xs-12">
										<label class="label-review-product">
											<b>{l s='Reference' mod='membersproductreview'}</b>
										</label>
										<br class="br-review-product">
										<b>
											{$product.prodreference|escape:'strval'}
										</b>
									</div>
									<div class="col-md-4 col-xs-12">
										<label class="label-review-product">
											<b>
												{l s='Order Reference' mod='membersproductreview'}
											</b>
										</label>
										<br class="br-review-product">
										<b>
											{$product.reference|escape:'strval'}
										</b>
									</div>
									<div class="col-md-4 col-xs-12">
										<label class="label-review-product">
											<b>
												{l s='Order Date' mod='membersproductreview'}
											</b>
										</label>
										<br class="br-review-product">
										<b>
											{dateFormat date=$product.date_add full=1}
										</b>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="padding-top: 30px;padding-bottom: 30px;text-align: center;">
							{if ($product.havegrade=='missing')}
								<div id="product_comments_block_tab">
									<p class="align_center">
										<a class="btn btn-default btn-pill btn-pill-color open-comment-form btn-writereview" href="#new_comment_form"
											data-productname="{$product.name|escape:'strval'}" 
											data-productid="{$product.id_product}"
											data-productimgsrc="{$product.productcomment_cover_image}"
											data-productimgalt="{$product.name|escape:html:'UTF-8'}"
											data-productdesc="{$product.description_short|escape:html:'UTF-8'}"
										>
										Write Review
										</a>
									</p>
								</div>
							{else}
								<div class="row">
									<div class="col-sm-12">
										<span style="font-size:17px" class="font-weight-7x"><font style="font-size:20px;color:#555454">{$product.grade|escape:'html':'UTF-8'}</font>/5</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="clearfix star-align"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" >
											{section name="i" start=0 loop=5 step=1}
												{if $product.grade le $smarty.section.i.index}
													<div class="star"></div>
												{else}
													<div class="star star_on"></div>
												{/if}
											{/section}
											<meta itemprop="worstRating" content = "0" />
											<meta itemprop="ratingValue" content = "{$product.grade|escape:'html':'UTF-8'}" />
											<meta itemprop="bestRating" content = "5" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<!--<font style="color:#555454"><i class="far fa-eye"></i>&nbsp;See review</font>-->
									</div>
								</div>
							{/if}
						</div>
					</div>
				{/foreach}
			</div>
			<!--  tester tab--->
			<div id="mycampaign" class="tab-pane fade {if $productReview == true} active in {/if}">
				{foreach from=$testerlist item=product name=myLoop}
					<div class="row row-item" style="border: 1px solid #b4b3b463; margin-top: 10px; margin-bottom: 10px;">
						<div class="col-md-2">
							<div class="row" style="padding:20px;text-align:center">
								<img src="{$product.tester_cover_image}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$product.name|escape:html:'UTF-8'}" />
							</div>
						</div>
						<div class="col-md-8" style="padding-bottom:27px; padding-top:27px;">
							<div style="padding-left:20px; padding-right:20px;">
								<div class="row">
									<h4  style="margin-bottom:-10px;"><b>
									<a class="open-comment-form" href="#large_product_desc" onclick='setProductFullDesc(this)' style="color:#38a7ac">
										<span >{$product.name|escape:'strval'} <span>
									</a></b>
									</h4>
									<textarea style='visibility:hidden;display:none'>{$product.description}</textarea>
									<input style='visibility:hidden;display:none' value='{$product.id_product}'>				
									{if $product.description_short}<br>
										<div style='color:#555454;font-weight:300;'class="text-left">{$product.description_short}</div></td>
									{/if}
								</div>
								<div class="row" style="style="color:#38a7ac">
									<h4><b>{l s='Campaign Start Date' mod='membersproductreview'}</b></h4>
									<b>{$product.tester_start_date|date_format:"%d-%m-%Y"}</b>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding-top: 30px;padding-bottom: 30px;text-align: center;">
							<div class="row">
								{if $product.approved}
										{if $product.id_product == 45483 || $product.id_product == 45491} 
											{* 
												this is product id for clearblue campaing, this campaign auto approve customer only need submit review - 15/3/2021
												flow set by : Hana & Petrina
												develop : haiqal
												supervise by: leong
											*}
											
											{if ($product.havegrade=='missing')}
												<a type="button" class="btn btn-default btn-pill btn-pill-color open-comment-form btn-writereview" href="#new_comment_form" 
													data-productname="{$product.name|escape:'strval'}" 
													data-productid="{$product.id_product}"
													data-productimgsrc="{$product.tester_cover_image}"
													data-productimgalt="{$product.name|escape:html:'UTF-8'}"
													data-productdesc="{$product.description_short|escape:html:'UTF-8'}"
												>
													Write Review
												</a>
												<textarea style='visibility:hidden;display:none'>{$product.description}</textarea><input style='visibility:hidden;display:none' value='{$product.id_product}'>
											
											{else}
												<div class="row">
													<div class="col-sm-12">
														<span style="font-size:17px" class="font-weight-7x"><font style="font-size:20px;color:#555454">{$product.grade|escape:'html':'UTF-8'}</font>/5</span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="clearfix star-align"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" >
															{section name="i" start=0 loop=5 step=1}
																{if $product.grade le $smarty.section.i.index}
																	<div class="star"></div>
																{else}
																	<div class="star star_on"></div>
																{/if}
															{/section}
															<meta itemprop="worstRating" content = "0" />
															<meta itemprop="ratingValue" content = "{$product.grade|escape:'html':'UTF-8'}" />
															<meta itemprop="bestRating" content = "5" />
														</div>
													</div>
												</div>
											{/if}
										{else}
											<button type="button" class="btn btn-default btn-pill btn-pill-color btn-approved-color">Approved</button>
										{/if}
								{else}
									{if $product.applied}
										<button type="button" class="btn btn-default btn-pill btn-pill-color btn-pending-color">Pending</button>
									{else}
										<div>
											<p class="align_center">
											{if $additionalInfo.children_under_12}
												{if $currentAddressId > 0}
													<a class="btn btn-default btn-pill btn-pill-color btn-apply-color" href="https://www.motherhood.com.my/mamacubatry/{$product.link_rewrite}">
														<span>Apply Now</span>
													</a>
												{else}
													<a class="btn btn-default btn-pill btn-pill-color btn-complete-color open-comment-form" href="https://www.motherhood.com.my/mamacubatry/{$product.link_rewrite}">
														<span>Complete Address</span>
													</a>
												{/if}
											{else} 
												{if !$logged}
													<a class="btn btn-default btn-pill btn-pill-color btn-apply-color" href='/login?back=my-product-review'>
														<span>Login/signup</span>
													</a>
												{else}
													<a id="new_comment_tab_btn" class="btn btn-default btn-pill btn-pill-color btn-complete-color open-comment-form" href="https://www.motherhood.com.my/mamacubatry/{$product.link_rewrite}">
														<span>Complete Form</span>
													</a>
												{/if}
											{/if}
											</p>
										</div>
									{/if}
								{/if}
							</div>
						</div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
		
	<!-- Fancybox -->
	<div style="display: none;width:">
		<div id="new_comment_form">
			<form id="id_new_comment_form" action="#">
				<h2 class="page-subheading">
					Write a review
				</h2>
				
				<div class="col-xs-12 col-sm-12" style='background:#f87801;color:white;border-radius: 5px;'>
					Share a quality review with at least 100 characters to earn 100 Motherhood points. Include a picture in the review to earn another 100 Motherhood Points. Note: Motherhood may remove the points awarded if your review is found to contain irrelevant content
				</div>
				<hr>
				
				<div class="row" style='max-width:100%'>
						<div class="product clearfix  col-xs-12 col-sm-6">
							<img id='newcomment_img' src="" height="125" width="125" alt="" />
							<div class="product_desc">
								<p class="product_name">
									<strong id='newcomment_name'></strong>
								</p><style>#newcomment_desc img{literal}{ max-width:100% }{/literal}</style>
								<div class='newcomment_desc' id='newcomment_desc' style='max-width:100%'>
								</div>
							</div>
						</div>
									<div class="new_comment_form_content col-xs-12 col-sm-6">
						<h2>Write a review</h2>
						<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
							<ul></ul>
						</div>
						<ul id="criterions_list">
							<li>
								<label>Quality:</label>
								<div class="star_content">
									<input class="star" type="radio" name="criterion[1]" value="1" />
									<input class="star" type="radio" name="criterion[1]" value="2" />
									<input class="star" type="radio" name="criterion[1]" value="3" />
									<input class="star" type="radio" name="criterion[1]" value="4" />
									<input class="star" type="radio" name="criterion[1]" value="5" checked=true/>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
						<label for="comment_title">
							Title: <sup class="required">*</sup>
						</label>
						<input id="comment_title" name="title" type="text" value=""/>
						<label for="content">
							Comment: <sup class="required">*</sup>
						</label>
						<textarea id="content" name="content"></textarea>
						<label id='wordscomment'>100 characters left to qualify for review reward points</label>
						<input type="file" id="img_url" name="img_url" />

						<div id="new_comment_form_footer">
							<input id="id_product_comment_send" name="id_product" type="hidden" value='2' />
							<p class="fl required"><sup>*</sup> Required fields</p>
							<p class="fr">
								<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small">
									<span>Submit</span>
								</button>&nbsp;
								or&nbsp;
								<a class="closefb" href="#">
									Cancel
								</a>
							</p>
							<div class="clearfix"></div>
						</div> <!-- #new_comment_form_footer -->
					</div>
				</div>
			</form><!-- /end new_comment_form_content -->
		</div>
	</div>
	<!-- End fancybox -->
	
	
	{if $productlist}

	{/if}


{if $customerid>0}{else}
	Please <a href="../../../login?back=my-product-review"> Login / Signup</a> to view more...
{/if}


</div>

<script type="text/javascript">

function setProductReview(clickElement){
	
	
}

$(function(){
	
	$('body').on('click', '.btn-writereview', function(){
		
		var _this = $(this);
		var productName    = $(this).attr('data-productname')
		var productID      = $(this).attr('data-productid')
		var productImgSrc  = $(this).attr('data-productimgsrc')
		var productImgAlt  = $(this).attr('data-productimgalt')
		var productDesc    = $(this).attr('data-productdesc')
		
		console.log(productID);
		console.log(productName);
		//console.log(productImgSrc);
		//console.log(productImgAlt);
		//console.log(productDesc);
		$("#newcomment_name").text(productName);
		$("#newcomment_img").attr("src",productImgSrc);
		$("#newcomment_img").attr("alt",productImgAlt);
		$("#id_product_comment_send").val(productID);
		$("#content").val("");
		$("#comment_title").val("");
	})
});

$('#content').keyup(function() {

  var length = $(this).val().length;
  var length = minlengthofcomment-length;
  $('#wordscomment').text(length+' characters left to qualify for review reward points');
});


function applyReview(tester_id){

	$.ajax( "/modules/enlineamixmod/enlineamixmod-ajax-tester-campaign.php?tester_id="+tester_id)
	  .done(function(data) {
		alert( data );
		location.reload(); 
	  })
	  .fail(function(msg) {
		alert( msg.content );
	  });
}

$("#new_information_form2").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
		   async:false,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
				if (data=='OK'){
					if (myAddress>0)
						applyReview(document.getElementById("tester_id").value);
					else{
						$.fancybox.close();
						$.fancybox({
							href: '#address_form'
						});
					
					}
					return false;
				}else{
					alert(data);
					
					return false;
					}
           }
         });


});


$("#address_form2").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
	
	if ($("#address_form2")[0].checkValidity()){
		
		if (!$('#address1').val()){
			alert('Please fill in address1');
			return false;
		}
		if (!$('#address2').val()){
			alert('Please fill in address2');
			return false;
		}
		if (!$('#city').val()){
			alert('Please fill in city');
			return false;
		}
				var form = $(this);
				var url = form.attr('action');

				$.ajax({
					   type: "POST",
					   url: url,
					   async:false,
					   data: form.serialize(), // serializes the form's elements.
					   success: function(data)
					   {
								var obj = jQuery.parseJSON( data);
								
								if (obj.hasError==true){
									msg = JSON.stringify(obj.errors);
									
									msgStr='';								
									for(var i in obj.errors){
										msgStr=msgStr+ obj.errors[i]+'\n';
									}

									alert(msgStr.replace(/<[^>]*>?/gm, ''));
								}else{
									applyReview(document.getElementById("tester_id").value);
								}

					   }
					 });
	}else{
	 $("#address_form2")[0].reportValidity()
	}
	return false;
});


</script>

<!-- END : MODULE membersproductreview -->