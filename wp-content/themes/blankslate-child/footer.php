<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
	<div class="footer-main">
		<div class="container">
			   <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="primary" class="widget-area">
				<ul class="xoxo">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</ul>
				</div>
				<?php endif; ?>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="footer-logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png"></a></div>
				</div>
				<div class="col-sm-10">
					<div class="copyright-sec">
						<?php echo sprintf( __( '%1$s  Copyright  %2$s | %3$s  ', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' %1$s', 'blankslate' ), '' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>
</div>
<?php wp_footer(); ?>




</body>
</html>