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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41524322-5', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>