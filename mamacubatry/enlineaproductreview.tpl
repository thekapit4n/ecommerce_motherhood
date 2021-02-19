<style>
	.padding-review-15
	{
		padding-left:15px;
	}
	
	.margin-top-review
	{
		margin-top:5px;
	}
	
	.star-align{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
	.featured-highlight{
		border-left: 4px solid #38a7aa;
		padding: 8px;
		box-shadow: 4px 1px 11px 1px #b4b3b473;
	}
</style>

<!-- MODULE enlineaproductreview -->
<!-- Gallery -->
<link rel="stylesheet" href="/modules/popupnotification/css/magnific-popup.css" type="text/css" media="all" />
<script type="text/javascript" src="/modules/popupnotification/js/jquery.magnific-popup.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by www.motherhood.com.my</small>';
			}
		}
	});
});
</script>
<h3 id="#idTab5" class="idTabHrefShort page-product-heading">Product Reviews{if $sellername} - {$sellername}{/if}</h3> 
<div id="idTab5">
	<div id="product_comments_block_tab">
		{if $comments}
			{assign var = countReview value = 0}
			{foreach from=$comments item=comment}
				{assign var = countReview value = $countReview+1}
				{if $comment.content}
				{assign var="product" value=$comment.product}
					<div class="panel panel-default" style="border: 0px;box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);">
						<div class="panel-body">
							<div class="clearfix"></div>
							<div class="comment row {if $comment.highlight}featured-highlight{/if}" itemscope itemtype="http://schema.org/Product" style= 'border-top:0px;'>
								<div class="comment_author col-sm-2" itemprop="review" itemscope itemtype="http://schema.org/Review" >
									<!-- /Edited by Keith Yeoh, 04:58 p.m -->
									<!--
									<span>Grade&nbsp;</span>
									-->
									
									{if $product.new_product OR $product.best_seller OR $product.free_deliver OR $product.best_price OR $product.custom_tag > 0}
									<div class="product-tag {if $product.new_product}new-product{elseif $product.best_seller}best-seller{elseif $product.free_deliver}free-deliver{elseif $product.best_price}best-price
										{elseif $product.custom_tag==5}custom-tag5{elseif $product.custom_tag==6}custom-tag6{elseif $product.custom_tag==7}custom-tag7{elseif $product.custom_tag==8}custom-tag8
										{/if}">
										<span class="tooltiptext">{if $product.new_product}New Product{elseif $product.best_seller}Best Seller{elseif $product.free_deliver}Free Delivery{elseif $product.best_price}Best Price Guaranteed{/if}</span>
									</div>
									{/if}
									<div class="row">
										<div class="col-md-12">
											<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
												<img class="replace-2x img-responsive" src="{$link->getMediaLink("/img/default-product-placeholder.gif")}" data-src="{$product.imgLink|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}"  width="100%" itemprop="image" />
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-center">
											<div style="padding-left: 20px;padding-right: 20px; margin-top: 5px;">
												<div class="clearfix star-align"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
													{section name="i" start=0 loop=5 step=1}
														{if $comment.avg_grade le $smarty.section.i.index}
															<div class="star"></div>
														{else}
															<div class="star star_on"></div>
														{/if}
													{/section}
													<meta itemprop="worstRating" content = "{$comment.worst_grade|escape:'html':'UTF-8'}" />
													<meta itemprop="ratingValue" content = "{$comment.grade|escape:'html':'UTF-8'}" />
													<meta itemprop="bestRating" content = "{$comment.best_grade|escape:'html':'UTF-8'}" />
												</div>
											</div>
											<div class="comment_author_infos">
												{$comment.avg_grade2} from {$comment.count_others} Reviews
											</div>
											<div itemprop="author" style='visibility:hidden;display:none'>{$comment.customer_name|escape:'html':'UTF-8'}</div>
										</div>
									</div>
								</div> <!-- .comment_author -->

								<div class="comment_details col-sm-10 " style="border-left:0px;" >
									<div class="row" style="padding-top: 20px;">
										<div class="col-md-10 col-xs-10">
											<div style="padding-left:3px;">
												<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">
													<h4 style="color:#000000; font-weight:bold;">{$product.name|escape:'html':'UTF-8'}</h4>
												</a>
											</div>
										</div>
										<div class="col-md-2 col-xs-2 text-right">
											{if $is_logged}
												{if $comment.isTester}
													<font style="font-size:30px;color:#30a7ad"><i class="fas fa-award"></i></font>
												{/if}
											{/if}
										</div>
									</div>
									<div class="row">
										<div style="margin-top:15px;">
											<div class="col-md-1 col-xs-2">
												<font style="font-size:35px;color:#30a7ad"><i class="fas fa-user-circle"></i></font>
											</div>
											<div class="col-md-10 col-xs-10 text-left">
												<div style="padding-top: 7px; padding-bottom: 7px;">
													<font style="color:#000000; font-weight:bold;font-size:15px;" itemprop="author">{$comment.customer_name|escape:'html':'UTF-8'}</font>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div style="margin-top:5px;">
											<div class="col-md-1 col-xs-2">
												&nbsp;
											</div>
											<div class="col-md-10 col-xs-10 text-left">
												<div class="row">
													<div class="padding-review-15">
														<div style='display: inline-block;'>
														{section name="i" start=0 loop=5 step=1}
															{if $comment.grade le $smarty.section.i.index}
																<div class="star"></div>
															{else}
																<div class="star star_on"></div>
															{/if}
														{/section}
														</div>
														<br>
														<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>
													</div>
												</div>
												<div class="row">
													<div class="padding-review-15 margin-top-review">
														<!-- Comment Uploaded Image -->
														<div class="popup-gallery">
															<div class="col-sm-2" style="padding-left:0;">
																{if $comment.img_url && $comment.img_url != null && $comment.img_url != 'null'}
																	<a title="{$comment.title}" href="{$comment.img_url|replace:'_small_':''}" width="100%" />
																	<img src="{$comment.img_url}" width="100%" /></a>
																{/if}
															</div>
														</div>
														<div itemprop="name" style='visibility:hidden;display:none'> {$product.name|escape:'html':'UTF-8'}	</div>
													</div>
												</div>
												<div class="row">
													<div class="padding-review-15 margin-top-review">
														<p itemprop="name" class="title_block">
															<strong>{$comment.title}</strong>
														</p>
														<p itemprop="reviewBody">{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
													</div>
												</div>
												<div class="row">
													<div class="padding-review-15 margin-top-review">
														{if $comment.count_others > 1}
															<a href="{$product.link|escape:'html':'UTF-8'}#idTab5" title="{$product.name|escape:'html':'UTF-8'}">Read all {$comment.count_others} Reviews</a>
														{/if}
													</div>
												</div>
												<div class="row">
													<div class="padding-review-15 margin-top-review">
														{if $comment.total_advice > 0}
															{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}
														{/if}
													</div>
												</div>
												<div class="row" style="min-height:52px;">
													<div class="padding-review-15 margin-top-review">
														{if $is_logged}
															{if $comment.isTester}
																<img src='https://cdn.motherhood.com.my/assets/images/tag-verified-tester.png' height='30px'>&nbsp;&nbsp;&nbsp;
															{/if}
															{if !$comment.customer_advice}
															<span>
																{l s='Did you find this review useful?' mod='productcomments'}
																<button class="usefulness_btn btn btn-default button button-small {$comment.customer_advice}" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}" style="background:transparent;">
																	<span style="color:#2fa7ad;padding-top: 0px;padding-bottom: 0px;">{l s='YES' mod='productcomments'}</span>
																</button> | 
																<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}" style="background:transparent;">
																	<span style="color:#2fa7ad;padding-top: 0px;padding-bottom: 0px;">{l s='NO' mod='productcomments'}</span>
																</button>
																</span>
															{/if}
															<!---
															{if !$comment.customer_report}
															<li>
																<span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">
																	{l s='Report abuse' mod='productcomments'}
																</span>
															</li>
															{/if}
															--->
														{/if}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- .comment_details -->
							</div> 						<!-- .comment -->
							<div class="clearfix"></div>
						</div>
					</div>
				{/if}
			{/foreach}
		{/if}
        <hr />
		{include file="$tpl_dir./pagination.tpl"}
	</div> <!-- #product_comments_block_tab -->
</div>
<!-- END : MODULE enlineaproductreview -->
<script>
	
		$('button.usefulness_btn').click(function() {
			var id_product_comment = $(this).data('id-product-comment');
			var is_usefull = $(this).data('is-usefull');
			var parent = $(this).parent();

			$.ajax({
				url: '/module/productcomments/default?rand=' + new Date().getTime(),
				data: {
					id_product_comment: id_product_comment,
					action: 'comment_is_usefull',
					value: is_usefull
				},
				type: 'POST',
				headers: { "cache-control": "no-cache" },
				success: function(result){
					parent.fadeOut('slow', function() {
						parent.remove();
					});
				}
			});
		});
</script>