<?php
/**
 * The template for displaying search forms in _s
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
 */
?>

<div class="search-form">
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <input type="text" name="s" id="s" value="<?php _e( 'Search', 'themetext' ); ?>" onfocus="if(this.value=='<?php _e( 'Search', 'themetext' ); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e( 'Search', 'themetext' ); ?>';" style="color: #000;background-color: #fff;border-radius: 20px;margin-bottom: 0px;padding-bottom: 0px;border-bottom-width: 2px;border-bottom-style: solid;border-top-width: 2px;border-top-style: solid;border-left-width: 2px;border-left-style: solid;border-right-width: 2px;border-right-style: solid;border-color: #777;height: 40px;display: inline;margin-top: 5px;"/>
        <button type="submit">
            <i class="icomoon-search" style="color: #000;"></i>
        </button>
    </form>
    
    <div class="mobile-search-button"></div>
</div>