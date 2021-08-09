<?php
/**
 * SimpleMag Functions and Definitions
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.0
**/


// Welcome page after theme activation. Loads only in the admin.
if ( is_admin() && ! is_child_theme() ) {
	require_once( 'admin/simplemag-welcome.php' );
}


/* Install plugins for theme use */
include_once ( 'admin/tgm/tgm-init.php' );


/**
 * Add Custom Fields
**/
// Path
if( ! class_exists('acf') ) {

    function ti_acf_settings_path( $path ) {
        $path = get_template_directory() . '/admin/acf/';
        return $path;
    }
    add_filter('acf/settings/path', 'ti_acf_settings_path');

    // Dir
    function ti_acf_settings_dir( $dir ) {
        $dir = get_template_directory_uri() . '/admin/acf/';
        return $dir;
    }
    add_filter('acf/settings/dir', 'ti_acf_settings_dir');

    // Lite Mode
    add_filter('acf/settings/show_admin', '__return_false');
    add_filter('acf/settings/show_updates', '__return_false');

    // Include
    include_once( get_template_directory() . '/admin/acf/acf.php' );

}

add_filter('acf/settings/remove_wp_meta_box', '__return_true');

// ACF Fields Array
include_once( 'admin/acf-fields/acf-fields.php' );

// ACF Post Feed Sidebars
function ti_register_fields(){
    include_once('admin/acf-fields/add-ons/acf-sidebar-selector/acf-sidebar_selector-v5.php');
}
add_action('acf/include_fields', 'ti_register_fields');



/**
 * Add Theme Options fields array
 */
require_once ( dirname(__FILE__) . '/admin/theme-options.php' );



/* Content Width */
if ( ! isset( $content_width ) ) {
    $content_width = 1170; /* pixels */
}



/* Theme Setup */
function ti_theme_setup() {

	/*
	 * Let WordPress manage the document title.
	 * Declare that this theme does not use a hard-coded <title>
	 * tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	/* Register Menus  */
	register_nav_menus( array(
		'main_menu' => __( 'Main Menu', 'themetext' ), // Main site menu
		'secondary_menu' => __( 'Top Strip Menu', 'themetext' ) // Main site menu
	));


    /*
	 * Default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
        'video',
        'gallery',
        'audio',
        'quote'
    ) );




	/* Images */
	add_theme_support( 'post-thumbnails' );

        // Hard crop for grid layouts
        add_image_size( 'rectangle-size', 370, 247, true );
        add_image_size( 'rectangle-size-small', 270, 180, true );
        add_image_size( 'rectangle-size-big', 570, 381, true );

        // Variable height for masonry layouts
        add_image_size( 'masonry-size', 370, 9999 );
        add_image_size( 'masonry-size-big', 570, 9999 );
        add_image_size( 'medium-size', 770, 9999 );

        // Single Post
        add_image_size( 'big-size', 1170, 9999 );

        // Gallery
        global $ti_option;
        add_image_size( 'gallery-carousel', 9999, $ti_option['site_carousel_height'] );



	/* Enable post and comment RSS feed links */
	add_theme_support( 'automatic-feed-links' );


	/* Theme localization */
	load_theme_textdomain( 'themetext', get_template_directory() . '/languages' );



    /* Extra post class for design */
    function post_design_class( $design_class ) {
        if ( ! is_single() ) {
            global $wp_query;
            $current_count = $wp_query->current_post + 1;
            $oddeven = 'odd';
            if ( $current_count % 2 == 0 ) { $oddeven = 'even'; } else { $oddeven = 'odd'; }

            $design_class[] = 'post-item';
            $design_class[] = 'post-' . $oddeven;
        }
        return $design_class;
    }
    add_filter( 'post_class', 'post_design_class' );



    /* Enable theme gallery if it was turned ON in Theme Options */
    if ( $ti_option['site_custom_gallery'] == true ) {
        include_once( 'inc/wp-gallery.php' );
    }



    /**
     * Post formats for Media Position option in Single Post.
     * Passed into the single.php
     **/
    function post_format_output() {
        if ( ! get_post_format() ): // Standard
            get_template_part( 'formats/format', 'standard' );
        elseif ( 'gallery' == get_post_format() ): // Gallery
            get_template_part( 'formats/format', 'gallery' );
        elseif ( 'video' == get_post_format() ): // Video
            get_template_part( 'formats/format', 'video' );
        elseif ( 'audio' == get_post_format() ): // Audio
            get_template_part( 'formats/format', 'audio' );
        endif;
    }


    /**
     * Calculate to total score for posts with Rating feature is enabled
     *
     * Applies to:
     * 1. Latest Reviews & Latest Posts sections
     * 2. Latest Reviews widget
     * 3. Single Post when rasting is enabled
     *
     * Final calculations in inc/rating-calculations.php
    **/
    function ti_rating_calc() {

        $score_rows = get_field( 'rating_module' );
        $score = array();

        // Loop through the scores
        if ( $score_rows ){
            foreach( $score_rows as $key => $row ){
                $score[$key] = $row['score_number'];
            }

            $score_items = count( $score ); // Count the scores
            $score_sum = array_sum( $score ); // Get the scores summ
            $score_total = $score_sum / $score_items; // Get the score result

            return $score_total;

        }
    }
    add_filter( 'ti_score_total', 'ti_rating_calc' );


}
add_action( 'after_setup_theme', 'ti_theme_setup' );




