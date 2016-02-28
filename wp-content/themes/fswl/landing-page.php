<?php
/* Template Name: Landing page template */
?>

<?php get_header();?>

<div class="hero"></div>

<article class="intro">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?> 
<article>
<article id="upcoming">
    <h2>Exhibitions dates</h2>
    
</article>

<?php get_footer();?>