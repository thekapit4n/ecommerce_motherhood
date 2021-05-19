{capture name=path}
	{l s='Events'  mod='agilemultipleseller'}
{/capture}

<meta property="og:url"        content="https://www.motherhood.com.my/events/{$event_info.event_slug}" />
<meta property="og:type"       content="website" />
<meta property="og:title" content="{$event_info.event_title|escape:'htmlall':'UTF-8'|replace:'%MMMYYYY%':{$smarty.now|date_format:"%b %Y"}|replace:'%COUNTRY%':'Malaysia'|replace:'%URL%':'Motherhood.com.my'|replace:'%YYYY%':{$smarty.now|date_format:"%Y"}}" />

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ms_MY/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Slider -->
<script type="text/javascript" src="/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" href="/modules/enlineamixmod/views/css/flexisel.css" type="text/css" media="all" />
<script type="text/javascript" src="/modules/enlineamixmod/views/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homeslider.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homeslidersecond.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homesliderthird.js"></script>
<script type="text/javascript" src="/themes/default-bootstrap/js/modules/homeslider/js/homesliderforth.js"></script>
<script src="/themes/default-bootstrap/dashboard-assets/fontawesome-v5.15.1/js/all.min.js"></script>
<link rel="stylesheet" href="/themes/default-bootstrap/css/modules/homeslider/homeslider.css" type="text/css" media="all" />
<link rel="stylesheet" href="/modules/enlineasectionslider/css/sectionslider.css" type="text/css" media="all" />

<script type="text/javascript" src="../js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" href="../js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="/themes/default-bootstrap/css/bootstrap-datepicker.css" />
<script src="/themes/default-bootstrap/dashboard-assets/Inputmask-5.x/dist/inputmask.js" type="text/javascript"></script>
<link rel="stylesheet" href="/themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
<link href="/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<script src="/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>

@media only screen and (max-width: 768px) {
	.mobile-style-large{
		font-size:large;
	}
	.mobile-style-small{
		font-size:small!important;
	}
	.col-md-12{
		margin-bottom:15px!important;
	}
	.col-md-6{
		margin-bottom:15px!important;
	}
	.mobile-style-normal{
		font-weight:normal!important
	}
}

.mobileshow { 
display:none; 
}
@media screen and (max-width: 500px) {
.mobileshow { 
display:block; }
}

{if $event_info.backgroundcolor}
.columns-container{
	background-image: linear-gradient(#{$event_info.backgroundcolor}, transparent);
	{*background-color:#{$event_info.backgroundcolor}!important;*}
}
{/if}

</style>
<script type="text/javascript">
var homeslider_isMobile = 0;
var homeslider_loop = 1;
var homeslider_pause = 5000;
var homeslider_speed = 1500;
var homeslider_width = 1183;

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
        $(this).next("input").focus();
      return false;
    }
  });
});

</script>

<script>

var showErrors = "{if isset($showErrors)}{$showErrors}{/if}";
if (showErrors)
	alert(showErrors);
</script>

<!-- Gallery -->
<link rel="stylesheet" href="/modules/popupnotification/css/magnific-popup.css" type="text/css" media="all" />
<script type="text/javascript" src="/modules/popupnotification/js/jquery.magnific-popup.min.js"></script>

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

<!-- Filter -->
<script src="/modules/enlineamixmod/views/js/jquery.filterizr.js"></script>
<link rel="stylesheet" href="/modules/enlineamixmod/views/css/simplefilter.css" type="text/css" media="all" />
<script type="text/javascript">
	$(function() {   
try{
	 var filterizd = $('.filtr-container').filterizr({
	 filter: '1',

	//options object
	 });
}catch(exp){}
	});
</script>

<!-- Timer -->

<link rel='stylesheet' href='/modules/enlineamixmod/views/css/dscountdown.css' type='text/css' media='all' />
<link rel='stylesheet' href='/modules/enlineamixmod/views/css/svvg-styles.css' type='text/css' media='all' />

<script type="text/javascript" src="/modules/enlineamixmod/views/js/dscountdown.min.js"></script>
<script>


$(document).ready(function($){
	
	var newdate = $('.enddate').attr("id");
	$('.demo4').dsCountDown({
   endDate: new Date(newdate),
   theme: 'flat'
});});
</script>
<script>
$(document).ready(function($){
$("#packages1").click(function(event) {
	$("#packages > select option[value='1']").attr('selected','selected');
});});

