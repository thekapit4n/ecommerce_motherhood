
{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newersend_friend_form_content
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* author 		: Haiqal Halim <haiqal.halim@nurengroup.com>
* created date 	: 28/12/2020
* modified date : 28/12/2020
*
*}
<style>
	.btn-pill{
		border-radius:25px;
	}

	.btn-pill-color, btn-pill-color:hover{
		background-color: #f3866f;
		color: white;
		border-color: #f3866f;
		padding-left: 12px;
		padding-right: 12px;
		padding-top: 7px;
		padding-bottom: 7px;
	}

	.btn-pill-color:hover{
		background-color: #ec3a47;
		color: white !important;
		border-color: #ec3a47;
	}
	
	.font-weight-7x{
		font-weight: 700;
	}
	
	.text-decoration-userful:hover{
	    text-decoration: underline;
	}
	
	@media screen and (min-width: 600px)  {
        .mobile-break { display: none; }
    }
</style>
<div id="idTab5">
	<div id="product_comments_block_tab" class="kapitan-product-details">
		<div class="row" style="margin-bottom: 15px;">
			<div class="col-xs-6 col-md-6">
				<span style="font-size:25px" class="font-weight-7x"><font style="font-size:32px;color:#555454">{$averageTotal}</font>/5</span>
				
				<div class="clearfix"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
					{section name="i" start=0 loop=5 step=1}
						{if $averageTotal le $smarty.section.i.index}
							<div class="star"></div>
						{else}
							<div class="star star_on"></div>
						{/if}
					{/section}
					<meta itemprop="worstRating" content = "0" />
					<meta itemprop="ratingValue" content = "{$comment.grade|escape:'html':'UTF-8'}" />
					<meta itemprop="bestRating" content = "5" />
					&nbsp;<br class="mobile-break">
						<font style="color:black;">
							{count($comments)}
							{if count($comments) > 1}
								Reviews
							{else}
								Review
							{/if}
						</font>
				</div>
			</div>
			<div class="col-xs-6 col-md-6 text-right">
				{if (!$too_early AND ($is_logged OR $allow_guests))}
					<a id="new_comment_tab_btn" href="#new_comment_form" type="button" class="btn btn-default btn-pill btn-pill-color open-comment-form" style="color:white;">
					{l s='Leave Review' mod='productcomments'}
					</a>
				{/if}
			</div>
		</div>
		{if $comments}
			<span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
				<meta itemprop="ratingValue" content="{$averageTotal}" />
				<meta itemprop="bestRating" content="5" />
				<meta itemprop="reviewCount" content="{count($comments)}" />
			</span>
			{foreach from=$comments item=comment}
				{if $comment.content}
				<div class="comment row" itemprop="review" itemscope itemtype="http://schema.org/Review">
					<div class="comment_author col-sm-2">
						<div class="clearfix"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
							{section name="i" start=0 loop=5 step=1}
								{if $comment.grade le $smarty.section.i.index}
									<div class="star"></div>
								{else}
									<div class="star star_on"></div>
								{/if}
							{/section}
            				<meta itemprop="worstRating" content = "0" />
							<meta itemprop="ratingValue" content = "{$comment.grade|escape:'html':'UTF-8'}" />
            				<meta itemprop="bestRating" content = "5" />
						</div>
						<div class="comment_author_infos">
							<strong itemprop="author">{$comment.customer_name|escape:'html':'UTF-8'} -</strong>
							<meta itemprop="datePublished" content="{$comment.date_add|escape:'html':'UTF-8'|substr:0:10}" />
							<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>
						</div>
					</div> <!-- .comment_author -->

					<div class="comment_details col-sm-10" style="border-left: 0px solid #d6d4d4;">
						{if $comment.img_url != null}
						{else}{/if}
						<p itemprop="name" class="title_block">
							<strong>{$comment.title}</strong>
						</p>
						<p itemprop="reviewBody">{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
						<ul>
							{if $comment.total_advice > 0}
								<li>
									{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}
								</li>
							{/if}
							{if $is_logged}
								{if !$comment.customer_advice}
								<li>
									{l s='Was this comment useful to you?' mod='productcomments'}
										<a href="javascript:;" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}" class="usefulness_btn ">
											<span class="text-decoration-userful">{l s='Yes' mod='productcomments'}</span>
										</a>
										&nbsp;
										<a href="javascript:;" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}" class="usefulness_btn">
											<span class="text-decoration-userful">{l s='No' mod='productcomments'}</span>
										</a>
								</li>
								{/if}
								{if !$comment.customer_report}
								<li>
									<span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">
										{l s='Report abuse' mod='productcomments'}
									</span>
								</li>
								{/if}
							{/if}
						</ul>
						{if $comment.img_url}
							<img src="{$comment.img_url}" class="img-responsive" width="200px" />
						{/if}
					</div><!-- .comment_details -->

				</div> <!-- .comment -->
				{/if}
			{/foreach}
		{else}
			{if (!$too_early AND ($is_logged OR $allow_guests))}
			{else}
			<p class="align_center">{l s='No customer comments for the moment.' mod='productcomments'}</p>
			{/if}
		{/if}
	</div> <!-- #product_comments_block_tab -->