/* Includes */
include_once( 'inc/social-share.php' );
include_once( 'inc/user-fields.php' );
include_once( 'inc/mega-menu.php' );
include_once( 'inc/styling-options.php' );
include_once( 'inc/single-post-actions.php' );
include_once( 'inc/content-post-actions.php' );
include_once( 'inc/ad-units-actions.php' );
include_once( 'inc/layouts-post-image.php' );


/* Register jQuery Scripts and CSS Styles */
include_once( 'inc/register-scripts.php' );


/* Functions for Composer Sections */
include_once( 'composer/assets/sections-functions.php' );


/* Widgets */
locate_template( 'widgets/ti-video.php', true );
locate_template( 'widgets/ti-authors.php', true );
locate_template( 'widgets/ti-about-site.php', true );
locate_template( 'widgets/ti-latest-posts.php', true );
locate_template( 'widgets/ti-code-banner.php', true );
locate_template( 'widgets/ti-image-banner.php', true );
locate_template( 'widgets/ti-latest-reviews.php', true );
locate_template( 'widgets/ti-featured-posts.php', true );
locate_template( 'widgets/ti-most-commented.php', true );
locate_template( 'widgets/ti-latest-comments.php', true );
locate_template( 'widgets/ti-latest-category-posts.php', true );


/**
 * Add classes to the body tag
**/
function ti_body_classes( $classes ){

    global $post, $ti_option;

    $classes[] = 'sm-' . str_replace( '.', '', wp_get_theme()->get( 'Version' ) );

	if ( !is_rtl() ) {
		$classes[] = 'ltr';
	}

	// Page Name as class name
	if ( is_page() ) {
		$page_name = $post->post_name;
		$classes[] = 'page-'.$page_name;
 	}

    // If category have sidebar enabled
	if ( get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ) {
        $classes[] = 'with-sidebar';
	}

	// Text Alignmnet Left for the whole site
	if ( $ti_option['text_alignment'] == '2' ) {
		$classes[] = 'text-left';
	}

	// Category Name as class name only in single post of given category
	if ( is_single() ) {

		global $post;
		$categories = get_the_category( $post->ID );
		foreach( $categories as $category ) {
			$classes[] = 'single-'.$category->category_nicename;
		}

	}

    // Hide/Show top strip
	if ( $ti_option['site_top_strip'] == 0 ) {
        $classes[] = 'hide-strip';
    }

	// Make top strip fixed
	if ( $ti_option['site_fixed_menu'] == '2' ) {
        $classes[] = 'top-strip-fixed';
    }

    // Hide/Show main menu
    if ( $ti_option['site_main_menu'] == 0 ) {
        $classes[] = 'no-main-menu';
    }

	// If top strip have white background
	if ( $ti_option['site_top_strip_bg'] == '#ffffff' ) {
        $classes[] = 'color-site-white';
    }

    // Check for a layout options: Full Width or Boxed
    if ( $ti_option['site_layout'] == '2' ) {
        $classes[] = 'layout-boxed';
    } else {
        $classes[] = 'layout-full';
    }

	return $classes;
}
add_filter( 'body_class', 'ti_body_classes' );




/**
 * Add Previous & Next links to a numbered link list
 * of wp_link_pages() if single post is paged
 */
function ti_wp_link_pages( $args ){

    global $page, $numpages, $more;

    if ( !$args['next_or_number'] == 'next_and_number' ) {
        return $args;
    }

	// Keep numbers for the main part
    $args['next_or_number'] = 'number';
    if (!$more){
        return $args;
    }

	// If previous page exists
    if( $page-1 ) {
        $args['before'] .= _wp_link_page($page-1) . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>';
    }

	// If next page exists
    if ( $page<$numpages ) {
        $args['after'] = _wp_link_page($page+1) . $args['link_before'] . $args['nextpagelink'] . $args['link_after'] . '</a>' . $args['after'];
    }

    return $args;
}
add_filter( 'wp_link_pages_args', 'ti_wp_link_pages' );



/**
 * Helper Functions
*/

// Get The First Image From a Post
function first_post_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	if( preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ) ){
		$first_img = $matches[1][0];
		return $first_img;
	}
}

