<style>
.WyethBrandPageCatBtn{
	cursor: context-menu;
	background:#2ea7ad;
	border-radius:20px;
	padding:10px 20px;
	color:white;
	font-weight:bold;
	display: inline-block;
	white-space: nowrap;
	font-size:18px;
}
.visuallyhidden{
	position: absolute; 
	overflow: hidden; 
	clip: rect(0 0 0 0); 
	height: 1px; width: 1px; 
	margin: -1px; padding: 0; border: 0; 
}
.plantBox{
    background: #e8f5fd;
    padding: 20px;
    border-radius: 20px;
    margin: 10px;
	text-align:center;
	min-height:430px;
}
.plantBox:hover{
	background: #f9ced9;
}
.plantDescription{
	font-weight: bold;
    font-family: GothamRounded-medium;
    color: #017691;
    font-size: 16px;
    line-height: 1.2;
}
.plantTitle{
	font-weight: bold;
    font-family: GothamRounded-medium;
    color: #017691;
    font-size: 25px;
    line-height: 1.2;
	min-height:60px;
}
@media (max-width: 767px) {
	.plantBox{
		padding: 20px;
		min-height:440px;
	}
	.plantDescription{
		font-size: 15px;
	}
	.WyethBrandPageCatBtn{
	cursor: context-menu;
	background:#2ea7ad;
	border-radius:20px;
	padding:10px 20px;
	color:white;
	font-weight:bold;
	display: inline-block;
	white-space: nowrap;
	font-size:12px;
	margin-bottom:10px;
	
}
}
.WyethBrandPageCatBtn:hover{
	background:#24858a;
}

.WyethBrandPageCatBtn:focus{
	outline:unset;
}

.parent-article-title-cb{
	padding-top:10px;
	min-height:85px;
	font-family: 'Quicksand', sans-serif;
	color:grey;
}

.btn-readmore-cb{
	font-family: 'Quicksand', sans-serif;
	background: #1d71b8;
    border-radius: 20px;
    font-weight: bold;
    width: 80%;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 5px;
    padding-right: 5px;
}

.nbs-flexisel-container{
	border:unset !important;
}

.visuallyhidden-cb{
	position: absolute; 
	overflow: hidden; 
	clip: rect(0 0 0 0); 
	height: 100%; 
	width: 100%; 
	margin: -1px; 
	padding: 0; border: 0; 
}

.btn-shop-brand-nstl{
	color: white; 
	background: #23346c;
	border-radius: 6px;
	margin-top:5px;
}

.btn-shop-brand-nstl:focus, .btn-shop-brand-nstl:active, btn-shop-brand-nstl:hover{
	background: #2a58a4;
    border-color: #2a58a4;
	outline:unset
}

.image-shopbrand-active{
	background: #439bd445;
}
</style>
{*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade Agile Module to newer
* versions in the future. If you wish to customize Agile Module for your
* needs please contact us at http://addons-modules.com/contact-us.
*
* @module Agile Seller Products  
* @author Kinro Sho <shokinro@agileservex.com>
* @copyright agileservex.com
* @version 1.0
*}
<link rel="stylesheet" href="../modules/agilemultipleshop/css/businesspage.css" type="text/css" media="all" />
<link rel='stylesheet' href='/modules/enlineamixmod/views/css/dscountdown.css' type='text/css' media='all' />

{if $seller_info->id_seller == 711}
<style>
@media (max-width: 768px) {
  .bx-prev{
    display:none!important;
  }
  .bx-next{
    display:none!important;
  }
}
</style>
{/if}
{if $seller_info->id == 177}
{literal}
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '688656144827499');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=688656144827499&ev=PageView&noscript=1"
/></noscript>
{/literal}
{/if}

{$seller_info->initial_customize_seller_info()}

