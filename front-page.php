<?php get_header(); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

<!-- SLIDER -->
<div class="slider_block">
	<div class="flexslider top_slider">
		<ul class="slides">
			<li class="slide1">
				<div class="container">
					<div class="caption_middle clearfix">
						<div class="caption_img1 FromLeft"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/caption_img1.png" alt="" /></div>
						<div class="flex_caption1 FromRight">
							<p>Автоматизация, учет, контроль</p>
							<span>Разработка систем управления, контроля, учета и автоматизация предприятий среднего и малого бизнеса</span>
						</div>
					</div>
				</div>
			</li>
			<li class="slide2">
				<div class="container">
					<div class="caption_middle clearfix">
						<div class="caption_img2 FromTop"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/caption_img2.png" alt="" /></div>
						<div class="flex_caption1 FromBottom">
							<p><b>Ваши идеи</b> - наши решения!</p>
							<a class="btn btn-active btn-lg" href="javascript:void(0);" >Отправить заявку</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<!-- //SLIDER -->

<!-- INFORM BLOCK -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 padbot20" data-appear-top-offset="-100" data-animated="fadeInLeft">
				
				<?php the_content(); ?>
												
			</div>
		</div>
		<!-- ROW -->
	</div>
	<!-- CONTAINER -->
</section>
<!-- INFORM BLOCK -->


<!-- SERVICES -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row padbot20" data-appear-top-offset="-100" data-animated="fadeInUp">			
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 center">
				<?php if (!dynamic_sidebar( 'w1-from-text1' ) ) : ?>
                	<?php dynamic_sidebar( 'w1-from-text1' ); ?>
                <?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 center">
				<?php if (!dynamic_sidebar( 'w2-from-text1' ) ) : ?>
                	<?php dynamic_sidebar( 'w2-from-text1' ); ?>
                <?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 center">
				<?php if (!dynamic_sidebar( 'w3-from-text1' ) ) : ?>
                	<?php dynamic_sidebar( 'w3-from-text1' ); ?>
                <?php endif; ?>
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //SERVICES -->

<!-- INFORM BLOCK -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 padbot20" data-appear-top-offset="-100" data-animated="fadeInLeft">
				
				<?php if (!dynamic_sidebar( 'w1-from-text2' ) ) : ?>
					<?php dynamic_sidebar( 'w1-from-text2' ); ?>
				<?php endif; ?>
												
			</div>
		</div>
		<!-- ROW -->
	</div>
	<!-- CONTAINER -->
</section>
<!-- INFORM BLOCK -->

<!-- SERVICES -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row padbot20" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 service_item center">
				<a href="javascript:void(0);" >
					<?php if (!dynamic_sidebar( 'w1-from-text' ) ) : ?>
                        <?php dynamic_sidebar( 'w1-from-text' ); ?>
                    <?php endif; ?>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 service_item center">
				<a href="javascript:void(0);" >
					<?php if (!dynamic_sidebar( 'w2-from-text' ) ) : ?>
                        <?php dynamic_sidebar( 'w2-from-text' ); ?>
                    <?php endif; ?>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 service_item center">
				<a href="javascript:void(0);" >
					<?php if (!dynamic_sidebar( 'w3-from-text' ) ) : ?>
                        <?php dynamic_sidebar( 'w3-from-text' ); ?>
                    <?php endif; ?>
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 service_item center">
				<a href="javascript:void(0);" >
					<?php if (!dynamic_sidebar( 'w4-from-text' ) ) : ?>
                        <?php dynamic_sidebar( 'w4-from-text' ); ?>
                    <?php endif; ?>
				</a>
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //SERVICES -->

<!-- INFORM BLOCK -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 padbot20" data-appear-top-offset="-100" data-animated="fadeInRight">
				
				<?php if (!dynamic_sidebar( 'w1-from-text3' ) ) : ?>
					<?php dynamic_sidebar( 'w1-from-text3' ); ?>
				<?php endif; ?>
												
			</div>
		</div>
		<!-- ROW -->
	</div>
	<!-- CONTAINER -->
</section>
<!-- INFORM BLOCK -->


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
