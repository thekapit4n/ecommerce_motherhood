
<style>
	.motherhood-box-padding{
		padding-right : 25px;
		padding-left  : 25px;
	}
	
	.btn-register-now, .btn-register-now:focus, .btn-register-now:active, .btn-register-now:hover{
		background-color:#4c4c4d;
		border:#b4b3b4;
		color:white;
		border-radius: 25px;
		width: 45%;
		padding-top:12px; 
		padding-bottom:12px;
		font-size: 14px;
		outline	:unset
	}
	
	.btn-review-product,.btn-review-product:hover, btn-review-product:active, .btn-review-product:focus {
		width:25%;
	}
	
	.nbs-flexisel-container{
	   border:unset;
	}
	
	@media only screen and (max-width: 600px) {
		.btn-review-product, .btn-register-now{
			width:80%;
		}
		
	}

</style>
<meta property="og:url"        content="https://www.motherhood.com.my/mamacubatry/{$campaign.link_rewrite}" />
<meta property="og:type"       content="website" />
<meta property="og:title" content="{$meta_title}" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/tiny-slider/dist/tiny-slider.js"></script>

<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
<style>

</style>
<!-- MODULE mamacubatryproducts -->
<div class="container" style="font-size:13px;">
	<div class="row">
		<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/mct.png" class="img-responsive">
		<p style="font-weight: 600;font-size: 20px; margin-top: 10px;">From Mom to Mom – Over 3,000,000 Reviews to Help You Shop Better</p>
	</div>
	{if $sliderCampaign}
		{$sliderCampaign->content[1]}
	{/if}
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default" style="border-radius:20px;background-color: #fcc20fe0;outline: unset; box-shadow: none;border:unset;">
				<div class="panel-body">
					<div class="row">
						<div class="motherhood-box-padding" style="color:#4c4c4d">
							<center><h3 style="font-weight:700;">BECOME TESTER</h3></center>
							<p style="font-size:14px;">
								Join our community of mom testers and <b>LEARN</b> about the latest products available in stores. Shop the best product for you and your family.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="motherhood-box-padding text-center" style="margin-bottom:10px;margin-top:10px;">
							<a href="https://www.motherhood.com.my/my-product-review" class="btn btn-default btn-register-now">Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default" style="border-radius:20px;background-color: #24a7ae94;outline: unset; box-shadow: none;border:unset;">
				<div class="panel-body">
					<div class="row">
						<div class="motherhood-box-padding" style="color:#4c4c4d">
							<center><h3 style="font-weight:700;">SUBMIT REVIEW NOW</h3></center>
							<p style="font-size:14px;">
								<b>CUBA TRY</b> the products you are interested in. <b>REVIEW</b> and Share the products you have tested to help other new moms to shop better!
							</p>
						</div>
					</div>
					<div class="row">
						<div class="motherhood-box-padding text-center" style="margin-bottom:10px;margin-top:10px;">
							<a class="btn btn-default btn-register-now">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--
	<div class="row" style="margin-top:20px;">
		<div class="col-md-12">
			<div class="panel panel-default" style="border-radius:20px;background-color: #fcc20fe0;outline: unset; box-shadow: none;">
				<div class="panel-body">
					<div class="row">
						<div class="motherhood-box-padding" style="color:#4c4c4d">
							<center><h3 style="font-weight:700;">REVIEW PRODUCT</h3></center>
							<p style="font-size:14px;">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
								Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="motherhood-box-padding text-center" style="margin-bottom:10px;margin-top:10px;">
							<a href="https://www.motherhood.com.my/my-product-review" class="btn btn-default btn-register-now btn-review-product">Review Product</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	<div class="mmyslider" data-sliderid="16" data-imagepos="left"></div>
	<div class="row" style="margin-top:20px;">
		<div id="section-slider">
		   <div class="section_container">
				<div class="section_title"><span>Our Community of tester #MAMACUBATRY</span></div>
				<div id="section-thekapitan" class=" " style="border: 0px !important;">
				<ul class="clearfix row section_slidethekapitan section5   nbs-flexisel-ul">
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/1.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/1.jpg" alt="testimonials_1" title="testimonials_1" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/2.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/2.jpg" alt="testimonials_2" title="testimonials_2" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/3.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/3.jpg" alt="testimonials_3" title="testimonials_3" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/4.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/4.jpg" alt="testimonials_4" title="testimonials_4" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/5.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/5.jpg" alt="testimonials_5" title="testimonials_5" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/6.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/6.jpg" alt="testimonials_6" title="testimonials_6" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/7.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/7.jpg" alt="testimonials_7" title="testimonials_7" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/8.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/8.jpg" alt="testimonials_8" title="testimonials_8" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/9.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/9.jpg" alt="testimonials_9" title="testimonials_9" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/10.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/10.jpg" alt="testimonials_10" title="testimonials_10" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/11.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/11.jpg" alt="testimonials_11" title="testimonials_11" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
					<li class="nbs-flexisel-item" style="width: 262.5px;">
					   <div class="product-container">
						  <div class="left-block2">
							 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/12.jpg" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/12.jpg" alt="testimonials_12" title="testimonials_12" itemprop="image" /></div>
						  </div>
					   </div>
					</li>
				 </ul>
				 <div class="clearfix"></div>
				<div style="padding-left: 30px; padding-right: 30px;text-align:center;margin-top:20px;">
					<a href="https://www.instagram.com/explore/tags/motherhoodsuperkid/" class="btn btn-default button button-medium" target="_blank" style="padding: 8px 40px; background-color: #ec3c65; font-size:14px" rel="noopener"><i class="fab fa-instagram"></i> &nbsp; See more on Instagram </a> 
					<a href="https://www.facebook.com/hashtag/motherhoodsuperkid/?_rdc=1&amp;_rdr" class="btn btn-default button button-medium" target="_blank" style="padding: 8px 40px; background-color: #4474b6;font-size:14px" rel="noopener"><i class="fab fa-facebook-square"></i> &nbsp; See more on Facebook </a></div>
			  </div>
		   </div>
		</div>
	</div>
	<div class="row" style="margin-top:20px;">
		<div id="section-slider">
		   <div class="section_container">
				<div class="section_title"><span>our happy testers</span></div>
				<div style="text-align:center">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<iframe src="https://www.youtube.com/embed/iPwUddvzN1A?modestbranding=1&rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen" width="100%" height="315" frameborder="0">
						</iframe>
				   </div>
			   </div>
			</div>
		</div>
	</div>
	<div class="mmyslider" data-sliderid="132" data-imagepos="left"></div>
</div>
<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
{literal}
	<script type="text/javascript">
		$(function(){
			$('body').find('.section_slidethekapitan').flexisel({
      			visibleItems: 5,
      			flipPage: true,
      			animationSpeed: 500,
      			animationLoop: true,
      			clone: false,
      			autoPlay: false
      		});
		});
	</script>
{/literal}
<!-- END : MODULE mamacubatryproducts -->