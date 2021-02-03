<style>
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
}

.btn-pill-color:hover, .btn-pill-color:focus{
	background-color: #ec3a47 !important;
    color: white !important;
    border-color: #ec3a47 !important;
}

.font-color-turquoise{
	color:#38a7ac
}

.font-weight-7x{
	font-weight: 700;
}

.div-review{
	padding-top: 20px;
	padding-bottom: 20px;
}
	
.star-align{
	display: flex;
    align-items: center;
    justify-content: center;
}

.image-display
{
	width: 100%;
}
	
/* css for other than mobile view */	
@media only screen and (max-width: 600px) {
	.div-review{
		padding-top: 50px;
		padding-bottom: 50px;
	}
	
	.image-display { 
		width: 70%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	
	.btn-pill-color, btn-pill-color:hover, btn-pill-color:focus{
		padding-left: 80px;
		padding-right: 80px;
		padding-top: 13px;
		padding-bottom: 13px;
		font-size: 16px;
	}
}

</style>

<!-- MODULE enlineaproductreview -->

<h3 id="#idTab5" class="idTabHrefShort page-product-heading">Product Reviews{if $sellername} - {$sellername}{/if}</h3> 
<div id="idTab5">
	<div id="product_comments_block_tab">
		{if $comments}
			{assign var = countReview value = 0}
			{foreach from=$comments item=comment}
				{assign var = countReview value = $countReview+1}
				{if $comment.content}
				{assign var="product" value=$comment.product}
					<div class="panel panel-default" style="margin-bottom:10px;">
						<div class="panel-body">
							<div class="row" itemprop="review" itemscope itemtype="http://schema.org/Review">
								<div class="comment_author col-sm-2 col-lg-2">
									{if $product.new_product OR $product.best_seller OR $product.free_deliver OR $product.best_price OR $product.custom_tag > 0}
									<div class="product-tag 
										{if $product.new_product}
											new-product
										{elseif $product.best_seller}
											best-seller
										{elseif $product.free_deliver}
											free-deliver
										{elseif $product.best_price}
											best-price
										{elseif $product.custom_tag==5}
											custom-tag5
										{elseif $product.custom_tag==6}
											custom-tag6
										{elseif $product.custom_tag==7}
											custom-tag7
										{elseif $product.custom_tag==8}
											custom-tag8
									{/if}">
										<span class="tooltiptext">
											{if $product.new_product}
												New Product{elseif $product.best_seller}
												Best Seller
											{elseif $product.free_deliver}
												Free Delivery
											{elseif $product.best_price}
												Best Price Guaranteed
											{/if}
										</span>
									</div>
									{/if}
									<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
										<img class="replace-2x img-responsive image-display" src="{$link->getMediaLink("/img/default-product-placeholder.gif")}" data-src="{$product.imgLink|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
									</a>
								</div> <!-- .comment_author -->

								<div class="col-sm-7 col-lg-8">
									<div class="row">
										<div class="col-sm-12">
											<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
												<h4 class="font-color-turquoise font-weight-7x">{$product.name|escape:'html':'UTF-8'}</h4>
											</a>
											<p itemprop="name" class="title_block">
												<strong>{$comment.title}</strong>
											</p>
											<p itemprop="reviewBody">{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
											<ul>
												{if $comment.total_advice > 0}
													<li>
														{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}
													</li>
												{/if}<!---
												{if $is_logged}
													{if !$comment.customer_advice}
													<li>
														{l s='Was this comment useful to you?' mod='productcomments'}
														<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}">
															<span>{l s='Yes' mod='productcomments'}</span>
														</button>
														<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}">
															<span>{l s='No' mod='productcomments'}</span>
														</button>
													</li>
													{/if}
													{if !$comment.customer_report}
													<li>
														<span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">
															{l s='Report abuse' mod='productcomments'}
														</span>
													</li>
													{/if}
												{/if}--->
											</ul>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-6">
											<p>
												<font class="font-weight-7x">Quantity : 1</font>
											</p>
										</div>
									</div>
									
									<div class="row">
										<div class=" col-sm-4">
											<p>
												REFERENCE
												<br/>
												<font class="font-color-turquoise font-weight-7x">083589</font>
											</p>
										</div>
										<div class="col-sm-4">
											<p>
												ORDER REFERENCE
												<br/>
												<font class="font-color-turquoise font-weight-7x">Testing Order Ref 1</font>
											</p>
										</div>
										<div class=" col-sm-4">
											<p>
												ORDER DATE 
												<br/>
												<font class="font-color-turquoise font-weight-7x">{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</font>
											</p>
										</div>
									</div>
								</div>
								<!-- .comment_details -->
								<div class="col-xs-12 col-sm-3 col-lg-2">
									<div class="div-review text-center">
										{if $countReview == 2	}
											<div class="row">
												<div class="col-sm-12">
													<span style="font-size:17px" class="font-weight-7x"><font style="font-size:20px;color:#555454">3.0</font>/5</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="clearfix star-align"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" >
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
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<font style="color:#555454"><i class="fa fa-eye"></i>&nbsp;See review</font>
												</div>
											</div>
										{else}
											<button type="button" class="btn btn-default btn-pill btn-pill-color">Write Review</button>
										{/if}
									</div>
								</div>
							</div> <!-- .comment -->
						</div>
					</div>
					<div class="clearfix"></div>
					
				<div class="clearfix"></div>
			{/if}
			{/foreach}{/if}
            <hr />
			 {include file="$tpl_dir./pagination.tpl"}

	</div> <!-- #product_comments_block_tab -->
</div>
<!-- END : MODULE enlineaproductreview -->