$(document).ready(function($){
$("#packages2").click(function() {
	$("#packages > select option[value='2']").attr('selected','selected');
});});

$(document).ready(function($){
$("#packages3").click(function() {
	$("#packages > select option[value='3']").attr('selected','selected');
});});

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
	var trgethref = $.attr(this, 'href');
	console.log('This original code in this view ***events.tpl = ' + trgethref);
	
	var skipArray = ["#previous", "#next", "#finish", "#cancel"];
	var checkSkip = skipArray.includes(trgethref);

	if(!checkSkip)
	{
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 900);
	}
});

$(document).ready(function($){
	$('#newEmail').on('change',function(event){
	
	var email=$('#newEmail').val();
    if ($.trim(email) != "") {
        $("#newEmail").css('background-color', 'yellow');
        $.ajax({
            type: 'get',
            url: "/modules/memberprivilege/memberprivilege-ajax.php",
            data: 'ajax=true&email=' + email,
            success: function (data) {
                if (!data) {
					$('#newUserSpan').show();
					$("#newUserSpan").css('visibility', 'visible');
					$("#newUserSpan").css('display', 'show');
					
					$('#oldUserSpan').hide();
					$("#oldUserSpan").css('visibility', 'hidden');
					$("#oldUserSpan").css('display', 'none');
                }
                else {
				
					$('#errorSpan').hide();
				    if (data=='Email Verification Failed! Please check your email!'){
					
						$('#oldUserSpan').text(data);
						$("#newEmail").css('background-color', 'yellow');
						$('#errorSpan').text(data);
						$('#errorSpan').show();
					
					}else{
						$('#oldUserSpan').text('Welcome Back! This Promotion is only for New Users. Please enjoy other promotions from motherhood.com.my');
					}
				
					$('#newUserSpan').hide();
					$("#newUserSpan").css('visibility', 'hidden');
					$("#newUserSpan").css('display', 'none');
					
					$('#oldUserSpan').show();
					$("#oldUserSpan").css('visibility', 'visible');
					$("#oldUserSpan").css('display', 'show');

                }
            },
			  error: function (xhr, ajaxOptions, thrownError) {
			  }
        })
    }
    else {
    }
	
		
	});

	$('#confirmPassword').on('change',function(event){
		var confirmPassword=$('#confirmPassword').val();
		var newPassword=$('#newPassword').val();
		if (confirmPassword != newPassword) {
			$("#confirmPassword").css('background-color', '#aa4444');
		}else{
			$("#confirmPassword").css('background-color', 'white');
		}
	});
	{*
	$('#flashcardmom').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		},callbacks: {
            
            close: function() {
              window.location='/quick-order';
            }
          }
	});

	$('#flashcardmomExist').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		},callbacks: {
            
            close: function() {
            }
          }
	});

	$('#tlmthankyou').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		},callbacks: {
            
            close: function() {
				window.location='/events/tlmbabyfair';
            }
          }
	});
	*}

});

$(document).ready(function($){
	$('.simplefilter > li').click(function() {
    $('.simplefilter > li').removeClass('selected');
    $(this).addClass('selected');
});});

var hasSubmitted=false;
</script>


<link media="all" type="text/css" rel="stylesheet" href="//unpkg.com/purecss@1.0.0/build/pure-min.css">
	    
<!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
<!--<![endif]-->

<!-- MODULE enlineasellerimport -->
{if $has_ended=='end'}

	<div class="pure-g" background='red'>
		<div class="pure-u-1" style="background-color:red;color:white;text-align:center">
			THIS EVENT HAS ENDED. THANK YOU FOR PARTICIPATING
		</div>
	</div>
{/if}

