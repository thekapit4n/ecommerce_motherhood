
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
	
	.row-padding-list-campaign{
		padding-right:15px;
		padding-left:15px;
	}
	
	.box-overlay-display {
		background-color: none;      
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		z-index:2;
		display:block !important;
	}
  
	.text-overlay{
		position: relative;
		top: 18%;
		left: 15%;
		font-size: 20px;
		color: #4f4f4f;
		transform: translate(-50%,-50%);
		-ms-transform: translate(-50%,-50%);
	}
	
	.ribbon-img{
		width:20%;
	}

	@media only screen and (max-width: 768px) {
		.btn-review-product, .btn-register-now{
			width:80%;
		}
		
		.bxslider-custom-kapitan{
			padding-right: 1px; 
			padding-left: 1px;
		}
	}
		
	<!--========= bx-slider-custom-css ====== -->
	.bxslider-custom-kapitan{
		padding-right: 30px; 
		padding-left: 1px;
	}
	
	.btn-try-now{
		border-radius: 0px;
		width: 100%;
	}
	
	.bxslider-custom-kapitan .bx-wrapper {
	  position: relative;
	  margin-bottom: 60px;
	  padding: 0;
	  *zoom: 1;
	  -ms-touch-action: pan-y;
	  touch-action: pan-y;
	}
	
	.bxslider-custom-kapitan .bx-wrapper img {
	  max-width: 100%;
	  display: block;
	}
	
	.bxslider-custom-kapitan .bxslider {
	  margin: 0;
	  padding: 0;
	  /*fix flickering when used background-image instead of <img> (on Chrome)*/
	  -webkit-perspective: 1000;
	}
	
	.bxslider-custom-kapitan ul.bxslider {
	  list-style: none;
	}
	
	.bxslider-custom-kapitan .bx-viewport {
	  /* fix other elements on the page moving (in Chrome) */
	  -webkit-transform: translateZ(0);
	}
	
	/** THEME
	===================================*/
	.bxslider-custom-kapitan .bx-wrapper {
	  -moz-box-shadow: none !important;
	  -webkit-box-shadow: none !important;
	  box-shadow: none !important;
	  border: none !important;
	  background: none !important;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-pager,
	.bx-wrapper .bx-controls-auto {
	  position: absolute;
	  bottom: -30px;
	  width: 100%;
	}
	
	/* LOADER */
	.bxslider-custom-kapitan .bx-wrapper .bx-loading {
	  min-height: 50px;
	  background: url('https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/images/bx_loader.gif') center center no-repeat #ffffff;
	  height: 100%;
	  width: 100%;
	  position: absolute;
	  top: 0;
	  left: 0;
	  z-index: 2000;
	}
	
	/* PAGER */
	.bxslider-custom-kapitan .bx-wrapper .bx-pager {
	  text-align: center;
	  font-size: .85em;
	  font-family: Arial;
	  font-weight: bold;
	  color: #ececec !important;
	  padding-top: 20px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-pager.bx-default-pager a {
	  background: #ececec !important;
	  text-indent: -9999px;
	  display: block;
	  width: 10px;
	  height: 10px;
	  margin: 0 5px;
	  outline: 0;
	  -moz-border-radius: 5px;
	  -webkit-border-radius: 5px;
	  border-radius: 5px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-pager.bx-default-pager a:hover,
	.bxslider-custom-kapitan .bx-wrapper .bx-pager.bx-default-pager a.active,
	.bxslider-custom-kapitan .bx-wrapper .bx-pager.bx-default-pager a:focus {
	  background: #939597 !important;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-pager-item,
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-controls-auto-item {
	  display: inline-block;
	  vertical-align: bottom;
	  *zoom: 1;
	  *display: inline;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-pager-item {
	  font-size: 0;
	  line-height: 0;
	}
	
	/* DIRECTION CONTROLS (NEXT / PREV) */
	.bxslider-custom-kapitan .bx-wrapper .bx-prev {
	  left: 10px;
	  background: url('https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/images/controls.png') no-repeat 0 -32px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-prev:hover,
	.bxslider-custom-kapitan .bx-wrapper .bx-prev:focus {
	  background-position: 0 0;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-next {
	  right: 10px;
	  background: url('https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/images/controls.png') no-repeat -43px -32px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-next:hover,
	.bxslider-custom-kapitan .bx-wrapper .bx-next:focus {
	  background-position: -43px 0;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-direction a {
	  position: absolute;
	  top: 50%;
	  margin-top: -16px;
	  outline: 0;
	  width: 32px;
	  height: 32px;
	  text-indent: -9999px;
	  z-index: 9999;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-direction a.disabled {
	  display: none;
	}
	
	/* AUTO CONTROLS (START / STOP) */
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto {
	  text-align: center;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-start {
	  display: block;
	  text-indent: -9999px;
	  width: 10px;
	  height: 11px;
	  outline: 0;
	  background: url('https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/images/controls.png') -86px -11px no-repeat;
	  margin: 0 3px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-start:hover,
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-start.active,
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-start:focus {
	  background-position: -86px 0;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-stop {
	  display: block;
	  text-indent: -9999px;
	  width: 9px;
	  height: 11px;
	  outline: 0;
	  background: url('images/controls.png') -86px -44px no-repeat;
	  margin: 0 3px;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-stop:hover,
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-stop.active,
	.bxslider-custom-kapitan .bx-wrapper .bx-controls-auto .bx-stop:focus {
	  background-position: -86px -33px;
	}
	
	/* PAGER WITH AUTO-CONTROLS HYBRID LAYOUT */
	.bxslider-custom-kapitan .bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager {
	  text-align: left;
	  width: 80%;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto {
	  right: 0;
	  width: 35px;
	}
	
	/* IMAGE CAPTIONS */
	.bxslider-custom-kapitan .bx-wrapper .bx-caption {
	  position: absolute;
	  bottom: 0;
	  left: 0;
	  background: #666;
	  background: rgba(80, 80, 80, 0.75);
	  width: 100%;
	}
	
	.bxslider-custom-kapitan .bx-wrapper .bx-caption span {
	  color: #fff;
	  font-family: Arial;
	  display: block;
	  font-size: .85em;
	  padding: 10px;
	}
	
	<!--========= end bx-slider-custom-css ====== -->
</style>
<meta property="og:url"        content="https://www.motherhood.com.my/mamacubatry/{$campaign.link_rewrite}" />
<meta property="og:type"       content="website" />
<meta property="og:title" content="{$meta_title}" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/tiny-slider/dist/tiny-slider.js"></script>
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/jquery.bxslider.min.js"></script>
<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bxslider-4.2.15/dist/jquery.bxslider-custom.css" rel="stylesheet" />

<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
<style>

</style>
<!-- MODULE mamacubatryproducts -->
<div class="container" style="font-size:13px;">
	
	<!--
	<div class="row">
		<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Mamacubatry/main-banner-mct.png" class="img-responsive">
	</div>
	-->
	
	{if $mainBanner}
		{$mainBanner->content[1]}
	{/if}
	

	{if $sliderCampaign}
		{$sliderCampaign->content[1]}
	{/if}
	
	{if $sliderlistTester}
		{$sliderlistTester->content[1]}
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
							<a href="https://www.motherhood.com.my/my-product-review?productreview=1" class="btn btn-default btn-register-now2">Get Started</a>
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
							<a href="https://www.motherhood.com.my/my-product-review?productreview=1" class="btn btn-default btn-register-now btn-review-product">Review Product</a>
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
			
			$('body').find('.section_slidethekapitan2').flexisel({
      			visibleItems: 5,
      			flipPage: true,
      			animationSpeed: 500,
      			animationLoop: true,
      			clone: false,
      			autoPlay: false
      		});
			
			$(".homeslider-description").click(function () {
				window.location.href = $(this).prev("a").prop("href");
			});

			$("#homepage-slider").closest("#columns").addClass("home-columns");
			$('body').find(".mamacubatryslider").bxSlider({
				useCSS: false,
				maxSlides: 1,
				slideWidth: 1170,
				infiniteLoop: true,
				hideControlOnEnd: true,
				pager: true,
				autoHover: true,
				auto: true,
				speed: 500,
				pause: 5000,
				controls: true,
			});
			
			
		});
	</script>
{/literal}
<!-- END : MODULE mamacubatryproducts -->