<?php get_header(); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
   	
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12 col-sm-12 padbot20">
								
				<?php the_content(); ?>
				
			</div>
		</div>
		<!-- ROW -->
	</div>
	<!-- CONTAINER -->
	
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
