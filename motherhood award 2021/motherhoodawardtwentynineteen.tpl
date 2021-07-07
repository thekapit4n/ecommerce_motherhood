{capture name=path}
<span class="navigation-pipe">{$navigationPipe}</span>
	{l s='Motherhood award 2019'  mod='enlineamixmod'}
{/capture}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../modules/enlineamixmod/views/css/motherhoodchoicevoting.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" href="../js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />
<script type="text/javascript" src="../modules/enlineamixmod/views/js/motherhoodchoicevoting.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js'></script>
<link rel="stylesheet" href="../modules/popupnotification/css/magnific-popup.css" type="text/css" media="all" />
<script type="text/javascript" src="/modules/popupnotification/js/jquery.magnific-popup.min.js"></script>
<style>
#slider_row{
	display:none;
}

.columns-container{
    /*background:#d9b576;*/
	background:white;
	color:black;
	font-family: 'Poppins', sans-serif;
}

#center_column{
	background:#d9b576;
}

.breadcrumb{
    background:black;
    color:#daa64a;
}
.breadcrumb a.home{
    color:#daa64a;
}
.breadcrumb a:after{
  background:#daa64a;
}

.section-button{
	background-image: linear-gradient(#f3e8d5 50%, #d9b576 50%);
}


.col-btn-category{
	text-align:center;
}

.btn-category{
	padding-top:10px;
    padding-bottom: 10px;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    padding-right: 15px;
	background-color:black;
	border-color: black;
	color:#d9b576;
	outline:unset;
	margin-right:8px;
}

.btn-category:hover, .btn-category:focus, .btn-category:active{
	border-color: #d9b576;
	background-color:black;
	color:#f3e8d5;
	outline: unset;
}

.no-padding {
  padding-left: 0;
  padding-right: 0;
}

.row-padding-mmy{
	padding-left: 15px;
    padding-right: 15px;
	margin-top: 15px;
}

.category-title{
	color:black;
	font-weight:600;
	font-family: 'Poppins', sans-serif;
}

.category-title::before{
	background-image: url(https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/mmy-award/2021/assets/mmyicon/arrow-kanan.svg );
	background-size: 100% 100%;
	display: inline-block;
	width: 215px;
	height: 35px;
	content: "";
	position: relative;
	top: 7px;
}

.category-title::after{
	background-image: url(https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/mmy-award/2021/assets/mmyicon/arrow-kiri.svg);
	background-size: 100% 100%;
	display: inline-block;
	width: 215px;
	height: 35px;
	content: "";
	position: relative;
	top: 7px;
}

.img-category{
	margin-bottom:25px;
	background:#d9b576;
	border:0px;
}

.pop-out-img, .pop-out-img:hover, .pop-out-img:focus, .pop-out-img:active, .pop-out-img:focus-visible{
	outline:none;
	color: unset;
	text-decoration: unset;
}

.product-link{
	color:black !important;
}

.div-product-desc{
	min-height:125px;
}

.product-name{
	color:#8c7054;
	font-weight:500;
	font-size:16px;
	min-height:50px;
}

.product-award{
	color:black;
	font-weight:500;
	font-size:14px;
	margin-bottom:3px;
}

.product-link{
	color:black;
	font-weight:500;
	font-size:14px
}



@media only screen and (max-width: 600px) {
	.btn-category{
		margin-bottom:15px; 
	}
	
	.col-btn-category{
		text-align:left;
	}
	
	.btn-block-xs-only {
		display: block;
		width: 100%;
	}
	
	.category-title::after,.category-title::before{
		content:unset;
	}
	
	.section-button{
		background-image: unset;
		margin-top:15px;
		margin-bottom:15px;
	}
	
	.item-layout{
		padding-left:1px;
		padding-right:1px;
	}
	
	.product-name{
		font-size:13px;
		line-height: 17px;
		margin-bottom:5%;
		min-height:28px;
	}

	.product-award{
		font-size:15px;
		line-height: 16px;
	}
	
	.item-layout-pregnant .product-award{
		min-height: 50px;
	}
	
	.item-layout-pregnant .product-name{
		min-height: 35px;
	}
	
	.item-layout-newborn .product-award{
		min-height: 65px;
	}
	
	.item-layout-newborn .product-name{
		min-height: 54px;
	}
	
	.item-layout-toddler .product-award{
		min-height: 54px;
	}
	
	.item-layout-toddler .product-name{
		min-height: 51px;
	}
	
	.item-layout-family .product-name{
		min-height: 51px;
	}

	.product-link{
		font-size:13px;
		margin-bottom:2%;
		min-height:18px;
	}
	
	.row-padding-mmy{
		margin-top: 1px;
	}
}

</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
<!-- MODULE motherhood award 2019 -->

<div class="container-fluid no-padding">
	<section class="hero-banner">
		<div class="row">
			<div class="col-md-12">
				<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Motherhood+Choice+Awards+2021/Website+banner/motherhoodchoiceawardbanner-2019.png" alt="placeholder 960" class="img-responsive" />
			</div>
		</div>
	</section>
	<section class="section-button">
		<div class="row">
			<div class="col-md-12 col-btn-category">
				<a href="https://www.motherhood.com.my/motherhood-award-2019" class="btn btn-primary btn-category btn-block-xs-only">Winners 2019</a>
				<button class="btn btn-primary btn-category awardpresentation btn-block-xs-only">Award Presentation</button>
				<button class="btn btn-primary btn-category awardlaunch btn-block-xs-only">Award Launch</button>
				<a href="https://www.motherhood.com.my/motherhood-award2021#photogallery" class="btn btn-primary btn-category btn-block-xs-only">Photo Gallery</a>
				<a href="https://www.motherhood.com.my/motherhood-award2021#pressreleases" class="btn btn-primary btn-category btn-block-xs-only">Press Releases</a>
			</div>
		</div>
    </section>
</div>
<div class="container">
   
  
    <!-- Menu -->
	<!--
    <div class="row content" style="text-align:center;padding-bottom:50px;">
        <h1 class="sub_category">Congratulation to all winners</h1>
    </div>

    <div class="row" style="text-align:center;padding-bottom:50px;">
        <div class="col-md-4">
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-poppy-seat/" target="_blank">
                <img src="https://cdn.motherhood.com.my/assets/images/motherhood-awards-2019/mca-ps.png" class="img-reponsive" width="100%" />
            </a>
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-poppy-seat/" style="font-weight:bold;color:black;margin-top:10px;" id="shareableLink" class="btn btn-default detail-btn"  target="blank">Read More</a>
        </div>
        <div class="col-md-4">
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-bubbles-steam-dry-sterilizer/" target="_blank">
                <img src="https://cdn.motherhood.com.my/assets/images/motherhood-awards-2019/mcabs.png" class="img-responsive" width="100%" />
            </a>
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-bubbles-steam-dry-sterilizer/" style="font-weight:bold;color:black;margin-top:10px;" id="shareableLink" class="btn btn-default detail-btn" target="blank">Read More</a>
        </div>
        <div class="col-md-4">
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-philips-avent-newborn-starter-set/" target="_blank">
                <img src="https://cdn.motherhood.com.my/assets/images/motherhood-awards-2019/mca-pa.png" class="img-responsive" width="100%" />
            </a>
            <a href="https://story.motherhood.com.my/blog/motherhood-choice-awards-2019-top-3-most-voted-winner-philips-avent-newborn-starter-set/" style="font-weight:bold;color:black;margin-top:10px;" id="shareableLink" class="btn btn-default detail-btn" target="_blank">Read More</a>
        </div>
    </div>
	-->
	
	<!-- pregnant mom category --->
	<div class="row">
		<div class="row row-padding-mmy">
			<div class="col-md-12 text-center">
				<h3 class="category-title">Pregnant Mom Category</h3>
			</div>
		</div>
		<div class="row row-padding-mmy">
			{foreach from=$arr_productlist.pregnant item=arrdetails}
				<div class="col-md-4 col-xs-6 item-layout item-layout-pregnant">
					<div class="thumbnail img-category">
						<a href="{$arrdetails.imagelink}" class="pop-out-img">
							<img src="{$arrdetails.imagelink}" alt="Lights" style="width:100%">
						</a>
						<div class="caption div-product-desc">
							<p class="product-award">{$arrdetails.awardname}</p>
							<p class="product-name">{$arrdetails.productname}</p>
							<p class="product-link">
								{if $arrdetails.purchaselink != ''}
									<a  href="{$arrpregnant.purchaselink}" class="product-link" target="_blank"> Buy now </a> 
								{/if}
								
								{if $arrdetails.purchaselink != '' && $arrdetails.storylink != ''} 
								 |
								{/if}
								{if $arrdetails.storylink != ''}
									<a href="{$arrdetails.storylink}" class="product-link" target="_blank"> Story </a>
								{/if}
							</p>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
	
	<!-- newborn --->
	<div class="row">
		<div class="row row-padding-mmy">
			<div class="col-md-12 text-center">
				<h3 class="category-title">Newborn Category</h3>
			</div>
		</div>
		<div class="row row-padding-mmy">
			{foreach from=$arr_productlist.newborn item=arrdetails}
				<div class="col-md-4 col-xs-6 item-layout item-layout-newborn">
					<div class="thumbnail img-category">
						<a href="{$arrdetails.imagelink}" class="pop-out-img">
							<img src="{$arrdetails.imagelink}" alt="Lights" style="width:100%">
						</a>
						<div class="caption div-product-desc">
							<p class="product-award">{$arrdetails.awardname}</p>
							<p class="product-name">{$arrdetails.productname}</p>
							<p class="product-link">
								{if $arrdetails.purchaselink != ''}
									<a  href="{$arrpregnant.purchaselink}" class="product-link" target="_blank"> Buy now </a> 
								{/if}
								
								{if $arrdetails.purchaselink != '' && $arrdetails.storylink != ''} 
								 |
								{/if}
								{if $arrdetails.storylink != ''}
									<a href="{$arrdetails.storylink}" class="product-link" target="_blank"> Story </a>
								{/if}
							</p>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
		
	</div>
	
	<!-- toddler --->
	<div class="row">
		<div class="row row-padding-mmy">
			<div class="col-md-12 text-center">
				<h3 class="category-title">Toddler Category</h3>
			</div>
		</div>
		<div class="row row-padding-mmy">
			{foreach from=$arr_productlist.toddler key=index item=arrdetails}
				
						{* only this index required this class for mobile view because product name so long *}
				<div class="col-md-4 col-xs-6 item-layout item-layout-toddler">
					<div class="thumbnail img-category">
						<a href="{$arrdetails.imagelink}" class="pop-out-img">
							<img src="{$arrdetails.imagelink}" alt="Lights" style="width:100%">
						</a>
						<div class="caption div-product-desc">
							<p class="product-award">{$arrdetails.awardname}</p>
							<p class="product-name">{$arrdetails.productname}</p>
							<p class="product-link">
								{if $arrdetails.purchaselink != ''}
									<a  href="{$arrpregnant.purchaselink}" class="product-link" target="_blank"> Buy now </a> 
								{/if}
								
								{if $arrdetails.purchaselink != '' && $arrdetails.storylink != ''} 
								 |
								{/if}
								{if $arrdetails.storylink != ''}
									<a href="{$arrdetails.storylink}" class="product-link" target="_blank"> Story </a>
								{/if}
							</p>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
	
	<!-- family --->
	<div class="row">
		<div class="row row-padding-mmy">
			<div class="col-md-12 text-center">
				<h3 class="category-title">Family Category</h3>
			</div>
		</div>
		<div class="row row-padding-mmy">
			{foreach from=$arr_productlist.family item=arrdetails}
				<div class="col-md-4 col-xs-6 item-layout item-layout-family">
					<div class="thumbnail img-category">
						<a href="{$arrdetails.imagelink}" class="pop-out-img">
							<img src="{$arrdetails.imagelink}" alt="Lights" style="width:100%">
						</a>
						<div class="caption div-product-desc">
							<p class="product-award">{$arrdetails.awardname}</p>
							<p class="product-name">{$arrdetails.productname}</p>
							<p class="product-link">
								{if $arrdetails.purchaselink != ''}
									<a  href="{$arrpregnant.purchaselink}" class="product-link" target="_blank"> Buy now </a> 
								{/if}
								
								{if $arrdetails.purchaselink != '' && $arrdetails.storylink != ''} 
								 |
								{/if}
								{if $arrdetails.storylink != ''}
									<a href="{$arrdetails.storylink}" class="product-link" target="_blank"> Story </a>
								{/if}
							</p>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>
<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
<script>
$(function(){
	
	$('.awardpresentation').magnificPopup({
	  items: {
			 src: 'https://www.youtube.com/watch?v=6AG1tnxekts'
		 },
	  type: 'iframe',
	  iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
						'<div class="mfp-close"></div>'+
						'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
						'</div>', 
			patterns: {
				youtube: {
					  index: 'youtube.com/', 
					  id: 'v=', 
					  src: '//www.youtube.com/embed/%id%?autoplay=1' 
					}
				 },
				 srcAction: 'iframe_src', 
		 }
	});
	$('.awardlaunch').magnificPopup({
	  items: {
			 src: 'https://www.youtube.com/watch?v=S_MX-5x8n5k'
		 },
	  type: 'iframe',
	  iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
						'<div class="mfp-close"></div>'+
						'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
						'</div>', 
			patterns: {
				youtube: {
					  index: 'youtube.com/', 
					  id: 'v=', 
					  src: '//www.youtube.com/embed/%id%?autoplay=1' 
					}
				 },
				 srcAction: 'iframe_src', 
		 }
	});

	$('body').find(".pop-out-img").magnificPopup({
		type: "image",
		closeOnContentClick: true,
		fixedContentPos: true,
		mainClass: "mfp-no-margins", // class to remove default margin from left and right side
		overflowY: 'scroll',
		image: {
			verticalFit: false,
		},
		zoom: {
			enabled: false,
			duration: 100, // don't foget to change the duration also in CSS
		},
		callbacks: {
			close: function () {},
		},
	});
})

</script>