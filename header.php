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

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '727938030719382'); 
    fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=727938030719382&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-NH68SJM':true});</script>

</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

<div id="top">
  <div>
    <a href="https://www.facebook.com/Naturalmusiclessons/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="<?php bloginfo('url');?>/contact/"><i class="fa fa-envelope" aria-hidden="true"></i></a>    
  </div>

  <div>
    <?php if ( is_user_logged_in() ) : ?>
      <a href="<?php bloginfo('url');?>/my-courses/" class="primary-link">My Courses</a><a href="<?php echo wp_logout_url( get_permalink() ); ?>'" title="<?php _e( 'Logout' ); ?>"><?php _e( 'Logout' ); ?></a>
    <?php else: ?>
      <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e( 'Login' ); ?>" class="primary-link"><?php _e( 'Login' ); ?></a>
    <?php endif; ?>
  </div>
</div>

<div id="header">

  <div id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"/></a>
  </div>

  <div id="title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <h1>Natural Music</h1>
    </a>
  </div>
  <br clear="both"/>
</div>
    <!-- Start of navigation toggle -->
      <input id="navigation-checkbox" class="navigation-checkbox" type="checkbox">
      <label class="navigation-toggle" for="navigation-checkbox">
        <span class="navigation-toggle-icon"></span>
        <span class="navigation-toggle-label">Menu</span>
      </label>
    <!-- End of navigation toggle -->

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
          <p>You learn by playing along with the video lessons.</p>
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

      <div class="testimonial-wrap">
        <h2 align="center">What Others Are Saying About These Lessons</h2>
    
        <div class="testimonial">I'm happy to find your online courses, they are impressive and easy structured God bless you. <span>- Kiyenze J.</span></div>

        <div class="testimonial">You were a great help in getting me started playing the piano once again. I now play for my church every Sunday. <span>- Aline B. </span></div>

        <div class="testimonial">I wanted to thank you for putting this course together. It's amazing. I hope that you continue to teach others to play. I'm having so much fun learning this way after giving up on traditional lessons 30 years ago. <span>- Trey A.</div>
      </div>

    <?php } else { ?>

      
    <?php } ?>
