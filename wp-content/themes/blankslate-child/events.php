<?php /* Template Name: CustomPageT2 */ ?>
<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="sitet-tittle"><?php echo the_title(); ?></div>
<section class="entry-content">
<div class="main-events-page">
<div class="container">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

<div class="row">
	<div class="col-md-3">	
		<?php get_sidebar(); ?>
	</div>
	<div class="col-md-9">	
		<?php the_content(); ?>
	</div>

</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>