{include file="$tpl_dir./errors.tpl"}
{if $seller_info->id_sellertype1 == 0}
	<div class="row">
	
	<div id="seller-block" class="box row" >
			<!-- seller name -->
			<div id="seller-name" class="col-xs-12 col-sm-9 col-md-9">
			<h1>{strip}
				{$seller_info->company|escape:'htmlall':'UTF-8'}
			{/strip}</h1>
			</div>
			<div id="seller-social" class="col-xs-12 col-sm-3 col-md-3">
				<ul class="social">
					<li class="share-text seller-social" >
						Share:
					</li>
					<li data-type="facebook" class="fa fa-facebook seller-social seller-social-icon" style="color:white;background-color:#3B5998">
					<a href="#">
						<span>Facebook</span>
					</a>
					</li>
					<li data-type="twitter" class="fa fa-twitter seller-social seller-social-icon" style='color:white;background-color:#38A1F3'>
					<a href="#">
						<span>Twitter</span>
					</a>
					</li>{*
					<li data-type="google-plus" class="fa fa-google-plus seller-social seller-social-icon" style='color:white;background-color:red'>
        			<a href="#">
						<span>Google Plus</span>
        			</a>
        			</li>*}
					<li data-type="whatsapp-mobile" class="btn-whatsapp fa fa-whatsapp seller-social seller-social-icon btn-whatsapp" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
					<li data-type="whatsapp" class="btn-whatsapp-web fa fa-whatsapp seller-social seller-social-icon whatsapp-mobile btn-whatsapp-web" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
				</ul>
			</div>
			
					
	</div> <!-- End of Box -->
	
		<div class="col-xs-12 col-sm-12 col-md-12">
			{if $products}
			<div class="">
				<div class="row" {if $seller_info->id == 570 || $seller_info->id == 593} style="display:none;"{else}{/if}>
					<div class="col-md-5 cstm-heading">
						<h3 class="page-heading product-listing">
							<span class="cat-name">{l s='Products' mod='agilemultipleshop'}</span>
							{if $nb_products > 1}<span class="heading-counter">{l s='There are' mod='agilemultipleshop'} {$nb_products} {l s='products.' mod='agilemultipleshop'}</span>
							{else}<span class="heading-counter">{l s='There is' mod='agilemultipleshop'} {$nb_products} {l s='product.' mod='agilemultipleshop'}</span>
							{/if}
						</h3>
					</div>	
					<div class="col-md-5">
						<div class="sortPagiBar clearfix">
								<div class="cstm-sort">{include file="$tpl_dir./product-sort.tpl"}</div>
							
									{include file="$tpl_dir./nbr-product-page.tpl"}
						</div>
					</div>
					<div class="col-md-2" style="margin-top:5px;text-align:right;">
						{include file="$tpl_dir./product-compare.tpl"}
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-12 cstm-heading">
						<div id="shop_navcontainer">
						<ul id="shop_navlist">
						<li><a href="?" {if ($catFilter==0)}id="shop_current"{/if}>All Products</a></li>
						{foreach from=$categoryList item=oneCategory}
							<li><a href="?catfilter={$oneCategory.id_category}" {if ($catFilter==$oneCategory.id_category)}id="shop_current"{/if}> {$oneCategory.name}</a></li>
						{/foreach}
						</ul>
						</div>
					</div>
					<br>
				</div>
				
				<div id="view_way" class="{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1}list_view{else} grid_view{/if}">    
					{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1} {else} <div class="clearfix"></div>{/if}           
							{include file="$tpl_dir./product-list.tpl" products=$products}
				</div>
				<div class="content_sortPagiBar">
    				<div class="bottom-pagination-content clearfix">
        				{include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
					</div>
				</div>
			</div>
			{/if}
		</div>
		<div class="bottom-pagination-content clearfix">
			{hook h="DisplayProductListFooter" displayPage="seller" id=$seller_info->id_seller}
		</div>
	</div>
{else if $seller_info->id_sellertype1 == 3}
	<div id="seller-block" class="box">
		<div class="row {$seller_info->id}" {if $seller_info == 639 || $seller_info->id == 570 || $seller_info->id == 593 || $seller_info->id == 622  || $seller_info->id == 651} style="display:none;"{else}{/if}>
			{if file_exists(SellerInfo::seller_logo_physical_path($seller_info->id))}
			<!-- seller logo-->        
			<div id="logo-block" class=" col-sm-12 col-md-12" style="text-align:center;">
				{if $seller_info->id == 576}<a href="https://www.motherhood.com.my/events/clearblue-conception-kits">{else}{/if}
					<img src="{$seller_info->get_seller_logo_url()}" alt="Logo" style="max-width:100%;height:auto;" />
				{if $seller_info->id == 576}</a>{else}{/if}
			</div>
			<!-- end logo -->
			{/if}
			<!-- seller name -->
			<div id="seller-name" class="col-xs-12 col-sm-9 col-md-9">
			<h1>{strip}
				{$seller_info->company|escape:'htmlall':'UTF-8'}
			{/strip}</h1>
			</div>
			<div id="seller-social" class="col-xs-12 col-sm-3 col-md-3">
				<ul class="social">
					<li class="share-text seller-social" >
						Share:
					</li>
					<li data-type="facebook" class="fa fa-facebook seller-social seller-social-icon" style="color:white;background-color:#3B5998">
					<a href="#">
						<span>Facebook</span>
					</a>
					</li>
					<li data-type="twitter" class="fa fa-twitter seller-social seller-social-icon" style='color:white;background-color:#38A1F3'>
					<a href="#">
						<span>Twitter</span>
					</a>
					</li>{*
					<li data-type="google-plus" class="fa fa-google-plus seller-social seller-social-icon" style='color:white;background-color:red'>
        			<a href="#">
						<span>Google Plus</span>
        			</a>
        			</li>*}
					<li data-type="whatsapp-mobile" class="btn-whatsapp fa fa-whatsapp seller-social seller-social-icon btn-whatsapp" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
					<li data-type="whatsapp" class="btn-whatsapp-web fa fa-whatsapp seller-social seller-social-icon whatsapp-mobile btn-whatsapp-web" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
				</ul>
			</div>
			
					
			<!-- end seller -->
			{*
			*<div class="col-xs-12 col-sm-6 col-md-6">
			*	{if empty($HOOK_SELLER_RATINGS)}
			*		<b>{$seller_info->company}</b>
			*	{else}
			*		{$HOOK_SELLER_RATINGS}
			*	{/if}				
			*	<br>
			*	{$seller_info->address1}<br />
			*	{if $seller_info->address2}{$seller_info->address2}<br />{/if}
			*	{$seller_info->city}, {$seller_info->state} {$seller_info->postcode}<br />
			*	{$seller_info->country} <br /><br />
			*	{if !empty($seller_info->phone)}
			*	{l s='Phone' mod='agilemultipleshop'}:{$seller_info->phone}
			*	{/if}
			*	<br>
			*	<p>
			*		<a href="http://www.wedding.com.my/{$shop_url->virtual_uri}" target="_blank" class="btn btn-default button button-small">
			*			<span>{l s='Visit Seller Inspirations' mod='agilemultipleseller'}</span>
			*		</a>
			*	</p>
			*	<p id="custmomized_fields">
			*	{for $i=1 to 10}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_TEXT%s",$i)]}
			*		{$field_name = sprintf("ams_custom_text%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 2}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_HTML%s",$i)]}
			*		{$field_name = sprintf("ams_custom_html%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}|strip_tags}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 10}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_NUMBER%s",$i)]}
			*		{$field_name = sprintf("ams_custom_number%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 5}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_DATE%s",$i)]}
			*		{$field_name = sprintf("ams_custom_date%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	</p>
			*</div>
			*}
		</div>
	
	</div> <!-- End of Box -->
	<div class="row">
		<div class="officialBrandPage {$seller_info->id} {if $seller_info->id == 632 || $seller_info->id == 639 || $seller_info->id == 651 || $seller_info->id == 576 || $seller_info->id == 570 || $seller_info->id == 593 || $seller_info->id == 622 || $seller_info->id == 640}col-xs-12 col-sm-12 col-md-12 col-lg-12
		{else}col-xs-12 col-sm-9 col-md-9{/if}">
		
					{if isset($categoryBrands) && count($categoryBrands)>1}
					<!-- Start "Brands In This Seller" -->
			<div >
					<section id="categoryBrands" class="page-product-box enlinea_slider {$seller_info->id }" {if $seller_info->id == 576 || $seller_info->id == 570 || $seller_info->id == 768 || $seller_info->id == 653}style="display:none;"{else}{/if}>
						<div id="categoryBrands_list" class="slider_container">
							<ul id="categoryBrands_list_car" class="clearfix" >
								{foreach from=$categoryBrands item='brand' name=brand}
								{if $seller_info->id_seller == 695 && $brand.name == 'Nestle Nan Pro' || $brand.name == 'Nestle Lactogen' || $brand.name == 'Nestle Nan' || $brand.name == 'Huggies' || $brand.name == 'Gerber' || $brand.name == 'Nestle Pre Nan'}
								{else}
									<li class="product-box item" >
										<a class="lnk_img product-image" href="/brands/{$brand.link}" title="{$brand.name|htmlspecialchars}{$seller_info->id_seller}" >
										   <img itemprop="image"  onerror="this.src='{$link->getMediaLink("/img/404.gif")}'"  src="{$link->getMediaLink("/img/m/")}{$brand.id_manufacturer}-large_default.jpg" alt="{$brand.name|htmlspecialchars}" />
										 
										</a>
									</li>
								{/if}
								{/foreach}
							</ul>
						</div>
					</section>
			</div>
					<!-- End "Brands On Sale" -->
					{/if}
					
			<div class='limit-image-width'>
				{$seller_info->description|replace:'http://':'https://'}
			</div>
			{if $seller_info->sellerCustomerReviews && count($seller_info->sellerCustomerReviews) > 0}
			<!-- Customer Review -->
			<div id="seller_customer_review" class="row">
				<div class="seller_customer_review_header">{l s='More Articles About ' mod='agilemultipleshop'}{$seller_info->company}</div>
				<div class="seller_customer_review_container">
					<ul>
						{foreach from=$seller_info->sellerCustomerReviews item=customerreview name=sellercustomerreview_list}
							<li class="col-xs-12 col-sm-6 col-md-4">
								<div class="review-container">
									<div class="left-block">
										<a itemprop="url" class="review_img_link" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank">
											<span class="seller-review-img" itemprop="image" style="background-image:url({$customerreview.image});" ></span>
										</a>
									</div>
									<div class="review-author">
										<a itemprop="url" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank" >
											{$customerreview.author|escape:'html':'UTF-8'}
										</a>
									</div>
									<div class="review-summary">
										{$customerreview.summary|truncate:200:'...'|escape:'html':'UTF-8'}
									</div>
									<div class="review-button">
										<a itemprop="url" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank" >
											{l s='Read More' mod='agilemultipleshop'}
										</a>
									</div>
								</div>
							</li>
						{/foreach}
					</ul>
				</div>
				<div class="seller-customer-review-all">
					<a href="{$seller_info->sellerAllReviewLink|escape:'html':'UTF-8'}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}'s Review" >
						{l s='View All' mod='agilemultipleshop'}
					</a>
				</div>
			</div>
			<!-- End Customer Review -->
			<hr />
			{/if}
			{if $products}
			<br />
			<div class="row productss" {if $seller_info->id == 570 || $seller_info->id == 593 || $seller_info->id == 622} style="display:none;"{else}{/if}>
				<div class="col-md-5 cstm-heading">
					<h3 class="page-heading product-listing">
						<span class="cat-name">{l s='Products' mod='agilemultipleshop'}</span>
						{if $nb_products > 1}<span class="heading-counter">{l s='There are' mod='agilemultipleshop'} {$nb_products} {l s='products.' mod='agilemultipleshop'}</span>
						{else}<span class="heading-counter">{l s='There is' mod='agilemultipleshop'} {$nb_products} {l s='product.' mod='agilemultipleshop'}</span>
						{/if}
					</h3>
				</div>	
				<div class="col-md-5">
					<div class="sortPagiBar clearfix">
							<div class="cstm-sort">{include file="$tpl_dir./product-sort.tpl"}</div>
							
								{include file="$tpl_dir./nbr-product-page.tpl"}
					</div>
				</div>
				<div class="col-md-2" style="margin-top:5px;">
					{include file="$tpl_dir./product-compare.tpl"}
				</div>
			
			</div>
			{assign var='request' value=$link->getPaginationLink(false, false, false, true)}
			<div class="row productss" {if $seller_info->id == 570 || $seller_info->id == 593 } style="display:none;"{else}{/if}>
				<div class="col-md-12 cstm-heading">
					<div id="shop_navcontainer">
					<ul id="shop_navlist"  here="here">
					<li><a href="?" {if ($catFilter==0)}id="shop_current"{/if}>All Products</a></li>
		 			{foreach from=$categoryList item=oneCategory}
						<li><a href="?catfilter={$oneCategory.id_category}" {if ($catFilter==$oneCategory.id_category)}id="shop_current"{/if}> {$oneCategory.name}</a></li>
					{/foreach}
					</ul>
					</div>
				</div>
				<br>
			</div>
			<div class="row productss" {if $seller_info->id == 570 || $seller_info->id == 593} style="display:none;"{else}{/if}>
				
				
				<div id="view_way" class="{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1}list_view{else} grid_view{/if}">    
					{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1} {else} <div class="clearfix"></div>{/if}               
							{include file="$tpl_dir./product-list.tpl" products=$products}
				</div>
				<div class="content_sortPagiBar">
    				<div class="bottom-pagination-content clearfix ">
        				{include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
					</div>
				</div>
			</div>
			{/if}
			<div class="bottom-pagination-content clearfix">
				{hook h="DisplayProductListFooter" displayPage="seller" id=$seller_info->id_seller}
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 officialBrandPage" {if $seller_info->id == 632 || $seller_info->id == 639 || $seller_info->id == 651 || $seller_info->id == 576 || $seller_info->id == 570 || $seller_info->id == 768 || $seller_info->id == 593 || $seller_info->id == 622 || $seller_info->id == 640 }style="display:none;"{else}{/if}>
			<div id="seller_info {$seller_info->id}" {if $seller_info->id == 177 or $seller_info->id == 544 or $seller_info->id == 576 or $seller_info->id == 560 || $seller_info->id == 622 || $seller_info->id == 653}style="display:none;"{/if}>
				{if $seller_info->ams_url_imglogo}<img width='60%' src="{$seller_info->ams_url_imglogo}" style="display:block;margin:auto;">{/if}
				<div class="seller-name {$seller_info->id}" {if $seller_info->id == 530 || $seller_info->id == 602}style="display:none;"{/if}>{$seller_info->company|escape:'htmlall':'UTF-8'}</div>
				{if $totalProducts>0 && $seller_info->id !== 530}
				<div {if $seller_info->id == 602}style="display:none;"{/if}>
				{$HOOK_SELLER_RATINGS}</div>
				<div class="seller-contact" {if $seller_info->id == 530|| $seller_info->id == 602}style="display:none;"{/if}>
					<table>
						<!----
						<tr><td><i class="fa fa-shopping-cart"></i></td><td> {l s='Products' mod='agilemultipleshop'}: {$totalProducts}
						</td></tr><tr><td><i class="fa fa-user"></i> </td><td>{l s='Joined Since' mod='agilemultipleshop'} : {$joinedSince}
						</td></tr><tr><td><i class="fa fa-gift"></i></td><td> {l s='Preparation Time' mod='agilemultipleshop'} : {$prepTime}
						</td></tr>
						---->
						<tr><td>
					
						{if (isset($sellerinfo->ams_custom_number2) && $sellerinfo->ams_custom_number2==0)}
							<i class="fa fa-truck"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Standard Delivery 2 - 7 days<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==1)}
							<i class="fa fa-ship"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Overseas Delivery 7 - 14 days<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==2)}
							<i class="fa fa-truck"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Same Day Delivery<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==3)}
							<i class="fa fa-truck" style="color:red;"></i>&nbsp;&nbsp; </td>
							<td>Delivery Options :</b><br><span style="color:red;">Overseas Delivery 25 - 35 days</span><br>
						{/if}
						{if (isset($sellerinfo->ams_custom_date4) && ($sellerinfo->ams_custom_date4>$smarty.now|date_format:"%Y-%m-%d") )}
							<br><i class="fa fa-tree"></i>&nbsp;&nbsp; </td><td>Seller Holiday :</b><br>Delivery Starts on {$sellerinfo->ams_custom_date4}</br>
						{/if}
						
						</td></tr>
					</table>
				</div>
				<!----
				<div class="seller-contact" {if $seller_info->id == 602}style="display:none;"{/if}>
					{if $seller_info->address1}{$seller_info->address1}<br />{/if}
					{if $seller_info->address2}{$seller_info->address2}<br />{/if}
					{if $seller_info->city}{$seller_info->city},{/if} {$seller_info->state} {$seller_info->postcode}<br />
					{$seller_info->country} <br /><br />
					{if (!empty($seller_info->phone) && false)}
						<i class="icon-phone"></i>{$seller_info->phone}<br />
					{/if}
					{*
					*{if !empty($seller_info->sellerEmail)}
					*	<i class="icon-envelope-alt"></i>{$seller_info->sellerEmail}
					*{/if}
					*}
				</div>---->
				{/if}
				<div class="seller-terms" {if $seller_info->id == 602}style="display:none;"{/if}>
					<a href="{$link->getCMSLink(3)}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}">
						{l s='Terms & Conditions' mod='agilemultipleshop'}
					</a>
				</div>
				<div class="seller_review_header">{l s='Shop For Brands' mod='agilemultipleshop'}</div>
				<div class="seller-terms">
					{foreach from=$officialBrands item='brand' name=brand}
						{if $brand.is_owner}
							<a class="lnk_img product-image" href="/brands/{$brand.link}" title="{$brand.name|htmlspecialchars}" >
							   {$brand.name}
							</a><br>
						{/if}
					{/foreach}
				</div>
			</div>
			
			{if $seller_info->freeProducts && count($seller_info->freeProducts) > 0}
			<div id="seller_featured">
				<div class="seller_featured_header">{l s='Free Redemption' mod='agilemultipleshop'}</div>
		 		<div class="seller_featured_container">
		 			<ul>
		 				{foreach from=$seller_info->freeProducts item=product name=freeproduct_list}
		 					<li>
		 						<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
		 							<div class="left-block">
		 								<div class="product-image-container">
		 									<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" itemprop="image">
		 									</a>
		 								</div>
		 							</div>
		 							<div class="right-block">
		 								<h5 itemprop="name">
		 									<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
		 									</a>
		 								</h5>
		 								<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
		 									{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
		 										<span itemprop="price" class="price product-price">
		 											{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
		 										</span>
		 										<meta itemprop="priceCurrency" content="{$currency->iso_code}" />
		 										{*
												* {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
		 										* 	{hook h="displayProductPriceBlock" product=$product type="old_price"}
		 										* 	<span class="old-price product-price">
		 										* 		{displayWtPrice p=$product.price_without_reduction}
		 										* 	</span>
		 										* 	{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
		 										* 	{if $product.specific_prices.reduction_type == 'percentage'}
		 										* 		<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
		 										* 	{/if}
		 										* {/if}
		 										*}
												{hook h="displayProductPriceBlock" product=$product type="price"}
		 										{hook h="displayProductPriceBlock" product=$product type="unit_price"}
		 									{/if}
		 								</div>
		 							</div>
		 						</div>
							</li>
						{/foreach}
					</ul>
				</div>
			</div>
			{/if}
			
			{*Reviews*}
			{if isset($story_reviews) && count($story_reviews) > 0}
			<div id="seller_featured">
				<div class="seller_featured_header">{l s='Product Reviews' mod='agilemultipleshop'}</div>
					<div class="seller_featured_container">
					<ul>
						{foreach from=$story_reviews item=review name=loop}
						{assign var="product" value=$review.product}
						<li style="margin:20px 5px 20px 10px {if $product.name|strpos:"FREE" !== false }display:none;{else}{/if}" >
		 						<div class="product-container" >
		 							<div class="left-block">
		 								<div class="product-image-container">
		 									<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										<img src="{$product.imgLink|escape:'html':'UTF-8'}" alt="{$product.name|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="image">
		 									</a>
		 								</div>
		 							</div>
		 							<div class="right-block">
									<div itemprop="offers" >
		 										<span itemprop="price" class="price product-price">
		 											<p>{$product.name|truncate:20:'...'|escape:'html':'UTF-8'}</p>
		 										</span>
		 								</div>
		 								<h5 itemprop="name">
		 									<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										{$review.content|truncate:45:'...'|escape:'html':'UTF-8'}
		 									</a>
		 								</h5>
										<div style="text-align:right;">
										{$review.customer_name}
										<div class="clearfix" >
											{section name="i" start=0 loop=5 step=1}
												{if $review.grade le $smarty.section.i.index}
													<div class="star"></div>
												{else}
													<div class="star star_on"></div>
												{/if}
											{/section}
										</div>
		 								</div>
		 							</div>
		 						</div>
							</li>
						{/foreach}
					</ul>
					<div style="text-align:center; background-color:#2FA7AD;" >
					{assign var="currentPage" value=strtok($smarty.server.REQUEST_URI,'?')}
					<a href="{$currentPage}productreview" style="color:white; font-weight:bold; font-size:15px;" class="btn-lg btn" >
					>>View more
					</a>
					</div>
				</div>
			</div>
			{/if}
		{*Reviews End*}
			
			{if $seller_info->sellerReviews && count($seller_info->sellerReviews) > 0}
			<div id="seller_review" {if $seller_info->id == 177}style="display:none;"{/if}>
				<div class="seller_review_header">{l s='Popular Article' mod='agilemultipleshop'}</div>
				<div class="seller_review_container">
					<ul>
							{foreach from=$seller_info->sellerReviews item=review name=sellerreview_list}
								<li>
									<div class="review-container">
										<div class="left-block">
											<a itemprop="url" class="review_img_link" href="{$review.storylink|escape:'html':'UTF-8'}" title="{$review.title|escape:'html':'UTF-8'}" target="_blank" >
												<span class="seller-review-img" itemprop="image" style="background-image:url({$review.image});" ></span>
											</a>
										</div>
										<div class="right-block">
											<h5 itemprop="name">
												<a itemprop="url" class="review-name" href="{$review.storylink|escape:'html':'UTF-8'}" title="{$review.title|escape:'html':'UTF-8'}" target="_blank" >
													{$review.title|truncate:45:'...'|escape:'html':'UTF-8'}
												</a>
											</h5>
											<div itemprop="datePublished" class="review-duration" content="{$review.publish_date}">{$review.duration|escape:'html':'UTF-8'}</div>
										</div>
									</div>
								</li>
							{/foreach}
						</ul>
				</div>
				<div class="seller-review-all"><a href="{$seller_info->sellerAllReviewLink|escape:'html':'UTF-8'}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}'s Review" >
					{l s='Read More Article' mod='agilemultipleshop'}
				</a></div>
			</div>
			{/if}
			{if $logged !== true}
			<div id="seller-contact-form">
				<div class="seller_contact_header">{l s='Chat With Us' mod='agilemultipleshop'}</div>
				<div class="seller_contact_container" >
				<div class="seller_contact_label">Login to start a Conversation with {if $seller_info->id_seller == 695}Nestle{else}this seller{/if}</div>
					<a href="/my-account" class="seller-contact-button btn btn-default" style="margin: 10px 0px 10px 0px; background:#fb4445; border:none; box-shadow:none; width:100%; border-radius:4px; color:white; font-weight:bold;">Login</a>
				</div>
			</div>
			{/if}
			{if $logged == true AND !$seller_info->sellerContactLoginRequired}
			<div id="seller-contact-form">
				<div class="seller_contact_header" style="display:block;">{l s='Contact us' mod='agilemultipleshop'}
					{if $onlineStatus == "Online"}
						<div style="float:right;">
							<div style="height:10px; width:10px; border-radius:50%; background:	#ADFF2F; display:inline-block;"></div>
							<span style="color:#DCDCDC; font-size:12px; font-weight:normal;">Online</span>
						</div>
					{else}
						<p style="color:#DCDCDC; font-size:12px; font-weight:normal;">{$onlineStatus}</p>
					{/if}
				</div>
				<div class="seller_contact_container">
				<div class="seller_contact_label">Start a Conversation with {if $seller_info->id_seller == 695}Nestle{else if $seller_info->id == 177}Nivea Baby{else}this seller{/if}</div>
					{*<form action="{$link->getModuleLink("enlineamixmod","enlineamessengercustomer",array(),true)|escape:'html':'UTF-8'}?newchat=1&sellerid={$seller_info->id_seller}&sellername={$seller_info->company|escape}" method="post">*}
					<form action="{$link->getModuleLink("enlineamixmod","enlineamessengercustomer",array(),true)|escape:'html':'UTF-8'}?newchat=1&sellerid={$seller_info->id_seller}&sellername=" method="post">
						<input type="hidden" name="sellerid" id="sellerid" value="{$seller_info->id_seller}" />
						<button type="submit" name="startConversation" id="startConversation" value="Chat" class="seller-contact-button" style="background:#fb4446; box-shadow:none;">Chat</button>
					</form>
				</div>
			</div>
			{/if}
			{if $seller_info->id_seller == 695 || $seller_info->id_seller == 344 || $seller_info->id_seller == 674 || $seller_info->id_seller == 739}
			<div id="seller-contact-form" class="{$seller_info->id_seller} contact-us-seller-form">
				<div class="seller_contact_header">{l s='Contact Us' mod='agilemultipleshop'}</div>
				<div class="seller_contact_container">
					{if $seller_info->sellerContactResult["error"] && count($seller_info->sellerContactResult["error"]) > 0 }
						<div class="alert">
							<ol>
							{foreach from=$seller_info->sellerContactResult["error"] item=contactResult name=sellercontactresult_list}
								<li>{$contactResult}</li>
							{/foreach}
							</ol>
						</div>
					{/if}
					<div></div>
					<form action="{$base_dir}" method="post" onsubmit="return sellerContactValidation();" enctype="multipart/form-data" id="sellerContactForm">
						<input type="hidden" name="sellerId" id="sellerId" value="{$seller_info->id_seller}" />
						<div class="seller_contact_label">{l s='Name' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_name" id="contact_name" value="{$seller_info->sellerContactResult["name"]}" /></div>
						<div class="seller_contact_label">{l s='Contact Number' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_no" id="contact_no" maxlength="100" value="{$seller_info->sellerContactResult["phone"]}"  /></div>
						<div class="seller_contact_label">{l s='Email' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_mail" id="contact_mail" maxlength="256" value="{$seller_info->sellerContactResult["mail"]}"  /></div>
						{*<div class="seller_contact_label">{l s='Comment' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><textarea name="contact_comment" id="contact_comment" rows="6">{$seller_info->sellerContactResult["comment"]}</textarea></div>
						*}
						{if $seller_info->id_seller == 695 || $seller_info->id_seller == 674}
						<div class="seller_contact_label">{l s='Update you with the latest news, goodies and hot deals from Nestle Startwell2gether.' mod='agilemultipleshop'}</div>
						<div class="seller_contact_label col-md-6" style="padding-top:0;padding-bottom:15px;">
						<div>{l s='SMS' mod='agilemultipleshop'}</div>
						<input type="checkbox" name="check_sms" id="check_sms" value="withSms"/>
						</div>
						<div class="seller_contact_label col-md-6" style="padding-top:0;padding-bottom:15px;">
						<div>{l s='Email' mod='agilemultipleshop'}</div>
						<input type="checkbox" name="check_email" id="check_email" value="withEmail"/>
						</div>
						{/if}
						{if $seller_info->sellerContactCaptcha}
							<div class="seller_contact_label">{l s='Verification Text:' mod='agilesellermessenger'}</div>
							<div class="seller_contact_field">
								<span><input type="text" name="contact_captcha" id="contact_captcha" value="" /></span>
								<span class="seller_contacat_captcha_img"><img src="{$base_dir_ssl}modules/agilesellermessenger/antispamimage.php" alt='antispamimg'/></span>
							</div>
						{/if}
						{if $seller_info->sellerContactAttachment==1}
							<div class="seller_contact_label">{l s='Upload Photo' mod='agilemultipleshop'}</div>
							<div class="seller_contact_field">
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
								<input type="file" size="50" name="contact_attach" id="contact_attach" class="seller_contact_attach">
							</div>
						{/if}
						<div>
							<button type="submit" name="btnSubmitSellerContact" id="btnSubmitSellerContact" value="Submit" class="seller-contact-button">Submit</button>
						</div>
					</form>
				</div>
			</div>
			{/if}

			
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {ldelim}
		var errorDiv = $("div.alert", "div.seller_contact_container");
		if(errorDiv.length > 0) {ldelim}
			$('html, body').animate({ scrollTop: errorDiv.offset().top }, 1000);
		{rdelim}

		{if $seller_info->sellerContactResult["success"]} 
			alert("Thank you for your feedback. Our representative will contact you shortly.");
			//fbq('track', 'Lead');
		{/if}
	{rdelim});
	</script>

	{if $seller_info->sellerContactResult["success"]} 
	<!-- Google Code for Lead Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 953362167;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "e6DBCNzvv2MQ983MxgM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/953362167/?label=e6DBCNzvv2MQ983MxgM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	{/if}
{else}
	<div id="seller-block" class="box">
		<div class="row {$seller_info->id}" {if $seller_info->id == 570 || $seller_info->id == 593 || $seller_info->id == 622 || $seller_info->id == 651} style="display:none;"{else}{/if}>
			{if file_exists(SellerInfo::seller_logo_physical_path($seller_info->id))}
			<!-- seller logo-->        
			<div id="logo-block" class=" col-sm-12 col-md-12" style="text-align:center;">
				{if $seller_info->id == 576}<a href="https://www.motherhood.com.my/events/clearblue-conception-kits">{else}{/if}
					<img src="{$seller_info->get_seller_logo_url()}" title="Logo" alt="Logo" style="max-width:100%;height:auto;" />
				{if $seller_info->id == 576}</a>{else}{/if}
			</div>
			<!-- end logo -->
			{/if}
			<!-- seller name -->
			<div id="seller-name" class="col-xs-12 col-sm-9 col-md-9">
			<h1>{strip}
				{$seller_info->company|escape:'htmlall':'UTF-8'}
			{/strip}</h1>
			</div>
			<div id="seller-social" class="col-xs-12 col-sm-3 col-md-3">
				<ul class="social">
					<li class="share-text seller-social" >
						Share:
					</li>
					<li data-type="facebook" class="fa fa-facebook seller-social seller-social-icon" style="color:white;background-color:#3B5998">
					<a href="#">
						<span>Facebook</span>
					</a>
					</li>
					<li data-type="twitter" class="fa fa-twitter seller-social seller-social-icon" style='color:white;background-color:#38A1F3'>
					<a href="#">
						<span>Twitter</span>
					</a>
					</li>{*
					<li data-type="google-plus" class="fa fa-google-plus seller-social seller-social-icon" style='color:white;background-color:red'>
        			<a href="#">
						<span>Google Plus</span>
        			</a>
        			</li>*}
					<li data-type="whatsapp-mobile" class="btn-whatsapp fa fa-whatsapp seller-social seller-social-icon btn-whatsapp" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
					<li data-type="whatsapp" class="btn-whatsapp-web fa fa-whatsapp seller-social seller-social-icon whatsapp-mobile btn-whatsapp-web" style='color:white;background-color:#25d366'>
        			<a href="#">
						<span>Whatsapp</span>
        			</a>
        			</li>
				</ul>
			</div>
			
					
			<!-- end seller -->
			{*
			*<div class="col-xs-12 col-sm-6 col-md-6">
			*	{if empty($HOOK_SELLER_RATINGS)}
			*		<b>{$seller_info->company}</b>
			*	{else}
			*		{$HOOK_SELLER_RATINGS}
			*	{/if}				
			*	<br>
			*	{$seller_info->address1}<br />
			*	{if $seller_info->address2}{$seller_info->address2}<br />{/if}
			*	{$seller_info->city}, {$seller_info->state} {$seller_info->postcode}<br />
			*	{$seller_info->country} <br /><br />
			*	{if !empty($seller_info->phone)}
			*	{l s='Phone' mod='agilemultipleshop'}:{$seller_info->phone}
			*	{/if}
			*	<br>
			*	<p>
			*		<a href="http://www.wedding.com.my/{$shop_url->virtual_uri}" target="_blank" class="btn btn-default button button-small">
			*			<span>{l s='Visit Seller Inspirations' mod='agilemultipleseller'}</span>
			*		</a>
			*	</p>
			*	<p id="custmomized_fields">
			*	{for $i=1 to 10}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_TEXT%s",$i)]}
			*		{$field_name = sprintf("ams_custom_text%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 2}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_HTML%s",$i)]}
			*		{$field_name = sprintf("ams_custom_html%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}|strip_tags}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 10}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_NUMBER%s",$i)]}
			*		{$field_name = sprintf("ams_custom_number%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	{for $i=1 to 5}
			*		{if isset($conf) and $conf[sprintf("AGILE_MS_SELLER_DATE%s",$i)]}
			*		{$field_name = sprintf("ams_custom_date%s",$i)}
			*			<label for="{$field_name}">{$custom_labels[$field_name]}:&nbsp;</label>{$seller_info->{$field_name}}<br>
			*		{/if}
			*	{/for}
			*	</p>
			*</div>
			*}
		</div>
	
	</div> <!-- End of Box -->
	<div class="row">
		<div class="{if $seller_info->id == 593 || $seller_info->id == 602 || $seller_info->id == 632 || $seller_info->id == 640 || $seller_info->id == 651}col-xs-12 col-lg-12 col-md-12
		{else}col-xs-12 col-sm-9 col-md-9{/if}
		 fullpage {$seller_info->id}">
		
					{if isset($categoryBrands) && count($categoryBrands)>1}
					<!-- Start "Brands In This Seller" -->
			<div >
					<section id="categoryBrands " class="page-product-box enlinea_slider {$seller_info->id}" {if $seller_info->id == 576  }style="display:none;"{else}{/if}>
						<div id="categoryBrands_list" class="slider_container">
							<ul id="categoryBrands_list_car" class="clearfix" >
								{foreach from=$categoryBrands item='brand' name=brand}
								{if $seller_info->id_seller == 695 && $brand.name == 'Nestle Nan Pro' || $brand.name == 'Nestle Lactogen' || $brand.name == 'Nestle Nan' || $brand.name == 'Huggies'}
								{else}
									<li class="product-box item" >
										<a class="lnk_img product-image" href="/brands/{$brand.link}" title="{$brand.name|htmlspecialchars}" >
										   <img itemprop="image"  onerror="this.src='{$link->getMediaLink("/img/404.gif")}'"  src="{$link->getMediaLink("/img/m/")}{$brand.id_manufacturer}-large_default.jpg" alt="{$brand.name|htmlspecialchars}" />
										 
										</a>
									</li>
								{/if}
								{/foreach}
							</ul>
						</div>
					</section>
			</div>
					<!-- End "Brands On Sale" -->
					{/if}
					
			<div class='limit-image-width'>
				{$seller_info->description|replace:'http://':'https://'}
			</div>
			{if $seller_info->sellerCustomerReviews && count($seller_info->sellerCustomerReviews) > 0}
			<!-- Customer Review -->
			<div id="seller_customer_review" class="row">
				<div class="seller_customer_review_header">{l s='More Articles About ' mod='agilemultipleshop'}{$seller_info->company}</div>
				<div class="seller_customer_review_container">
					<ul>
						{foreach from=$seller_info->sellerCustomerReviews item=customerreview name=sellercustomerreview_list}
							<li class="col-xs-12 col-sm-6 col-md-4">
								<div class="review-container">
									<div class="left-block">
										<a itemprop="url" class="review_img_link" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank">
											<span class="seller-review-img" itemprop="image" style="background-image:url({$customerreview.image});" ></span>
										</a>
									</div>
									<div class="review-author">
										<a itemprop="url" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank" >
											{$customerreview.author|escape:'html':'UTF-8'}
										</a>
									</div>
									<div class="review-summary">
										{$customerreview.summary|truncate:200:'...'|escape:'html':'UTF-8'}
									</div>
									<div class="review-button">
										<a itemprop="url" href="{$customerreview.storylink|escape:'html':'UTF-8'}" title="{$customerreview.title|escape:'html':'UTF-8'}" target="_blank" >
											{l s='Read More' mod='agilemultipleshop'}
										</a>
									</div>
								</div>
							</li>
						{/foreach}
					</ul>
				</div>
				<div class="seller-customer-review-all">
					<a href="{$seller_info->sellerAllReviewLink|escape:'html':'UTF-8'}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}'s Review" >
						{l s='View All' mod='agilemultipleshop'}
					</a>
				</div>
			</div>
			<!-- End Customer Review -->
			<hr />
			{/if}
			{if $products}
			<br />
			<div class="row productsFullPage" {if $seller_info->id == 570 || $seller_info->id == 593  } style="display:none;"{else}{/if}>
				<div class="col-md-5 cstm-heading">
					<h3 class="page-heading product-listing">
						<span class="cat-name">{l s='Products' mod='agilemultipleshop'}</span>
						{if $nb_products > 1}<span class="heading-counter">{l s='There are' mod='agilemultipleshop'} {$nb_products} {l s='products.' mod='agilemultipleshop'}</span>
						{else}<span class="heading-counter">{l s='There is' mod='agilemultipleshop'} {$nb_products} {l s='product.' mod='agilemultipleshop'}</span>
						{/if}
					</h3>
				</div>	
				<div class="col-md-5">
					<div class="sortPagiBar clearfix">
							<div class="cstm-sort">{include file="$tpl_dir./product-sort.tpl"}</div>
							
								{include file="$tpl_dir./nbr-product-page.tpl"}
					</div>
				</div>
				<div class="col-md-2" style="margin-top:5px;">
					{include file="$tpl_dir./product-compare.tpl"}
				</div>
			
			</div>
			{assign var='request' value=$link->getPaginationLink(false, false, false, true)}
			<div class="row productsFullPage" {if $seller_info->id == 570 || $seller_info->id == 593} style="display:none;"{else}{/if}>
				<div class="col-md-12 cstm-heading">
					<div id="shop_navcontainer">
					<ul id="shop_navlist">
					<li><a href="?" {if ($catFilter==0)}id="shop_current"{/if}>All Products</a></li>
		 			{foreach from=$categoryList item=oneCategory}
						<li><a href="?catfilter={$oneCategory.id_category}" {if ($catFilter==$oneCategory.id_category)}id="shop_current"{/if}> {$oneCategory.name}</a></li>
					{/foreach}
					</ul>
					</div>
				</div>
				<br>
			</div>
			<div class="row productsFullPage" {if $seller_info->id == 570 || $seller_info->id == 593} style="display:none;"{else}{/if}>
				
				
				<div id="view_way" class="{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1}list_view{else} grid_view{/if}">    
					{if isset($warehouse_vars.product_view) && $warehouse_vars.product_view == 1} {else} <div class="clearfix"></div>{/if}               
							{include file="$tpl_dir./product-list.tpl" products=$products}
				</div>
				<div class="content_sortPagiBar">
    				<div class="bottom-pagination-content clearfix">
        				{include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
					</div>
				</div>
			</div>
			{/if}
			<div class="bottom-pagination-content clearfix {$seller_info->id_seller}" {if $seller_info->id_seller == 234}style="display:none;"{/if}>
				{hook h="DisplayProductListFooter" displayPage="seller" id=$seller_info->id_seller}
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 fullpage" {if $seller_info->id == 576 || $seller_info->id ==593 || $seller_info->id == 602 || $seller_info->id == 632 || $seller_info->id == 640 || $seller_info->id == 651}
		style="display:none;"{else}{/if}>
			<div id="seller_info" {if $seller_info->id == 177  || $seller_info->id == 544 || $seller_info->id == 560 || $seller_info->id == 622 || $seller_info->id == 520}style="display:none;"{/if}>
				{if $seller_info->ams_url_imglogo}<img width='60%' src="{$seller_info->ams_url_imglogo}" style="display:block;margin:auto;">{/if}
				<div class="seller-name" {if $seller_info->id == 530}style="display:none;"{/if}>{$seller_info->company|escape:'htmlall':'UTF-8'}</div>
				{if $totalProducts>0 && $seller_info->id !== 530 && $seller_info->id !== 633}
				{$HOOK_SELLER_RATINGS}
				<div class="seller-contact" {if $seller_info->id == 530 && $seller_info->id !== 633}style="display:none;"{/if} style="display:none;">
					<table>
						<tr><td><i class="fa fa-shopping-cart"></i></td><td> {l s='Products' mod='agilemultipleshop'}: {$totalProducts}
						</td></tr><tr><td><i class="fa fa-user"></i> </td><td>{l s='Joined Since' mod='agilemultipleshop'} : {$joinedSince}
						</td></tr><tr><td><i class="fa fa-gift"></i></td><td> {l s='Preparation Time' mod='agilemultipleshop'} : {$prepTime}
						</td></tr>
						<tr><td>
					
						{if (isset($sellerinfo->ams_custom_number2) && $sellerinfo->ams_custom_number2==0)}
							<i class="fa fa-truck"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Standard Delivery 2 - 7 days<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==1)}
							<i class="fa fa-ship"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Overseas Delivery 7 - 14 days<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==2)}
							<i class="fa fa-truck"></i>&nbsp;&nbsp; </td><td>Delivery Options :</b><br>Same Day Delivery<br>
						{/if}
						{if (isset($sellerinfo->ams_custom_number2) &&  $sellerinfo->ams_custom_number2==3)}
							<i class="fa fa-truck" style="color:red;"></i>&nbsp;&nbsp; </td>
							<td>Delivery Options :</b><br><span style="color:red;">Overseas Delivery 25 - 35 days</span><br>
						{/if}
						{if (isset($sellerinfo->ams_custom_date4) && ($sellerinfo->ams_custom_date4>$smarty.now|date_format:"%Y-%m-%d") )}
							<br><i class="fa fa-tree"></i>&nbsp;&nbsp; </td><td>Seller Holiday :</b><br>Delivery Starts on {$sellerinfo->ams_custom_date4}</br>
						{/if}
						
						</td></tr>
					</table>
				</div>
				<!----
				<div class="seller-contact"  {if $seller_info->id == 603}style="display:none;"{/if}>
					{if $seller_info->address1}{$seller_info->address1}<br />{/if}
					{if $seller_info->address2}{$seller_info->address2}<br />{/if}
					{if $seller_info->city}{$seller_info->city},{/if} {$seller_info->state} {$seller_info->postcode}<br />
					{$seller_info->country} <br /><br />
					{if (!empty($seller_info->phone) && false)}
						<i class="icon-phone"></i>{$seller_info->phone}<br />
					{/if}
					{*
					*{if !empty($seller_info->sellerEmail)}
					*	<i class="icon-envelope-alt"></i>{$seller_info->sellerEmail}
					*{/if}
					*}
				</div>
				----->
				{/if}
				<div class="seller-terms">
					<a href="{$link->getCMSLink(3)}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}">
						{l s='Terms & Conditions' mod='agilemultipleshop'}
					</a>
				</div>
				<div class="seller_review_header">{l s='Shop For Brands' mod='agilemultipleshop'}</div>
				<div class="seller-terms">
					{foreach from=$officialBrands item='brand' name=brand}
						{if $brand.is_owner}
							<a class="lnk_img product-image" href="/brands/{$brand.link}" title="{$brand.name|htmlspecialchars}" >
							   {$brand.name}
							</a><br>
						{/if}
					{/foreach}
				</div>
			</div>
			
			{if $seller_info->freeProducts && count($seller_info->freeProducts) > 0}
			<div id="seller_featured">
				<div class="seller_featured_header">{l s='Free Redemption' mod='agilemultipleshop'}</div>
		 		<div class="seller_featured_container">
		 			<ul>
		 				{foreach from=$seller_info->freeProducts item=product name=freeproduct_list}
		 					<li>
		 						<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
		 							<div class="left-block">
		 								<div class="product-image-container">
		 									<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" itemprop="image">
		 									</a>
		 								</div>
		 							</div>
		 							<div class="right-block">
		 								<h5 itemprop="name">
		 									<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
		 									</a>
		 								</h5>
		 								<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
		 									{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
		 										<span itemprop="price" class="price product-price">
		 											{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
		 										</span>
		 										<meta itemprop="priceCurrency" content="{$currency->iso_code}" />
		 										{*
												* {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
		 										* 	{hook h="displayProductPriceBlock" product=$product type="old_price"}
		 										* 	<span class="old-price product-price">
		 										* 		{displayWtPrice p=$product.price_without_reduction}
		 										* 	</span>
		 										* 	{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
		 										* 	{if $product.specific_prices.reduction_type == 'percentage'}
		 										* 		<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
		 										* 	{/if}
		 										* {/if}
		 										*}
												{hook h="displayProductPriceBlock" product=$product type="price"}
		 										{hook h="displayProductPriceBlock" product=$product type="unit_price"}
		 									{/if}
		 								</div>
		 							</div>
		 						</div>
							</li>
						{/foreach}
					</ul>
				</div>
			</div>
			{/if}
			
			{*Reviews*}
			{if isset($story_reviews) && count($story_reviews) > 0}
			<div id="seller_featured">
				<div class="seller_featured_header">{l s='Product Reviews' mod='agilemultipleshop'}</div>
					<div class="seller_featured_container">
					<ul>
						{foreach from=$story_reviews item=review name=loop}
						{assign var="product" value=$review.product}
						<li style="margin:20px 5px 20px 10px; {if $product.name|strpos:"FREE" !== false }display:none;{else}{/if}">
		 						<div class="product-container" >
		 							<div class="left-block">
		 								<div class="product-image-container">
		 									<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										<img src="{$product.imgLink|escape:'html':'UTF-8'}" alt="{$product.name|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="image">
		 									</a>
		 								</div>
		 							</div>
		 							<div class="right-block">
									<div itemprop="offers" >
		 										<span itemprop="price" class="price product-price">
		 											<p>{$product.name|truncate:20:'...'|escape:'html':'UTF-8'}</p>
		 										</span>
		 								</div>
		 								<h5 itemprop="name">
		 									<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
		 										{$review.content|truncate:45:'...'|escape:'html':'UTF-8'}
		 									</a>
		 								</h5>
										<div style="text-align:right;">
										{$review.customer_name}
										<div class="clearfix" >
											{section name="i" start=0 loop=5 step=1}
												{if $review.grade le $smarty.section.i.index}
													<div class="star"></div>
												{else}
													<div class="star star_on"></div>
												{/if}
											{/section}
										</div>
		 								</div>
		 							</div>
		 						</div>
							</li>
						{/foreach}
					</ul>
					<div style="text-align:center; background-color:#2FA7AD;" >
					<a href="productreview" style="color:white; font-weight:bold; font-size:15px;" class="btn-lg btn" >
					>>View more
					</a>
					</div>
				</div>
			</div>
			{/if}
		{*Reviews End*}
			
			{if $seller_info->sellerReviews && count($seller_info->sellerReviews) > 0}
			<div id="seller_review" {if $seller_info->id == 177}style="display:none;"{/if}>
				<div class="seller_review_header">{l s='Popular Article' mod='agilemultipleshop'}</div>
				<div class="seller_review_container">
					<ul>
							{foreach from=$seller_info->sellerReviews item=review name=sellerreview_list}
								<li>
									<div class="review-container">
										<div class="left-block">
											<a itemprop="url" class="review_img_link" href="{$review.storylink|escape:'html':'UTF-8'}" title="{$review.title|escape:'html':'UTF-8'}" target="_blank" >
												<span class="seller-review-img" itemprop="image" style="background-image:url({$review.image});" ></span>
											</a>
										</div>
										<div class="right-block">
											<h5 itemprop="name">
												<a itemprop="url" class="review-name" href="{$review.storylink|escape:'html':'UTF-8'}" title="{$review.title|escape:'html':'UTF-8'}" target="_blank" >
													{$review.title|truncate:45:'...'|escape:'html':'UTF-8'}
												</a>
											</h5>
											<div itemprop="datePublished" class="review-duration" content="{$review.publish_date}">{$review.duration|escape:'html':'UTF-8'}</div>
										</div>
									</div>
								</li>
							{/foreach}
						</ul>
				</div>
				<div class="seller-review-all"><a href="{$seller_info->sellerAllReviewLink|escape:'html':'UTF-8'}" title="{$seller_info->company|escape:'htmlall':'UTF-8'}'s Review" >
					{l s='Read More Article' mod='agilemultipleshop'}
				</a></div>
			</div>
			{/if}
			{if $logged !== true}
			<div id="seller-contact-form">
				<div class="seller_contact_header">{l s='Chat with us' mod='agilemultipleshop'}</div>
				<div class="seller_contact_container" >
				<div class="seller_contact_label">Login to start a Conversation with {if $seller_info->id_seller == 695}Nestle{else}this seller{/if}</div>
					<a href="/my-account" class="seller-contact-button btn btn-default" style="margin: 10px 0px 10px 0px; background:#fb4445; border:none; box-shadow:none; width:100%; border-radius:4px; color:white; font-weight:bold;">Login</a>
				</div>
			</div>
			{/if}
			{if $logged == true AND !$seller_info->sellerContactLoginRequired}
			<div id="seller-contact-form">
				<div class="seller_contact_header" style="display:block;">{l s='Chat With Us' mod='agilemultipleshop'}
					{if $onlineStatus == "Online"}
						<div style="float:right;">
							<div style="height:10px; width:10px; border-radius:50%; background:	#ADFF2F; display:inline-block;"></div>
							<span style="color:#DCDCDC; font-size:12px; font-weight:normal;">Online</span>
						</div>
					{else}
						<p style="color:#DCDCDC; font-size:12px; font-weight:normal;">{$onlineStatus}</p>
					{/if}
				</div>
				<div class="seller_contact_container">
				<div class="seller_contact_label">Start a Conversation with {if $seller_info->id_seller == 695}Nestle{else if $seller_info->id == 177}Nivea Baby Malaysia{else}this seller{/if}</div>
					<form action="{$link->getModuleLink("enlineamixmod","enlineamessengercustomer",array(),true)|escape:'html':'UTF-8'}?newchat=1&sellerid={$seller_info->id_seller}&sellername=" method="post">
					{*<form action="{$link->getModuleLink("enlineamixmod","enlineamessengercustomer",array(),true)|escape:'html':'UTF-8'}?newchat=1&sellerid={$seller_info->id_seller}&sellername={$seller_info->company|escape:'htmlall'}" method="post">*}
						<input type="hidden" name="sellerid" id="sellerid" value="{$seller_info->id_seller}" />
						<button type="submit" name="startConversation" id="startConversation" value="Chat" class="seller-contact-button" style="background:#fb4446; box-shadow:none;">Chat</button>
					</form>
				</div>
			</div>
			{/if}
			{if $seller_info->id_seller == 695 || $seller_info->id_seller == 344 || $seller_info->id_seller == 674 || $seller_info->id_seller == 739}
			<div id="seller-contact-form" class="{$seller_info->id_seller} contact-us-seller-form">
				<div class="seller_contact_header">{l s='Contact Us' mod='agilemultipleshop'}</div>
				<div class="seller_contact_container">
					{if $seller_info->sellerContactResult["error"] && count($seller_info->sellerContactResult["error"]) > 0 }
						<div class="alert">
							<ol>
							{foreach from=$seller_info->sellerContactResult["error"] item=contactResult name=sellercontactresult_list}
								<li>{$contactResult}</li>
							{/foreach}
							</ol>
						</div>
					{/if}
					<div></div>
					<form action="{$base_dir}" method="post" onsubmit="return sellerContactValidation();" enctype="multipart/form-data" id="sellerContactForm">
						<input type="hidden" name="sellerId" id="sellerId" value="{$seller_info->id_seller}" />
						<div class="seller_contact_label">{l s='Name' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_name" id="contact_name" value="{$seller_info->sellerContactResult["name"]}" /></div>
						<div class="seller_contact_label">{l s='Contact Number' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_no" id="contact_no" maxlength="100" value="{$seller_info->sellerContactResult["phone"]}"  /></div>
						<div class="seller_contact_label">{l s='Email' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><input type="text" name="contact_mail" id="contact_mail" maxlength="256" value="{$seller_info->sellerContactResult["mail"]}"  /></div>
						{*<div class="seller_contact_label">{l s='Comment' mod='agilemultipleshop'}</div>
						<div class="seller_contact_field"><textarea name="contact_comment" id="contact_comment" rows="6">{$seller_info->sellerContactResult["comment"]}</textarea></div>
						*}
						{if $seller_info->id_seller == 695 || $seller_info->id_seller == 674}
						<div class="seller_contact_label">{l s='Update you with the latest news, goodies and hot deals from Nestle Startwell2gether.' mod='agilemultipleshop'}</div>
						<div class="seller_contact_label col-md-6" style="padding-top:0;padding-bottom:15px;">
						<div>{l s='SMS' mod='agilemultipleshop'}</div>
						<input type="checkbox" name="check_sms" id="check_sms" value="withSms"/>
						</div>
						<div class="seller_contact_label col-md-6" style="padding-top:0;padding-bottom:15px;">
						<div>{l s='Email' mod='agilemultipleshop'}</div>
						<input type="checkbox" name="check_email" id="check_email" value="withEmail"/>
						</div>
						{/if}
						{if $seller_info->sellerContactCaptcha}
							<div class="seller_contact_label">{l s='Verification Text:' mod='agilesellermessenger'}</div>
							<div class="seller_contact_field">
								<span><input type="text" name="contact_captcha" id="contact_captcha" value="" /></span>
								<span class="seller_contacat_captcha_img"><img alt='antispam' src="{$base_dir_ssl}modules/agilesellermessenger/antispamimage.php" /></span>
							</div>
						{/if}
						{if $seller_info->sellerContactAttachment==1}
							<div class="seller_contact_label">{l s='Upload Photo' mod='agilemultipleshop'}</div>
							<div class="seller_contact_field">
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
								<input type="file" size="50" name="contact_attach" id="contact_attach" class="seller_contact_attach">
							</div>
						{/if}
						<div>
							<button type="submit" name="btnSubmitSellerContact" id="btnSubmitSellerContact" value="Submit" class="seller-contact-button">Submit</button>
						</div>
					</form>
				</div>
			</div>
			{/if}

			
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {ldelim}
		var errorDiv = $("div.alert", "div.seller_contact_container");
		if(errorDiv.length > 0) {ldelim}
			$('html, body').animate({ scrollTop: errorDiv.offset().top }, 1000);
		{rdelim}

		{if $seller_info->sellerContactResult["success"]} 
			alert("Thank you for your feedback. Our representative will contact you shortly.");
			//fbq('track', 'Lead');
		{/if}
	{rdelim});
	</script>

	{if $seller_info->sellerContactResult["success"]} 
	<!-- Google Code for Lead Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 953362167;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "e6DBCNzvv2MQ983MxgM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/953362167/?label=e6DBCNzvv2MQ983MxgM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	{/if}
{/if}
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homeslider.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homeslidersecond.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homesliderthird.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homesliderforth.js"></script>

