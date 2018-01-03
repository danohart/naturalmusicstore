<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>  

<head profile="http://gmpg.org/xfn/11">  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<link rel="icon" href="<?php bloginfo('url');?>/favicon.ico" type="image/x-icon" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"/>

<meta property="og:title" content="<?php wp_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php wp_title(); ?>" />
<meta property="fb:admins" content="595996194" />
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/homevideo.png" />
<meta property="og:url" content="<?php the_permalink(); ?>" />

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1115271365284511',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

<div id="top">
  <div>
    <a href="https://www.facebook.com/Naturalmusiclessons/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="<?php bloginfo('url');?>/contact/"><i class="fa fa-envelope" aria-hidden="true"></i></a>    
  </div>

  <div>
    <?php if ( is_user_logged_in() ) : ?>
      <a href="<?php bloginfo('url');?>/my-courses/">My Courses</a> | <a href="<?php echo wp_logout_url( get_permalink() ); ?>'" title="<?php _e( 'Logout' ); ?>" class="hunderline"><?php _e( 'Logout' ); ?></a>
    <?php else: ?>
      <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Login' ); ?>" class="hunderline"><?php _e( 'Login' ); ?></a>
    <?php endif; ?>
  </div>
</div>

<div id="header">

  <div id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"/></a>
  </div>

  <div id="title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <h1><?php bloginfo('name'); ?></h1>
    </a>
  </div>
<br clear="both"/>
  
</div>
  <ul class="nav">
      <?php wp_nav_menu( array('menu' => 'Main Nav', 'theme_location' => 'main-menu', 'items_wrap' => '%3$s', 'container' => 'false'  )); ?>
    </ul>


    <?php if (is_front_page()) {?>

      <div id="banner">
          <div class="banner-info">
            <h2>START LEARNING<br/>GOSPEL PIANO TODAY!</h2>
            <p>Take your piano playing to the next level by receiving <br/>Natural Music’s piano video lessons right on your computer, tablet, or phone.</p>
            <a class="btn" href="<?php bloginfo('url');?>/courses-overview/">Get Started</a>
          </div>
          <div class="banner-info">
            <script type="text/javascript">
    var embedCode = '<iframe width="590" height="332" src="https://www.youtube.com/embed/pydQC0K2ZPw?rel=0&autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'
            </script>
            <div id="videocontainer" class="videoWrapper">
              <img src="<?php bloginfo('template_url');?>/images/homevideo.png" onclick="document.getElementById('videocontainer').innerHTML = embedCode;"/>
            </div>
            <a class="btn" onclick="document.getElementById('videocontainer').innerHTML = embedCode;">Watch Video</a>
          </div>
      </div>

      <div id="homesection">
      <h2 align="center">Here's How It Works</h2>
      <div id="homesection-wrapper">
        <div class="sec">
          <h2><i class="fa fa-th-list" aria-hidden="true"></i></h2>
          <p>We break down each video lesson into easy to learn sections</p>
        </div>
        <div class="sec">
          <h2><i class="fa fa-file-text" aria-hidden="true"></i></h2>
          <p>An instructor walks you through each video lesson with a PDF chord chart (No sheet music reading is required)</p>
        </div>
        <div class="sec">
          <h2><i class="fa fa-music" aria-hidden="true"></i></h2>
          <p>You learn by playing along with the video lessons or a downloadable mp3 backing track.</p>
        </div>
      </div>
      </div>

      <div id="newsletter">
        <h2 align="center">Want to receive free tutorials?</h2>
        <p align="center">Get a free tutorial delivered right to your inbox <span>each month!</span><br/>Sign up now!</p>
        <div class="mc-field-group">
<form id="mc-embedded-subscribe-form" class="validate" action="//naturalmusicstore.us12.list-manage.com/subscribe/post?u=3555d06362fd1009fbd0784ad&amp;id=ff59552330" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
          <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL">
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="mailchimp_btn">
   </form>
        </div>
      </div>

    <?php } else { ?>

      
    <?php } ?>