{if isset($showErrors) && $showErrors!=''}
	<div class="pure-g" background='red'>
		<div class="pure-u-1" style="background-color:red;color:white;
		text-align:center;font-size: 21px;padding:7px; margin: 5px 0px;">
			{$showErrors}
		</div>
	</div>
{/if}
	    
	<div class="pure-g">
		<div class="pure-u-1">
		{if ($event_info.event_banner == '#' || $event_info.event_banner == '' || $event_info.event_banner == '0')}
		{else}
		<div>
			
			<a href="" target="_blank"><img src="{$event_info.event_banner}" style="width:100%" class="pure-img" alt="{$event_info.event_title|escape:'htmlall':'UTF-8'|replace:'%MMMYYYY%':{$smarty.now|date_format:"%b %Y"}|replace:'%COUNTRY%':'Malaysia'|replace:'%URL%':'Motherhood.com.my'|replace:'%YYYY%':{$smarty.now|date_format:"%Y"}}"></a>
		</div>
		{/if}
		</div>
	</div>
	
{if $has_ended=='end'}
	<div class="pure-g" background='red'>
		<div class="pure-u-1" style="background-color:red;color:white;text-align:center">
			THIS EVENT HAS ENDED. THANK YOU FOR PARTICIPATING
		</div>
	</div>
{/if}
{include file="$events_view_path/templates/front/errors.tpl"}
	{if $event_info.event_id|in_array:[95, 96, 97, 108, 104, 105, 116, 117, 118, 119, 120, 300, 9998, 99999]}
		{* this part to try implement new boostrap without effect any exisitng event page - haiqal *}
		<style>
			html{
				font-size:13px;
			}
			nav a{
				text-decoration: none !important;
			}
			
			.footer-container a{
				text-decoration: none !important;
			}
			
			.breadcrumb  a{
				text-decoration: none !important;
			}
			
			.menu-content a{
				text-decoration: none !important;
			}
			
			.top-header-spacer {
				margin-top: 5px;
			}
			
			.actions  a{
				text-decoration: none !important;
			}
			
			.brand-review a{
				font-weight:400;
			}
			
			.toggle-footer{
				padding-left :0px;
			}
			
			.row>*{
				padding-left:1px !important;
				padding-right:1px !important;
			}
			
			.container{
				padding-left:0px !important;
				padding-right:0px !important;
			}
			
			@media (min-width: 1200px){
				.container, .container-lg, .container-md, .container-sm, .container-xl {
					max-width: 1170px !important;
				}
			}
			
			header .row #header_logo {
				padding-top: 8px !important;
				padding-right: 0px !important;
				padding-bottom: 7px !important;
				padding-left: 10px !important;
				width: 250px!important;
			}
			
			#user_info_name{
				padding-left:0px;
			}
			
			.shopping_cart>a:first-child {
				padding: 4px 25px 14px 40px!important;
			}
			
			.breadcrumb span{
				line-height:9px;
			}
			
			.breadcrumb span:not(:first-child){
				padding-top: 10px;
			}
			
			@media (max-width: 767px) {
				.shopping_cart>a:first-child {
					padding: 4px 25px 14px 45px!important;
				}
			}
		</style>
		<!--
		<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-v5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/bootstrap-v5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
		-->
		<!-- ==== for now we try use beta 3 direct from cdn, once all beta phase finish, we use complete version === -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<style>
			.dropdown-toggle::after
			{
				border-top: unset;
				border-right: unset;
			}
			
			.btn-mobile-menu, .btn-mobile-menu:focus, btn-mobile-menu:hover, btn-mobile-menu:active{
				outline: unset;
				border: 0px;
				box-shadow: none;
				color:white;
			}
			
			.row {
				--bs-gutter-x: -1.5rem;
			}
			
			.top-header-spacer{
				--bs-gutter-x: 0rem;
			}
		</style>
		<div class="row">
			<form id='eventform' name='eventform' method="POST" action="/events/{$event_info.event_slug}" accept-charset="UTF-8" class="" enctype="multipart/form-data" onsubmit="{literal}if(hasSubmitted==true){alert('Please wait for processing...');return false;};hasSubmitted=true;return true;{/literal}">
				{$event_info.event_description}
				<input name="_token" type="hidden" value="iFRiuof0ZuBRfvkOwiJhgcJybjuvmFE0aLvJtwUO">
				<input name="event" type="hidden" value="{$event_info.event_slug}">
			</form>
		</div>
	{else}
		<div class="pure-g"  style="margin-top:0px;">
			<div class="pure-u-1" style="margin-top:0px;">
				<form id='eventform' name='eventform' method="POST" action="/events/{$event_info.event_slug}" accept-charset="UTF-8" class="pure-form pure-form-stacked" enctype="multipart/form-data" onsubmit="{literal}if(hasSubmitted==true){alert('Please wait for processing...');return false;};hasSubmitted=true;return true;{/literal}"><input name="_token" type="hidden" value="iFRiuof0ZuBRfvkOwiJhgcJybjuvmFE0aLvJtwUO">
					<div class="pure-u-1" style="text-align:center;">
						{$event_info.event_description}
					</div>
					<input name="event" type="hidden" value="{$event_info.event_slug}">
				</form>
			</div> <!-- /end right content -->
		</div>
	{/if}
	
	{if $event_info.custom_floating_ball && $event_info.custom_floating_ball != ''}
	<div style="border-radius:50%; position:fixed; color:white; font-size:35px;  right:20px; bottom:80px; z-index:1;">
		<a href='{$event_info.custom_floating_ball_link}' target="_blank">
			<img src="{$event_info.custom_floating_ball}" alt="float ball" width="80px"/>
		</a>
	</div>{else}{/if}
	{if $event_info.event_id|in_array:[300]}{* this part to hide facebook button - haiqal *}
	{else}
		<div class="row">
			<div style="position:relative">
				<div style='text-align: end;margin-top:10px'>
					<div class="fb-share-button" data-href="{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
						<a class="fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" target="_blank" rel="noopener">Share</a>
					</div>
				</div>
			</div>
		</div>
	{/if}
	
	{if isset($smarty.session.isPWA) && $smarty.session.isPWA==1}
	{else if $event_info.event_id|in_array:[87, 97, 105, 116, 117, 118, 119, 120, 135, 300, 223]}{* this part to hide parentcraft display - haiqal *}
	{else}
		<div class="row" style="margin-top:25px;background:white;">
		{foreach from=$event_minibanner key=k item=oneImg}
			{if isset($oneImg.event_slug) && $oneImg.event_slug != 'testnewmom'}
				<div class="col col-md-3 col-xs-3" style="padding-top:20px;padding-left: 5px !important; padding-right: 5px !important;">
					<a href='/events/{$oneImg.event_slug}'>
						<img src='{$oneImg.event_mini_banner}' style="width:100%" >
					</a>
				</div>
			{/if}
		{/foreach}
		</div>
	{/if}
	
	{if !empty($check) && $check != 1 && $check != 2}
	<script> alert("{$check}");</script>
	{else}
	
	{/if}
	{if !empty($newmomsuccess) && $newmomsuccess == 2}
	<script>
		$(document).ready(function(){
			setTimeout(function(){
				$('#flashcardmom').magnificPopup({
					type: 'image',
					closeOnContentClick: true,
					fixedContentPos: true,
					mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
					image: {
						verticalFit: true
					},
					zoom: {
						enabled: true,
						duration: 300 // don't foget to change the duration also in CSS
					},callbacks: {
						
						close: function() {
						window.location='/quick-order';
						}
					}
				}).magnificPopup('open');
			},500);
		});
	</script>
	{elseif !empty($newmomsuccess) && $newmomsuccess == 3}
		<script>
			$(document).ready(function(){
				setTimeout(function(){
					$('#flashcardmomExist').magnificPopup({
						type: 'image',
						closeOnContentClick: true,
						fixedContentPos: true,
						mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
						image: {
							verticalFit: true
						},
						zoom: {
							enabled: true,
							duration: 300 // don't foget to change the duration also in CSS
						},callbacks: {
						
							close: function() {
							}
						}
					}).magnificPopup('open');
				},500);
			});
	</script>
	{elseif !empty($tlmsuccess) && $tlmsuccess == 1}
	<script>
			$(document).ready(function(){
			setTimeout(function(){
					$('#tlmthankyou').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		},callbacks: {
            
            close: function() {
				window.location='/events/tlmbabyfair';
            }
          }
	}).magnificPopup('open');
				},500);
		});
	</script>
	{else}
	{/if}
<script>
$(document).ready(function() {
  $("img").trigger("unveil");
});
</script>
{if $event_info.event_id|in_array:[87, 88, 89, 95, 96, 97, 102, 105,116, 117, 118, 119, 120, 126, 300, 223]} {* this part to hide product list footer - haiqal *}
{else}{$displayProductListFooter} {$event_info.event_id }{/if}
<!-- END : MODULE enlineasellerimport -->