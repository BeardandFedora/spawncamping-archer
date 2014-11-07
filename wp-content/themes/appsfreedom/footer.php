<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Blain
 */
?>
	</div>
	<section class="bg-light-blue footer-cta">
		<div class="container text-center">
			<a type="button" href="<?php echo get_permalink(28); ?>" class="btn primary-button">Take A Test Drive <span class="btn-arrow"></a></button>
			<a href="<?php echo get_permalink(22); ?>" class="btn btn-lg btn-link">Platform Tour <i class="glyphicon glyphicon-chevron-right"></i></a>
			<a href="<?php echo get_permalink(5); ?>" class="btn btn-lg btn-link">Learning Center <i class="glyphicon glyphicon-chevron-right"></i></a>
		</div>
	</section>  
	<footer class="bg-md-blue">
	<div class="footer-logo">
		<a href="/" class="btn btn-link btn-xs">
			<img src="<?php bloginfo('template_url'); ?>/img/logo-footer-big.png" alt="" />
		</a>
	</div>
	<nav role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 visible-lg footer-bg">
					<!--<img src="/img/george.png" alt="" />-->
					<img src="<?php bloginfo('template_url'); ?>/img/SuperGeorge_300px.png" alt="" />
				</div>
					
				<div class="col-lg-2 col-sm-3 ">
					<dl>
						<dt>Company</dt>
						<dd><a href="/">Home</a></dd>
						<dd><a href="<?php echo get_permalink(26); ?>">About Us</a></dd>
						<dd><a href="<?php echo get_permalink(32); ?>">Contact Us</a></dd>
						<dd><a href="<?php echo get_permalink(34); ?>">Software Vendors</a></dd>
						
					</dl>
				</div>
		
				<div class="col-lg-2 col-sm-3 ">
					<dl>
						<dt>Platform</dt>
						<dd><a href="<?php echo get_permalink(22); ?>">Platform Tour</a></dd>
						<dd><a href="<?php echo get_permalink(24); ?>">App Library</a></dd>
						<dd><a href="<?php echo get_permalink(28); ?>">Test Drive</a></dd>
						
					</dl>
				</div>
				<div class="col-lg-2 col-sm-3 ">
					<dl>
						<dt>Resources</dt>
						<dd><a href="/learn">Learning Center</a></dd>
						<dd><a href="/blog">Blog</a></dd>
					</dl>
				</div>
				<div class="col-lg-2 col-sm-3 ">
					<dl>
						<dt>Social</dt>
						<dd><a href="https://twitter.com/appsfreedom" target="_blank">Twitter</a></dd>
						<dd><a href="https://plus.google.com/108643044171592545922/posts?partnerid=gplp0" target="_blank">Google+</a></dd>
						<dd><a href="https://www.facebook.com/appsFreedom" target="_blank">Facebook</a></dd>
						<dd><a href="http://www.linkedin.com/company/appsfreedom" target="_blank">LinkedIn</a></dd>
					</dl>
				</div>
			</div>
		</div>
	</nav>
	<div class="copyright bg-dark-blue">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<small>appsFreedom Copyright © 2014 appsFreedom™ Inc</small>
					<small><a href="<?php echo get_permalink(36); ?>">Privacy</a></small>
				</div>
				<div class="col-md-6 cred">
					<small>Site by <a href="http://lean-labs.com/?utm_source=client&utm_medium=clientsite&utm_content=appsfreedom&utm_campaign=clientsite" target="_blank">Lean Labs</a></small>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29814314-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
var _mfq = _mfq || [];
(function () {
	var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
	mf.src = "//cdn.mouseflow.com/projects/9fecae70-6eba-47bb-843e-a2ee5bff3133.js";
	document.getElementsByTagName("head")[0].appendChild(mf);
})();
</script>
</body>
</html>