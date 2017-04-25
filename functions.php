<?php  

 if ( function_exists('register_sidebar') )
   register_sidebar(array(
    'name' => 'Right Sidebar',
    'id' => 'right-sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
   ));

 if ( function_exists('register_sidebar') )
   register_sidebar(array(
    'name' => 'Top Bar',
    'id' => 'top-bar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
   ));

 if ( function_exists('register_sidebar') )
   register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
   ));

function diw_post_thumbnail_feeds($content) {

	global $post;

	if(has_post_thumbnail($post->ID)) {

		$content = '<div>' . get_the_post_thumbnail($post->ID) . '</div>' . $content;

	}

	return $content;

}

add_filter('the_excerpt_rss', 'diw_post_thumbnail_feeds');

add_filter('the_content_feed', 'diw_post_thumbnail_feeds');

add_theme_support( 'menus' );

function register_my_menus() {
register_nav_menus(
array(
'main-menu' => __( 'Main Menu' )
)
);
}

add_action( 'init', 'register_my_menus' );

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true );

add_image_size( 'pages', 720, 300, true ); 
}

function natural_login_logo() { ?>
    <style type="text/css">
        body {
          background: #3c6898 !important;
        }
        .login #backtoblog a, .login #nav a {
          color:#FFF !important;
        }
        #login h1 a, .login h1 a {
          background-image: url(<?php bloginfo('template_url');?>/images/logo.png);
          width: 100%;
          background-size: 37%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'natural_login_logo' );

global $woothemes_sensei;
remove_action( 'sensei_before_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper' ), 10 );
remove_action( 'sensei_after_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper_end' ), 10 );

add_action('sensei_before_main_content', 'natural_theme_wrapper_start', 10);
add_action('sensei_after_main_content', 'natural_theme_wrapper_end', 10);

function natural_theme_wrapper_start() {
  echo '<div id="container"><div id="content" role="main">';
}

function natural_theme_wrapper_end() {
  echo '</div><!-- #content -->
  </div><!-- #container -->';
}


add_action('woocommerce_after_customer_login_form', 'get_started_button', 10);

add_action('sensei_course_archive_main_content', 'get_started_button', 10);

function get_started_button() {
  echo '<div align="center"><h2>Looking for online lessons?</h2><br/><p>Bring your skills to the next level. Click the get started button to sign up for all available lessons.</p><a class="btn" href="https://www.naturalmusicstore.com/courses-overview/">Get Started</a></div>';
}

add_filter( 'single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
function woo_custom_cart_button_text() {
  return __( 'Start Course', 'woothemes-sensei' );
}

add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );
function wpa83367_price_html( $price, $product ){
    return '';
}

add_filter('add_to_cart_redirect', 'lessons_add_to_cart_redirect');
function lessons_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = $woocommerce->cart->get_checkout_url();
 return $checkout_url;
}

add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>