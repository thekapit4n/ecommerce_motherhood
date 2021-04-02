
<style>
	.motherhood-box-padding{
		padding-right : 25px;
		padding-left  : 25px;
	}
	
	.btn-register-now1{
		background-color:#23a6af;
		border:#23a6af;
		color:white;
		border-radius: 25px;
		width: 45%;
		padding-top:12px; 
		padding-bottom:12px;
		font-size: 14px;
		outline	:unset
	}
	
	.btn-register-now1:focus, .btn-register-now1:active, .btn-register-now1:hover{
		background-color:#066f75 !important;
		border:#066f75 !important;
		color:white;
	}
	
	.btn-register-now2{
		background-color:#f1ac00;
		border:#f1ac00;
		color:white;
		border-radius: 25px;
		width: 45%;
		padding-top:12px; 
		padding-bottom:12px;
		font-size: 14px;
		outline	:unset
	}
	
	.btn-register-now2:focus, .btn-register-now2:active, .btn-register-now2:hover{
		background-color:#db9803 !important;
		border:#db9803 !important;
		color:white;
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
		<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/main-banner-mct.png" class="img-responsive">
	</div>
	{if $sliderCampaign}
		{$sliderCampaign->content[1]}
	{/if}
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default" style="border-radius:20px;background-color: #f1ac00;outline: unset; box-shadow: none;border:unset;">
				<div class="panel-body">
					<div class="row">
						<div class="motherhood-box-padding" style="color:white">
							<center><h3 style="font-weight:700;">BECOME A TESTER</h3></center>
							<p style="font-size:14px;">
								Join our community of mom testers and <b>LEARN</b> about the latest products available in stores. Shop the best product for you and your family.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="motherhood-box-padding text-center" style="margin-bottom:10px;margin-top:10px;">
							<a href="https://www.motherhood.com.my/my-product-review?productreview=1" class="btn btn-default btn-register-now1">Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default" style="border-radius:20px;background-color: #23a6af;outline: unset; box-shadow: none;border:unset;">
				<div class="panel-body">
					<div class="row">
						<div class="motherhood-box-padding" style="color:white">
							<center><h3 style="font-weight:700;">SUBMIT REVIEW NOW</h3></center>
							<p style="font-size:14px;">
								<b>CUBA TRY</b> the products you are interested in. <b>REVIEW</b> and Share the products you have tested to help other new moms to shop better!
							</p>
						</div>
					</div>
					<div class="row">
						<div class="motherhood-box-padding text-center" style="margin-bottom:10px;margin-top:10px;">
							<a href="https://www.motherhood.com.my/my-product-review" class="btn btn-default btn-register-now2">Get Started</a>
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
	<div class="mmyslider" data-sliderid="16" data-imagepos="left" data-productid="35639,39057,38999,35011,38997,31540,13947,15263"></div>
	
	<div class="row" style="margin-top:20px;">
		<div id="section-slider">
		   <div class="section_container">
				<div class="section_title"><span>Our Community of tester Mamacubatry</span></div>
				<div id="section-thekapitan" class=" " style="border: 0px !important;">
				<ul class="clearfix row section_slidethekapitan section5   nbs-flexisel-ul">
					{for $imgno=1 to 13}
						<li class="nbs-flexisel-item" style="width: 262.5px;">
						   <div class="product-container">
							  <div class="left-block2">
								 <div class="product-image-container"><img class="img-responsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/images/mct{$imgno}.png" data-src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/images/mct{$imgno}.png" alt="testimonials_{$imgno}" title="testimonials_{$imgno}" itemprop="image" /></div>
							  </div>
						   </div>
						</li>
					{/for}
				 </ul>
				 <div class="clearfix"></div>
				<div style="padding-left: 30px; padding-right: 30px;text-align:center;margin-top:20px;">
					<a href="https://www.instagram.com/explore/tags/mamacubatry/" class="btn btn-default button button-medium" target="_blank" style="padding: 8px 40px; background-color: #ec3c65; font-size:14px; outline: unset; box-shadow: none;" rel="noopener"><i class="fab fa-instagram"></i> &nbsp; See more on Instagram </a> 
					<a href="https://www.facebook.com/hashtag/mamacubatry" class="btn btn-default button button-medium" target="_blank" style="padding: 8px 40px; background-color: #4474b6;font-size:14px; outline: unset; box-shadow: none;" rel="noopener"><i class="fab fa-facebook-square"></i> &nbsp; See more on Facebook </a></div>
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