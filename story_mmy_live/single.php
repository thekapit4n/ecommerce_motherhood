<?php 
/**
 * The Template for displaying all single blog posts
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.0
**/
	
wp_enqueue_style( 'sharebuttonadder', plugin_dir_url().'/simple-share-buttons-adder/css/style.css');
get_header();

global $ti_option;

$single_sidebar = get_post_meta( $post->ID, 'post_sidebar', true );
?>
<script>
var globalCount=0;
var observer = new IntersectionObserver(function(entries) {
	// isIntersecting is true when element and viewport are overlapping
	// isIntersecting is false when element and viewport don't overlap
	for (i = 0; i < entries.length; i++) {
		if(entries[i].isIntersecting === true){
			globalCount++;
			if (globalCount==1)
				break;
			//alert(entries[i].target.getAttribute('url'));
			window.history.pushState('object or string', entries[i].target.getAttribute('title'),'https://story.motherhood.com.my/'+ entries[i].target.getAttribute('url'));
			//ga("set", "page", entries[i].target.getAttribute('url') ) ;
			//ga("send", "pageview");
			
			//_gaq.push(['_trackPageview', entries[i].target.getAttribute('url')]);
			dataLayer.push({
			'event':'Scrollview',
			'pageurl':entries[i].target.getAttribute('url'),
			'pagetitle':entries[i].target.getAttribute('title')
			});
			
		
			try{
				$.get( "/wp-content/plugins/post-views-stats/count-ajax.php?post_id="+entries[i].target.getAttribute('page_id'), function( data ) {
			});
			}catch(exp){}

		}
		
	} 

}, { threshold: [0] });


window.almComplete = function(alm){
	headers = document.querySelectorAll('.page-header');
		
	headers.forEach(image => {
	  observer.observe(image);
	});
	
	var revealArr = document.querySelectorAll('.alm-reveal');
	lastReveal=revealArr[(revealArr.length)-1];
	
	$(lastReveal).find(".nuren-tag").each(function(){appendNuren.call(this,$(this).attr("data-nuren-zone"))})
	
	$(lastReveal).find(".nuren-presta-tag").click(function(){
		$.post("https://visual.nuren.co/media/dynamicnuren_cp.php",{c:1,p:$(this).attr("presta-type")+' '+$(this).attr("title")});
	});
	
};
</script>
<style type="text/css">
.mobileShow { display: none;}

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ 
      .mobileShow {display: inline;}
  }
  .mobileHide { display: inline; }

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){
     .mobileHide { display: none;}
  }
  
.fluid-width-video-wrapper {
 width:100%;
 position:relative;
 padding:0;
}
.fluid-width-video-wrapper iframe,
.fluid-width-video-wrapper object,
.fluid-width-video-wrapper embed {
 position:absolute;
 top:0;
 left:0;
 width:100%;
 height:100%;
}
	.ssba {	}
	.ssba img
	{
		width: 35px !important;
		padding: 6px;
		border:  0;
		box-shadow: none !important;
		display: inline !important;
		vertical-align: middle;
		box-sizing: unset;
	}
	
	.ssba-classic-2 .ssbp-text {
		display: none!important;
	}
	
	.ssba .fb-save
	{
	padding: 6px;
	line-height: 30px; }
	.ssba, .ssba a
	{
		text-decoration:none;
		background: none;
		
		font-size: 12px;
		
		font-weight: normal;
	}
					

   #ssba-bar-2 .ssbp-bar-list {
		max-width: 48px!important;;
   }
   #ssba-bar-2 .ssbp-bar-list li a {height: 48px!important; width: 48px!important; 
	}
	#ssba-bar-2 .ssbp-bar-list li a:hover {
	}
		
	#ssba-bar-2 .ssbp-bar-list li a::before {line-height: 48px!important;; font-size: 18px;}
	#ssba-bar-2 .ssbp-bar-list li a:hover::before {}
	#ssba-bar-2 .ssbp-bar-list li {
	margin: 0px 0!important;
	}@media only screen and ( max-width: 750px ) {
	#ssba-bar-2 {
	display: block;
	}
}
@font-face {
	font-family: 'ssbp';
	src:url('https://story.motherhood.com.my/wp-content/plugins/simple-share-buttons-adder/fonts/ssbp.eot?xj3ol1');
	src:url('https://story.motherhood.com.my/wp-content/plugins/simple-share-buttons-adder/fonts/ssbp.eot?#iefixxj3ol1') format('embedded-opentype'),
		url('https://story.motherhood.com.my/wp-content/plugins/simple-share-buttons-adder/fonts/ssbp.woff?xj3ol1') format('woff'),
		url('https://story.motherhood.com.my/wp-content/plugins/simple-share-buttons-adder/fonts/ssbp.ttf?xj3ol1') format('truetype'),
		url('https://story.motherhood.com.my/wp-content/plugins/simple-share-buttons-adder/fonts/ssbp.svg?xj3ol1#ssbp') format('svg');
	font-weight: normal;
	font-style: normal;

	/* Better Font Rendering =========== */
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

</style>
<main id="page-content">
  <div class="post-container">
    <?php
	$customCode='';
	if (isset($_GET['preview'])){
		
		if (isset($_GET['_ppp']))
			$customCode='custom_args="preview:1;_ppp:'.$_GET['_ppp'].'"';
		else if (isset($_GET['preview_nonce'])){
			$customCode='custom_args="preview:1;_ppp:'.$_GET['preview_nonce'].'"';
		}else{
			$customCode='custom_args="preview:1;_ppp:"';
		}
		// [ajax_load_more post_type="post" custom_args="stuff:isstuff"]

		//preview=1&_ppp=8e36d4aec8
	}
    // The loop
    if ( have_posts() ) :
      while (have_posts() ) : the_post();
        // replaced with Ajax Load More shortcode
        echo do_shortcode('[ajax_load_more post_type="post" scroll_distance="-500" repeater="default" single_post="true" single_post_id="'. get_the_ID() .'" posts_per_page="1" button_label="Next Post" '.$customCode.']');
      endwhile;
    endif;
    ?>
  </div>
</main>
    <?php
    // Show/Hide random posts slide dock
    if ( $ti_option['single_slide_dock'] == 1 ) :
        get_template_part( 'inc/slide', 'dock' );
    endif;
    ?>
    
<?php get_footer(); ?>