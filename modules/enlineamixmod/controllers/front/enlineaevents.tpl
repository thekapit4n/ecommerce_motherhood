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
<link rel="stylesheet" href="/themes/default-bootstrap/css/modules/homeslider/homeslider.css" type="text/css" media="all" />
<link rel="stylesheet" href="/modules/enlineasectionslider/css/sectionslider.css" type="text/css" media="all" />

<script type="text/javascript" src="../js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" href="../js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="/themes/default-bootstrap/css/bootstrap-datepicker.css" />
<script src="/themes/default-bootstrap/dashboard-assets/Inputmask-5.x/dist/inputmask.js" type="text/javascript"></script>
<link rel="stylesheet" href="/themes/default-bootstrap/dashboard-assets/form-wizard-5/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
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
	
	if(trgethref != '#previous' && trgethref != '#next' && trgethref != '#finish')
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
	{if $event_info.custom_floating_ball && $event_info.custom_floating_ball != ''}
	<div style="border-radius:50%; position:fixed; color:white; font-size:35px;  right:20px; bottom:80px; z-index:1;">
		<a href='{$event_info.custom_floating_ball_link}' target="_blank">
			<img src="{$event_info.custom_floating_ball}" alt="float ball" width="80px"/>
		</a>
	</div>{else}{/if}

	<div style='float:right;margin-top:3px'>
    <div class="fb-share-button" data-href="{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" target="_blank" rel="noopener">Share</a></div>
	</div>
	{if isset($smarty.session.isPWA) && $smarty.session.isPWA==1}
	{else if $event_info.event_id == 87 || $event_info.event_id == 223}
	{else}
		<div class="row" style="margin-top:25px;background:white;">
		{foreach from=$event_minibanner key=k item=oneImg}
			<div class="col  col-lg-3 col-sm-3" style="padding-top:20px">
				<a href='/events/{$oneImg.event_slug}'><img src='{$oneImg.event_mini_banner}' style="width:100%" ></a>
		</div>
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
{if $event_info.event_id == 87 || $event_info.event_id == 223 || $event_info.event_id == 88 || $event_info.event_id == 89 || $event_info.event_id == 126}
{else}{$displayProductListFooter} {$event_info.event_id }{/if}
<!-- END : MODULE enlineasellerimport -->