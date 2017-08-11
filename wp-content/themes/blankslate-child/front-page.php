<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php//the_ID(); ?>" <?php //post_class(); ?>>

<section class="entry-content">
<div class="container">
<?php the_content(); ?>
</div>

</section>
</article>
<?php //if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>