<?php get_header(); ?>

<main id="content" role="main">
  

  <div class="maxwidth">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
  </div>
	
	<footer class="footer">
		<?php get_template_part( 'nav', 'below-single' ); ?>
	</footer>
	
</main>

 
<?php get_footer(); ?>