</div>

<!-- Fancybox -->
<div style="display: none;">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#" enctype="multipart/form-data">
			<h2 class="page-subheading">
				{l s='Write a review' mod='productcomments'}
			</h2>
			<div class="row">
				{if isset($product) && $product}
					<div class="product clearfix  col-xs-12 col-sm-6">
						<img src="{$productcomment_cover_image}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$product->name|escape:'html':'UTF-8'}" />
						<div class="product_desc">
							<p class="product_name">
								<strong>{$product->name}</strong>
							</p>
							{$product->description_short}
						</div>
					</div>
				{/if}
				<div class="new_comment_form_content col-xs-12 col-sm-6">
					<h2>{l s='Write a review' mod='productcomments'}</h2>
					<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
						<ul></ul>
					</div>
					{if $criterions|@count > 0}
						<ul id="criterions_list">
						{foreach from=$criterions item='criterion'}
							<li>
								<label>{$criterion.name|escape:'html':'UTF-8'}:</label>
								<div class="star_content">
									<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
									<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
									<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" checked="checked" />
									<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" />
									<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
								</div>
								<div class="clearfix"></div>
							</li>
						{/foreach}
						</ul>
					{/if}
					<label for="comment_title">
						{l s='Title' mod='productcomments'}: <sup class="required">*</sup>
					</label>
					<input id="comment_title" name="title" type="text" value=""/>
					<label for="content">
						{l s='Comment' mod='productcomments'}: <sup class="required">*</sup>
					</label>
					<textarea id="content" name="content"></textarea>
					{if $allow_guests == true && !$is_logged}
						<label>
							{l s='Your name' mod='productcomments'}: <sup class="required">*</sup>
						</label>
						<input id="commentCustomerName" name="customer_name" type="text" value=""/>
					{/if}
					<label id='wordscomment'>30 characters left to qualify for review reward pointsInThemeLOL</label>
					
					<input type="file" id="img_url" name="img_url" />

					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}' />
						<p class="fl required"><sup>*</sup> {l s='Required fields' mod='productcomments'}</p>
						<p class="fr">
							<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small">
								<span>{l s='Send' mod='productcomments'}</span>
							</button>&nbsp;
							{l s='or' mod='productcomments'}&nbsp;
							<a class="closefb" href="#">
								{l s='Cancel' mod='productcomments'}
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
{strip}
{addJsDef productcomments_controller_url=$productcomments_controller_url|@addcslashes:'\''}
{addJsDef moderation_active=$moderation_active|boolval}
{addJsDef productcomments_url_rewrite=$productcomments_url_rewriting_activated|boolval}
{addJsDef secure_key=$secure_key}

{addJsDefL name=confirm_report_message}{l s='Are you sure that you want to report this review?' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_added}{l s='Your review has been added!' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_added_moderation}{l s='Your review has been added and will be available once approved. Review more products to win daily reward points!' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_title}{l s='New review' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_ok}{l s='OK' mod='productcomments' js=1}{/addJsDefL}
{/strip}
<script type="text/javascript">

var minlengthofcomment = 30;
$('#content').keyup(function() {
  var length = $(this).val().length;
  var length = minlengthofcomment-length;
  if (length > 0)
	$('#wordscomment').text(length+' characters left to qualify for review reward points');
  else
	$('#wordscomment').text('Submit product review to get reward points.');
  
});
</script>

