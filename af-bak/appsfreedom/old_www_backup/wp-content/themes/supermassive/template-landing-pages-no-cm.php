<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Landing Pages with Youtube Video Embed
*/ 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title><?php wp_title('&laquo;', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="/lp-assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="/lp-assets/css/prettyPhoto.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/lp-assets/js/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/lp-assets/css/tipsy.css" media="all" />

	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="screen" href="presentation/ie.css" />
	<![endif]-->
	<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
	<!-- jQuery Script -->
	<script type="text/javascript" src="/lp-assets/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/lp-assets/js/jquery.validate.min.js"></script>

    <script type="text/javascript" src="/lp-assets/js/twitter.js"></script>
	<script type="text/javascript" src="/lp-assets/js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="/lp-assets/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/lp-assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/lp-assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="/lp-assets/js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="/lp-assets/js/function.js"></script>

<script type="text/javascript"> $(document).ready(function(){ $("#subForm").validate(); }); </script>

<style>
	label.error {
		color: #990000;
		margin-left: 100px;
	}
</style>

</head>

<body id="template-lp-yt"  <?php body_class(); ?>>

    <!-- start of wrap -->
	<div class="wrap">

        <!-- start of header -->
		<div id="header">
		    <img src="/lp-assets/images/logo-appsfreedom.png" alt="appsFreedom" />
	

			<div class="phone_number">
            <?php $ctatop="ctatop"; echo get_post_meta($post->ID, $ctatop, true); ?>
            </div>

   		</div>
		<!-- end of header -->
	</div>
	<!-- end of wrap -->

    <!-- start of featured_area -->
	<div id="featured_area">

        <!-- start of wrap -->
        <div class="wrap">
        
        
         <!-- start of featured_text -->
            <div class="featured_text">
				<h1><?php the_title(); ?></h1>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			
			<iframe width="920" height="518" src="http://www.youtube.com/embed/<?php $youtube="youtube"; echo get_post_meta($post->ID, $youtube, true); ?>?rel=0" frameborder="0" allowfullscreen></iframe>
			
			
			
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>		
          
                         

			</div>
			<!-- end of featured_text -->
        
        

  <div class="featured_form">
     <h4><?php $formtitle="formtitle"; echo get_post_meta($post->ID, $formtitle, true); ?></h4>         
 	 <?php $form="form"; echo get_post_meta($post->ID, $form, true); ?>
  </div>
  
   <div id="formfooter">
  <?php $formfooter="formfooter"; echo get_post_meta($post->ID, $formfooter, true); ?>   
  </div> 
  





           

		</div>
		<!-- end of wrap -->

	</div>
	<!-- end of featured_area -->



	

    <!-- start of wrap -->
	<div class="wrap">

    <!-- start of footer -->
	<div id="footer">



        <!-- start of content_mid -->
        <div class="content_mid">

        <!-- start of footer_area -->
        <div class="footer_area">

        <!-- start of wrap -->
        <div class="wrap">

		

           
            <div class="clear"></div>

			

            <!-- start of copyright -->
            <div class="copyright">
                 <p>&copy;<?php echo date("Y");?> appsFreedom. All rights reserved.</p>
            </div>
            <!-- end of copyright -->

            <!-- start of social -->
            <div class="social">
				<ul>
                <!-- replace "#" below with appropriate link -->
                        	<li><a href="https://www.facebook.com/pages/SEAL-Innotech/150054508397082" title="facebook"><img src="/lp-assets/images/social/facebook_32.png" width="32" height="32" alt="facebook" title="facebook" class="social"/></a></li>
            	<li><a href="http://twitter.com/#!/appsFreedom" title="twitter"><img src="/lp-assets/images/social/twitter_32.png" width="32" height="32" alt="twitter" title="twitter" /></a></li>
  				<li><a href="http://www.linkedin.com/company/1044934?trk=tyah" title="linkedin"><img src="/lp-assets/images/social/linkedin_32.png" width="32" height="32" alt="linkedin" title="linkedin" /></a></li>
				</ul>
            </div>
			<!-- end of social -->

        </div>
        <!-- end of wrap -->



        </div>
		<!-- end of footer_area -->

		</div>
		<!-- end of content_mid -->



	</div>
	<!-- end of footer -->

	</div>
	<!-- end of wrap -->


            

</body>


</html>