/**
 * Excerpt length
 * Excerpt more
*/
// Excerpt Length
function ti_excerpt_length( $length ) {
	global $ti_option;
	return $ti_option['site_wide_excerpt_length'];
}
add_filter( 'excerpt_length', 'ti_excerpt_length', 999 );

// Excerpt more
function ti_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'ti_excerpt_more' );




/**
 * Custom the_content() filter
 * to make textareas support shortcodess
**/
add_filter( 'be_the_content', 'do_shortcode' );


/**
 * Shortcodes support for Text widget
**/
add_filter( 'widget_text', 'do_shortcode' );


/**
 * Define Five Sidebar areas
 * Magazine for Page Composer, Pages for static pages, Three Footer Sidebars
**/
function ti_register_theme_sidebars() {

	if ( function_exists('register_sidebars') ) {

		// Sidebar for blog section of the site
		register_sidebar(
		   array(
			'name' => __( 'Magazine', 'themetext' ),
			'id' => 'sidebar-1',
			'description'   => __( 'Sidebar for categories and single posts', 'themetext' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

		register_sidebar(
		   array(
			'name' => __( 'Pages', 'themetext' ),
			'id' => 'sidebar-2',
			'description'   => __( 'Sidebar for static pages', 'themetext' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

		register_sidebar(
		   array(
			'name' => __( 'Footer Area One', 'themetext' ),
			'id' => 'sidebar-3',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

		register_sidebar(
		   array(
			'name' => __( 'Footer Area Two', 'themetext' ),
			'id' => 'sidebar-4',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

		register_sidebar(
		   array(
			'name' => __( 'Footer Area Three', 'themetext' ),
			'id' => 'sidebar-5',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

        register_sidebar(
		   array(
			'name' => __( 'Footer Full Width', 'themetext' ),
			'id' => 'sidebar-full-width',
            'description'   => __( 'Can be used for your Instagram feed', 'themetext' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		   )
		);

        if ( class_exists( 'WooCommerce' ) ) {
            register_sidebar(
               array(
                'name' => __( 'WooCommerce', 'themetext' ),
                'id' => 'woocommerce-sidebar',
                'description'   => __( 'Sidebar for Woocommerce', 'themetext' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
               )
            );
        }

        if ( class_exists( 'bbPress' ) ) {
            register_sidebar(
               array(
                'name' => __( 'bbPress', 'themetext' ),
                'id' => 'bbpress-sidebar',
                'description'   => __( 'Sidebar for bbPress', 'themetext' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
               )
            );
        }

	}

}
add_action( 'widgets_init', 'ti_register_theme_sidebars' );


/* Count the number of footer sidebars to enable dynamic classes for the footer */
function ti_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = ' col-1';
			break;
		case '2':
			$class = ' col-2';
			break;
		case '3':
			$class = ' col-3';
			break;
	}

	if ( $class )
		echo $class;
}




/**
 * Indicators in admin posts list
 *
 * 1. If post was marked as featured
 * 2. If post was added into the homepage slider
**/
function admin_post_header_columns($columns) {

	$columns['slider_add'] = "Home Slider";
    $columns['featured_add'] = "Featured";

	return $columns;
}

function admin_post_data_row( $column_name, $post_id ) {

    $checked = '<span style="color:#00a0d2;font-weight:bold;">&#10003;</span>';
    $deafult = '<span style="color:#ddd;font-weight:bold;">&#10003;</span>';

	switch( $column_name ) {

		case 'featured_add':

            if ( get_post_meta( $post_id , 'featured_post_add' , 'true' ) ) {
                echo $checked;
            } else {
                echo $deafult;
            }

            break;

        case 'slider_add':

            if ( get_post_meta( $post_id , 'homepage_slider_add' , 'true' ) ) {
                echo $checked;
            } else {
                echo $deafult;
            }

            break;
	}
}

add_filter( 'manage_edit-post_columns', 'admin_post_header_columns', 10, 1 );
add_action( 'manage_posts_custom_column', 'admin_post_data_row', 10, 2 );




/**
 * SimpleMag & WooCommerce functions and definitions
 *
 * @package SimpleMag
 * @since SimpleMag 4.0
**/

if ( class_exists ( 'WooCommerce' ) ) :

    /**
    * Declare WooCommerce support
    */
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    /**
     * Disabling default WooCommerce css file.
     */
    add_filter( 'woocommerce_enqueue_styles', '__return_false' );
    //add_action( 'wp_enqueue_scripts', 'child_add_scripts' );


    /**
    * is_realy_woocommerce_page - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and which are also included)
    *
    * @access public
    * @return bool
    */
    function is_really_woocommerce_page () {
            if(  function_exists ( "is_woocommerce" ) && is_woocommerce()) {
                return true;
            }
            $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                            "woocommerce_terms_page_id" ,
                                            "woocommerce_cart_page_id" ,
                                            "woocommerce_checkout_page_id" ,
                                            "woocommerce_pay_page_id" ,
                                            "woocommerce_thanks_page_id" ,
                                            "woocommerce_myaccount_page_id" ,
                                            "woocommerce_edit_address_page_id" ,
                                            "woocommerce_view_order_page_id" ,
                                            "woocommerce_change_password_page_id" ,
                                            "woocommerce_logout_page_id" ,
                                            "woocommerce_lost_password_page_id" ) ;
            foreach ( $woocommerce_keys as $wc_page_id ) {
                    if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                        return true ;
                    }
            }
            return false;
    }


    /**
     * Class name for Woocomerce homepage
    */
    add_filter( 'body_class','woocommerce_body_classes' );
    function woocommerce_body_classes( $classes ) {
        if ( is_shop() ) {
            $classes[] = 'woocommerce-home';
        }
        return $classes;
    }


    /**
     * Unhook WooCommerce wrappers
     */
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'smwc_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'smwc_wrapper_end', 10);

    function smwc_wrapper_start() {
        echo '<section id="content" role="main" class="clearfix anmtd"><div class="wrapper">';
    }

    function smwc_wrapper_end() {
        echo '</div></section>';
    }


    /**
     * Disable WooCommerce action
     */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );


    /**
     * Display product category descriptions under category title
     */
    /*add_action( 'woocommerce_after_subcategory_title', 'wc_cat_description', 12);
    function wc_cat_description ( $category ) {
        $cat_id=$category->term_id;
        $prod_term=get_term( $cat_id,'product_cat' );
        $description=$prod_term->description;
        if ( ! empty( $description ) ) {
            echo '<div class="category-desc">'. esc_textarea( $description ) .'</div>';
        }
    }*/


    /**
     * Shopping Cart.
     */
    require_once( 'woocommerce/inc/woocommerce-side-shopping-cart.php' );

endif;



/**
 * Wrap the page content in a container if the page is not a WooCommerce template
 */
function entry_content( $content ) {
	
	if (stripos($content,"sponsored_content")>0 || stripos($content,"wprm-recipe-container")>0){
		$content.="<script>$('.nuren-tag').hide();</script>";
	}else{
		//$content= str_replace_first_mod('<img', "<small>Advertisement</small><div class='native-in-image'><span class='nuren-tag' data-nuren-zone='story_ng_zone'></span><br><img", $content); 
		//$content= str_replace_first_mod('/img>', "/img></div>", $content); 
		
		$content= str_replace_first_mod('<img', "<small>Highlighted</small><div class='nuren-tag' data-nuren-zone='story_ng_zone' style='max-width:600px;margin: 0 auto;'></div><br><img", $content); 
		/*
		$content= str_replace_first_mod('<img', '
		<script>
		var unruly = window.unruly || {};
		unruly.native = unruly.native || {};
		unruly.native.siteId = 1106519
		</script>
		<script src="//video.unrulymedia.com/native/native-loader.js"></script><div id="unruly-unit"></div><img', $content); 
		*/
	}
	
	if (stripos($content,"wprm-recipe-container")>0){
		?>
						
				<script type='text/javascript' id='wprm-public-js-extra'>//<![CDATA[
				var wprm_public={"endpoints":{"analytics":"https:\/\/story.motherhood.com.my\/wp-json\/wp-recipe-maker\/v1\/analytics"},"settings":{"features_comment_ratings":true,"template_color_comment_rating":"#343434","instruction_media_toggle_default":"on","video_force_ratio":false,"analytics_enabled":false},"post_id":"30800","home_url":"https:\/\/story.motherhood.com.my\/","print_slug":"wprm_print","permalinks":"\/blog\/%postname%\/","ajax_url":"https:\/\/story.motherhood.com.my\/wp-admin\/admin-ajax.php","nonce":"64fa36f306","api_nonce":"cd9cdebc52","translations":{"Your Collections":"Your Collections","Editing User":"Editing User","Cancel":"Cancel","Add Item":"Add Item","Set a new amount for this ingredient:":"Set a new amount for this ingredient:","Set the number of servings":"Set the number of servings","Save to my Collections":"Save to my Collections","Add Column":"Add Column","Edit Columns":"Edit Columns","Add Group":"Add Group","Edit Groups":"Edit Groups","Remove Items":"Remove Items","Columns & Groups":"Columns & Groups","Hide Nutrition Facts":"Hide Nutrition Facts","Show Nutrition Facts":"Show Nutrition Facts","Print Collection":"Print Collection","Print Recipes":"Print Recipes","Shopping List":"Shopping List","Stop Removing Items":"Stop Removing Items","Actions":"Actions","Drag and drop to add:":"Drag and drop to add:","None":"None","Blue":"Blue","Red":"Red","Green":"Green","Yellow":"Yellow","Note":"Note","Color":"Color","Name":"Name","Ingredients":"Ingredients","cup":"cup","olive oil":"olive oil","Add Ingredient":"Add Ingredient","Edit Ingredients":"Edit Ingredients","Nutrition Facts (per serving)":"Nutrition Facts (per serving)","Search Recipes":"Search Recipes","Search Ingredients":"Search Ingredients","Add Custom Recipe":"Add Custom Recipe","Add Note":"Add Note","Add from Collection":"Add from Collection","Start typing to search...":"Start typing to search...","Nutrition Facts":"Nutrition Facts","Are you sure you want to delete all items in":"Are you sure you want to delete all items in","Stop Editing":"Stop Editing","Go Back":"Go Back","Recipe":"Recipe","Shopping List Options":"Shopping List Options","Include ingredient notes":"Include ingredient notes","Preferred Unit System":"Preferred Unit System","Collection":"Collection","Unnamed":"Unnamed","Deselect all":"Deselect all","Select all":"Select all","There are unsaved changes. Are you sure you want to leave this page?":"There are unsaved changes. Are you sure you want to leave this page?","Back":"Back","Right click and copy this link to allow others to edit this shopping list.":"Right click and copy this link to allow others to edit this shopping list.","Make sure to select some recipes for the shopping list first.":"Make sure to select some recipes for the shopping list first.","Generate Shopping List":"Generate Shopping List","The shopping list could not be saved. Try again later.":"The shopping list could not be saved. Try again later.","Save Shopping List":"Save Shopping List","Make sure to save the shopping list before printing.":"Make sure to save the shopping list before printing.","Print Shopping List":"Print Shopping List","Are you sure you want to generate a new shopping list for this collection? You will only be able to access this shopping list again with the share link.":"Are you sure you want to generate a new shopping list for this collection? You will only be able to access this shopping list again with the share link.","Regenerate Shopping List":"Regenerate Shopping List","Are you sure you want to delete this group, and all of the items in it?":"Are you sure you want to delete this group, and all of the items in it?","Your shopping list is empty.":"Your shopping list is empty.","Group":"Group","Edit Shopping List":"Edit Shopping List","Add Collection":"Add Collection","Edit Collections":"Edit Collections","Select a collection to add for this user":"Select a collection to add for this user","Add Saved Collection":"Add Saved Collection","Recipes":"Recipes","A name is required for this saved nutrition ingredient.":"A name is required for this saved nutrition ingredient.","Save a new Custom Ingredient":"Save a new Custom Ingredient","Amount":"Amount","Unit":"Unit","Name (required)":"Name (required)","Save for Later & Use":"Save for Later & Use","Use":"Use","Select a saved ingredient":"Select a saved ingredient","Match this equation to get the correct amounts:":"Match this equation to get the correct amounts:","Cancel Calculation":"Cancel Calculation","Go to Next Step":"Go to Next Step","Use These Values":"Use These Values","Nutrition Calculation":"Nutrition Calculation","n\/a":"n\/a","Values of all the checked ingredients will be added together and":"Values of all the checked ingredients will be added together and","divided by":"divided by","the number of servings for this recipe.":"the number of servings for this recipe.","Values of all the checked ingredients will be added together.":"Values of all the checked ingredients will be added together.","API Ingredients":"API Ingredients","Custom Ingredients":"Custom Ingredients","Recipe Nutrition Facts Preview":"Recipe Nutrition Facts Preview","Changes to these values can be made after confirming with the blue button.":"Changes to these values can be made after confirming with the blue button.","Select or search for a saved ingredient":"Select or search for a saved ingredient","No ingredients set for this recipe.":"No ingredients set for this recipe.","Used in Recipe":"Used in Recipe","Used for Calculation":"Used for Calculation","Nutrition Source":"Nutrition Source","API Match & Units":"API Match & Units","API":"API","Saved\/Custom":"Saved\/Custom","no match found":"no match found","Units n\/a":"Units n\/a","Find a match for:":"Find a match for:","Search":"Search","No ingredients found for":"No ingredients found for","No ingredients found.":"No ingredients found.","Results for":"Results for","This feature is only available in":"This feature is only available in","You need to set up this feature on the WP Recipe Maker > Settings > Unit Conversion page first.":"You need to set up this feature on the WP Recipe Maker > Settings > Unit Conversion page first.","Conversion":"Conversion","Converted":"Converted","Default":"Default","Convert All Automatically":"Convert All Automatically","Convert":"Convert","Keep Unit":"Keep Unit","Automatically":"Automatically","Weight Units":"Weight Units","Volume Units":"Volume Units","Convert...":"Convert...","Ingredient Link Type":"Ingredient Link Type","Global: the same link will be used for every recipe with this ingredient":"Global: the same link will be used for every recipe with this ingredient","Custom: these links will only affect the recipe below":"Custom: these links will only affect the recipe below","Use Global Links":"Use Global Links","Custom Links for this Recipe only":"Custom Links for this Recipe only","Edit Global Links":"Edit Global Links","other recipe(s) affected":"other recipe(s) affected","This can affect other recipes":"This can affect other recipes","Affiliate Link":"Affiliate Link","No link set":"No link set","Edit Link":"Edit Link","Remove Link":"Remove Link","Are you sure you want to delete this link?":"Are you sure you want to delete this link?","Set Affiliate Link":"Set Affiliate Link","Editing Global Ingredient Links":"Editing Global Ingredient Links","Save Changes":"Save Changes","All fields are required.":"All fields are required.","Something went wrong. Make sure this key does not exist yet.":"Something went wrong. Make sure this key does not exist yet.","Are you sure you want to close without saving changes?":"Are you sure you want to close without saving changes?","Editing Custom Field":"Editing Custom Field","Creating new Custom Field":"Creating new Custom Field","Type":"Type","Key":"Key","my-custom-field":"my-custom-field","My Custom Field":"My Custom Field","Save":"Save","A label and key are required.":"A label and key are required.","Editing Nutrient":"Editing Nutrient","Creating new Nutrient":"Creating new Nutrient","Custom":"Custom","Calculated":"Calculated","my-custom-nutrient":"my-custom-nutrient","Label":"Label","My Custom Nutrient":"My Custom Nutrient","mg":"mg","Daily Need":"Daily Need","Calculation":"Calculation","Learn more":"Learn more","Decimal Precision":"Decimal Precision","Editing Custom Taxonomy":"Editing Custom Taxonomy","Creating new Custom Taxonomy":"Creating new Custom Taxonomy","course":"course","Singular Name":"Singular Name","Plural Name":"Plural Name","Courses":"Courses","Loading...":"Loading...","Editing Nutrition Ingredient":"Editing Nutrition Ingredient","Creating new Nutrition Ingredient":"Creating new Nutrition Ingredient","Are you sure you want to overwrite the existing values?":"Are you sure you want to overwrite the existing values?","Import values from recipe":"Import values from recipe","Cancel import":"Cancel import","Use this recipe":"Use this recipe","Edit Taxonomy":"Edit Taxonomy","Delete Taxonomy":"Delete Taxonomy","Are you sure you want to delete":"Are you sure you want to delete","Sort:":"Sort:","Filter:":"Filter:","Edit Recipe Submission":"Edit Recipe Submission","Approve Submission":"Approve Submission","Approve Submission & Add to new Post":"Approve Submission & Add to new Post","Delete Recipe Submission":"Delete Recipe Submission","ID":"ID","Date":"Date","User":"User","Edit Nutrient":"Edit Nutrient","Delete Custom Nutrient":"Delete Custom Nutrient","Active":"Active","View and edit collections for this user":"View and edit collections for this user","User ID":"User ID","Display Name":"Display Name","Email":"Email","# Collections":"# Collections","Show All":"Show All","Has Saved Collections":"Has Saved Collections","Does not have Saved Collections":"Does not have Saved Collections","# Items in Inbox":"# Items in Inbox","# Items in Collections":"# Items in Collections","Your Custom Fields":"Your Custom Fields","Recipe Taxonomy":"Recipe Taxonomy","Recipe Taxonomies":"Recipe Taxonomies","Custom Field":"Custom Field","Custom Fields":"Custom Fields","Custom Nutrition Ingredient":"Custom Nutrition Ingredient","Custom Nutrition":"Custom Nutrition","Custom Nutrient":"Custom Nutrient","Custom Nutrients":"Custom Nutrients","Features":"Features","Saved Collection":"Saved Collection","Saved Collections":"Saved Collections","User Collection":"User Collection","User Collections":"User Collections","Recipe Submissions":"Recipe Submissions","Recipe Submission":"Recipe Submission","Edit Field":"Edit Field","Delete Field":"Delete Field","Edit Custom Ingredient":"Edit Custom Ingredient","Delete Custom Ingredient":"Delete Custom Ingredient","Edit Saved Collection":"Edit Saved Collection","Duplicate Saved Collection":"Duplicate Saved Collection","Delete Saved Collection":"Delete Saved Collection","Save Collection Link":"Save Collection Link","# Items":"# Items"}};
				//]]></script>
								
				<script type='text/javascript' id='wprmp-public-js-extra'>//<![CDATA[
				var wprmp_public={"settings":{"recipe_template_mode":"modern","features_adjustable_servings":true,"adjustable_servings_round_to_decimals":"2","features_comment_ratings":true,"features_user_ratings":false,"user_ratings_force_comment":"never","user_ratings_force_comment_scroll_to":"","servings_changer_display":"tooltip_slider","template_ingredient_list_style":"disc","template_instruction_list_style":"decimal","template_color_icon":"#343434"},"timer":{"sound_dir":"https:\/\/story.motherhood.com.my\/wp-content\/plugins\/wp-recipe-maker-premium\/dist\/","text":{"start_timer":"Click to Start Timer"},"icons":{"pause":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"><g ><path fill=\"#fffefe\" d=\"M9,2H4C3.4,2,3,2.4,3,3v18c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V3C10,2.4,9.6,2,9,2z\"\/><path fill=\"#fffefe\" d=\"M20,2h-5c-0.6,0-1,0.4-1,1v18c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V3C21,2.4,20.6,2,20,2z\"\/><\/g><\/svg>","play":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"><g ><path fill=\"#fffefe\" d=\"M6.6,2.2C6.3,2,5.9,1.9,5.6,2.1C5.2,2.3,5,2.6,5,3v18c0,0.4,0.2,0.7,0.6,0.9C5.7,22,5.8,22,6,22c0.2,0,0.4-0.1,0.6-0.2l12-9c0.3-0.2,0.4-0.5,0.4-0.8s-0.1-0.6-0.4-0.8L6.6,2.2z\"\/><\/g><\/svg>","close":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"><g ><path fill=\"#fffefe\" d=\"M22.7,4.3l-3-3c-0.4-0.4-1-0.4-1.4,0L12,7.6L5.7,1.3c-0.4-0.4-1-0.4-1.4,0l-3,3c-0.4,0.4-0.4,1,0,1.4L7.6,12l-6.3,6.3c-0.4,0.4-0.4,1,0,1.4l3,3c0.4,0.4,1,0.4,1.4,0l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l3-3c0.4-0.4,0.4-1,0-1.4L16.4,12l6.3-6.3C23.1,5.3,23.1,4.7,22.7,4.3z\"\/><\/g><\/svg>"}},"recipe_submission":{"max_file_size":1536000,"text":{"image_size":"The image file is too large"}},"endpoints":{"collections":"https:\/\/story.motherhood.com.my\/wp-json\/wp\/v2\/wprm_collection","collections_helper":"https:\/\/story.motherhood.com.my\/wp-json\/wp-recipe-maker\/v1\/recipe-collections"},"collections":{"default":{"inbox":{"id":0,"name":"Inbox","nbrItems":0,"columns":[{"id":0,"name":"Recipes"}],"groups":[{"id":0,"name":""}],"items":{"0-0":[]}},"user":[]}},"user":"1"};
				//]]></script>

				<link rel='stylesheet' id='wprm-public-css' href='https://story.motherhood.com.my/wp-content/plugins/wp-recipe-maker/dist/public-modern.css' type='text/css' media='all'/>
				<link rel='stylesheet' id='wprmp-public-css' href='https://story.motherhood.com.my/wp-content/plugins/wp-recipe-maker-premium/dist/public-elite.css' type='text/css' media='all'/>
				<script type='text/javascript' src='https://story.motherhood.com.my/wp-content/plugins/wp-recipe-maker/dist/public-modern.js' id='wprm-public-js'></script>
				<script type='text/javascript' src='https://story.motherhood.com.my/wp-content/plugins/wp-recipe-maker-premium/dist/public-elite.js' id='wprmp-public-js'></script>

		<?php
	}

	if ( class_exists ( 'WooCommerce' ) && is_really_woocommerce_page () || ! is_page() ) {
		return $content;
	} else {
		return '<article class="entry-content">'.$content.'</article>';
	}
}
function str_replace_first_mod($from, $to, $content)
{
    $from = '/'.preg_quote($from, '/').'/';
    return preg_replace($from, $to, $content, 1);
}


add_action('the_content','entry_content',10000);



function posts_for_current_author($query) {
        global $pagenow;
  
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
  
    if( !current_user_can( 'manage_options' ) ) {
       global $user_ID;
       $query->set('author', $user_ID );
     }
     return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');


function wpb_search_filter( $query ) {
    if ( $query->is_search && !is_admin() )
        $query->set('post_type', 'post');
    return $query;
}
add_filter( 'pre_get_posts', 'wpb_search_filter' );






    if ( !defined('SAVEQUERIES') && isset($_GET['debug']) && $_GET['debug'] == 'sql' && false )
        define('SAVEQUERIES', true);

    if ( !function_exists('dump') ) :
        /**
         * dump()
         *
         * @param mixed $in
         * @return mixed $in
         **/

        function dump($in = null) {
            echo '<pre style="margin-left: 0px; margin-right: 0px; padding: 10px; border: solid 1px black; background-color: ghostwhite; color: black; text-align: left;">';
            foreach ( func_get_args() as $var ) {
                echo "\n";
                if ( is_string($var) ) {
                    echo "$var\n";
                } else {
                    var_dump($var);
                }
            }
            echo '</pre>' . "\n";
            return $in;
        } # dump()
    endif;

    /**
     * add_stop()
     *
     * @param mixed $in
     * @param string $where
     * @return mixed $in
     **/

    function add_stop($in = null, $where = null) {
        global $sem_stops;
        global $wp_object_cache;
        $queries = get_num_queries();
        $milliseconds = timer_stop() * 1000;
        $out =  "$queries queries - {$milliseconds}ms";
        if ( function_exists('memory_get_usage') ) {
            $memory = number_format(memory_get_usage() / ( 1024 * 1024 ), 1);
            $out .= " - {$memory}MB";
        }
        $out .= " - $wp_object_cache->cache_hits cache hits / " . ( $wp_object_cache->cache_hits + $wp_object_cache->cache_misses );
        if ( $where ) {
            $sem_stops[$where] = $out;
        } else {
            dump($out);
        }
        return $in;
    } # add_stop()


    /**
     * dump_stops()
     *
     * @param mixed $in
     * @return mixed $in
     **/

    function dump_stops($in = null) {

        if ( $_POST )
            return $in;

        global $sem_stops;
        global $wp_object_cache;
        $stops = '';

        foreach ( $sem_stops as $where => $stop )
            $stops .= "$where: $stop\n";

        dump("\n" . trim($stops) . "\n");

        if ( defined('SAVEQUERIES') && $_GET['debug'] == 'sql' ) {
            global $wpdb;
            foreach ( $wpdb->queries as $key => $data ) {
                $query = rtrim($data[0]);
                $duration = number_format($data[1] * 1000, 1) . 'ms';
                $loc = trim($data[2]);
                $loc = preg_replace("/(require|include)(_once)?,\s*/ix", '', $loc);
                $loc = "\n" . preg_replace("/,\s*/", ",\n", $loc) . "\n";
                dump($query, $duration, $loc);
            }
        }

        if ( $_GET['debug'] == 'cache' )
            dump($wp_object_cache->cache);

        if ( $_GET['debug'] == 'cron' ) {
            $crons = get_option('cron');

            foreach ( $crons as $time => $_crons ) {

                if ( !is_array($_crons) )
                    continue;

                foreach ( $_crons as $event => $_cron ) {
                    foreach ( $_cron as $details ) {
                        $date = date('Y-m-d H:m:i', $time);
                        $schedule = isset($details['schedule']) ? "({$details['schedule']})" : '';
                        if ( $details['args'] )
                            dump("$date: $event $schedule", $details['args']);
                        else
                            dump("$date: $event $schedule");
                    }
                }
            }
        }
        return $in;
    } # dump_stops()
	
	/*
    add_action('init', create_function('$in', '
        return add_stop($in, "Load");
        '), 10000000);
    add_action('template_redirect', create_function('$in', '
        return add_stop($in, "Query");
        '), -10000000);
    add_action('wp_footer', create_function('$in', '
        return add_stop($in, "Display");
        '), 10000000);
    add_action('admin_footer', create_function('$in', '
        return add_stop($in, "Display");
        '), 10000000);
*/
    /**
     * init_dump()
     *
     * @return void
     **/

    function init_dump() {
        global $hook_suffix;
        if ( !is_admin() || empty($hook_suffix) ) {
            add_action('wp_footer', 'dump_stops', 10000000);
            add_action('admin_footer', 'dump_stops', 10000000);
        } else {
            add_action('wp_footer', 'dump_stops', 10000000);
            add_action("admin_footer-$hook_suffix", 'dump_stops', 10000000);
        }
    } # init_dump()
    //add_action('wp_print_scripts', 'init_dump');


    /**
     * dump_phpinfo()
     *
     * @return void
     **/

    function dump_phpinfo() {
        if ( isset($_GET['debug']) && $_GET['debug'] == 'phpinfo' ) {
            phpinfo();
            die;
        }
    } # dump_phpinfo()
    //add_action('init', 'dump_phpinfo');


    /**
     * dump_http()
     *
     * @param array $args
     * @param string $url
     * @return array $args
     **/

    function dump_http($args, $url) {
        dump(preg_replace("|/[0-9a-f]{32}/?$|", '', $url));
        return $args;
    } # dump_http()


    /**
     * dump_trace()
     *
     * @return void
     **/

    function dump_trace() {
        $backtrace = debug_backtrace();
        foreach ( $backtrace as $trace )
            dump(
                'File/Line: ' . $trace['file'] . ', ' . $trace['line'],
                'Function / Class: ' . $trace['function'] . ', ' . $trace['class']
                );
    } # dump_trace()
    if ( $_GET['debug'] == 'http' )
        add_filter('http_request_args', 'dump_http', 0, 2);
	

/* make preview url expiration to 30days */
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
 return 60 * 60 * 24 * 30; // 30 days
}