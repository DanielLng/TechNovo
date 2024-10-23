<?php

//add actions
/////////////
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );//add to the header the related styles files
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );//add to the very bottom of the html the related code files
add_action( 'after_setup_theme', 'woocommerce_support' );//add woocommerce support
add_action( 'template_redirect', 'remove_woocommerce_styles_scripts', 999 );// remove all scripts from none woocommerce pages
add_action( 'wp_head', 'gtm',20 );//add gtm tag

//add Filters
//////////////
add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );//remove fields from checkout

//add Functions
///////////////
function wpt_theme_styles() {// get the necesary files for the style of the theme

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', 'all' );
	
}


function wpt_theme_js() {// get the necesary code files for the theme to work 
	
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/code/general/code.js', array('jquery'), '', true );

}
function woocommerce_support() {// add support
    add_theme_support( 'woocommerce' );
}

function gtm(){ //add google tag mannager?>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5MPFZLK');</script>
      <!-- End Google Tag Manager -->  
<?php }

/************************************************************
*********************WOOCOMMERCE*****************************
********help functions to start any soowommerce store*******
***********************************************************/

function remove_woocommerce_styles_scripts() {// remove all scripts from none woocommerce pages
    if ( function_exists( 'is_woocommerce' ) ) {
        if (  ! is_cart() && ! is_checkout() ) {
            remove_action('wp_enqueue_scripts', [WC_Frontend_Scripts::class, 'load_scripts']);
            remove_action('wp_print_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
            remove_action('wp_print_footer_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
        }
    }
}
function custom_remove_woo_checkout_fields( $fields ) {//remove fields from checkout
   if ( function_exists( 'is_woocommerce' ) ) {
      // remove billing fields
      //unset($fields['billing']['billing_first_name']);
      unset($fields['billing']['billing_last_name']);
      unset($fields['billing']['billing_company']);
      //unset($fields['billing']['billing_address_1']);
      //unset($fields['billing']['billing_address_2']);
      //unset($fields['billing']['billing_city']);
      //unset($fields['billing']['billing_postcode']);
      //unset($fields['billing']['billing_country']);
      //unset($fields['billing']['billing_state']);
      unset($fields['billing']['billing_phone']);
      //unset($fields['billing']['billing_email']);
      
      
      // remove order comment fields
      unset($fields['order']['order_comments']);
      
      return $fields;
  }
}

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Ajustes generales',
      'menu_title'    => 'Ajustes generales',
      'menu_slug'     => 'general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));

}

?>

