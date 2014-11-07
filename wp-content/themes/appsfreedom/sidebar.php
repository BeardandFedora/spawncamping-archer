<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Blain
 */
?>
<?php			
$this_category = get_the_category($post->ID);
if ($this_category[0]->category_parent !=0){
	$category_parent= $this_category[0]->category_parent;
} else {
	$category_parent=0;
}
?>
<a href="<?php echo get_permalink(28); ?>">
	<img src="<?php bloginfo('template_url'); ?>/img/learning-cta.jpg" alt="" class="img-responsive" />
</a><br />

<div class="newsletter-sidebar">
	<p>Subscribe to our<br /><strong>Newsletter</strong></p>
	<form accept-charset="UTF-8" action="https://cn187.infusionsoft.com/app/form/process/aed5c39341a27a0f72f28760505cd2c4" class="infusion-form" method="POST">
	    <input name="inf_form_xid" type="hidden" value="aed5c39341a27a0f72f28760505cd2c4" />
	    <input name="inf_form_name" type="hidden" value="Sign up for newsletter" />
	    <input name="infusionsoft_version" type="hidden" value="1.34.0.40" />
	    <div class="infusion-field">
	        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" placeholder="Enter your email address" />
	    </div>
	    <div class="infusion-submit">
	        <button type="submit" class="btn primary-button">Subscribe</button>
	    </div>
	</form>
	<script type="text/javascript" src="https://cn187.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=8ffcdcef42e5987db0c2fe64bd..."></script>
</div>
<div class="sidebar-panel social">
	<h3>Follow Us</h3>

		<a href="https://twitter.com/appsfreedom" class="social-icon" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-icons/twitter.gif" alt="" /></a>
		<a href="https://plus.google.com/108643044171592545922/posts?partnerid=gplp0" class="social-icon" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-icons/gplus.gif" alt="" /></a>
		<a href="https://www.facebook.com/appsFreedom" class="social-icon" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-icons/facebook.gif" alt="" /></a>
</div>
<div class="sidebar-panel">
	<h3>Topics</h3>
	<ul>
		<?php 


			wp_list_categories( array('hide_empty' => 1, 'exclude' => '1', 'title_li' => '', 'child_of' =>  $this_category[0]->category_parent) ); ?> 
	</ul>
</div>
<?php if (is_single()): ?>
<div class="sidebar-panel">
	<?php related_posts() ?>
</div>
<?php endif; ?>