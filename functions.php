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
    'main-menu' => __( 'Main Menu' ),
    'footer-left' => __( 'Footer Menu Left' ),
    'footer-right' => __( 'Footer Menu Right' )
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

add_filter('woocommerce_add_to_cart_redirect', 'lessons_add_to_cart_redirect');
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

/**
 * Auto Complete all WooCommerce orders.
 */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}

remove_filter('the_content', 'wpautop');


function add_student_to_course($order_id) {
  // Lets grab the order and the user id
  $order = wc_get_order( $order_id );
  $user_id = $order->user_id;
  
  // This is how to grab line items from the order 
  $line_items = $order->get_items();

  // This loops over line items
  foreach ( $line_items as $item ) {
    // This will be a product
    $product = $order->get_product_from_item( $item );
  
    // This is the product's id
    $pid = $product->id;
    
    // 1376 is the product id from woocommerce. 44 is the course id from sensei
    // If the product id is the one I'm looking for, then put it in the sensei course.
    if($pid == 1376) {
      WooThemes_Sensei_Utils::user_start_course($user_id, 44);
      WooThemes_Sensei_Utils::user_start_course($user_id, 342);
      WooThemes_Sensei_Utils::user_start_course($user_id, 29);
    }
  }
}

add_action( 'woocommerce_order_status_completed', 'add_student_to_course' );

function go_to_mycourses() { ?>
  <div class="mycourses-box">
    Thank you for your purchase. Go to your courses page to get started
    <div class="btn-mycourses"><a href="<?php bloginfo('url');?>/my-courses/">My Courses</a></div>
  </div>
<?php }

add_action( 'woocommerce_thankyou', 'go_to_mycourses', 1);

// Register Free Piano Lessons CPT
function free_piano_lessons() {

  $labels = array(
    'name'                  => _x( 'Free Piano Lessons', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Free Piano Lesson', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Free Piano Lessons', 'text_domain' ),
    'name_admin_bar'        => __( 'Free Piano Lessons', 'text_domain' ),
    'archives'              => __( 'Free Lesson Archives', 'text_domain' ),
    'attributes'            => __( 'Free Lesson Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Lessons', 'text_domain' ),
    'add_new_item'          => __( 'Add New Lesson', 'text_domain' ),
    'add_new'               => __( 'Add New Lesson', 'text_domain' ),
    'new_item'              => __( 'New Lesson', 'text_domain' ),
    'edit_item'             => __( 'Edit Lesson', 'text_domain' ),
    'update_item'           => __( 'Update Lesson', 'text_domain' ),
    'view_item'             => __( 'View Lesson', 'text_domain' ),
    'view_items'            => __( 'View Lessons', 'text_domain' ),
    'search_items'          => __( 'Search Lessons', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $rewrite = array(
    'slug'                  => 'free-lessons',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Free Piano Lesson', 'text_domain' ),
    'description'           => __( 'Free video piano lessons.', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'free piano lesson' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 55,
    'menu_icon'             => 'dashicons-format-video',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'free-lessons',
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'page',
  );
  register_post_type( 'free_piano_lessons', $args );

}
add_action( 'init', 'free_piano_lessons', 0 );

// Add Pagination to archive
function pagination_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination-nav"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="previous">%s</li>' . "\n", get_previous_posts_link('&laquo;') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="next">%s</li>' . "\n", get_next_posts_link('&raquo;') );
 
    echo '</ul></div>' . "\n";
 
}

?>