<footer class="main-footer">
	<div class="footer-wrap">
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
		</div>

		<div class="footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
		</div>

		<div class="newsletter">
			<h2>Want to receive free tutorials?</h2>
			<p>Get a <strong>free tutorial</strong> delivered right to your inbox each month...sign up now!</p>
			<div class="mc-field-group">
	          <form id="mc-embedded-subscribe-form" class="validate" action="//naturalmusicstore.us12.list-manage.com/subscribe/post?u=3555d06362fd1009fbd0784ad&amp;id=ff59552330" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
	          <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">
	          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="mailchimp_btn">
	          </form>
	        </div>
		</div>
	</div>

	<div class="copyright">
		<!-- <div class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo-black.png"/></div> -->
    	&copy;&nbsp;<?php echo date("Y"); ?>&nbsp;<?php bloginfo('name'); ?>
    </div>
</footer>

<?php wp_footer();?>


<?php if ( is_user_logged_in() ) { 
    // Do Nothing
} else {

	if ( is_front_page() OR is_page('courses-overview') ) { ?>
	<div id="popup" class="popup mfp-hide zoom-anim-dialog">
		<h3>Hang on a second...</h3>
	  	<p>If you're not ready to take your playing to the next level, then join the <strong>3,945 piano players</strong> that are getting free lessons delivered to their inboxes.</p>
	  	<div class="mc-field-group">
	    	<form id="mc-embedded-subscribe-form" class="validate" action="//naturalmusicstore.us12.list-manage.com/subscribe/post?u=3555d06362fd1009fbd0784ad&amp;id=ff59552330" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
	        	<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">
	        	<div align="center">
	        		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="mailchimp_btn">
	        	</div>
	        </form>
	  	</div>
	  <small class="mfp-bottom">
	  	<span class="mfp-login">Already signed up? <a href="<?php bloginfo('url');?>/my-account/">Login</a></span> 
	  	<a href="" class="mfp-close">Nah, close this</a>
	  </small>
	</div>

	<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
	<script type='text/javascript' src="<?php bloginfo('template_url');?>/js/magnific.js"></script>
	<?php }
} // End if user is logged in
?>
<script type='text/javascript' src="<?php bloginfo('template_url');?>/js/script.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41524322-5', 'auto');
  ga('require', 'GTM-NH68SJM');
  ga('send', 'pageview');
</script>

</body>
</html>