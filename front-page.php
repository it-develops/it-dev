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
							<p>say something wonderful here</p>
							<span>Aliquam tempus est sit amet orci porta condimentum. Quisque hendrerit velit erat, in bibendum eros ultricies sit amet. Sed tempor</span>
						</div>
					</div>
				</div>
			</li>
			<li class="slide2">
				<div class="container">
					<div class="caption_middle clearfix">
						<div class="caption_img2 FromTop"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/caption_img2.png" alt="" /></div>
						<div class="flex_caption1 FromBottom">
							<p>Say something <b>Wonderful here</b></p>
							<a class="btn btn-active btn-lg" href="javascript:void(0);" >call to action</a>
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
<section class="services_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row" data-appear-top-offset="-100" data-animated="fadeInUp">
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


<!-- RECENT PROJECTS -->
<section class="projects_block">
	<!-- CONTAINER -->
	<div class="container">
		<h2 class="center">Our latest projects</h2>

		<!-- filter_block -->
		<div id="options">
			<ul id="filter" class="option-set" data-option-key="filter">
				<li><a class="selected" href="#filter" data-option-value="*">All</a></li>
				<li><a href="#filter" data-option-value=".web">Web</a></li>
				<li><a href="#filter" data-option-value=".print">Print</a></li>
				<li><a href="#filter" data-option-value=".design">Design</a></li>
				<li><a href="#filter" data-option-value=".photography">Photography</a></li>
			</ul>
		</div>
		<!-- //filter_block -->

		<!-- LATEST PROJECTS -->
		<div class="latest_projects" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="element web">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/1.jpg" alt="" />
						<a class="zoom" href="images/projects/1.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>

			<div class="element print">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/2.jpg" alt="" />
						<a class="zoom" href="images/projects/2.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>

			<div class="element design">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/3.jpg" alt="" />
						<a class="zoom" href="images/projects/3.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>

			<div class="element photography">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/4.jpg" alt="" />
						<a class="zoom" href="images/projects/4.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>

			<div class="element web">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/5.jpg" alt="" />
						<a class="zoom" href="images/projects/5.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>

			<div class="element print">
				<div class="project_item">
					<div class="hover_img">
						<img src="images/projects/6.jpg" alt="" />
						<a class="zoom" href="images/projects/6.jpg" rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="project_descr">
						<a href="javascript:void(0);" >Lorem Ipsum</a>
						<span>Sed ac posuere est. Integer sagittis turpis sed risus porta, vel cursus augue interdum. Cras et consequat mauris. Praesent in</span>
					</div>
				</div>
			</div>
		</div>
		<!-- //LATEST PROJECTS -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //RECENT PROJECTS -->

<!-- INFORM BLOCK -->
<section class="inform_block">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 padbot50" data-appear-top-offset="-100" data-animated="fadeInLeft">
				<h2>Our Skills</h2>

				<!-- OUR SKILLS -->
				<div class="our-skills">
					<div class="skill_item">
						<span>Illustrator</span>
						<div class="skill-bar" href="javascript:void(0);" alt="">
							<div class="progress-complete" data-width="65%"></div>
						</div>
					</div>
					<div class="skill_item">
						<span>Photoshop</span>
						<div class="skill-bar" href="javascript:void(0);" alt="">
							<div class="progress-complete" data-width="45%"></div>
						</div>
					</div>
					<div class="skill_item">
						<span>HTML5</span>
						<div class="skill-bar" href="javascript:void(0);" alt="">
							<div class="progress-complete" data-width="75%"></div>
						</div>
					</div>
					<div class="skill_item">
						<span>Wordpress</span>
						<div class="skill-bar" href="javascript:void(0);" alt="">
							<div class="progress-complete" data-width="35%"></div>
						</div>
					</div>
				</div>
				<!-- //OUR SKILLS -->
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 padbot50 about_block" data-appear-top-offset="-100" data-animated="fadeInRight">
				<h2>About Us</h2>

				<img class="about_img1" src="images/about_img1.png" alt="" />

				<div class="about_block_content">
					<p>Aliquam tempus est sit amet orci porta condimentum. Quisque hendrerit velit erat, in bibendum eros ultricies sit amet. Sed tempor hendrerit purus vitae vestibulum. Nunc egestas justo nec enim mollis, sed dictum nisi luctus.</p>
					<p>Vestibulum velit libero, cursus vel imperdiet nec, dapibus eget risus. Fusce aliquet convallis mi vel sodales. Integer tristique sapien quis congue facilisis. Nam risus tellus, aliquam a massa et, pharetra gravida felis. Morbi sollicitudin convallis nibh a elementum. Duis vehicula magna augue, sed dictum nisi malesuada vitae. Quisque pulvinar sapien ut congue</p>
				</div>
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- INFORM BLOCK -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
