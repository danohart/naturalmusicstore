<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>  

<head profile="http://gmpg.org/xfn/11">  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<link rel="icon" href="<?php bloginfo('url');?>/favicon.ico" type="image/x-icon" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 

<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"/>

<meta property="og:title" content="<?php wp_title(); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:site_name" content="<?php wp_title(); ?>"/>
<meta property="fb:admins" content="595996194" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<?php wp_head(); ?>

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
        <div id="banner-color">
          <div class="banner-info">
            START LEARNING<br/>GOSPEL PIANO TODAY!
          </div>
          <span>
            Take your piano playing to the next level by receiving Natural Music’s <br/>piano video lessons right on your computer, tablet, or phone.
          </span>
            <a class="btn" href="<?php bloginfo(url);?>/courses-overview/">Get Started</a>
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
