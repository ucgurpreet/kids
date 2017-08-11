<aside id="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">
			<ul class="xoxo">
			<?php //dynamic_sidebar( 'primary-widget-area' ); ?>
			<div class="events-bottom-sec"><?php echo do_shortcode('[contact-form-7 id="57" title="events from"]'); ?></div>
			<div class="side-img">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/side-bar-img.jpg"/>
			</div>
			</ul>
		</div>
	<?php endif; ?>
</aside>